<?php
/**
 * Hero Section - Landing Page
 * Sleek 2025-2026 design with 3D carousel for Maryland businesses
 */

$hero_niches = [
  ['title' => 'Plumbers', 'location' => 'Baltimore, MD', 'image' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=500&h=350&fit=crop', 'color' => 'bg-blue-600'],
  ['title' => 'Lawyers', 'location' => 'Annapolis, MD', 'image' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=500&h=350&fit=crop', 'color' => 'bg-slate-700'],
  ['title' => 'Doctors', 'location' => 'Bethesda, MD', 'image' => 'https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=500&h=350&fit=crop', 'color' => 'bg-emerald-600'],
  ['title' => 'Contractors', 'location' => 'Silver Spring, MD', 'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=500&h=350&fit=crop', 'color' => 'bg-amber-600'],
  ['title' => 'Dentists', 'location' => 'Rockville, MD', 'image' => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?w=500&h=350&fit=crop', 'color' => 'bg-cyan-600'],
  ['title' => 'Realtors', 'location' => 'Columbia, MD', 'image' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=500&h=350&fit=crop', 'color' => 'bg-rose-600'],
];
?>
<section class="relative min-h-screen overflow-hidden bg-background pt-24 pb-16 lg:pt-28 lg:pb-20">
  <!-- Subtle background elements -->
  <div class="absolute inset-0 bg-gradient-to-b from-primary/[0.02] to-transparent"></div>
  <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-primary/[0.03] to-transparent"></div>

  <div class="relative max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-8 lg:gap-16 items-center min-h-[calc(100vh-7rem)]">
      
      <!-- Left: Content -->
      <div class="text-center lg:text-left order-2 lg:order-1">
        <!-- Headline with micro-interactions -->
        <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-foreground leading-[1.1] tracking-tight mb-6">
          <span class="inline-block hero-text-line"><?php esc_html_e('Built for', 'crm-lvm'); ?> <span class="text-primary relative">Maryland<span class="absolute -bottom-1 left-0 w-full h-1 bg-primary/30 rounded-full hero-underline"></span></span></span>
          <span class="block hero-text-line" style="animation-delay: 0.1s"><?php esc_html_e('Business Owners.', 'crm-lvm'); ?></span>
        </h1>

        <!-- Subheadline -->
        <p class="text-xl sm:text-2xl text-muted-foreground max-w-lg mx-auto lg:mx-0 mb-10 leading-relaxed">
          <?php esc_html_e('One AI-powered platform. Setup and Ongoing Support Included.', 'crm-lvm'); ?>
          <span class="text-foreground font-semibold"><?php esc_html_e('$97/month', 'crm-lvm'); ?></span>
          <span class="text-accent font-semibold hero-upsell"><?php esc_html_e('+ free website', 'crm-lvm'); ?> <span class="hero-upsell-sparkle">✨</span></span>
        </p>

        <!-- CTAs -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-10">
          <a href="#pricing" class="group inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl bg-primary text-primary-foreground font-semibold text-lg shadow-lg shadow-primary/20 hover:shadow-xl hover:shadow-primary/25 hover:-translate-y-0.5 transition-all duration-300">
            <?php esc_html_e('Start Free Trial', 'crm-lvm'); ?>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
            </svg>
          </a>
          <a href="https://api.leadconnectorhq.com/widget/booking/h91OK57EebhOpeiGoWZ3" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-3 px-8 py-4 rounded-xl bg-card border border-border text-foreground font-semibold text-lg hover:bg-secondary hover:border-primary/20 transition-all duration-300">
            <?php esc_html_e('Book a Demo', 'crm-lvm'); ?>
          </a>
        </div>

        <!-- Value props - clean list -->
        <div class="space-y-3 mb-10">
          <div class="flex items-center gap-3 text-foreground/80">
            <svg class="w-5 h-5 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
            <span><?php esc_html_e('CRM, website, booking & automation included', 'crm-lvm'); ?></span>
          </div>
          <div class="flex items-center gap-3 text-foreground/80">
            <svg class="w-5 h-5 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
            <span><?php esc_html_e('AI answers calls & messages 24/7', 'crm-lvm'); ?></span>
          </div>
          <div class="flex items-center gap-3 text-foreground/80">
            <svg class="w-5 h-5 text-primary flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
            <span><?php esc_html_e('Live in 48 hours — we set it up for you', 'crm-lvm'); ?></span>
          </div>
        </div>

        <!-- Social proof - minimal -->
        <div class="flex items-center gap-4 justify-center lg:justify-start">
          <div class="flex -space-x-2">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" class="w-9 h-9 rounded-full border-2 border-background" alt="User">
            <img src="https://randomuser.me/api/portraits/women/44.jpg" class="w-9 h-9 rounded-full border-2 border-background" alt="User">
            <img src="https://randomuser.me/api/portraits/men/67.jpg" class="w-9 h-9 rounded-full border-2 border-background" alt="User">
          </div>
          <div class="text-sm text-muted-foreground">
            <span class="text-foreground font-medium"><?php esc_html_e('500+ businesses', 'crm-lvm'); ?></span> <?php esc_html_e('trust us', 'crm-lvm'); ?>
          </div>
        </div>
      </div>

      <!-- Right: 3D Carousel -->
      <div class="order-1 lg:order-2 flex justify-center items-center">
        <div id="hero-carousel" class="hero-carousel relative w-full" style="perspective: 1200px; height: 780px;">
          <!-- 3D Carousel Container -->
          <div class="hero-carousel-stage absolute inset-0 flex items-center justify-center" style="transform-style: preserve-3d;">
            <?php foreach ($hero_niches as $index => $niche) : ?>
              <div class="hero-carousel-card absolute w-[520px] rounded-3xl overflow-hidden shadow-2xl transform-gpu transition-all duration-700 ease-out"
                   data-index="<?php echo $index; ?>"
                   style="transform-style: preserve-3d;">
                <!-- Card with image -->
                <div class="relative h-[400px] <?php echo esc_attr($niche['color']); ?>">
                  <img src="<?php echo esc_url($niche['image']); ?>" 
                       alt="<?php echo esc_attr($niche['title']); ?>" 
                       class="w-full h-full object-cover mix-blend-overlay opacity-80"
                       loading="lazy">
                  <!-- Overlay gradient -->
                  <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent"></div>
                  <!-- Text on card -->
                  <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <div class="flex items-center gap-2 mb-2">
                      <svg class="w-4 h-4 text-white/70" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                      </svg>
                      <span class="text-sm text-white/70"><?php echo esc_html($niche['location']); ?></span>
                    </div>
                    <h3 class="text-2xl font-bold"><?php echo esc_html($niche['title']); ?></h3>
                    <p class="text-sm text-white/80 mt-1"><?php esc_html_e('Growing with LVM CRM', 'crm-lvm'); ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      
      <!-- Hero Carousel Script -->
      <script>
        (function() {
          const carousel = document.getElementById('hero-carousel');
          if (!carousel) return;
          
          const cards = carousel.querySelectorAll('.hero-carousel-card');
          const total = cards.length;
          let current = 0;
          let interval;
          
          function updateCarousel() {
            cards.forEach((card, i) => {
              const offset = i - current;
              
              let translateZ = 0;
              let translateY = 0;
              let rotateX = 0;
              let scale = 1;
              let opacity = 1;
              let zIndex = total - Math.abs(offset);
              
              if (offset === 0) {
                translateZ = 200;
                scale = 1;
                opacity = 1;
                zIndex = 100;
              } else if (offset === 1 || offset === -(total - 1)) {
                translateZ = -50;
                translateY = 200;
                rotateX = -45;
                scale = 0.8;
                opacity = 0.5;
                zIndex = 10;
              } else if (offset === -1 || offset === (total - 1)) {
                translateZ = -50;
                translateY = -200;
                rotateX = 45;
                scale = 0.8;
                opacity = 0.5;
                zIndex = 10;
              } else {
                translateZ = -150;
                translateY = offset > 0 ? 350 : -350;
                rotateX = offset > 0 ? -60 : 60;
                scale = 0.6;
                opacity = 0;
                zIndex = 1;
              }
              
              card.style.transform = `translateY(${translateY}px) translateZ(${translateZ}px) rotateX(${rotateX}deg) scale(${scale})`;
              card.style.opacity = opacity;
              card.style.zIndex = zIndex;
            });
          }
          
          function next() {
            current = (current + 1) % total;
            updateCarousel();
          }
          
          updateCarousel();
          interval = setInterval(next, 3000);
        })();
      </script>
    </div>
  </div>
  
  <!-- Scroll indicator -->
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 hidden lg:flex flex-col items-center gap-2 text-muted-foreground">
    <span class="text-xs uppercase tracking-widest"><?php esc_html_e('Scroll', 'crm-lvm'); ?></span>
    <div class="w-6 h-10 rounded-full border-2 border-border flex items-start justify-center p-2">
      <div class="w-1 h-2 bg-primary/60 rounded-full animate-bounce"></div>
    </div>
  </div>
</section>
