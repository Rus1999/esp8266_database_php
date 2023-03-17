<?php
//$temp=$_GET['temp'];              //ค่าที่ GET มาจาก Arduino
//$humidity=$_GET['humidity'];      //ค่าที่ GET มาจาก Arduino

$id_device=$_POST['id_device'];   //ค่าที่ POST มาจาก Arduino
$temp=$_POST['temp'];              //ค่าที่ POST มาจาก Arduino
$humidity=$_POST['humidity'];      //ค่าที่ POST มาจาก Arduino

$servername="localhost";   //ชื่อ Server
$username="root";         //username
$passwrod="";             //password
$dbname="multi_arduino_data";       //ชื่อ Database

//create connections
$conn=new mysqli($servername,$username,$passwrod,$dbname);

//check connection
if ($conn->connect_error) {
  die("Connection failed : ".$conn->connect_error);
}

//คำสั่ง sql สำหรับเพิ่มข้อมูลลงฐานข้อมูล
$sql="INSERT INTO device_data(id_data,id_device,temp,humidity,day) VALUES(null,'$id_device','$temp','$humidity',null)";
if ($conn->query($sql)===true) {
  echo "save OK";
}
else {
  echo "Error : ".$sql ."<br>".$conn->error;
}
//---------------------------------

$conn->close();
?>
