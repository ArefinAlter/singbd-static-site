# Frontend Guidelines
## SingBD Apparel Sourcing Website - PHP/WordPress Migration

### Overview
This document outlines the frontend design and development guidelines for the SingBD website migration. These guidelines ensure consistency, accessibility, and professional appearance across all pages and components.

### 1. Color Palette

#### Primary Colors
- **Primary Blue:** #2563EB (Used for main CTAs, links, and highlights)
- **Secondary Blue:** #1E40AF (Used for hover states and secondary elements)
- **Accent Blue:** #3B82F6 (Used for subtle highlights and backgrounds)

#### Neutral Colors
- **Pure White:** #FFFFFF (Background color)
- **Light Gray:** #F8FAFC (Secondary background)
- **Medium Gray:** #64748B (Body text)
- **Dark Gray:** #1E293B (Headings and important text)
- **Black:** #000000 (Logo and critical elements)

#### Status Colors
- **Success Green:** #10B981 (Success messages, confirmations)
- **Warning Orange:** #F59E0B (Warning messages, alerts)
- **Error Red:** #EF4444 (Error messages, form validation)
- **Info Blue:** #3B82F6 (Information messages)

### 2. Typography

#### Font Families
- **Primary Font:** Montserrat (Headings, titles, navigation)
- **Secondary Font:** Open Sans (Body text, paragraphs, descriptions)

#### Font Weights
- **Montserrat:** 400 (Regular), 500 (Medium), 600 (Semi-bold), 700 (Bold)
- **Open Sans:** 300 (Light), 400 (Regular), 500 (Medium), 600 (Semi-bold)

#### Typography Scale
- **H1:** 48px/3rem (Montserrat, Bold)
- **H2:** 36px/2.25rem (Montserrat, Semi-bold)
- **H3:** 30px/1.875rem (Montserrat, Medium)
- **H4:** 24px/1.5rem (Montserrat, Medium)
- **H5:** 20px/1.25rem (Montserrat, Medium)
- **H6:** 18px/1.125rem (Montserrat, Medium)
- **Body Large:** 18px/1.125rem (Open Sans, Regular)
- **Body:** 16px/1rem (Open Sans, Regular)
- **Body Small:** 14px/0.875rem (Open Sans, Regular)
- **Caption:** 12px/0.75rem (Open Sans, Regular)

### 3. Layout & Spacing

#### Container System
- **Max Width:** 1200px for desktop content
- **Padding:** 20px on mobile, 40px on tablet, 60px on desktop
- **Grid System:** 12-column responsive grid

#### Spacing Scale
- **XS:** 4px/0.25rem
- **S:** 8px/0.5rem
- **M:** 16px/1rem
- **L:** 24px/1.5rem
- **XL:** 32px/2rem
- **XXL:** 48px/3rem
- **XXXL:** 64px/4rem

#### Section Spacing
- **Section Padding:** 80px top/bottom on desktop, 60px on tablet, 40px on mobile
- **Component Spacing:** 32px between major components
- **Element Spacing:** 16px between related elements

### 4. Component Guidelines

