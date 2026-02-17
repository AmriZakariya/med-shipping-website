<?php
/**
 * ============================================================
 *  Med Shipping Solutions — index.php
 * ============================================================
 */
session_start();

// ─── Language Handling ─────────────────────────────────────
$supported = ['fr', 'en', 'ar'];
$default   = 'fr';

if (isset($_GET['lang']) && in_array($_GET['lang'], $supported)) {
    $_SESSION['lang'] = $_GET['lang'];
}

$lang_code = isset($_SESSION['lang']) ? $_SESSION['lang'] : $default;
$is_rtl    = ($lang_code === 'ar');

// Load config + language
require_once 'config.php';
$lang = include "languages/{$lang_code}.php";

// Helper: translate activity/reference labels via lang array
function t($key) { global $lang; return isset($lang[$key]) ? $lang[$key] : $key; }
?>
<!DOCTYPE html>
<html lang="<?= $lang_code ?>" <?= $is_rtl ? 'dir="rtl"' : '' ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"  content="<?= META_DESCRIPTION ?>">
  <meta name="keywords"     content="<?= META_KEYWORDS ?>">
  <meta name="author"       content="<?= COMPANY_NAME ?>">
  <meta name="robots"       content="index, follow">

  <!-- Open Graph -->
  <meta property="og:title"       content="<?= COMPANY_NAME ?> – <?= COMPANY_TAGLINE ?>">
  <meta property="og:description" content="<?= META_DESCRIPTION ?>">
  <meta property="og:type"        content="website">
  <meta property="og:url"         content="<?= SITE_URL ?>">

  <title><?= COMPANY_NAME ?> — <?= COMPANY_TAGLINE ?> | <?= COMPANY_SHORT ?></title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <?php if (GA_TRACKING_ID): ?>
  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?= GA_TRACKING_ID ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', '<?= GA_TRACKING_ID ?>');
  </script>
  <?php endif; ?>
</head>
<body <?= $is_rtl ? 'class="rtl"' : '' ?>>

<!-- Scroll Progress Bar -->
<div id="progress-bar"></div>

<!-- Mobile Nav Overlay -->
<div class="nav-overlay" id="navOverlay"></div>

<!-- ─── HEADER ─────────────────────────────────────────────── -->
<header class="header at-top">
  <nav class="navbar">

    <a href="#home" class="logo">
      <span class="logo-badge"><?= COMPANY_SHORT ?></span>
      <span class="logo-text"><?= COMPANY_NAME ?> <span></span></span>
    </a>

    <ul class="nav-menu">
      <li><a href="#home"><?= t('nav_home') ?></a></li>
      <li><a href="#about"><?= t('nav_about') ?></a></li>
      <li><a href="#activities"><?= t('nav_activities') ?></a></li>
      <li><a href="#network"><?= t('nav_network') ?></a></li>
      <li><a href="#references"><?= t('nav_references') ?></a></li>
      <li><a href="#contact"><?= t('nav_contact') ?></a></li>

      <li class="lang-switcher">
        <a href="?lang=fr" class="lang-btn <?= $lang_code === 'fr' ? 'active' : '' ?>">FR</a>
        <a href="?lang=en" class="lang-btn <?= $lang_code === 'en' ? 'active' : '' ?>">EN</a>
        <a href="?lang=ar" class="lang-btn <?= $lang_code === 'ar' ? 'active' : '' ?>">AR</a>
      </li>
    </ul>

    <button class="mobile-toggle" aria-label="Menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </nav>
</header>

