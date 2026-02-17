<!-- Literary Events View -->

<section class="page-header">
    <div class="container text-center">
        <h1 class="page-title"><i class="fas fa-book me-2"></i> Literary Events</h1>
        <p class="page-subtitle">Sharpen your mind, express your thoughts</p>
    </div>
</section>

<section class="section-padding bg-light">
    <div class="container">
        <?php if (!empty($competitions)): ?>

        <!-- Accordion for competitions -->
        <div class="accordion" id="literaryAccordion">
            <?php foreach ($competitions as $i => $comp): ?>
            <div class="accordion-item mb-3 border rounded-3 overflow-hidden shadow-sm">
                <h2 class="accordion-header">
                    <button class="accordion-button <?php echo $i > 0 ? 'collapsed' : ''; ?> fw-semibold" 
                            type="button" data-bs-toggle="collapse" 
                            data-bs-target="#literary-<?php echo $i; ?>">
                        <i class="fas fa-award me-2 text-primary"></i>
                        <?php echo htmlspecialchars($comp['name']); ?>
                    </button>
                </h2>
                <div id="literary-<?php echo $i; ?>" 
                     class="accordion-collapse collapse <?php echo $i === 0 ? 'show' : ''; ?>"
                     data-bs-parent="#literaryAccordion">
                    <div class="accordion-body">
                        <p class="lead"><?php echo htmlspecialchars($comp['desc']); ?></p>
                        
                        <h6 class="fw-bold mt-3 mb-2"><i class="fas fa-clipboard-list me-2"></i> Rules:</h6>
                        <ul class="rules-list">
                            <?php foreach ($comp['rules'] as $rule): ?>
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
            <i class="fas fa-book-open fa-3x text-muted mb-3"></i>
            <p class="text-muted">Literary events will be announced soon.</p>
        </div>
        <?php endif; ?>

        <div class="text-center mt-5">
            <a href="?page=register" class="btn btn-primary btn-lg px-4">
                <i class="fas fa-user-plus me-2"></i> Register for Literary Events
            </a>
        </div>
    </div>
</section>
