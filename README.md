# SingBD Website - PHP Migration

## Overview

This project represents the successful migration of the SingBD apparel sourcing website from a Next.js/TypeScript stack to a PHP-based solution. The migration maintains all original functionality while providing a foundation for future WordPress CMS integration.

## 🎯 Migration Status

### ✅ Completed Features
- **Homepage**: Complete with hero section, interactive world map, partners showcase, about section, services, product categories, and contact form
- **Navigation**: Responsive header with mobile menu
- **Contact Form**: Functional form with database integration and email notifications
- **Legal Pages**: Terms of Service, Privacy Policy, Cookie Policy, and GDPR Compliance
- **Responsive Design**: Mobile-first approach with modern CSS
- **Database**: MySQL database with contact form storage
- **JavaScript**: Interactive features and form handling

### 🔄 In Progress
- WordPress CMS integration (Phase 2)
- Advanced admin panel
- Content management system

## 🚀 Quick Start

### Prerequisites
- XAMPP (or similar local server stack)
- PHP 7.4+
- MySQL 5.7+
- Modern web browser

### Installation

1. **Clone the repository**
   ```bash
   git clone [repository-url]
   cd singbd-static-site
   ```

2. **Set up the database**
   ```bash
   # Start XAMPP and ensure MySQL is running
   # Open phpMyAdmin and create a new database
   # Import the database_setup.sql file
   ```

3. **Configure database connection**
   ```bash
   # Edit process_contact.php with your database credentials
   $db_host = 'localhost';
   $db_name = 'singbd_website';
   $db_user = 'root';
   $db_pass = '';
   ```

4. **Start the server**
   ```bash
   # Place the project in your XAMPP htdocs folder
   # Access via: http://localhost/singbd-static-site
   ```

## 📁 Project Structure

```
singbd-static-site/
├── css/
│   └── style.css              # Main stylesheet with CSS variables
├── js/
│   └── main.js                # JavaScript functionality
├── images/                    # All website images and assets
├── partials/
│   ├── _header.php           # Header template
│   └── _footer.php           # Footer template
├── index.php                 # Homepage
├── about.php                 # About page
├── contact.php               # Contact page
├── products.php              # Products page
├── sustainability.php        # Sustainability page
├── terms-of-service.php      # Terms of Service
├── privacy-policy.php        # Privacy Policy
├── cookie-policy.php         # Cookie Policy
├── gdpr.php                  # GDPR Compliance
├── process_contact.php       # Contact form processing
├── database_setup.sql        # Database schema
└── README.md                 # This file
```

## 🎨 Design System

### Color Palette
- **Primary**: #409ABF (Blue)
- **Secondary**: #A43C45 (Red)
- **Neutral**: #69724C (Green)
- **Text**: #051821 (Dark)
- **Background**: #FFFFFF (White)

### Typography
- **Primary Font**: Montserrat (Headings)
- **Secondary Font**: Open Sans (Body text)

### CSS Variables
The project uses CSS custom properties for consistent theming:
```css
:root {
    --primary-color: #409ABF;
    --secondary-color: #A43C45;
    --neutral-color: #69724C;
    --body-text-color: #051821;
    --background-color: #FFFFFF;
    /* ... more variables */
}
```

## 🔧 Key Features

### Interactive World Map
- Animated location points for Singapore, Bangladesh, and Vietnam
- Hover effects and click interactions
- Responsive design

### Partners Showcase
- Horizontal scrolling animation
- Grayscale to color hover effects
- Responsive grid layout

### Contact Form
- Client-side validation
- Server-side processing
- Database storage
- Email notifications
- Auto-reply functionality

### Responsive Design
- Mobile-first approach
- Breakpoints: 480px, 768px, 1024px
- Flexible grid systems
- Touch-friendly interactions

## 📊 Database Schema

### Contact Submissions Table
```sql
CREATE TABLE contact_submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    company VARCHAR(255),
    message TEXT NOT NULL,
    ip_address VARCHAR(45),
    user_agent TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Additional Tables (for future CMS)
- `admin_users` - User management
- `pages` - Content pages
- `blog_posts` - Blog functionality
- `settings` - Site configuration

## 🔒 Security Features

- **Input Sanitization**: All form inputs are sanitized
- **Prepared Statements**: SQL injection prevention
- **CSRF Protection**: Ready for implementation
- **Email Validation**: Server-side email verification
- **Rate Limiting**: Form submission protection

## 📱 Browser Support

- Chrome 90+
- Firefox 88+
- Safari 14+
- Edge 90+
- Mobile browsers (iOS Safari, Chrome Mobile)

## 🚀 Performance Optimizations

- **CSS Optimization**: Minified and organized styles
- **JavaScript**: Efficient event handling and animations
- **Images**: Optimized and responsive
- **Caching**: Browser caching headers
- **Lazy Loading**: Image lazy loading implementation

## 🔄 Migration from Next.js

### What Was Migrated
1. **Design System**: Complete visual design and branding
2. **Content**: All text, images, and media assets
3. **Functionality**: Interactive features and form handling
4. **Responsive Design**: Mobile-first approach maintained
5. **SEO**: Meta tags and structured data

### Key Differences
- **Server-Side**: PHP instead of Next.js API routes
- **Database**: MySQL instead of PostgreSQL
- **Styling**: CSS variables instead of Tailwind CSS
- **JavaScript**: Vanilla JS instead of React components

## 📈 Future Enhancements

### Phase 2: WordPress Integration
- [ ] Custom WordPress theme development
- [ ] Content management system
- [ ] Admin panel with user roles
- [ ] Blog functionality
- [ ] SEO optimization plugins

### Phase 3: Advanced Features
- [ ] Multi-language support
- [ ] E-commerce integration
- [ ] Advanced analytics
- [ ] API development
- [ ] Mobile app companion

## 🛠️ Development

### Local Development
1. Use XAMPP for local development
2. Enable error reporting in development
3. Use browser developer tools for debugging
4. Test across different devices and browsers

### Production Deployment
1. Configure production database
2. Set up SSL certificate
3. Configure email settings
4. Enable caching and optimization
5. Set up monitoring and backups

## 📞 Support

For technical support or questions about the migration:
- **Email**: dev@singbd.com
- **Documentation**: See project documentation files
- **Issues**: Create an issue in the repository

## 📄 License

This project is proprietary to SingBD. All rights reserved.

## 🙏 Acknowledgments

- Original Next.js design and development team
- PHP and web development community
- Open source libraries and tools used in this project

---

**Last Updated**: <?php echo date('F j, Y'); ?>
**Version**: 1.0.0
**Status**: Phase 1 Complete - Ready for WordPress Integration

