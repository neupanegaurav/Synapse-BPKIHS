<!-- Sport Detail View (shared by ALL sports) -->

<section class="page-header" style="background-image: url('<?php echo htmlspecialchars($sport['image']); ?>');">
    <div class="page-header-overlay"></div>
    <div class="container text-center position-relative" style="z-index: 2;">
        <h1 class="page-title text-white">
            <i class="fa <?php echo htmlspecialchars($sport['icon']); ?> me-2"></i>
            <?php echo htmlspecialchars($sport['name']); ?>
        </h1>
        <p class="page-subtitle text-white opacity-75">
            Category: <?php echo htmlspecialchars($sport['category']); ?>
        </p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-4">
            <!-- Main Content -->
            <div class="col-lg-8">
                <!-- Featured Image -->
                <div class="card mb-4 overflow-hidden">
                    <img src="<?php echo htmlspecialchars($sport['image']); ?>" 
                         class="card-img-top sport-hero-img" 
                         alt="<?php echo htmlspecialchars($sport['name']); ?>">
                </div>

                <!-- Rules & Regulations -->
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0"><i class="fas fa-clipboard-list me-2"></i> Rules &amp; Regulations</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-3">
                            <strong>Category:</strong> <?php echo htmlspecialchars($sport['category']); ?>
                        </p>
                        <ul class="rules-list">
                            <?php foreach ($sport['rules'] as $rule): ?>
                            <li>
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <?php echo htmlspecialchars($rule); ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="mt-4 p-3 bg-light rounded-3">
                            <p class="mb-0"><strong><i class="fas fa-exclamation-triangle text-warning me-2"></i> Important:</strong>
                            Decision of the referee/judges will be final. All participants must carry valid ID cards during the event.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar: Other Sports -->
            <div class="col-lg-4">
                <div class="card sticky-top" style="top: 100px;">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0"><i class="fas fa-list me-2"></i> All Sports</h5>
                    </div>
                    <div class="list-group list-group-flush">
                        <?php foreach ($allSports as $slug => $s): ?>
                        <a href="?page=sport&name=<?php echo $slug; ?>" 
                           class="list-group-item list-group-item-action d-flex align-items-center <?php echo ($sport['slug'] === $slug) ? 'active' : ''; ?>">
                            <i class="fa <?php echo htmlspecialchars($s['icon']); ?> me-3"></i>
                            <?php echo htmlspecialchars($s['name']); ?>
                        </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Register CTA -->
                <div class="card mt-4 text-center border-primary">
                    <div class="card-body p-4">
                        <h5><i class="fas fa-trophy text-warning me-2"></i> Want to compete?</h5>
                        <p class="text-muted">Register your team and be part of the action!</p>
                        <a href="?page=register" class="btn btn-primary w-100">
                            <i class="fas fa-user-plus me-2"></i> Register Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
