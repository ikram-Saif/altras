<!doctype html>
<html>
<head>
<title>Send Money – Altras.</title>
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
                    <div class="dashHeading lessWideBtn">
                        <h3>Dashboard | <span>Send Money</span></h3>
                        <div class="dashSideBtn">
                           <a href="addReceiver.php" class="moreLnk webBtn colorBtn">Add new reciever</a>
                        </div>
                    </div>
                    <div class="dashForms sendFormMoney">
                    <form action="" method="">
                        <fieldset>
                            <!-- <div class="txtGrp flex formHeadAll">
                                <h6>Transection Info</h6>
                                <a href="addReceiver.php" class="moreLnk"><i class="fi-user"></i> Add new reciever</a>
                            </div> -->
                            <div class="flex flex-2">
                                <div class="fullWideField inner">
                                    <label>Select Reciever</label>
                                    <select name="" id="" class="txtBox">
                                        <option value="">select reciever</option>
                                    </select>
                                </div>
                                <div class="fullWideField inner">
                                    <label>Choose Delivery Currency</label>
                                    <select name="" id="" class="txtBox">
                                        <option value="">select currency</option>
                                    </select>
                                </div>
                                <div class="fullWideField inner">
                                    <label>Choose Delivery Method</label>
                                    <select name="" id="" class="txtBox">
                                        <option value="">select method</option>
                                    </select>
                                </div>
                                <div class="fullWideField inner">
                                    <label>Parpose of Transaction</label>
                                    <select name="" id="" class="txtBox">
                                        <option value="">select parpose of transaction</option>
                                    </select>
                                </div>
                            </div>
                            <div class="cmnBtn text-center">
                                <button type="button" class="webBtn colorBtn nextBtn">Next</button>
                            </div>
                        </fieldset>
                        <fieldset>
                            <div class="txtGrp flex formHeadAll">
                                <h6>Transection Info</h6>
                            </div>
                            <div class="flex flex-2">
                                <div class="fullWideField inner">
                                    <label>Enter Amount to Recieve</label>
                                    <div class="relative outCmnLabelTxt">
                                        <input type="text" name="" value="2000" placeholder="" class="txtBox">
                                        <span class="cmnLabelTxt">USD</span>
                                    </div>
                                </div>
                                <div class="fullWideField inner">
                                    <label>Enter Amount to Send</label>
                                    <div class="relative outCmnLabelTxt">
                                        <input type="text" name="" value="2000" placeholder="" class="txtBox">
                                        <span class="cmnLabelTxt">GBP</span>
                                    </div>
                                </div>
                                <div class="fullWideField inner">
                                    <label>Choose Payment Method</label>
                                    <select name="" id="" class="txtBox">
                                        <option value="">payment method</option>
                                    </select>
                                </div>
                                <div class="fullWideField inner">
                                    <label>Source of Fund</label>
                                    <select name="" id="" class="txtBox">
                                        <option value="">select source of fund</option>
                                    </select>
                                </div>
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
                            <div class="txtGrp flex highlightFlex dotedFlex">
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
        </div>
    </div>

</main>
<?php require_once('../includes/footer.php'); ?>
</body>
</html>