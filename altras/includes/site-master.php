<?php
    $page = substr(basename($_SERVER['PHP_SELF']), 0, -4);
    if ($_SERVER['HTTP_HOST'] != 'localhost') {
        $baseurl = "https://www.herosolutions.com.pk/breera/altras/";
    } else {
        $baseurl = "http://localhost/altras/";
    }
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="title" content="altras">
<meta name="description" content="altras. Activez votre carte SIM">
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.herosolutions.com.pk/breera/altras/index.php">
<meta property="og:title" content="altras">
<meta property="og:description" content="altras. Activez votre carte SIM">
<meta property="og:image" content="https://www.herosolutions.com.pk/breera/altras/images/thumbnail.jpg">
<meta property="twitter:card" content="thumbnail">
<meta property="twitter:url" content="https://www.herosolutions.com.pk/breera/altras/index.php">
<meta property="twitter:title" content="altras">
<meta property="twitter:description" content="altras. Activez votre carte SIM">
<meta property="twitter:image" content="https://www.herosolutions.com.pk/breera/altras/images/thumbnail.jpg">


<!-- Css files -->
<!-- Bootstrap Css -->
<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/bootstrap.min.css">
<!-- Main Css -->
<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/main.css?v=4">
<!-- Dashboard Css -->
<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/dashboard.css?v=1">
<!-- Media-Query Css -->
<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/responsive.css?v=3">
<!-- Font-Awesome Css -->
<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/font-awesome.min.css">
<!-- Font-Icon Css -->
<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/font-icon.min.css">
<!-- Select Css -->
<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/select.min.css">
<!-- Owl Carousel Css -->
<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/owl.carousel.min.css">
<!-- Owl Theme Css -->
<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/owl.theme.min.css">
<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/flipster.css">
<link type="text/css" rel="stylesheet" href="css/animation.css">

<!-- JS Files -->
<script type="text/javascript" src="<?= $baseurl ?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?= $baseurl ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= $baseurl ?>js/jquery-ui.min.js"></script>
<!-- Select Js -->
<script type="text/javascript" src="<?= $baseurl ?>js/select.min.js"></script>
<script type="text/javascript">
    $(function(){
        $('.selectpicker').selectpicker({
            multipleSeparator: '<em> / </em>'
        });
    });
</script>
<!-- Owl Carousel Js -->
<script type="text/javascript" src="<?= $baseurl ?>js/owl.carousel.min.js"></script>
<!-- <script src="<?= $baseurl ?>js/countrypicker.min.js"></script> -->
<script type="text/javascript" src="<?= $baseurl ?>js/flipster.js"></script>
<script type="text/javascript">
    $(window).on('load', function() {
        $('#owl-partner').owlCarousel({
            autoplay: true,
            nav: true,
            navText: ['<i class="fi-chevron-left"></i>','<i class="fi-chevron-right"></i>'],
            dots: false,
            loop: true,
            smartSpeed: 1000,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
            autoWidth: true,
            margin: 20,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                767: {
                    items: 3
                },
                991: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            }
        });
        $('#owl-testi').owlCarousel({
            autoplay: true,
            dots: true,
            loop: true,
            center: true,
            autoWidth: true,
            autoHeight: false,
            smartSpeed: 1000,
            autoplayTimeout: 10000,
            autoplayHoverPause: true,
            responsive: {
                0:{
                    items: 1,
                    autoplay: false,
                    autoHeight: true,
                    dots: true
                },
                600:{
                    items: 2
                },
                1000:{
                    items: 3
                }
            }
        });
        $('#owl-SmBanner').owlCarousel({
            autoplay: true,
            nav: true,
            navText: ['<i class="fi-chevron-left"></i>','<i class="fi-chevron-right"></i>'],
            dots: false,
            loop: true,
            smartSpeed: 1000,
            autoplayTimeout: 8000,
            autoplayHoverPause: true,
            autoWidth: false,
            // margin: 20,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                767: {
                    items: 1
                },
                991: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });

    });
    $(document).ready(function() {
                $("#coverflow").flipster({
                    style: 'coverflow',
                    spacing: -0.5,
                    fadeIn: 1000,
                    autoplay: 5000,
                    scrollwheel: false,
                    loop: true,
                    buttons: 'custom',
                    buttonPrev: '<i class="fi-chevron-left"></i>',
                    buttonNext: '<i class="fi-chevron-right"></i>'
                });
            });
</script>
<script type="text/javascript" src="js/animation.js"></script>
<!-- Favicon -->
<link type="image/png" rel="icon" href="<?= $baseurl ?>images/favicon.png">
