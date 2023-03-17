<?php
$servername="localhost";   //ชื่อ Server
$username="root";     //username
$passwrod="";     //password
$dbname="arduino_data";       //ชื่อ Database

//create connections
$conn=new mysqli($servername,$username,$passwrod,$dbname);

//check connection
if ($conn->connect_error) {
  die("Connection failed : ".$conn->connect_error);
}
else {
  die("Connect succeed");
}
$conn->close();
?>
