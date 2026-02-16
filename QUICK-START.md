# 🚀 QUICK START GUIDE - Med Shipping Solutions Website

## 📦 What's Included

Your complete website package includes:
- ✅ Multi-language website (FR, EN, AR)
- ✅ Modern responsive design
- ✅ Contact form with validation
- ✅ SEO optimization
- ✅ All source files

## 🎯 3-Step Setup

### Step 1: Upload Files
Upload all files to your web hosting via FTP or cPanel File Manager:
- Upload to public_html (or www, htdocs depending on your host)
- Keep the folder structure intact

### Step 2: Configure Email
Open `config.php` and update:
```php
define('ADMIN_EMAIL', 'your-email@company.com');
```

### Step 3: Test
Visit your domain - your website is live! ✨

## 🔧 Important Configurations

### 1. Change Contact Email
File: `config.php`
Line: `define('ADMIN_EMAIL', 'your-email@company.com');`

### 2. Update Contact Information
File: `config.php`
Update all contact details:
- Phone number
- Address
- Social media links

### 3. Add Your Logo (Optional)
- Place logo image in `/images/` folder
- Update `index.php` line ~67 to reference your logo

### 4. Customize Colors (Optional)
File: `css/style.css`
Lines 1-10 - Update CSS variables

## 📱 Test Checklist

Before going live, test:
- ✅ View website on mobile phone
- ✅ Switch between FR, EN, AR languages
- ✅ Submit contact form (check if email arrives)
- ✅ Click all navigation links
- ✅ Test on different browsers

## 🌐 For Web Developers

### Requirements
- PHP 7.4+
- Apache/Nginx
- Email server (SMTP)

### Optional Enhancements
1. Add SSL certificate (recommended)
2. Enable HTTPS in `.htaccess`
3. Add Google Analytics tracking
4. Compress images before uploading
5. Set up custom email (recommended)

### File Structure
```
📁 Your Website
├── index.php (main file)
├── contact-handler.php (form processing)
├── config.php (easy configuration)
├── .htaccess (server config)
├── 📁 css/ (styles)
├── 📁 js/ (scripts)
├── 📁 languages/ (translations)
└── 📁 images/ (your images)
```

## 🆘 Troubleshooting

### Contact Form Not Sending
1. Check email in `config.php`
2. Verify PHP mail() is enabled
3. Check spam folder
4. Consider using SMTP (ask your host)

### Website Not Loading
1. Check PHP version (minimum 7.4)
2. Verify file permissions
3. Check error logs in cPanel

### Language Not Switching
1. Check if sessions are enabled
2. Clear browser cache
3. Test in incognito mode

## 📧 Support

For questions or issues:
- Email: contact@medshippingsolutions.com
- Check README.md for detailed documentation

## 🎨 Customization Tips

### Add New Section
Copy any existing section in `index.php` and modify the content

### Change Color Scheme
Edit variables in `css/style.css` (top of file)

### Add Services
Add new cards in the Activities section

### Update Text
All translations are in `languages/*.php` files

## 📈 SEO Checklist

After launch:
- [ ] Submit to Google Search Console
- [ ] Submit sitemap
- [ ] Add Google Analytics
- [ ] Verify mobile-friendly
- [ ] Check page speed
- [ ] Add structured data

## 🎉 You're Ready!

Your professional website is ready to attract clients!

Key Features:
✨ Mobile-responsive design
🌍 3 languages (FR, EN, AR)
📧 Quote request form
🎨 Modern UI with your brand colors
🚀 SEO optimized
⚡ Fast loading

---
© 2025 Med Shipping Solutions
