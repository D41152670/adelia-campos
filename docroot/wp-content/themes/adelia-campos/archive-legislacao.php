<?php
get_header();
get_template_part('parts/pages/page-header');
get_template_part('parts/pages/breadcrumb')
?>
  <section class="content-institutional">
    <div class="container">
      <h1 class="text-center title title__red mb-4">Legislação</h1>
      <p class="text-center">
        A consulta aos textos das leis tem caráter informativo, não dispensando a conferência desse conteúdo nas <br> publicações oficiais, para a prova da existência de direitos, nos termos da legislação vigente
      </p>
      <div class="row">
          <div class="col-md-10 offset-md-1">
            <?php get_template_part('parts/loop/loop-legislacao') ?>
          </div>
      </div>
    </div>
  </section>
<?php get_template_part('parts/home/contact-home') ?>
<?php get_template_part('parts/home/mapa') ?>
<?php get_footer(); ?>