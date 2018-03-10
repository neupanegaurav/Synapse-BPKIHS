<?php $page = "gallery" ?> 

<?php include('header.php'); ?>

<head> 
     <link rel="stylesheet" type="text/css" href="css/gallery.css"/>
    <script src="js/modernizr.custom.70736.js"></script>
</head>
<br/>

       
                    <section>

                            <div id="section">
								
							<!-- gallery -->


							<div id="gallery" style="background:#eee;width:100%;">
							<br/><br/><br/><br/>



        <div class="container">
    

      
      <div class="main">
  
        
        <div class="gamma-container gamma-loading" id="gamma-container">

          <ul class="gamma-gallery">

             <li>
              <div data-alt="img03" data-description="<h3>Synapse in College Magazine-1</h3>" >
                  <div data-src="img/Synapse_in_College_Magazine_1.jpg" ></div>              
              </div>
            </li> 

              <li>
              <div data-alt="img03" data-description="<h3>Synapse in College Magazine-2</h3>" >
                  <div data-src="img/Synapse_in_College_Magazine_2.jpg" ></div>              
              </div>
            </li>                      

            <li>
              <div data-alt="img03" data-description="<h3>Game is all about spirit Play fair</h3>" >
                  <div data-src="img/Game_is_all_about_spirit_Play_fair.jpg" ></div>              
              </div>
            </li>
            <li>
              <div data-alt="img03" data-description="<h3>Get yourself registered for being a member of the grand SYNAPSE</h3>" >
                  <div data-src="img/Get_yourself_registered_for_being_a_member_of_the_grand_SYNAPSE.jpg" ></div>              
              </div>
            </li>
            <li>
              <div data-alt="img03" data-description="<h3>Happiness is overcoming the challenge</h3>" >
                  <div data-src="img/Happiness_is_overcoming_the_challenge.jpg" ></div>              
              </div>
            </li>
             <li>
              <div data-alt="img03" data-description="<h3>You gotta basket that ball</h3>" >
                  <div data-src="img/You_gotta_basket_that_ball.jpg" ></div>              
              </div>
            </li>
            
            <li>
              <div data-alt="img03" data-description="<h3>Happy organizers after successful completion of Poem Competition</h3>" >
                  <div data-src="img/Happy_organizers_after_successful_completion_of_Poem_Competition.jpg" ></div>              
              </div>
            </li>
            <li>
              <div data-alt="img03" data-description="<h3>lights and celebrations</h3>" >
                  <div data-src="img/lights_and_celebrations.jpg" ></div>              
              </div>
            </li>


            
             <li>
              <div data-alt="img03" data-description="<h3>May my team win</h3>" >
                  <div data-src="img/May_my_team_win.jpg" ></div>              
              </div>
            </li>
               
           
            <li>
              <div data-alt="img03" data-description="<h3>Music and soul</h3>" >
                  <div data-src="img/Music_and_soul.jpg" ></div>              
              </div>
            </li>
            <li>
              <div data-alt="img03" data-description="<h3> One on one, offense or defense </h3>" >
                  <div data-src="img/One_on_one_offense_or_defense.jpg" ></div>              
              </div>
            </li>
            <li>
              <div data-alt="img03" data-description="<h3>Players on the volley </h3>" >
                  <div data-src="img/Players_on_the_volley.jpg" ></div>              
              </div>
            </li>

             <li>
              <div data-alt="img03" data-description="<h3>Struggle for the ball </h3>" >
                  <div data-src="img/Struggle_for_the_ball.jpg" ></div>              
              </div>
            </li>
             <li>
              <div data-alt="img03" data-description="<h3>Thats gonna give a goal</h3>" >
                  <div data-src="img/Thats_gonna_give_a_goal.jpg" ></div>              
              </div>
            </li>
            <li>
              <div data-alt="img03" data-description="<h3> The girl owns the goal - Futsal </h3>" >
                  <div data-src="img/The_girl_owns_the_goal_Futsal.jpg" ></div>              
              </div>
            </li>
            <li>
              <div data-alt="img03" data-description="<h3>You and me, Lets play. </h3>" >
                  <div data-src="img/You_and_me_Lets_play..jpg" ></div>              
              </div>
            </li>


            
                                 
                                


          </ul>

          <div class="gamma-overlay"></div>

          

        </div>

      </div><!--/main-->
      </div>

							</div>
             
							 <div class="clearfix"> </div>
                     </div>

                    </section>
<?php include('contact.php'); ?>

<?php include('footer.php'); ?>
   
    <script src="js/jquery.masonry.min.js"></script>
    <script src="js/jquery.history.js"></script>
    <script src="js/js-url.min.js"></script>
    <script src="js/jquerypp.custom.js"></script>
    <script src="js/gamma.js"></script>
    <script type="text/javascript">
      
      $(function() {

        var GammaSettings = {
            // order is important!
            viewport : [ {
              width : 1200,
              columns : 4
            }, {
              width : 900,
              columns : 4
            }, {
              width : 500,
              columns : 4
            }, { 
              width : 320,
              columns : 2
            }, { 
              width : 0,
              columns : 2
            } ]
        };

        Gamma.init( GammaSettings, fncallback );
        

        function fncallback() {

          $( '#loadmore' ).show().on( 'click', function() {

            ++page;
            var newitems = items[page-1]
            if( page <= 1 ) {
              
              Gamma.add( $( newitems ) );

            }
            if( page === 1 ) {

              $( this ).remove();

            }

          } );

        }

      });

    </script> 
 

