<section class="section section__blog-desktop">
  <div class="container">
    <div class="box-title box-title__blog">
      <h2 class="title title__red title__section">Blog</h2>
      <h3 class="title__section--subtitle title__section--subtitle-blog">Informação e conhecimento sobre temas jurídicos</h3>
    </div>
    <?php
    $argBlogHome = array(
      'post_type' => 'post',
      'posts_per_page'  => 4
    );
    $loopBlogHome = get_posts($argBlogHome);
    ?>

    <div class="box-blog-desktop">
      <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <?php
          $count = 0;
          foreach ($loopBlogHome as $post){
            if($count < 1):
              $postPrincipal = get_the_ID();
            ?>
              <div class="card-blog card-blog__desktop">
                <div class="image-blog">
                  <img src="<?= the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                </div>

                <div class="content-card-blog">
                  <div class="category">
                    <div class="tag-category">
                      <p>Eventos</p>
                    </div>
                  </div>

                  <div class="desc-blog">
                    <h3 class="title title__red title__card-blog"><?php the_title() ?></h3>

                    <?php the_excerpt_limit(30); ?>

                    <p class="date">
                      <time class="">
                        <span class="letter-cap"><?php the_time( 'l, ' ); ?></span>
                        <span class="letter-cap"><?php the_time( 'F ' ); ?></span>
                        <?php the_time( 'j, Y' ); ?>
                      </time>
                    </p>
                  </div>
                </div>
              </div>
            <?php
            endif;
            $count++;
          }
          ?>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <?php
          foreach ($loopBlogHome as $post){
            if($postPrincipal != get_the_ID()){
              ?>
              <div class="card-blog__horizontal">
                <div class="image-blog image-blog__desktop">
                  <img src="<?php echo the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                </div>

                <div class="content-card-blog content-card-blog__desktop">
                  <div class="category">
                    <div class="tag-category tag-category__desktop">
                      <p>Eventos</p>
                    </div>
                  </div>

                  <div class="desc-blog">
                    <h3 class="title title__red title__card-blog"><?php the_title() ?></h3>
                    <p class="date">
                      <time class="">
                        <span class="letter-cap"><?php the_time( 'l, ' ); ?></span>
                        <span class="letter-cap"><?php the_time( 'F ' ); ?></span>
                        <?php the_time( 'j, Y' ); ?>
                      </time>
                    </p>
                  </div>
                </div>
              </div>
              <?php
            }
          }
          ?>
        </div>
      </div>

      <div class="btn-center btn-center__blog">
        <a class="btn btn__banner" href="<?= esc_url(home_url('blog')) ?>" role="button">Conheça nosso blog</a>
      </div>
    </div>
  </div>
</section>