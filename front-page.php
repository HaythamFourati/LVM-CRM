<?php
/**
 * Front Page Template - Homepage
 * LVM CRM - $97/mo All-In-One Business Platform
 * PHP renders all content, React enhances with interactivity
 */

get_header(); ?>

<div class="min-h-screen bg-background text-foreground">
  <?php get_template_part('template-parts/header-nav'); ?>
  <?php get_template_part('template-parts/section-hero'); ?>
  <?php get_template_part('template-parts/section-problem'); ?>
  <?php get_template_part('template-parts/section-features'); ?>
  <?php get_template_part('template-parts/section-website'); ?>
  <?php get_template_part('template-parts/section-how-it-works'); ?>
  <?php get_template_part('template-parts/section-pricing'); ?>
  <?php get_template_part('template-parts/section-testimonials'); ?>
  <?php get_template_part('template-parts/section-faq'); ?>
  <?php get_template_part('template-parts/section-cta'); ?>
  <?php get_template_part('template-parts/footer-site'); ?>
</div>

<!-- React Enhancement Root -->
<div id="react-enhancer"></div>

<?php get_footer();