<!-- ─── HERO ───────────────────────────────────────────────── -->
<section id="home" class="hero">
  <div class="hero-bg"></div>
  <div class="hero-dots"></div>

  <div class="hero-content">
    <span class="hero-eyebrow">
      <i class="fas fa-anchor"></i>
      <?= COMPANY_NAME ?> — <?= COMPANY_TAGLINE ?>
    </span>

    <h1><?= t('hero_title') ?></h1>
    <p class="hero-sub"><?= t('hero_subtitle') ?></p>

    <div class="hero-actions">
      <a href="#contact" class="btn btn-gold">
        <i class="fas fa-file-alt"></i> <?= t('hero_cta') ?>
      </a>
      <a href="#activities" class="btn btn-outline">
        <?= t('hero_cta_secondary') ?> <i class="fas fa-arrow-right"></i>
      </a>
    </div>

    <div class="hero-stats">
      <div class="hero-stat">
        <span class="hero-stat-num stat-number" data-target="<?= STAT_COUNTRIES ?>" data-suffix="+"><?= STAT_COUNTRIES ?>+</span>
        <span class="hero-stat-lbl"><?= t('stat_countries') ?></span>
      </div>
      <div class="hero-stat">
        <span class="hero-stat-num stat-number" data-target="<?= STAT_PARTNERS ?>" data-suffix="+"><?= STAT_PARTNERS ?>+</span>
        <span class="hero-stat-lbl"><?= t('stat_partners') ?></span>
      </div>
      <div class="hero-stat">
        <span class="hero-stat-num stat-number" data-target="<?= STAT_YEARS ?>" data-suffix="+"><?= STAT_YEARS ?>+</span>
        <span class="hero-stat-lbl"><?= t('stat_years') ?></span>
      </div>
    </div>
  </div>

  <!-- Wave SVG -->
  <div class="hero-wave">
    <svg viewBox="0 0 1440 80" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
      <path d="M0,40 C360,80 1080,0 1440,40 L1440,80 L0,80 Z" fill="#F8FAFC"/>
    </svg>
  </div>
</section>

<!-- ─── ABOUT ──────────────────────────────────────────────── -->
<section id="about" style="background: var(--gray-50); padding: 90px 0;">
  <div class="section-wrap" style="padding-top: 0; padding-bottom: 0;">
    <div class="section-header reveal">
      <span class="section-tag"><i class="fas fa-ship"></i> <?= t('nav_about') ?></span>
      <h2><?= t('about_title') ?></h2>
      <div class="divider"></div>
    </div>

    <div class="about-grid">
      <div class="about-text reveal reveal-delay-1">
        <?php foreach (explode('\n\n', t('about_text')) as $para): ?>
          <p><?= $para ?></p>
        <?php endforeach; ?>

        <div class="values-row" style="margin-top: 2rem;">
          <div class="value-chip reveal reveal-delay-2"><i class="fas fa-star"></i> <?= t('val_integrity') ?></div>
          <div class="value-chip reveal reveal-delay-2"><i class="fas fa-award"></i> <?= t('val_excellence') ?></div>
          <div class="value-chip reveal reveal-delay-3"><i class="fas fa-lightbulb"></i> <?= t('val_innovation') ?></div>
          <div class="value-chip reveal reveal-delay-3"><i class="fas fa-handshake"></i> <?= t('val_partnership') ?></div>
        </div>
      </div>

      <div class="about-mission-card reveal reveal-delay-2">
        <div class="tag"><i class="fas fa-bullseye"></i> <?= t('about_mission') ?></div>
        <h3><?= t('about_mission') ?></h3>
        <p><?= t('about_mission_text') ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ─── WHY CHOOSE US ──────────────────────────────────────── -->
<section id="why" style="padding: 90px 0;">
  <div class="section-wrap" style="padding-top: 0; padding-bottom: 0;">
    <div class="section-header reveal">
      <span class="section-tag"><i class="fas fa-trophy"></i> <?= t('why_title') ?></span>
      <h2><?= t('why_title') ?></h2>
      <div class="divider"></div>
    </div>

    <div class="why-grid">
      <div class="why-card reveal reveal-delay-1">
        <div class="why-icon"><i class="fas fa-award"></i></div>
        <h3><?= t('why_experience') ?></h3>
        <p><?= t('why_experience_text') ?></p>
      </div>
      <div class="why-card reveal reveal-delay-2">
        <div class="why-icon"><i class="fas fa-shield-alt"></i></div>
        <h3><?= t('why_reliability') ?></h3>
        <p><?= t('why_reliability_text') ?></p>
      </div>
      <div class="why-card reveal reveal-delay-3">
        <div class="why-icon"><i class="fas fa-globe"></i></div>
        <h3><?= t('why_network') ?></h3>
        <p><?= t('why_network_text') ?></p>
      </div>
      <div class="why-card reveal reveal-delay-4">
        <div class="why-icon"><i class="fas fa-headset"></i></div>
        <h3><?= t('why_support') ?></h3>
        <p><?= t('why_support_text') ?></p>
      </div>
    </div>
  </div>
