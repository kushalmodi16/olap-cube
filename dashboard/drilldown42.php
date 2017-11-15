<?php
$countval=0;
$ResultArray2=array();
foreach ($ResultArray as $key => $value) {
	foreach ($value as $key2 => $value2) {
		if(strlen($drilldown_horizontal_axis_name)>0) {
		$ArrayKeys = array();
		$Query = "Select ".$drilldown_horizontal_axis_name." as arrkey from ".$drilldown_horizontal_axis_table." where ".$horizontal_axis_name."='".$key2."'";
		
		$result=$conn->query($Query);
		while($Row = $result->fetch_assoc())
		   array_push($ArrayKeys,$Row['arrkey']);
	   
		$ResultArray2 = array_fill_keys($ArrayKeys, 0); // fill the Result array with 0 values for each month

		$Query = "SELECT ".$series_name." as Series, ".$drilldown_horizontal_axis_name." AS Value, sum(amount) AS Total FROM FactTable inner join ".$horizontal_axis_table." on ".$horizontal_axis_table.".".$horizontal_axis_p_key."=FactTable.".$horizontal_axis_f_key." inner join ".$series_table." on ".$series_table.".".$series_p_key."=FactTable.".$series_f_key." where ".$horizontal_axis_name."='".$key2."' and ".$series_name."='".$key."' GROUP BY Series, Value";	
		
		//Query the database
		$result=$conn->query($Query);

		//Fetch results in the Result Array
		while($Row = $result->fetch_assoc())
			$ResultArray2[$Row['Value']]=$Row['Total'];
//		print_r($ResultArray2);
		include('generateDrillDownJSON2.php');
		}
	}
}

?>