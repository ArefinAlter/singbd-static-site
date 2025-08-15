# Website Flow
## SingBD Apparel Sourcing Website - PHP/WordPress Migration

### 1. User Journey Overview

#### Primary User Personas
1. **Brand Manager (Decision Maker)**
   - Looking for reliable apparel sourcing partner
   - Needs comprehensive service information
   - Wants to see company credibility and track record

2. **Procurement Officer**
   - Focused on pricing and quality standards
   - Needs detailed product specifications
   - Requires clear contact and inquiry process

3. **Business Owner (Small/Medium Business)**
   - Seeking cost-effective sourcing solutions
   - Needs simple, clear information
   - Values personal touch and direct communication

4. **Sourcing Manager (Large Retail)**
   - Requires detailed capabilities and certifications
   - Needs comprehensive product range
   - Values professional presentation and reliability

### 2. Website Navigation Flow

#### Main Navigation Structure
```
Homepage
├── About Us
├── Products
│   ├── Woven Tops
│   ├── Coats & Jackets
│   ├── Sportswear
│   ├── Woven Bottoms
│   ├── Knitwear
│   ├── Homeware
│   ├── Handicrafts
│   └── Accessories
├── Services
├── Contact Us
└── Legal Pages
    ├── Privacy Policy
    ├── Terms of Service
    ├── Cookie Policy
    └── GDPR
```

#### User Flow Patterns
1. **Direct Landing:** Homepage → Contact Form
2. **Research Path:** Homepage → About → Services → Products → Contact
3. **Product Focus:** Homepage → Products → Specific Category → Contact
4. **Service Inquiry:** Homepage → Services → Contact

### 3. Homepage Flow

#### Hero Section
```
User lands on homepage
↓
Immersive video background loads
↓
Hero text and CTA buttons visible
↓
User sees primary value proposition
↓
Calls-to-action: "Get Quote" / "Learn More"
```

#### Content Sections Flow
```
Hero Section
↓
Clients/Partners Showcase
↓
About Us (Two-column with sliding images)
↓
Services Overview (Changing tabs)
↓
Product Categories (Interactive display)
↓
Team Section
↓
Contact Form
↓
Footer with additional information
```

#### Interactive Elements
- **Video Background:** Auto-play with mute option
- **Partner Logos:** Horizontal scrolling carousel
- **About Images:** 4-image sliding gallery
- **Service Tabs:** Click to change service information
- **Product Categories:** Hover to see category details
- **Contact Form:** Inline form with validation

### 4. Products Page Flow

#### Category Repository
```
User clicks "View All Products" or navigates to Products
↓
Products page loads with breadcrumb navigation
↓
Category cards displayed in grid layout
↓
User clicks on specific category
↓
Category page loads with product grid
↓
User can filter/sort products
↓
User clicks on individual product
↓
Product detail page loads
```

#### Individual Product Flow
```
Product detail page loads
↓
Product images and specifications displayed
↓
Similar products shown below
↓
"Contact Us" CTA button
↓
User clicks CTA → Contact form
```

#### Product Categories Flow
1. **Woven Tops**
   - T-shirts, Shirts, Blouses, Polo shirts
   - Material options, sizes, customization

2. **Coats & Jackets**
   - Winter coats, Blazers, Casual jackets
   - Seasonal collections, materials

3. **Sportswear**
   - Athletic wear, Performance clothing
   - Technical specifications, moisture-wicking

4. **Woven Bottoms**
   - Pants, Trousers, Shorts
   - Fit options, materials, styles

5. **Knitwear**
   - Sweaters, Cardigans, Knit tops
   - Yarn types, patterns, seasonal

6. **Homeware**
   - Home textiles, Bedding, Towels
   - Material quality, sizes, designs

7. **Handicrafts**
   - Artisan products, Traditional items
   - Cultural significance, craftsmanship

8. **Accessories**
   - Bags, Hats, Scarves, Jewelry
   - Materials, styles, customization

### 5. Contact Page Flow

#### Contact Form Process
```
User navigates to Contact page
↓
Contact form loads with company information
↓
User fills out form fields:
  - Full Name (required)
  - Email (required)
  - Phone (optional)
  - Company (optional)
  - Subject (optional)
  - Message (required)
↓
Client-side validation occurs
↓
User submits form
↓
Server-side validation
↓
Form data stored in database
↓
Email notification sent to admin
↓
Success message displayed to user
↓
Auto-response email sent to user
```

#### WhatsApp Integration Flow
```
WhatsApp popover appears on all pages
↓
User clicks WhatsApp icon
↓
WhatsApp chat opens (mobile/desktop)
↓
Pre-filled message with page context
↓
Direct communication with SingBD team
```

#### Contact Information Display
- **Office Locations:** Multiple addresses with maps
- **Phone Numbers:** Direct click-to-call on mobile
- **Email Addresses:** Click-to-email functionality
- **Business Hours:** Clear operating hours
- **Social Media:** Links to company social profiles

### 6. About Page Flow

