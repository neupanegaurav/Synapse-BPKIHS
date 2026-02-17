<!-- Gallery View -->

<section class="page-header">
    <div class="container text-center">
        <h1 class="page-title"><i class="fas fa-images me-2"></i> Photo Gallery</h1>
        <p class="page-subtitle">Relive the best moments of Synapse</p>
    </div>
</section>

<section class="section-padding bg-light">
    <div class="container">
        <div class="row g-3" id="galleryGrid">
            <?php foreach ($photos as $i => $photo): ?>
            <div class="col-lg-3 col-md-4 col-6">
                <div class="gallery-item" data-bs-toggle="modal" data-bs-target="#lightbox" 
                     onclick="showLightbox('<?php echo htmlspecialchars($photo['src']); ?>', '<?php echo htmlspecialchars($photo['caption']); ?>')">
                    <img src="<?php echo htmlspecialchars($photo['src']); ?>" 
                         alt="<?php echo htmlspecialchars($photo['caption']); ?>"
                         class="img-fluid" loading="lazy">
                    <div class="gallery-overlay">
                        <i class="fas fa-search-plus fa-2x"></i>
                        <p class="mt-2 mb-0 small"><?php echo htmlspecialchars($photo['caption']); ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Lightbox Modal -->
<div class="modal fade" id="lightbox" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content bg-dark border-0">
            <div class="modal-header border-0">
                <h6 class="modal-title text-white" id="lightboxCaption"></h6>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-0 text-center">
                <img src="" id="lightboxImage" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</div>

<script>
function showLightbox(src, caption) {
    document.getElementById('lightboxImage').src = src;
    document.getElementById('lightboxCaption').textContent = caption;
}
</script>
