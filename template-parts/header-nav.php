<?php
/**
 * Header Navigation - LVM CRM
 * Clean 2025 Modern SaaS Design
 */
?>
<header id="site-header" class="fixed top-0 left-0 right-0 z-50 w-full pt-4">
  <nav id="navbar-root" class="relative z-40 w-full px-4">
    <div class="relative z-[60] mx-auto hidden w-full max-w-6xl flex-row items-center justify-between rounded-2xl bg-white/80 backdrop-blur-md border border-primary/10 px-6 py-3 lg:flex transition-all duration-500 ease-out shadow-sm">
      <!-- Logo -->
      <a href="<?php echo home_url(); ?>" class="relative z-20 flex items-center gap-3">
        <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-primary to-primary/80 flex items-center justify-center transition-all duration-300">
          <span class="text-white font-bold text-sm tracking-tight">LVM</span>
        </div>
        <div class="flex flex-col">
          <span class="font-semibold text-[15px] leading-tight text-foreground tracking-tight transition-colors duration-300"><?php echo esc_html(SITE_NAME); ?></span>
          <span class="text-[11px] leading-tight text-muted-foreground tracking-wide transition-colors duration-300"><?php esc_html_e('All-In-One Platform', 'crm-lvm'); ?></span>
        </div>
      </a>

      <!-- Navigation Items -->
      <div class="flex flex-row items-center gap-1">
        <a href="#features" class="relative px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/5"><?php esc_html_e('Features', 'crm-lvm'); ?></a>
        <a href="#pricing" class="relative px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/5"><?php esc_html_e('Pricing', 'crm-lvm'); ?></a>
        <a href="#testimonials" class="relative px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/5"><?php esc_html_e('Testimonials', 'crm-lvm'); ?></a>
        <a href="#faq" class="relative px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/5"><?php esc_html_e('FAQ', 'crm-lvm'); ?></a>
        <a href="<?php echo home_url('/blog'); ?>" class="relative px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/5"><?php esc_html_e('Blog', 'crm-lvm'); ?></a>
      </div>

      <!-- Actions -->
      <div class="relative z-20 flex items-center gap-3">
        <a href="https://api.leadconnectorhq.com/widget/booking/h91OK57EebhOpeiGoWZ3" target="_blank" rel="noopener" class="px-4 py-2 text-[13px] text-foreground/70 hover:text-primary font-medium transition-colors duration-200 rounded-lg hover:bg-primary/5">
          <?php esc_html_e('Book a Demo', 'crm-lvm'); ?>
        </a>
        <a href="#pricing" class="px-5 py-2.5 rounded-xl bg-primary text-white text-[13px] font-medium hover:bg-primary/90 transition-all duration-200 hover:shadow-lg hover:shadow-primary/25">
          <?php esc_html_e('Get Started', 'crm-lvm'); ?>
        </a>
      </div>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-nav-root" class="relative z-50 mx-auto flex w-full flex-col bg-white/80 backdrop-blur-md rounded-2xl border border-primary/10 px-4 py-3 lg:hidden">
      <div class="flex w-full flex-row items-center justify-between">
        <a href="<?php echo home_url(); ?>" class="flex items-center gap-2.5">
          <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-primary to-primary/80 flex items-center justify-center">
            <span class="text-white font-bold text-xs tracking-tight">LVM</span>
          </div>
          <span class="font-semibold text-sm text-foreground tracking-tight"><?php echo esc_html(SITE_NAME); ?></span>
        </a>
        <button id="mobile-menu-toggle" class="w-9 h-9 flex items-center justify-center rounded-lg hover:bg-primary/5 transition-colors" aria-label="Toggle menu">
          <svg id="mobile-menu-icon-open" class="w-5 h-5 text-foreground" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <svg id="mobile-menu-icon-close" class="w-5 h-5 text-foreground hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>
      
      <!-- Mobile Menu Panel -->
      <div id="mobile-menu-panel" class="hidden w-full pt-4 pb-2">
        <div class="flex flex-col gap-1">
          <a href="#features" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/5 transition-colors"><?php esc_html_e('Features', 'crm-lvm'); ?></a>
          <a href="#pricing" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/5 transition-colors"><?php esc_html_e('Pricing', 'crm-lvm'); ?></a>
          <a href="#testimonials" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/5 transition-colors"><?php esc_html_e('Testimonials', 'crm-lvm'); ?></a>
          <a href="#faq" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/5 transition-colors"><?php esc_html_e('FAQ', 'crm-lvm'); ?></a>
          <a href="<?php echo home_url('/blog'); ?>" class="px-3 py-2.5 text-[14px] text-foreground font-medium rounded-lg hover:bg-primary/5 transition-colors"><?php esc_html_e('Blog', 'crm-lvm'); ?></a>
        </div>
        
        <!-- Mobile CTA -->
        <div class="mt-4 pt-4 border-t border-border/50 space-y-3">
          <a href="https://api.leadconnectorhq.com/widget/booking/h91OK57EebhOpeiGoWZ3" target="_blank" rel="noopener" class="flex items-center justify-center gap-2 px-4 py-2.5 text-[14px] text-foreground font-medium rounded-xl border border-border hover:bg-primary/5 transition-colors">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <?php esc_html_e('Book a Demo', 'crm-lvm'); ?>
          </a>
          <a href="#pricing" class="flex items-center justify-center gap-2 px-4 py-3 text-[14px] text-white font-medium rounded-xl bg-primary hover:bg-primary/90 transition-colors">
            <?php esc_html_e('Get Started — $97/mo', 'crm-lvm'); ?>
          </a>
        </div>
      </div>
    </div>
  </nav>
</header>
