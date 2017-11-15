<?php

// sql to delete a record
$sql = "DELETE FROM FactTable";

if ($conn->query($sql) === TRUE) {
//    echo "Record deleted successfully<br>";
} else {
//    echo "Error deleting record: " . $conn->error;
}

$year = array("2012","2013");
$quantity = array("1","2","3");


// prepare and bind
if($stmt = $conn->prepare("INSERT INTO FactTable (location, time_month, time_year, product, unit, amount) VALUES (?, ?, ?, ?, ? ,?)")) {

$stmt->bind_param("ssssss",$location, $time_month, $time_year, $product, $unit, $amount);
for($i=0; $i<25; $i++) {
	// set parameters and execute
	$location = $state_array[array_rand($state_array,1)][0];
	$time_month = $month_array[array_rand($month_array,1)][0];
	$time_year = $year[array_rand($year,1)];
	$rand_prod=array_rand($product_array,1);
	$product = $product_array[$rand_prod][0];
	$unit = $quantity[array_rand($quantity,1)];
	$amount = $unit*$product_array[$rand_prod][1];
	$stmt->execute();
}
//echo "New records created successfully<br>";

$stmt->close();
} else {
    die("Errormessage: ". $conn->error);
}

?>