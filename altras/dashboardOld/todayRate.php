<!doctype html>
<html>
<head>
<title>Today's Rates – Altras.</title>
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
                    <h3>Dashboard | <span>Today's Rates</span></h3>
                </div>
                <div class="dashForms">
                    <form action="" method="">
                        <div class="flex flex-2">
                            <div class="inner">
                                <label>Receiving Company</label>
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
                                <label>Delivery Method</label>
                                <select name="" id="" class="txtBox">
                                    <option value="">cash pick</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex countField">
                            <div class="inner">
                                <div class="smIcoField">
                                    <span class="active"><i class="fa fa-angle-down"></i></span>
                                    <input type="text" name="" value="0" class="txtBox">
                                </div>
                            </div>
                            <div class="inner">
                                <div class="smIcoField">
                                    <span class="active">GBP</span>
                                    <input type="text" name="" value="0" class="txtBox">
                                </div>
                            </div>
                            <div class="inner">
                                <div class="smIcoField">
                                    <span>GBP</span>
                                    <input type="text" name="" value="0" class="txtBox">
                                </div>
                            </div>
                            <div class="inner">
                                <div class="smIcoField">
                                    <span></span>
                                    <input type="text" name="" value="0" class="txtBox">
                                </div>
                            </div>
                            <div class="inner">
                                <div class="smIcoField">
                                    <span></span>
                                    <input type="text" name="" value="0" class="txtBox">
                                </div>
                            </div>
                            <div class="inner">
                                <div class="smIcoField">
                                    <span>GBP</span>
                                    <input type="text" name="" value="1000" class="txtBox">
                                </div>
                            </div>
                        </div>
                        <div class="bTn text-center">
                            <button type="submit" name="" class="webBtn colorBtn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</main>
<script type="text/javascript" src="<?= $baseurl ?>js/main.js?v=1.0"></script>
</body>
</html>