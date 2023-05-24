
  
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
                                                                    <li><a href="index.php#about_us" target="_blank">About&nbsp;Us </a></li> 
                                                                     <li><a href="#contact_us"  class="navlink" > Contact&nbsp;Us </a></li>              
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
