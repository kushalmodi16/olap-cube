<?php
session_start();
include('connection.php');

$ChartHeading = 'Total Revenue on Country-State';

$RollupName = 'Country';

$XaxisName = 'Location';

$drilldown_file_name=$_SESSION['drilldownfile'];

$series_f_key1 = $_SESSION['series_f_key1'];

$series_p_key1 = $_SESSION['series_p_key1'];

$series_name1 = $_SESSION['series_name1']; 

$series_table1 = $_SESSION['series_table1'];


$series_f_key2 = $_SESSION['series_f_key2'];

$series_p_key2 = $_SESSION['series_p_key2'];

$series_name2 = $_SESSION['series_name2']; 

$series_table2 = $_SESSION['series_table2'];



$horizontal_axis_name = $_SESSION['horizontal_axis_name'];

$horizontal_axis_table = $_SESSION['horizontal_axis_table'];

$horizontal_axis_f_key = $_SESSION['horizontal_axis_f_key'];

$horizontal_axis_p_key = $_SESSION['horizontal_axis_p_key'];

$drilldown_horizontal_axis_name = $_SESSION['drilldown_horizontal_axis_name'];

$drilldown_horizontal_axis_table = $_SESSION['drilldown_horizontal_axis_table'];

/*
$series_f_key1 = 'location';

$series_p_key1 = 's_key';

$series_name1 = 'country'; 

$series_table1 = 'state';


$series_f_key2 = 'product';

$series_p_key2 = 'p_key';

$series_name2 = 'product'; 

$series_table2 = 'product';
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
$series_f_key1 = 'product';

$series_p_key1 = 'p_key';

$series_name1 = 'product'; 

$series_table1 = 'product';


$series_f_key2 = 'time_month';

$series_p_key2 = 'm_key';

$series_name2 = 'time_year'; 

$series_table2 = 'month';



$horizontal_axis_name = 'country';

$horizontal_axis_table = 'state';

$horizontal_axis_f_key = 'location';

$horizontal_axis_p_key = 's_key';

$drilldown_horizontal_axis_name = 'name';

$drilldown_horizontal_axis_table = 'state';
*/
/*
$horizontal_axis_name = 'name';

$horizontal_axis_table = 'state';

$horizontal_axis_f_key = 'location';

$horizontal_axis_p_key = 's_key';

$drilldown_horizontal_axis_name = '';

$drilldown_horizontal_axis_table = '';
*/

/*
$series_f_key1 = 'location';

$series_p_key1 = 's_key';

$series_name1 = 'country'; 

$series_table1 = 'state';


$series_f_key2 = 'time_month';

$series_p_key2 = 'm_key';

$series_name2 = 'time_year'; 

$series_table2 = 'month';
*/
/*
$horizontal_axis_name = 'product';

$horizontal_axis_table = 'product';

$horizontal_axis_f_key = 'product';

$horizontal_axis_p_key = 'p_key';

$drilldown_horizontal_axis_name = '';

$drilldown_horizontal_axis_table = '';
*/

$Query = "SELECT ".$series_name1." as Series1,".$series_name2." as Series2, ".$horizontal_axis_name." AS Value, sum(amount) AS Total FROM FactTable inner join ".$horizontal_axis_table." on ".$horizontal_axis_table.".".$horizontal_axis_p_key."=FactTable.".$horizontal_axis_f_key." inner join ".$series_table1." on ".$series_table1.".".$series_p_key1."=FactTable.".$series_f_key1." inner join ".$series_table2." on ".$series_table2.".".$series_p_key2."=FactTable.".$series_f_key2." GROUP BY Series1, Series2, Value";


//Query the database
$result=$conn->query($Query);

//Fetch results in the Result Array
while($Row = $result->fetch_assoc())
       $ResultArray[$Row['Series1']."-".$Row['Series2']][$Row['Value']]=$Row['Total'];	
   
include('generateChartJSON2.php');

//close the connection
$conn->close();
?>



