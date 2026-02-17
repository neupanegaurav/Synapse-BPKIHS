<?php
/**
 * Layout: Navigation Bar
 * Bootstrap 5 responsive navbar with dropdown and active states.
 */
$currentPage = $currentPage ?? ($page ?? 'home');

$sports = [
    'football'       => 'Football',
    'cricket'        => 'Cricket',
    'basketball'     => 'Basketball',
    'volleyball'     => 'Volleyball',
    'tabletennis'    => 'Table Tennis',
    'badminton'      => 'Badminton',
    'futsal'         => 'Futsal / Cricsal',
    'chess'          => 'Chess',
    'computergaming' => 'Computer Gaming',
];
?>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top synapse-nav" id="mainNav">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="?page=home">
            <img src="img/logo.png" alt="<?php echo SITE_NAME; ?>" class="nav-logo me-2">
            <span class="brand-text d-none d-md-inline">Synapse</span>
        </a>

        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link <?php echo $currentPage === 'home' ? 'active' : ''; ?>" href="?page=home">
                        <i class="fas fa-home me-1"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $currentPage === 'events' ? 'active' : ''; ?>" href="?page=events">
                        <i class="fas fa-calendar-alt me-1"></i> Events
                    </a>
                </li>

                <!-- Sports Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?php echo $currentPage === 'sports' ? 'active' : ''; ?>" href="#" data-bs-toggle="dropdown">
                        <i class="fas fa-trophy me-1"></i> Sports
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <?php foreach ($sports as $slug => $name): ?>
                        <li>
                            <a class="dropdown-item" href="?page=sport&name=<?php echo $slug; ?>">
                                <?php echo htmlspecialchars($name); ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link <?php echo $currentPage === 'literary' ? 'active' : ''; ?>" href="?page=literary">
                        <i class="fas fa-book me-1"></i> Literary
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $currentPage === 'cultural' ? 'active' : ''; ?>" href="?page=cultural">
                        <i class="fas fa-music me-1"></i> Cultural
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo $currentPage === 'gallery' ? 'active' : ''; ?>" href="?page=gallery">
                        <i class="fas fa-images me-1"></i> Gallery
                    </a>
                </li>

                <!-- Register CTA Button -->
                <li class="nav-item ms-lg-2">
                    <a class="nav-link btn btn-register px-3 py-2 <?php echo $currentPage === 'register' ? 'active' : ''; ?>" href="?page=register">
                        <i class="fas fa-user-plus me-1"></i> Register
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Spacer for fixed navbar -->
<div style="height: 80px;"></div>
