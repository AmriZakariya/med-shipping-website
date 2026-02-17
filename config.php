<?php
/**
 * ============================================================
 *  Med Shipping Solutions — Site Configuration
 *  Edit this file to update content across the entire website
 * ============================================================
 */

// ─── COMPANY IDENTITY ─────────────────────────────────────
define('COMPANY_NAME',    'Med Shipping Solutions');
define('COMPANY_SHORT',   'M2S');
define('COMPANY_TAGLINE', 'Transport & Logistique');

// ─── CONTACT DETAILS ──────────────────────────────────────
define('CONTACT_EMAIL',   'contact@medshippingsolutions.com');
define('CONTACT_PHONE',   '+212 XXX-XXXXXX');
define('CONTACT_ADDRESS', 'Casablanca, Morocco');
define('CONTACT_HOURS_WEEK', 'Lun - Ven : 8h00 - 18h00');
define('CONTACT_HOURS_SAT',  'Sam : 9h00 - 13h00');

// ─── SOCIAL MEDIA ──────────────────────────────────────────
define('SOCIAL_FACEBOOK',  '#');
define('SOCIAL_LINKEDIN',  '#');
define('SOCIAL_INSTAGRAM', '#');
define('SOCIAL_TWITTER',   '#');
define('SOCIAL_WHATSAPP',  '#');   // WhatsApp Business link

// ─── STATS (Network Section) ──────────────────────────────
define('STAT_COUNTRIES', '50');
define('STAT_PARTNERS',  '200');
define('STAT_ROUTES',    '100');
define('STAT_YEARS',     '15');

// ─── EMAIL (Contact Form) ─────────────────────────────────
define('ADMIN_EMAIL',       'contact@medshippingsolutions.com');
define('MAIL_FROM_NAME',    'Med Shipping Solutions Website');

// ─── SEO ──────────────────────────────────────────────────
define('META_DESCRIPTION', 'Med Shipping Solutions — Transport maritime, routier et aérien. Solutions logistiques complètes depuis le Maroc.');
define('META_KEYWORDS',    'transport, logistique, shipping, maritime, routier, aérien, Maroc, Casablanca, freight, cargo, dédouanement, M2S');
define('SITE_URL',         'https://medshippingsolutions.com');

// ─── GOOGLE ANALYTICS ─────────────────────────────────────
define('GA_TRACKING_ID', '');   // e.g. 'G-XXXXXXXXXX'

// ─── REFERENCE CLIENTS (add/remove as needed) ─────────────
$REFERENCES = [
    ['icon' => 'fa-industry',    'label_key' => 'ref_industry'],
    ['icon' => 'fa-store',       'label_key' => 'ref_retail'],
    ['icon' => 'fa-hard-hat',    'label_key' => 'ref_construction'],
    ['icon' => 'fa-hospital',    'label_key' => 'ref_health'],
    ['icon' => 'fa-seedling',    'label_key' => 'ref_agri'],
    ['icon' => 'fa-microchip',   'label_key' => 'ref_tech'],
];

// ─── ACTIVITIES (icon + translation key) ──────────────────
$ACTIVITIES = [
    ['icon' => 'fa-ship',          'key' => 'act_maritime'],
    ['icon' => 'fa-truck',         'key' => 'act_road'],
    ['icon' => 'fa-plane-departure','key' => 'act_air'],
    ['icon' => 'fa-warehouse',     'key' => 'act_warehouse'],
    ['icon' => 'fa-file-contract', 'key' => 'act_customs'],
    ['icon' => 'fa-handshake',     'key' => 'act_consulting'],
];
