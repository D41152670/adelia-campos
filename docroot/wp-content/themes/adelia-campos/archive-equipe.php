<?php
get_header();
get_template_part('parts/header/header-archive-equipe');
get_template_part('parts/pages/breadcrumb')
?>
  <section class="content-institutional">
    <div class="container">
      <div class="row">
        <?php get_template_part('parts/loop/loop-equipe') ?>
      </div>
    </div>
  </section>
<?php get_template_part('parts/home/contact-home') ?>
<?php get_template_part('parts/home/mapa') ?>
<?php get_footer(); ?>