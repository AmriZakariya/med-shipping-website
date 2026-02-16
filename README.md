# Med Shipping Solutions Website

A modern, professional, and SEO-optimized website for Med Shipping Solutions - Transport & Logistics company.

## Features

✅ **Multi-Language Support** - French, English, and Arabic
✅ **Responsive Design** - Mobile, Tablet, and Desktop optimized
✅ **Modern UI/UX** - Clean and professional design with company colors
✅ **SEO Optimized** - Proper meta tags and semantic HTML
✅ **Contact Form** - Quote request form with validation
✅ **Fast Loading** - Optimized CSS and JavaScript
✅ **Smooth Animations** - Professional transitions and effects

## Sections

1. **Home (Accueil)** - Hero section with call-to-action
2. **About Us (Qui Sommes Nous)** - Company information and mission
3. **Our Activities (Nos Activités)** - Services offered:
   - Maritime Transport
   - Road Transport
   - Air Transport
   - Logistics & Warehousing
   - Customs Clearance
   - Consulting
4. **Our Network (Nos Réseaux)** - International presence
5. **References (Nos Références)** - Client sectors
6. **Contact** - Quote request form and contact information

## Installation

### Requirements
- PHP 7.4 or higher
- Web server (Apache, Nginx, or similar)
- Email server for contact form (or SMTP configuration)

### Steps

1. **Upload Files**
   - Upload all files to your web server
   - Ensure the directory structure is maintained

2. **Configure Email**
   - Open `contact-handler.php`
   - Change line 36: `$to = 'your-email@company.com';`
   - Replace with your actual email address

3. **Configure Web Server**
   - Set `index.php` as the default document
   - Ensure PHP is enabled
   - Enable `.htaccess` if using Apache (optional for clean URLs)

4. **Test the Website**
   - Access the website through your domain
   - Test all sections and navigation
   - Test the contact form
   - Test language switching (FR, EN, AR)

## File Structure

```
med-shipping-website/
│
├── index.php                 # Main website file
├── contact-handler.php       # Form processing
├── README.md                 # This file
│
├── css/
│   └── style.css            # Main stylesheet
│
├── js/
│   └── script.js            # JavaScript functionality
│
├── languages/
│   ├── fr.php               # French translations
│   ├── en.php               # English translations
│   └── ar.php               # Arabic translations
│
└── images/
    └── (place your images here)
```

## Customization

### Adding Your Logo
1. Save your logo as `logo.png` in the `images/` folder
2. Update the logo in `index.php` around line 67

### Changing Colors
Edit `css/style.css` variables at the top:
```css
:root {
    --primary-blue: #2C5F7C;    /* Dark blue */
    --primary-cyan: #4CB5C5;    /* Turquoise */
    /* Add your custom colors */
}
```

### Contact Information
Update contact details in `index.php` around lines 350-380:
- Address
- Phone number
- Email
- Business hours

### Adding Client Logos (References)
1. Add client logos to `images/clients/` folder
2. Update the references section in `index.php`

## SEO Optimization

The website includes:
- Semantic HTML5 markup
- Meta descriptions and keywords
- Open Graph tags for social media
- Proper heading hierarchy
- Alt tags for images (add your images)
- Fast loading times
- Mobile-responsive design

### Recommended SEO Actions:
1. Submit sitemap to Google Search Console
2. Add Google Analytics tracking code
3. Optimize images (compress before uploading)
4. Add structured data (JSON-LD) for local business
5. Create and submit robots.txt

## Language Switching

Users can switch between languages using the buttons in the navigation:
- FR (Français)
- EN (English)
- AR (العربية)

The selected language is stored in the session.

## Contact Form

The contact form includes:
- Name (required)
- Email (required, validated)
- Phone (required)
- Company (optional)
- Service needed (dropdown)
- Message (required)

Form submissions are sent via email to the configured address.

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Security

- Form inputs are sanitized
- Email validation
- Protection against XSS attacks
- Session management for language preference

## Performance

- Optimized CSS and JavaScript
- Lazy loading for animations
- Minimal external dependencies
- CDN for Font Awesome icons

## Support & Maintenance

### Updating Content
All text content is stored in language files (`languages/*.php`), making it easy to update without touching the main code.

### Adding New Services
Add new activity cards in the "Activities Section" of `index.php` following the existing pattern.

## Technical Details

- **PHP Version**: 7.4+
- **CSS**: Custom CSS with CSS Variables
- **JavaScript**: Vanilla JS (no frameworks)
- **Icons**: Font Awesome 6.4.0
- **Fonts**: Google Fonts (Poppins)

## Deployment Checklist

- [ ] Configure email in contact-handler.php
- [ ] Add your logo image
- [ ] Update contact information
- [ ] Test all forms
- [ ] Test on mobile devices
- [ ] Test all languages
- [ ] Add SSL certificate (HTTPS)
- [ ] Submit to search engines
- [ ] Add analytics tracking

## License

© 2025 Med Shipping Solutions. All rights reserved.

## Credits

Designed and developed for Med Shipping Solutions
For support: contact@medshippingsolutions.com
