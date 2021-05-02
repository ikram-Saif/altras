<!doctype html>
<html>
<head>
<title>Today's Rates – Altras.</title>
<?php require_once('../includes/site-master.php'); ?>
</head>
<body id="home-page">
<?php require_once('../includes/headerTop.php'); ?>
<main>
    <div id="dash">
        <div class="contain">
           <div class="flex">
                <?php require_once('../includes/sidebar.php'); ?>
                <div class="dashBody">
                    <div class="dashHeading">
                        <h3>Dashboard | <span>Today's Rates</span></h3>
                    </div>
                    <div class="dashForms newCalculate">
                        <form action="" method="">
                        <div class="_inner">
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
	                                    <img src="../images/flags/gb.svg">
	                                    <div class="_label">
	                                        <h4>UK</h4>
	                                        
	                                    </div>
	                                </div>
	                                <ul class="dropCnt">
	                                    <li>
	                                       <img src="../images/flags/us.svg">
	                                       <div class="dropLabel">
	                                            <h4>United State</h4>
	                                        </div>
	                                    </li>
	                                    <li>
	                                       <img src="../images/flags/ad.svg">
	                                       <div class="dropLabel">
	                                            <h4>Andorra</h4>
	                                        </div>
	                                    </li>
	                                    <li>
	                                       <img src="../images/flags/gb.svg">
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
	                                    <img src="../images/flags/sd.svg">
	                                    <div class="_label">
	                                        <h4>Sudan</h4>
	                                    </div>
	                                </div>
	                                <ul class="dropCnt">
	                                    <li>
	                                       <img src="../images/flags/us.svg">
	                                       <div class="dropLabel">
	                                            <h4>United State</h4>
	                                        </div>
	                                    </li>
	                                    <li>
	                                       <img src="../images/flags/ad.svg">
	                                       <div class="dropLabel">
	                                            <h4>Andorra</h4>
	                                        </div>
	                                    </li>
	                                    <li>
	                                       <img src="../images/flags/gb.svg">
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
                        </form>
                    </div>
                </div>
           </div>
        </div>
    </div>

</main>
<?php require_once('../includes/footer.php'); ?>
</body>
</html>