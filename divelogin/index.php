<?php
session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "datadive";

	// $servername = "localhost";
	// $username = "daggrega_datadive";
	// $password = "?Ztqp9!NVzW,";
	// $db = "daggrega_datadive";


// Create connection
// $conn = mysqli_connect($servername,$username,$password,$db,$port,$SSL_MODE);

$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if(isset($_POST['login'])){

	$email = $_POST['email'];
	$password = $_POST['password'];

	 $email = trim($email);
     $password = trim($password);

     $email = mysqli_real_escape_string($conn, $email);
     $password = mysqli_real_escape_string($conn, $password);

	 $error = [];

	 if($email ==''){

        $error['email'] = 'Email cannot be empty';


    }


    if($password == '') {


        $error['password'] = 'Password cannot be empty';

    }


	if(empty($error)){

		$the_pass = md5($password);
		$sql = "SELECT * FROM admin WHERE email = '$email'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {


			while($row = mysqli_fetch_assoc($result)) {
				$id = $row["id"];
				$email = $row['email'];
				$user_password = $row['password'];

				if($the_pass !=$user_password){

					header('Location:index.php');
				}else{

                    $_SESSION['id'] = $row["id"];
					// $_SESSION['firstname'] = $firstname;
					// $_SESSION['lastname'] = $lastname;
		            header('Location:../divedashboard/index.php');
				}
			  }
		}

	}


}







mysqli_close($conn);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Superadmin Login</title>
<!-- Meta tag Keywords -->

<!-- meta tags -->
<meta charset="utf-8">
<meta name="keywords" content="Datadive, consumer intelligence, social intelligence, consumer insights, consumer data, consumer behavior, 
consumer demographics, campaign evaluation, hashtag tracking, target ads, consumer engagement, consumer survey, 
consumer information,  data intelligence,  consumer preferences,  social media engagement, industry trends, marketing campaign evaluation,
brand health, competition tracking, real-time insights, consumer engagement, data-driven insights, marketing ROI, digital campaign analysis,
brand performance,  consumer engagement" />
<meta name="description" content="Datadive - Unlock valuable insights into consumer behavior and preferences with DataDive, a powerful suite of consumer intelligence and social intelligence tools. Track brand performance, analyze digital campaigns, and understand industry trends to 
drive sales and improve marketing ROI. Get a comprehensive understanding of consumer demographics, purchase patterns, and social media engagement with our data-driven solutions" />
<meta name="author" content="Datadive" />
<meta name="viewport" content="width=device-width, initial-scale=1">


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png">
<link rel="manifest" href="../favicon_io/site.webmanifest">

<!-- //css files -->
</head>
<body>
<!-- main -->
<div class="w3ls-header">
	
	<div class="header-main" style="margin-top:120px">
	<a href="../index.php" style="margin-left: 380px;
    position: relative;
    top: -20px;
    color: #4CAF50;">Home</a>
		<h2>Super Admin Login</h2>
			<div class="header-bottom">
				<div class="header-right w3agile">
					<div class="header-left-bottom agileinfo">
						<form action="" method="post">
							<div class="icon1">
								<i style="font-size: 17px;" class="fa fa-envelope" aria-hidden="true"></i>
								<input  type="email" placeholder="Your Email" name="email" value="<?php echo isset($email) ? $email : '' ?>"/>
								<span style="color:red"><?php echo isset($error['email']) ? $error['email'] : '' ?></span>
								
							</div>
							<!-- <div class="icon1">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input type="email" placeholder="Your Email" name="email" required=""/>
							</div> -->
							<!-- <div class="icon1">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<input type="tel" placeholder="Phone Number" name="phonenumber" required=""/>
							</div> -->
							<div class="icon1">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input type="password" placeholder="Password" name="password" value="<?php echo isset($password) ? $password : '' ?>"/>
								<span style="color:red"><?php echo isset($error['password']) ? $error['password'] : '' ?></span>
								
							</div>
							<!-- <div class="login-check">
								 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i> I Accept to the <a href="#">Terms &amp; Conditions</a></label>
							</div> -->
							<div class="bottom">
								<input type="submit" value="Login" name="login" />
							</div>
							<!-- <div class="social w3layouts">
								<div class="heading">
									<h5>Or signin with :</h5>
									<div class="clear"></div>
								</div>
								<div class="icons">
									<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
									<a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>

									<div class="clear"></div>
								</div>
								<div class="clear"></div>
								<p>Already a member? <a href="#">Signin</a></p>
							</div> -->
					</form>	
					</div>
				</div>
			</div>
	</div>
</div>
<!--header end here-->
<!-- copyright start here -->
<div class="copyright">
	<p>© <?php echo date('Y') ?> D-Aggregate. All rights reserved</p>
</div>
<!--copyright end here-->
</body>
</html>