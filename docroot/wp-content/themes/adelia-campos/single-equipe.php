<?php
get_header();
get_template_part('parts/pages/page-header');
get_template_part('parts/pages/breadcrumb');
if(have_posts()):
    while (have_posts()): the_post();
    ?>
    <section class="content-institutional main-section__single">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-3">
                    <?php if(get_the_post_thumbnail_url()): ?>
                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="" class="img-fluid" style="width: 100%">
                    <?php else: ?>
                        <img src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt="" class="img-fluid" style="width: 100%">
                    <?php endif; ?>
                </div>
                <div class="col-md-9">
                    <h1 class="main-title main-title__single">
                        <?php the_title() ?>
                        <?php if(get_field('registro_oab')): ?>
                        <small><?= get_field('registro_oab') ?></small>
                        <?php endif; ?>
                    </h1>
                    <div class="main-section__single--contato">
                        <?= get_field('telefone') ?>  | <?= get_field('email') ?>
                    </div>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <h4 class="main-title mb-5">Curriculum</h4>
            <?php get_template_part('parts/single/single-accordeon'); ?>
        </div>
    </section>
    <?php
    endwhile;
endif;
get_template_part('parts/home/contact-home');
get_template_part('parts/home/mapa');
get_footer();