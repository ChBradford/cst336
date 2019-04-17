<?php
/*$host = "localhost";
$dbname = "ottermart";
$username = "root";
$password = "";*/
include '../../../inc/dbConnection.php';
//establish connection
$dbConn = newPDO("mysql:host=$host;dbname=$dbname", $username, $password);
//setting Errorhandling to exception
$dbConn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql = "SELECT * FROM om_product ORDER BY productPrice LIMIT 10";
$stmt = $connection -> prepare($sql);  //$connection MUST be previously initialized
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //use fetch for one record, fetchAll for multiple

//print_r($records); //display array info (for testing purposes)
//echo json_encode($records);

echo $records[0]['productName'];


?>