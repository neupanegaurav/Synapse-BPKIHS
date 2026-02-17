<!-- Events Schedule View -->

<section class="page-header">
    <div class="container text-center">
        <h1 class="page-title"><i class="fas fa-calendar-alt me-2"></i> Event Schedule</h1>
        <p class="page-subtitle">7 days of sports, culture, and unforgettable memories</p>
    </div>
</section>

<section class="section-padding bg-light">
    <div class="container">
        <div class="row g-4">
            <?php foreach ($days as $i => $day): ?>
            <div class="col-lg-6">
                <div class="card event-day-card h-100">
                    <div class="card-header event-day-header">
                        <h3 class="mb-0">
                            <i class="fas fa-calendar-day me-2"></i> <?php echo htmlspecialchars($day['day']); ?>
                        </h3>
                    </div>
                    <div class="card-body">
                        <?php foreach ($day['events'] as $event): ?>
                        <div class="event-item">
                            <h5 class="event-item-title">
                                <i class="fas fa-chevron-right me-2 text-primary"></i>
                                <?php echo htmlspecialchars($event['title']); ?>
                            </h5>
                            <p class="text-muted mb-3"><?php echo htmlspecialchars($event['desc']); ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- Registration Info -->
        <div class="text-center mt-5">
            <div class="card registration-info-card mx-auto" style="max-width: 600px;">
                <div class="card-body p-4">
                    <h4><i class="fas fa-info-circle me-2"></i> Registration Fee</h4>
                    <p class="lead mb-2">Rs. 1,500/- per person</p>
                    <p class="text-muted">Includes accommodation, event registration, and T-shirt.</p>
                    <a href="?page=register" class="btn btn-primary btn-lg px-4">
                        <i class="fas fa-user-plus me-2"></i> Register Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
