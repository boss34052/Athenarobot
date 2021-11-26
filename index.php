<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Slamtec Athena</title>
<link href="index.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>
<link rel="shortcut icon" type="image/png" href="img/favicon.png">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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

    <section class="content">
        <div class="container">
            <div class="content-heading">
                <br>
                <img src="img/image3.jpg" align="right" height="260px" alt="" vspace= “10” hspace= “100”> 
                <h1>Hospitals are about healing</h1>
                <h2>Robot is simple and useful</h2>
                <br>
                
                <button id="r-0" style="width: 120px;"><a href="service.php">Let Started</a></button>
                
            </div>
            <!-- content-heading -->
                <br>
            <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?> 

            <!-- logged in user information-->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome  <strong><?php echo $_SESSION['username']; ?></strong>&nbsp<a href="index.php?logout='1'" style="color: red;">Logout</a></p>
            
        <?php endif ?>
        </div>
    </section>
    
    <section class="content2">
        <div class="container2">
            <div class="content-services">
                <div class="content-services-grid">

                    <div class="content-services-item"><a href="index.php" style="text-decoration: none;">
                        <i class="fa fa-address-book" aria-hidden="true"></i>
                        <h2>Product</h2>
                        <p>about robot</p>
                        </a>
                    </div>

                    <div class="content-services-item"><a href="service.php" style="text-decoration: none;">
                        <i class="fa fa-bandcamp" aria-hidden="true"></i>
                        <h2>Services</h2>
                        <p>robot interface</p>
                        </a>
                    </div>

                    <div class="content-services-item"><a href="data.php" style="text-decoration: none;">
                        <i class="fa fa-envelope-open" aria-hidden="true"></i>
                        <h2>Database</h2>
                        <p>robot data</p>
                        </a>
                    </div>

                    <div class="content-services-item"><a href="about.php" style="text-decoration: none;">
                        <i class="fa fa-telegram" aria-hidden="true"></i>
                        <h2>About Us</h2>
                        <p>about present</p>
                    </a> 
                    </div>

                </div>
            </div>
            <!-- content-services -->

            
        </div>
        <!-- container -->

    </section>

    <!-- content2 -->

    <section class="content3">
        <div class="container3">
            <div class="hero-image">
                
            </div>
        </div>
    </section>    
    

</body>
</html>