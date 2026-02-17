/* ============================================================
   Med Shipping Solutions — script.js
   ============================================================ */

document.addEventListener('DOMContentLoaded', function () {

  /* ── Scroll Progress Bar ─────────────────────────────── */
  const progressBar = document.getElementById('progress-bar');
  function updateProgress() {
    const scrollTop    = window.scrollY;
    const docHeight    = document.documentElement.scrollHeight - window.innerHeight;
    const pct          = docHeight > 0 ? (scrollTop / docHeight) * 100 : 0;
    if (progressBar) progressBar.style.width = pct + '%';
  }

  /* ── Header Scroll Effect ────────────────────────────── */
  const header = document.querySelector('.header');
  function updateHeader() {
    if (!header) return;
    if (window.scrollY > 60) {
      header.classList.add('scrolled');
      header.classList.remove('at-top');
    } else {
      header.classList.remove('scrolled');
      header.classList.add('at-top');
    }
  }

  /* ── Back to Top Button ──────────────────────────────── */
  const backTopBtn = document.querySelector('.float-btn-top');
  function updateBackTop() {
    if (!backTopBtn) return;
    if (window.scrollY > 400) backTopBtn.classList.add('visible');
    else                       backTopBtn.classList.remove('visible');
  }

  if (backTopBtn) {
    backTopBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  }

  /* ── Combined scroll listener ────────────────────────── */
  window.addEventListener('scroll', function () {
    updateProgress();
    updateHeader();
    updateBackTop();
  }, { passive: true });

  // Run immediately
  updateProgress();
  updateHeader();
  updateBackTop();

  /* ── Mobile Navigation ───────────────────────────────── */
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navMenu      = document.querySelector('.nav-menu');
  const navOverlay   = document.querySelector('.nav-overlay');

  function openNav() {
    navMenu?.classList.add('open');
    navOverlay?.classList.add('open');
    mobileToggle?.classList.add('open');
    document.body.style.overflow = 'hidden';
  }

  function closeNav() {
    navMenu?.classList.remove('open');
    navOverlay?.classList.remove('open');
    mobileToggle?.classList.remove('open');
    document.body.style.overflow = '';
  }

  mobileToggle?.addEventListener('click', () => {
    navMenu?.classList.contains('open') ? closeNav() : openNav();
  });

  navOverlay?.addEventListener('click', closeNav);

  // Close nav on link click
  document.querySelectorAll('.nav-menu a').forEach(link => {
    link.addEventListener('click', closeNav);
  });

  /* ── Smooth scroll for anchor links ─────────────────── */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      if (href === '#') return;
      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        const offset = (header?.offsetHeight || 80) + 16;
        window.scrollTo({ top: target.offsetTop - offset, behavior: 'smooth' });
      }
    });
  });

  /* ── Reveal on Scroll (IntersectionObserver) ─────────── */
  const revealEls = document.querySelectorAll('.reveal');
  if (revealEls.length) {
    const revealObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

    revealEls.forEach(el => revealObserver.observe(el));
  }

  /* ── Animated Counters ──────────────────────────────── */
  const counters = document.querySelectorAll('.stat-number[data-target]');
  let countersStarted = false;

  function animateCounter(el) {
    const target   = parseInt(el.dataset.target, 10);
    const suffix   = el.dataset.suffix || '+';
    const duration = 1800;
    const steps    = 60;
    const step     = duration / steps;
    let current    = 0;
    const increment = target / steps;

    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        el.textContent = target.toLocaleString() + suffix;
        clearInterval(timer);
      } else {
        el.textContent = Math.floor(current).toLocaleString() + suffix;
      }
    }, step);
  }

  if (counters.length) {
    const counterObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting && !countersStarted) {
          countersStarted = true;
          counters.forEach(animateCounter);
        }
      });
    }, { threshold: 0.3 });

    counters.forEach(c => counterObserver.observe(c));
  }

  /* ── Hero floating dots ──────────────────────────────── */
  const dotsContainer = document.querySelector('.hero-dots');
  if (dotsContainer) {
    for (let i = 0; i < 18; i++) {
      const dot = document.createElement('span');
      dot.style.left    = Math.random() * 100 + '%';
      dot.style.top     = (30 + Math.random() * 60) + '%';
      dot.style.setProperty('--dur',   (6 + Math.random() * 8) + 's');
      dot.style.setProperty('--delay', (Math.random() * 8) + 's');
      dotsContainer.appendChild(dot);
    }
  }

  /* ── Contact Form ────────────────────────────────────── */
  const contactForm = document.getElementById('contactForm');
  const alertDiv    = document.getElementById('formAlert');
  const submitBtn   = contactForm?.querySelector('.submit-btn');

  function showAlert(type, msg) {
    if (!alertDiv) return;
    alertDiv.className = `alert alert-${type} show`;
    alertDiv.innerHTML = msg;
    alertDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    setTimeout(() => alertDiv.classList.remove('show'), 6000);
  }

  function setLoading(loading) {
    if (!submitBtn) return;
    submitBtn.disabled = loading;
    submitBtn.innerHTML = loading
      ? '<i class="fas fa-spinner fa-spin"></i> Envoi...'
      : '<i class="fas fa-paper-plane"></i> ' + (submitBtn.dataset.label || 'Envoyer');
  }

  if (contactForm) {
    // Store original label
    if (submitBtn) submitBtn.dataset.label = submitBtn.textContent.trim();

    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();

      // Clear previous errors
      this.querySelectorAll('.error').forEach(el => el.classList.remove('error'));

      const fields    = ['name', 'email', 'phone', 'message'];
      let valid       = true;

      fields.forEach(name => {
        const input = this.querySelector(`[name="${name}"]`);
        if (!input) return;
        if (!input.value.trim()) {
          input.classList.add('error');
          valid = false;
        }
      });

      // Email format
      const emailInput = this.querySelector('[name="email"]');
      const emailRe    = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (emailInput && !emailRe.test(emailInput.value)) {
        emailInput.classList.add('error');
        valid = false;
      }

      if (!valid) {
        showAlert('error', '<i class="fas fa-exclamation-circle"></i> Veuillez remplir tous les champs obligatoires.');
        return;
      }

      setLoading(true);

      const formData = new FormData(this);

      fetch('contact-handler.php', { method: 'POST', body: formData })
        .then(r => r.json())
        .then(data => {
          setLoading(false);
          if (data.success) {
            showAlert('success', data.message || '<i class="fas fa-check-circle"></i> Message envoyé avec succès !');
            contactForm.reset();
          } else {
            showAlert('error', data.message || '<i class="fas fa-exclamation-circle"></i> Une erreur est survenue.');
          }
        })
        .catch(() => {
          setLoading(false);
          showAlert('error', '<i class="fas fa-exclamation-circle"></i> Erreur réseau. Veuillez réessayer.');
        });
    });

    // Live validation: remove error on input
    contactForm.querySelectorAll('input, select, textarea').forEach(input => {
      input.addEventListener('input', function () { this.classList.remove('error'); });
    });
  }

  /* ── Active nav link on scroll ───────────────────────── */
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-menu a[href^="#"]');

  function updateActiveNav() {
    const scrollPos = window.scrollY + (header?.offsetHeight || 80) + 30;
    let current = '';

    sections.forEach(section => {
      if (section.offsetTop <= scrollPos) {
        current = section.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === '#' + current) {
        link.classList.add('active');
      }
    });
  }

  window.addEventListener('scroll', updateActiveNav, { passive: true });
  updateActiveNav();

});
