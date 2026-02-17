<?php
session_start();

// Language handling
$supported_languages = ['fr', 'en', 'ar'];
$default_language = 'fr';

// Get language from URL parameter or session
if (isset($_GET['lang']) && in_array($_GET['lang'], $supported_languages)) {
    $_SESSION['lang'] = $_GET['lang'];
}

$current_lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : $default_language;

// Load language file
$lang = include("languages/{$current_lang}.php");

// Set RTL for Arabic
$is_rtl = ($current_lang === 'ar');
?>
<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>" <?php echo $is_rtl ? 'dir="rtl"' : ''; ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Med Shipping Solutions - Transport et Logistique | Maritime, Routier, Aérien | Solutions logistiques complètes">
    <meta name="keywords" content="transport, logistique, shipping, maritime, routier, aérien, Maroc, freight, cargo, dédouanement">
    <meta name="author" content="Med Shipping Solutions">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Med Shipping Solutions - Transport & Logistique">
    <meta property="og:description" content="Solutions complètes de transport maritime, routier et aérien">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://medshippingsolutions.com">
    
    <title>Med Shipping Solutions - Transport & Logistique | M2S</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body <?php echo $is_rtl ? 'class="rtl"' : ''; ?>>
    
    <!-- Header & Navigation -->
    <header class="header">
        <nav class="navbar">
            <a href="#home" class="logo">
                <span>M2S</span>
            </a>
            
            <ul class="nav-menu">
                <li><a href="#home"><?php echo $lang['nav_home']; ?></a></li>
                <li><a href="#about"><?php echo $lang['nav_about']; ?></a></li>
                <li><a href="#activities"><?php echo $lang['nav_activities']; ?></a></li>
                <li><a href="#network"><?php echo $lang['nav_network']; ?></a></li>
                <li><a href="#references"><?php echo $lang['nav_references']; ?></a></li>
                <li><a href="#contact"><?php echo $lang['nav_contact']; ?></a></li>
                
                <li class="lang-switcher">
                    <a href="?lang=fr" class="lang-btn <?php echo $current_lang === 'fr' ? 'active' : ''; ?>">FR</a>
                    <a href="?lang=en" class="lang-btn <?php echo $current_lang === 'en' ? 'active' : ''; ?>">EN</a>
                    <a href="?lang=ar" class="lang-btn <?php echo $current_lang === 'ar' ? 'active' : ''; ?>">AR</a>
                </li>
            </ul>
            
            <div class="mobile-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1><?php echo $lang['hero_title']; ?></h1>
            <p><?php echo $lang['hero_subtitle']; ?></p>
            <a href="#contact" class="btn-primary"><?php echo $lang['hero_cta']; ?></a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="section-title">
            <h2><?php echo $lang['about_title']; ?></h2>
        </div>
        
        <div class="about-content">
            <div>
                <p class="about-text"><?php echo $lang['about_text']; ?></p>
            </div>
            <div class="about-mission">
                <h3><?php echo $lang['about_mission']; ?></h3>
                <p><?php echo $lang['about_mission_text']; ?></p>
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="section why-choose">
        <div class="section-title">
            <h2><?php echo $lang['why_title']; ?></h2>
        </div>
        
        <div class="why-grid">
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h3><?php echo $lang['why_experience']; ?></h3>
                <p><?php echo $lang['why_experience_text']; ?></p>
            </div>
            
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3><?php echo $lang['why_reliability']; ?></h3>
                <p><?php echo $lang['why_reliability_text']; ?></p>
            </div>
            
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-globe"></i>
                </div>
                <h3><?php echo $lang['why_network']; ?></h3>
                <p><?php echo $lang['why_network_text']; ?></p>
            </div>
            
            <div class="why-card">
                <div class="why-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3><?php echo $lang['why_support']; ?></h3>
                <p><?php echo $lang['why_support_text']; ?></p>
            </div>
        </div>
    </section>

    <!-- Activities Section -->
    <section id="activities" class="section">
        <div class="section-title">
            <h2><?php echo $lang['activities_title']; ?></h2>
        </div>
        
        <div class="activities-grid">
            <div class="activity-card">
                <span class="activity-icon">🚢</span>
                <h3><?php echo $lang['activity_1_title']; ?></h3>
                <p><?php echo $lang['activity_1_desc']; ?></p>
            </div>
            
            <div class="activity-card">
                <span class="activity-icon">🚛</span>
                <h3><?php echo $lang['activity_2_title']; ?></h3>
                <p><?php echo $lang['activity_2_desc']; ?></p>
            </div>
            
            <div class="activity-card">
                <span class="activity-icon">✈️</span>
                <h3><?php echo $lang['activity_3_title']; ?></h3>
                <p><?php echo $lang['activity_3_desc']; ?></p>
            </div>
            
            <div class="activity-card">
                <span class="activity-icon">📦</span>
                <h3><?php echo $lang['activity_4_title']; ?></h3>
                <p><?php echo $lang['activity_4_desc']; ?></p>
            </div>
            
            <div class="activity-card">
                <span class="activity-icon">🛃</span>
                <h3><?php echo $lang['activity_5_title']; ?></h3>
                <p><?php echo $lang['activity_5_desc']; ?></p>
            </div>
            
            <div class="activity-card">
                <span class="activity-icon">💼</span>
                <h3><?php echo $lang['activity_6_title']; ?></h3>
                <p><?php echo $lang['activity_6_desc']; ?></p>
            </div>
        </div>
    </section>

    <!-- Network Section -->
    <section id="network" class="section network-section">
        <div class="section-title">
            <h2><?php echo $lang['network_title']; ?></h2>
            <p><?php echo $lang['network_text']; ?></p>
        </div>
        
        <div class="network-stats">
            <div class="stat-card">
                <span class="stat-number">50</span>
                <p class="stat-label"><?php echo $lang['network_coverage']; ?></p>
            </div>
            
            <div class="stat-card">
                <span class="stat-number">200</span>
                <p class="stat-label"><?php echo $lang['network_partners']; ?></p>
            </div>
            
            <div class="stat-card">
                <span class="stat-number">100</span>
                <p class="stat-label"><?php echo $lang['network_routes']; ?></p>
            </div>
        </div>
    </section>

    <!-- References Section -->
    <section id="references" class="section">
        <div class="section-title">
            <h2><?php echo $lang['references_title']; ?></h2>
            <p><?php echo $lang['references_text']; ?></p>
        </div>
        
        <div class="references-grid">
            <div class="reference-card">
                <i class="fas fa-building" style="font-size: 3rem; color: var(--primary-cyan);"></i>
                <h4>Industrial Partners</h4>
            </div>
            
            <div class="reference-card">
                <i class="fas fa-store" style="font-size: 3rem; color: var(--primary-cyan);"></i>
                <h4>Retail Clients</h4>
            </div>
            
            <div class="reference-card">
                <i class="fas fa-industry" style="font-size: 3rem; color: var(--primary-cyan);"></i>
                <h4>Manufacturing</h4>
            </div>
            
            <div class="reference-card">
                <i class="fas fa-hospital" style="font-size: 3rem; color: var(--primary-cyan);"></i>
                <h4>Healthcare Sector</h4>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section contact-section">
        <div class="section-title">
            <h2><?php echo $lang['contact_title']; ?></h2>
            <p><?php echo $lang['contact_subtitle']; ?></p>
        </div>
        
        <div class="contact-container">
            <div class="contact-form">
                <div id="formAlert" class="alert"></div>
                
                <form id="contactForm" method="POST">
                    <div class="form-group">
                        <label for="name"><?php echo $lang['contact_name']; ?> *</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email"><?php echo $lang['contact_email']; ?> *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone"><?php echo $lang['contact_phone']; ?> *</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="company"><?php echo $lang['contact_company']; ?></label>
                        <input type="text" id="company" name="company">
                    </div>
                    
                    <div class="form-group">
                        <label for="service"><?php echo $lang['contact_service']; ?></label>
                        <select id="service" name="service">
                            <option value=""><?php echo $lang['service_other']; ?></option>
                            <option value="maritime"><?php echo $lang['service_maritime']; ?></option>
                            <option value="road"><?php echo $lang['service_road']; ?></option>
                            <option value="air"><?php echo $lang['service_air']; ?></option>
                            <option value="logistics"><?php echo $lang['service_logistics']; ?></option>
                            <option value="customs"><?php echo $lang['service_customs']; ?></option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message"><?php echo $lang['contact_message']; ?> *</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn"><?php echo $lang['contact_submit']; ?></button>
                </form>
            </div>
            
            <div class="contact-info">
                <h3><?php echo $lang['contact_info']; ?></h3>
                
                <div class="info-item">
                    <i class="fas fa-map-marker-alt info-icon"></i>
                    <div class="info-text">
                        <strong><?php echo $lang['contact_address']; ?>:</strong><br>
                        Casablanca, Morocco
                    </div>
                </div>
                
                <div class="info-item">
                    <i class="fas fa-phone info-icon"></i>
                    <div class="info-text">
                        <strong>Phone:</strong><br>
                        +212 XXX-XXXXXX
                    </div>
                </div>
                
                <div class="info-item">
                    <i class="fas fa-envelope info-icon"></i>
                    <div class="info-text">
                        <strong>Email:</strong><br>
                        contact@medshippingsolutions.com
                    </div>
                </div>
                
                <div class="info-item">
                    <i class="fas fa-clock info-icon"></i>
                    <div class="info-text">
                        <strong>Business Hours:</strong><br>
                        Mon - Fri: 8:00 AM - 6:00 PM<br>
                        Sat: 9:00 AM - 1:00 PM
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h3><?php echo $lang['footer_about']; ?></h3>
                <p><?php echo $lang['footer_about_text']; ?></p>
            </div>
            
            <div class="footer-section">
                <h3><?php echo $lang['footer_quick_links']; ?></h3>
                <ul>
                    <li><a href="#home"><?php echo $lang['nav_home']; ?></a></li>
                    <li><a href="#about"><?php echo $lang['nav_about']; ?></a></li>
                    <li><a href="#activities"><?php echo $lang['nav_activities']; ?></a></li>
                    <li><a href="#contact"><?php echo $lang['nav_contact']; ?></a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3><?php echo $lang['footer_services']; ?></h3>
                <ul>
                    <li><?php echo $lang['service_maritime']; ?></li>
                    <li><?php echo $lang['service_road']; ?></li>
                    <li><?php echo $lang['service_air']; ?></li>
                    <li><?php echo $lang['service_logistics']; ?></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Connect</h3>
                <div style="display: flex; gap: 1rem; font-size: 1.5rem; margin-top: 1rem;">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Med Shipping Solutions. <?php echo $lang['footer_rights']; ?></p>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
</body>
</html>
