<?php
/**
 * Template Name: AI Call Agent
 * AI Voice Agent Feature Page - LVM CRM
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>

  <!-- ═══════════════════════════════════════════════════════════════
       1. HERO SECTION
  ════════════════════════════════════════════════════════════════ -->
  <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-28 overflow-hidden">
    <!-- Background -->
    <div class="absolute inset-0 bg-gradient-to-br from-primary/[0.04] via-transparent to-accent/[0.03]"></div>
    <div class="absolute top-20 right-0 w-[500px] h-[500px] rounded-full bg-primary/[0.04] blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-[400px] h-[400px] rounded-full bg-accent/[0.04] blur-3xl"></div>

    <div class="relative max-w-6xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
        <!-- Left: Content -->
        <div class="text-center lg:text-left">
          <!-- Badge -->
          <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
            <?php esc_html_e('AI-Powered Voice Agent', 'crm-lvm'); ?>
          </div>

          <h1 class="text-4xl sm:text-5xl lg:text-[56px] font-bold text-foreground leading-[1.1] tracking-tight mb-6">
            <?php esc_html_e('Your AI Employee That Answers Calls & Books Leads', 'crm-lvm'); ?>
            <span class="text-primary"><?php esc_html_e(' 24/7', 'crm-lvm'); ?></span>
          </h1>

          <p class="text-xl text-muted-foreground max-w-lg mx-auto lg:mx-0 mb-8 leading-relaxed">
            <?php esc_html_e('Never miss another opportunity. Let AI handle your calls while you focus on running your business.', 'crm-lvm'); ?>
          </p>

          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
            <a href="#demo" class="group inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl bg-primary text-primary-foreground font-semibold text-lg shadow-lg shadow-primary/20 hover:shadow-xl hover:shadow-primary/25 hover:-translate-y-0.5 transition-all duration-300">
              <?php esc_html_e('Try the Demo Call', 'crm-lvm'); ?>
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
              </svg>
            </a>
          </div>
        </div>

        <!-- Right: Visual -->
        <div class="relative flex justify-center items-center">
          <div class="relative w-full max-w-md">
            <!-- Main card -->
            <div class="relative bg-card rounded-3xl border border-border p-8 shadow-2xl shadow-primary/5">
              <!-- Animated pulse ring -->
              <div class="absolute -top-4 -right-4 w-20 h-20">
                <div class="absolute inset-0 rounded-full bg-primary/20 animate-ping"></div>
                <div class="relative w-full h-full rounded-full bg-primary/10 flex items-center justify-center">
                  <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                  </svg>
                </div>
              </div>

              <!-- AI avatar -->
              <div class="flex items-center gap-4 mb-6">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary to-primary/80 flex items-center justify-center shadow-lg shadow-primary/25">
                  <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                  </svg>
                </div>
                <div>
                  <p class="font-semibold text-foreground"><?php esc_html_e('AI Voice Agent', 'crm-lvm'); ?></p>
                  <p class="text-sm text-primary font-medium"><?php esc_html_e('Active — Handling calls', 'crm-lvm'); ?></p>
                </div>
              </div>

              <!-- Simulated conversation -->
              <div class="space-y-3">
                <div class="bg-secondary/50 rounded-xl p-3 text-sm text-muted-foreground">
                  <span class="text-primary font-medium"><?php esc_html_e('AI:', 'crm-lvm'); ?></span> <?php esc_html_e('"Hi! Thanks for calling. How can I help you today?"', 'crm-lvm'); ?>
                </div>
                <div class="bg-primary/5 rounded-xl p-3 text-sm text-muted-foreground">
                  <span class="text-foreground font-medium"><?php esc_html_e('Caller:', 'crm-lvm'); ?></span> <?php esc_html_e('"I\'d like to schedule an appointment."', 'crm-lvm'); ?>
                </div>
                <div class="bg-secondary/50 rounded-xl p-3 text-sm text-muted-foreground">
                  <span class="text-primary font-medium"><?php esc_html_e('AI:', 'crm-lvm'); ?></span> <?php esc_html_e('"Of course! Let me check availability for you..."', 'crm-lvm'); ?>
                </div>
              </div>

              <!-- Stats bar -->
              <div class="mt-6 pt-5 border-t border-border grid grid-cols-3 gap-4 text-center">
                <div>
                  <p class="text-2xl font-bold text-primary">24/7</p>
                  <p class="text-xs text-muted-foreground"><?php esc_html_e('Availability', 'crm-lvm'); ?></p>
                </div>
                <div>
                  <p class="text-2xl font-bold text-accent">0</p>
                  <p class="text-xs text-muted-foreground"><?php esc_html_e('Missed Calls', 'crm-lvm'); ?></p>
                </div>
                <div>
                  <p class="text-2xl font-bold text-foreground">98%</p>
                  <p class="text-xs text-muted-foreground"><?php esc_html_e('Satisfaction', 'crm-lvm'); ?></p>
                </div>
              </div>
            </div>

            <!-- Floating notification cards -->
            <div class="absolute -left-12 -top-6 bg-white rounded-xl border border-border p-3 shadow-lg animate-float hidden lg:flex items-center gap-2 z-10">
              <div class="w-8 h-8 rounded-lg bg-green-500/10 flex items-center justify-center">
                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
              </div>
              <div>
                <p class="text-xs font-medium text-foreground"><?php esc_html_e('Appointment Booked', 'crm-lvm'); ?></p>
                <p class="text-[10px] text-muted-foreground"><?php esc_html_e('Just now', 'crm-lvm'); ?></p>
              </div>
            </div>

            <div class="absolute -right-10 -bottom-10 bg-white rounded-xl border border-border p-3 shadow-lg animate-float-delayed hidden lg:flex items-center gap-2 z-10">
              <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center">
                <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
              </div>
              <div>
                <p class="text-xs font-medium text-foreground"><?php esc_html_e('Lead Captured', 'crm-lvm'); ?></p>
                <p class="text-[10px] text-muted-foreground"><?php esc_html_e('2 min ago', 'crm-lvm'); ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════════
       2. PROBLEM SECTION
  ════════════════════════════════════════════════════════════════ -->
  <section class="py-20 lg:py-28 bg-secondary/30">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-4">
          <?php esc_html_e('How Many Calls Are You Missing?', 'crm-lvm'); ?>
        </h2>
        <p class="text-lg text-muted-foreground">
          <?php esc_html_e('Most small businesses miss 30–50% of incoming calls. Every missed call is a potential customer going to your competitor.', 'crm-lvm'); ?>
        </p>
      </div>

      <div class="grid md:grid-cols-3 gap-8 mb-12">
        <!-- Problem 1 -->
        <div class="bg-card rounded-2xl p-6 border border-destructive/10">
          <div class="w-12 h-12 rounded-xl bg-destructive/10 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-destructive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <h3 class="font-semibold text-foreground mb-2"><?php esc_html_e('Staff Can\'t Answer 24/7', 'crm-lvm'); ?></h3>
          <p class="text-sm text-muted-foreground"><?php esc_html_e('After hours, weekends, holidays — calls go unanswered and customers move on.', 'crm-lvm'); ?></p>
        </div>

        <!-- Problem 2 -->
        <div class="bg-card rounded-2xl p-6 border border-destructive/10">
          <div class="w-12 h-12 rounded-xl bg-destructive/10 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-destructive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <h3 class="font-semibold text-foreground mb-2"><?php esc_html_e('Hiring Is Expensive', 'crm-lvm'); ?></h3>
          <p class="text-sm text-muted-foreground"><?php esc_html_e('A full-time receptionist costs $30,000+/year. And they still take breaks, vacations, and sick days.', 'crm-lvm'); ?></p>
        </div>

        <!-- Problem 3 -->
        <div class="bg-card rounded-2xl p-6 border border-destructive/10">
          <div class="w-12 h-12 rounded-xl bg-destructive/10 flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-destructive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/>
            </svg>
          </div>
          <h3 class="font-semibold text-foreground mb-2"><?php esc_html_e('Voicemail Rarely Converts', 'crm-lvm'); ?></h3>
          <p class="text-sm text-muted-foreground"><?php esc_html_e('80% of callers won\'t leave a voicemail. They\'ll just call the next business on the list.', 'crm-lvm'); ?></p>
        </div>
      </div>

      <!-- Transition -->
      <div class="text-center">
        <p class="text-lg font-semibold text-primary"><?php esc_html_e('That\'s where your AI Employee comes in.', 'crm-lvm'); ?></p>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════════
       3. SOLUTION SECTION
  ════════════════════════════════════════════════════════════════ -->
  <section class="py-20 lg:py-28 bg-background">
    <div class="max-w-6xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
        <!-- Left: Content -->
        <div>
          <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-accent/10 text-accent text-sm font-medium mb-6">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
            </svg>
            <?php esc_html_e('The Solution', 'crm-lvm'); ?>
          </div>

          <h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-4">
            <?php esc_html_e('Meet Your AI Voice Assistant', 'crm-lvm'); ?>
          </h2>

          <p class="text-lg text-muted-foreground mb-8">
            <?php esc_html_e('Our AI Voice Agent answers your calls like a trained receptionist and sales assistant combined. All while sounding natural and professional.', 'crm-lvm'); ?>
          </p>

          <ul class="space-y-4">
            <?php
            $capabilities = [
              ['icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z', 'text' => 'Book appointments directly into your calendar'],
              ['icon' => 'M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'text' => 'Answer common questions about your business'],
              ['icon' => 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z', 'text' => 'Capture and confirm lead details'],
              ['icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'text' => 'Handle complaints politely and professionally'],
              ['icon' => 'M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15', 'text' => 'Follow up automatically via text'],
              ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'text' => 'Guide callers toward booking a consultation'],
            ];
            foreach ($capabilities as $cap) : ?>
              <li class="flex items-start gap-3">
                <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0 mt-0.5">
                  <svg class="w-4 h-4 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo esc_attr($cap['icon']); ?>"/>
                  </svg>
                </div>
                <span class="text-foreground"><?php echo esc_html($cap['text']); ?></span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Right: Visual comparison -->
        <div class="space-y-6">
          <!-- Without AI -->
          <div class="bg-destructive/5 rounded-2xl p-6 border border-destructive/10">
            <div class="flex items-center gap-3 mb-4">
              <div class="w-10 h-10 rounded-xl bg-destructive/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-destructive" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
              </div>
              <h3 class="font-semibold text-foreground"><?php esc_html_e('Without AI Agent', 'crm-lvm'); ?></h3>
            </div>
            <ul class="space-y-2 text-sm text-muted-foreground">
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-destructive flex-shrink-0"></span>
                <?php esc_html_e('Missed calls go to voicemail', 'crm-lvm'); ?>
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-destructive flex-shrink-0"></span>
                <?php esc_html_e('Customers call your competitor', 'crm-lvm'); ?>
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-destructive flex-shrink-0"></span>
                <?php esc_html_e('Lost revenue every single day', 'crm-lvm'); ?>
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-destructive flex-shrink-0"></span>
                <?php esc_html_e('Expensive staff for phone coverage', 'crm-lvm'); ?>
              </li>
            </ul>
          </div>

          <!-- With AI -->
          <div class="bg-gradient-to-br from-primary/5 to-accent/5 rounded-2xl p-6 border border-primary/10">
            <div class="flex items-center gap-3 mb-4">
              <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                <svg class="w-5 h-5 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
              </div>
              <h3 class="font-semibold text-foreground"><?php esc_html_e('With AI Agent', 'crm-lvm'); ?></h3>
            </div>
            <ul class="space-y-2 text-sm text-muted-foreground">
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span>
                <?php esc_html_e('Every call answered instantly', 'crm-lvm'); ?>
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span>
                <?php esc_html_e('Appointments booked automatically', 'crm-lvm'); ?>
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span>
                <?php esc_html_e('Leads captured and qualified', 'crm-lvm'); ?>
              </li>
              <li class="flex items-center gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-primary flex-shrink-0"></span>
                <?php esc_html_e('Fraction of the cost of a hire', 'crm-lvm'); ?>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════════
       4. LIVE DEMO SECTION (Widget Placeholder)
  ════════════════════════════════════════════════════════════════ -->
  <section id="demo" class="py-20 lg:py-28 bg-gradient-to-b from-primary/[0.03] to-transparent">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-6">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"/>
        </svg>
        <?php esc_html_e('Live Demo', 'crm-lvm'); ?>
      </div>

      <h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-4">
        <?php esc_html_e('Try the AI Agent Yourself', 'crm-lvm'); ?>
      </h2>

      <p class="text-lg text-muted-foreground max-w-2xl mx-auto mb-10">
        <?php esc_html_e('Curious how it sounds? Start a live demo call and experience it as if you were a real customer calling your business.', 'crm-lvm'); ?>
      </p>

      <!-- AI Call Demo Widget -->
      <div class="relative bg-white rounded-3xl border border-primary/20 p-8 lg:p-12 shadow-lg shadow-primary/5 max-w-xl mx-auto">
        <div class="flex flex-col items-center gap-4 mb-6">
          <div class="w-24 h-24 rounded-full bg-primary text-white flex items-center justify-center shadow-xl shadow-primary/30 animate-pulse">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
            </svg>
          </div>
          <h3 class="text-2xl font-bold text-foreground"><?php esc_html_e('Talk to the AI Agent Now', 'crm-lvm'); ?></h3>
          <p class="text-muted-foreground"><?php esc_html_e('Tap the button below to start a live demo call.', 'crm-lvm'); ?></p>
        </div>

        <!-- GHL AI Call Widget -->
        <script 
          src="https://widgets.leadconnectorhq.com/loader.js"  
          data-resources-url="https://widgets.leadconnectorhq.com/chat-widget/loader.js" 
          data-widget-id="698ae681577219e828bc6526">
        </script>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════════
       5. BENEFITS SECTION
  ════════════════════════════════════════════════════════════════ -->
  <section class="py-20 lg:py-28 bg-background">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-4">
          <?php esc_html_e('Why Businesses Love AI Employees', 'crm-lvm'); ?>
        </h2>
        <p class="text-lg text-muted-foreground">
          <?php esc_html_e('Your AI agent works tirelessly so you don\'t have to.', 'crm-lvm'); ?>
        </p>
      </div>

      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php
        $benefits = [
          ['icon' => 'M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => '24/7 Availability', 'desc' => 'Never miss a call, day or night, weekends or holidays.'],
          ['icon' => 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z', 'title' => 'No Missed Calls', 'desc' => 'Every single call is answered and handled professionally.'],
          ['icon' => 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z', 'title' => 'Consistent Experience', 'desc' => 'Every caller gets the same professional, friendly service.'],
          ['icon' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z', 'title' => 'Saves Payroll Costs', 'desc' => 'A fraction of the cost of hiring a full-time receptionist.'],
          ['icon' => 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4', 'title' => 'Qualifies Leads', 'desc' => 'Asks the right questions and filters out tire-kickers.'],
          ['icon' => 'M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z', 'title' => 'Books Appointments', 'desc' => 'Schedules directly into your calendar in real-time.'],
          ['icon' => 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6', 'title' => 'Scales With You', 'desc' => 'Handles 1 call or 100 calls — no extra cost or effort.'],
          ['icon' => 'M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z', 'title' => 'Auto Follow-Up', 'desc' => 'Sends text follow-ups after every call automatically.'],
        ];
        foreach ($benefits as $benefit) : ?>
          <div class="bg-card rounded-2xl p-6 border border-border hover:border-primary/20 hover:shadow-lg hover:shadow-primary/5 transition-all duration-300">
            <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="<?php echo esc_attr($benefit['icon']); ?>"/>
              </svg>
            </div>
            <h3 class="font-semibold text-foreground mb-2"><?php echo esc_html($benefit['title']); ?></h3>
            <p class="text-sm text-muted-foreground"><?php echo esc_html($benefit['desc']); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════════
       6. HOW IT WORKS SECTION
  ════════════════════════════════════════════════════════════════ -->
  <section class="py-20 lg:py-28 bg-secondary/30">
    <div class="max-w-6xl mx-auto px-6">
      <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-4">
          <?php esc_html_e('How It Works', 'crm-lvm'); ?>
        </h2>
        <p class="text-lg text-muted-foreground">
          <?php esc_html_e('Done-for-you setup. No tech skills required.', 'crm-lvm'); ?>
        </p>
      </div>

      <div class="grid md:grid-cols-3 gap-8 lg:gap-12">
        <!-- Step 1 -->
        <div class="relative text-center">
          <div class="relative z-10">
            <div class="w-16 h-16 rounded-2xl bg-primary text-primary-foreground text-2xl font-bold flex items-center justify-center mx-auto mb-6 shadow-lg shadow-primary/25">
              1
            </div>
            <h3 class="text-xl font-semibold text-foreground mb-3"><?php esc_html_e('We Customize the AI', 'crm-lvm'); ?></h3>
            <p class="text-muted-foreground">
              <?php esc_html_e('We train the AI on your business, services, FAQs, and goals. It learns to speak your language.', 'crm-lvm'); ?>
            </p>
          </div>
          <div class="hidden md:block absolute top-8 left-[60%] w-[80%] h-0.5 bg-gradient-to-r from-primary/50 to-primary/20"></div>
        </div>

        <!-- Step 2 -->
        <div class="relative text-center">
          <div class="relative z-10">
            <div class="w-16 h-16 rounded-2xl bg-primary text-primary-foreground text-2xl font-bold flex items-center justify-center mx-auto mb-6 shadow-lg shadow-primary/25">
              2
            </div>
            <h3 class="text-xl font-semibold text-foreground mb-3"><?php esc_html_e('It Answers Your Calls', 'crm-lvm'); ?></h3>
            <p class="text-muted-foreground">
              <?php esc_html_e('The AI picks up every call, talks to customers naturally, and handles inquiries like a pro.', 'crm-lvm'); ?>
            </p>
          </div>
          <div class="hidden md:block absolute top-8 left-[60%] w-[80%] h-0.5 bg-gradient-to-r from-primary/50 to-primary/20"></div>
        </div>

        <!-- Step 3 -->
        <div class="relative text-center">
          <div class="relative z-10">
            <div class="w-16 h-16 rounded-2xl bg-accent text-accent-foreground text-2xl font-bold flex items-center justify-center mx-auto mb-6 shadow-lg shadow-accent/25">
              3
            </div>
            <h3 class="text-xl font-semibold text-foreground mb-3"><?php esc_html_e('It Books & Qualifies Leads', 'crm-lvm'); ?></h3>
            <p class="text-muted-foreground">
              <?php esc_html_e('Appointments get booked, leads get qualified, and you get notified. All on autopilot.', 'crm-lvm'); ?>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════════
       7. OBJECTION HANDLING SECTION
  ════════════════════════════════════════════════════════════════ -->
  <section class="py-20 lg:py-28 bg-background">
    <div class="max-w-4xl mx-auto px-6">
      <div class="text-center mb-12">
        <h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-4">
          <?php esc_html_e('"Will This Really Work For My Business?"', 'crm-lvm'); ?>
        </h2>
      </div>

      <div class="bg-gradient-to-br from-primary/5 to-accent/5 rounded-3xl p-8 lg:p-12 border border-primary/10">
        <div class="grid md:grid-cols-2 gap-8 items-center">
          <div>
            <p class="text-lg text-foreground mb-6 leading-relaxed">
              <?php esc_html_e('Our AI Employee works across many industries — from local services to professional practices.', 'crm-lvm'); ?>
            </p>
            <p class="text-lg text-foreground mb-6 leading-relaxed">
              <?php esc_html_e('It\'s trained on your business, your services, and your goals.', 'crm-lvm'); ?>
            </p>
            <p class="text-lg text-primary font-semibold">
              <?php esc_html_e('If your business receives calls, this can help you convert more of them.', 'crm-lvm'); ?>
            </p>
          </div>

          <div class="space-y-4">
            <?php
            $industries = [
              'Plumbers & HVAC',
              'Lawyers & Law Firms',
              'Dentists & Medical Offices',
              'Real Estate Agents',
              'Home Services & Contractors',
              'Salons & Spas',
              'Insurance Agencies',
              'Accounting Firms',
            ];
            foreach ($industries as $industry) : ?>
              <div class="flex items-center gap-3">
                <div class="w-6 h-6 rounded-full bg-accent/20 flex items-center justify-center flex-shrink-0">
                  <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                  </svg>
                </div>
                <span class="text-foreground font-medium"><?php echo esc_html($industry); ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ═══════════════════════════════════════════════════════════════
       8. FINAL CTA SECTION
  ════════════════════════════════════════════════════════════════ -->
  <section id="assessment" class="py-20 lg:py-28 bg-gradient-to-br from-purple-800 to-purple-900 relative overflow-hidden">
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
        <?php esc_html_e('Free AI Impact Assessment', 'crm-lvm'); ?>
      </div>

      <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white mb-6">
        <?php esc_html_e('Ready to See If This Fits Your Business?', 'crm-lvm'); ?>
      </h2>

      <p class="text-xl text-white/80 max-w-2xl mx-auto mb-8">
        <?php esc_html_e('Book a quick AI Impact Assessment and we\'ll show you exactly how this can work for you.', 'crm-lvm'); ?>
      </p>

      <!-- Trust points -->
      <div class="flex flex-wrap justify-center gap-6 mb-10 text-white/90">
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
          </svg>
          <span><?php esc_html_e('Free assessment', 'crm-lvm'); ?></span>
        </div>
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
          </svg>
          <span><?php esc_html_e('No obligation', 'crm-lvm'); ?></span>
        </div>
        <div class="flex items-center gap-2">
          <svg class="w-5 h-5 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
          </svg>
          <span><?php esc_html_e('Custom demo for your business', 'crm-lvm'); ?></span>
        </div>
      </div>

      <!-- CTAs -->
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="https://api.leadconnectorhq.com/widget/booking/h91OK57EebhOpeiGoWZ3" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-white text-primary font-semibold text-lg shadow-lg shadow-black/10 hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200">
          <?php esc_html_e('Schedule My AI Assessment', 'crm-lvm'); ?>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
          </svg>
        </a>
        <a href="#demo" class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white font-semibold text-lg hover:bg-white/20 transition-all duration-200">
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
          </svg>
          <?php esc_html_e('Try the Demo Call', 'crm-lvm'); ?>
        </a>
      </div>

      <p class="mt-8 text-sm text-white/60">
        <?php esc_html_e('Our team will walk you through exactly how the AI agent can be customized for your business.', 'crm-lvm'); ?>
      </p>
    </div>
  </section>

  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<?php get_footer(); ?>
