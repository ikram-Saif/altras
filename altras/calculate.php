<!doctype html>
<html>
<head>
<title>Calculate - ALtras</title>
<?php require_once('includes/site-master.php'); ?>
</head>
<body id="home-page">
<?php require_once('includes/header.php'); ?>
<main>

<section id="allForm">
    <div class="contain">
       <div class="calculateFlex">
            <form action="" method="">
                <div class="flex newCalculate">
                	<div class="colL">
                		<div class="_inner">
                			<h3>Never overpay for <em>international money transfers.</em></h3>
                			<p>Make faster, low-cost money transfers simply and securely</p>
                			<a href="signup.php" class="webBtn blueBtn">Sign Up</a>
                		</div>
                	</div>
                	<div class="colR">
                		<div class="_inner">
                			<h2>Send Money Online</h2>
                			<ul class="calculateNav">
                				<li>
                					<a href="?">Payment Method</a>
                				</li>
                				<li>
                					<a href="?">Bank Account</a>
                				</li>
                				<li>
                					<a href="?">Cash</a>
                				</li>
                			</ul>
                			<div class="_inner">
	                            <label>Send Country</label>
	                            <div id="country" class="dropDown">
	                                <div class="dropBtn txtBox cmnCountryBox">
	                                    <img src="images/flags/gb.svg">
	                                    <div class="_label">
	                                        <h4>UK</h4>
	                                        
	                                    </div>
	                                </div>
	                                <ul class="dropCnt">
	                                    <li>
	                                       <img src="images/flags/us.svg">
	                                       <div class="dropLabel">
	                                            <h4>United State</h4>
	                                        </div>
	                                    </li>
	                                    <li>
	                                       <img src="images/flags/ad.svg">
	                                       <div class="dropLabel">
	                                            <h4>Andorra</h4>
	                                        </div>
	                                    </li>
	                                    <li>
	                                       <img src="images/flags/gb.svg">
	                                       <div class="dropLabel">
	                                            <h4>United Kingdom</h4>
	                                        </div>
	                                    </li>
	                                </ul>
	                            </div>     
	                        </div>
	                        <div class="_inner">
	                            <label>Reciver Country</label>
	                            <div id="country1" class="dropDown">
	                                <div class="dropBtn txtBox cmnCountryBox">
	                                    <img src="images/flags/sd.svg">
	                                    <div class="_label">
	                                        <h4>Sudan</h4>
	                                    </div>
	                                </div>
	                                <ul class="dropCnt">
	                                    <li>
	                                       <img src="images/flags/us.svg">
	                                       <div class="dropLabel">
	                                            <h4>United State</h4>
	                                        </div>
	                                    </li>
	                                    <li>
	                                       <img src="images/flags/ad.svg">
	                                       <div class="dropLabel">
	                                            <h4>Andorra</h4>
	                                        </div>
	                                    </li>
	                                    <li>
	                                       <img src="images/flags/gb.svg">
	                                       <div class="dropLabel">
	                                            <h4>United Kingdom</h4>
	                                        </div>
	                                    </li>
	                                </ul>
	                            </div>     
	                        </div>
	                        <div class="_inner flex">
	                        	<div class="smColL">
	                        		<label class="miniLable">Send Money</label>
	                        		<div class="relative textBox_lbl">
	                        			<input type="text" name="" value="1000" placeholder="" class="txtBox">
	                        			<p>USD</p>
	                        		</div>
	                        	</div>
	                        	<div class="smColR">
	                        		<div class="flex calculateRadio">
	                        			<label class="miniLable">Recive Money</label>
	                        			<div class="lblBtn">
	                        				<input type="radio" name="choose" value="" id="usd">
	                        				<label for="usd">USD</label>
	                        			</div>
	                        			<div class="lblBtn lblBtn1">
	                        				<input type="radio" name="choose" value="" id="sdg">
	                        				<label for="sdg">SDG</label>
	                        			</div>
	                        		</div>
	                        		<div class="relative textBox_lbl">
	                        			<input type="text" name="" value="1000" placeholder="" class="txtBox txtDisable" disabled="">
	                        			<p>SDG</p>
	                        		</div>
	                        	</div>
	                        </div>
	                        <div class="_inner">
	                        	<p>1.00 USD = 53.6467 Sudan Pound (SDG) 2</p>
	                        </div>
                		</div>
                	</div>
                </div> 
            </form>
        </div>
    </div>
</section>
<!-- <section class="cmnSec">
	<div class="contain">
		<div class="flex">
			<div class="bigCalculate">
				<h2>Global from day one</h2>
				<p>Increase conversion with Dutch customers by enabling iDEAL—the most popular payment method in the Netherlands, with 57% share of online payments.</p>
				<p>Accept all major debit and credit cards from customers around the world. Card payments make up over 40% of global online payments.</p>
			</div>
		</div>
	</div>
</section> -->
<section class="cmnSec mobileFeature">
    <div class="contain">
        <div class="cmnHeading text-center">
            <h2>Money transfer made easy the western union app</h2>
            <p>To become a leading worldwide financial and money transfer service
provider. We seek leadership by instilling pride in our people, taking
responsibility and creating value for our communities and for our
customer.</p>
<div class="bTn">
                <a href="about.php" class="webBtn" style="display: block;">
                    <img src="images/ico1.png"> 
                    <div class="download">
                        <span>Download on</span>
                        <br>
                        <span>Android</span>
                    </div>
                </a>
                <a href="contact.php" class="webBtn" style="display: block;">
                    <img src="images/ico2.png"> 
                    <div class="download">
                        <span>Download on</span>
                        <br>
                        <span>iOS</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
</main>
<?php require_once('includes/footer.php');?>
</body>
</html>