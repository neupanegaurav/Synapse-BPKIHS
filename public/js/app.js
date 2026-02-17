/**
 * Synapse BPKIHS — Application JavaScript
 * Vanilla JS (no jQuery dependency)
 */

document.addEventListener('DOMContentLoaded', () => {

    // --- Navbar Scroll Effect ---
    const nav = document.getElementById('mainNav');
    if (nav) {
        const onScroll = () => {
            nav.classList.toggle('scrolled', window.scrollY > 50);
        };
        window.addEventListener('scroll', onScroll, { passive: true });
        onScroll(); // Run on load
    }

    // --- Smooth Scroll for anchor links ---
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#' || targetId === '#myPage') {
                e.preventDefault();
                window.scrollTo({ top: 0, behavior: 'smooth' });
                return;
            }
            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                const navHeight = nav ? nav.offsetHeight : 0;
                const targetPos = target.getBoundingClientRect().top + window.pageYOffset - navHeight - 10;
                window.scrollTo({ top: targetPos, behavior: 'smooth' });
            }
        });
    });

    // --- Back to Top Button ---
    const backToTop = document.getElementById('backToTop');
    if (backToTop) {
        backToTop.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // --- Contact Form Handler ---
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const btn = this.querySelector('button[type="submit"]');
            const originalHTML = btn.innerHTML;
            
            btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Sending...';
            btn.disabled = true;

            // Simulate sending (replace with real AJAX endpoint)
            setTimeout(() => {
                btn.innerHTML = '<i class="fas fa-check me-2"></i> Message Sent!';
                btn.classList.replace('btn-primary', 'btn-success');
                this.reset();

                setTimeout(() => {
                    btn.innerHTML = originalHTML;
                    btn.classList.replace('btn-success', 'btn-primary');
                    btn.disabled = false;
                }, 3000);
            }, 1500);
        });
    }

    // --- Fade-in on Scroll (Intersection Observer) ---
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Apply to cards
    document.querySelectorAll('.card, .gallery-item').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
});
