# Project Rules
## SingBD Apparel Sourcing Website - PHP/WordPress Migration

### Overview
This document establishes the development rules, coding standards, and project guidelines for the SingBD website migration. These rules ensure consistency, maintainability, and quality throughout the development process.

### 1. Code Organization and Structure

#### File Organization Rules
- **All styling must be in external CSS files** - No inline styles or `<style>` tags
- **All interactivity must be in external JS files** - No inline JavaScript or `<script>` tags
- **Use PHP includes for header and footer** - Avoid code repetition across pages
- **Organize files by type and function** - Keep related files together
- **Use descriptive file names** - Make file purposes clear and obvious

#### Directory Structure Standards
```
singbd-static-site/
├── index.php              # Homepage
├── about.php              # About page
├── services.php           # Services page
├── contact.php            # Contact page
├── privacy.php            # Privacy policy
├── terms.php              # Terms of service
├── includes/              # PHP includes and functions
│   ├── header.php         # Common header
│   ├── footer.php         # Common footer
│   ├── nav.php            # Navigation menu
│   ├── db.php             # Database connection
│   └── functions.php      # Common functions
├── css/                   # Stylesheets
│   ├── main.css           # Main stylesheet
│   ├── responsive.css     # Responsive styles
│   ├── components.css     # Component styles
│   └── utilities.css      # Utility classes
├── js/                    # JavaScript files
│   ├── main.js            # Main JavaScript
│   ├── contact.js         # Contact form handling
│   ├── animations.js      # Scroll animations
│   └── validation.js      # Form validation
├── images/                # Static images
├── uploads/               # User-uploaded content (future)
└── admin/                 # Admin panel (future)
```

### 2. PHP Coding Standards

#### General PHP Rules
- **Use PHP 8.0+ features** - Leverage modern PHP capabilities
- **Always use prepared statements** - Prevent SQL injection attacks
- **Validate and sanitize all inputs** - Never trust user data
- **Use meaningful variable names** - Make code self-documenting
- **Add comments for complex logic** - Explain what and why, not how

#### PHP File Structure
```php
<?php
/**
 * File: filename.php
 * Description: Brief description of file purpose
 * Author: Developer name
 * Date: Creation date
 */

// Include required files
require_once 'includes/db.php';
require_once 'includes/functions.php';

// Configuration constants
define('SITE_NAME', 'SingBD');
define('SITE_URL', 'https://singbd.com');

// Functions and classes
function exampleFunction($param) {
    // Function implementation
}

// Main execution logic
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
}
?>
```

#### Database Interaction Rules
- **Always use PDO with prepared statements**
- **Handle database errors gracefully**
- **Log errors but don't expose them to users**
- **Use transactions for multiple related operations**
- **Close database connections properly**

```php
// Good database interaction example
try {
    $pdo = getDBConnection();
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute([':email' => $email]);
    $user = $stmt->fetch();
} catch (PDOException $e) {
    error_log("Database error: " . $e->getMessage());
    return false;
}
```

### 3. CSS Coding Standards

#### CSS Organization Rules
- **Use external CSS files only** - No inline styles
- **Follow BEM methodology** - Block, Element, Modifier naming
- **Use CSS custom properties** - For colors, fonts, and spacing
- **Mobile-first responsive design** - Start with mobile styles
- **Minimize CSS specificity** - Avoid deep nesting

#### CSS File Structure
```css
/* CSS file structure example */

/* ==========================================================================
   CSS Custom Properties (Variables)
   ========================================================================== */
:root {
    /* Colors */
    --primary-color: #2563EB;
    --secondary-color: #1E40AF;
    --text-color: #1E293B;
    --background-color: #FFFFFF;
    
    /* Typography */
    --font-primary: 'Montserrat', sans-serif;
    --font-secondary: 'Open Sans', sans-serif;
    
    /* Spacing */
    --spacing-xs: 0.25rem;
    --spacing-sm: 0.5rem;
    --spacing-md: 1rem;
    --spacing-lg: 1.5rem;
    --spacing-xl: 2rem;
}

/* ==========================================================================
   Base Styles
   ========================================================================== */
* {
    box-sizing: border-box;
}

body {
    font-family: var(--font-secondary);
    line-height: 1.6;
    color: var(--text-color);
}

/* ==========================================================================
   Components
   ========================================================================== */
.button {
    /* Button styles */
}

.button--primary {
    /* Primary button modifier */
}

/* ==========================================================================
   Layout
   ========================================================================== */
.container {
    /* Container styles */
}

/* ==========================================================================
   Responsive Design
   ========================================================================== */
@media (min-width: 768px) {
    /* Tablet styles */
}

@media (min-width: 1024px) {
    /* Desktop styles */
}
```

