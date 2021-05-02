<!doctype html>
<html>
<head>
<title>Uploade Documents – Altras.</title>
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
                        <h3>Dashboard | <span>Uploade Documents</span></h3>
                    </div>
                    <div class="dashForms">
                        <form action="" method="">
                            <div class="flex flex-2 uploadDocLst">
                                <div class="inner">
                                    <div class="docBox">
                                        <h4>Select Document type</h4>
                                        <div class="lblBtn">
                                            <input type="radio" name="type" value="" id="identity" checked="">
                                            <label for="identity">Proof of identity</label>
                                        </div>
                                        <div class="lblBtn">
                                            <input type="radio" name="type" value="" id="address">
                                            <label for="address">Proof of address</label>
                                        </div>
                                        <div class="lblBtn">
                                            <input type="radio" name="type" value="" id="sourceFund">
                                            <label for="sourceFund">Proof of source of fund</label>
                                        </div>
                                        <!-- <div class="bTn">
                                            <button type="submit" name="" class="webBtn colorBtn">Send</button>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="inner">
                                    <div class="docBox" class="identity">
                                        <h4>Select proof of identity</h4>
                                        <div class="lblBtn">
                                            <input type="radio" name="identity" value="" id="passport">
                                            <label for="passport">Passport</label>
                                        </div>
                                        <div class="lblBtn">
                                            <input type="radio" name="identity" value="" id="driving">
                                            <label for="driving">Driving Licence</label>
                                        </div>
                                        <div class="lblBtn">
                                            <input type="radio" name="identity" value="" id="ukdriving">
                                            <label for="ukdriving">Uk Driving License</label>
                                        </div>
                                        <div class="lblBtn">
                                            <input type="radio" name="identity" value="" id="rPermit">
                                            <label for="rPermit">Resident Permit</label>
                                        </div>
                                        <div class="lblBtn">
                                            <input type="radio" name="identity" value="" id="aidCard">
                                            <label for="idCard">ID Card</label>
                                        </div>
                                        <div class="bTn">
                                            <a href="javascript:void(0)" class="webBtn blueBtn uploadImg" id="uploadDp" data-image-src="file">Upload The Document</a>
                                        </div>
                                    </div>
                                    <div class="docBox hideDiv" class="address">
                                        <h4>Select proof of address</h4>
                                        <div class="lblBtn">
                                            <input type="radio" name="address" value="" id="bankSt">
                                            <label for="bankSt">Bank Statement</label>
                                        </div>
                                        <div class="lblBtn">
                                            <input type="radio" name="address" value="" id="addressDriving">
                                            <label for="addressDriving">Driving Licence</label>
                                        </div>
                                        <div class="lblBtn">
                                            <input type="radio" name="address" value="" id="utilityBill">
                                            <label for="utilityBill">Utility Bill</label>
                                        </div>
                                        <div class="lblBtn">
                                            <input type="radio" name="address" value="" id="agrement">
                                            <label for="agrement">Tenancy Agreements</label>
                                        </div>
                                        <div class="bTn">
                                            <a href="javascript:void(0)" class="webBtn blueBtn uploadImg" id="uploadDp" data-image-src="file">Upload The Document</a>
                                        </div>
                                    </div>
                                    <div class="docBox hideDiv" class="address">
                                        <h4>Source of fund type</h4>
                                        <div class="lblBtn">
                                            <input type="radio" name="address" value="" id="bankSt">
                                            <label for="bankSt">Bank Statement</label>
                                        </div>
                                        <div class="lblBtn">
                                            <input type="radio" name="address" value="" id="paysplip">
                                            <label for="paysplip">Payslips</label>
                                        </div>
                                        <div class="lblBtn">
                                            <input type="radio" name="address" value="" id="paycheque">
                                            <label for="paycheque">Paycheque</label>
                                        </div>
                                        <div class="lblBtn">
                                            <input type="radio" name="address" value="" id="loan">
                                            <label for="loan">Loan from a bank</label>
                                        </div>
                                        <div class="lblBtn">
                                            <input type="radio" name="address" value="" id="annualTax">
                                            <label for="annualTax">Annual tax certificate P60</label>
                                        </div>
                                        <div class="lblBtn">
                                            <input type="radio" name="address" value="" id="compensation">
                                            <label for="compensation">Compensation Payment</label>
                                        </div>
                                        <div class="lblBtn">
                                            <input type="radio" name="address" value="" id="employment">
                                            <label for="employment">Employment ontract</label>
                                        </div>
                                        <div class="lblBtn">
                                            <input type="radio" name="address" value="" id="notLst">
                                            <label for="notLst">Other Document not listed above</label>
                                        </div>
                                        <div class="bTn">
                                            <a href="javascript:void(0)" class="webBtn blueBtn uploadImg" id="uploadDp" data-image-src="file">Upload The Document</a>
                                        </div>
                                        <div class="bTn">
                                            <a href="javascript:void(0)" class="webBtn blueBtn uploadImg" id="uploadDp" data-image-src="file">Upload Another Document</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="file" id="uploadFile" name="uploadFile" class="uploadFile" data-file="">
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