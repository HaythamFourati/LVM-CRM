<?php
/**
 * FAQ Section
 * Must cover: contracts, cancellation, CRM, tech skills, setup time, custom domain
 */
?>
<section id="faq" class="py-20 lg:py-28 bg-background">
  <div class="max-w-3xl mx-auto px-6">
    <!-- Section header -->
    <div class="text-center mb-16">
      <h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-4 section-header">
        <?php esc_html_e('Frequently Asked Questions', 'crm-lvm'); ?>
      </h2>
      <p class="text-lg text-muted-foreground">
        <?php esc_html_e('Everything you need to know before getting started.', 'crm-lvm'); ?>
      </p>
    </div>

    <!-- FAQ items -->
    <div class="space-y-4">
      <!-- FAQ 1 -->
      <details class="group bg-card rounded-xl border border-border/50 overflow-hidden">
        <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
          <h3 class="font-semibold text-foreground pr-4"><?php esc_html_e('Is there a contract?', 'crm-lvm'); ?></h3>
          <div class="flex-shrink-0 w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center group-open:bg-primary group-open:text-primary-foreground transition-colors">
            <svg class="w-4 h-4 text-primary group-open:text-primary-foreground transition-transform group-open:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6"/>
            </svg>
          </div>
        </summary>
        <div class="px-6 pb-6 text-muted-foreground">
          <p><?php esc_html_e('No contracts, ever. You pay month-to-month and can cancel anytime with no penalties or hidden fees. We believe in earning your business every month.', 'crm-lvm'); ?></p>
        </div>
      </details>

      <!-- FAQ 2 -->
      <details class="group bg-card rounded-xl border border-border/50 overflow-hidden">
        <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
          <h3 class="font-semibold text-foreground pr-4"><?php esc_html_e('What happens if I cancel?', 'crm-lvm'); ?></h3>
          <div class="flex-shrink-0 w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center group-open:bg-primary group-open:text-primary-foreground transition-colors">
            <svg class="w-4 h-4 text-primary group-open:text-primary-foreground transition-transform group-open:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6"/>
            </svg>
          </div>
        </summary>
        <div class="px-6 pb-6 text-muted-foreground">
          <p><?php esc_html_e('If you decide to cancel, you\'ll have access until the end of your billing period. We\'ll help you export your data so you never lose your contacts or information.', 'crm-lvm'); ?></p>
        </div>
      </details>

      <!-- FAQ 3 -->
      <details class="group bg-card rounded-xl border border-border/50 overflow-hidden">
        <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
          <h3 class="font-semibold text-foreground pr-4"><?php esc_html_e('Is this a CRM?', 'crm-lvm'); ?></h3>
          <div class="flex-shrink-0 w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center group-open:bg-primary group-open:text-primary-foreground transition-colors">
            <svg class="w-4 h-4 text-primary group-open:text-primary-foreground transition-transform group-open:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6"/>
            </svg>
          </div>
        </summary>
        <div class="px-6 pb-6 text-muted-foreground">
          <p><?php esc_html_e('Yes, and so much more! It\'s a full CRM with pipelines and contact management, plus a website builder, email/SMS marketing, booking system, automation tools, and reporting — all in one platform.', 'crm-lvm'); ?></p>
        </div>
      </details>

      <!-- FAQ 4 -->
      <details class="group bg-card rounded-xl border border-border/50 overflow-hidden">
        <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
          <h3 class="font-semibold text-foreground pr-4"><?php esc_html_e('Do I need technical skills?', 'crm-lvm'); ?></h3>
          <div class="flex-shrink-0 w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center group-open:bg-primary group-open:text-primary-foreground transition-colors">
            <svg class="w-4 h-4 text-primary group-open:text-primary-foreground transition-transform group-open:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6"/>
            </svg>
          </div>
        </summary>
        <div class="px-6 pb-6 text-muted-foreground">
          <p><?php esc_html_e('Not at all. We set everything up for you, and the platform is designed to be simple and intuitive. If you can use email and social media, you can use this. Plus, our support team is always here to help.', 'crm-lvm'); ?></p>
        </div>
      </details>

      <!-- FAQ 5 -->
      <details class="group bg-card rounded-xl border border-border/50 overflow-hidden">
        <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
          <h3 class="font-semibold text-foreground pr-4"><?php esc_html_e('How long does setup take?', 'crm-lvm'); ?></h3>
          <div class="flex-shrink-0 w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center group-open:bg-primary group-open:text-primary-foreground transition-colors">
            <svg class="w-4 h-4 text-primary group-open:text-primary-foreground transition-transform group-open:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6"/>
            </svg>
          </div>
        </summary>
        <div class="px-6 pb-6 text-muted-foreground">
          <p><?php esc_html_e('Most clients are fully set up within 3-5 business days. This includes your custom website, CRM configuration, and initial automations. We handle everything so you can focus on your business.', 'crm-lvm'); ?></p>
        </div>
      </details>

      <!-- FAQ 6 -->
      <details class="group bg-card rounded-xl border border-border/50 overflow-hidden">
        <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
          <h3 class="font-semibold text-foreground pr-4"><?php esc_html_e('Can I use my own domain?', 'crm-lvm'); ?></h3>
          <div class="flex-shrink-0 w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center group-open:bg-primary group-open:text-primary-foreground transition-colors">
            <svg class="w-4 h-4 text-primary group-open:text-primary-foreground transition-transform group-open:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6"/>
            </svg>
          </div>
        </summary>
        <div class="px-6 pb-6 text-muted-foreground">
          <p><?php esc_html_e('Absolutely! You can connect your existing domain or we can help you register a new one. Your website, funnels, and booking pages will all use your custom domain for a professional, branded experience.', 'crm-lvm'); ?></p>
        </div>
      </details>

      <!-- FAQ 7 -->
      <details class="group bg-card rounded-xl border border-border/50 overflow-hidden">
        <summary class="flex items-center justify-between p-6 cursor-pointer list-none">
          <h3 class="font-semibold text-foreground pr-4"><?php esc_html_e('Why is it so affordable?', 'crm-lvm'); ?></h3>
          <div class="flex-shrink-0 w-6 h-6 rounded-full bg-primary/10 flex items-center justify-center group-open:bg-primary group-open:text-primary-foreground transition-colors">
            <svg class="w-4 h-4 text-primary group-open:text-primary-foreground transition-transform group-open:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v12m6-6H6"/>
            </svg>
          </div>
        </summary>
        <div class="px-6 pb-6 text-muted-foreground">
          <p><?php esc_html_e('We\'ve built our business to serve small businesses at scale. By focusing on what matters most and cutting out the bloat, we can offer enterprise-level tools at a price that makes sense for growing businesses.', 'crm-lvm'); ?></p>
        </div>
      </details>
    </div>

    <!-- Still have questions -->
    <div class="mt-12 text-center">
      <p class="text-muted-foreground mb-4"><?php esc_html_e('Still have questions?', 'crm-lvm'); ?></p>
      <a href="https://api.leadconnectorhq.com/widget/booking/h91OK57EebhOpeiGoWZ3" target="_blank" rel="noopener" class="inline-flex items-center gap-2 text-primary font-semibold hover:gap-3 transition-all">
        <?php esc_html_e('Book a free demo and we\'ll answer everything', 'crm-lvm'); ?>
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
        </svg>
      </a>
    </div>
  </div>
</section>