#### BEM Naming Convention
```css
/* Block */
.card { }

/* Element */
.card__title { }
.card__content { }
.card__footer { }

/* Modifier */
.card--featured { }
.card--small { }
.card__title--large { }
```

### 4. JavaScript Coding Standards

#### JavaScript Organization Rules
- **Use external JavaScript files only** - No inline scripts
- **Use ES6+ features** - Modern JavaScript syntax
- **Implement progressive enhancement** - Work without JavaScript
- **Handle errors gracefully** - Don't break user experience
- **Use meaningful function and variable names**

#### JavaScript File Structure
```javascript
/**
 * File: main.js
 * Description: Main JavaScript functionality
 * Author: Developer name
 * Date: Creation date
 */

// Configuration
const CONFIG = {
    apiUrl: '/api/',
    animationDuration: 300,
    breakpoints: {
        mobile: 768,
        tablet: 1024,
        desktop: 1440
    }
};

// Utility functions
const utils = {
    debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    },
    
    isMobile() {
        return window.innerWidth < CONFIG.breakpoints.mobile;
    }
};

// Main application
class SingBDApp {
    constructor() {
        this.init();
    }
    
    init() {
        this.setupEventListeners();
        this.initializeComponents();
    }
    
    setupEventListeners() {
        // Event listener setup
    }
    
    initializeComponents() {
        // Component initialization
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new SingBDApp();
});
```

#### Form Validation Rules
- **Client-side validation for UX** - Immediate feedback
- **Server-side validation for security** - Never trust client
- **Clear error messages** - Help users understand issues
- **Accessible error handling** - Screen reader friendly

### 5. HTML Structure Standards

#### HTML Rules
- **Use semantic HTML elements** - `<header>`, `<nav>`, `<main>`, `<footer>`
- **Proper heading hierarchy** - H1, H2, H3, etc.
- **Alt text for all images** - Accessibility requirement
- **Form labels and descriptions** - Screen reader friendly
- **Valid HTML5 markup** - Pass W3C validation

#### HTML Template Structure
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title - SingBD</title>
    <meta name="description" content="Page description">
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- Preload critical resources -->
    <link rel="preload" href="fonts/montserrat.woff2" as="font" type="font/woff2" crossorigin>
</head>
<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main-content" class="skip-link">Skip to main content</a>
    
    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    
    <!-- Main content -->
    <main id="main-content">
        <!-- Page content here -->
    </main>
    
    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>
    
    <!-- JavaScript -->
    <script src="js/main.js" defer></script>
</body>
</html>
```

### 6. Security Standards

#### Security Rules
- **Never trust user input** - Always validate and sanitize
- **Use HTTPS in production** - Secure all communications
- **Implement CSRF protection** - Prevent cross-site request forgery
- **Rate limiting for forms** - Prevent spam and abuse
- **Secure file uploads** - Validate file types and sizes
- **Error handling without information disclosure** - Don't expose system details

#### Security Implementation
```php
// CSRF protection example
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        http_response_code(403);
        exit('Invalid request');
    }
}

