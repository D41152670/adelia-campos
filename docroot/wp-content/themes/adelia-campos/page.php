<?php
get_header();
get_template_part('parts/pages/page-header');
get_template_part('parts/pages/breadcrumb')
?>

    <section class="content-institutional">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="box-history">
                        <h3 class="title title__red title__content">Um pouco da nossa história</h3>
                        <p>
                            O Escritório A. Campos Advogados Associados, fundado no ano de 2010 por Adélia
                            Rodrigues Campos, atualmente é referência nas áreas de Direito Administrativo, Militar, Previdenciário e
                            Trabalhista.
                        </p>
                        <p>
                            Temos como principal objetivo a defesa dos direitos dos clientes, agindo sempre de forma ética, eficiente e
                            responsável, buscando a melhor solução para cada caso.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <img src="<?= get_template_directory_uri() ?>/assets/images/escritorio.png" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="main-box">
                        <h4 class="">Visão</h4>
                        Proporcionar a compreensão clara, objetiva e simples do Direito nas suas mais diversas formas e aplicações.
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="main-box">
                        <h4 class="">Missão</h4>
                        Esclarecer e orientar as pessoas sobre seus direitos e deveres segundo a legislação vigente.
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="main-box">
                        <h4 class="">Valores</h4>
                        Acessibilidade; criatividade; diversidade; integridade, responsabilidade e serenidade.
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_template_part('parts/home/contact-home') ?>
<?php get_template_part('parts/home/mapa') ?>
<?php get_footer(); ?>