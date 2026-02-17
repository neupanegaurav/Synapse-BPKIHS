<!-- Admin Dashboard View -->

<section class="section-padding bg-light">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fw-bold mb-0"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</h2>
                <p class="text-muted">Welcome, <?php echo htmlspecialchars($_SESSION['admin_username'] ?? 'Admin'); ?></p>
            </div>
            <a href="?page=home" class="btn btn-outline-secondary">
                <i class="fas fa-external-link-alt me-1"></i> View Site
            </a>
        </div>

        <!-- Stats Cards -->
        <div class="row g-4 mb-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center">
                    <div class="card-body py-4">
                        <i class="fas fa-users fa-2x text-primary mb-2"></i>
                        <h3 class="fw-bold mb-0"><?php echo $totalRegistrations; ?></h3>
                        <p class="text-muted mb-0">Total Registrations</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center">
                    <div class="card-body py-4">
                        <i class="fas fa-trophy fa-2x text-warning mb-2"></i>
                        <h3 class="fw-bold mb-0">9</h3>
                        <p class="text-muted mb-0">Sports Events</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center">
                    <div class="card-body py-4">
                        <i class="fas fa-calendar fa-2x text-success mb-2"></i>
                        <h3 class="fw-bold mb-0">7</h3>
                        <p class="text-muted mb-0">Event Days</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Registrations Table -->
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-white d-flex justify-content-between align-items-center py-3">
                <h5 class="mb-0"><i class="fas fa-list me-2"></i> Registered Participants</h5>
                <span class="badge bg-primary"><?php echo $totalRegistrations; ?> total</span>
            </div>
            <div class="card-body p-0">
                <?php if (!empty($registrations)): ?>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>College</th>
                                <th>Faculty</th>
                                <th>Events</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($registrations as $i => $reg): ?>
                            <tr>
                                <td><?php echo $i + 1; ?></td>
                                <td class="fw-semibold"><?php echo htmlspecialchars($reg['name']); ?></td>
                                <td><?php echo htmlspecialchars($reg['email']); ?></td>
                                <td><?php echo htmlspecialchars($reg['contact']); ?></td>
                                <td><?php echo htmlspecialchars($reg['college_name']); ?></td>
                                <td><?php echo htmlspecialchars($reg['faculty']); ?></td>
                                <td><small><?php echo htmlspecialchars($reg['event']); ?></small></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php else: ?>
                <div class="text-center py-5">
                    <i class="fas fa-inbox fa-3x text-muted mb-3"></i>
                    <p class="text-muted">No registrations yet.</p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
