<?php
/**
 * Who Is This For Section
 * 2-column layout with 3D vertical rotating stack slider (like stacked books)
 */

$niches = [
  ['title' => 'Plumbers', 'desc' => 'HVAC & Home Services', 'image' => 'https://images.unsplash.com/photo-1621905251189-08b45d6a269e?w=400&h=300&fit=crop', 'color' => 'bg-blue-500'],
  ['title' => 'Lawyers', 'desc' => 'Law Firms & Attorneys', 'image' => 'https://images.unsplash.com/photo-1589829545856-d10d557cf95f?w=400&h=300&fit=crop', 'color' => 'bg-slate-700'],
  ['title' => 'Doctors', 'desc' => 'Medical Practices', 'image' => 'https://images.unsplash.com/photo-1631217868264-e5b90bb7e133?w=400&h=300&fit=crop', 'color' => 'bg-emerald-500'],
  ['title' => 'Salons', 'desc' => 'Beauty & Wellness', 'image' => 'https://images.unsplash.com/photo-1560066984-138dadb4c035?w=400&h=300&fit=crop', 'color' => 'bg-pink-400'],
  ['title' => 'Realtors', 'desc' => 'Real Estate Agents', 'image' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=400&h=300&fit=crop', 'color' => 'bg-amber-500'],
  ['title' => 'Auto Shops', 'desc' => 'Mechanics & Detailing', 'image' => 'https://images.unsplash.com/photo-1625047509248-ec889cbff17f?w=400&h=300&fit=crop', 'color' => 'bg-red-500'],
  ['title' => 'Restaurants', 'desc' => 'Food & Hospitality', 'image' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=400&h=300&fit=crop', 'color' => 'bg-orange-500'],
  ['title' => 'Gyms', 'desc' => 'Fitness & Training', 'image' => 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=400&h=300&fit=crop', 'color' => 'bg-violet-500'],
  ['title' => 'Dentists', 'desc' => 'Dental Practices', 'image' => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?w=400&h=300&fit=crop', 'color' => 'bg-cyan-500'],
  ['title' => 'Contractors', 'desc' => 'Construction & Trades', 'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=400&h=300&fit=crop', 'color' => 'bg-yellow-500'],
];
?>
<section id="niches" class="py-20 lg:py-28 bg-background overflow-hidden">
  <div class="max-w-6xl mx-auto px-6">
    <!-- 2-Column Layout -->
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
      <!-- Left Column - Text Content -->
      <div class="text-center lg:text-left order-2 lg:order-1">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 text-primary text-sm font-medium mb-6">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
          </svg>
          <?php esc_html_e('Built for Local Businesses', 'crm-lvm'); ?>
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-foreground mb-6">
          <?php esc_html_e('Who Is This For?', 'crm-lvm'); ?>
        </h2>
        <p class="text-lg text-muted-foreground mb-8">
          <?php esc_html_e('Perfect for small to medium business owners in Maryland and beyond. From plumbers to lawyers, doctors to contractors — if you serve customers, we\'ve got you covered.', 'crm-lvm'); ?>
        </p>
        
        <!-- Quick stats -->
        <div class="flex flex-wrap gap-6 justify-center lg:justify-start">
          <div class="text-center lg:text-left">
            <div class="text-2xl font-bold text-foreground">50+</div>
            <div class="text-sm text-muted-foreground"><?php esc_html_e('Industries', 'crm-lvm'); ?></div>
          </div>
          <div class="text-center lg:text-left">
            <div class="text-2xl font-bold text-foreground">500+</div>
            <div class="text-sm text-muted-foreground"><?php esc_html_e('Businesses', 'crm-lvm'); ?></div>
          </div>
          <div class="text-center lg:text-left">
            <div class="text-2xl font-bold text-foreground">Maryland</div>
            <div class="text-sm text-muted-foreground"><?php esc_html_e('& Beyond', 'crm-lvm'); ?></div>
          </div>
        </div>
      </div>

      <!-- Right Column - 3D Carousel Slider -->
      <div class="order-1 lg:order-2 flex justify-center">
        <div id="niche-carousel" class="niche-carousel relative w-full" style="perspective: 1000px; height: 520px;">
          <!-- 3D Carousel Container -->
          <div class="niche-carousel-stage absolute inset-0 flex items-center justify-center" style="transform-style: preserve-3d;">
            <?php foreach ($niches as $index => $niche) : ?>
              <div class="niche-carousel-card absolute w-[440px] rounded-2xl overflow-hidden shadow-2xl transform-gpu transition-all duration-700 ease-out"
                   data-index="<?php echo $index; ?>"
                   style="transform-style: preserve-3d;">
                <!-- Card with image -->
                <div class="relative h-[300px] <?php echo esc_attr($niche['color']); ?>">
                  <img src="<?php echo esc_url($niche['image']); ?>" 
                       alt="<?php echo esc_attr($niche['title']); ?>" 
                       class="w-full h-full object-cover mix-blend-overlay opacity-70"
                       loading="lazy">
                  <!-- Overlay gradient -->
                  <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                  <!-- Text on card -->
                  <div class="absolute bottom-0 left-0 right-0 p-5 text-white">
                    <h3 class="text-xl font-bold mb-1"><?php echo esc_html($niche['title']); ?></h3>
                    <p class="text-sm text-white/80"><?php echo esc_html($niche['desc']); ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          
          <!-- Navigation dots -->
          <div class="absolute -bottom-8 left-0 right-0 flex justify-center gap-2">
            <?php for ($i = 0; $i < count($niches); $i++) : ?>
              <button class="niche-dot w-2 h-2 rounded-full bg-primary/30 transition-all duration-300 hover:bg-primary/50" data-index="<?php echo $i; ?>"></button>
            <?php endfor; ?>
          </div>
        </div>
      </div>
      
      <!-- Inline script for 3D carousel -->
      <script>
        (function() {
          const carousel = document.getElementById('niche-carousel');
          if (!carousel) return;
          
          const cards = carousel.querySelectorAll('.niche-carousel-card');
          const dots = carousel.querySelectorAll('.niche-dot');
          const total = cards.length;
          let current = 0;
          let interval;
          
          function updateCarousel() {
            cards.forEach((card, i) => {
              const offset = i - current;
              const absOffset = Math.abs(offset);
              
              // Calculate position in 3D space
              let translateZ = 0;
              let translateY = 0;
              let rotateX = 0;
              let scale = 1;
              let opacity = 1;
              let zIndex = total - absOffset;
              
              if (offset === 0) {
                // Current card - front and center
                translateZ = 80;
                scale = 1;
                opacity = 1;
                zIndex = total;
              } else if (offset === 1 || offset === -(total - 1)) {
                // Next card - below and back
                translateZ = 0;
                translateY = 100;
                rotateX = -35;
                scale = 0.85;
                opacity = 0.7;
                zIndex = total - 1;
              } else if (offset === -1 || offset === (total - 1)) {
                // Previous card - above and back
                translateZ = 0;
                translateY = -100;
                rotateX = 35;
                scale = 0.85;
                opacity = 0.7;
                zIndex = total - 1;
              } else if (offset === 2 || offset === -(total - 2)) {
                // Two ahead - further below
                translateZ = -40;
                translateY = 180;
                rotateX = -50;
                scale = 0.7;
                opacity = 0.4;
                zIndex = total - 2;
              } else if (offset === -2 || offset === (total - 2)) {
                // Two behind - further above
                translateZ = -40;
                translateY = -180;
                rotateX = 50;
                scale = 0.7;
                opacity = 0.4;
                zIndex = total - 2;
              } else {
                // Hidden cards
                translateZ = -100;
                translateY = offset > 0 ? 250 : -250;
                rotateX = offset > 0 ? -60 : 60;
                scale = 0.5;
                opacity = 0;
                zIndex = 0;
              }
              
              card.style.transform = `translateY(${translateY}px) translateZ(${translateZ}px) rotateX(${rotateX}deg) scale(${scale})`;
              card.style.opacity = opacity;
              card.style.zIndex = zIndex;
            });
            
            // Update dots
            dots.forEach((dot, i) => {
              dot.classList.toggle('bg-primary', i === current);
              dot.classList.toggle('bg-primary/30', i !== current);
              dot.classList.toggle('w-4', i === current);
              dot.classList.toggle('w-2', i !== current);
            });
          }
          
          function next() {
            current = (current + 1) % total;
            updateCarousel();
          }
          
          function goTo(index) {
            current = index;
            updateCarousel();
            resetInterval();
          }
          
          function resetInterval() {
            clearInterval(interval);
            interval = setInterval(next, 3000);
          }
          
          // Click handlers for dots
          dots.forEach(dot => {
            dot.addEventListener('click', () => {
              goTo(parseInt(dot.dataset.index));
            });
          });
          
          // Initialize
          updateCarousel();
          interval = setInterval(next, 3000);
        })();
      </script>
    </div>
    
    <!-- Bottom tagline -->
    <div class="text-center mt-12 lg:mt-16">
      <p class="text-muted-foreground">
        <?php esc_html_e('...and', 'crm-lvm'); ?> <span class="font-semibold text-foreground"><?php esc_html_e('hundreds more', 'crm-lvm'); ?></span> <?php esc_html_e('industries we serve', 'crm-lvm'); ?>
      </p>
    </div>
  </div>
</section>
