<?php
/**
 * Social Proof / Testimonials Section
 * Infinite scrolling marquee with fade edges - 2 rows, opposite directions
 */

$testimonials_row1 = [
  ['quote' => 'Finally, one system that does it all. I used to spend hours switching between apps. Now everything is in one place.', 'name' => 'James M.', 'role' => 'Business Coach', 'image' => 'https://randomuser.me/api/portraits/men/32.jpg'],
  ['quote' => 'The done-for-you setup saved me weeks of work. I was up and running in days, not months.', 'name' => 'Sarah K.', 'role' => 'Real Estate Agent', 'image' => 'https://randomuser.me/api/portraits/women/44.jpg'],
  ['quote' => '$97/month for all this? I was paying $400+ for separate tools that didn\'t even talk to each other.', 'name' => 'David R.', 'role' => 'Marketing Consultant', 'image' => 'https://randomuser.me/api/portraits/men/67.jpg'],
  ['quote' => 'The AI phone operator is a game-changer. It answers calls after hours and books appointments while I sleep.', 'name' => 'Michelle T.', 'role' => 'Salon Owner', 'image' => 'https://randomuser.me/api/portraits/women/68.jpg'],
  ['quote' => 'Their support team is incredible. Any question I have gets answered within minutes, not days.', 'name' => 'Robert L.', 'role' => 'Insurance Agent', 'image' => 'https://randomuser.me/api/portraits/men/52.jpg'],
];

