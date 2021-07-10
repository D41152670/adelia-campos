<?php
$argBlog = array(
  'post_type' => 'post',
  'posts_per_page'  => 10
);
//
$loopBlog = new WP_Query($argBlog);
if($loopBlog->have_posts()){
  echo "<div class='row'>";
  while($loopBlog->have_posts()) { $loopBlog->the_post();
    ?>
    <div class="col-md-6 mb-4">
      <div class="main-box main-box__blog">
        <div class="main-box__description">
          <div class="main-box__image--blog">
              <a href="<?php the_permalink(); ?>" class="">
                  <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?= get_the_title() ?>" class="img-fluid">
              </a>
          </div>
          <header>
            <h2 class="title title__red main-title__blog">
              <?php the_title() ?>
            </h2>
          </header>
          <?php the_excerpt_limit(30); ?>
        </div>
        <time class="">
          <span class="letter-cap"><?php the_time( 'l, ' ); ?></span>
          <span class="letter-cap"><?php the_time( 'F ' ); ?></span>
          <?php the_time( 'j, Y' ); ?>
        </time>
      </div>
    </div>
    <?php
  }
  echo "</div>";
}