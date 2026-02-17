<!-- Homepage View -->

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-overlay"></div>
    <div class="container position-relative" style="z-index: 2;">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title animate-fade-in">
                    <img src="img/logo.png" alt="Synapse" class="hero-logo mb-3">
                    <br>
                    <span class="text-gradient">SYNAPSE</span>
                </h1>
                <p class="hero-subtitle animate-fade-in-delay">
                    <?php echo SITE_TAGLINE; ?> — B.P. Koirala Institute of Health Sciences
                </p>
                <div class="hero-buttons animate-fade-in-delay-2">
                    <a href="?page=register" class="btn btn-primary btn-lg me-2 px-4">
                        <i class="fas fa-user-plus me-2"></i> Register Now
                    </a>
                    <a href="?page=events" class="btn btn-outline-light btn-lg px-4">
                        <i class="fas fa-calendar me-2"></i> View Events
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News / Blog Section -->
<section class="section-padding bg-light" id="latest_news">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="section-title">Latest News</h2>
            <p class="section-subtitle">Stay updated with the latest happenings at Synapse</p>
        </div>

        <?php foreach ($newsCategories as $category => $posts): ?>
        <div class="mb-5">
            <h3 class="category-title">
                <i class="fas fa-<?php echo $category === 'Sports' ? 'trophy' : ($category === 'Literary' ? 'book' : 'music'); ?> me-2"></i>
                <?php echo htmlspecialchars($category); ?>
            </h3>
            <div class="row g-4">
                <?php foreach ($posts as $post): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card news-card h-100">
                        <div class="card-img-wrapper">
                            <img src="<?php echo htmlspecialchars($post['img']); ?>" 
                                 class="card-img-top" 
                                 alt="<?php echo htmlspecialchars($post['title']); ?>">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($post['title']); ?></h5>
                            <p class="card-text text-muted">
                                Latest updates and highlights from the Synapse event...
                            </p>
                        </div>
                        <div class="card-footer bg-transparent border-0 pb-3">
                            <small class="text-muted"><i class="fas fa-clock me-1"></i> Recent</small>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- About Us Section -->
<section class="section-padding" id="about_us">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="section-header mb-4">
                    <h2 class="section-title">About Synapse</h2>
                </div>
                <p class="lead">
                    SYNAPSE is the grandest inter-medical college sports and cultural meet in Nepal, 
                    organized by the students of B.P. Koirala Institute of Health Sciences.
                </p>
                <p>
                    This prestigious event brings together medical students from across the nation 
                    to compete in various sports, literary, and cultural events. It promotes 
                    sportsmanship, camaraderie, and cultural exchange among future healthcare professionals.
                </p>
                <p>
                    Held annually at the beautiful BPKIHS campus in Dharan, Synapse features week-long 
                    competitions including football, cricket, basketball, volleyball, literary debates, 
                    cultural performances, and much more.
                </p>
            </div>
            <div class="col-lg-6">
                <div class="about-image-wrapper">
                    <img src="img/bpkihs.jpg" alt="BPKIHS Campus" class="img-fluid rounded-4 shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Photo Carousel Section -->
<section class="section-padding bg-dark text-white" id="highlights">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="section-title text-white">Highlights</h2>
            <p class="section-subtitle text-light opacity-75">Moments that defined Synapse</p>
        </div>

        <div id="highlightCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($galleryImages as $i => $img): ?>
                <div class="carousel-item <?php echo $i === 0 ? 'active' : ''; ?>">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="highlight-card text-center">
                                <img src="<?php echo htmlspecialchars($img['src']); ?>" 
                                     class="img-fluid rounded-4" 
                                     alt="<?php echo htmlspecialchars($img['caption']); ?>">
                                <p class="mt-3 text-light"><?php echo htmlspecialchars($img['caption']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#highlightCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#highlightCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</section>
