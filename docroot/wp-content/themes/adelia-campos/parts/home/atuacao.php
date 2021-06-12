<section class="section section__action">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 align-self-center">
                <div class="box-title box-title__action">
                    <h2 class="title title__red title__section">Áreas de atuação</h2>
                    <h3 class="title__section--subtitle">Onde atuamos para te auxiliar.</h3>
                    <p>Auxiliamos nossos clientes na prevenção de riscos, planejamento e na defesa judicial de seus interesses. Veja as áreas do direito que atuamos:</p>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                <div class="area-atuacao">
                    <?php if(!wp_is_mobile()): ?>
                    <div class="area-atuacao__navegacao">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                            <a href="#" data-target="<?= $i ?>" class="area-atuacao__links area-atuacao__js <?php echo ($i < 1) ? "area-atuacao__links--active" : ''; ?>">
                                <div class="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-administrativo.png" alt="">
                                </div>
                                <div class="area-atuacao__links--label">
                                    Administrativo
                                </div>
                            </a>
                        <?php endfor; ?>
                    </div>
                    <?php else: ?>
                    <div class="area-atuacao__slider swiper-container">
                        <div class="swiper-wrapper">
                          <?php for ($i = 0; $i < 5; $i++): ?>
                            <div class="swiper-slide">
                                <a href="#" data-target="<?= $i ?>" class="area-atuacao__links area-atuacao__js <?php echo ($i < 1) ? "area-atuacao__links--active" : ''; ?>">
                                    <div class="">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-administrativo.png" alt="">
                                    </div>
                                    <div class="area-atuacao__links--label">
                                        Administrativo
                                    </div>
                                </a>
                            </div>
                          <?php endfor; ?>
                        </div>
                    </div>
                    <?php endif ?>

                    <?php for ($i = 0; $i < 5; $i++): ?>
                    <div id="<?= $i ?>" data-idcontent="<?= $i ?>" class="area-atuacao__content <?php echo ($i < 1) ? "area-atuacao__content--active" : ''; ?>">
                        <h4>Direito administrativo <?= $i ?></h4>
                        Direito administrativo é a área voltada para a regulamentação das atividades da Administração Pública e seus servidores.
                        <p>
                            Concursos públicos
                        </p>
                        <p>
                            Licitações e contratos
                        </p>
                        <p>
                            Direito Regulatório
                        </p>
                        <p>
                            E muito mais. Conheça
                        </p>
                        <a href="" class="btn btn__outline">
                            Converse com um especialista
                        </a>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>
</section>