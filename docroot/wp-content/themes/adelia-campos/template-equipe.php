<?php
/* Template name: Equipe */
get_header();
get_template_part('parts/pages/page-header');
get_template_part('parts/pages/breadcrumb')
?>
    <section class="content-institutional">
        <div class="container">
            <div class="row">
                <?php for ($i = 0; $i < 3; $i++): ?>
                <a href="" class="col-md-4 mb-5 main-box__link">
                    <div class="main-box main-box__equipe">
                        <h4 class="">Advogada</h4>
                        <div class="main-box__image">
                            <img src="<?= get_template_directory_uri() ?>/assets/images/equipe1.png" alt="" class="img-fluid">
                        </div>
                        <h3 class="">
                            Adélia Campos
                        </h3>
                        OAB-MG 107.153
                    </div>
                </a>
                <?php endfor; ?>
            </div>
        </div>
    </section>
<?php get_template_part('parts/home/contact-home') ?>
<?php get_template_part('parts/home/mapa') ?>
<?php get_footer(); ?>