<?php
/**
 * Pricing Section - Comparison Table
 * Goal: Kill objections - $97/month vs $1,612 for separate tools
 */

$features = array(
  array('CRM & Pipeline Management', '$99/monthly'),
  array('Unlimited Sales Funnels', '$297/monthly'),
  array('Website Builder', '$29/monthly'),
  array('Surveys & Forms', '$49/monthly'),
  array('Email Marketing', '$99/monthly'),
  array('2-Way SMS Marketing', '$99/monthly'),
  array('Booking & Appointments', '$29/monthly'),
  array('Workflow Automations', '$169/monthly'),
  array('Courses/Products', '$99/monthly'),
  array('Call Tracking', '$49/monthly'),
  array('Reputation Management', '$159/monthly'),
  array('Tracking & Analytics', '$299/monthly'),
  array('Communities', '$89/monthly'),
  array('Document Signing', '$47/monthly'),
  array('White-Labeled Mobile App', 'Unique to LVM'),
);
?>
<section id="pricing" class="py-20 lg:py-28 bg-background">
  <div class="max-w-5xl mx-auto px-6">
    <div class="text-center max-w-3xl mx-auto mb-12">
      <h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-4 section-header">
        <?php esc_html_e('Simple, Transparent Pricing', 'crm-lvm'); ?>
      </h2>
      <p class="text-lg text-muted-foreground">
        <?php esc_html_e('One plan. Everything included. No surprises.', 'crm-lvm'); ?>
      </p>
    </div>

    <!-- Comparison Table -->
    <div class="bg-card rounded-2xl border border-border shadow-xl overflow-hidden animate-card">
      <!-- Table Header -->
      <div class="grid grid-cols-3 bg-secondary/50 border-b border-border">
        <div class="p-4 lg:p-5">
          <span class="text-xs lg:text-sm font-bold text-foreground uppercase tracking-wide"><?php esc_html_e('Features', 'crm-lvm'); ?></span>
        </div>
        <div class="p-4 lg:p-5 text-center border-l border-border">
          <span class="text-xs lg:text-sm font-bold text-foreground uppercase tracking-wide"><?php esc_html_e('Other Tools', 'crm-lvm'); ?></span>
        </div>
        <div class="p-4 lg:p-5 text-center border-l border-border bg-primary/5">
          <span class="text-xs lg:text-sm font-bold text-primary uppercase tracking-wide"><?php esc_html_e('LVM CRM', 'crm-lvm'); ?></span>
        </div>
      </div>

      <!-- Table Rows -->
      <?php foreach ($features as $index => $feature) : $is_even = $index % 2 === 0; ?>
      <div class="grid grid-cols-3 <?php echo $is_even ? 'bg-secondary/20' : 'bg-card'; ?> border-b border-border/50">
        <div class="p-3 lg:p-4 flex items-center">
          <span class="text-xs lg:text-sm font-medium text-foreground"><?php echo esc_html($feature[0]); ?></span>
        </div>
        <div class="p-3 lg:p-4 text-center border-l border-border/50 flex items-center justify-center">
          <span class="text-xs lg:text-sm text-muted-foreground"><?php echo esc_html($feature[1]); ?></span>
        </div>
        <div class="p-3 lg:p-4 text-center border-l border-border/50 bg-primary/5 flex items-center justify-center">
          <div class="w-5 h-5 lg:w-6 lg:h-6 rounded-full bg-accent flex items-center justify-center">
            <svg class="w-3 h-3 lg:w-4 lg:h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/>
            </svg>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

      <!-- Total Row -->
      <div class="grid grid-cols-3 bg-secondary/70 border-t-2 border-border">
        <div class="p-4 lg:p-5 flex items-center">
          <span class="text-sm lg:text-base font-bold text-foreground uppercase"><?php esc_html_e('Overall Price', 'crm-lvm'); ?></span>
        </div>
        <div class="p-4 lg:p-5 text-center border-l border-border flex items-center justify-center">
          <span class="text-base lg:text-lg font-bold text-destructive"><?php esc_html_e('$1,612 per month', 'crm-lvm'); ?></span>
        </div>
        <div class="p-4 lg:p-5 text-center border-l border-border bg-primary/10 flex items-center justify-center">
          <span class="text-base lg:text-lg font-bold text-primary"><?php esc_html_e('$97 per month', 'crm-lvm'); ?></span>
        </div>
      </div>
    </div>

    <!-- Trust badges & CTA -->
    <div class="mt-10 text-center">
      <div class="flex flex-wrap justify-center gap-3 mb-8">
        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-accent/10 text-accent text-sm font-medium">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
          </svg>
          <?php esc_html_e('No setup fees', 'crm-lvm'); ?>
        </span>
        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-accent/10 text-accent text-sm font-medium">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
          </svg>
          <?php esc_html_e('Cancel anytime', 'crm-lvm'); ?>
        </span>
        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-accent/10 text-accent text-sm font-medium">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
          </svg>
          <?php esc_html_e('No contracts', 'crm-lvm'); ?>
        </span>
        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-full bg-accent/10 text-accent text-sm font-medium">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
          </svg>
          <?php esc_html_e('Done-for-you setup', 'crm-lvm'); ?>
        </span>
      </div>

      <a href="https://link.fastpaydirect.com/payment-link/6953e2cd7c45194addd4f86d" target="_blank" rel="noopener" class="inline-flex items-center justify-center px-8 py-4 rounded-xl bg-primary text-primary-foreground font-semibold text-lg shadow-lg shadow-primary/25 hover:shadow-xl hover:shadow-primary/30 hover:-translate-y-0.5 transition-all duration-200">
        <?php esc_html_e('Start for $97/month', 'crm-lvm'); ?>
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
        </svg>
      </a>

      <p class="mt-6 text-sm text-muted-foreground">
        <?php esc_html_e('Save $1,515+ every month compared to buying separate tools', 'crm-lvm'); ?>
      </p>
    </div>
  </div>
</section>
