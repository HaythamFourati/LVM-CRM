<?php
/**
 * Site Footer - LVM CRM
 * Clean 2025 Modern SaaS Design
 */
?>
<footer class="bg-foreground text-white/80">
  <!-- Main Footer -->
  <div class="max-w-6xl mx-auto px-4 py-16">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-8">
      <!-- Brand Column -->
      <div class="lg:col-span-4">
        <a href="<?php echo home_url(); ?>" class="flex items-center gap-3 mb-5">
          <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary to-primary/80 flex items-center justify-center">
            <span class="text-white font-bold text-sm tracking-tight">LVM</span>
          </div>
          <div class="flex flex-col">
            <span class="font-semibold text-[16px] leading-tight text-white"><?php echo esc_html(SITE_NAME); ?></span>
            <span class="text-[12px] leading-tight text-white/60 tracking-wide"><?php esc_html_e('All-In-One Platform', 'crm-lvm'); ?></span>
          </div>
        </a>
        <p class="text-[14px] text-white/60 leading-relaxed mb-6 max-w-xs">
          <?php esc_html_e('Everything your business needs to grow — CRM, automation, website, booking, and messaging — all for $97/month.', 'crm-lvm'); ?>
        </p>
        <!-- Social Links -->
        <div class="flex items-center gap-3">
          <a href="#" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary flex items-center justify-center transition-colors" aria-label="Facebook">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary flex items-center justify-center transition-colors" aria-label="LinkedIn">
            <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
          <a href="#" target="_blank" rel="noopener noreferrer" class="w-9 h-9 rounded-lg bg-white/10 hover:bg-primary flex items-center justify-center transition-colors" aria-label="X (Twitter)">
            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
          </a>
        </div>
      </div>

      <!-- Platform -->
      <nav aria-label="Platform" class="lg:col-span-2">
        <h4 class="font-semibold text-[14px] text-white mb-5"><?php esc_html_e('Platform', 'crm-lvm'); ?></h4>
        <ul class="space-y-3">
          <li><a href="#features" class="text-[13px] text-white/60 hover:text-white transition-colors"><?php esc_html_e('Features', 'crm-lvm'); ?></a></li>
          <li><a href="#pricing" class="text-[13px] text-white/60 hover:text-white transition-colors"><?php esc_html_e('Pricing', 'crm-lvm'); ?></a></li>
          <li><a href="#faq" class="text-[13px] text-white/60 hover:text-white transition-colors"><?php esc_html_e('FAQ', 'crm-lvm'); ?></a></li>
          <li><a href="https://api.leadconnectorhq.com/widget/booking/h91OK57EebhOpeiGoWZ3" target="_blank" rel="noopener" class="text-[13px] text-white/60 hover:text-white transition-colors"><?php esc_html_e('Book a Demo', 'crm-lvm'); ?></a></li>
        </ul>
      </nav>

      <!-- Resources -->
      <nav aria-label="Resources" class="lg:col-span-2">
        <h4 class="font-semibold text-[14px] text-white mb-5"><?php esc_html_e('Resources', 'crm-lvm'); ?></h4>
        <ul class="space-y-3">
          <li><a href="<?php echo home_url('/blog'); ?>" class="text-[13px] text-white/60 hover:text-white transition-colors"><?php esc_html_e('Blog', 'crm-lvm'); ?></a></li>
          <li><a href="#" class="text-[13px] text-white/60 hover:text-white transition-colors"><?php esc_html_e('Help Center', 'crm-lvm'); ?></a></li>
          <li><a href="#" class="text-[13px] text-white/60 hover:text-white transition-colors"><?php esc_html_e('Privacy Policy', 'crm-lvm'); ?></a></li>
          <li><a href="#" class="text-[13px] text-white/60 hover:text-white transition-colors"><?php esc_html_e('Terms of Service', 'crm-lvm'); ?></a></li>
        </ul>
      </nav>

      <!-- Contact Info -->
      <div class="lg:col-span-4">
        <h4 class="font-semibold text-[14px] text-white mb-5"><?php esc_html_e('Get Started', 'crm-lvm'); ?></h4>
        <div class="space-y-4">
          <a href="mailto:<?php echo esc_attr(SITE_EMAIL); ?>" class="flex items-center gap-3 text-[13px] text-white/60 hover:text-white transition-colors">
            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0">
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            </div>
            <?php echo esc_html(SITE_EMAIL); ?>
          </a>
          <a href="<?php echo esc_url(SITE_URL); ?>" class="flex items-center gap-3 text-[13px] text-white/60 hover:text-white transition-colors">
            <div class="w-8 h-8 rounded-lg bg-white/10 flex items-center justify-center flex-shrink-0">
              <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
            </div>
            crm.localvocalmarketing.com
          </a>
          <div class="pt-4">
            <a href="https://link.fastpaydirect.com/payment-link/6953e2cd7c45194addd4f86d" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-primary text-white text-[13px] font-medium hover:bg-primary/90 transition-all duration-200 hover:shadow-lg hover:shadow-primary/25">
              <?php esc_html_e('Start for $97/month', 'crm-lvm'); ?>
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bottom Bar -->
  <div class="border-t border-white/10">
    <div class="max-w-6xl mx-auto px-4 py-6">
      <div class="flex flex-col md:flex-row justify-between items-center gap-4">
        <p class="text-[13px] text-white/50">
          © <?php echo date('Y'); ?> <?php echo esc_html(SITE_NAME); ?>. <?php esc_html_e('All rights reserved.', 'crm-lvm'); ?>
        </p>
        <div class="flex flex-col md:flex-row items-center gap-3 md:gap-6">
          <!-- Designer Credit -->
          <a href="https://localvocalmarketing.com/" target="_blank" rel="noopener noreferrer" class="group flex items-center gap-1.5 text-[10px] text-white/30 hover:text-white/60 transition-all duration-300">
            <span class="w-4 h-4 rounded bg-white/10 group-hover:bg-primary/80 flex items-center justify-center transition-all duration-300 group-hover:scale-110">
              <svg class="w-2.5 h-2.5 group-hover:animate-pulse" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 19l7-7 3 3-7 7-3-3z"/><path d="M18 13l-1.5-7.5L2 2l3.5 14.5L13 18l5-5z"/><path d="M2 2l7.586 7.586"/><circle cx="11" cy="11" r="2"/></svg>
            </span>
            <span class="tracking-wide">Crafted by <span class="font-medium group-hover:text-white/80 transition-colors">Local Vocal</span></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
