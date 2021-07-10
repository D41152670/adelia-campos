<footer>
    <div class="container">
        <div class="row align-items-start justify-content-center">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="box-footer">
                    <h3 class="title__item-footer">Contato</h3>

                    <p>(31) 3344.4455</p>
                    <p>contato@adeliacamposadv.com.br</p>
                    <p>R. Albita, 250 - Cruzeiro, Belo Horizonte/MG</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                <div class="logo-footer">
                    <a href="<?= esc_url(home_url('/')) ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer-2.png" alt="Logo Adélia Campos Advogados" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="box-footer text-right">
                    <h3 class="title__item-footer">Atendimento</h3>

                    <p>Seg – Sex:  08h– 18h</p>
                    <p>Sab:  08h - 12h</p>
                </div>
            </div>
        </div>
        <div class="social-footer">
            <ul class="social-footer__list">
                <li class=""><a href="<?= get_field('facebook', 'option') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.png" alt=""></a></li>
                <li class=""><a href="<?= get_field('linkedin', 'option') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/linkedin.png" alt=""></a></li>
                <li class=""><a href="<?= get_field('instagram', 'option') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/instagram.png" alt=""></a></li>
                <li class=""><a href="<?= get_field('youtube', 'option') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/youtube.png" alt=""></a></li>
            </ul>
        </div>
    </div>
</footer>

        <?php wp_footer() ?>
    </body>
</html>