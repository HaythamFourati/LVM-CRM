<?php
/**
 * Blog Archive Template - LVM CRM Modern Design
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  
  <!-- Hero Section -->
  <section class="relative pt-32 pb-16 lg:pt-36 lg:pb-20 bg-gradient-to-b from-primary/[0.03] to-transparent">
    <div class="max-w-6xl mx-auto px-6">
      <div class="blog-hero-content max-w-2xl">
        <span class="inline-flex items-center mb-4 text-[13px] text-primary font-medium tracking-wide">
          <span class="w-8 h-px bg-primary/40 mr-3"></span>
          <?php esc_html_e('LVM CRM Blog', 'crm-lvm'); ?>
        </span>
        
        <h1 class="text-4xl md:text-5xl font-bold tracking-tight mb-6 leading-[1.1] text-foreground">
          <?php esc_html_e('Insights & Resources', 'crm-lvm'); ?>
        </h1>
        
        <p class="text-lg text-muted-foreground leading-relaxed">
          <?php esc_html_e('Tips, strategies, and insights to help Maryland business owners grow with CRM, automation, and smart marketing.', 'crm-lvm'); ?>
        </p>
      </div>
    </div>
  </section>

  <!-- Blog Posts Grid -->
  <section class="pb-24">
    <div class="max-w-6xl mx-auto px-4">
      <?php if (have_posts()) : ?>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <?php while (have_posts()) : the_post(); ?>
            <article class="blog-card group bg-white rounded-2xl border border-border/50 overflow-hidden hover:border-primary/20 hover:shadow-xl hover:shadow-primary/5 transition-all duration-300">
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
                <h2 class="text-[18px] font-semibold text-foreground mb-3 leading-snug group-hover:text-primary transition-colors">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h2>

                <!-- Excerpt -->
                <p class="text-muted-foreground text-[14px] leading-relaxed mb-4 line-clamp-2">
                  <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                </p>

                <!-- Meta -->
                <div class="flex items-center justify-between pt-4 border-t border-border/50">
                  <time datetime="<?php echo get_the_date('c'); ?>" class="text-[12px] text-muted-foreground">
                    <?php echo get_the_date('M j, Y'); ?>
                  </time>
                  <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-[13px] text-primary font-medium hover:gap-2 transition-all">
                    Read More
                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
                  </a>
                </div>
              </div>
            </article>
          <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-16 flex justify-center">
          <?php
          $pagination = paginate_links([
            'prev_text' => '<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m15 18-6-6 6-6"/></svg>',
            'next_text' => '<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m9 18 6-6-6-6"/></svg>',
            'type' => 'array',
          ]);
          
          if ($pagination) : ?>
            <nav class="flex items-center gap-2" aria-label="Pagination">
              <?php foreach ($pagination as $page) : ?>
                <span class="[&>a]:px-4 [&>a]:py-2 [&>a]:rounded-lg [&>a]:text-[14px] [&>a]:font-medium [&>a]:text-foreground/70 [&>a]:hover:bg-primary/10 [&>a]:hover:text-primary [&>a]:transition-colors [&>span]:px-4 [&>span]:py-2 [&>span]:rounded-lg [&>span]:text-[14px] [&>span]:font-medium [&>span.current]:bg-primary [&>span.current]:text-white">
                  <?php echo $page; ?>
                </span>
              <?php endforeach; ?>
            </nav>
          <?php endif; ?>
        </div>

      <?php else : ?>
        <!-- No Posts -->
        <div class="text-center py-16">
          <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-6">
            <svg class="w-8 h-8 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/></svg>
          </div>
          <h2 class="text-xl font-semibold text-foreground mb-2">No posts yet</h2>
          <p class="text-muted-foreground text-[15px]">Check back soon for new content.</p>
        </div>
      <?php endif; ?>
    </div>
  </section>

  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root -->
<div id="react-enhancer"></div>

<?php get_footer();
