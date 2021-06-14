<?php
get_header();
get_template_part('parts/single/single-header');
get_template_part('parts/pages/breadcrumb');
if(have_posts()):
  while (have_posts()): the_post();
    ?>
    <section class="content-institutional main-section__single">
      <div class="container">
       <div class="row">
         <div class="col-md-10 offset-md-1">
            <h1 class="title title__red mb-5"><?php the_title() ?></h1>
            <figure class=" mb-3">
                <img src="<?= get_the_post_thumbnail_url() ?>" alt="" class="img-fluid image-single">
            </figure>
            <div class="mb-5">
                <div class="">
                    <time class="">
                        <span class="letter-cap"><?php the_time( 'l, ' ); ?></span>
                        <span class="letter-cap"><?php the_time( 'F ' ); ?></span>
                      <?php the_time( 'j, Y' ); ?>
                    </time>
                </div>
            </div>
            <?php the_content(); ?>
         </div>
       </div>
      </div>
    </section>
  <?php
  endwhile;
endif;
get_template_part('parts/home/contact-home');
get_template_part('parts/home/mapa');
get_footer();