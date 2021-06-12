<?php
/* Template name: Equipe */
get_header();
get_template_part('parts/pages/page-header');
get_template_part('parts/pages/breadcrumb');
if(have_posts()):
  while (have_posts()): the_post();
    ?>
    <section class="content-institutional main-section__single">
      <div class="container">
          <h1 class="text-center title title__red mb-4">Onde atuamos para te auxiliar</h1>
          <p class="text-center">
            Auxiliamos nossos clientes na prevenção de riscos, planejamento e na defesa <br>
            judicial de seus interesses. Veja as áreas do direito que atuamos, e <br>
            clique para saber mais sobre:
          </p>
          <div class="row mb-5">
            <?php get_template_part('parts/loop/loop-atuacao') ?>
          </div>
          <div class="">
            <h2 class="text-center mb-4">
              <?php the_title() ?>
            </h2>
            <?php the_content(); ?>
          </div>
      </div>
    </section>
  <?php
  endwhile;
endif;
get_template_part('parts/home/contact-home');
get_template_part('parts/home/mapa');
get_footer();