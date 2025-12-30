<?php
/**
 * Problem → Solution Section
 * Goal: Emotional alignment - list frustrations, contrast with solution
 * Award-winning GSAP animation with connecting lines
 */
?>
<section id="problem" class="py-20 lg:py-28 bg-background overflow-hidden">
  <div class="max-w-6xl mx-auto px-6">
    <!-- Section header -->
    <div class="text-center max-w-3xl mx-auto mb-16">
      <h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-4 section-header">
        <?php esc_html_e('Stop Juggling 10 Different Tools', 'crm-lvm'); ?>
      </h2>
      <p class="text-lg text-muted-foreground">
        <?php esc_html_e('Sound familiar? You\'re not alone.', 'crm-lvm'); ?>
      </p>
    </div>

    <!-- Main content with SVG connecting lines -->
    <div class="relative">
      <!-- SVG Canvas for connecting lines (desktop only) -->
      <svg id="problem-lines" class="absolute inset-0 w-full h-full pointer-events-none hidden lg:block" style="z-index: 1;">
        <defs>
          <linearGradient id="line-gradient" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color: hsl(0 84% 60%); stop-opacity: 0.6" />
            <stop offset="50%" style="stop-color: hsl(262 83% 58%); stop-opacity: 0.8" />
            <stop offset="100%" style="stop-color: hsl(142 76% 36%); stop-opacity: 1" />
          </linearGradient>
          <filter id="glow">
            <feGaussianBlur stdDeviation="3" result="coloredBlur"/>
            <feMerge>
              <feMergeNode in="coloredBlur"/>
              <feMergeNode in="SourceGraphic"/>
            </feMerge>
          </filter>
        </defs>
        <!-- Lines will be drawn dynamically by GSAP -->
        <path id="connect-line-1" class="problem-connect-line" fill="none" stroke="url(#line-gradient)" stroke-width="2" filter="url(#glow)" />
        <path id="connect-line-2" class="problem-connect-line" fill="none" stroke="url(#line-gradient)" stroke-width="2" filter="url(#glow)" />
        <path id="connect-line-3" class="problem-connect-line" fill="none" stroke="url(#line-gradient)" stroke-width="2" filter="url(#glow)" />
        <path id="connect-line-4" class="problem-connect-line" fill="none" stroke="url(#line-gradient)" stroke-width="2" filter="url(#glow)" />
        <!-- Animated particles along lines -->
        <circle id="particle-1" class="problem-particle" r="4" fill="hsl(142 76% 36%)" filter="url(#glow)" />
        <circle id="particle-2" class="problem-particle" r="4" fill="hsl(142 76% 36%)" filter="url(#glow)" />
        <circle id="particle-3" class="problem-particle" r="4" fill="hsl(142 76% 36%)" filter="url(#glow)" />
        <circle id="particle-4" class="problem-particle" r="4" fill="hsl(142 76% 36%)" filter="url(#glow)" />
      </svg>

      <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center relative" style="z-index: 2;">
        <!-- Left: Problems -->
        <div class="space-y-5" id="problems-list">
          <div id="problem-card-1" class="problem-card flex items-start gap-4 p-5 rounded-xl bg-destructive/5 border border-destructive/10 relative">
            <div class="problem-dot absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 w-3 h-3 rounded-full bg-destructive hidden lg:block"></div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-destructive/10 flex items-center justify-center">
              <svg class="w-5 h-5 text-destructive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
              </svg>
            </div>
            <div>
              <h3 class="font-semibold text-foreground mb-1"><?php esc_html_e('"I don\'t have time to manage tech"', 'crm-lvm'); ?></h3>
              <p class="text-sm text-muted-foreground"><?php esc_html_e('Logging into 5 different platforms just to run your business is exhausting.', 'crm-lvm'); ?></p>
            </div>
          </div>

          <div id="problem-card-2" class="problem-card flex items-start gap-4 p-5 rounded-xl bg-destructive/5 border border-destructive/10 relative">
            <div class="problem-dot absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 w-3 h-3 rounded-full bg-destructive hidden lg:block"></div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-destructive/10 flex items-center justify-center">
              <svg class="w-5 h-5 text-destructive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
              </svg>
            </div>
            <div>
              <h3 class="font-semibold text-foreground mb-1"><?php esc_html_e('"Everything is too expensive"', 'crm-lvm'); ?></h3>
              <p class="text-sm text-muted-foreground"><?php esc_html_e('CRM + email + booking + website = $300-$800/month. That adds up fast.', 'crm-lvm'); ?></p>
            </div>
          </div>

          <div id="problem-card-3" class="problem-card flex items-start gap-4 p-5 rounded-xl bg-destructive/5 border border-destructive/10 relative">
            <div class="problem-dot absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 w-3 h-3 rounded-full bg-destructive hidden lg:block"></div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-destructive/10 flex items-center justify-center">
              <svg class="w-5 h-5 text-destructive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
              </svg>
            </div>
            <div>
              <h3 class="font-semibold text-foreground mb-1"><?php esc_html_e('"I just want leads and bookings"', 'crm-lvm'); ?></h3>
              <p class="text-sm text-muted-foreground"><?php esc_html_e('You didn\'t start a business to become an IT expert.', 'crm-lvm'); ?></p>
            </div>
          </div>

          <div id="problem-card-4" class="problem-card flex items-start gap-4 p-5 rounded-xl bg-destructive/5 border border-destructive/10 relative">
            <div class="problem-dot absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 w-3 h-3 rounded-full bg-destructive hidden lg:block"></div>
            <div class="flex-shrink-0 w-10 h-10 rounded-full bg-destructive/10 flex items-center justify-center">
              <svg class="w-5 h-5 text-destructive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
              </svg>
            </div>
            <div>
              <h3 class="font-semibold text-foreground mb-1"><?php esc_html_e('"I don\'t want 10 subscriptions"', 'crm-lvm'); ?></h3>
              <p class="text-sm text-muted-foreground"><?php esc_html_e('One bill. One login. One system that actually works together.', 'crm-lvm'); ?></p>
            </div>
          </div>
        </div>

        <!-- Right: Solution -->
        <div class="relative" id="solution-card">
          <!-- Connection target dot - positioned on the left border edge -->
          <div class="solution-target absolute -left-2 top-1/2 -translate-y-1/2 w-4 h-4 rounded-full bg-accent border-4 border-background shadow-lg hidden lg:block" style="z-index: 10;"></div>
          
          <div class="bg-gradient-to-br from-primary/5 to-accent/5 rounded-2xl p-8 lg:p-10 border border-primary/10 solution-box">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-accent/10 text-accent text-sm font-medium mb-6">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
              </svg>
              <?php esc_html_e('The Solution', 'crm-lvm'); ?>
            </div>

            <h3 class="text-2xl sm:text-3xl font-bold text-foreground mb-4">
              <?php esc_html_e('One Platform Instead of 7 Tools', 'crm-lvm'); ?>
            </h3>

            <p class="text-muted-foreground mb-8">
              <?php esc_html_e('Replace your entire software stack with one simple, powerful platform — fully set up and ready to go.', 'crm-lvm'); ?>
            </p>

            <ul class="space-y-4 solution-features">
              <li class="flex items-center gap-3 solution-feature">
                <div class="w-6 h-6 rounded-full bg-accent/20 flex items-center justify-center flex-shrink-0">
                  <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                  </svg>
                </div>
                <span class="text-foreground font-medium"><?php esc_html_e('Replace 5–10 tools', 'crm-lvm'); ?></span>
              </li>
              <li class="flex items-center gap-3 solution-feature">
                <div class="w-6 h-6 rounded-full bg-accent/20 flex items-center justify-center flex-shrink-0">
                  <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                  </svg>
                </div>
                <span class="text-foreground font-medium"><?php esc_html_e('One login, one bill', 'crm-lvm'); ?></span>
              </li>
              <li class="flex items-center gap-3 solution-feature">
                <div class="w-6 h-6 rounded-full bg-accent/20 flex items-center justify-center flex-shrink-0">
                  <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                  </svg>
                </div>
                <span class="text-foreground font-medium"><?php esc_html_e('Done-for-you setup', 'crm-lvm'); ?></span>
              </li>
              <li class="flex items-center gap-3 solution-feature">
                <div class="w-6 h-6 rounded-full bg-accent/20 flex items-center justify-center flex-shrink-0">
                  <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                  </svg>
                </div>
                <span class="text-foreground font-medium"><?php esc_html_e('Your brand, not a generic SaaS', 'crm-lvm'); ?></span>
              </li>
            </ul>

            <div class="mt-8 pt-6 border-t border-primary/10 solution-price">
              <div class="flex items-center gap-4">
                <div class="text-3xl font-bold text-primary">$97<span class="text-lg font-normal text-muted-foreground">/mo</span></div>
                <div class="text-sm text-muted-foreground"><?php esc_html_e('vs $500+/mo for separate tools', 'crm-lvm'); ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
