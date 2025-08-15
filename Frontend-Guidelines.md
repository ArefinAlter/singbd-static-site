# Frontend Guidelines
## SingBD Apparel Sourcing Website - PHP/WordPress Migration

### Overview
This document outlines the frontend design and development guidelines for the SingBD website migration. These guidelines ensure consistency, accessibility, and professional appearance across all pages and components.

### 1. Color Palette

#### Primary Colors
- **Primary Color:** #409ABF (Used for headings and primary buttons)
- **Secondary Color:** #A43C45 (Used for accents and highlights)

#### Neutral Colors
- **Neutral 1:** #69724C (Used for dividers)
- **Body Text:** #051821 (Used for copy text with 5% transparency)
- **Pure White:** #FFFFFF (Background color)

#### Status Colors
- **Success Green:** #10B981 (Success messages, confirmations)
- **Warning Orange:** #F59E0B (Warning messages, alerts)
- **Error Red:** #EF4444 (Error messages, form validation)
- **Info Blue:** #3B82F6 (Information messages)

### 2. Typography

#### Font Families
- **Primary Typeface:** Montserrat (Headings, titles, navigation)
- **Secondary Typeface:** Open Sans (Body text, paragraphs, descriptions)

#### Font Weights
- **Montserrat:** 400 (Regular), 500 (Medium), 600 (Semi-bold), 700 (Bold)
- **Open Sans:** 300 (Light), 400 (Regular), 500 (Medium), 600 (Semi-bold)

#### Typography Scale
- **H1:** 48px/3rem (Montserrat, Bold)
- **H2:** 36px/2.25rem (Montserrat, Semi-bold, Primary Color #409ABF)
- **H3:** 30px/1.875rem (Montserrat, Medium)
- **H4:** 24px/1.5rem (Montserrat, Medium)
- **H5:** 20px/1.25rem (Montserrat, Medium)
- **H6:** 18px/1.125rem (Montserrat, Medium)
- **Body Large:** 18px/1.125rem (Open Sans, Regular, Body Text #051821)
- **Body:** 16px/1rem (Open Sans, Regular, Body Text #051821)
- **Body Small:** 14px/0.875rem (Open Sans, Regular, Body Text #051821)
- **Caption:** 12px/0.75rem (Open Sans, Regular, Body Text #051821)

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
- **Primary Button:** Primary color background (#409ABF), white text, rounded corners (8px)
- **Secondary Button:** White background, primary color border and text (#409ABF), rounded corners (8px)
- **Button Sizes:** Small (32px), Medium (40px), Large (48px)
- **Hover Effects:** Subtle opacity change or color shift

#### Forms
- **Input Fields:** Light gray background (#F8FAFC), body text color (#051821), rounded corners (6px)
- **Focus States:** Primary color border (#409ABF) with subtle shadow
- **Error States:** Red border (#EF4444) with error message
- **Success States:** Green border (#10B981) with success message

#### Navigation
- **Main Nav:** Horizontal layout on desktop, hamburger menu on mobile
- **Active States:** Primary color underline or background highlight (#409ABF)
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

#### General Guidelines (Site-wide)
1. **Top-Level Pages:** Home Page, Products Page, Contact Us Page, About Us, and Sustainability
2. **Statutory Pages:** Privacy Policy, Terms of Service, Cookie Policy, and GDPR (maintain without modifications)
3. **Subsection Titles:** Apply Primary Typeface using H2 tag with Primary Color (#409ABF)
4. **Body and Long-Form Text:** Use Secondary Typeface with Body Text color (#051821)
5. **Background Color:** Keep white across the website, except where specific sections have designated alternative backgrounds
6. **Glassmorphism Elements:** Preserve existing glassmorphism effect with text color and font following specifications
7. **Main Menu Placement:** Top horizontal bar, sticky
8. **Mobile Menu:** As implemented in Vercel version
9. **SEO:** Meta tags, structured data, H1/H2 hierarchy

#### Homepage
- **Hero Section:** Keep as is with immersive video background
- **Clients List:** Follow general guidelines for background and text color
- **About Us:** Two columns layout with sliding pictures on left (4 images), maintain Vercel design iconography
- **Services (What We Do):** Follow https://www.seditexvn.com/#services & Synergy Demo with changing tabs
- **Product Categories:** 
  - Main categories: Woven Tops, Coats & Jackets, Sportswear, Woven Bottoms, Knitwear, Homeware, Handicrafts, Accessories
  - Layout: Left column for categories, right side for changing product display
  - Button: "View All Products" at bottom
- **Team:** Follow https://www.seditexvn.com/#team design
- **Sustainability:** To be decided later
- **Contact Form:** Keep as is, follow general guidelines for color and background

#### Products Page
- **Repository Page:** Follow https://singbddraft.tasneemzaman.info/products/ design
- **Breadcrumb:** Include at top of page
- **Individual Product Template:** Show similar products from same categories
- **Category Cards:** Follow Vercel version individual card design

#### Contact Us Page
- **Contact Form:** Duplicate from Home Page
- **WhatsApp Popover:** Implement site-wide for direct communication

#### About Us & Sustainability Page
- **Reference:** https://singbddraft.tasneemzaman.info/values-sustainability/
- **Note:** Keep development for later stage, not finalized yet

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
