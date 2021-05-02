<!doctype html>
<html>
<head>
<title>Inbox – Altras.</title>
<?php require_once('../includes/site-master.php'); ?>
</head>
<body id="home-page">
    <?php require_once('../includes/sidebar.php'); ?>
<main>
    <div id="dash">
        <div class="contain-fluid">
            <?php require_once('../includes/headerTop.php'); ?>
            <div id="inbox">
            <form action="" method="post">
                <button class="webBtn removeBtn colorBtn">Remove Contact</button>
                <div class="outer">
                    <div class="inter userBlk semi">
                        <ul class="userLst">
                            <li>
                                <div class="inr">
                                    <span>High complex milling machines in</span>
                                    <div class="msgBtn"><i class="fa fa-envelope-open"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="inr">
                                    <span>Complex vending machines</span>
                                    <div class="msgBtn"><i class="fa fa-envelope"></i><span class="dot">1</span></div>
                                </div>
                            </li>
                            <li class="fold">
                                <div class="inr">
                                    <span>Venom Expansion in italy</span>
                                    <div class="msgBtn"><i class="fa fa-envelope"></i><span class="dot">1</span></div>
                                </div>
                            </li>
                            <li class="fold">
                                <div class="ico"><img src="../images/users/1.jpg" alt=""></div>
                                <div class="inr">
                                    <span>John Wick</span>
                                    <div class="msgBtn"><i class="fa fa-envelope-open"></i></div>
                                </div>
                            </li>
                            <li>
                                <div class="ico"><img src="../images/users/3.jpg" alt=""></div>
                                <div class="inr">
                                    <span>Sara Macclon</span>
                                    <div class="msgBtn"><i class="fa fa-envelope"></i><span class="dot">1</span></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="inter chatBlk">
                        <div class="chat">
                            <div class="buble me">
                                <div class="ico"><img src="../images/users/4.jpg" alt=""></div>
                                <div class="txt">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, temporibus porro ipsam facere ipsum tenetur quaerat laudantium saepe beatae et est laborum doloremque.</p>
                                    <p>In debitis maiores libero excepturi! Incidunt, consectetur eius eveniet inventore quidem exercitationem! Vel alias qui officiis similique optio non dolore assumenda itaque.</p>
                                </div>
                            </div>
                            <div class="buble you">
                                <div class="ico"><img src="../images/users/1.jpg" alt=""></div>
                                <div class="txt">
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit, temporibus porro ipsam facere ipsum tenetur quaerat laudantium saepe beatae et est laborum doloremque.</p>
                                    <p>In debitis maiores libero excepturi! Incidunt, consectetur eius eveniet inventore quidem exercitationem! Vel alias qui officiis similique optio non dolore assumenda itaque.</p>
                                </div>
                            </div>
                        </div>
                        <div class="write">
                            <!-- <div class="filesAtch">
                                <span><i class="fi-cross-circle"></i> words <em></em></span>
                                <span class="fail"><i class="fi-cross-circle"></i> words <em></em></span>
                            </div> -->
                            <div class="inner relative">
                                <button type="button" class="atchBtn uploadImg" data-image-src=""><i class="fa fa-paperclip"></i></button>
                                <textarea class="txtBox" placeholder="Type your message..."></textarea>
                                <input type="file" id="uploadFile" name="uploadFile" class="uploadFile" data-file="">
                                <a href="?" class="skypeBtn"><img src="../images/skype.svg" alt=""></a>
                                <button type="submit" class="sndBtn"><i class="fa fa-send"></i></button>
                            </div>
                        </div>
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