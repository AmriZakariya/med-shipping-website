<?php
session_start();

/* ================================================================
 *  ╔═══════════════════════════════════════════════════════════╗
 *  ║         M2S — SITE CONTENT CONFIGURATION                  ║
 *  ║  Edit the $site array below to update ALL site content.   ║
 *  ║  No HTML knowledge needed — everything is here.           ║
 *  ╚═══════════════════════════════════════════════════════════╝
 * ================================================================ */

$site = [

    /* ──────────────────────────────────────────────────────────
     *  COMPANY IDENTITY
     * ────────────────────────────────────────────────────────── */
        'name'       => 'Med Shipping Solutions',
        'short_name' => 'M2S',
        'tagline'    => 'Your Gateway to Global Trade',
        'founded'    => '2010',
        'url'        => 'https://medshippingsolutions.com',

    /* ──────────────────────────────────────────────────────────
     *  CONTACT DETAILS  ← Update these whenever they change
     * ────────────────────────────────────────────────────────── */
        'address'        => 'Casablanca, Morocco',
        'phone'          => '+212 XXX-XXXXXX',
        'email'          => 'contact@medshippingsolutions.com',
        'whatsapp'       => '+212XXXXXXXXX',
        'hours_weekday'  => 'Mon – Fri: 8:00 AM – 6:00 PM',
        'hours_saturday' => 'Sat: 9:00 AM – 1:00 PM',

    /* ──────────────────────────────────────────────────────────
     *  SOCIAL MEDIA  ← Replace '#' with real URLs
     * ────────────────────────────────────────────────────────── */
        'social' => [
                'linkedin'  => '#',
                'facebook'  => '#',
                'instagram' => '#',
                'twitter'   => '#',
        ],

    /* ──────────────────────────────────────────────────────────
     *  KEY STATS  ← Animated counters on the page
     * ────────────────────────────────────────────────────────── */
        'stats' => [
                ['value' => 14,   'suffix' => '+', 'label' => 'Years of Experience'],
                ['value' => 50,   'suffix' => '+', 'label' => 'Countries Covered'],
                ['value' => 200,  'suffix' => '+', 'label' => 'Global Partners'],
                ['value' => 1200, 'suffix' => '+', 'label' => 'Shipments Per Year'],
        ],

    /* ──────────────────────────────────────────────────────────
     *  SERVICES  ← Add/remove/edit any service card here
     *  icon: Font Awesome class (fa-ship, fa-truck, etc.)
     *  tag:  used for filter buttons (Sea, Road, Air, Land, Customs, Advisory)
     * ────────────────────────────────────────────────────────── */
        'services' => [
                [
                        'icon'  => 'fa-ship',
                        'title' => 'Maritime Transport',
                        'desc'  => 'FCL & LCL freight connecting Mediterranean and global ports with precision and reliability.',
                        'tag'   => 'Sea',
                ],
                [
                        'icon'  => 'fa-truck',
                        'title' => 'Road Freight',
                        'desc'  => 'Door-to-door transport across Morocco, Europe and beyond with real-time GPS tracking.',
                        'tag'   => 'Road',
                ],
                [
                        'icon'  => 'fa-plane',
                        'title' => 'Air Freight',
                        'desc'  => 'Express and standard air cargo for time-critical shipments via major airline partnerships.',
                        'tag'   => 'Air',
                ],
                [
                        'icon'  => 'fa-warehouse',
                        'title' => 'Warehousing & Logistics',
                        'desc'  => 'Secure modern warehousing with inventory management, pick & pack and last-mile distribution.',
                        'tag'   => 'Land',
                ],
                [
                        'icon'  => 'fa-file-contract',
                        'title' => 'Customs Clearance',
                        'desc'  => 'Expert dédouanement services for seamless border crossings with full regulatory compliance.',
                        'tag'   => 'Customs',
                ],
                [
                        'icon'  => 'fa-handshake',
                        'title' => 'Trade Consulting',
                        'desc'  => 'Incoterms guidance, import/export documentation and strategic supply-chain consulting.',
                        'tag'   => 'Advisory',
                ],
        ],

    /* ──────────────────────────────────────────────────────────
     *  WHY CHOOSE US
     * ────────────────────────────────────────────────────────── */
        'advantages' => [
                ['icon' => 'fa-award',         'title' => '14+ Years Experience',  'desc' => 'Over a decade serving Moroccan and international trade with proven expertise.'],
                ['icon' => 'fa-shield-halved', 'title' => 'Reliable & Secure',     'desc' => 'End-to-end cargo insurance and strict security protocols on every shipment.'],
                ['icon' => 'fa-globe',         'title' => 'Global Network',         'desc' => '200+ partners across 50+ countries — your cargo is always in trusted hands.'],
                ['icon' => 'fa-headset',       'title' => '24 / 7 Support',         'desc' => 'Dedicated account managers available around the clock for urgent needs.'],
        ],

    /* ──────────────────────────────────────────────────────────
     *  HOW WE WORK (Process Timeline)
     * ────────────────────────────────────────────────────────── */
        'process' => [
                ['step' => '01', 'title' => 'Get a Quote',  'desc' => 'Share your cargo details and we respond with a competitive tailored quote within hours.'],
                ['step' => '02', 'title' => 'Plan & Book',  'desc' => 'Our experts design the optimal route and handle all booking and documentation.'],
                ['step' => '03', 'title' => 'Ship & Track', 'desc' => 'Your goods move while you monitor progress via real-time tracking updates.'],
                ['step' => '04', 'title' => 'Delivered',    'desc' => 'On-time delivery confirmed with full customs clearance handled end-to-end.'],
        ],

    /* ──────────────────────────────────────────────────────────
     *  REFERENCES / CLIENT SECTORS
     * ────────────────────────────────────────────────────────── */
        'references' => [
                ['icon' => 'fa-industry',        'name' => 'Manufacturing',   'desc' => 'Heavy industry & OEM supply chains'],
                ['icon' => 'fa-boxes-stacking',  'name' => 'Retail & FMCG',   'desc' => 'High-volume consumer goods'],
                ['icon' => 'fa-hospital',        'name' => 'Healthcare',      'desc' => 'Temperature-controlled pharma logistics'],
                ['icon' => 'fa-wheat-awn',       'name' => 'Agri-Food',       'desc' => 'Fresh & bulk commodity transport'],
                ['icon' => 'fa-microchip',       'name' => 'Technology',      'desc' => 'High-value electronics & components'],
                ['icon' => 'fa-hard-hat',        'name' => 'Construction',    'desc' => 'Project cargo & heavy lift'],
        ],

    /* ──────────────────────────────────────────────────────────
     *  SEO / META
     * ────────────────────────────────────────────────────────── */
        'meta_description' => 'Med Shipping Solutions — full-service freight forwarding and logistics in Morocco. Maritime, road, air, customs clearance.',
        'meta_keywords'    => 'transport, logistique, shipping, maritime, routier, aérien, Maroc, freight, cargo, dédouanement',
];

