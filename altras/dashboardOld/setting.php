<!doctype html>
<html>
<head>
<title>Settings – Altras.</title>
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
                    <h3>Dashboard | <span>Settings</span></h3>
                </div>
                <form action="" method="">
                    <div class="blk">
                        <div class="_header">
                            <h3>Contact Info</h3>
                        </div>
                        <div class="formBlk">
                            <div class="flex flex-2 formRow">
                                <div class="innerTxt txtGrp">
                                    <div class="verifyBlk">
                                        <input type="text" name="" id="" class="txtBox" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="innerTxt txtGrp">
                                    <div class="verifyBlk">
                                        <input type="text" name="" id="" class="txtBox" placeholder="Phone Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blk">
                    <div class="_header">
                        <h3>Profile Info</h3>
                    </div>
                    <div class="formBlk">
                        <div class="flexRow flex">
                            <div class="col col2">
                                <h4 class="color acountDeatilHeading">Account Details</h4>
                                <div class="flex flex-2 formRow">
                                    <div class="innerTxt txtGrp">
                                        <input type="text" name="" id="" class="txtBox" placeholder="Full Name">
                                    </div>
                                    <div class="innerTxt txtGrp">
                                        <input type="text" name="" id="" class="txtBox" placeholder="Profile Headline">
                                    </div>
                                    <div class="innerTxt txtGrp">
                                        <select name="" id="" class="txtBox selectpicker" data-live-search="true">
                                            <option value="">Country</option>
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
                                    <div class="innerTxt txtGrp">
                                        <input type="text" name="" id="" class="txtBox" placeholder="City or State">
                                    </div>
                                    <div class="innerTxt txtGrp">
                                        <input type="text" name="" id="" class="txtBox" placeholder="Zip Code">
                                    </div>
                                    <div class="innerTxt txtGrp">
                                        <input type="text" name="" id="" class="txtBox" placeholder="Address">
                                    </div>
                                </div>
                                <div class="txtGrp">
                                        <textarea name="" id="" class="txtBox" placeholder="Profile Bio"></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="file" id="uploadFile" name="uploadFile" class="uploadFile" data-file="">
                        <div class="bTn text-center">
                            <button type="reset" class="webBtn blueBtn">Cancel</button>
                            <button type="submit" class="webBtn colorBtn">Save</button>
                        </div>
                    </div>
                </div>

                <div class="blk changePassword">
                    <div class="_header">
                        <h3>Change Password</h3>
                        <div class="info">
                            <i class="fi-question-circle"></i>
                            <div class="infoIn">
                                <p class="semi">Your password must contain the following:</p>
                                <ol class="_list2">
                                    <li>At least 8 characters in length (a strong password has at least 14 characters)</li>
                                    <li>At least 1 letter and at least 1 number or symbol</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="formBlk">
                        <div class="row formRow">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4 txtGrp">
                                <input type="password" name="" id="" class="txtBox" placeholder="Current Password">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4 txtGrp">
                                <input type="password" name="" id="" class="txtBox" placeholder="New Password">
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 col-xx-4 txtGrp">
                                <input type="password" name="" id="" class="txtBox" placeholder="Confirm new Password">
                            </div>
                        </div>
                        <div class="bTn text-center">
                            <button type="reset" class="webBtn blueBtn">Cancel</button>
                            <button type="submit" class="webBtn colorBtn">Change</button>
                        </div>
                    </div>
                </div>
                <div class="blk">
                    <div class="_header">
                        <h3>Change Profile Image</h3>
                    </div>
                    <div class="flexRow flex profileDp">
                            <div class="col col1">
                                <div class="proDp ico">
                                    <img src="../images/users/3.jpg" alt="">
                                </div>
                                <div class="text-center"><button type="button" class="webBtn colorBtn smBtn uploadImg" id="uploadDp" data-image-src="dp"><i class="fi-user"></i> Change Photo</button></div>
                                <div class="noHats text-center">(Please upload your photo)</div>
                            </div>
                    </div>
                    <div class="bTn text-center">
                            <button type="reset" class="webBtn blueBtn">Cancel</button>
                            <button type="submit" class="webBtn colorBtn">Save</button>
                        </div>
                </div>
                </form>
                
            </div>
        </div>
    </div>

</main>
<script type="text/javascript" src="<?= $baseurl ?>js/main.js?v=1.0"></script>
</body>
</html>