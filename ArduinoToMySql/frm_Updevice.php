<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="60">
        <title>ข้อมูลอุปกรณ์</title>
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
                            <a class="nav-link e" aria-current="page" href="show_multi.php">ข้อมูลทั้งหมด</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="show_device.php">จัดการข้อมูลอุปกรณ์</a>
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
              $id = $_GET['id'];
              $sql="SELECT * FROM device WHERE id_device = '$id' ";
              $result = $conn->query($sql);
              $row = $result->fetch_array();
              $id_device=$row['id_device'];
              $name_device=$row['name_device'];
              ?>
              <form action="update_device.php" method="post">
                <div class="mb-3">
                  <label for="id_device" class="form-label">ID DEVICE</label>
                  <input type="text" class="form-control" id="id_device"  name="id_device" value="<?=$id_device;?>" required>
                </div>
                <div class="mb-3">
                  <label for="name_device" class="form-label">NAME DEVICE</label>
                  <input type="text" class="form-control" id="name_device" name="name_device" value="<?=$name_device;?>" required>
                </div>
<input type="hidden" name="id" value="<?=$id;?>">
                <button type="submit" class="btn btn-primary">SAVE</button>
              </form>
            </div>
            <div class="col-lg-4"></div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>
