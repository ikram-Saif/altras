<!doctype html>
<html>
<head>
<title>Login - ALtras</title>
<?php require_once('includes/site-master.php'); ?>
</head>
<body id="home-page">
<?php require_once('includes/header.php'); ?>
<main>

<section id="cmnFormsCode">
    <div class="outer">
    	<div class="resiterCustomer formCmnAll flex">
    		<div class="formCntnt">
    			<h2>Welcome to Altras</h2>
    			<h4>Let's login your account!</h4>
    			<p>Work Better, Live Better.</p>
    		</div>
    		<div class="innerFormAll loginForm">
	    		<div class="loginFlex">
	    			<h3>Login</h3>
	    			<div class="flex">
		    			<div class="loginCol">
		    				<form action="" method="">
				    			<div class="successPeraRegister">
				    				<h4>Existing Customer</h4>
				    			</div>
				    			<div class="txtGrp">
				    				<label>Email Address</label>
				    				<input type="text" name="" value="" placeholder="Username/Email Address" class="txtBox">
				    			</div>
				    			<div class="txtGrp">
				    				<label>Password</label>
				    				<input type="password" name="" value="" placeholder="****" class="txtBox">
				    			</div>
				    			<div class="txtGrp">
				    				<div class="lblBtn">
				    					<input type="checkbox" name="" value="" id="remember">
				    					<label for="remember">Remember me</label>
				    				</div>
				    			</div>
				    			<div class="txtGrp text-center">
				    				<button type="submit" class="webBtn blueBtn">Sign in</button>
				    			</div>
				    			<div class="text-left">
				    				<a href="forgotPass.php" class="forgotPass">Forgot Password?</a>
				    			</div>
				    			<!-- <div class="oRLine"><span>OR</span></div>
				    			<div class="navLnk text-center">
			                        <span>Do you have an account?</span>
			                        <a href="signup.php" class="color">Sign up</a>
			                    </div> -->
				    		</form>
		    			</div>
		    			<div class="loginCol">
		    				<form action="" method="">
				    			<div class="successPeraRegister">
				    				<h4>New Customer</h4>
				    			</div>
				    			
				    			<div class="txtGrp text-center">
				    				<a href="?" class="webBtn colorBtn flBtn">Register with your email</a>
				    			</div>
				    			<div class="text-left qusTxt">
				    				<h3>New to Altras?</h3>
				    				<h3>Creating an account takes less than a minute.</h3>
				    			</div>
				    		</form>
		    			</div>
	    		    </div>
	    		</div>
    	    </div>
    	</div>
    </div>
</section>

</main>
<?php require_once('includes/footer.php');?>
</body>
</html>