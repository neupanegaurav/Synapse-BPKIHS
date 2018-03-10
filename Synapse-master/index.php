<?php $page = "home"; ?>
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
                                                       
                                                      
                                                            <li><a href="index.php/#about_us" class="navlink">About&nbsp;Us </a></li> 
                                                         <li><a href="index.php/#contact_us"  class="navlink"> Contact&nbsp;Us </a></li> 
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
<br/>
       
                    <section>

                            <div id="section">
                
                <!-- home blog -->
                            <div id="homeBlog">
                                    <div class="container-fluid">
                                          
                                                <div class="row">
                                                        <div class="col-lg-9 col-md-8 col-sm-12 col-xm-12">
                                                            <div class="blogLg">
                                                              <a href="post.php" target="_blank"> 
                                                                  <h1> CMS vs BPKIHS: BPKIHS wins by 3-0  Lorem ipsum dolor sit amet, consectetur  </h1>


                                                                  <img src="img/sponser1.jpg" class="img-responsive">
                                                                  <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do   eiusmod
                                                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse

                                                                      <span>.............. </span>
                                                                      


                                                                      </p>
                                                              </a>
                                                            </div>
                                                                    
                                                        </div>

                                                        <div class="col-lg-3 col-md-4 col-sm-12 col-xm-12 " id="registerContent">

                                                            <div class="blogSm">
                                                              <a href="post.php" target="_blank">
                                                                  <h1> CMS vs BPKIHS: BPKIHS wins by 3-0  </h1>
                                                                  <img src="img/sponser1.jpg" class="img-responsive">
                                                                  <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do   eiusmod
                                                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                     

                                                                      </p>
                                                              </a>
                                                            </div>

                                                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="width:99%;margin:auto;margin-top:20px;">
                                                                      <!-- Indicators -->
                                                                      <ol class="carousel-indicators">
                                                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                                                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                                                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                                                      </ol>

                                                                      <!-- Wrapper for slides -->
                                                                      <div class="carousel-inner" role="listbox">
                                                                        <div class="item active">
                                                                          <img src="img/sponser1.jpg" alt="Synapse">
                                                                         
                                                                        </div>
                                                                        <div class="item">
                                                                           <img src="img/sponser1.jpg" alt="Synapse">
                                                                          
                                                                        </div>
                                                                        <div class="item">
                                                                           <img src="img/sponser1.jpg" alt="Synapse">
                                                                         
                                                                        </div>
                                                                        <div class="item">
                                                                           <img src="img/sponser1.jpg" alt="Synapse">
                                                                         <!--  <div class="carousel-caption">
                                                                             <h2 class="slidersponsertitle"> <span>Sponser 4 </span></h2>
                                                                          </div> -->
                                                                        </div>                                                                                                                                                
                                                                      </div>

                                                                      <!-- Controls -->
                                                                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                                        <span class="sr-only">Previous</span>
                                                                      </a>
                                                                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                                        <span class="sr-only">Next</span>
                                                                      </a>
                                                                    </div>
                                                                                                                                    
                                                        </div>
                                                         <div class="clearfix"> </div>
                                                </div>
                                                 <div class="clearfix"> </div>


                                      <div class="row">

                                        <h1 class="blogTopHeader"> Latest News </h1> 
                                         
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
                                                 
                                                        <div class="blogDown"> 
                                                          <h1> Sports </h1>

                                                          <div class="media">
                                                            <div class="media-left">
                                                              <a href="#">
                                                                    <img class="media-object" id="mediaimg" src="img/sponser1.jpg" >
                                                              </a>
                                                              </div>
                                                                      <div class="media-body">
                                                                        <h2 class="media-heading"> <a href="" target="_blank"> CMS vs BPKIHS: BPKIHS wins by 3-0  Lorem ipsum dolor sit amet, consectetur </a></h2>
                                                                       
                                                                      
                                                                      </div>
                                                              </div>

                                                          <div class="media">
                                                            <div class="media-left">
                                                              <a href="#">
                                                                    <img class="media-object" id="mediaimg" src="img/sponser1.jpg" >
                                                              </a>
                                                              </div>
                                                                      <div class="media-body">
                                                                        <h2 class="media-heading"> <a href="" target="_blank"> CMS vs BPKIHS: BPKIHS wins by 3-0  Lorem ipsum dolor sit amet, consectetur </a></h2>
                                                                       
                                                                      
                                                                      </div>
                                                              </div>

                                                          <div class="media">
                                                            <div class="media-left">
                                                              <a href="#">
                                                                    <img class="media-object" id="mediaimg" src="img/sponser1.jpg" >
                                                              </a>
                                                              </div>
                                                                      <div class="media-body">
                                                                        <h2 class="media-heading"> <a href="" target="_blank"> CMS vs BPKIHS: BPKIHS wins by 3-0  Lorem ipsum dolor sit amet, consectetur </a></h2>
                                                                       
                                                                      
                                                                      </div>
                                                              </div>                                                      

                                                          </div>

                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
                                                 
                                                        <div class="blogDown"> 
                                                          <h1> Literary </h1>
                                                              <!-- <a href=""> 
                                                                  <h2> CMS vs BPKIHS: BPKIHS wins by 3-0  </h2>
                                                                  <img src="img/sponser1.jpg" class="img-responsive">
                                                                  <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do   eiusmod
                                                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                     

                                                                      </p>
                                                              </a> -->
                                                          <div class="media">
                                                            <div class="media-left">
                                                              <a href="#">
                                                                    <img class="media-object" id="mediaimg" src="img/sponser1.jpg" >
                                                              </a>
                                                              </div>
                                                                      <div class="media-body">
                                                                        <h2 class="media-heading"> <a href="" target="_blank"> CMS vs BPKIHS: BPKIHS wins by 3-0  Lorem ipsum dolor sit amet, consectetur </a></h2>
                                                                       
                                                                      
                                                                      </div>
                                                              </div>

                                                          <div class="media">
                                                            <div class="media-left">
                                                              <a href="#">
                                                                    <img class="media-object" id="mediaimg" src="img/sponser1.jpg" >
                                                              </a>
                                                              </div>
                                                                      <div class="media-body">
                                                                        <h2 class="media-heading"> <a href="" target="_blank"> CMS vs BPKIHS: BPKIHS wins by 3-0  Lorem ipsum dolor sit amet, consectetur </a></h2>
                                                                       
                                                                      
                                                                      </div>
                                                              </div>
                                                              
                                                          <div class="media">
                                                            <div class="media-left">
                                                              <a href="#">
                                                                    <img class="media-object" id="mediaimg" src="img/sponser1.jpg" >
                                                              </a>
                                                              </div>
                                                                      <div class="media-body">
                                                                        <h2 class="media-heading"> <a href="" target="_blank"> CMS vs BPKIHS: BPKIHS wins by 3-0  Lorem ipsum dolor sit amet, consectetur </a></h2>
                                                                       
                                                                      
                                                                      </div>
                                                              </div>  
                                                                   
                                                        </div>
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xm-12">
                                                 
                                                        <div class="blogDown"> 
                                                          <h1> Cultural </h1>
                                                              <!-- <a href=""> 
                                                                  <h2> CMS vs BPKIHS: BPKIHS wins by 3-0  </h2>
                                                                  <img src="img/sponser1.jpg" class="img-responsive">
                                                                  <p>  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do   eiusmod
                                                                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                                     

                                                                      </p>
                                                              </a> -->
                                                          <div class="media">
                                                            <div class="media-left">
                                                              <a href="#">
                                                                    <img class="media-object" id="mediaimg" src="img/sponser1.jpg" >
                                                              </a>
                                                              </div>
                                                                      <div class="media-body">
                                                                        <h2 class="media-heading"> <a href="" target="_blank"> CMS vs BPKIHS: BPKIHS wins by 3-0  Lorem ipsum dolor sit amet, consectetur </a></h2>
                                                                       
                                                                      
                                                                      </div>
                                                              </div>

                                                          <div class="media">
                                                            <div class="media-left">
                                                              <a href="#">
                                                                    <img class="media-object" id="mediaimg" src="img/sponser1.jpg" >
                                                              </a>
                                                              </div>
                                                                      <div class="media-body">
                                                                        <h2 class="media-heading"> <a href="" target="_blank"> CMS vs BPKIHS: BPKIHS wins by 3-0  Lorem ipsum dolor sit amet, consectetur </a></h2>
                                                                       
                                                                      
                                                                      </div>
                                                              </div>
                                                              
                                                          <div class="media">
                                                            <div class="media-left">
                                                              <a href="#">
                                                                    <img class="media-object" id="mediaimg" src="img/sponser1.jpg" >
                                                              </a>
                                                              </div>
                                                                      <div class="media-body">
                                                                        <h2 class="media-heading"> <a href="" target="_blank"> CMS vs BPKIHS: BPKIHS wins by 3-0  Lorem ipsum dolor sit amet, consectetur </a></h2>
                                                                       
                                                                      
                                                                      </div>
                                                              </div>  
                                                              </div>
                                                        </div>
                                        </div>


                                  </div>
                                         
                                        </div>


                                  

                            </div>
                
                <!-- home blog  ends -->
             <div class="clearfix"> </div>  
                 <div class="clearfix"> </div>  
                <!-- about us  starts -->
                            <div id="about_us" class="container-fluid">
                                  
                                <div class="row">


                                     <div class="col-lg-8 col-md-8 col-sm-12 col-sm-12 pull-right" id="aboutContent">

                                         <h1> About Us </h1>
                                        <p>
                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SYNAPSE-2016: All Nepal Medical College Meet is a grand festival organized by B.P. Koirala Institutes of Health Sciences (BPKIHS), Dharan, Nepal. This is a biennial event to promote fraternity among the medical students from all over the country. This week long event is celebrated with several kinds of sports, socio-cultural and literary competitions. 

                                                                                                     <br/>
                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                                 The main objective of this event is to develop and promote friendship, intimacy and to cultivate brotherhood among all the future medical foundations of Nepal. The program has always been an exciting and exhilarating stage for all medical pillars to present their talents and promote fraternity and BPKIHS has undoubtedly been a successful platform for all these for years.
 
                                        </p>
                                      </div>

                                    <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12 pull-left">
                                                 <embed src="https://www.youtube.com/embed/bvETMc1MDt4"  class="youtubeVideo img-responsive"></embed>
                                     </div>                                      
                                      <div class="clearfix"></div>
                                 </div>
                                  <div class="clearfix"> </div>
                            </div>

                        <!-- about us  ends -->


              <!-- about BPKHIS  starts -->
                            <div id="about_bpkhis" class="container-fluid">
                                  <div class="row">
                                    

                                     <div class="col-lg-8 col-md-8 col-sm-12 col-sm-12" id="aboutContent">

                                         <h1> About BPKIHS </h1>
                                        <p>
                                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;B.P. Koirala Institute of Health Sciences (BPKIHS) was established on Jan 18, 1993 and subsequently upgraded as an autonomous Health Sciences University on Oct 28, 1998 with a mandate to work towards developing socially responsible and competent health workforce, providing health care & involving in innovative health research. 

                                                 <br/> <br/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Institute, located in Eastern Nepal, has extended its continued health services through teaching district concept to Primary Health Care Centers, District Hospitals and Zonal Hospitals in different districts of the region. This University is aptly named after Bisheshwar Prasad Koirala, Nepal's visionary leader in social uplifting, firm believer of national integration.
                                                    <br/> <br/>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This Institute is envisaged as one of the successful examples of Nepal-India co-operation. The Health Ministers of the two countries signed the Indo-Nepal agreement for establishment of BPKIHS on the Hindu auspicious day of Mahashivaratri (Mar 10, 1994).
                                             </p>
                                      </div>

                                      <div class="col-lg-4 col-md-4 col-sm-12 col-sm-12">
                                                <img src="img/bpkihsPic.png" alt="BPKIHS pic" id="bpkihsPic" class="img-thumbnail img-responsive img-circle"/> 
                                     </div>

                                      <div class="clearfix"></div>
                                 </div>
                                  <div class="clearfix"> </div>
   
                            </div>
                     


              <div class="clearfix">  </div>
              
              <!-- sponser card starts  -->
                        <div id="sponser_card">
                          <div  class="container-fluid">
                            <h1> Our Sponsor </h1>
                                    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 980px; height: 100px; overflow: hidden; visibility: hidden;">
                                        <!-- Loading Screen -->
                                        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                            <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                                        </div>
                                        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1000px; height: 100px; overflow: hidden;">
                                                <div style="display: none;">
                                                    <p>  B.P. Koirala Institute of Health Sciences, Dharan   </p>
                                                 </div>

                                                 <div style="display: none;">
                                                    <p>  B.P. Koirala Institute of Health Sciences, Dharan   </p>
                                                 </div>
                                                <div style="display: none;">
                                                    <p>  B.P. Koirala Institute of Health Sciences, Dharan   </p>
                                                 </div>

                                                 <div style="display: none;">
                                                    <p>  B.P. Koirala Institute of Health Sciences, Dharan   </p>
                                                 </div>

                                                 <div style="display: none;">
                                                    <p>  B.P. Koirala Institute of Health Sciences, Dharan   </p>
                                                 </div>

                                                 <div style="display: none;">
                                                    <p>  B.P. Koirala Institute of Health Sciences, Dharan   </p>
                                                 </div>
                                                <div style="display: none;">
                                                    <p>  B.P. Koirala Institute of Health Sciences, Dharan   </p>
                                                 </div>

                                                 <div style="display: none;">
                                                    <p>  B.P. Koirala Institute of Health Sciences, Dharan   </p>
                                                 </div>

                                                <div style="display: none;">
                                                    <p>  B.P. Koirala Institute of Health Sciences, Dharan   </p>
                                                 </div>

                                                 <div style="display: none;">
                                                    <p>  B.P. Koirala Institute of Health Sciences, Dharan   </p>
                                                 </div>
                                                <div style="display: none;">
                                                    <p>  B.P. Koirala Institute of Health Sciences, Dharan   </p>
                                                 </div>

                                                 <div style="display: none;">
                                                    <p>  B.P. Koirala Institute of Health Sciences, Dharan   </p>
                                                 </div>

                                                                                                                                                  
                                   <!--          <div style="display: none;">
                                                <img data-u="image" src="img/amazon.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/android.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/bitly.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/blogger.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/dnn.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/drupal.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/ebay.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/facebook.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/google.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/ibm.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/ios.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/joomla.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/linkedin.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/mac.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/magento.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/pinterest.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/samsung.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/twitter.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/windows.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/wordpress.jpg" />
                                            </div>
                                            <div style="display: none;">
                                                <img data-u="image" src="img/youtube.jpg" />
                                            </div> -->
                                           
                                        </div>
                                    </div>

                                     <div id="sponser_note" > 
                                         <p> Any Organiztion or Company interested in supporting / sponsoring this grand festival , Please contact us <a href="#contact_us" class="navlink">  here. </a> </p> 
                                    </div>
                                        
                         </div><br/><br/><br/>
                      </div>
             
             <!-- sponser card ends -->
               <div class="clearfix"> </div>

                  
            
              <!-- contact_us us  starts -->
                            <div id="contact_us"  >
                                     <div class="container-fluid">
                                        <h1> Contact Us </h1>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6" id="contactAddress">
                                                <p> 
                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                
                                                        &nbsp;    B.P. Koirala Institute of Health Sciences Dharan  
                                                      
                                                 </p>
                                                 
                                                   <p>   <i class="fa fa-envelope" aria-hidden="true"></i>
                                                        &nbsp;
                                                        synapse.bpkihs2016@gmail.com
                                                   </p> 
                                                  <p>   <i class="fa fa-phone" aria-hidden="true"></i>
                                                        &nbsp;
                                                        9842302651 , 9847586401
                                                   </p> 
                                        </div>
                                          <!--google map start here-->
                                              
                                                <div  class="col-lg-4 col-md-3 col-sm-6 col-xm-12" id="goolgleMap">

                                                  <div class="overlay" onClick="style.pointerEvents='none'"></div>

                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3560.979854325036!2d87.26213131504275!3d26.808770083172558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef41adcd266c77%3A0x39cb5cde1f1849c6!2z4KS14KWALuCkquClgC4g4KSV4KWL4KSH4KSw4KS-4KSy4KS-IOCkuOCljeCkteCkvuCkuOCljeCkpeCljeCkryDgpLXgpL_gpJzgpY3gpJ7gpL7gpKgg4KSq4KWN4KSw4KSk4KS_4KS34KWN4KSg4KS-4KSo!5e0!3m2!1sne!2snp!4v1476526530910"  class="img-responsive"></iframe>
                                                        
                                                </div>
                                              
                                              <!--google map end here-->

                                       
                                        <div class="col-md-4 col-sm-12" id="contactFormpart">
                                                
                                                      <form id="contactForm" method="POST" class="contact_form" >
                                                         <div class="form-group">                                    
                                                              <input type="text" name="name" class="form-control" id="name" placeholder="Name" value='' required>
                                                          </div>
                                                          <div class="form-group">
                                                                <input type="text" name="email" class="form-control" id="email" placeholder="Email" value='' required>
                                                          </div>
                                                           <div class="form-group">
                                                                <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" value='' required>
                                                          </div>                                                         
                                                          <div class="form-group">
                                                                 <textarea class="form-control" rows="4"  name="message" id="message" placeholder="Message"></textarea> 
                                                          </div>
                                                          <div class="contact_btn">
                                                              <button type="button" id="submit" name="submit"  class="btn btn-primary pull-right" >Send</button>
                                                              <button class="btn btn-success readonly" id="load" style="display:none;">Sending..</button>
                                                          </div>
                                                      </form> <br/> <br/>

                                                  
                                                  
                                        </div>

                                        <div class="clearfix">  </div>
                                   </div>    
                            </div>
                                     <div class="clearfix"> </div>
                        </div>
                            
              <!-- contact us ends -->
              


              <div class="clearfix"></div>
                     </div>

                    </section>




                    <footer>
              <!-- footer starts -->
                            <div id="footer">
                              <div   class="container-fluid">
                                    <div class="row" id="footNav">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xm-3"  id="footerhomenav1">

                                                    <nav id="nav"> 

                                                              <ul id="navUl"> <h2> Synapse </h2>
                                                                    <li><a href="index.php"> Home </a></li> 
                                                                    <li><a href="literary.php">Literary</a></li>
                                                                    <li><a href="cultural.php">Cultural</a></li> 
                                                                    <li><a href="gallery.php"> Gallery </a></li> 
                                                                    <li><a href="#about_us" class="navlink">About&nbsp;Us </a></li> 
                                                                    <li><a href="#contact_us" class="navlink"> Contact&nbsp;Us </a></li>              
                                                             </ul>


                                                    </nav>
                                                </div>

                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xm-3"  id="footerhomenav2" >

                                                    <nav id="nav">
                                                        <ul> <h2> Sports </h2>
                                                                    <li><a href="football.php"> Football </a></li>
                                                                    <li><a href="cricket.php"> Cricket  </a></li>
                                                                    <li><a href="basketball.php"> BasketBall </a></li>
                                                                    <li><a href="volleyball.php"> VolleyBall  </a></li>
                                                                    <li><a href="tabletennis.php"> Table&nbsp;Tennis </a></li>
                                                                    <li><a href="badmintion.php">  Badminton </a></li> 
                                                                    <li><a href="frutsal.php"> Futsal/Cricsal  </a></li>
                                                                    <li><a href="chess.php"> Chess</a></li>
                                                                    <li><a href="computergaming.php"> Computer&nbsp;Gaming</a></li>
                                                        </ul>

                                                    </nav>
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xm-3"   id="footerhomenav3">

                                                    
                                                    <div id="socialMedia">
                                                                       <span> <b> Follow us </b></span> <br/>
                                                                        <span>
                                                                               
                                                                               <a href="" target="_blank">  <i class="fa fa-facebook-square fa-3x fa_custom" aria-hidden="true" style="color:white"></i> </a>
                                                                               <a href="" target="_blank">  <i class="fa fa-youtube fa-3x fa_custom" aria-hidden="true" style="color:white"></i> </a>
                                                                               <a href="" target="_blank">  <i class="fa fa-google-plus-square fa-3x fa_custom" aria-hidden="true" style="color:white"></i> </a>
                                                                              
                                                                              
                                                                        </span>
                                                    </div>

                                                    <div class="clearfix"> </div>
                                                </div> <div class="clearfix"> </div>
                                        </div>

                                        <hr>
                                     <h1 id="copyright"> Copyright &copy; All Reserved - 2016.</h1>
                  
                  <a href="#myPage" id="toTopMove" class="" title="To Top">
                  <span class="glyphicon glyphicon-chevron-up cusGlyphicon"></span>
                  </a>

                            </div>
                       </div>
              
              <!-- footer ends -->
                    </footer>




            </div> <!-- ************* container ends ***************  --> 
</div>
  <!-- ************* wrapper ends ***************  --> 


        <script src="js/jquery-1.12.0.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
        <script src="js/script.js"></script>
    <script>
        $(document).ready(function(){
            
            $("#navUl .navlink, footer a[href='#myPage']").on('click', function(event) {

           
            event.preventDefault();

           
            var hash = this.hash;

           
            $('html, body').animate({
            scrollTop: $(hash).offset().top
            }, 1600, function(){

            
            window.location.hash = hash;
            });
            });
          })
    </script>
      
    </body>

  
  </html>
