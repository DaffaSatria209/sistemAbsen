<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sistemAbsen";

//Create Connection
$con = new mysqli($servername, $username, $password, $dbname);

//Check connection
if($con->connect_error){
  die("connection error: " . $con->connect_error);
}


$sql = "SELECT * FROM ANGGOTA";
$res = $con->query($sql);

if(!$res){
  die ("invalid query" . $con->error);
}

while($row = $result->fetch_assoc()){

  
}


?>