// Input sanitization example
$userInput = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
if (!filter_var($userInput, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Invalid email format';
}
```

### 7. Performance Standards

#### Performance Rules
- **Optimize images** - Compress and use appropriate formats
- **Minimize HTTP requests** - Combine CSS/JS files
- **Use browser caching** - Set appropriate cache headers
- **Lazy load non-critical resources** - Improve initial load time
- **Minify CSS and JavaScript** - Reduce file sizes

#### Performance Implementation
```php
// Cache headers example
header('Cache-Control: public, max-age=31536000'); // 1 year
header('Expires: ' . gmdate('D, d M Y H:i:s \G\M\T', time() + 31536000));

// Image optimization
function optimizeImage($imagePath) {
    // Image optimization logic
}
```

### 8. Accessibility Standards

#### Accessibility Rules (WCAG 2.1 AA)
- **Keyboard navigation** - All interactive elements accessible
- **Screen reader support** - Proper ARIA labels and semantic HTML
- **Color contrast** - Minimum 4.5:1 for normal text
- **Focus indicators** - Visible focus states
- **Alt text for images** - Descriptive alternative text

#### Accessibility Implementation
```html
<!-- Proper form labeling -->
<label for="email">Email Address</label>
<input type="email" id="email" name="email" required aria-describedby="email-help">
<div id="email-help">Enter your email address to receive updates</div>

<!-- Skip navigation -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<!-- ARIA labels -->
<button aria-label="Close modal" class="modal-close">×</button>
```

### 9. Testing Standards

#### Testing Rules
- **Cross-browser testing** - Chrome, Firefox, Safari, Edge
- **Mobile device testing** - iOS and Android
- **Accessibility testing** - Screen readers and keyboard navigation
- **Performance testing** - Page load times and Core Web Vitals
- **Security testing** - Input validation and SQL injection prevention

#### Testing Checklist
- [ ] All pages load correctly in target browsers
- [ ] Responsive design works on mobile devices
- [ ] Contact form submits and validates properly
- [ ] Navigation works with keyboard only
- [ ] Images have proper alt text
- [ ] Color contrast meets WCAG standards
- [ ] Page load times under 3 seconds
- [ ] No JavaScript errors in console
- [ ] All links work correctly
- [ ] Form validation provides clear feedback

### 10. Documentation Standards

#### Documentation Rules
- **Comment complex code** - Explain business logic
- **Document configuration** - Environment variables and settings
- **Maintain README files** - Setup and deployment instructions
- **Update documentation with changes** - Keep docs current
- **Include code examples** - Show proper usage

#### Documentation Structure
```markdown
# Component Name

## Description
Brief description of the component's purpose.

## Usage
```html
<!-- HTML example -->
```

## CSS Classes
- `.component-name` - Main component class
- `.component-name--modifier` - Modifier class

## JavaScript
```javascript
// JavaScript example
```

## Accessibility
Notes about accessibility considerations.

## Browser Support
List of supported browsers and versions.
```

### 11. Version Control Standards

#### Git Rules
- **Use descriptive commit messages** - Explain what and why
- **Create feature branches** - Don't work directly on main
- **Review code before merging** - Ensure quality and standards
- **Keep commits atomic** - One logical change per commit
- **Update documentation with changes** - Keep docs in sync

#### Commit Message Format
```
type(scope): description

[optional body]

[optional footer]
```

Examples:
```
feat(contact): add form validation and error handling
fix(nav): resolve mobile menu toggle issue
docs(readme): update installation instructions
style(css): improve button hover states
```

### 12. Deployment Standards

#### Deployment Rules
- **Test in staging environment** - Never deploy untested code
- **Backup before deployment** - Always have rollback option
- **Use environment-specific configurations** - Different settings for dev/staging/prod
- **Monitor after deployment** - Check for errors and performance
- **Document deployment procedures** - Standardize the process

#### Environment Configuration
```php
// Environment detection
define('ENVIRONMENT', $_SERVER['HTTP_HOST'] === 'localhost' ? 'development' : 'production');

// Environment-specific settings
if (ENVIRONMENT === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}
```

### 13. Maintenance Standards

#### Maintenance Rules
- **Regular security updates** - Keep dependencies current
- **Performance monitoring** - Track Core Web Vitals
- **Backup verification** - Ensure backups are working
- **Content updates** - Keep information current
- **User feedback collection** - Gather improvement suggestions

#### Maintenance Schedule
- **Daily:** Check error logs and performance
- **Weekly:** Security updates and backups
- **Monthly:** Performance optimization and content review
- **Quarterly:** Full security audit and accessibility review
- **Annually:** Major updates and feature planning

### 14. Quality Assurance

#### QA Rules
- **Code review required** - All changes must be reviewed
- **Automated testing** - Use tools for consistency
- **Manual testing** - Human verification of functionality
- **Performance benchmarks** - Maintain speed standards
- **Accessibility compliance** - Meet WCAG 2.1 AA standards

#### QA Checklist
- [ ] Code follows project standards
- [ ] All tests pass
- [ ] Performance benchmarks met
- [ ] Accessibility requirements satisfied
- [ ] Security measures implemented
- [ ] Documentation updated
- [ ] Cross-browser compatibility verified
- [ ] Mobile responsiveness confirmed

### 15. Communication Standards

#### Communication Rules
- **Regular progress updates** - Keep stakeholders informed
- **Document decisions** - Record important choices and rationale
- **Use project management tools** - Track tasks and issues
- **Escalate problems early** - Don't let issues fester
- **Share knowledge** - Help team members learn and grow

#### Communication Channels
- **Project Management:** GitHub Issues, Trello, or similar
- **Code Discussion:** GitHub Pull Requests and comments
- **Documentation:** Project wiki or README files
- **Meetings:** Regular standups and milestone reviews
- **Emergency:** Direct communication for urgent issues

### Compliance and Enforcement

#### Rule Enforcement
- **Code reviews** - Enforce standards during review process
- **Automated tools** - Use linters and validators
- **Training** - Ensure team understands standards
- **Documentation** - Keep rules accessible and updated
- **Continuous improvement** - Refine rules based on experience

#### Tools and Resources
- **PHP:** PHP_CodeSniffer, PHPStan
- **CSS:** Stylelint, CSS Validator
- **JavaScript:** ESLint, Prettier
- **HTML:** HTML Validator, axe-core
- **Performance:** Lighthouse, PageSpeed Insights
- **Accessibility:** axe-core, WAVE

These rules ensure the SingBD website migration maintains high quality, security, and maintainability throughout the development process and beyond.
