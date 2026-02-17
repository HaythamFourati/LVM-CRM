<?php
/**
 * Template Name: About
 * About Page - LVM CRM
 * Content is editable via WordPress dashboard
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>

  <!-- About Content -->
  <article class="relative pt-32 pb-20 lg:pt-40 lg:pb-28">
    <div class="max-w-5xl mx-auto px-6">
      
      <?php while (have_posts()) : the_post(); ?>
        
        <!-- Page Header -->
        <header class="mb-12 text-center">
          <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-foreground mb-6">
            <?php the_title(); ?>
          </h1>
          <?php if (has_excerpt()) : ?>
            <p class="text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
              <?php the_excerpt(); ?>
            </p>
          <?php endif; ?>
        </header>

        <!-- Featured Image (if set) -->
        <?php if (has_post_thumbnail()) : ?>
          <div class="mb-12 rounded-2xl overflow-hidden shadow-lg">
            <?php the_post_thumbnail('full', ['class' => 'w-full h-auto']); ?>
          </div>
        <?php endif; ?>

        <!-- Page Content (Editable in WP Dashboard) -->
        <div class="prose prose-lg max-w-none prose-headings:font-bold prose-headings:text-foreground prose-p:text-muted-foreground prose-p:leading-relaxed prose-a:text-primary prose-a:no-underline hover:prose-a:underline prose-strong:text-foreground prose-ul:text-muted-foreground prose-ol:text-muted-foreground prose-li:my-2 prose-img:rounded-xl prose-img:shadow-md">
          <?php the_content(); ?>
        </div>

        <!-- CTA Section -->
        <div class="mt-16 p-8 lg:p-12 rounded-3xl bg-gradient-to-br from-primary/5 to-accent/5 border border-primary/10 text-center">
          <h2 class="text-2xl sm:text-3xl font-bold text-foreground mb-4">
            <?php esc_html_e('Ready to Transform Your Business?', 'crm-lvm'); ?>
          </h2>
          <p class="text-lg text-muted-foreground max-w-2xl mx-auto mb-8">
            <?php esc_html_e('Join hundreds of Maryland businesses growing with LVM CRM. Get started today for just $97/month.', 'crm-lvm'); ?>
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://link.fastpaydirect.com/payment-link/6953e2cd7c45194addd4f86d" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-primary text-primary-foreground font-semibold text-lg shadow-lg shadow-primary/20 hover:shadow-xl hover:shadow-primary/25 hover:-translate-y-0.5 transition-all duration-300">
              <?php esc_html_e('Get Started Now', 'crm-lvm'); ?>
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
              </svg>
            </a>
            <a href="https://api.leadconnectorhq.com/widget/booking/h91OK57EebhOpeiGoWZ3" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-white border border-border text-foreground font-semibold text-lg shadow-sm hover:bg-secondary hover:border-primary/20 transition-all duration-300">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              <?php esc_html_e('Book a Demo', 'crm-lvm'); ?>
            </a>
          </div>
        </div>

      <?php endwhile; ?>

    </div>
  </article>

  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<?php get_footer(); ?>
