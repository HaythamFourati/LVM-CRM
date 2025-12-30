import React, { useEffect, useState, useRef } from "react"
import gsap from "gsap"
import { ScrollTrigger } from "gsap/ScrollTrigger"
import { MotionPathPlugin } from "gsap/MotionPathPlugin"

gsap.registerPlugin(ScrollTrigger, MotionPathPlugin)

// Check for reduced motion preference
const prefersReducedMotion = typeof window !== 'undefined' 
  ? window.matchMedia('(prefers-reduced-motion: reduce)').matches 
  : false

// Check if mobile (under 1024px)
const isMobile = typeof window !== 'undefined' 
  ? window.innerWidth < 1024 
  : false

/**
 * React Enhancer - Adds interactivity to PHP-rendered content
 * This component enhances the static HTML with:
 * - GSAP animations (desktop only, respects reduced motion)
 * - Navbar scroll effects
 * - Reviews carousel
 * - Mobile menu toggle
 * - Form handling
 */
function Enhancer() {
  const [currentReview, setCurrentReview] = useState(0)
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false)
  const [navbarScrolled, setNavbarScrolled] = useState(false)

  const googleReviews = [
    { name: "Maria S.", text: "Lisa Singer is amazing! She helped my family navigate Medicaid planning with such care and expertise." },
    { name: "Robert K.", text: "Highly recommend! Professional, knowledgeable, and truly cares about her clients." },
    { name: "Susan T.", text: "The best elder law attorney on Long Island. Made a difficult process so much easier." },
    { name: "James P.", text: "Exceptional service. Lisa took the time to explain everything clearly." },
  ]

  // Reviews carousel auto-rotation
  useEffect(() => {
    const reviewInterval = setInterval(() => {
      setCurrentReview((prev) => (prev + 1) % googleReviews.length)
    }, 4000)
    return () => clearInterval(reviewInterval)
  }, [googleReviews.length])

  // Update reviews carousel in DOM
  useEffect(() => {
    const carouselRoot = document.getElementById('reviews-carousel-root')
    if (!carouselRoot) return

    const reviewContainer = carouselRoot.querySelector('.relative.h-16')
    if (!reviewContainer) return

    // Update the review text
    reviewContainer.innerHTML = `
      <p class="text-sm text-foreground leading-relaxed line-clamp-2">
        "${googleReviews[currentReview].text}"
      </p>
      <p class="text-xs text-muted-foreground mt-1 font-medium">— ${googleReviews[currentReview].name}</p>
    `
  }, [currentReview, googleReviews])

  // Navbar scroll effect - shrink on scroll
  useEffect(() => {
    const handleScroll = () => {
      const scrolled = window.scrollY > 80
      setNavbarScrolled(scrolled)

      const header = document.querySelector('#site-header')
      const navbar = document.querySelector('#navbar-root > div:first-child')
      const phoneLink = document.querySelector('#navbar-root a[href="tel:888-851-2272"]')

      if (header) {
        header.style.paddingTop = scrolled ? '0.5rem' : '1rem'
      }

      if (navbar) {
        if (scrolled) {
          // Compact state - wider to fit all nav items
          navbar.style.maxWidth = '900px'
          navbar.style.padding = '0.5rem 1.5rem'
          navbar.style.borderRadius = '1rem'
          navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.08)'
          navbar.classList.add('bg-white/95')
          navbar.classList.remove('bg-white/80')
        } else {
          // Full state
          navbar.style.maxWidth = '72rem'
          navbar.style.padding = '0.75rem 1.5rem'
          navbar.style.borderRadius = '1rem'
          navbar.style.boxShadow = '0 1px 3px rgba(0, 0, 0, 0.05)'
          navbar.classList.remove('bg-white/95')
          navbar.classList.add('bg-white/80')
        }
      }

      // Fade phone link on compact
      if (phoneLink) {
        phoneLink.style.opacity = scrolled ? '0' : '1'
        phoneLink.style.width = scrolled ? '0' : 'auto'
        phoneLink.style.overflow = 'hidden'
        phoneLink.style.pointerEvents = scrolled ? 'none' : 'auto'
      }
    }

    window.addEventListener('scroll', handleScroll)
    handleScroll() // Initial check
    return () => window.removeEventListener('scroll', handleScroll)
  }, [])

  // Mobile menu toggle
  useEffect(() => {
    const toggleBtn = document.getElementById('mobile-menu-toggle')
    const menuPanel = document.getElementById('mobile-menu-panel')
    const iconOpen = document.getElementById('mobile-menu-icon-open')
    const iconClose = document.getElementById('mobile-menu-icon-close')
    const servicesToggle = document.getElementById('mobile-services-toggle')
    const servicesMenu = document.getElementById('mobile-services-menu')
    
    if (!toggleBtn || !menuPanel) return

    const handleToggle = () => {
      const isOpen = !menuPanel.classList.contains('hidden')
      
      if (isOpen) {
        // Close menu
        menuPanel.classList.add('hidden')
        iconOpen?.classList.remove('hidden')
        iconClose?.classList.add('hidden')
      } else {
        // Open menu
        menuPanel.classList.remove('hidden')
        iconOpen?.classList.add('hidden')
        iconClose?.classList.remove('hidden')
      }
      
      setMobileMenuOpen(!isOpen)
    }

    const handleServicesToggle = () => {
      if (!servicesMenu) return
      const isOpen = !servicesMenu.classList.contains('hidden')
      
      if (isOpen) {
        servicesMenu.classList.add('hidden')
        servicesToggle?.querySelector('svg')?.classList.remove('rotate-180')
      } else {
        servicesMenu.classList.remove('hidden')
        servicesToggle?.querySelector('svg')?.classList.add('rotate-180')
      }
    }

    // Close menu when clicking a link
    const handleLinkClick = () => {
      menuPanel.classList.add('hidden')
      iconOpen?.classList.remove('hidden')
      iconClose?.classList.add('hidden')
      setMobileMenuOpen(false)
    }

    const menuLinks = menuPanel.querySelectorAll('a')
    menuLinks.forEach(link => link.addEventListener('click', handleLinkClick))

    toggleBtn.addEventListener('click', handleToggle)
    servicesToggle?.addEventListener('click', handleServicesToggle)
    
    return () => {
      toggleBtn.removeEventListener('click', handleToggle)
      servicesToggle?.removeEventListener('click', handleServicesToggle)
      menuLinks.forEach(link => link.removeEventListener('click', handleLinkClick))
    }
  }, [])


  // GSAP Animations - Desktop only, respects reduced motion
  useEffect(() => {
    // Skip all animations if user prefers reduced motion
    if (prefersReducedMotion) {
      // Just make everything visible immediately
      gsap.set([
        "#site-header", ".hero-content > *", ".hero-badge",
        ".service-hero-content > *", ".service-content > *",
        ".blog-hero-content > *", ".blog-card",
        ".single-post-header > *", ".single-post-image", ".single-post-content",
        "#practice-areas .max-w-xl", ".practice-card",
        "#testimonials .max-w-xl", ".testimonial-card",
        ".showcase-text-1 > *", ".showcase-text-2 > *",
        "#contact > div > *"
      ].join(', '), { opacity: 1, y: 0, x: 0, scale: 1 })
      
      // Hide image slices
      gsap.set([
        ".hero-image-slices > div",
        ".service-hero-image .hero-image-slices > div",
        ".showcase-image-1 .image-slices > div",
        ".showcase-image-2 .image-slices-2 > div"
      ].join(', '), { scaleX: 0, scaleY: 0 })
      
      return
    }

    const ctx = gsap.context(() => {
      // === ON-LOAD ANIMATIONS (both mobile and desktop) ===
      
      // Header slide in - simple, always runs
      gsap.fromTo("#site-header",
        { y: -50, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.6, ease: "power2.out" }
      )

      // Hero content simple fade in (mobile-friendly)
      if (isMobile) {
        // Mobile: Simple fade in, no text splitting
        gsap.fromTo(".hero-content > *", 
          { y: 20, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.5, stagger: 0.08, ease: "power2.out", delay: 0.2 }
        )
        
        // Simple image reveal on mobile
        gsap.set(".hero-image-slices > div", { scaleY: 0 })
        
        // Hero badge simple fade
        gsap.fromTo(".hero-badge",
          { opacity: 0 },
          { opacity: 1, duration: 0.4, delay: 0.5 }
        )

        // Service page - simple fade on mobile
        const serviceHeroContent = document.querySelector('.service-hero-content')
        if (serviceHeroContent) {
          gsap.fromTo('.service-hero-content > *',
            { y: 20, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.5, stagger: 0.08, ease: "power2.out", delay: 0.2 }
          )
          gsap.set('.service-hero-image .hero-image-slices > div', { scaleY: 0 })
        }

        // Blog page - simple fade on mobile
        const blogHeroContent = document.querySelector('.blog-hero-content')
        if (blogHeroContent) {
          gsap.fromTo('.blog-hero-content > *',
            { y: 20, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.5, stagger: 0.08, ease: "power2.out", delay: 0.2 }
          )
        }

        // Single post - simple fade on mobile
        const singlePostHeader = document.querySelector('.single-post-header')
        if (singlePostHeader) {
          gsap.fromTo('.single-post-header > *',
            { y: 20, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.5, stagger: 0.06, ease: "power2.out", delay: 0.2 }
          )
        }

        // Make all scroll-animated content visible on mobile (no scroll animations)
        gsap.set([
          ".service-content > *", ".blog-card", ".single-post-content",
          "#practice-areas .max-w-xl", "#practice-areas > div > p", ".practice-card",
          "#testimonials .max-w-xl", ".testimonial-card",
          ".showcase-text-1 > *", ".showcase-text-2 > *",
          "#contact > div > *"
        ].join(', '), { opacity: 1, y: 0, x: 0, scale: 1 })

        // Hide image slices on mobile to reveal images
        gsap.set([
          ".showcase-image-1 .image-slices > div", 
          ".showcase-image-2 .image-slices-2 > div",
          ".service-hero-image .hero-image-slices > div"
        ].join(', '), { scaleY: 0 })

        // Fix: set cards visible properly
        gsap.set([".practice-card", ".testimonial-card", ".blog-card"], { scale: 1, opacity: 1 })
        
        return // Exit early for mobile - no scroll animations
      }

      // === DESKTOP ONLY: Full animations ===

      // === LVM CRM HERO ANIMATIONS ===
      const heroHeadline = document.querySelector('.hero-headline')
      if (heroHeadline) {
        // Create master timeline for hero
        const heroTl = gsap.timeline({ defaults: { ease: "power3.out" } })

        // AI Badge - slide in from left with bounce
        heroTl.fromTo('.hero-headline',
          { opacity: 0, y: 60 },
          { opacity: 1, y: 0, duration: 0.8 },
          0
        )

        // Animate the gradient text separately for extra pop
        heroTl.fromTo('.hero-headline span span',
          { opacity: 0, scale: 0.8 },
          { opacity: 1, scale: 1, duration: 0.6, ease: "back.out(1.7)" },
          0.4
        )

        // Subheadline fade up
        heroTl.fromTo('.hero-headline + p',
          { opacity: 0, y: 30 },
          { opacity: 1, y: 0, duration: 0.6 },
          0.3
        )

        // Value props - stagger in from bottom
        heroTl.fromTo('.hero-headline ~ div:has(> span) > span',
          { opacity: 0, y: 20, scale: 0.9 },
          { opacity: 1, y: 0, scale: 1, duration: 0.4, stagger: 0.1, ease: "back.out(1.4)" },
          0.5
        )

        // Price callout - scale up
        heroTl.fromTo('.hero-headline ~ div:has(.text-5xl)',
          { opacity: 0, scale: 0.8 },
          { opacity: 1, scale: 1, duration: 0.5, ease: "back.out(1.7)" },
          0.7
        )

        // CTA buttons - slide up with stagger
        heroTl.fromTo('.hero-headline ~ div:has(a[href="#pricing"]) a',
          { opacity: 0, y: 30 },
          { opacity: 1, y: 0, duration: 0.5, stagger: 0.15 },
          0.8
        )

        // Social proof section - fade in
        heroTl.fromTo('.hero-headline ~ div:has(.flex.-space-x-3)',
          { opacity: 0, y: 20 },
          { opacity: 1, y: 0, duration: 0.6 },
          1
        )

        // Dashboard mockup - dramatic reveal
        heroTl.fromTo('.hero-image',
          { opacity: 0, x: 100, rotateY: -15 },
          { opacity: 1, x: 0, rotateY: 0, duration: 1, ease: "power2.out" },
          0.4
        )

        // Floating notification cards - pop in with delay
        heroTl.fromTo('.hero-image .absolute.-bottom-6',
          { opacity: 0, y: 40, scale: 0.8 },
          { opacity: 1, y: 0, scale: 1, duration: 0.6, ease: "back.out(1.7)" },
          1.2
        )

        heroTl.fromTo('.hero-image .absolute.-top-4',
          { opacity: 0, y: -30, scale: 0.8 },
          { opacity: 1, y: 0, scale: 1, duration: 0.6, ease: "back.out(1.7)" },
          1.4
        )
      }

      // Split text reveal animation for hero heading (legacy support)
      const textElements = document.querySelectorAll('.hero-text-reveal')
      textElements.forEach((el) => {
        const text = el.innerHTML
        let chars = ''
        let inTag = false
        let currentTag = ''
        
        for (let i = 0; i < text.length; i++) {
          const char = text[i]
          if (char === '<') {
            inTag = true
            currentTag = char
          } else if (char === '>') {
            inTag = false
            currentTag += char
            chars += currentTag
            currentTag = ''
          } else if (inTag) {
            currentTag += char
          } else if (char === ' ') {
            chars += ' '
          } else {
            chars += `<span class="char" style="display:inline-block;opacity:0;transform:translateY(50px)">${char}</span>`
          }
        }
        el.innerHTML = chars
      })

      // Animate characters
      gsap.to(".hero-heading .char", {
        opacity: 1,
        y: 0,
        duration: 0.6,
        stagger: 0.02,
        ease: "power3.out",
        delay: 0.2
      })

      // Hero content fade in
      gsap.fromTo(".hero-content > *:not(.hero-heading)", 
        { y: 30, opacity: 0 },
        { y: 0, opacity: 1, duration: 0.8, stagger: 0.12, ease: "power3.out", delay: 0.8 }
      )

      // Hero image slice reveal
      gsap.fromTo(".hero-image-slices > div",
        { scaleY: 1 },
        { scaleY: 0, transformOrigin: "top", duration: 0.7, stagger: 0.15, ease: "power3.inOut", delay: 0.5 }
      )

      // Hero badge pop in
      gsap.fromTo(".hero-badge",
        { scale: 0.8, opacity: 0, y: 20 },
        { scale: 1, opacity: 1, y: 0, duration: 0.6, ease: "back.out(1.7)", delay: 1.2 }
      )

      // Service page hero animations
      const serviceHeroContent = document.querySelector('.service-hero-content')
      if (serviceHeroContent) {
        gsap.fromTo('.service-hero-content > *',
          { y: 40, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.8, stagger: 0.1, ease: "power3.out", delay: 0.2 }
        )
      }

      const serviceHeroImage = document.querySelector('.service-hero-image')
      if (serviceHeroImage) {
        gsap.fromTo('.service-hero-image .hero-image-slices > div',
          { scaleY: 1 },
          { scaleY: 0, transformOrigin: "top", duration: 0.7, stagger: 0.15, ease: "power3.inOut", delay: 0.5 }
        )
      }

      // Blog archive animations
      const blogHeroContent = document.querySelector('.blog-hero-content')
      if (blogHeroContent) {
        gsap.fromTo('.blog-hero-content > *',
          { y: 40, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.8, stagger: 0.1, ease: "power3.out", delay: 0.2 }
        )
      }

      // Single post animations
      const singlePostHeader = document.querySelector('.single-post-header')
      if (singlePostHeader) {
        gsap.fromTo('.single-post-header > *',
          { y: 30, opacity: 0 },
          { y: 0, opacity: 1, duration: 0.7, stagger: 0.08, ease: "power3.out", delay: 0.2 }
        )
      }

      const singlePostImage = document.querySelector('.single-post-image')
      if (singlePostImage) {
        gsap.fromTo('.single-post-image',
          { scale: 1.1, opacity: 0 },
          { scale: 1, opacity: 1, duration: 1, ease: "power3.out", delay: 0.5 }
        )
      }

      // === DESKTOP SCROLL ANIMATIONS WITH BATCH ===

      // Batch practice cards
      ScrollTrigger.batch('.practice-card', {
        onEnter: (elements) => {
          gsap.fromTo(elements,
            { y: 60, opacity: 0, scale: 0.95 },
            { y: 0, opacity: 1, scale: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
          )
        },
        start: 'top 85%',
        once: true
      })

      // Batch testimonial cards
      ScrollTrigger.batch('.testimonial-card', {
        onEnter: (elements) => {
          gsap.fromTo(elements,
            { y: 60, opacity: 0, scale: 0.95 },
            { y: 0, opacity: 1, scale: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
          )
        },
        start: 'top 85%',
        once: true
      })

      // Batch blog cards
      ScrollTrigger.batch('.blog-card', {
        onEnter: (elements) => {
          gsap.fromTo(elements,
            { y: 60, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
          )
        },
        start: 'top 85%',
        once: true
      })

      // Service content - single trigger
      const serviceContent = document.querySelector('.service-content')
      if (serviceContent) {
        ScrollTrigger.create({
          trigger: '.service-content',
          start: 'top 80%',
          once: true,
          onEnter: () => {
            gsap.fromTo('.service-content > *',
              { y: 40, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, stagger: 0.05, ease: "power2.out" }
            )
          }
        })
      }

      // Single post content
      const singlePostContent = document.querySelector('.single-post-content')
      if (singlePostContent) {
        ScrollTrigger.create({
          trigger: '.single-post-content',
          start: 'top 80%',
          once: true,
          onEnter: () => {
            gsap.fromTo('.single-post-content',
              { y: 40, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, ease: "power2.out" }
            )
          }
        })
      }

      // Practice Areas section header
      const practiceSection = document.querySelector('#practice-areas')
      if (practiceSection) {
        ScrollTrigger.create({
          trigger: '#practice-areas',
          start: 'top 80%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#practice-areas .max-w-xl, #practice-areas > div > p',
              { y: 40, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
            )
          }
        })
      }

      // Testimonials section header
      const testimonialsSection = document.querySelector('#testimonials')
      if (testimonialsSection) {
        ScrollTrigger.create({
          trigger: '#testimonials',
          start: 'top 80%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#testimonials .max-w-xl, #testimonials > div > div:first-child > p',
              { y: 40, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
            )
          }
        })
      }

      // About section
      const aboutSection = document.querySelector('#about')
      if (aboutSection) {
        ScrollTrigger.create({
          trigger: '#about',
          start: 'top 70%',
          once: true,
          onEnter: () => {
            gsap.fromTo('.showcase-text-1 > *',
              { x: -60, opacity: 0 },
              { x: 0, opacity: 1, duration: 0.6, stagger: 0.05, ease: "power2.out" }
            )
            gsap.fromTo('.showcase-image-1 .image-slices > div',
              { scaleX: 1 },
              { scaleX: 0, transformOrigin: 'left', duration: 0.5, stagger: 0.1, ease: "power2.inOut" }
            )
          }
        })
      }

      // Meet Attorney section
      const attorneySection = document.querySelector('.showcase-text-2')
      if (attorneySection) {
        ScrollTrigger.create({
          trigger: '.showcase-text-2',
          start: 'top 70%',
          once: true,
          onEnter: () => {
            gsap.fromTo('.showcase-text-2 > *',
              { x: 60, opacity: 0 },
              { x: 0, opacity: 1, duration: 0.6, stagger: 0.05, ease: "power2.out" }
            )
            gsap.fromTo('.showcase-image-2 .image-slices-2 > div',
              { scaleY: 1 },
              { scaleY: 0, transformOrigin: 'bottom', duration: 0.5, stagger: 0.1, ease: "power2.inOut" }
            )
          }
        })
      }

      // Contact section
      const contactSection = document.querySelector('#contact')
      if (contactSection) {
        ScrollTrigger.create({
          trigger: '#contact',
          start: 'top 80%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#contact > div > *',
              { y: 40, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
            )
          }
        })
      }

      // === LVM CRM SECTION ANIMATIONS ===

      // Problem section - Award-winning animation with connecting lines
      const problemSection = document.querySelector('#problem')
      if (problemSection) {
        ScrollTrigger.create({
          trigger: '#problem',
          start: 'top 70%',
          once: true,
          onEnter: () => {
            const tl = gsap.timeline()
            
            // 1. Fade in header
            tl.fromTo('#problem h2, #problem .text-center > p',
              { y: 40, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
            )
            
            // 2. Problem cards slide in from left with stagger
            tl.fromTo('.problem-card',
              { x: -80, opacity: 0, scale: 0.9 },
              { 
                x: 0, 
                opacity: 1, 
                scale: 1, 
                duration: 0.5, 
                stagger: 0.12, 
                ease: "back.out(1.2)"
              },
              "-=0.3"
            )
            
            // 3. Problem dots pulse
            tl.fromTo('.problem-dot',
              { scale: 0, opacity: 0 },
              { scale: 1, opacity: 1, duration: 0.3, stagger: 0.1, ease: "back.out(2)" },
              "-=0.2"
            )
            
            // 4. Solution card slides in from right
            tl.fromTo('#solution-card',
              { x: 80, opacity: 0, scale: 0.95 },
              { x: 0, opacity: 1, scale: 1, duration: 0.7, ease: "power3.out" },
              "-=0.4"
            )
            
            // 5. Solution target dot appears
            tl.fromTo('.solution-target',
              { scale: 0, opacity: 0 },
              { scale: 1, opacity: 1, duration: 0.4, ease: "elastic.out(1, 0.5)" },
              "-=0.3"
            )
            
            // 6. Draw connecting lines (desktop only) - delayed to ensure elements are in final position
            if (window.innerWidth >= 1024) {
              // Wait for previous animations to complete before calculating positions
              tl.call(() => {
                const svg = document.getElementById('problem-lines')
                if (!svg) return
                
                const svgRect = svg.getBoundingClientRect()
                const solutionBox = document.querySelector('.solution-box')
                const solutionTarget = document.querySelector('.solution-target')
                const boxRect = solutionBox?.getBoundingClientRect()
                const targetRect = solutionTarget?.getBoundingClientRect()
                
                if (!boxRect || !targetRect) return
                
                // Connect to the left edge of the solution box (where the target dot is)
                const targetX = boxRect.left - svgRect.left
                const targetY = targetRect.top - svgRect.top + targetRect.height / 2
                
                // Draw curved lines from each problem to solution
                const problemCards = document.querySelectorAll('.problem-card')
                const lineTimeline = gsap.timeline()
                
                problemCards.forEach((card, index) => {
                  const dot = card.querySelector('.problem-dot')
                  if (!dot) return
                  
                  const dotRect = dot.getBoundingClientRect()
                  const startX = dotRect.left - svgRect.left + dotRect.width / 2
                  const startY = dotRect.top - svgRect.top + dotRect.height / 2
                  
                  // Create smooth bezier curve
                  const controlX1 = startX + (targetX - startX) * 0.4
                  const controlY1 = startY
                  const controlX2 = startX + (targetX - startX) * 0.6
                  const controlY2 = targetY
                  
                  const path = `M ${startX} ${startY} C ${controlX1} ${controlY1}, ${controlX2} ${controlY2}, ${targetX} ${targetY}`
                  
                  const line = document.getElementById(`connect-line-${index + 1}`)
                  const particle = document.getElementById(`particle-${index + 1}`)
                  
                  if (line) {
                    line.setAttribute('d', path)
                    const length = line.getTotalLength()
                    
                    // Set up line for drawing animation
                    gsap.set(line, {
                      strokeDasharray: length,
                      strokeDashoffset: length,
                      opacity: 0
                    })
                    
                    // Animate line drawing with stagger
                    lineTimeline.to(line, {
                      strokeDashoffset: 0,
                      opacity: 1,
                      duration: 0.6,
                      ease: "power2.inOut"
                    }, index * 0.15)
                    
                    // Animate particle along path
                    if (particle) {
                      gsap.set(particle, { opacity: 0 })
                      
                      // Delay particle start
                      gsap.to(particle, {
                        opacity: 1,
                        duration: 0.1,
                        delay: 0.5 + index * 0.15
                      })
                      
                      gsap.to(particle, {
                        motionPath: {
                          path: line,
                          align: line,
                          alignOrigin: [0.5, 0.5]
                        },
                        duration: 1.2,
                        ease: "power1.inOut",
                        repeat: -1,
                        repeatDelay: 0.5 + index * 0.3,
                        delay: 0.6 + index * 0.15
                      })
                    }
                  }
                })
              }, null, "+=0.1") // Small delay after solution card animation
            }
            
            // 7. Solution features stagger in
            tl.fromTo('.solution-feature',
              { x: 20, opacity: 0 },
              { x: 0, opacity: 1, duration: 0.4, stagger: 0.1, ease: "power2.out" },
              "-=0.8"
            )
            
            // 8. Price reveal with emphasis
            tl.fromTo('.solution-price',
              { y: 20, opacity: 0, scale: 0.95 },
              { y: 0, opacity: 1, scale: 1, duration: 0.5, ease: "back.out(1.5)" },
              "-=0.3"
            )
            
            // 9. Pulse animation on solution box
            tl.to('.solution-box', {
              boxShadow: '0 0 40px rgba(34, 197, 94, 0.15)',
              duration: 0.6,
              ease: "power2.inOut",
              yoyo: true,
              repeat: 1
            }, "-=0.5")
          }
        })
      }

      // Features section - cards batch animate
      const featuresSection = document.querySelector('#features')
      if (featuresSection) {
        ScrollTrigger.create({
          trigger: '#features',
          start: 'top 75%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#features h2, #features > div > p',
              { y: 40, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
            )
          }
        })

        ScrollTrigger.batch('#features .grid > div', {
          onEnter: (elements) => {
            gsap.fromTo(elements,
              { y: 60, opacity: 0, scale: 0.9 },
              { y: 0, opacity: 1, scale: 1, duration: 0.5, stagger: 0.1, ease: "back.out(1.4)" }
            )
          },
          start: 'top 85%',
          once: true
        })
      }

      // Website section - image reveal
      const websiteSection = document.querySelector('#website')
      if (websiteSection) {
        ScrollTrigger.create({
          trigger: '#website',
          start: 'top 70%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#website .lg\\:col-span-1:first-child > *',
              { x: -60, opacity: 0 },
              { x: 0, opacity: 1, duration: 0.7, stagger: 0.1, ease: "power2.out" }
            )
            gsap.fromTo('#website .lg\\:col-span-1:last-child',
              { x: 60, opacity: 0, scale: 0.95 },
              { x: 0, opacity: 1, scale: 1, duration: 0.8, ease: "power2.out", delay: 0.2 }
            )
          }
        })
      }

      // How it works - steps animate in sequence
      const howItWorksSection = document.querySelector('#how-it-works')
      if (howItWorksSection) {
        ScrollTrigger.create({
          trigger: '#how-it-works',
          start: 'top 75%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#how-it-works h2, #how-it-works > div > p',
              { y: 40, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
            )
            gsap.fromTo('#how-it-works .grid > div',
              { y: 80, opacity: 0, scale: 0.9 },
              { y: 0, opacity: 1, scale: 1, duration: 0.6, stagger: 0.2, ease: "back.out(1.4)", delay: 0.3 }
            )
          }
        })
      }

      // Pricing section - card pop in
      const pricingSection = document.querySelector('#pricing')
      if (pricingSection) {
        ScrollTrigger.create({
          trigger: '#pricing',
          start: 'top 75%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#pricing h2, #pricing > div > p',
              { y: 40, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
            )
            gsap.fromTo('#pricing .grid > div:first-child',
              { y: 60, opacity: 0, scale: 0.9, rotateY: -10 },
              { y: 0, opacity: 1, scale: 1, rotateY: 0, duration: 0.8, ease: "power2.out", delay: 0.2 }
            )
            gsap.fromTo('#pricing .grid > div:last-child',
              { y: 60, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, ease: "power2.out", delay: 0.4 }
            )
          }
        })
      }

      // Testimonials section
      const testimonialsLvm = document.querySelector('#testimonials')
      if (testimonialsLvm) {
        ScrollTrigger.create({
          trigger: '#testimonials',
          start: 'top 75%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#testimonials h2, #testimonials > div > p',
              { y: 40, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
            )
            gsap.fromTo('#testimonials .grid > div',
              { y: 60, opacity: 0, scale: 0.95 },
              { y: 0, opacity: 1, scale: 1, duration: 0.5, stagger: 0.15, ease: "power2.out", delay: 0.2 }
            )
          }
        })
      }

      // FAQ section - accordion items stagger
      const faqSection = document.querySelector('#faq')
      if (faqSection) {
        ScrollTrigger.create({
          trigger: '#faq',
          start: 'top 75%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#faq h2, #faq > div > p',
              { y: 40, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.6, stagger: 0.1, ease: "power2.out" }
            )
            gsap.fromTo('#faq details',
              { y: 30, opacity: 0 },
              { y: 0, opacity: 1, duration: 0.4, stagger: 0.08, ease: "power2.out", delay: 0.2 }
            )
          }
        })
      }

      // Final CTA section - dramatic entrance
      const ctaSection = document.querySelector('#cta')
      if (ctaSection) {
        ScrollTrigger.create({
          trigger: '#cta',
          start: 'top 80%',
          once: true,
          onEnter: () => {
            gsap.fromTo('#cta > div > *',
              { y: 50, opacity: 0, scale: 0.95 },
              { y: 0, opacity: 1, scale: 1, duration: 0.6, stagger: 0.12, ease: "power2.out" }
            )
          }
        })
      }
    })

    return () => ctx.revert()
  }, [])

  // Form handling
  useEffect(() => {
    const form = document.getElementById('contact-form')
    if (!form) return

    const handleSubmit = (e) => {
      e.preventDefault()
      const formData = new FormData(form)
      const data = Object.fromEntries(formData.entries())
      console.log('Form submitted:', data)
      // Add your form submission logic here
      alert('Thank you for your message! We will contact you soon.')
      form.reset()
    }

    form.addEventListener('submit', handleSubmit)
    return () => form.removeEventListener('submit', handleSubmit)
  }, [])

  return null // This component only enhances existing DOM, doesn't render anything
}

export default Enhancer
