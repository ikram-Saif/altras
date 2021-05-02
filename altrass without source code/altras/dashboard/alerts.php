<!doctype html>
<html>
<head>
<title>Dashboard – Altras.</title>
<?php require_once('./includes/site-master.php'); ?>
</head>
<body id="home-page">
    <?php require_once('./includes/headerTop.php'); ?>
<main>
    <div id="dash">
        <div class="contain">
            <div class="flex">
                <?php require_once('./includes/sidebar.php'); ?>
                <div class="dashBody">
                    <div class="_alert alert_success flex">
                        <span class="symbolClass"><i class="fa fa-check-square"></i></span>
                        <p>You successfully read this important alert message</p>
                        <span class="_crossClass"><i class="fi-cross"></i></span>
                    </div>
                    <div class="_alert alert_error flex">
                        <span class="symbolClass"><i class="fa fa-exclamation-triangle"></i></span>
                        <p>There is an error to read this important alert message</p>
                        <span class="_crossClass"><i class="fi-cross"></i></span>
                    </div>
                    <div class="_alert alert_info flex">
                        <span class="symbolClass"><i class="fa fa-info-circle"></i></span>
                        <p>There is an important information for you</p>
                        <span class="_crossClass"><i class="fi-cross"></i></span>
                    </div>
                    <div class="_alert alert_warn flex">
                        <span class="symbolClass"><i class="fa fa-question-circle"></i></span>
                        <p>Warning alerts</p>
                        <span class="_crossClass"><i class="fi-cross"></i></span>
                    </div>
                    <a href="javascript:void(0)" class="popBtn alert_success webBtn altBtn" data-popup="successPopup">Sussess Alert</a>
                    <a href="javascript:void(0)" class="popBtn alert_error webBtn altBtn" data-popup="errorPopup">Error Alert</a>
                    <a href="javascript:void(0)" class="popBtn alert_info webBtn altBtn" data-popup="infoPopup">Info Alert</a>
                    <a href="javascript:void(0)" class="popBtn alert_warn webBtn altBtn" data-popup="warnPopup">Warning Alert</a>
                </div>
            </div>
        </div>
    </div>

</main>

<div class="popup" data-popup="successPopup">
    <div class="tableDv">
        <div class="tableCell">
            <div class="contain">
                <div class="_inner">
                    <div class="alert alert_successPop">
                        <span class="symbolClass"><i class="fa fa-check-square"></i></span>
                        <h4>Awesome!</h4>
                        <p>You successfully read this important alert message</p>
                        <a href="javascript:void(0)" class="webBtn crossClass">Ok</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup" data-popup="errorPopup">
    <div class="tableDv">
        <div class="tableCell">
            <div class="contain">
                <div class="_inner">
                    <div class="alert alert_errorPop">
                        <span class="symbolClass"><i class="fa fa-exclamation-triangle"></i></span>
                        <h4>Opp!</h4>
                        <p>There is an error to read this important alert message</p>
                        <a href="javascript:void(0)" class="webBtn crossClass">Ok</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup" data-popup="infoPopup">
    <div class="tableDv">
        <div class="tableCell">
            <div class="contain">
                <div class="_inner">
                    <div class="alert alert_infoPop">
                        <span class="symbolClass"><i class="fa fa-info-circle"></i></span>
                        <h4>Information</h4>
                        <p>There is an important information for you</p>
                        <a href="javascript:void(0)" class="webBtn crossClass">Ok</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup" data-popup="warnPopup">
    <div class="tableDv">
        <div class="tableCell">
            <div class="contain">
                <div class="_inner">
                    <div class="alert alert_warnPop">
                        <span class="symbolClass"><i class="fa fa-exclamation"></i></span>
                        <h4>Warning!</h4>
                        <p>Warning alerts</p>
                        <a href="javascript:void(0)" class="webBtn crossClass">Ok</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('./includes/footer.php'); ?>
</body>
</html>