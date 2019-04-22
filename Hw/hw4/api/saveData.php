<?php

include '../dbConnection.php';
    $conn = getDatabaseConnection("poll");
    
    $arr = array();
    
    $arr[":option1"] = $_GET["var1"];
    $arr[":option2"] = $_GET["var2"];
    $arr[":option3"] = $_GET["var3"];
    $arr[":option4"] = $_GET["var4"];
  
   $sql = "INSERT INTO poll_response ( `option1`, `option2`, `option3`, `option4`) 
    VALUES (:option1, :option2, :option3, :option4)";
   
    $stmt = $conn->prepare($sql);
    $stmt->execute($arr);
    //$sql ="SELECT COUNT(1) totalproducts FROM om_product";
    //$stmt = $conn->prepare($sql);
    //$stmt->execute();
    $records = $stmt->fetch(PDO::FETCH_ASSOC);
    echo json_encode($records);

?>