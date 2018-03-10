<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Synapse </title>
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
    <!-- use jssor.slider-21.1.5.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_options = {
              $AutoPlay: true,
              $Idle: 0,
              $AutoPlaySteps: 4,
              $SlideDuration: 1600,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 4,
              $SlideWidth: 140,
              $Cols: 7
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1200);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>  
       <link href="https://fonts.googleapis.com/css?family=Rakkas" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">
    </head>
    <body id="myPage" >
       
       <!-- ************* wrapper starts ***************  --> 
    <div id="wrapper">

     <!-- ************* container starts ***************  --> 
            <div id="container">

                    <header>
          
          <!-- header starts --> 
                            <div id="header">
                                <div id="navigationBar">



                                    <nav class="navbar navbar-default navbar-fixed-top navCustom">
                                          <div class="container-fluid">

                                          <div class="rows">

                                              <div class="col-lg-3 col-md-3 col-sm-3 col-xm-6">

                                                    <div class="navbar-header">
                                                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                      </button>
                                                      <a class="navbar-brand" href="index.php">
                                                          
                                                            <img src="img/logo.png" id="logo" alt="synapse pic" class="img-responsive">

                                                      </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xm-6">
                                                    <div class="collapse navbar-collapse" id="myNavbar">
                                                      <ul  id="navUl" class="nav navbar-nav navColor">
                                                        <li <?php if($page=="home") { echo 'class = "active" ';} ?> ><a href="index.php">Home</a></li>
                                                        <li <?php if($page=="events") { echo 'class = "active" ';} ?> ><a href="events.php">Events</a></li>
                                                        <li <?php if($page=="sports") { echo 'class = "active" ';} ?> >
                                                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sports <span class="caret"></span></a>
                                                           <ul id="navUl"class="dropdown-menu">
                                                                      <li><a href="football.php"> Football </a></li>
                                                                      <li><a href="cricket.php"> Cricket  </a></li>
                                                                      <li><a href="basketball.php"> BasketBall </a></li> 
                                                                      <li><a href="volleyball.php"> VolleyBall  </a></li>
                                                                      <li><a href="tabletennis.php"> Table&nbsp;Tennis </a></li>
                                                                      <li><a href="badmintion.php">  Badminton </a></li> 
                                                                      <li><a href="futsal.php"> Futsal/Cricsal  </a></li>
                                                                      <li><a href="chess.php"> Chess</a></li>
                                                                       <li><a href="computergaming.php"> Computer&nbsp;Gaming</a></li>
                                                                      
                                                             </ul>


                                                        </li>
                                                        
                                                        <li <?php if($page=="literary") { echo 'class = "active" ';} ?> ><a href="literary.php">Literary</a></li>
                                                        <li <?php if($page=="cultural") { echo 'class = "active" ';} ?> ><a href="cultural.php">Cultural</a></li> 
                                                         <li <?php if($page=="gallery") { echo 'class = "active" ';} ?> ><a href="gallery.php"> Gallery </a></li> 
                                                       
                                                      
                                                            <li><a href="index.php#about_us" target="_blank">About&nbsp;Us </a></li> 
                                                            <li><a href="#contact_us"  class="navlink" > Contact&nbsp;Us </a></li> 

                                                             
                                                        </ul>
                                                    </div>
                                            </div>

                                            <div class="clearfix"> </div>

                                          </div> 
                                          <div class="clearfix"> </div>
                                        </nav>            

                                    </div>
                            </div>
                         </div>
            <!-- header starts -->
            
             <div class="clearfix"> </div>
                    </header>