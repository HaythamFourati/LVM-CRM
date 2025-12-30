<?php
/**
 * Blog Section - Homepage preview of latest posts
 * Shows 3 most recent blog posts with CTA to view all
 */

$recent_posts = new WP_Query([
  'posts_per_page' => 3,
  'post_status' => 'publish',
  'orderby' => 'date',
  'order' => 'DESC',
]);
?>
<section id="blog" class="py-20 lg:py-28 bg-secondary/30">
  <div class="max-w-6xl mx-auto px-6">
    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-12">
      <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-primary/10 text-primary text-sm font-medium mb-4">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
        </svg>
        <?php esc_html_e('From Our Blog', 'crm-lvm'); ?>
      </span>
      <h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-4 section-header">
        <?php esc_html_e('Latest Insights & Tips', 'crm-lvm'); ?>
      </h2>
      <p class="text-lg text-muted-foreground">
        <?php esc_html_e('Strategies and resources to help your business grow with CRM, automation, and smart marketing.', 'crm-lvm'); ?>
      </p>
    </div>

    <?php if ($recent_posts->have_posts()) : ?>
      <!-- Blog Posts Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
        <?php while ($recent_posts->have_posts()) : $recent_posts->the_post(); ?>
          <article class="blog-card group bg-card rounded-2xl border border-border/50 overflow-hidden hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 transition-all duration-300 animate-card">
            <!-- Featured Image -->
            <?php if (has_post_thumbnail()) : ?>
              <a href="<?php the_permalink(); ?>" class="block aspect-[16/10] overflow-hidden">
                <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500']); ?>
              </a>
            <?php else : ?>
              <a href="<?php the_permalink(); ?>" class="block aspect-[16/10] bg-gradient-to-br from-primary/10 to-primary/5 flex items-center justify-center">
                <svg class="w-12 h-12 text-primary/30" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/></svg>
              </a>
            <?php endif; ?>

            <!-- Content -->
            <div class="p-6">
              <!-- Category -->
              <?php 
              $categories = get_the_category();
              if ($categories) : ?>
                <a href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>" class="inline-block text-[11px] font-medium text-primary uppercase tracking-wider mb-3 hover:text-primary/80 transition-colors">
                  <?php echo esc_html($categories[0]->name); ?>
                </a>
              <?php endif; ?>

              <!-- Title -->
              <h3 class="text-[18px] font-semibold text-foreground mb-3 leading-snug group-hover:text-primary transition-colors">
                <a href="<?php the_permalink(); ?>">
                  <?php the_title(); ?>
                </a>
              </h3>

              <!-- Excerpt -->
              <p class="text-muted-foreground text-[14px] leading-relaxed mb-4 line-clamp-2">
                <?php echo wp_trim_words(get_the_excerpt(), 18, '...'); ?>
              </p>

              <!-- Meta -->
              <div class="flex items-center justify-between pt-4 border-t border-border/50">
                <time datetime="<?php echo get_the_date('c'); ?>" class="text-[12px] text-muted-foreground">
                  <?php echo get_the_date('M j, Y'); ?>
                </time>
                <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-[13px] text-primary font-medium hover:gap-2 transition-all">
                  <?php esc_html_e('Read More', 'crm-lvm'); ?>
                  <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                </a>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <?php wp_reset_postdata(); ?>

      <!-- View All CTA -->
      <div class="text-center">
        <a href="<?php echo home_url('/blog'); ?>" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-primary text-primary-foreground font-semibold hover:shadow-lg hover:shadow-primary/25 hover:-translate-y-0.5 transition-all duration-200">
          <?php esc_html_e('View All Posts', 'crm-lvm'); ?>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
          </svg>
        </a>
      </div>

    <?php else : ?>
      <!-- No Posts -->
      <div class="text-center py-12">
        <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-6">
          <svg class="w-8 h-8 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-foreground mb-2"><?php esc_html_e('Coming Soon', 'crm-lvm'); ?></h3>
        <p class="text-muted-foreground"><?php esc_html_e('We\'re working on helpful content for you. Check back soon!', 'crm-lvm'); ?></p>
      </div>
    <?php endif; ?>
  </div>
</section>
