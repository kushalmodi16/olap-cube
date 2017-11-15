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
		$temp = explode("-",$key);

		$Query = "SELECT ".$series_name1." as Series1, ".$series_name2." as Series2, ".$drilldown_horizontal_axis_name." AS Value, sum(amount) AS Total FROM FactTable inner join ".$horizontal_axis_table." on ".$horizontal_axis_table.".".$horizontal_axis_p_key."=FactTable.".$horizontal_axis_f_key." inner join ".$series_table1." on ".$series_table1.".".$series_p_key1."=FactTable.".$series_f_key1." inner join ".$series_table2." on ".$series_table2.".".$series_p_key2."=FactTable.".$series_f_key2." where ".$horizontal_axis_name."='".$key2."' and ".$series_name1."='".$temp[0]."' and ".$series_name2."='".$temp[1]."' GROUP BY Series1, Series2, Value";	
		
		/*
		$Query = "SELECT ".$series_name1." as Series1, ".$series_name2." as Series2, ".$drilldown_horizontal_axis_name." AS Value, sum(amount) AS Total FROM FactTable inner join month on month.m_key=FactTable.time_month inner join state on state.s_key=FactTable.location inner join product on product.p_key=FactTable.product where ".$horizontal_axis_name."='".$key2."' and ".$series_name1."='Canada' and ".$series_name2."='".$temp[1]."' GROUP BY Series1, Series2, Value";
		*/
		
		//Query the database
		$result=$conn->query($Query);

		//Fetch results in the Result Array
		while($Row = $result->fetch_assoc()) {
			$ResultArray2[$Row['Value']]=$Row['Total'];
			//echo $Row['Value']." ".$Row['Total']."<br>";
		}
		
		include('generateDrillDownJSON2.php');
		}
	}
}

?>