<?php
/**
 * How It Works Section
 * 3 simple steps
 */
?>
<section id="how-it-works" class="py-20 lg:py-28 bg-secondary/30">
  <div class="max-w-6xl mx-auto px-6">
    <!-- Section header -->
    <div class="text-center max-w-3xl mx-auto mb-16">
      <h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-4 section-header">
        <?php esc_html_e('Get Started in 3 Simple Steps', 'crm-lvm'); ?>
      </h2>
      <p class="text-lg text-muted-foreground">
        <?php esc_html_e('No tech skills required. We handle the hard part.', 'crm-lvm'); ?>
      </p>
    </div>

    <!-- Steps -->
    <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
      <!-- Step 1 -->
      <div class="relative text-center animate-card">
        <div class="relative z-10">
          <div class="w-16 h-16 rounded-2xl bg-primary text-primary-foreground text-2xl font-bold flex items-center justify-center mx-auto mb-6 shadow-lg shadow-primary/25">
            1
          </div>
          <h3 class="text-xl font-semibold text-foreground mb-3"><?php esc_html_e('Sign Up', 'crm-lvm'); ?></h3>
          <p class="text-muted-foreground">
            <?php esc_html_e('Choose your plan and create your account. Takes less than 2 minutes.', 'crm-lvm'); ?>
          </p>
        </div>
        <!-- Connector line (hidden on mobile) -->
        <div class="hidden md:block absolute top-8 left-[60%] w-[80%] h-0.5 bg-gradient-to-r from-primary/50 to-primary/20"></div>
      </div>

      <!-- Step 2 -->
      <div class="relative text-center animate-card">
        <div class="relative z-10">
          <div class="w-16 h-16 rounded-2xl bg-primary text-primary-foreground text-2xl font-bold flex items-center justify-center mx-auto mb-6 shadow-lg shadow-primary/25">
            2
          </div>
          <h3 class="text-xl font-semibold text-foreground mb-3"><?php esc_html_e('We Set Everything Up', 'crm-lvm'); ?></h3>
          <p class="text-muted-foreground">
            <?php esc_html_e('Our team builds your website, configures your CRM, and sets up your automations.', 'crm-lvm'); ?>
          </p>
        </div>
        <!-- Connector line (hidden on mobile) -->
        <div class="hidden md:block absolute top-8 left-[60%] w-[80%] h-0.5 bg-gradient-to-r from-primary/50 to-primary/20"></div>
      </div>

      <!-- Step 3 -->
      <div class="relative text-center animate-card">
        <div class="relative z-10">
          <div class="w-16 h-16 rounded-2xl bg-accent text-accent-foreground text-2xl font-bold flex items-center justify-center mx-auto mb-6 shadow-lg shadow-accent/25">
            3
          </div>
          <h3 class="text-xl font-semibold text-foreground mb-3"><?php esc_html_e('Start Getting Leads', 'crm-lvm'); ?></h3>
          <p class="text-muted-foreground">
            <?php esc_html_e('Go live and watch leads flow in. We\'re here to help every step of the way.', 'crm-lvm'); ?>
          </p>
        </div>
      </div>
    </div>

    <!-- CTA -->
    <div class="text-center mt-12">
      <a href="https://link.fastpaydirect.com/payment-link/6953e2cd7c45194addd4f86d" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-primary text-primary-foreground font-semibold text-lg shadow-lg shadow-primary/25 hover:shadow-xl hover:shadow-primary/30 hover:-translate-y-0.5 transition-all duration-200">
        <?php esc_html_e('Get Started Now', 'crm-lvm'); ?>
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
        </svg>
      </a>
    </div>
  </div>
</section>
