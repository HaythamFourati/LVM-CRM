<?php

/**
 * Global Site Contact Information
 * LVM CRM - All-In-One Business Platform
 */
define('SITE_NAME', 'LVM CRM');
define('SITE_EMAIL', 'info@localvocalmarketing.com');
define('SITE_URL', 'https://crm.localvocalmarketing.com/');
define('SITE_PRICE', '$97/month');

function boilerplate_load_assets() {
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element', 'react-jsx-runtime'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'boilerplate_load_assets');

function boilerplate_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');

// Preload hero image for LCP optimization
function boilerplate_preload_hero_image() {
  if (is_front_page()) {
    echo '<link rel="preload" as="image" href="https://images.unsplash.com/photo-1758686253708-f0e21317d2aa?q=80&w=2232&auto=format&fit=crop" fetchpriority="high">';
  }
}
add_action('wp_head', 'boilerplate_preload_hero_image', 1);

// Add defer attribute to theme script
function boilerplate_defer_scripts($tag, $handle, $src) {
  if ($handle === 'ourmainjs') {
    return '<script src="' . esc_url($src) . '" id="' . $handle . '-js" defer></script>';
  }
  return $tag;
}
add_filter('script_loader_tag', 'boilerplate_defer_scripts', 10, 3);

/**
 * Generate Table of Contents from post content headings
 * Extracts h2 and h3 tags and creates anchor links
 */
function generate_table_of_contents($content) {
  if (!is_single()) {
    return $content;
  }

  // Match h2 and h3 headings
  preg_match_all('/<h([2-3])([^>]*)>(.+?)<\/h[2-3]>/i', $content, $matches, PREG_SET_ORDER);

  if (empty($matches)) {
    return $content;
  }

  $toc_items = [];
  $modified_content = $content;

  foreach ($matches as $index => $match) {
    $level = $match[1];
    $attrs = $match[2];
    $heading_text = strip_tags($match[3]);
    $anchor_id = 'heading-' . $index . '-' . sanitize_title($heading_text);

    // Add to TOC array
    $toc_items[] = [
      'level' => $level,
      'text' => $heading_text,
      'id' => $anchor_id
    ];

    // Add id attribute to heading in content
    $new_heading = '<h' . $level . ' id="' . esc_attr($anchor_id) . '"' . $attrs . '>' . $match[3] . '</h' . $level . '>';
    $modified_content = str_replace($match[0], $new_heading, $modified_content);
  }

  // Store TOC items in global for template use
  $GLOBALS['post_toc_items'] = $toc_items;

  return $modified_content;
}
add_filter('the_content', 'generate_table_of_contents', 5);

/**
 * Render Table of Contents HTML
 */
function render_table_of_contents() {
  if (empty($GLOBALS['post_toc_items'])) {
    return '';
  }

  $toc_items = $GLOBALS['post_toc_items'];
  
  ob_start();
  ?>
  <nav class="toc-container mb-10 p-6 rounded-2xl bg-muted/30 border border-border/50">
    <h2 class="text-[15px] font-semibold text-foreground mb-4 flex items-center gap-2">
      <svg class="w-4 h-4 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 6h16"/><path d="M4 12h16"/><path d="M4 18h12"/></svg>
      Table of Contents
    </h2>
    <ul class="space-y-2">
      <?php foreach ($toc_items as $item) : ?>
        <li class="<?php echo $item['level'] === '3' ? 'ml-4' : ''; ?>">
          <a href="#<?php echo esc_attr($item['id']); ?>" class="text-[14px] text-muted-foreground hover:text-primary transition-colors flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-primary/40"></span>
            <?php echo esc_html($item['text']); ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>
  <?php
  return ob_get_clean();
}