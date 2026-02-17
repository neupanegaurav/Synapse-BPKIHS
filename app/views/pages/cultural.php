<!-- Cultural Events View -->

<section class="page-header">
    <div class="container text-center">
        <h1 class="page-title"><i class="fas fa-music me-2"></i> Cultural Events</h1>
        <p class="page-subtitle">Celebrate art, music, dance, and creativity</p>
    </div>
</section>

<section class="section-padding bg-light">
    <div class="container">
        <?php if (!empty($events)): ?>
        <div class="row g-4">
            <?php foreach ($events as $i => $event): ?>
            <div class="col-lg-6 col-md-6">
                <div class="card h-100 shadow-sm border-0 cultural-card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="cultural-icon-wrapper me-3">
                                <i class="fas fa-<?php 
                                    $icons = ['microphone', 'people-group', 'guitar', 'person-dancing', 'shirt'];
                                    echo $icons[$i % count($icons)]; 
                                ?> fa-lg"></i>
                            </div>
                            <h4 class="card-title mb-0"><?php echo htmlspecialchars($event['name']); ?></h4>
                        </div>
                        <p class="text-muted"><?php echo htmlspecialchars($event['desc']); ?></p>
                        
                        <h6 class="fw-bold mt-3 mb-2"><i class="fas fa-clipboard-list me-2"></i> Rules:</h6>
                        <ul class="rules-list">
                            <?php foreach ($event['rules'] as $rule): ?>
                            <li>
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <?php echo htmlspecialchars($rule); ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <div class="text-center py-5">
            <i class="fas fa-music fa-3x text-muted mb-3"></i>
            <p class="text-muted">Cultural events will be announced soon.</p>
        </div>
        <?php endif; ?>

        <div class="text-center mt-5">
            <a href="?page=register" class="btn btn-primary btn-lg px-4">
                <i class="fas fa-user-plus me-2"></i> Register for Cultural Events
            </a>
        </div>
    </div>
</section>
