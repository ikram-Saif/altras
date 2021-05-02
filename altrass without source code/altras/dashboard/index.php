<!doctype html>
<html>
<head>
<title>Dashboard – Altras.</title>
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
                        <h3>Dashboard | <span>Overview</span></h3>
                    </div>
                    <div class="outerDashFlex">
                        <div class="flex flexDash">
                            <div class="col">
                                <a href="sendMoney.php" class="inner">
                                    <div class="imgIco">
                                        <img src="../images/payment-method.png">
                                    </div>
                                    <h4>Send Money</h4>
                                </a>
                            </div>
                            <div class="col">
                                <a href="addReceiver.php" class="inner">
                                    <div class="imgIco">
                                        <img src="../images/add-group.png">
                                    </div>
                                    <h4>Add Receiver</h4>
                                </a>
                            </div>
                            <div class="col">
                                <a href="todayRate.php" class="inner">
                                    <div class="imgIco">
                                        <img src="../images/calculator.png">
                                    </div>
                                    <h4>Today's Rate</h4>
                                </a>
                            </div>
                            <div class="col">
                                <a href="deliveryAddress.php" class="inner">
                                    <div class="imgIco">
                                        <img src="../images/location.png">
                                    </div>
                                    <h4>Delivery Address</h4>
                                </a>
                            </div>
                            <div class="col">
                                <a href="uploadDocument.php" class="inner">
                                    <div class="imgIco">
                                        <img src="../images/file.png">
                                    </div>
                                    <h4>Upload Documents</h4>
                                </a>
                            </div>
                            <div class="col">
                                <a href="ourBranches.php" class="inner">
                                    <div class="imgIco">
                                        <img src="../images/museum.png">
                                    </div>
                                    <h4>Our Branches</h4>
                                </a>
                            </div>
                            <!-- <div class="mobileAppDash">
                                <h3>Tight on time?</h3>
                                <p>Altras Money Transfer App has a very high ranking among other Money Transfer Apps</p>
                                <div class="bTn mobileAppBtns">
                                    <a href="?" class="webBtn">
                                        <img src="../images/ico1.png"> 
                                        <div class="download">
                                            <span>Download on the</span>
                                            <br>
                                            <span>Android</span>
                                        </div>
                                    </a>
                                    <a href="?" class="webBtn">
                                        <img src="../images/ico2.png"> 
                                        <div class="download">
                                            <span>Download on the</span>
                                            <br>
                                            <span>iOS</span>
                                        </div>
                                    </a>
                                </div>
                            </div> -->
                        </div>
                        <div class="historyBlk">
                            <div class="inner">
                                <div class="headingBlk">
                                    <h3>Transection History</h3>
                                </div>
                                <div class="flex outrCardCol">
                                    <div class="cardCol">
                                        <div class="_card">
                                        <a href="sendMoney.php" class="sendIcon" style="display: block;">
                                            <img src="../images/users/transfer.png">
                                        </a>
                                            <div class="flex">
                                                <div class="sideIco">
                                                    <i class="fa fa-user-o"></i>
                                                </div>
                                                <div class="sideCntnt">
                                                    <h4>Asma Muhammad</h4>
                                                    <span class="address">SGD 312.00</span>
                                                    <span class="status dotRed">Payment Declined</span>
                                                </div>
                                            </div>
                                            <div class="flex infoId">
                                                <div class="leftCol">
                                                    <h5>ID:2437704</h5>
                                                </div>
                                                <div class="rightCol">
                                                    <h5>2020-02-27 / 10:09</h5>
                                                </div>
                                            </div>
                                            <div class="cardFooter">
                                                <div class="flex">
                                                    <a href="" class="footerCol">
                                                        <span><i class="fa fa-share-square-o"></i></span>
                                                        <h5>Share</h5>
                                                    </a>
                                                    <a href="javascript:void(0)" class="footerCol popBtn" data-popup="transectionDetails">
                                                        <span><i class="fa fa-info-circle"></i></span>
                                                        <h5>Details</h5>
                                                    </a>
                                                    <a href="javascript:void(0)" class="footerCol popBtn" data-popup="transectionStatus">
                                                        <span><i class="fa fa-circle"></i></span>
                                                        <h5>Status</h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cardCol">
                                        <div class="_card">
                                        <a href="sendMoney.php" class="sendIcon" style="display: block;">
                                            <img src="../images/users/transfer.png">
                                        </a>
                                            <div class="flex">
                                                <div class="sideIco">
                                                    <i class="fa fa-user-o"></i>
                                                </div>
                                                <div class="sideCntnt">
                                                    <h4>Asma Muhammad</h4>
                                                    <span class="address">SGD 312.00</span>
                                                    <span class="status dotGreen">Completed</span>
                                                </div>
                                            </div>
                                            <div class="flex infoId">
                                                <div class="leftCol">
                                                    <h5>ID:2437704</h5>
                                                </div>
                                                <div class="rightCol">
                                                    <h5>2020-02-27 / 10:09</h5>
                                                </div>
                                            </div>
                                            <div class="cardFooter">
                                                <div class="flex">
                                                    <a href="" class="footerCol">
                                                        <span><i class="fa fa-share-square-o"></i></span>
                                                        <h5>Share</h5>
                                                    </a>
                                                    <a href="javascript:void(0)" class="footerCol popBtn" data-popup="transectionDetails">
                                                        <span><i class="fa fa-info-circle"></i></span>
                                                        <h5>Details</h5>
                                                    </a>
                                                    <a href="javascript:void(0)" class="footerCol popBtn" data-popup="transectionStatus">
                                                        <span><i class="fa fa-circle"></i></span>
                                                        <h5>Status</h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

</main>
<?php require_once('../includes/footer.php'); ?>
</body>
</html>