</section>

<!-- ─── ACTIVITIES ─────────────────────────────────────────── -->
<section id="activities" style="background: var(--white); padding: 90px 0;">
  <div class="section-wrap" style="padding-top: 0; padding-bottom: 0;">
    <div class="section-header reveal">
      <span class="section-tag"><i class="fas fa-boxes"></i> <?= t('activities_title') ?></span>
      <h2><?= t('activities_title') ?></h2>
      <p><?= t('activities_sub') ?></p>
      <div class="divider"></div>
    </div>

    <div class="activities-grid">
      <?php
      $delays = ['reveal-delay-1','reveal-delay-2','reveal-delay-3','reveal-delay-1','reveal-delay-2','reveal-delay-3'];
      foreach ($ACTIVITIES as $i => $act):
        $data  = t($act['key']);
        $title = is_array($data) ? $data['title'] : $act['key'];
        $desc  = is_array($data) ? $data['desc']  : '';
        $delay = $delays[$i] ?? '';
      ?>
      <div class="activity-card reveal <?= $delay ?>">
        <div class="activity-icon-wrap">
          <i class="fas <?= htmlspecialchars($act['icon']) ?>"></i>
        </div>
        <h3><?= htmlspecialchars($title) ?></h3>
        <p><?= htmlspecialchars($desc) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ─── NETWORK ────────────────────────────────────────────── -->
<section id="network" style="background: var(--gray-50); padding: 90px 0;">
  <div class="section-wrap" style="padding-top: 0; padding-bottom: 0;">
    <div class="section-header reveal">
      <span class="section-tag"><i class="fas fa-network-wired"></i> <?= t('network_title') ?></span>
      <h2><?= t('network_title') ?></h2>
      <p><?= t('network_text') ?></p>
      <div class="divider"></div>
    </div>

    <div class="network-visual">
      <div class="network-text reveal reveal-delay-1">
        <p><?= t('network_text') ?></p>
        <a href="#contact" class="btn btn-navy" style="display: inline-flex; margin-top: 1rem;">
          <i class="fas fa-paper-plane"></i> <?= t('hero_cta') ?>
        </a>
      </div>

      <div class="network-stats">
        <div class="stat-card reveal reveal-delay-1">
          <div class="stat-icon"><i class="fas fa-flag"></i></div>
          <span class="stat-number" data-target="<?= STAT_COUNTRIES ?>" data-suffix="+"><?= STAT_COUNTRIES ?>+</span>
          <span class="stat-label"><?= t('stat_countries') ?></span>
        </div>
        <div class="stat-card reveal reveal-delay-2">
          <div class="stat-icon"><i class="fas fa-handshake"></i></div>
          <span class="stat-number" data-target="<?= STAT_PARTNERS ?>" data-suffix="+"><?= STAT_PARTNERS ?>+</span>
          <span class="stat-label"><?= t('stat_partners') ?></span>
        </div>
        <div class="stat-card reveal reveal-delay-3">
          <div class="stat-icon"><i class="fas fa-ship"></i></div>
          <span class="stat-number" data-target="<?= STAT_ROUTES ?>" data-suffix="+"><?= STAT_ROUTES ?>+</span>
          <span class="stat-label"><?= t('stat_routes') ?></span>
        </div>
        <div class="stat-card reveal reveal-delay-4">
          <div class="stat-icon"><i class="fas fa-calendar-alt"></i></div>
          <span class="stat-number" data-target="<?= STAT_YEARS ?>" data-suffix="+"><?= STAT_YEARS ?>+</span>
          <span class="stat-label"><?= t('stat_years') ?></span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─── REFERENCES ─────────────────────────────────────────── -->