/* ================================================================
 *  LANGUAGE HANDLING — no need to edit below this line
 * ================================================================ */
$supported_languages = ['fr', 'en', 'ar'];
$default_language    = 'fr';

if (isset($_GET['lang']) && in_array($_GET['lang'], $supported_languages)) {
    $_SESSION['lang'] = $_GET['lang'];
}
$current_lang = $_SESSION['lang'] ?? $default_language;
$is_rtl       = ($current_lang === 'ar');
$lang         = include("languages/{$current_lang}.php");
?>
<!DOCTYPE html>
<html lang="<?= $current_lang ?>" <?= $is_rtl ? 'dir="rtl"' : '' ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($site['meta_description']) ?>">
    <meta name="keywords"    content="<?= htmlspecialchars($site['meta_keywords']) ?>">
    <meta property="og:title"       content="<?= htmlspecialchars($site['name']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($site['meta_description']) ?>">
    <meta property="og:type"        content="website">
    <meta property="og:url"         content="<?= htmlspecialchars($site['url']) ?>">

    <title><?= htmlspecialchars($site['name']) ?> | <?= htmlspecialchars($site['tagline']) ?></title>

    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
</head>
<body class="<?= $is_rtl ? 'rtl' : '' ?>">

<!-- Scroll Progress Bar -->
<div class="scroll-progress" id="scrollProgress"></div>

