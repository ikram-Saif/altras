<!doctype html>
<html>
<head>
<title>Help – Altras.</title>
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
                    <h3>Dashboard | <span>Help</span></h3>
                </div>
                <div class="dashForms helpSection">
                    <h3>Got a question?</h3>
                    <p>Check out the available queries below</p>
                    <ul>
                        <li>
                            <h4>How do i creat an account?</h4>
                            <a href="javascript:void(0)" class="popBtn" data-popup="help">Watch <i class="fa fa-play"></i></a>
                        </li>
                        <li>
                            <h4>How do i upload documents?</h4>
                            <a href="javascript:void(0)" class="popBtn" data-popup="help">Watch <i class="fa fa-play"></i></a>
                        </li>
                        <li>
                            <h4>How do i add recipients?</h4>
                            <a href="javascript:void(0)" class="popBtn" data-popup="help">Watch <i class="fa fa-play"></i></a>
                        </li>
                        <li>
                            <h4>How to pay cash through an agent?</h4>
                            <a href="javascript:void(0)" class="popBtn" data-popup="help">Watch <i class="fa fa-play"></i></a>
                        </li>
                        <li>
                            <h4>How to find out delivery addressess?</h4>
                            <a href="javascript:void(0)" class="popBtn" data-popup="help">Watch <i class="fa fa-play"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<div class="popup vidPop" data-popup="help">
    <div class="tableDv">
        <div class="tableCell">
            <div class="contain">
                <div class="_inner">
                    <div class="crosBtn"></div>
                    <h2>Five Tips to Increase Value of Your Property</h2>
                    <div class="videoPopup">
                        <video autoplay="" muted="" loop="" height="100%" width="100%">
                            <source src="../images/videos/Advantages-Altras.mp4" type="video/mp4">
                        </video>
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