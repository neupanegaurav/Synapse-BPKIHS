<?php
/**
 * Navigation Template
 * DRY implementation of the navigation bar.
 */
$page = isset($page) ? $page : 'home';
?>
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
                    <ul id="navUl" class="nav navbar-nav navColor">
                        <li class="<?php echo ($page == 'home') ? 'active' : ''; ?>"><a href="index.php">Home</a></li>
                        <li class="<?php echo ($page == 'events') ? 'active' : ''; ?>"><a href="events.php">Events</a>
                        </li>
                        <li class="dropdown <?php echo ($page == 'sports') ? 'active' : ''; ?>">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sports <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu">
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
                        </li>
                        <li class="<?php echo ($page == 'literary') ? 'active' : ''; ?>"><a
                                href="literary.php">Literary</a></li>
                        <li class="<?php echo ($page == 'cultural') ? 'active' : ''; ?>"><a
                                href="cultural.php">Cultural</a></li>
                        <li class="<?php echo ($page == 'gallery') ? 'active' : ''; ?>"><a
                                href="gallery.php">Gallery</a></li>
                        <li><a href="index.php#about_us" class="navlink">About Us</a></li>
                        <li><a href="index.php#contact_us" class="navlink">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</nav>