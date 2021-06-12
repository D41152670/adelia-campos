        <footer>
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                        <div class="logo-footer">
                            <a href="<?= esc_url(home_url('/')) ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-footer.png" alt="Logo Adélia Campos Advogados" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <div class="box-footer">
                            <h3 class="title__item-footer">Contato</h3>

                            <p>(31) 3344.4455</p>
                            <p>contato@adeliacamposadv.com.br</p>
                            <p>R. Albita, 250 - Cruzeiro, Belo Horizonte/MG</p>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <div class="box-footer">
                            <h3 class="title__item-footer">Atendimento</h3>

                            <p>Seg – Sex:  08h– 18h</p>
                            <p>Sab:  08h - 12h</p>
                        </div>
                    </div>
                </div>

                <div class="social-footer">
                    <ul class="list-inline list-social">
                        <li class="list-inline-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-face.png" alt=""></a></li>
                        <li class="list-inline-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-linkedin.png" alt=""></a></li>
                        <li class="list-inline-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-insta.png" alt=""></a></li>
                        <li class="list-inline-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-youtube.png" alt=""></a></li>
                        <li class="list-inline-item"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-google.png" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </footer>


        <?php wp_footer() ?>

        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lity.js"></script>
    </body>

</html>