<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="60">
        <title>ข้อมูลอุณหภูมิและความชื้น</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="show_multi.php">ข้อมูลทั้งหมด</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="show_device.php">จัดการข้อมูลอุปกรณ์</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">ค้นหาข้อมูล</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <br>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
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
//คำสั่ง sql สำหรับเรียกดูข้อมูลจากฐานข้อมูล
//DESC คือ เรียงข้อมูลจาก มากไปน้อย
                $sql = "SELECT * FROM device_data as T1
                        INNER JOIN device as T2 ON T1.id_device=T2.id_device
                        ORDER by T1.id_data DESC LIMIT 100";
//$sql = "SELECT id,temp FROM dhtdata ORDER by id LIMIT 50";
//คำสั่ง sql สำหรับเลือกข้อมูลขึ้นมาแสดงแบบมีเงื่อนไข (ตาม Device)
//$sql = "SELECT * FROM device_data WHERE id_device='D2' ORDER by id_data DESC LIMIT 100";

                /*
                  $sql = "SELECT * FROM device_data as T1
                  INNER JOIN device as T2 ON T1.id_device = T2.id_device
                  ORDER BY T1.id_data desc limit 100";
                 */


                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
// output data of each row
                    echo "<table class='table table-striped' border='1'><th>ID_DATA</th><th>ID_DEVICE</th><th>NAME DEVICE</th><th>TEMP</th><th>HUMIDITY</th><th>DATETIME</th>";
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['id_data'] . "</td>";
                        echo "<td>" . $row['id_device'] . "</td>";
                        echo "<td>" . $row['name_device'] . "</td>";
                        echo "<td>" . $row['temp'] . "</td>";
                        echo "<td>" . $row['humidity'] . "</td>";
                        echo "<td>" . $row['day'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </div>
            <div class="col-lg-4"></div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
