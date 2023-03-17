<?php
    $temp = $_POST['temp']; //คาที่ Get จาก Arduino
    $humidity = $_POST['humidity'];

    $length = $_POST['length'];

    $light = $_POST['light'];

    

    // Create connection
    $conn = new mysqli("localhost", "root", "", "24feb");
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    //$val = $_GET['temp']; คําสั่ง sql สําหรับเพิ่มขอมูลลงฐานขอมูล
    $sql = "INSERT INTO dht(id, temp, humidity, date) VALUE(null, $temp, $humidity, current_timestamp);";
    $conn->query($sql);

    $sql = "INSERT INTO ultrasonic(id, length, date) VALUE(null, $length, current_timestamp);";
    $conn->query($sql);

    $sql = "INSERT INTO ldr(id, light, date) VALUE(null, $light, current_timestamp);";
    $conn->query($sql);



    $conn->close();
?>