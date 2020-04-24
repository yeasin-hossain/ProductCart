<?php

$conn = new mysqli('localhost', 'root', '', 'ticket');

if($conn->connect_error){
	die('Database Issue!');
}

		$firstNumber = $_REQUEST['firstNumber'] ?? 0;
		$secondNumber = $_REQUEST['secondNumber'] ?? 0;
if(!empty($firstNumber)){
$sql = 'SELECT * from route';
$res = $conn->query($sql);

$out = [];
$out2 = [];

if($res->num_rows > 0){
	while($data = $res->fetch_assoc()){
		// var_dump( $data);
		$out[] = $data;
		// echo json_encode($data);
		$ride_from = $data['ride_from'];
		$ride_to = $data['ride_to'];
		$fare = $data['fare'];
		$lol =($firstNumber + $secondNumber);
		 // $firstNumber + $secondNumber;
		$return_arr[] = array("ride_from" => $ride_from,
								"ride_to" => $ride_to,
								"fare"	=> $fare,
								"lol"	=> $lol
							);
	}
}
}else{
	$return_arr = 'sorry';
}
// $firstNumber = $_REQUEST['firstNumber'] ?? 0;
// $secondNumber = $_REQUEST['secondNumber'] ?? 0;
// echo ($firstNumber + $secondNumber);

// echo json_encode($out);
echo json_encode($return_arr);
// echo json_encode($data);
// echo json_encode( array( "name"=>"John","time"=>"2pm","roll" =>50));

