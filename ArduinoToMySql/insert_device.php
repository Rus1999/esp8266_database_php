<?php
$servername = "localhost"; //ชื่อ Server
$username = "root"; //Username
$password = ""; //Password
$dbname = "multi_arduino_data"; //ชื่อฐานข้อมูล
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$id_device = $_POST['id_device'];
$name_device = $_POST['name_device'];

$sql="INSERT INTO device(id_device,name_device) VALUES('$id_device','$name_device')";
if ($conn->query($sql)===true) {
    header( "location: show_device.php" );
 exit(0);
}
else {
  echo "Error : ".$sql ."<br>".$conn->error;
}
?>
