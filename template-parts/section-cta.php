<?php
/**
 * Final CTA Section
 * Strong, repeated CTA: "Start for $97/month" or "Book a Free Demo"
 */
?>
<section id="cta" class="py-20 lg:py-28 bg-gradient-to-br from-purple-800 to-purple-900 relative overflow-hidden">
  <!-- Background decoration -->
  <div class="absolute inset-0 overflow-hidden pointer-events-none">
    <div class="absolute top-0 left-1/4 w-[600px] h-[600px] rounded-full bg-white/5 blur-3xl"></div>
    <div class="absolute bottom-0 right-1/4 w-[400px] h-[400px] rounded-full bg-white/10 blur-3xl"></div>
  </div>

  <div class="relative max-w-4xl mx-auto px-6 text-center">
    <!-- Badge -->
    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 text-white/90 text-sm font-medium mb-6 backdrop-blur-sm">
      <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
      </svg>
      <?php esc_html_e('Ready to grow your business?', 'crm-lvm'); ?>
    </div>

    <!-- Headline -->
    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6">
      <?php esc_html_e('Start Growing Today for Just $97/month', 'crm-lvm'); ?>
    </h2>

    <!-- Subheadline -->
    <p class="text-xl text-white/80 max-w-2xl mx-auto mb-8">
      <?php esc_html_e('Get your CRM, website, automation, and everything else set up and ready to go. No tech skills required.', 'crm-lvm'); ?>
    </p>

    <!-- Trust points -->
    <div class="flex flex-wrap justify-center gap-6 mb-10 text-white/90">
      <div class="flex items-center gap-2">
        <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
        <span><?php esc_html_e('No setup fees', 'crm-lvm'); ?></span>
      </div>
      <div class="flex items-center gap-2">
        <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
        <span><?php esc_html_e('No contracts', 'crm-lvm'); ?></span>
      </div>
      <div class="flex items-center gap-2">
        <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
        </svg>
        <span><?php esc_html_e('Cancel anytime', 'crm-lvm'); ?></span>
      </div>
    </div>

    <!-- CTAs -->
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="https://link.fastpaydirect.com/payment-link/6953e2cd7c45194addd4f86d" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-white text-primary font-semibold text-lg shadow-lg shadow-black/10 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200">
        <?php esc_html_e('Start for $97/month', 'crm-lvm'); ?>
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
        </svg>
      </a>
      <a href="https://api.leadconnectorhq.com/widget/booking/h91OK57EebhOpeiGoWZ3" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white font-semibold text-lg hover:bg-white/20 transition-all duration-200">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
        </svg>
        <?php esc_html_e('Book a Demo', 'crm-lvm'); ?>
      </a>
    </div>

    <!-- Guarantee -->
    <p class="mt-8 text-sm text-white/60">
      <?php esc_html_e('Questions? Our team is here to help. Book a demo and we\'ll walk you through everything.', 'crm-lvm'); ?>
    </p>
  </div>
</section>
