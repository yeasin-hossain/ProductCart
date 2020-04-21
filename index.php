<?php

$conn = new mysqli('localhost', 'root', '', 'ticket');

if($conn->connect_error){
	die('Database Issue!');
}

$sql = 'SELECT * from route';
$res = $conn->query($sql);

$out = [];
$out2 = [];

if($res->num_rows > 0){
	while($data = $res->fetch_assoc()){

        $out[] = $data['ride_from'];
        $out2[] = $data['ride_to'];
        // echo $data['ride_from'];
	}
}




echo json_encode($out);