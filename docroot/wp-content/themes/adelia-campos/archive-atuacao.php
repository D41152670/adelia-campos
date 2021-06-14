<?php
get_header();
get_template_part('parts/pages/page-header');
get_template_part('parts/pages/breadcrumb')
?>
  <section class="content-institutional">
    <div class="container">
        <h1 class="text-center title title__red mb-4">Onde atuamos para te auxiliar</h1>
        <p class="text-center">
            Auxiliamos nossos clientes na prevenção de riscos, planejamento e na defesa <br>
            judicial de seus interesses. Veja as áreas do direito que atuamos, e <br>
            clique para saber mais sobre:
        </p>
        <div class="row">
            <?php get_template_part('parts/loop/loop-atuacao') ?>
        </div>
    </div>
  </section>
<?php get_template_part('parts/home/contact-home') ?>
<?php get_template_part('parts/home/mapa') ?>
<?php get_footer(); ?>