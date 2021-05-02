<!doctype html>
<html>
<head>
<title>Transfer - ALtras</title>
<?php require_once('includes/site-master.php'); ?>
</head>
<body id="home-page">
<?php require_once('includes/header.php'); ?>
<main>

<section id="cmnFormsCode">
    <div class="outer">
    	<div class="transferMoney formCmnAll flex">
    		<div class="formCntnt">
    			<h2>Transfer Money</h2>
    			<!-- <p>Accept all major debit and credit cards from customers around the world. Card payments make up over 40% of global online payments.</p> -->
    			<p>Emphais on Safe, Secure and  Swift transaction.</p>
    		</div>
    		<div class="innerFormAll">
	    		<form action="" method="">
	    			<fieldset>
	    				<div class="txtGrp flex formHeadAll">
	    					<h6>Transection Info</h6>
	    					<a href="addReceiver.php" class="moreLnk"><i class="fi-user"></i> Add new reciever</a>
	    				</div>
	    				<div class="fullWideField">
	    					<label>Select Reciever</label>
	    					<select name="" id="" class="txtBox">
	                            <option value="">Select Reciever</option>
	                        </select>
	    				</div>
	    				<div class="fullWideField">
	    					<label>Choose Delivery Currency</label>
	    					<select name="" id="" class="txtBox">
	                            <option value="">Select Currency</option>
	                        </select>
	    				</div>
	    				<div class="fullWideField">
	    					<label>Choose Delivery Method</label>
	    					<select name="" id="" class="txtBox">
	                            <option value="">Select Method</option>
	                        </select>
	    				</div>
	    				<div class="cmnBtn text-center">
	    					<button type="button" class="webBtn colorBtn nextBtn">Next</button>
	    				</div>
	    			</fieldset>
	    			<fieldset>
	    				<div class="txtGrp flex formHeadAll">
	    					<h6>Transection Info</h6>
	    				</div>
	    				<div class="fullWideField">
	    					<label>Enter Amount to Recieve</label>
	    					<div class="relative outCmnLabelTxt">
	    						<input type="text" name="" value="2000" placeholder="" class="txtBox">
	    						<span class="cmnLabelTxt">USD</span>
	    					</div>
	    				</div>
	    				<div class="fullWideField">
	    					<label>Enter Amount to Send</label>
	    					<div class="relative outCmnLabelTxt">
	    						<input type="text" name="" value="2000" placeholder="" class="txtBox">
	    						<span class="cmnLabelTxt">GBP</span>
	    					</div>
	    				</div>
	    				<div class="fullWideField">
	    					<label>Choose Payment Method</label>
	    					<select name="" id="" class="txtBox">
	                            <option value="">Payment Method</option>
	                        </select>
	    				</div>
	    				<div class="cmnBtn text-center">
	    					<button type="button" class="webBtn blueBtn backBtn">Back</button>
	    					<button type="button" class="webBtn colorBtn nextBtn">Next</button>
	    				</div>
	    			</fieldset>
	    			<fieldset>
	    				<div class="txtGrp flex formHeadAll">
	    					<h6>Summery</h6>
	    				</div>
	    				<div class="txtGrp flex dotedFlex">
	    					<label>Recipent</label>
	    					<span></span>
	    					<p>Aleena justin</p>
	    				</div>
	    				<div class="txtGrp flex dotedFlex">
	    					<label>City</label>
	    					<span></span>
	    					<p>London</p>
	    				</div>
	    				<div class="txtGrp flex dotedFlex">
	    					<label>Country</label>
	    					<span></span>
	    					<p>United Kingdom</p>
	    				</div>
	    				<div class="txtGrp flex dotedFlex">
	    					<label>Amount to be sent</label>
	    					<span></span>
	    					<p>1873.00 GBP</p>
	    				</div>
	    				<div class="txtGrp flex dotedFlex">
	    					<label>Amount to be recieved</label>
	    					<span></span>
	    					<p>200.02 USD</p>
	    				</div>
	    				<div class="txtGrp flex dotedFlex">
	    					<label>Bank delivery fees</label>
	    					<span></span>
	    					<p>0.00 GBP</p>
	    				</div>
	    				<div class="txtGrp flex dotedFlex">
	    					<label>Service charges</label>
	    					<span></span>
	    					<p>0.00 GBP</p>
	    				</div>
	    				<div class="txtGrp flex dotedFlex">
	    					<label>Credit card fees</label>
	    					<span></span>
	    					<p>0.00 GBP</p>
	    				</div>
	    				<div class="txtGrp flex dotedFlex">
	    					<label>Exchange rate</label>
	    					<span></span>
	    					<p>1.23 USD</p>
	    				</div>
	    				<div class="txtGrp flex highlightFlex">
	    					<h4>Total</h4>
	    					<span></span>
	    					<p>827.827 GBP</p>
	    				</div>
	    				<div class="cmnBtn text-center">
	    					<button type="button" class="webBtn blueBtn backBtn">Back</button>
	    					<button type="submit" class="webBtn colorBtn">Confirm</button>
	    				</div>
	    			</fieldset>
	    		</form>
    	    </div>
    	</div>
    </div>
</section>

</main>
<?php require_once('includes/footer.php');?>
</body>
</html>