<section id="references" style="background: var(--white); padding: 90px 0;">
  <div class="section-wrap" style="padding-top: 0; padding-bottom: 0;">
    <div class="section-header reveal">
      <span class="section-tag"><i class="fas fa-building"></i> <?= t('references_title') ?></span>
      <h2><?= t('references_title') ?></h2>
      <p><?= t('references_text') ?></p>
      <div class="divider"></div>
    </div>

    <div class="references-grid">
      <?php
      $ref_delays = ['reveal-delay-1','reveal-delay-2','reveal-delay-3','reveal-delay-4','reveal-delay-5','reveal-delay-1'];
      foreach ($REFERENCES as $i => $ref):
        $d = $ref_delays[$i] ?? '';
      ?>
      <div class="reference-card reveal <?= $d ?>">
        <div class="ref-icon"><i class="fas <?= htmlspecialchars($ref['icon']) ?>"></i></div>
        <h4><?= htmlspecialchars(t($ref['label_key'])) ?></h4>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ─── CONTACT ────────────────────────────────────────────── -->
<section id="contact" style="background: var(--gray-50); padding: 90px 0;">
  <div class="section-wrap" style="padding-top: 0; padding-bottom: 0;">
    <div class="section-header reveal">
      <span class="section-tag"><i class="fas fa-envelope"></i> <?= t('nav_contact') ?></span>
      <h2><?= t('contact_title') ?></h2>
      <p><?= t('contact_subtitle') ?></p>
      <div class="divider"></div>
    </div>

    <div class="contact-grid">

      <!-- Form -->
      <div class="contact-form-card reveal reveal-delay-1">
        <h3><i class="fas fa-paper-plane" style="color: var(--ocean); margin-right: .5rem;"></i> <?= t('contact_title') ?></h3>

        <div id="formAlert" class="alert"></div>

        <form id="contactForm" method="POST" action="contact-handler.php" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label for="name"><?= t('contact_name') ?> <span class="req">*</span></label>
              <input type="text" id="name" name="name" autocomplete="name" placeholder="Jean Dupont">
            </div>
            <div class="form-group">
              <label for="email"><?= t('contact_email') ?> <span class="req">*</span></label>
              <input type="email" id="email" name="email" autocomplete="email" placeholder="exemple@company.com">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <label for="phone"><?= t('contact_phone') ?> <span class="req">*</span></label>
              <input type="tel" id="phone" name="phone" autocomplete="tel" placeholder="+212 6XX XXX XXX">
            </div>
            <div class="form-group">
              <label for="company"><?= t('contact_company') ?></label>
              <input type="text" id="company" name="company" autocomplete="organization" placeholder="Ma Société SARL">
            </div>
          </div>

          <div class="form-group">
            <label for="service"><?= t('contact_service') ?></label>
            <select id="service" name="service">
              <option value=""><?= t('service_select') ?></option>
              <option value="maritime"><?= t('service_maritime') ?></option>
              <option value="road"><?= t('service_road') ?></option>
              <option value="air"><?= t('service_air') ?></option>
              <option value="warehouse"><?= t('service_warehouse') ?></option>
              <option value="customs"><?= t('service_customs') ?></option>
              <option value="other"><?= t('service_other') ?></option>
            </select>
          </div>

          <div class="form-group">
            <label for="message"><?= t('contact_message') ?> <span class="req">*</span></label>
            <textarea id="message" name="message" rows="5" placeholder="Décrivez votre besoin logistique..."></textarea>
          </div>

          <button type="submit" class="submit-btn">
            <i class="fas fa-paper-plane"></i> <?= t('contact_submit') ?>
          </button>
        </form>
      </div>

      <!-- Info -->
      <div class="contact-info-card reveal reveal-delay-2">
        <h3><?= t('contact_info') ?></h3>

        <div class="info-item">
          <div class="info-icon-wrap"><i class="fas fa-map-marker-alt"></i></div>
          <div class="info-text">
            <strong><?= t('contact_address') ?></strong>
            <span><?= CONTACT_ADDRESS ?></span>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon-wrap"><i class="fas fa-phone"></i></div>
          <div class="info-text">
            <strong>Téléphone</strong>
            <span><a href="tel:<?= CONTACT_PHONE ?>" style="color: rgba(255,255,255,.75);"><?= CONTACT_PHONE ?></a></span>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon-wrap"><i class="fas fa-envelope"></i></div>
          <div class="info-text">
            <strong>Email</strong>
            <span><a href="mailto:<?= CONTACT_EMAIL ?>" style="color: rgba(255,255,255,.75);"><?= CONTACT_EMAIL ?></a></span>
          </div>
        </div>

        <div class="info-item">
          <div class="info-icon-wrap"><i class="fas fa-clock"></i></div>
          <div class="info-text">
            <strong>Horaires</strong>
            <span><?= CONTACT_HOURS_WEEK ?><br><?= CONTACT_HOURS_SAT ?></span>
          </div>
        </div>

        <div class="social-links">
          <a href="<?= SOCIAL_FACEBOOK ?>"  class="social-link" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="<?= SOCIAL_LINKEDIN ?>"  class="social-link" target="_blank" rel="noopener" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="<?= SOCIAL_INSTAGRAM ?>" class="social-link" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="<?= SOCIAL_WHATSAPP ?>"  class="social-link" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ─── FOOTER ─────────────────────────────────────────────── -->
