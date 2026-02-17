<?php
/**
 * Template Name: Contact
 * Contact Page with Form - LVM CRM
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>

  <!-- Contact Section -->
  <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-28">
    <div class="max-w-6xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">
        
        <!-- Left: Contact Form -->
        <div class="bg-white rounded-2xl border border-border p-8 lg:p-10 shadow-sm">
          <h1 class="text-3xl sm:text-4xl font-bold text-foreground mb-2">
            <?php esc_html_e('Get in Touch', 'crm-lvm'); ?>
          </h1>
          <p class="text-muted-foreground mb-8">
            <?php esc_html_e('Have questions? We\'re here to help. Fill out the form below and we\'ll get back to you shortly.', 'crm-lvm'); ?>
          </p>

          <!-- Contact Form 7 Shortcode -->
          <!-- Replace YOUR_FORM_ID with the actual form ID after creating the form in WordPress Admin -->
          <?php echo do_shortcode('[contact-form-7 id="7786c3d" title="Contact form 1"]'); ?>
        </div>

        <!-- Right: Contact Info & Map -->
        <div class="space-y-8">
          <!-- Contact Info -->
          <div>
            <h2 class="text-2xl font-bold text-foreground mb-6">
              <?php esc_html_e('Contact Information', 'crm-lvm'); ?>
            </h2>
            <div class="space-y-4">
              <!-- Email -->
              <a href="mailto:<?php echo esc_attr(SITE_EMAIL); ?>" class="flex items-center gap-4 p-4 rounded-xl bg-card border border-border hover:border-primary/20 hover:shadow-sm transition-all group">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0 group-hover:bg-primary/20 transition-colors">
                  <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                  </svg>
                </div>
                <div>
                  <p class="text-sm text-muted-foreground"><?php esc_html_e('Email Us', 'crm-lvm'); ?></p>
                  <p class="font-medium text-foreground"><?php echo esc_html(SITE_EMAIL); ?></p>
                </div>
              </a>

              <!-- Website -->
              <a href="<?php echo esc_url(SITE_URL); ?>" target="_blank" rel="noopener" class="flex items-center gap-4 p-4 rounded-xl bg-card border border-border hover:border-primary/20 hover:shadow-sm transition-all group">
                <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center flex-shrink-0 group-hover:bg-primary/20 transition-colors">
                  <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                  </svg>
                </div>
                <div>
                  <p class="text-sm text-muted-foreground"><?php esc_html_e('Visit Website', 'crm-lvm'); ?></p>
                  <p class="font-medium text-foreground">crm.localvocalmarketing.com</p>
                </div>
              </a>

              <!-- Book Demo -->
              <a href="https://api.leadconnectorhq.com/widget/booking/h91OK57EebhOpeiGoWZ3" target="_blank" rel="noopener" class="flex items-center gap-4 p-4 rounded-xl bg-gradient-to-br from-primary/5 to-accent/5 border border-primary/20 hover:shadow-md transition-all group">
                <div class="w-12 h-12 rounded-xl bg-primary flex items-center justify-center flex-shrink-0 shadow-lg shadow-primary/25">
                  <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                  </svg>
                </div>
                <div>
                  <p class="text-sm text-muted-foreground"><?php esc_html_e('Schedule a Call', 'crm-lvm'); ?></p>
                  <p class="font-semibold text-primary"><?php esc_html_e('Book a Free Demo', 'crm-lvm'); ?></p>
                </div>
              </a>
            </div>
          </div>

          <!-- Business Hours -->
          <div class="bg-card rounded-2xl border border-border p-6">
            <h3 class="text-lg font-semibold text-foreground mb-4">
              <?php esc_html_e('Business Hours', 'crm-lvm'); ?>
            </h3>
            <div class="space-y-2 text-sm">
              <div class="flex justify-between">
                <span class="text-muted-foreground"><?php esc_html_e('Monday - Friday', 'crm-lvm'); ?></span>
                <span class="font-medium text-foreground"><?php esc_html_e('9:00 AM - 6:00 PM', 'crm-lvm'); ?></span>
              </div>
              <div class="flex justify-between">
                <span class="text-muted-foreground"><?php esc_html_e('Saturday', 'crm-lvm'); ?></span>
                <span class="font-medium text-foreground"><?php esc_html_e('10:00 AM - 4:00 PM', 'crm-lvm'); ?></span>
              </div>
              <div class="flex justify-between">
                <span class="text-muted-foreground"><?php esc_html_e('Sunday', 'crm-lvm'); ?></span>
                <span class="font-medium text-foreground"><?php esc_html_e('Closed', 'crm-lvm'); ?></span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<?php get_footer(); ?>
