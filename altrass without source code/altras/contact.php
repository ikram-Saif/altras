<?php
 $result = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {	
	$servername="localhost"; // Host name 
	$username="root"; // Mysql username 
	$password=""; // Mysql password 
	$db_name="altras"; // Database name 
	$tbl_name="contact_form"; // Table name 

	// Get values from form 
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$subject=$_POST['subject'];
	$email=$_POST['email'];
	$message=$_POST['message'];


// Insert data into mysql 
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO $tbl_name (name, phone, subject,email, message)
		VALUES ('$name', '$phone', '$subject', '$email', '$message')";
		// use exec() because no results are returned
		$conn->exec($sql);
		$result =  '<div class="alert alert-success">
		<strong>Your Form Submited  Successfully.</strong></div>';
	  } catch(PDOException $e) {
		$result=  '<div class="alert alert-danger">
			<strong>Some Thing Went Wrong</strong> .
	  	</div>';
	  }
	  
	  $conn = null;
	}

?>

<!doctype html>
<html>
<head>
<title>Contact Us - Altras</title>
<?php require_once('includes/site-master.php'); ?>
</head>
<body id="home-page">
<?php require_once('includes/header.php'); ?>
<main>

<section id="smBanner" class="contact_background">
    <div class="contain">
       <div class="cntnt">
       	<div class="flex">
           <div class="col _col1">
	           	<div class="image">
	           		<img src="images/new1.png">
	           	</div>
	           	<h4>Phone Support</h4>
           </div>
           <div class="col _col2">
	           	<div class="image">
	           		<img src="images/new2.png">
	           	</div>
	           	<h4>Email Support</h4>
           </div>
           <div class="col _col3">
	           	<div class="image">
	           		<img src="images/new3.png">
	           	</div>
	           	<h4>Live Chat</h4>
           </div>
       </div>
       </div>
    </div>
</section>

<section class="cmnSec contactInfo bgContact">
	<div class="contain">
		<div class="flex">
			<div class="c_info">
				<form action="" method="POST" name = 'form'>
					<h1>We’d love to hear from you</h1>
           <p>Whether you have a question about features, trials, pricing, need a demo, or anything else, our team is ready to answer all your questions</p>
		   	<?= $result ?>
					<div class="innerCol">
						<div class="row formRow">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12 txtGrp">
								<input type="text" name="name" id="" class="txtBox" placeholder="Full Name" required>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12 txtGrp">
								<input type="text" name="phone" id="" class="txtBox" placeholder="Phone Number" required >
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12 txtGrp">
								<input type="text" name="subject" id="" class="txtBox" placeholder="Subject">
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12 txtGrp">
								<input type="text" name="email" id="" class="txtBox" placeholder="Email Address"
								pattern = '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$'
								 required>
							</div>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-xx-12 txtGrp">
								<textarea name="message" id="" class="txtBox" placeholder="Message" required></textarea>
							</div>
						</div>
						<div class="bTn text-center"><button type="submit" class="webBtn blueBtn colorBtn2">Submit</button></div>
					</div>
				</form>
			</div>
			<div class="cmnFnt">
				<h2>How Can We Help?</h2>
				<p>Our team endeavour to respond to all enquiries within 24 hours.Our team is happy to answer your questions. Fill out the form and we’ll be in touch as soon as possible.</p>
				<ul class="infoLst">
					<li><i class="fi-map-marker"></i><span>156 Great Charles Street Queensway Birmingham West Midlands B3 3HN UNITED KINGDOM </span></li>
					<li><i class="fi-envelope"></i><a href="mailto:info@altras.co.uk">info@altras.co.uk</a></li>
					<li><i class="fi-globe"></i><a href="http://www.altras.co.uk/">www.altras.co.uk</a></li>
					<li><i class="fi-phone"></i><a href="tel:+65 6396 5853">+441217730218</a></li>
				</ul>
			</div>
	    </div>
		
	</div>
</section>

</main>
<?php require_once('includes/footer.php');?>
<script>

</script>
</body>
</html>