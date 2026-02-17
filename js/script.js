/* ================================================================
 *  M2S — script.js
 *  All interactive behaviours: nav, scroll, animations,
 *  filters, counters, form, particles, back-to-top, WhatsApp
 * ================================================================ */

document.addEventListener('DOMContentLoaded', () => {

    /* ── MOBILE NAV ──────────────────────────────────────────── */
    const toggle   = document.getElementById('mobileToggle');
    const navMenu  = document.getElementById('navMenu');
    const header   = document.getElementById('mainHeader');

    if (toggle) {
        toggle.addEventListener('click', () => {
            const isOpen = navMenu.classList.toggle('open');
            toggle.classList.toggle('open', isOpen);
            toggle.setAttribute('aria-expanded', isOpen);
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        // Close when a link is clicked
        navMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('open');
                toggle.classList.remove('open');
                toggle.setAttribute('aria-expanded', false);
                document.body.style.overflow = '';
            });
        });
    }

    /* ── SCROLL EFFECTS ──────────────────────────────────────── */
    const scrollProgress = document.getElementById('scrollProgress');
    const backToTop      = document.getElementById('backToTop');

    function onScroll() {
        const scrollTop  = window.scrollY;
        const docHeight  = document.documentElement.scrollHeight - window.innerHeight;
        const pct        = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;

        // Progress bar
        if (scrollProgress) scrollProgress.style.width = pct + '%';

        // Header style
        if (header) header.classList.toggle('scrolled', scrollTop > 60);

        // Back to top
        if (backToTop) backToTop.classList.toggle('visible', scrollTop > 400);

        // Active nav link highlighting
        highlightActiveSection();
    }

    window.addEventListener('scroll', onScroll, { passive: true });

    /* ── ACTIVE NAV HIGHLIGHTING ─────────────────────────────── */
    const sections  = document.querySelectorAll('section[id]');
    const navLinks  = document.querySelectorAll('.nav-link');

    function highlightActiveSection() {
        let current = '';
        sections.forEach(sec => {
            if (window.scrollY >= sec.offsetTop - 120) current = sec.id;
        });
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            link.classList.toggle('active', href === '#' + current);
        });
    }

    /* ── SMOOTH SCROLL ───────────────────────────────────────── */
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', e => {
            const target = document.querySelector(anchor.getAttribute('href'));
            if (!target) return;
            e.preventDefault();
            const offset = (header ? header.offsetHeight : 80) + 16;
            window.scrollTo({ top: target.offsetTop - offset, behavior: 'smooth' });
        });
    });

    /* ── BACK TO TOP ─────────────────────────────────────────── */
    if (backToTop) {
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* ── REVEAL ON SCROLL (Intersection Observer) ────────────── */
    const revealObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

    /* ── ANIMATED COUNTERS ───────────────────────────────────── */
    const counterObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    document.querySelectorAll('.stat-number').forEach(el => counterObserver.observe(el));

    function animateCounter(el) {
        const target   = parseInt(el.dataset.target) || 0;
        const duration = 1800;
        const steps    = 60;
        const increment = target / steps;
        let current    = 0;
        let tick       = 0;

        const timer = setInterval(() => {
            tick++;
            current = Math.min(current + increment, target);
            el.textContent = Math.floor(current) + '+';
            if (tick >= steps) {
                el.textContent = target + '+';
                clearInterval(timer);
            }
        }, duration / steps);
    }

    /* ── HERO PARTICLES ──────────────────────────────────────── */
    const particleContainer = document.getElementById('heroParticles');
    if (particleContainer) {
        for (let i = 0; i < 18; i++) {
            const p = document.createElement('div');
            p.className = 'particle';
            const size = Math.random() * 6 + 3;
            Object.assign(p.style, {
                width:  size + 'px',
                height: size + 'px',
                left:   Math.random() * 100 + '%',
                top:    Math.random() * 100 + '%',
                '--dur': (Math.random() * 5 + 4) + 's',
                '--d':   (Math.random() * 4) + 's',
            });
            particleContainer.appendChild(p);
        }
    }

    /* ── SERVICE FILTER TABS ─────────────────────────────────── */
    const filterBtns  = document.querySelectorAll('.filter-btn');
    const serviceCards = document.querySelectorAll('.service-card');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Active state
            filterBtns.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');

            const filter = btn.dataset.filter;

            serviceCards.forEach(card => {
                const match = filter === 'all' || card.dataset.tag === filter;
                if (match) {
                    card.style.display = '';
                    // Re-trigger reveal animation
                    card.classList.remove('visible');
                    requestAnimationFrame(() => {
                        requestAnimationFrame(() => card.classList.add('visible'));
                    });
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    /* ── CONTACT FORM ────────────────────────────────────────── */
    const form      = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const alertBox  = document.getElementById('formAlert');

    if (form) {
        form.addEventListener('submit', e => {
            e.preventDefault();

            const formData     = new FormData(form);
            const requiredFlds = ['name', 'email', 'phone', 'message'];
            let valid          = true;

            // Reset errors
            form.querySelectorAll('.input-wrap, textarea').forEach(el => {
                el.classList.remove('error');
                el.style.borderColor = '';
            });

            // Validate required
            requiredFlds.forEach(name => {
                const input = form.querySelector(`[name="${name}"]`);
                if (!input || !input.value.trim()) {
                    valid = false;
                    const wrap = input?.closest('.input-wrap');
                    if (wrap) wrap.classList.add('error');
                    else if (input) input.style.borderColor = '#e84e5c';
                }
            });

            // Validate email format
            const emailInput = form.querySelector('[name="email"]');
            if (emailInput && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailInput.value)) {
                valid = false;
                const wrap = emailInput.closest('.input-wrap');
                if (wrap) wrap.classList.add('error');
            }

            if (!valid) {
                showAlert('error', 'Please fill in all required fields correctly.');
                return;
            }

            // Loading state
            setLoading(true);

            fetch('contact-handler.php', { method: 'POST', body: formData })
                .then(r => r.json())
                .then(data => {
                    setLoading(false);
                    if (data.success) {
                        showAlert('success', data.message || 'Message sent! We\'ll be in touch soon.');
                        form.reset();
                    } else {
                        showAlert('error', data.message || 'Something went wrong. Please try again.');
                    }
                })
                .catch(() => {
                    setLoading(false);
                    showAlert('error', 'Network error. Please try again or contact us directly.');
                });
        });

        // Clear error on input
        form.querySelectorAll('input, select, textarea').forEach(input => {
            input.addEventListener('input', () => {
                const wrap = input.closest('.input-wrap');
                if (wrap) wrap.classList.remove('error');
                input.style.borderColor = '';
            });
        });
    }

    function setLoading(loading) {
        if (!submitBtn) return;
        const textSpan    = submitBtn.querySelector('.btn-text');
        const loadingSpan = submitBtn.querySelector('.btn-loading');
        submitBtn.disabled = loading;
        if (textSpan)    textSpan.hidden    = loading;
        if (loadingSpan) loadingSpan.hidden = !loading;
    }

    function showAlert(type, message) {
        if (!alertBox) return;
        alertBox.className = `alert alert-${type} show`;
        alertBox.textContent = message;
        alertBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        setTimeout(() => alertBox.classList.remove('show'), 6000);
    }

    /* ── HERO CHIPS PARALLAX ─────────────────────────────────── */
    const chips = document.querySelector('.hero-chips');
    if (chips) {
        window.addEventListener('scroll', () => {
            const offset = window.scrollY;
            chips.style.transform = `translateY(${offset * 0.12}px)`;
        }, { passive: true });
    }

    /* ── TILT EFFECT ON SERVICE CARDS ───────────────────────── */
    serviceCards.forEach(card => {
        card.addEventListener('mousemove', e => {
            const rect   = card.getBoundingClientRect();
            const x      = e.clientX - rect.left;
            const y      = e.clientY - rect.top;
            const cx     = rect.width  / 2;
            const cy     = rect.height / 2;
            const rotX   = ((y - cy) / cy) * -5;
            const rotY   = ((x - cx) / cx) *  5;
            card.style.transform = `perspective(800px) rotateX(${rotX}deg) rotateY(${rotY}deg) translateY(-8px)`;
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = '';
        });
    });

    /* ── INITIAL CALL ────────────────────────────────────────── */
    onScroll();
});