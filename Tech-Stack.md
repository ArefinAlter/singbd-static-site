# Tech Stack
## SingBD Apparel Sourcing Website - PHP/WordPress Migration

### Overview
This document outlines the technology stack for the migrated SingBD website, transitioning from Next.js/TypeScript to a PHP-based solution with future WordPress CMS integration.

### Phase 1: Static PHP Site
**Target:** Complete static website with PHP includes for maintainability

#### Core Technologies
- **Server:** Apache HTTP Server
- **Backend Language:** PHP 8.0+
- **Database:** MySQL 8.0+ (for contact form submissions)
- **Frontend:** HTML5, CSS3, JavaScript (ES6+)
- **Styling:** Custom CSS with responsive design principles
- **Build Process:** Manual file management (no build tools required)

#### Development Environment
- **Local Server:** XAMPP (Apache + MySQL + PHP)
- **Code Editor:** VS Code, Sublime Text, or any PHP-capable editor
- **Version Control:** Git
- **File Transfer:** FTP/SFTP for deployment

#### File Structure
```
singbd-static-site/
├── index.php              # Homepage
├── about.php              # About page
├── services.php           # Services page
├── contact.php            # Contact page
├── privacy.php            # Privacy policy
├── terms.php              # Terms of service
├── includes/
│   ├── header.php         # Common header
│   ├── footer.php         # Common footer
│   ├── nav.php            # Navigation menu
│   └── db.php             # Database connection
├── css/
│   ├── main.css           # Main stylesheet
│   ├── responsive.css     # Responsive styles
│   └── components.css     # Component-specific styles
├── js/
│   ├── main.js            # Main JavaScript
│   ├── contact.js         # Contact form handling
│   └── animations.js      # Scroll animations
├── images/                # Static images
├── uploads/               # User-uploaded content (future)
└── admin/                 # Simple admin panel (future)
```

### Phase 2: WordPress CMS Integration
**Target:** Convert static site to custom WordPress theme

#### Additional Technologies
- **CMS:** WordPress 6.0+
- **Theme Development:** Custom WordPress theme
- **Plugin Development:** Custom plugins for specific functionality
- **Database:** WordPress MySQL database structure
- **Admin Interface:** WordPress admin dashboard

#### WordPress Integration Benefits
- **Content Management:** Easy content updates for non-technical users
- **SEO Tools:** Built-in SEO optimization features
- **Plugin Ecosystem:** Access to thousands of plugins
- **User Management:** Role-based access control
- **Media Management:** Built-in image and file management
- **Backup Solutions:** Automated backup plugins
- **Security:** Regular WordPress security updates

### Hosting Requirements

#### cPanel Server Specifications
- **PHP Version:** 8.0 or higher
- **MySQL Version:** 8.0 or higher
- **Apache Version:** 2.4 or higher
- **SSL Certificate:** Required for HTTPS
- **Storage:** Minimum 1GB (depending on media content)
- **Bandwidth:** Adequate for expected traffic

#### Recommended cPanel Features
- **File Manager:** For direct file editing
- **phpMyAdmin:** Database management
- **Cron Jobs:** For automated tasks
- **Backup Tools:** Automated backups
- **Email Accounts:** For contact form notifications
- **Subdomains:** For staging/testing environments

### Development Workflow

#### Phase 1 Workflow
1. **Local Development:** Use XAMPP for local development
2. **Version Control:** Git for code management
3. **Testing:** Manual testing on multiple devices/browsers
4. **Deployment:** FTP/SFTP upload to cPanel server
5. **Content Updates:** Direct file editing or simple admin panel

#### Phase 2 Workflow
1. **Theme Development:** Custom WordPress theme creation
2. **Plugin Development:** Custom plugins for specific features
3. **Content Migration:** Transfer static content to WordPress
4. **Testing:** WordPress-specific testing and optimization
5. **Deployment:** WordPress installation and theme activation

### Performance Considerations

#### Optimization Strategies
- **Image Optimization:** Compress and resize images
- **CSS/JS Minification:** Minimize file sizes
- **Caching:** Browser and server-side caching
- **CDN:** Content delivery network for global performance
- **Database Optimization:** Regular database maintenance

#### Monitoring Tools
- **Google PageSpeed Insights:** Performance monitoring
- **Google Analytics:** Traffic and user behavior
- **Search Console:** SEO performance
- **Uptime Monitoring:** Server availability

### Security Measures

#### Phase 1 Security
- **Input Validation:** Server-side form validation
- **SQL Injection Prevention:** Prepared statements
- **XSS Protection:** Output sanitization
- **HTTPS:** SSL certificate implementation
- **File Permissions:** Proper file and directory permissions

#### Phase 2 Security
- **WordPress Security:** Regular updates and security plugins
- **User Authentication:** Strong password policies
- **Backup Security:** Encrypted backups
- **Plugin Security:** Only trusted plugins
- **Database Security:** Regular security audits

### Migration Timeline

#### Phase 1 (Weeks 1-4)
- Week 1: Project setup and basic structure
- Week 2: Core pages and styling
- Week 3: Contact form and database integration
- Week 4: Testing, optimization, and deployment

#### Phase 2 (Weeks 5-8)
- Week 5: WordPress theme development
- Week 6: Content migration and customization
- Week 7: Plugin development and integration
- Week 8: Final testing and WordPress deployment

### Success Metrics
- **Performance:** 90+ PageSpeed score
- **SEO:** Improved search engine rankings
- **User Experience:** Reduced bounce rate
- **Content Management:** Faster content updates
- **Security:** Zero security incidents
- **Maintenance:** Reduced development overhead