<!-- ══════════════ HEADER ══════════════ -->
<header class="header" id="mainHeader">
    <nav class="navbar">
        <a href="#home" class="logo">
            <span class="logo-icon"><i class="fas fa-ship"></i></span>
            <span class="logo-text"><?= $site['short_name'] ?><em>.</em></span>
        </a>

        <ul class="nav-menu" id="navMenu">
            <li><a href="#home"       class="nav-link"><?= $lang['nav_home'] ?></a></li>
            <li><a href="#about"      class="nav-link"><?= $lang['nav_about'] ?></a></li>
            <li><a href="#process"    class="nav-link">Process</a></li>
            <li><a href="#activities" class="nav-link"><?= $lang['nav_activities'] ?></a></li>
            <li><a href="#network"    class="nav-link"><?= $lang['nav_network'] ?></a></li>
            <li><a href="#references" class="nav-link"><?= $lang['nav_references'] ?></a></li>
            <li><a href="#contact"    class="nav-link nav-cta"><?= $lang['nav_contact'] ?></a></li>
            <li class="lang-switcher">
                <a href="?lang=fr" class="lang-btn <?= $current_lang==='fr'?'active':'' ?>">FR</a>
                <a href="?lang=en" class="lang-btn <?= $current_lang==='en'?'active':'' ?>">EN</a>
                <a href="?lang=ar" class="lang-btn <?= $current_lang==='ar'?'active':'' ?>">AR</a>
            </li>
        </ul>

        <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </nav>
</header>

<!-- ══════════════ HERO ══════════════ -->
<section id="home" class="hero">
    <div class="hero-waves">
        <div class="wave wave-1"></div>
        <div class="wave wave-2"></div>
        <div class="wave wave-3"></div>
    </div>
    <div class="hero-particles" id="heroParticles"></div>

    <div class="hero-content">
        <div class="hero-badge">
            <i class="fas fa-anchor"></i>
            <span><?= htmlspecialchars($site['name']) ?></span>
        </div>
        <h1 class="hero-title">
            <span class="hero-line"><?= $lang['hero_title_1'] ?? 'Global Freight.' ?></span>
            <span class="hero-line hero-accent"><?= $lang['hero_title_2'] ?? 'Delivered.' ?></span>
        </h1>
        <p class="hero-sub"><?= $lang['hero_subtitle'] ?></p>
        <div class="hero-actions">
            <a href="#contact"    class="btn btn-primary"><i class="fas fa-paper-plane"></i> <?= $lang['hero_cta'] ?></a>
            <a href="#activities" class="btn btn-ghost"><i class="fas fa-boxes-stacking"></i> Our Services</a>
        </div>
        <div class="hero-chips">
            <?php foreach ($site['stats'] as $s): ?>
                <div class="chip">
                    <strong><?= $s['value'] . $s['suffix'] ?></strong>
                    <span><?= $s['label'] ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="hero-scroll-hint">
        <span>Scroll</span>
        <div class="scroll-arrow"><i class="fas fa-chevron-down"></i></div>
    </div>
</section>

<!-- ══════════════ ABOUT ══════════════ -->
<section id="about" class="section about-section">
    <div class="container">
        <div class="about-grid">
            <div class="about-left reveal">
                <div class="section-eyebrow"><i class="fas fa-info-circle"></i> <?= $lang['about_title'] ?></div>
                <h2><?= $lang['about_heading'] ?? 'Connecting Morocco<br>to the World' ?></h2>
                <p class="lead-text"><?= $lang['about_text'] ?></p>
                <div class="about-badges">
                    <span class="badge"><i class="fas fa-check-circle"></i> ISO Certified</span>
                    <span class="badge"><i class="fas fa-check-circle"></i> Licensed Forwarder</span>
                    <span class="badge"><i class="fas fa-check-circle"></i> FIATA Member</span>
                </div>
            </div>
            <div class="about-right">
                <div class="mission-card reveal reveal-delay">
                    <div class="mission-icon"><i class="fas fa-bullseye"></i></div>
                    <h3><?= $lang['about_mission'] ?></h3>
                    <p><?= $lang['about_mission_text'] ?></p>
                </div>
                <div class="mission-card reveal reveal-delay-2">
                    <div class="mission-icon"><i class="fas fa-eye"></i></div>
                    <h3>Our Vision</h3>
                    <p>To be Morocco's most trusted logistics partner — bridging continents through innovation, integrity and excellence.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════ STATS BAND ══════════════ -->
