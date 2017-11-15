<?php
$countval=0;
$ResultArray2=array();
foreach ($ResultArray as $key => $value) {
	foreach ($value as $key2 => $value2) {
		if(strlen($drilldown_horizontal_axis_name3)>0) {
		$ArrayKeys = array();
		$Query = "Select ".$drilldown_horizontal_axis_name3." as arrkey from ".$drilldown_horizontal_axis_table3." where ".$horizontal_axis_name3."='".$key2."'";
		
		$result=$conn->query($Query);
		while($Row = $result->fetch_assoc())
		   array_push($ArrayKeys,$Row['arrkey']);
	   
		$ResultArray2 = array_fill_keys($ArrayKeys, 0); // fill the Result array with 0 values for each month

		$Query = "SELECT ".$series_name3." as Series, ".$drilldown_horizontal_axis_name3." AS Value, sum(amount) AS Total FROM FactTable inner join ".$horizontal_axis_table3." on ".$horizontal_axis_table3.".".$horizontal_axis_p_key3."=FactTable.".$horizontal_axis_f_key3." inner join ".$series_table3." on ".$series_table3.".".$series_p_key3."=FactTable.".$series_f_key3." where ".$horizontal_axis_name3."='".$key2."' and ".$series_name3."='".$key."' GROUP BY Series, Value";	
		
		//Query the database
		$result=$conn->query($Query);

		//Fetch results in the Result Array
		while($Row = $result->fetch_assoc())
			$ResultArray2[$Row['Value']]=$Row['Total'];
//		print_r($ResultArray2);
		include('generateDrillDownJSON.php');
		}
	}
}

?>