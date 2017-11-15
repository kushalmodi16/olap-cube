<?php
//echo $_SESSION['var'];
include('connection.php');

$ChartHeading3 = 'Total Revenue on Products';

$RollupName3 = 'Country';

$XaxisName3 = 'Location';



$drilldown_file_name3='piedrilldown.php';


$series_f_key3 = 'location';

$series_p_key3 = 's_key';

$series_name3 = 'country'; 

$series_table3 = 'state';


$horizontal_axis_name3 = 'product';

$horizontal_axis_table3 = 'product';

$horizontal_axis_f_key3 = 'product';

$horizontal_axis_p_key3 = 'p_key';

$drilldown_horizontal_axis_name3 = '';

$drilldown_horizontal_axis_table3 = '';



$Query = "SELECT ".$series_name3." as Series, ".$horizontal_axis_name3." AS Value, sum(amount) AS Total FROM FactTable inner join ".$horizontal_axis_table3." on ".$horizontal_axis_table3.".".$horizontal_axis_p_key3."=FactTable.".$horizontal_axis_f_key3." inner join ".$series_table3." on ".$series_table3.".".$series_p_key3."=FactTable.".$series_f_key3." GROUP BY Series, Value";


//Query the database
$result=$conn->query($Query);

//Fetch results in the Result Array
while($Row = $result->fetch_assoc())
       $ResultArray[$Row['Series']][$Row['Value']]=$Row['Total'];	
   
include('pieJSON.php');

//close the connection
$conn->close();
?>



