<?php
/**
 * Layout: Footer
 * Modern dark gradient footer with link columns, social icons, and back-to-top.
 */

$footerSports = [
    'football' => 'Football', 'cricket' => 'Cricket', 'basketball' => 'Basketball',
    'volleyball' => 'Volleyball', 'tabletennis' => 'Table Tennis', 'badminton' => 'Badminton',
    'futsal' => 'Futsal', 'chess' => 'Chess', 'computergaming' => 'Computer Gaming',
];
?>

<!-- Contact Section -->
<?php require VIEW_PATH . '/contact/section.php'; ?>

<!-- Footer -->
<footer class="synapse-footer">
    <div class="container">
        <div class="row g-4">
            <!-- Brand Column -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand">
                    <img src="img/logo.png" alt="Synapse" class="footer-logo mb-3">
                    <p class="text-light opacity-75">
                        The All Nepal Medical College Meet — bringing together medical colleges across Nepal
                        for sports, literary, and cultural competitions.
                    </p>
                    <div class="social-icons mt-3">
                        <a href="#" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                        <a href="#" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-3 col-6">
                <h5 class="footer-heading">Quick Links</h5>
                <ul class="footer-links">
                    <li><a href="?page=home">Home</a></li>
                    <li><a href="?page=events">Events</a></li>
                    <li><a href="?page=literary">Literary</a></li>
                    <li><a href="?page=cultural">Cultural</a></li>
                    <li><a href="?page=gallery">Gallery</a></li>
                    <li><a href="?page=register">Register</a></li>
                </ul>
            </div>

            <!-- Sports Links -->
            <div class="col-lg-3 col-md-3 col-6">
                <h5 class="footer-heading">Sports</h5>
                <ul class="footer-links">
                    <?php foreach ($footerSports as $slug => $name): ?>
                    <li><a href="?page=sport&name=<?php echo $slug; ?>"><?php echo $name; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-heading">Contact Us</h5>
                <ul class="footer-contact">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>B.P. Koirala Institute of Health Sciences, Dharan</span>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>synapse.bpkihs2016@gmail.com</span>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <span>9842302651, 9847586401</span>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="footer-divider">

        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
            <a href="#myPage" class="back-to-top" id="backToTop" title="Back to Top">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
    </div>
</footer>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="public/js/app.js"></script>

</body>
</html>
