<?php require_once 'core/config.php'; ?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo SITE_NAME; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="synapsefavico.png">

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/font-awesome.css">

        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/jssor.slider-21.1.5.mini.js"></script>
        <script>
            jQuery(document).ready(function ($) {
                var jssor_1_options = {
                    $AutoPlay: true, $Idle: 0, $AutoPlaySteps: 4, $SlideDuration: 1600,
                    $SlideEasing: $Jease$.$Linear, $PauseOnHover: 4, $SlideWidth: 140, $Cols: 7
                };
                if ($("#jssor_1").length) {
                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
                    function ScaleSlider() {
                        var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                        if (refSize) {
                            refSize = Math.min(refSize, 1200);
                            jssor_1_slider.$ScaleWidth(refSize);
                        } else { window.setTimeout(ScaleSlider, 30); }
                    }
                    ScaleSlider();
                    $(window).bind("load", ScaleSlider);
                    $(window).bind("resize", ScaleSlider);
                    $(window).bind("orientationchange", ScaleSlider);
                }
            });
        </script>  
        <link href="https://fonts.googleapis.com/css?family=Rakkas|Sacramento|Mirza" rel="stylesheet">
    </head>
    <body id="myPage">
    <div id="wrapper">
        <div id="container">
            <header>
                <div id="header">
                    <div id="navigationBar">
                        <?php include 'core/templates/nav.php'; ?>
                    </div>
                </div>
                <div class="clearfix"></div>
            </header>