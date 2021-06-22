<section class="section section__team">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="box-title box-title__equipe">
                    <h2 class="title title__red title__section">Equipe</h2>
                    <h3 class="title title__section--subtitle">Um time diversificado e experiente.</h3>
                    <p>Nosso corpo jurídico é formado por profissionais experientes, com formação rigorosa e especializada em diversas áreas do Direito.</p>

                    <a href="#">Conheça todos  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-seta.png" alt="" class="img-fluid"></a>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <div class="slide-equipe">
                    <div class="swiper-container swiper-equipe">
                        <div class="swiper-wrapper">
                          <?php
                          $argEquipe = array(
                            'post_type' => 'equipe'
                          );
                          $loopEquipe = get_posts($argEquipe);
                          foreach ($loopEquipe as $post){ setup_postdata($post);
                          ?>
                          <div class="swiper-slide">
                              <a href="<?php the_permalink(); ?>" class="card-team">
                                  <h3 class="team-title">Advogada</h3>
                                  <img src="<?= get_the_post_thumbnail_url(); ?>" alt="" class="img-fluid team-picture" style="height: 100px">

                                  <p class="team-name"><?php the_title() ?></p>
                                  <p class="team-register"><?= get_field('registro_oab') ?></p>
                              </a>
                          </div>
                            <?php
                          }
                          wp_reset_postdata();
                          ?>
                        </div>
                    </div>

                    <div class="swiper-button-next left-arrow"></div>
                    <!-- <div class="swiper-button-prev left-arrow"></div> -->
                </div>
            </div>
        </div>
    </div>
</section>