# LVM CRM - WordPress Theme

A modern, high-performance WordPress theme for LVM CRM — a SaaS CRM reseller of Go High Level plus Website Creation services. Features a clean 2025 aesthetic with smooth animations, optimized for Core Web Vitals.

## Tech Stack

| Technology | Purpose |
|------------|---------|
| **PHP** | WordPress template files (server-rendered for SEO) |
| **React** | Client-side enhancements via `Enhancer.jsx` |
| **Tailwind CSS v4** | Utility-first styling with custom design tokens |
| **GSAP + ScrollTrigger** | Scroll-linked animations (desktop only) |
| **@wordpress/scripts** | JS bundling (webpack under the hood) |
| **BrowserSync** | Live reload during development |

## Project Structure

```
CRM-LVM/
├── build/                    # Compiled assets (git-ignored)
│   ├── index.js              # Bundled React/GSAP
│   └── index.css             # Compiled Tailwind
├── src/
│   ├── index.js              # React entry point
│   ├── index.css             # Tailwind entry (tokens + layers)
│   └── components/
│       └── Enhancer.jsx      # All React enhancements
├── template-parts/           # Reusable PHP partials
│   ├── header-nav.php        # Site navigation
│   ├── section-hero.php      # Homepage hero
│   ├── section-features.php  # CRM features grid
│   ├── section-pricing.php   # Pricing tiers
│   ├── section-testimonials.php
│   ├── section-contact.php
│   └── footer-site.php
├── front-page.php            # Homepage template
├── page-about.php            # About LVM CRM
├── page-blog.php             # Blog listing (Template Name: Blog)
├── page-crm.php              # CRM service page
├── page-websites.php         # Website creation service page
├── page-pricing.php          # Pricing page
├── page-demo.php             # Demo request page
├── single.php                # Single blog post
├── archive.php               # Category/tag archives
├── index.php                 # Fallback template
├── functions.php             # Theme setup & enqueues
├── style.css                 # Theme metadata (required by WP)
└── package.json              # NPM scripts & dependencies
```

## Getting Started

### Prerequisites

- Node.js 18+
- Local WordPress environment (Local by Flywheel, MAMP, etc.)
- Theme installed in `wp-content/themes/`

### Installation

```bash
# Navigate to theme directory
cd wp-content/themes/CRM-LVM

# Install dependencies
npm install

# Build for production
npm run build
```

### Development

```bash
# Start development with live reload
npm run preview
```

This runs three processes in parallel:
1. **BrowserSync** - Proxies `crmlvm.local` with live reload
2. **wp-scripts start** - Watches and rebuilds JS
3. **Tailwind CLI** - Watches and rebuilds CSS

### NPM Scripts

| Command | Description |
|---------|-------------|
| `npm run preview` | Full dev environment with BrowserSync |
| `npm run start` | JS + CSS watch (no BrowserSync) |
| `npm run build` | Production build (minified) |
| `npm run buildwp` | Build JS only |
| `npm run tailwindbuild` | Build CSS only |

## Design System

### Colors (defined in `src/index.css`)

```css
--color-primary: hsl(224 76% 32%);      /* Deep sapphire blue */
--color-accent: hsl(18 76% 52%);        /* Copper/terracotta */
--color-background: hsl(220 20% 97%);   /* Light gray */
--color-foreground: hsl(222 47% 11%);   /* Near black */
--color-muted-foreground: hsl(220 9% 46%);
```

### Typography

- **Headings**: System font stack, semibold, tight tracking
- **Body**: 15px base, relaxed line height
- **Small text**: 13px for labels, 12px for meta

### Spacing Rhythm

- Section padding: `py-24` (6rem)
- Card padding: `p-6` (1.5rem)
- Max content width: `max-w-6xl` (72rem)

## Performance Optimizations

### Mobile (< 1024px)
- ❌ ScrollTrigger animations disabled
- ✅ Simple fade-in animations only
- ✅ All content visible immediately
- ✅ Native browser scroll (no JS overhead)

### Desktop
- ✅ Native browser scroll (lightweight, universal)
- ✅ ScrollTrigger.batch() for card animations
- ✅ One-time triggers (not continuous scrub)
- ✅ Deferred JS loading

### Accessibility
- ✅ `prefers-reduced-motion` respected
- ✅ All animations disabled for users who prefer reduced motion
- ✅ Visible focus states
- ✅ Semantic HTML structure

### Core Web Vitals (measured)
- **LCP**: 0.49s (Excellent)
- **CLS**: 0.02 (Excellent)
- **Scripting**: 244ms total

## Page Templates

### Homepage (`front-page.php`)
Automatically used for the site's front page. Includes:
- Hero with split text animation
- CRM features grid
- Pricing section
- Testimonials carousel
- Contact/Demo form
- Footer

### Service Pages (`page-{service}.php`)
Create a WordPress page with matching slug:
- `/crm` — Go High Level CRM reseller features
- `/websites` — Website creation services
- `/pricing` — Pricing tiers and plans
- `/demo` — Demo request / booking

### About Page (`page-about.php`)
Create a page with slug `/about` or select "About" template.

### Blog (`page-blog.php`)
Create a page with slug `/blog` or select "Blog" template.

## Animations

### On-Load (runs once)
- Header slides in from top
- Hero text character-by-character reveal (desktop)
- Hero image/dashboard mockup reveal
- CTA button pop-in

### On-Scroll (desktop only)
- Section headers fade up
- Feature cards batch animate with stagger
- Pricing cards reveal
- Testimonials fade-in

## Adding New Pages

1. Create PHP template: `page-{slug}.php`
2. Add Template Name comment if needed:
   ```php
   <?php
   /**
    * Template Name: My Custom Page
    */
   ```
3. Include header-nav and footer-site partials
4. Add `#react-enhancer` div before `get_footer()`
5. Add any new animation selectors to `Enhancer.jsx`

## Contact Information

- **Website**: [lvmcrm.com](https://lvmcrm.com)
- **Email**: info@lvmcrm.com

## Credits

- **Theme Development**: [Local Vocal Marketing](https://localvocalmarketing.com/)
- **Client**: LVM CRM

---

© 2025 LVM CRM. All rights reserved.
