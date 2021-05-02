<!doctype html>
<html>
<head>
<title>Dashboard – Altras.</title>
<?php require_once('../includes/site-master.php'); ?>
</head>
<body id="home-page">
    <?php require_once('../includes/sidebar.php'); ?>
<main>
    <div id="dash">
        <div class="contain-fluid">
            <?php require_once('../includes/headerTop.php'); ?>
            <div class="dashBody">
                <div class="dashHeading">
                    <h3>Dashboard | <span>Overview</span></h3>
                </div>
                <div class="flex outerDashFlex">
                    <div class="flex flexDash">
                        <div class="col">
                            <a href="../transfer.php" class="inner">
                                <div class="imgIco">
                                    <img src="../images/dash1.png">
                                </div>
                                <h4>Send Money</h4>
                            </a>
                        </div>
                        <div class="col">
                            <a href="addReceiver.php" class="inner">
                                <div class="imgIco">
                                    <img src="../images/dash2.png">
                                </div>
                                <h4>Add Receiver</h4>
                            </a>
                        </div>
                        <div class="col">
                            <a href="" class="inner">
                                <div class="imgIco">
                                    <img src="../images/dash3.png">
                                </div>
                                <h4>Today's Rate</h4>
                            </a>
                        </div>
                        <div class="col">
                            <a href="" class="inner">
                                <div class="imgIco">
                                    <img src="../images/dash4.png">
                                </div>
                                <h4>Delivery Address</h4>
                            </a>
                        </div>
                        <div class="col">
                            <a href="" class="inner">
                                <div class="imgIco">
                                    <img src="../images/dash5.png">
                                </div>
                                <h4>Upload Documents</h4>
                            </a>
                        </div>
                        <div class="col">
                            <a href="" class="inner">
                                <div class="imgIco">
                                    <img src="../images/dash6.png">
                                </div>
                                <h4>Our Branches</h4>
                            </a>
                        </div>
                        <div class="mobileAppDash">
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
                        </div>
                    </div>
                    <div class="historyBlk">
                        <div class="inner scrollbar">
                            <!-- <div class="noTransection text-center">
                                <h3>There is no transection history</h3>
                            </div> -->
                            <div class="headingBlk">
                                <h3>Transection History</h3>
                            </div>
                            
                            <div class="_card">
                                <div class="flex">
                                    <div class="sideIco">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="sideCntnt">
                                        <h4>Asma Muhammad</h4>
                                        <span class="address">SGD 312.00</span>
                                        <span class="status dotRed">Payment Decline</span>
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
                                        <a href="" class="footerCol">
                                            <span><i class="fa fa-info-circle"></i></span>
                                            <h5>Details</h5>
                                        </a>
                                        <a href="" class="footerCol">
                                            <span><i class="fa fa-circle"></i></span>
                                            <h5>Status</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="_card">
                                <div class="flex">
                                    <div class="sideIco">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="sideCntnt">
                                        <h4>Asma Muhammad</h4>
                                        <span class="address">SGD 312.00</span>
                                        <span class="status dotRed">Payment Decline</span>
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
                                        <a href="" class="footerCol">
                                            <span><i class="fa fa-info-circle"></i></span>
                                            <h5>Details</h5>
                                        </a>
                                        <a href="" class="footerCol">
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

</main>
<script type="text/javascript" src="<?= $baseurl ?>js/main.js?v=1.0"></script>
</body>
</html>