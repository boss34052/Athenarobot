<?php
	session_start();
	include('server2.php'); 

    date_default_timezone_set('Asia/Bangkok');
    $date_nows = date('d-m-Y H:i:s');
    $date_nows2 = date('Y-m-d H:i:s');
    /*
    echo $date_nows;
    echo "<br>";
    echo $date_nows2; 
    */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Slamtec Athena</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<link rel="stylesheet" a href="data.css">
</head>
<body>

<header>
        <nav>
            <div class="container">
                <div class="nav-grid">
                    <div class="logo">
                        <h1>Slamtec Athena</h1>
                        <span>Potharam Hospital Project</span>
                    </div>
                    <div class="fr">
                        <ul class="menu">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="service.php">Service</a></li>
                        <li><a href="data.php">Data</a></li>
                        <li><a href="about.html">About</a></li>
                        </ul>
                    </div>
                </div>
                <!-- grid -->
            </div>
            
        </nav>
        <!-- nav -->

    </header>
    <!-- header -->

<form action="d_in.php" method="post" class="form-horizontal" enctype="multipart/form-data">
    <div class="container">
                   
            <center>
                <br><br>
                <h3>DateTime, Date, Bed Number Save To Database</h3>
                <p>
                <h3>( ตารางบันทึกวันที่และเวลาหมายเลขเตียง )
                    <br>
                </h3>
                </p>
 
            </center>
                    
    </div>
</form>
<br>
 
    <?php 
        $sql = "SELECT * FROM date_tbl"
        or die ("Error : ".mysqlierror($sql));
        $sql_date = mysqli_query($conn, $sql);
    ?>
 
    <div class="container">

    <?php foreach ($sql_date as $rs){ ?>
            <table class="table">
            <thead class="thead-dark">
            <tr>
            <th scope="col">#ID</th>
            <th scope="col">First Bed</th>
            <th scope="col">Second Bed</th>
            <th scope="col">Third Bed</th>
            <th scope="col">Fourth Bed</th>
            <th scope="col">Fifth Bed</th>
            <th scope="col">Sixth Bed</th>
            <th scope="col">Seventh Bed</th>
            <th scope="col">Eighth Bed</th>
            <th scope="col">Date and Time</th>
            </tr>
            </thead>       
            <tbody>
            <tr>
            <th scope="row"><?php echo $rs['d_id']; ?></th>
            <td><?php echo $rs['d_1']; ?></td>
            <td><?php echo $rs['d_2']; ?></td>
            <td><?php echo $rs['d_3']; ?></td>
            <td><?php echo $rs['d_4']; ?></td>
            <td><?php echo $rs['d_5']; ?></td>
            <td><?php echo $rs['d_6']; ?></td>
            <td><?php echo $rs['d_7']; ?></td>
            <td><?php echo $rs['d_8']; ?></td>
            <th><?php echo $rs['d_insert']; ?></th>
            </tr>
            </tbody>
            </table>
            
            <?php }?>
    </div>  

  <?php mysqli_close($conn); ?>              

</body>
</html>