<footer class="footer">
  <div class="footer-inner">
    <div class="footer-grid">

      <div class="footer-brand">
        <a href="#home" class="logo">
          <span class="logo-badge"><?= COMPANY_SHORT ?></span>
          <span class="logo-text"><?= COMPANY_NAME ?></span>
        </a>
        <p style="margin-top: .75rem;"><?= t('footer_about_text') ?></p>
      </div>

      <div class="footer-col">
        <h4><?= t('footer_quick_links') ?></h4>
        <ul>
          <li><a href="#home"><?= t('nav_home') ?></a></li>
          <li><a href="#about"><?= t('nav_about') ?></a></li>
          <li><a href="#activities"><?= t('nav_activities') ?></a></li>
          <li><a href="#network"><?= t('nav_network') ?></a></li>
          <li><a href="#references"><?= t('nav_references') ?></a></li>
          <li><a href="#contact"><?= t('nav_contact') ?></a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4><?= t('footer_services') ?></h4>
        <ul>
          <li><a href="#activities"><?= t('service_maritime') ?></a></li>
          <li><a href="#activities"><?= t('service_road') ?></a></li>
          <li><a href="#activities"><?= t('service_air') ?></a></li>
          <li><a href="#activities"><?= t('service_warehouse') ?></a></li>
          <li><a href="#activities"><?= t('service_customs') ?></a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h4><?= t('footer_connect') ?></h4>
        <div class="social-links" style="margin-top: 0; padding-top: 0; border: none; flex-wrap: wrap;">
          <a href="<?= SOCIAL_FACEBOOK ?>"  class="social-link" target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="<?= SOCIAL_LINKEDIN ?>"  class="social-link" target="_blank" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="<?= SOCIAL_INSTAGRAM ?>" class="social-link" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="<?= SOCIAL_TWITTER ?>"   class="social-link" target="_blank" aria-label="Twitter/X"><i class="fab fa-x-twitter"></i></a>
          <a href="<?= SOCIAL_WHATSAPP ?>"  class="social-link" target="_blank" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>

    </div>

    <div class="footer-bottom">
      <span>&copy; <?= date('Y') ?> <?= COMPANY_NAME ?>. <?= t('footer_rights') ?></span>
      <span>Made with <i class="fas fa-heart" style="color: var(--gold);"></i> in Morocco</span>
    </div>
  </div>
</footer>

<!-- ─── FLOATING CTA ───────────────────────────────────────── -->
<div class="float-cta">
  <button class="float-btn float-btn-top" aria-label="Retour en haut">
    <i class="fas fa-chevron-up"></i>
  </button>
  <a href="<?= SOCIAL_WHATSAPP ?>" class="float-btn float-btn-wa" target="_blank" rel="noopener">
    <i class="fab fa-whatsapp"></i>
    <span>WhatsApp</span>
  </a>
</div>

<!-- JavaScript -->
<script src="js/script.js"></script>
</body>
</html>
