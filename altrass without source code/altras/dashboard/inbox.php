<!doctype html>
<html>
<head>
<title>Inbox – Altras.</title>
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
                <div class="inboxNew scrollbar">
                    <ul>
                        <li>
                            <a href="?">
                                <div class="cntntInbox">
                                    <h4>What is Lorem Ipsum?</h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form , by injected humour, or randomised words which don't look even slightly believable.</p>
                                </div>
                                <div class="notificationDate date">
                                    31 March, 2020
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="?">
                                <div class="cntntInbox">
                                    <h4>Where does it come from?</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                                </div>
                                <div class="notificationDate date">
                                    31 March, 2020
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="?">
                                <div class="cntntInbox">
                                    <h4>Where can I get some?</h4>
                                    <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here.</p>
                                </div>
                                <div class="notificationDate date">
                                    31 March, 2020
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>

</main>
<?php require_once('../includes/footer.php'); ?>
</body>
</html>