<div class="stats-band">
    <div class="container stats-row">
        <?php foreach ($site['stats'] as $s): ?>
            <div class="stat-item reveal">
                <span class="stat-number" data-target="<?= $s['value'] ?>"><?= $s['value'] . $s['suffix'] ?></span>
                <span class="stat-label"><?= $s['label'] ?></span>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- ══════════════ WHY US ══════════════ -->
<section class="section why-section">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-eyebrow"><i class="fas fa-star"></i> Why M2S</div>
            <h2><?= $lang['why_title'] ?></h2>
        </div>
        <div class="advantages-grid">
            <?php foreach ($site['advantages'] as $i => $adv): ?>
                <div class="adv-card reveal" style="--delay:<?= $i * 100 ?>ms">
                    <div class="adv-icon-wrap"><i class="fas <?= $adv['icon'] ?>"></i></div>
                    <h3><?= $adv['title'] ?></h3>
                    <p><?= $adv['desc'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ══════════════ PROCESS ══════════════ -->
<section id="process" class="section process-section">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-eyebrow"><i class="fas fa-route"></i> How It Works</div>
            <h2>Simple. Fast. Reliable.</h2>
        </div>
        <div class="process-timeline">
            <?php foreach ($site['process'] as $i => $step): ?>
                <div class="process-step reveal" style="--delay:<?= $i * 120 ?>ms">
                    <div class="step-bubble"><?= $step['step'] ?></div>
                    <?php if ($i < count($site['process'])-1): ?>
                        <div class="step-connector"></div>
                    <?php endif; ?>
                    <div class="step-body">
                        <h3><?= $step['title'] ?></h3>
                        <p><?= $step['desc'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ══════════════ SERVICES ══════════════ -->
<section id="activities" class="section services-section">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-eyebrow"><i class="fas fa-layer-group"></i> <?= $lang['activities_title'] ?></div>
            <h2>End-to-End Freight Solutions</h2>
            <p>From ocean to doorstep — every mode, every route.</p>
        </div>
        <div class="service-filters reveal">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="Sea"><i class="fas fa-ship"></i> Sea</button>
            <button class="filter-btn" data-filter="Road"><i class="fas fa-truck"></i> Road</button>
            <button class="filter-btn" data-filter="Air"><i class="fas fa-plane"></i> Air</button>
            <button class="filter-btn" data-filter="Land"><i class="fas fa-warehouse"></i> Land</button>
            <button class="filter-btn" data-filter="Customs"><i class="fas fa-file-contract"></i> Customs</button>
            <button class="filter-btn" data-filter="Advisory"><i class="fas fa-handshake"></i> Advisory</button>
        </div>
        <div class="services-grid" id="servicesGrid">
            <?php foreach ($site['services'] as $i => $svc): ?>
                <div class="service-card reveal" data-tag="<?= $svc['tag'] ?>" style="--delay:<?= $i * 80 ?>ms">
                    <div class="svc-tag"><?= $svc['tag'] ?></div>
                    <div class="svc-icon"><i class="fas <?= $svc['icon'] ?>"></i></div>
                    <h3><?= $svc['title'] ?></h3>
                    <p><?= $svc['desc'] ?></p>
                    <div class="svc-cta"><a href="#contact">Request quote <i class="fas fa-arrow-right"></i></a></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ══════════════ NETWORK ══════════════ -->
<section id="network" class="section network-section">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-eyebrow"><i class="fas fa-globe"></i> <?= $lang['nav_network'] ?></div>
            <h2><?= $lang['network_title'] ?></h2>
            <p><?= $lang['network_text'] ?></p>
        </div>
        <div class="network-visual reveal">
            <i class="fas fa-globe-africa network-globe"></i>
            <div class="network-dots">
                <?php for ($i=0; $i<12; $i++): ?>
                    <div class="dot" style="--i:<?= $i ?>"></div>
                <?php endfor; ?>
            </div>
            <p class="network-caption">Active in 50+ countries · Mediterranean hub · 200+ partner agents</p>
        </div>
    </div>
</section>

<!-- ══════════════ REFERENCES ══════════════ -->
<section id="references" class="section refs-section">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-eyebrow"><i class="fas fa-handshake"></i> <?= $lang['references_title'] ?></div>
            <h2>Sectors We Serve</h2>
            <p><?= $lang['references_text'] ?></p>
        </div>
        <div class="refs-grid">
            <?php foreach ($site['references'] as $i => $ref): ?>
                <div class="ref-card reveal" style="--delay:<?= $i * 80 ?>ms">
                    <div class="ref-icon"><i class="fas <?= $ref['icon'] ?>"></i></div>
                    <h4><?= $ref['name'] ?></h4>
                    <p><?= $ref['desc'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ══════════════ CONTACT ══════════════ -->
<section id="contact" class="section contact-section">
    <div class="container">
        <div class="section-header reveal">
            <div class="section-eyebrow"><i class="fas fa-envelope"></i> <?= $lang['contact_title'] ?></div>
            <h2>Let's Move Your Cargo</h2>
            <p><?= $lang['contact_subtitle'] ?></p>
        </div>
        <div class="contact-grid">

            <div class="contact-form-wrap reveal">
                <div id="formAlert" class="alert" role="alert"></div>
                <form id="contactForm" method="POST" novalidate>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name"><?= $lang['contact_name'] ?> <span class="req">*</span></label>
                            <div class="input-wrap">
                                <i class="fas fa-user"></i>
                                <input type="text" id="name" name="name" placeholder="John Doe" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email"><?= $lang['contact_email'] ?> <span class="req">*</span></label>
                            <div class="input-wrap">
                                <i class="fas fa-envelope"></i>
                                <input type="email" id="email" name="email" placeholder="john@company.com" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone"><?= $lang['contact_phone'] ?> <span class="req">*</span></label>
                            <div class="input-wrap">
                                <i class="fas fa-phone"></i>
                                <input type="tel" id="phone" name="phone" placeholder="+212 6XX XXXXXX" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="company"><?= $lang['contact_company'] ?></label>
                            <div class="input-wrap">
                                <i class="fas fa-building"></i>
                                <input type="text" id="company" name="company" placeholder="Your company">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="service"><?= $lang['contact_service'] ?></label>
                        <div class="input-wrap select-wrap">
                            <i class="fas fa-list"></i>
                            <select id="service" name="service">
                                <option value=""><?= $lang['service_other'] ?></option>
                                <option value="maritime"><?= $lang['service_maritime'] ?></option>
                                <option value="road"><?= $lang['service_road'] ?></option>
                                <option value="air"><?= $lang['service_air'] ?></option>
                                <option value="logistics"><?= $lang['service_logistics'] ?></option>
                                <option value="customs"><?= $lang['service_customs'] ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message"><?= $lang['contact_message'] ?> <span class="req">*</span></label>
                        <textarea id="message" name="message" rows="4" placeholder="Describe your shipment or inquiry..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" id="submitBtn">
                        <span class="btn-text"><i class="fas fa-paper-plane"></i> <?= $lang['contact_submit'] ?></span>
                        <span class="btn-loading" hidden><i class="fas fa-spinner fa-spin"></i> Sending…</span>
                    </button>
                </form>
            </div>

            <div class="contact-info-wrap reveal reveal-delay">
                <div class="info-panel">
                    <div class="info-panel-header">
                        <i class="fas fa-headset"></i>
                        <h3>Get In Touch</h3>
                    </div>
                    <div class="info-items">
                        <div class="info-item">
                            <div class="info-ico"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="info-txt">
                                <strong>Address</strong>
                                <span><?= htmlspecialchars($site['address']) ?></span>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-ico"><i class="fas fa-phone"></i></div>
                            <div class="info-txt">
                                <strong>Phone</strong>
                                <a href="tel:<?= preg_replace('/\s+/','',$site['phone']) ?>"><?= htmlspecialchars($site['phone']) ?></a>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-ico"><i class="fas fa-envelope"></i></div>
                            <div class="info-txt">
                                <strong>Email</strong>
                                <a href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= htmlspecialchars($site['email']) ?></a>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-ico"><i class="fas fa-clock"></i></div>
                            <div class="info-txt">
                                <strong>Office Hours</strong>
                                <span><?= htmlspecialchars($site['hours_weekday']) ?></span>
                                <span><?= htmlspecialchars($site['hours_saturday']) ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="info-socials">
                        <a href="<?= $site['social']['linkedin'] ?>"  aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                        <a href="<?= $site['social']['facebook'] ?>"  aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="<?= $site['social']['instagram'] ?>" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a href="<?= $site['social']['twitter'] ?>"   aria-label="Twitter/X"><i class="fab fa-x-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════ FOOTER ══════════════ -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-brand">
                <a href="#home" class="logo logo-light">
                    <span class="logo-icon"><i class="fas fa-ship"></i></span>
                    <span class="logo-text"><?= $site['short_name'] ?><em>.</em></span>
                </a>
                <p><?= $lang['footer_about_text'] ?></p>
                <div class="footer-social">
                    <a href="<?= $site['social']['linkedin'] ?>"  aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="<?= $site['social']['facebook'] ?>"  aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="<?= $site['social']['instagram'] ?>" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="<?= $site['social']['twitter'] ?>"   aria-label="Twitter/X"><i class="fab fa-x-twitter"></i></a>
                </div>
            </div>
            <div class="footer-col">
                <h4><?= $lang['footer_quick_links'] ?></h4>
                <ul>
                    <li><a href="#home"><?= $lang['nav_home'] ?></a></li>
                    <li><a href="#about"><?= $lang['nav_about'] ?></a></li>
                    <li><a href="#activities"><?= $lang['nav_activities'] ?></a></li>
                    <li><a href="#network"><?= $lang['nav_network'] ?></a></li>
                    <li><a href="#contact"><?= $lang['nav_contact'] ?></a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4><?= $lang['footer_services'] ?></h4>
                <ul>
                    <?php foreach ($site['services'] as $svc): ?>
                        <li><a href="#activities"><?= $svc['title'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Contact</h4>
                <ul class="footer-contact-list">
                    <li><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($site['address']) ?></li>
                    <li><i class="fas fa-phone"></i> <a href="tel:<?= preg_replace('/\s+/','',$site['phone']) ?>"><?= htmlspecialchars($site['phone']) ?></a></li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:<?= htmlspecialchars($site['email']) ?>"><?= htmlspecialchars($site['email']) ?></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($site['name']) ?>. <?= $lang['footer_rights'] ?></p>
            <div class="footer-badges">
                <span><i class="fas fa-shield-halved"></i> Secure</span>
                <span><i class="fas fa-lock"></i> Licensed</span>
                <span><i class="fas fa-globe"></i> FIATA Member</span>
            </div>
        </div>
    </div>
</footer>

<!-- WhatsApp Float -->
<a href="https://wa.me/<?= preg_replace('/[^0-9]/','',$site['whatsapp']) ?>"
   class="whatsapp-fab" target="_blank" rel="noopener" aria-label="Chat on WhatsApp">
    <i class="fab fa-whatsapp"></i>
    <span class="fab-label">Chat with us</span>
</a>

<!-- Back to Top -->
<button class="back-to-top" id="backToTop" aria-label="Back to top">
    <i class="fas fa-chevron-up"></i>
</button>

<script src="js/script.js"></script>
</body>
</html>