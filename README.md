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
├── build/                    # Compiled assets
│   ├── index.js              # Bundled React/GSAP
│   ├── index.css             # Compiled Tailwind
│   └── index.asset.php       # WP asset dependencies
├── src/
│   ├── index.js              # React entry point
│   ├── index.css             # Tailwind entry (tokens + layers)
│   └── components/
│       └── Enhancer.jsx      # All React/GSAP enhancements
├── template-parts/           # Reusable PHP partials
│   ├── header-nav.php        # Site navigation (desktop + mobile)
│   ├── section-hero.php      # Homepage hero with carousel
│   ├── section-problem.php   # Problem/solution with animated lines
│   ├── section-features.php  # 12 feature cards grid
│   ├── section-website.php   # Free website offer
│   ├── section-how-it-works.php  # 3-step process
│   ├── section-pricing.php   # Comparison table ($97 vs $1,612)
│   ├── section-testimonials.php  # Infinite scroll marquee
│   ├── section-faq.php       # Accordion FAQ
│   ├── section-cta.php       # Final call-to-action
│   └── footer-site.php       # Site footer
├── front-page.php            # Homepage template
├── single.php                # Single blog post
├── archive.php               # Category/tag archives
├── index.php                 # Blog listing page
├── header.php                # WP header (meta, scripts)
├── footer.php                # WP footer (closing tags)
├── functions.php             # Theme setup & enqueues
├── style.css                 # Theme metadata (required by WP)
├── PRD.txt                   # Product requirements document
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
- Hero with Maryland-focused copy and niche carousel
- Problem/solution section with animated connecting lines
- 12 feature cards grid
- Free website offer section
- How it works (3 steps)
- Pricing comparison table ($97/mo vs $1,612)
- Testimonials marquee (10 reviews)
- FAQ accordion
- Final CTA

### Blog (`index.php`)
Main blog listing page at `/blog`. Features:
- Hero section with branding
- 3-column post grid with cards
- Pagination support

### Single Post (`single.php`)
Individual blog post template with:
- Back to blog link
- Category, author, date, reading time
- Featured image
- Prose-styled content
- Tags, author box
- Previous/next navigation

### Archive (`archive.php`)
Category and tag archive pages with same styling as blog.

## Animations

### On-Load (runs once)
- Header slides in from top
- Hero text fade-in with underline animation
- Niche carousel 3D rotation
- CTA button pop-in

### On-Scroll (desktop only)
- Section headers fade up
- Feature cards batch animate with stagger
- Problem cards reveal with connecting lines to solution
- Pricing table reveal
- Testimonials marquee (continuous)

## Adding New Sections

1. Create template part: `template-parts/section-{name}.php`
2. Add to `front-page.php` with `get_template_part()`
3. Add animation selectors to `src/components/Enhancer.jsx`
4. Run `npm run build` to compile

## Contact Information

- **Website**: [lvmcrm.com](https://lvmcrm.com)
- **Email**: info@lvmcrm.com

## Credits

- **Theme Development**: [Local Vocal Marketing](https://localvocalmarketing.com/)
- **Client**: LVM CRM

---

© 2025 LVM CRM. All rights reserved.