$testimonials_row2 = [
  ['quote' => 'I\'ve tried every CRM out there. This is the first one my team actually uses because it\'s so simple.', 'name' => 'Amanda P.', 'role' => 'Agency Owner', 'image' => 'https://randomuser.me/api/portraits/women/65.jpg'],
  ['quote' => 'The free website they built for me looks better than the $5,000 one I paid for before.', 'name' => 'Chris B.', 'role' => 'Contractor', 'image' => 'https://randomuser.me/api/portraits/men/75.jpg'],
  ['quote' => 'Automated follow-ups have doubled my close rate. I\'m not letting leads slip through the cracks anymore.', 'name' => 'Jennifer H.', 'role' => 'Financial Advisor', 'image' => 'https://randomuser.me/api/portraits/women/42.jpg'],
  ['quote' => 'From lead capture to booking to payment - it\'s all connected. My business runs itself now.', 'name' => 'Marcus W.', 'role' => 'Fitness Coach', 'image' => 'https://randomuser.me/api/portraits/men/22.jpg'],
  ['quote' => 'Best investment I\'ve made in my business. The ROI was obvious within the first month.', 'name' => 'Lisa G.', 'role' => 'Photographer', 'image' => 'https://randomuser.me/api/portraits/women/26.jpg'],
];
?>
<section id="testimonials" class="py-20 lg:py-28 bg-secondary/30 overflow-hidden">
  <div class="max-w-6xl mx-auto px-6">
    <!-- Section header -->
    <div class="text-center max-w-3xl mx-auto mb-12">
      <!-- Badge -->
      <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-6">
        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
          <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
        </svg>
        <?php esc_html_e('Rated 4.9/5 by 500+ businesses', 'crm-lvm'); ?>
      </div>
      <h2 class="text-3xl sm:text-4xl font-bold text-foreground mb-4">
        <?php esc_html_e('Words of praise from others', 'crm-lvm'); ?>
        <span class="block"><?php esc_html_e('about our platform.', 'crm-lvm'); ?></span>
      </h2>
    </div>
  </div>

  <!-- Marquee container - full width -->
  <div class="relative">
    <!-- Fade edges - solid gradient overlay on top layer -->
    <div class="absolute left-0 top-0 bottom-0 w-24 sm:w-40 lg:w-56 z-20 pointer-events-none" style="background: linear-gradient(to right, hsl(210 20% 96%) 0%, hsl(210 20% 96% / 0.8) 50%, transparent 100%);"></div>
    <div class="absolute right-0 top-0 bottom-0 w-24 sm:w-40 lg:w-56 z-20 pointer-events-none" style="background: linear-gradient(to left, hsl(210 20% 96%) 0%, hsl(210 20% 96% / 0.8) 50%, transparent 100%);"></div>

    <!-- Row 1 - scrolls left -->
    <div class="marquee-container mb-6">
      <div class="marquee-track animate-marquee">
        <?php foreach ($testimonials_row1 as $t) : ?>
          <div class="testimonial-card flex-shrink-0 w-[340px] bg-card rounded-2xl p-6 border border-border/50 shadow-sm mx-3">
            <!-- Quote icon -->
            <div class="text-primary/20 mb-4">
              <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
              </svg>
            </div>
            <p class="text-foreground mb-6 leading-relaxed"><?php echo esc_html($t['quote']); ?></p>
            <div class="flex items-center gap-3">
              <img src="<?php echo esc_url($t['image']); ?>" alt="<?php echo esc_attr($t['name']); ?>" class="w-10 h-10 rounded-full object-cover" loading="lazy">
              <div>
                <div class="font-medium text-foreground"><?php echo esc_html($t['name']); ?></div>
                <div class="text-sm text-muted-foreground"><?php echo esc_html($t['role']); ?></div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <!-- Duplicate for seamless loop -->
        <?php foreach ($testimonials_row1 as $t) : ?>
          <div class="testimonial-card flex-shrink-0 w-[340px] bg-card rounded-2xl p-6 border border-border/50 shadow-sm mx-3">
            <div class="text-primary/20 mb-4">
              <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
              </svg>
            </div>
            <p class="text-foreground mb-6 leading-relaxed"><?php echo esc_html($t['quote']); ?></p>
            <div class="flex items-center gap-3">
              <img src="<?php echo esc_url($t['image']); ?>" alt="<?php echo esc_attr($t['name']); ?>" class="w-10 h-10 rounded-full object-cover" loading="lazy">
              <div>
                <div class="font-medium text-foreground"><?php echo esc_html($t['name']); ?></div>
                <div class="text-sm text-muted-foreground"><?php echo esc_html($t['role']); ?></div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Row 2 - scrolls right (reverse) -->
    <div class="marquee-container">
      <div class="marquee-track animate-marquee-reverse">
        <?php foreach ($testimonials_row2 as $t) : ?>
          <div class="testimonial-card flex-shrink-0 w-[340px] bg-card rounded-2xl p-6 border border-border/50 shadow-sm mx-3">
            <div class="text-primary/20 mb-4">
              <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
              </svg>
            </div>
            <p class="text-foreground mb-6 leading-relaxed"><?php echo esc_html($t['quote']); ?></p>
            <div class="flex items-center gap-3">
              <img src="<?php echo esc_url($t['image']); ?>" alt="<?php echo esc_attr($t['name']); ?>" class="w-10 h-10 rounded-full object-cover" loading="lazy">
              <div>
                <div class="font-medium text-foreground"><?php echo esc_html($t['name']); ?></div>
                <div class="text-sm text-muted-foreground"><?php echo esc_html($t['role']); ?></div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <!-- Duplicate for seamless loop -->
        <?php foreach ($testimonials_row2 as $t) : ?>
          <div class="testimonial-card flex-shrink-0 w-[340px] bg-card rounded-2xl p-6 border border-border/50 shadow-sm mx-3">
            <div class="text-primary/20 mb-4">
              <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
              </svg>
            </div>
            <p class="text-foreground mb-6 leading-relaxed"><?php echo esc_html($t['quote']); ?></p>
            <div class="flex items-center gap-3">
              <img src="<?php echo esc_url($t['image']); ?>" alt="<?php echo esc_attr($t['name']); ?>" class="w-10 h-10 rounded-full object-cover" loading="lazy">
              <div>
                <div class="font-medium text-foreground"><?php echo esc_html($t['name']); ?></div>
                <div class="text-sm text-muted-foreground"><?php echo esc_html($t['role']); ?></div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
