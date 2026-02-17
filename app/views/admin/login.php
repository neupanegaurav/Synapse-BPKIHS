<!-- Admin Login View -->

<section class="section-padding bg-light min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                <!-- Flash Messages -->
                <?php if (!empty($_SESSION['flash_error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i> 
                    <?php echo $_SESSION['flash_error']; unset($_SESSION['flash_error']); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <?php endif; ?>

                <div class="card shadow border-0">
                    <div class="card-body p-5 text-center">
                        <img src="img/logo.png" alt="Synapse" class="mb-4" style="height: 80px;">
                        <h4 class="mb-1 fw-bold">Admin Panel</h4>
                        <p class="text-muted mb-4">Sign in to manage Synapse</p>

                        <form method="POST" action="?page=admin-login">
                            <div class="mb-3 text-start">
                                <label class="form-label fw-semibold">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" class="form-control form-control-lg" name="username" 
                                           placeholder="Enter username" required autofocus>
                                </div>
                            </div>
                            <div class="mb-4 text-start">
                                <label class="form-label fw-semibold">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control form-control-lg" name="password" 
                                           placeholder="Enter password" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-sign-in-alt me-2"></i> Sign In
                            </button>
                        </form>
                    </div>
                    <div class="card-footer bg-light text-center py-3">
                        <a href="?page=home" class="text-muted text-decoration-none">
                            <i class="fas fa-arrow-left me-1"></i> Back to Website
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