#### Company Information Flow
```
User navigates to About page
↓
Company story and mission displayed
↓
Team member profiles with photos
↓
Company values and culture
↓
Professional achievements and certifications
↓
Call-to-action to contact or view products
```

#### Team Section Flow
```
Team member cards displayed
↓
User hovers/clicks on team member
↓
Detailed profile information shown
↓
Contact information for team member
↓
Professional background and expertise
```

### 7. Services Page Flow

#### Services Overview
```
User navigates to Services page
↓
Services listed with descriptions
↓
Interactive service tabs/changing content
↓
Detailed service information
↓
Process flow and capabilities
↓
Pricing information (if applicable)
↓
Contact CTA for service inquiries
```

### 8. Mobile User Flow

#### Mobile Navigation
```
Mobile menu hamburger icon
↓
User taps hamburger menu
↓
Full-screen overlay menu appears
↓
Menu items with touch-friendly targets
↓
User selects page
↓
Menu closes, page loads
```

#### Mobile-Specific Interactions
- **Touch Gestures:** Swipe for image galleries
- **Tap Targets:** Minimum 44px touch areas
- **Responsive Forms:** Optimized for mobile input
- **WhatsApp Integration:** Native app integration
- **Click-to-Call:** Direct phone number dialing

### 9. Conversion Flow

#### Lead Generation Process
```
User discovers SingBD website
↓
User browses content and services
↓
User identifies need for sourcing
↓
User fills out contact form
↓
Form submission processed
↓
Lead captured in database
↓
Admin notification sent
↓
Follow-up process initiated
```

#### Conversion Optimization
- **Clear CTAs:** Prominent call-to-action buttons
- **Trust Signals:** Partner logos, testimonials, certifications
- **Easy Contact:** Multiple contact methods available
- **Professional Design:** Builds credibility and trust
- **Fast Loading:** Reduces bounce rate

### 10. Admin Panel Flow

#### Contact Management
```
Admin logs into admin panel
↓
Dashboard shows recent submissions
↓
Admin clicks on submission
↓
Detailed submission information displayed
↓
Admin can update status (New/Read/Replied/Archived)
↓
Admin can add notes and assign priority
↓
Admin can export data or send responses
```

#### Content Management (Phase 2)
```
Admin logs into WordPress dashboard
↓
Pages/Posts management interface
↓
Admin edits content using visual editor
↓
Admin uploads media through media library
↓
Admin publishes or schedules content
↓
Changes reflected on live website
```

### 11. Error Handling Flow

#### 404 Error Page
```
User encounters broken link or missing page
↓
404 error page loads
↓
Helpful navigation options displayed
↓
Search functionality available
↓
Contact information provided
↓
User can navigate back to main site
```

#### Form Error Handling
```
User submits form with errors
↓
Client-side validation catches errors
↓
Error messages displayed inline
↓
Form retains user input
↓
User corrects errors
↓
Form resubmitted successfully
```

### 12. Performance Flow

#### Page Loading Sequence
```
Initial page request
↓
Critical CSS loaded inline
↓
Above-the-fold content rendered
↓
Non-critical resources loaded asynchronously
↓
Images loaded with lazy loading
↓
JavaScript executed after DOM ready
↓
Page fully interactive
```

#### Caching Strategy
```
User requests page
↓
Check browser cache
↓
If cached and valid → serve from cache
↓
If not cached → check server cache
↓
If server cached → serve from server cache
↓
If not cached → generate page and cache
↓
Serve page to user
```

### 13. Analytics Flow

#### User Behavior Tracking
```
User visits website
↓
Google Analytics tracking code loads
↓
Page views and events tracked
↓
User interactions recorded
↓
Conversion goals monitored
↓
Data sent to Google Analytics
↓
Reports generated for analysis
```

#### Conversion Tracking
```
User completes contact form
↓
Conversion event triggered
↓
Goal completion recorded
↓
Attribution data captured
↓
Conversion funnel analyzed
↓
Optimization opportunities identified
```

### 14. Security Flow

#### Form Security Process
```
User submits form
↓
CSRF token validated
↓
Input sanitization applied
↓
Rate limiting checked
↓
Server-side validation performed
↓
Data stored securely in database
↓
Success response sent to user
```

#### Authentication Flow
```
Admin attempts login
↓
Credentials validated
↓
Rate limiting checked
↓
Session created securely
↓
Admin redirected to dashboard
↓
Session maintained with security checks
↓
Logout clears session completely
```

### 15. Maintenance Flow

#### Content Update Process
```
Content update needed
↓
Admin logs into CMS
↓
Admin edits content
↓
Preview changes
↓
Admin publishes updates
↓
Changes reflected on live site
↓
Cache cleared if necessary
↓
Site remains functional during updates
```

#### Backup Process
```
Scheduled backup triggered
↓
Database backup created
↓
File system backup created
↓
Backup files compressed
↓
Backup transferred to secure location
↓
Backup verification performed
↓
Backup log updated
↓
Old backups cleaned up
```

This comprehensive website flow ensures a smooth, intuitive user experience while maintaining high performance, security, and conversion optimization throughout the SingBD website.
