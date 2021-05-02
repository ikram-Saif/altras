<!doctype html>
<html>
<head>
<title>Our Branches – Altras.</title>
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
                    <h3>Dashboard | <span>Our Branches</span></h3>
                </div>
                <div class="dashForms">
                    <form action="" method="">
                        <div class="flex flex-2 brancheLst">
                            <div class="inner">
                                <label>Customer Company</label>
                                <select name="" id="" class="txtBox">
                                    <option value="">select customer country</option>
                                    <option value="London">London</option>
                                    <option value="Birmingham">Birmingham</option>
                                    <option value="Leeds">Leeds</option>
                                </select>
                                <div class="bTn">
                                    <button type="submit" name="" class="webBtn colorBtn">Submit</button>
                                </div>
                            </div>
                            <div class="inner">
                                <div class="branchListing hideDiv">
                                    <ul>
                                        <li>
                                            <h4>Office Name</h4>
                                            <p>Ahmed Abdelghani</p>
                                        </li>
                                        <li>
                                            <h4>Address</h4>
                                            <p>156 Great Charles Street Queensway Birmingham West Midlands B3 3HN UNITED KINGDOM</p>
                                        </li>
                                        <li>
                                            <h4>Working Hours</h4>
                                            <p>Sat-Thu 7 AM to 3 PM</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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