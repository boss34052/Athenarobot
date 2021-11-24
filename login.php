<?php
	session_start();
	include('server2.php'); 

	/*	if(isset($_POST['username'])) {
			$uname=$_POST['username'];
			$password=$_POST['password'];

			$sql="select * from loginform where user='".$uname."'AND Pass='".$password."'
			limit 1";

			$result=mysqli_query($sql);

			if(mysqli_num_rows($result)==1) {
				echo " You Have Successfully Logged in";
				exit();
			}
			else {
				echo " You Have Entered Incorrect Password";
				exit();
			}
		}*/

?>


<!DOCTYPE html>
<html>
<head>
    <title>Slamtec Athena</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous"/>
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<link rel="stylesheet" a href="login.css">
</head>
<body>
	<div class="container">
	<img src="/dist/Athena_robot/img/login.jpg" alt=""/>
		<form action="login_db.php" method="post">
		<?php include('errors.php'); ?>
    	<!-- notification message -->
    	<?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the Username"/>	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<div class="form-submit">
			<button type="submit" name="login_user" class="btn-login">LOGIN</button>
			</div>
		</form>
	</div>
</body>
</html> 