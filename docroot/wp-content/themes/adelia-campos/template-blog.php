<?php
/* Template name: Blog */
get_header();
get_template_part('parts/pages/page-header');
get_template_part('parts/pages/breadcrumb')
?>
  <section class="content-institutional">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <?php get_template_part('parts/loop/loop-blog') ?>
        </div>
        <div class="col-md-3">
          <?php get_sidebar() ?>
        </div>
      </div>
    </div>
  </section>
<?php get_template_part('parts/home/contact-home') ?>
<?php get_template_part('parts/home/mapa') ?>
<?php get_footer(); ?>