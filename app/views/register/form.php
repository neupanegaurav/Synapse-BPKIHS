<!-- Registration Form View -->

<section class="page-header">
    <div class="container text-center">
        <h1 class="page-title"><i class="fas fa-user-plus me-2"></i> Registration</h1>
        <p class="page-subtitle">Join the grandest inter-medical college meet</p>
    </div>
</section>

<section class="section-padding bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Flash Messages -->
                <?php if (!empty($_SESSION['flash_success'])): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fas fa-check-circle me-2"></i> <?php echo $_SESSION['flash_success']; unset($_SESSION['flash_success']); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <?php endif; ?>

                <?php if (!empty($_SESSION['flash_error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i> <?php echo $_SESSION['flash_error']; unset($_SESSION['flash_error']); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                <?php endif; ?>

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h4 class="mb-0"><i class="fas fa-edit me-2"></i> Synapse Registration Form</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="?page=register-submit" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-lg" name="name" 
                                           placeholder="John Doe" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control form-control-lg" name="email" 
                                           placeholder="you@email.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Contact Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-lg" name="contact" 
                                           placeholder="984XXXXXXX" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">College Name</label>
                                    <input type="text" class="form-control form-control-lg" name="college" 
                                           placeholder="Your College">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Faculty</label>
                                    <input type="text" class="form-control form-control-lg" name="faculty" 
                                           placeholder="MBBS, BDS, Nursing...">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Batch</label>
                                    <select class="form-select form-select-lg" name="batch">
                                        <option value="">Select Batch</option>
                                        <option value="First Year">First Year</option>
                                        <option value="Second Year">Second Year</option>
                                        <option value="Third Year">Third Year</option>
                                        <option value="Fourth Year">Fourth Year</option>
                                        <option value="Final Year">Final Year</option>
                                    </select>
                                </div>

                                <!-- Event Checkboxes -->
                                <div class="col-12">
                                    <label class="form-label fw-semibold">Events to Participate</label>
                                    <div class="row g-2">
                                        <?php foreach ($events as $ev): ?>
                                        <div class="col-md-4 col-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" 
                                                       name="event[]" value="<?php echo htmlspecialchars($ev); ?>"
                                                       id="ev-<?php echo md5($ev); ?>">
                                                <label class="form-check-label" for="ev-<?php echo md5($ev); ?>">
                                                    <?php echo htmlspecialchars($ev); ?>
                                                </label>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                                <!-- File Uploads -->
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Passport Photo</label>
                                    <input type="file" class="form-control" name="photo" accept="image/*">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Payment Voucher</label>
                                    <input type="file" class="form-control" name="vphoto" accept="image/*">
                                </div>

                                <!-- Submit -->
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">
                                        <i class="fas fa-paper-plane me-2"></i> Submit Registration
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-light text-center py-3">
                        <small class="text-muted">Registration fee: Rs. 1,500/- per person</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
