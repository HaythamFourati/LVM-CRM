<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="LVM CRM - All-in-one business platform. CRM, automation, website, booking, and messaging for $97/month. Replace 5-10 tools with one simple system.">
    <meta name="keywords" content="all-in-one CRM, small business CRM, marketing automation, done for you website, business platform, lead management">
    <meta name="author" content="<?php echo esc_attr(SITE_NAME); ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:title" content="<?php echo esc_attr(SITE_NAME); ?> - All-In-One Business Platform">
    <meta property="og:description" content="Everything your business needs to grow — CRM, automation, website, booking, and messaging — all for $97/month.">
    <meta property="og:image" content="<?php echo get_theme_file_uri('/screenshot.png'); ?>">
    
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo home_url(); ?>">
    <meta property="twitter:title" content="<?php echo esc_attr(SITE_NAME); ?> - All-In-One Business Platform">
    <meta property="twitter:description" content="Everything your business needs to grow — CRM, automation, website, booking, and messaging — all for $97/month.">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo home_url(); ?>">
    
    <!-- Structured Data - SaaS Product -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "<?php echo esc_js(SITE_NAME); ?>",
      "description": "All-in-one business platform with CRM, automation, website builder, booking, and messaging.",
      "url": "<?php echo home_url(); ?>",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": "Web",
      "offers": {
        "@type": "Offer",
        "price": "97",
        "priceCurrency": "USD",
        "priceValidUntil": "2025-12-31",
        "availability": "https://schema.org/InStock"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "reviewCount": "100"
      }
    }
    </script>
    
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>