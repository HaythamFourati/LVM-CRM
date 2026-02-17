<?php
/**
 * Template Name: Terms of Service
 * Terms of Service Page - LVM CRM
 * Content is editable via WordPress dashboard
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>

  <!-- Terms of Service Content -->
  <article class="relative pt-32 pb-20 lg:pt-40 lg:pb-28">
    <div class="max-w-4xl mx-auto px-6">
      
      <?php while (have_posts()) : the_post(); ?>
        
        <!-- Page Header -->
        <header class="mb-12 text-center">
          <h1 class="text-4xl sm:text-5xl font-bold text-foreground mb-4">
            <?php the_title(); ?>
          </h1>
          <p class="text-muted-foreground">
            <?php esc_html_e('Last Updated:', 'crm-lvm'); ?> 
            <time datetime="<?php echo get_the_modified_date('c'); ?>">
              <?php echo get_the_modified_date('F j, Y'); ?>
            </time>
          </p>
        </header>

        <!-- Page Content (Editable in WP Dashboard) -->
        <div class="prose prose-lg max-w-none prose-headings:font-bold prose-headings:text-foreground prose-p:text-muted-foreground prose-a:text-primary prose-a:no-underline hover:prose-a:underline prose-strong:text-foreground prose-ul:text-muted-foreground prose-ol:text-muted-foreground">
          <?php the_content(); ?>
        </div>

        <!-- Contact Section -->
        <div class="mt-12 p-6 rounded-2xl bg-secondary/30 border border-border">
          <h3 class="text-xl font-semibold text-foreground mb-2">
            <?php esc_html_e('Questions About Our Terms?', 'crm-lvm'); ?>
          </h3>
          <p class="text-muted-foreground mb-4">
            <?php esc_html_e('If you have any questions about these Terms of Service, please contact us.', 'crm-lvm'); ?>
          </p>
          <a href="<?php echo home_url('/contact'); ?>" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-primary text-primary-foreground font-semibold hover:shadow-lg hover:shadow-primary/20 transition-all duration-200">
            <?php esc_html_e('Contact Us', 'crm-lvm'); ?>
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
            </svg>
          </a>
        </div>

      <?php endwhile; ?>

    </div>
  </article>

  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<?php get_footer(); ?>
