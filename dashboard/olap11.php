<?php
session_start();
//echo $_SESSION['var'];
include('connection.php');

$ChartHeading = 'Total Revenue on Country-State';

$RollupName = 'Country';

$XaxisName = 'Location';


$drilldown_file_name=$_SESSION['drilldownfile'];


$series_f_key = $_SESSION['series_f_key'];

$series_p_key = $_SESSION['series_p_key'];

$series_name = $_SESSION['series_name']; 

$series_table = $_SESSION['series_table'];


$horizontal_axis_name = $_SESSION['horizontal_axis_name'];

$horizontal_axis_table = $_SESSION['horizontal_axis_table'];

$horizontal_axis_f_key = $_SESSION['horizontal_axis_f_key'];

$horizontal_axis_p_key = $_SESSION['horizontal_axis_p_key'];

$drilldown_horizontal_axis_name = $_SESSION['drilldown_horizontal_axis_name'];

$drilldown_horizontal_axis_table = $_SESSION['drilldown_horizontal_axis_table'];

/*
$series_f_key = 'location';

$series_p_key = 's_key';

$series_name = 'country'; 

$series_table = 'state';
*/

/*
$series_f_key = 'product';

$series_p_key = 'p_key';

$series_name = 'product'; 

$series_table = 'product';


$series_f_key = 'time_month';

$series_p_key = 'm_key';

$series_name = 'time_year'; 

$series_table = 'month';
*/

/*
$horizontal_axis_name = 'time_year';

$horizontal_axis_table = 'month';

$horizontal_axis_f_key = 'time_month';

$horizontal_axis_p_key = 'm_key';

$drilldown_horizontal_axis_name = 'description';

$drilldown_horizontal_axis_table = 'month cross join year';
*/

/*
$horizontal_axis_name = 'country';

$horizontal_axis_table = 'state';

$horizontal_axis_f_key = 'location';

$horizontal_axis_p_key = 's_key';

$drilldown_horizontal_axis_name = 'name';

$drilldown_horizontal_axis_table = 'state';
*/
/*
$horizontal_axis_name = 'product';

$horizontal_axis_table = 'product';

$horizontal_axis_f_key = 'product';

$horizontal_axis_p_key = 'p_key';

$drilldown_horizontal_axis_name = '';

$drilldown_horizontal_axis_table = '';
*/

$Query = "SELECT ".$series_name." as Series, ".$horizontal_axis_name." AS Value, sum(amount) AS Total FROM FactTable inner join ".$horizontal_axis_table." on ".$horizontal_axis_table.".".$horizontal_axis_p_key."=FactTable.".$horizontal_axis_f_key." inner join ".$series_table." on ".$series_table.".".$series_p_key."=FactTable.".$series_f_key." GROUP BY Series, Value";


//Query the database
$result=$conn->query($Query);

//Fetch results in the Result Array
while($Row = $result->fetch_assoc())
       $ResultArray[$Row['Series']][$Row['Value']]=$Row['Total'];	
   
include('generateChartJSON.php');

//close the connection
$conn->close();
?>



