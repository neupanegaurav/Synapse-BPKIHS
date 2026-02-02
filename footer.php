<footer>
  <div id="footer">
    <div class="container-fluid">
      <div class="row" id="footNav">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" id="footerhomenav1">
          <nav>
            <ul id="navUl">
              <h2>Synapse</h2>
              <li><a href="index.php">Home</a></li>
              <li><a href="literary.php">Literary</a></li>
              <li><a href="cultural.php">Cultural</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="index.php#about_us">About Us</a></li>
              <li><a href="#contact_us" class="navlink">Contact Us</a></li>
            </ul>
          </nav>
        </div>

        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" id="footerhomenav2">
          <nav>
            <ul>
              <h2>Sports</h2>
              <li><a href="football.php">Football</a></li>
              <li><a href="cricket.php">Cricket</a></li>
              <li><a href="basketball.php">Basketball</a></li>
              <li><a href="volleyball.php">Volleyball</a></li>
              <li><a href="tabletennis.php">Table Tennis</a></li>
              <li><a href="badmintion.php">Badminton</a></li>
              <li><a href="futsal.php">Futsal/Cricsal</a></li>
              <li><a href="chess.php">Chess</a></li>
              <li><a href="computergaming.php">Computer Gaming</a></li>
            </ul>
          </nav>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" id="footerhomenav3">
          <div id="socialMedia">
            <span><b>Follow us</b></span><br />
            <span>
              <a href="#" target="_blank"><i class="fa fa-facebook-square fa-3x fa_custom" style="color:white"></i></a>
              <a href="#" target="_blank"><i class="fa fa-youtube fa-3x fa_custom" style="color:white"></i></a>
              <a href="#" target="_blank"><i class="fa fa-google-plus-square fa-3x fa_custom"
                  style="color:white"></i></a>
            </span>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <hr>
      <h1 id="copyright">Copyright &copy;
        <?php echo date('Y'); ?> All Reserved.
      </h1>
      <a href="#myPage" id="toTopMove" title="To Top">
        <span class="glyphicon glyphicon-chevron-up cusGlyphicon"></span>
      </a>
    </div>
  </div>
</footer>
</div> <!-- container ends -->
</div> <!-- wrapper ends -->

<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script>
  $(document).ready(function () {
    $("#navUl .navlink, footer a[href='#myPage']").on('click', function (event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 1600, function () {
          window.location.hash = hash;
        });
      }
    });
  });
</script>
</body>

</html>