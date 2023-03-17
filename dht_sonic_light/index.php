<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="imgs/donkey.png">
    <title>Student Leave System - ระบบขออนุญาตหยุดเรียน</title>
</head>
<body>
    <?php
        // Create connection
        $conn = new mysqli("localhost", "root", "", "24feb");
        // Check connection
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        }

        echo '
            <div class="container-fluid p-5 bg-dark text-white">
                <h1>ESP8266 /w DHT11 Ultrasonic LDR</h1>
            </div>
        ';
        
        // ****************************************************
        // DHT11

        $sql = "SELECT * FROM dht ORDER by id DESC LIMIT 20";
        $result = $conn->query($sql);

        echo '
            <div class="container mt-3">
                <h2>DHT11 Sensor</h2>          
                <table class="table table-dark table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>TEMP</th>
                        <th>HUMIDITY</th>
                        <th>Date</th>
                    </tr>
                </thead>
        ';

        while($row = $result->fetch_assoc()) 
        {
            echo '
                    <tbody>
                    <tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['temp'].'</td>
                        <td>'.$row['humidity'].'</td>
                        <td>'.$row['date'].'</td>
                    </tr>
                    </tbody>

            ';
        }

        echo '
                </table>
            </div>
        ';

        // ****************************************************
        // ultrasonic


        $sql = "SELECT * FROM ultrasonic ORDER by id DESC LIMIT 20";
        $result = $conn->query($sql);

        echo '
            <div class="container mt-3">
                <h2>Ultrasonic Sensor</h2>          
                <table class="table table-dark table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>LENGTH</th>
                        <th>Date</th>
                    </tr>
                </thead>
        ';

        while($row = $result->fetch_assoc()) 
        {
            echo '
                    <tbody>
                    <tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['length'].'</td>
                        <td>'.$row['date'].'</td>
                    </tr>
                    </tbody>

            ';
        }

        echo '
                </table>
            </div>
        ';

        // ****************************************************
        // LDR

        $sql = "SELECT * FROM LDR ORDER by id DESC LIMIT 20";
        $result = $conn->query($sql);

        echo '
            <div class="container mt-3">
                <h2>DHT11 Sensor</h2>          
                <table class="table table-dark table-hover">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>LDR</th>
                        <th>Date</th>
                    </tr>
                </thead>
        ';

        while($row = $result->fetch_assoc()) 
        {
            echo '
                    <tbody>
                    <tr>
                        <td>'.$row['id'].'</td>
                        <td>'.$row['light'].'</td>
                        <td>'.$row['date'].'</td>
                    </tr>
                    </tbody>

            ';
        }

        echo '
                </table>
            </div>
        ';

        $conn->close();
    ?>



</body>
</html>