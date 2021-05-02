<!doctype html>
<html>
<head>
<title>Register - ALtras</title>
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
    			<h4>Let's get your account set up!</h4>
    			<p>Work Better, Live Better.</p>
    		</div>
    		<div class="innerFormAll">
	    		<form action="" method="">
	    			<fieldset>
	    				<div class="flex flex-2">
		    				<div class="inner">
		    					<label>First Name (In English)</label>
		    					<input type="text" name="" value="" placeholder="enter your first name" class="txtBox">
		    				</div>
		    				<div class="inner">
		    					<label>Last Name (In English)</label>
		    					<input type="text" name="" value="" placeholder="enter your last name" class="txtBox">
		    				</div>
		    				<div class="inner">
		    					<label>Country</label>
		    					<select name="" id="" class="txtBox">
                                    <option value="London">London</option>
                                    <option value="Birmingham">Birmingham</option>
                                    <option value="Leeds">Leeds</option>
                                    <option value="Glasgow">Glasgow</option>
                                    <option value="Sheffield">Sheffield</option>
                                    <option value="Bradford">Bradford</option>
                                    <option value="Liverpool">Liverpool</option>
                                    <option value="Edinburgh">Edinburgh</option>
                                    <option value="Manchester">Manchester</option>
                                    <option value="Bristol">Bristol</option>
                                    <option value="Kirklees">Kirklees</option>
                                    <option value="Fife">Fife</option>
                                    <option value="Wirral">Wirral</option>
                                    <option value="North Lanarkshire">North Lanarkshire</option>
                                    <option value="Wakefield">Wakefield</option>
                                    <option value="Cardiff">Cardiff</option>
                                </select>
		    				</div>
		    				<div class="inner">
		    					<label>Recieving Country</label>
		    					<select name="" id="" class="txtBox">
                                    <option value="London">London</option>
                                    <option value="Birmingham">Birmingham</option>
                                    <option value="Leeds">Leeds</option>
                                    <option value="Glasgow">Glasgow</option>
                                    <option value="Sheffield">Sheffield</option>
                                    <option value="Bradford">Bradford</option>
                                    <option value="Liverpool">Liverpool</option>
                                    <option value="Edinburgh">Edinburgh</option>
                                    <option value="Manchester">Manchester</option>
                                    <option value="Bristol">Bristol</option>
                                    <option value="Kirklees">Kirklees</option>
                                    <option value="Fife">Fife</option>
                                    <option value="Wirral">Wirral</option>
                                    <option value="North Lanarkshire">North Lanarkshire</option>
                                    <option value="Wakefield">Wakefield</option>
                                    <option value="Cardiff">Cardiff</option>
                                </select>
		    				</div>
		    				<div class="inner">
		    					<label>Gender</label>
		    					<input type="text" name="" value="" placeholder="Male or Female" class="txtBox">
		    				</div>
		    				<div class="inner">
		    					<label>Nationality</label>
		    					<input type="text" name="" value="" placeholder="enter your nationality" class="txtBox">
		    				</div>
	    			    </div>
	    				<div class="cmnBtn text-center">
	    					<button type="button" class="webBtn colorBtn nextBtn">Next</button>
	    				</div>
	    			</fieldset>
	    			<fieldset>
	    				<div class="flexRow flex profileDp">
                            <div class="col col1">
                                <div class="proDp ico">
                                    <i class="fi-camera"></i>
                                </div>
                                <div class="text-center"><button type="button" class="webBtn colorBtn smBtn uploadImg" id="uploadDp" data-image-src="dp"><i class="fi-user"></i> Upload Photo</button></div>
                            </div>
                        </div>
	    				<div class="flex flex-2">
		    				<div class="inner">
		    					<label>Phone Number</label>
		    					<input type="text" name="" id="" class="txtBox" placeholder="Phone Number" value="+44">
		    				</div>
		    				<div class="inner">
		    					<label>Date of Birth</label>
		    					<input type="text" name="" value="" placeholder="dd/mm/yy" class="txtBox">
		    				</div>
		    				<div class="inner">
		    					<label>Occupation</label>
		    					<input type="text" name="" value="" placeholder="enter your occupation" class="txtBox">
		    				</div>
	    			    </div>
	    			    <div class="txtGrp fullWideField">
	    			    	<label>Do you have any Disability(Dyslexia, Physical,..) <span> so we can serve you better</span></label>
	    			    	<select name="" id="" class="txtBox">
	    			    		<option>Choose One</option>
	    			    		<option>Yes</option>
	    			    		<option>No</option>
	    			    	</select>
	    			    </div>
	    			    <div class="txtGrp fullWideField hide">
	    			    	<label>Disability Type</label>
	    			    	<select name="" id="" class="txtBox">
	    			    		<option>Choose One</option>
	    			    		<option>Dyslexia</option>
	    			    		<option>Physical</option>
	    			    	</select>
	    			    </div>
	    				<div class="cmnBtn text-center">
	    					<button type="button" class="webBtn blueBtn backBtn">Back</button>
	    					<button type="button" class="webBtn colorBtn nextBtn">Next</button>
	    				</div>
	    			</fieldset>
	    			<fieldset>
	    				<div class="successPeraRegister">
	    				<p>We have sent a message to your phone contining a verification code, enter the code in the box below.</p></div>
	    				<div class="txtGrp">
		    					<label>Verification Code</label>
		    					<input type="text" name="" id="" class="txtBox" placeholder="enter verification code" value="">
		    				</div>
	    				<div class="cmnBtn text-center">
	    					<button type="button" class="webBtn blueBtn backBtn">Back</button>
	    					<button type="button" class="webBtn colorBtn nextBtn">Next</button>
	    				</div>
	    			</fieldset>
	    			<fieldset>
	    				<div class="flex flex-2">
		    				<div class="inner">
		    					<label>Zip Code/Post Code</label>
		    					<input type="text" name="" id="" class="txtBox" placeholder="zip code" value="">
		    				</div>
		    				<div class="inner">
		    					<label>Town</label>
		    					<input type="text" name="" value="" placeholder="town" class="txtBox">
		    				</div>
		    				<div class="inner">
		    					<label>Street Address</label>
		    					<input type="text" name="" value="" placeholder="enter your street address" class="txtBox">
		    				</div>
		    				<div class="inner">
		    					<label>Country</label>
		    					<select name="" id="" class="txtBox">
                                    <option value="London">London</option>
                                    <option value="Birmingham">Birmingham</option>
                                    <option value="Leeds">Leeds</option>
                                    <option value="Glasgow">Glasgow</option>
                                    <option value="Sheffield">Sheffield</option>
                                    <option value="Bradford">Bradford</option>
                                    <option value="Liverpool">Liverpool</option>
                                    <option value="Edinburgh">Edinburgh</option>
                                    <option value="Manchester">Manchester</option>
                                    <option value="Bristol">Bristol</option>
                                    <option value="Kirklees">Kirklees</option>
                                    <option value="Fife">Fife</option>
                                    <option value="Wirral">Wirral</option>
                                    <option value="North Lanarkshire">North Lanarkshire</option>
                                    <option value="Wakefield">Wakefield</option>
                                    <option value="Cardiff">Cardiff</option>
                                </select>
		    				</div>
	    			    </div>
	    			    <div class="txtGrp fullWideField">
	    			    	<label>Address</label>
		    				<input type="text" name="" value="" placeholder="enter your address" class="txtBox">
	    			    </div>
	    				<div class="cmnBtn text-center">
	    					<button type="button" class="webBtn blueBtn backBtn">Back</button>
	    					<button type="button" class="webBtn colorBtn nextBtn">Next</button>
	    				</div>
	    			</fieldset>
	    			<fieldset>
	    				<div class="flex flex-2">
		    				<div class="inner">
		    					<label>Email Address</label>
		    					<input type="text" name="" id="" class="txtBox" placeholder="email address">
		    				</div>
		    				<div class="inner">
		    					<label>Confirm Email Address</label>
		    					<input type="text" name="" id="" class="txtBox" placeholder="confirm email address">
		    				</div>
		    				<div class="inner">
		    					<label>Password</label>
		    					<input type="password" name="" id="" class="txtBox" placeholder="enter your password">
		    				</div>
		    				<div class="inner">
		    					<label>Confirm Password</label>
		    					<input type="password" name="" id="" class="txtBox" placeholder="confirm password">
		    				</div>
	    			    </div>
	    				<div class="cmnBtn text-center">
	    					<button type="button" class="webBtn blueBtn backBtn">Back</button>
	    					<button type="button" class="webBtn colorBtn nextBtn">Next</button>
	    				</div>
	    			</fieldset>
	    			<fieldset>
	    				<div class="successPeraRegister">
	    			    <h4>Registration completed successfully</h4>
	    				<p>Registration completed successfully, press finish to login to your account.</p></div>
	    				<div class="cmnBtn text-center">
	    					<button type="submit" class="webBtn colorBtn">Finish</button>
	    				</div>
	    			</fieldset>
	    			<input type="file" id="uploadFile" name="uploadFile" class="uploadFile" data-file="">
	    		</form>
    	    </div>
    	</div>
    </div>
</section>

</main>
<?php require_once('includes/footer.php');?>
</body>
</html>