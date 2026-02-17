# Med Shipping Solutions — Website

## File Structure
```
/
├── index.php              ← Main website (PHP)
├── config.php             ← ⭐ Edit here to update all content
├── contact-handler.php    ← Contact form email handler
├── preview.html           ← Static preview (no PHP needed)
├── css/
│   └── style.css          ← All styles
├── js/
│   └── script.js          ← All JavaScript
├── languages/
│   ├── fr.php             ← French translations
│   ├── en.php             ← English translations
│   └── ar.php             ← Arabic translations
└── README.md
```

## Easy Content Management

### Update Company Info, Stats, Social Links
Edit **`config.php`** — all values are clearly labeled.

### Update Page Text / Translations
Edit the appropriate file in **`languages/`** — change only the VALUES on the right side of each line.

### Add/Remove Services (Activities)
In `config.php`, edit the `$ACTIVITIES` array:
```php
$ACTIVITIES = [
    ['icon' => 'fa-ship',  'key' => 'act_maritime'],  // FontAwesome icon + language key
    ...
];
```
Then add translations for the new key in each `languages/*.php` file.

### Add/Remove Client Sectors (References)
In `config.php`, edit the `$REFERENCES` array similarly.

## Deployment Requirements
- PHP 7.4+
- `mail()` function enabled (or replace with SMTP library like PHPMailer)
- Rewrite rules optional (clean URLs)

## Email / Contact Form
By default, uses PHP's `mail()`. For production, replace with **PHPMailer + SMTP** for reliable delivery:
```
composer require phpmailer/phpmailer
```

## Languages
Switch language via URL: `?lang=fr` / `?lang=en` / `?lang=ar`