#### Buttons
- **Primary Button:** Blue background (#2563EB), white text, rounded corners (8px)
- **Secondary Button:** White background, blue border and text, rounded corners (8px)
- **Button Sizes:** Small (32px), Medium (40px), Large (48px)
- **Hover Effects:** Subtle opacity change or color shift

#### Forms
- **Input Fields:** Light gray background (#F8FAFC), dark gray text, rounded corners (6px)
- **Focus States:** Blue border (#2563EB) with subtle shadow
- **Error States:** Red border (#EF4444) with error message
- **Success States:** Green border (#10B981) with success message

#### Navigation
- **Main Nav:** Horizontal layout on desktop, hamburger menu on mobile
- **Active States:** Blue underline or background highlight
- **Hover Effects:** Subtle color change or underline
- **Mobile Menu:** Full-screen overlay with large touch targets

### 5. Visual Effects

#### Glassmorphism
- **Background:** Semi-transparent white/light background
- **Blur Effect:** 10-20px backdrop blur
- **Border:** Subtle white border with low opacity
- **Shadow:** Soft drop shadow for depth
- **Usage:** Cards, modals, navigation overlays

#### Shadows
- **Small:** 0 1px 3px rgba(0,0,0,0.1)
- **Medium:** 0 4px 6px rgba(0,0,0,0.1)
- **Large:** 0 10px 15px rgba(0,0,0,0.1)
- **Extra Large:** 0 20px 25px rgba(0,0,0,0.1)

#### Animations
- **Duration:** 200-300ms for micro-interactions
- **Easing:** Ease-out for natural feel
- **Hover Transitions:** Smooth color and size changes
- **Page Transitions:** Fade in/out effects

### 6. Responsive Design

#### Breakpoints
- **Mobile:** 320px - 767px
- **Tablet:** 768px - 1023px
- **Desktop:** 1024px - 1439px
- **Large Desktop:** 1440px+

#### Mobile-First Approach
- Start with mobile design and scale up
- Touch-friendly button sizes (minimum 44px)
- Simplified navigation for mobile
- Optimized images for mobile bandwidth

#### Responsive Images
- Use srcset for different screen sizes
- WebP format with fallback to JPEG/PNG
- Lazy loading for performance
- Proper alt text for accessibility

### 7. Accessibility (WCAG 2.1 AA)

#### Color Contrast
- **Normal Text:** Minimum 4.5:1 contrast ratio
- **Large Text:** Minimum 3:1 contrast ratio
- **UI Components:** Minimum 3:1 contrast ratio

#### Keyboard Navigation
- All interactive elements must be keyboard accessible
- Visible focus indicators
- Logical tab order
- Skip navigation links

#### Screen Reader Support
- Semantic HTML structure
- Proper heading hierarchy (H1-H6)
- Alt text for images
- ARIA labels where needed
- Form labels and descriptions

### 8. Page-Specific Guidelines

#### Homepage
- **Hero Section:** Full-width background image with overlay text
- **H1:** Company tagline or main value proposition
- **H2:** Section headings for services, partners, etc.
- **CTA Buttons:** Prominent placement in hero and key sections

#### About Page
- **H1:** "About SingBD" or company name
- **H2:** "Our Story", "Our Mission", "Our Team"
- **Body Text:** Open Sans, 16px, line-height 1.6

#### Services Page
- **H1:** "Our Services"
- **H2:** Individual service names
- **Service Cards:** Glassmorphism effect with icons
- **Pricing:** Clear, easy-to-read format

#### Contact Page
- **H1:** "Contact Us"
- **Form:** Clean, simple layout with clear labels
- **Contact Info:** Prominent display of phone, email, address
- **Map:** Interactive Google Maps integration

### 9. Performance Guidelines

#### Image Optimization
- Compress all images (JPEG quality 80-85)
- Use appropriate formats (WebP, JPEG, PNG)
- Implement lazy loading
- Provide multiple sizes for responsive design

#### CSS/JS Optimization
- Minify CSS and JavaScript files
- Combine multiple files where possible
- Use critical CSS for above-the-fold content
- Defer non-critical JavaScript

#### Loading Performance
- Target < 3 seconds load time
- Optimize for Core Web Vitals
- Use browser caching
- Implement progressive enhancement

### 10. Browser Support

#### Supported Browsers
- **Chrome:** Latest 2 versions
- **Firefox:** Latest 2 versions
- **Safari:** Latest 2 versions
- **Edge:** Latest 2 versions
- **Mobile Browsers:** iOS Safari, Chrome Mobile

#### Progressive Enhancement
- Basic functionality works without JavaScript
- Enhanced features with JavaScript enabled
- Graceful degradation for older browsers
- Feature detection for modern CSS/JS features

### 11. Content Guidelines

#### Text Content
- Use clear, concise language
- Avoid jargon and technical terms
- Write for target audience (apparel industry professionals)
- Include relevant keywords for SEO

#### Image Content
- High-quality, professional images
- Consistent aspect ratios
- Relevant to apparel sourcing industry
- Optimized file sizes

#### Call-to-Actions
- Clear, action-oriented text
- Prominent placement
- Consistent styling across pages
- Mobile-friendly touch targets

### 12. Implementation Notes

#### CSS Organization
- Use external CSS files only
- Organize by component type
- Use BEM methodology for class naming
- Maintain consistent naming conventions

#### JavaScript Guidelines
- Use external JavaScript files only
- Progressive enhancement approach
- Error handling for all functions
- Performance-conscious code

#### PHP Includes
- Use PHP includes for header and footer
- Maintain consistent structure across pages
- Pass page-specific data to includes
- Keep includes lightweight and focused
