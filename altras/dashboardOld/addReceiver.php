<!doctype html>
<html>
<head>
<title>Add Receiver – Altras.</title>
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
                    <h3>Dashboard | <span>Add Receiver</span></h3>
                </div>
                <div class="dashForms">
                    <form action="" method="">
                        <div class="flex flex-2">
                            <div class="inner">
                                <label>Receiver Company</label>
                                <select name="" id="" class="txtBox">
                                    <option value="">select receiver country</option>
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
                                <label>Receiver City</label>
                                <select name="" id="" class="txtBox">
                                    <option value="">select receiver city</option>
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
                                <label>Receiver Arabic Name</label>
                                <input type="text" name="" value="" class="txtBox" placeholder="receiver full arabic name">
                            </div>
                            <div class="inner">
                                <label>Receiver English Name</label>
                                <input type="text" name="" value="" class="txtBox" placeholder="receiver full english name">
                            </div>
                            <div class="inner">
                                <label>Receiver Phone Number</label>
                                <input type="tel" name="" value="+249" class="txtBox" placeholder="">
                            </div>
                            <div class="inner">
                                <label>Receiver Nationality</label>
                                <select name="" id="" class="txtBox">
                                    <option value="">select receiver nationality</option>
                                    <option value="London">London</option>
                                    <option value="Birmingham">Birmingham</option>
                                    <option value="Leeds">Leeds</option>
                                    <option value="Glasgow">Glasgow</option>
                                </select>
                            </div>
                            <div class="inner">
                                <label>Purpose of Transfer</label>
                                <select name="" id="" class="txtBox">
                                    <option value="">select pupose of transfer</option>
                                    <option value="London">London</option>
                                    <option value="Birmingham">Birmingham</option>
                                    <option value="Leeds">Leeds</option>
                                    <option value="Glasgow">Glasgow</option>
                                </select>
                            </div>
                            <div class="inner">
                                <label>Delivery Method</label>
                                <select name="" id="" class="txtBox">
                                    <option value="">select delivery method</option>
                                    <option value="">Cash</option>
                                    <option value="">Card</option>
                                </select>
                            </div>
                        </div>
                        <div class="bTn text-center">
                            <button type="submit" name="" class="webBtn colorBtn">Add Receiver</button>
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