<?php
$argLegislacao = array(
  'post_type' => 'legislacao',
  'posts_per_page'  => 10
);
$loopLegislacao = new WP_Query($argLegislacao);
if($loopLegislacao->have_posts()){
  while($loopLegislacao->have_posts()){ $loopLegislacao->the_post();
    ?>
    <div class="main-section__legislacao">
        <a href="<?php the_permalink(); ?>" class="">
            <h4 class="main-title main-title__legislacao mb-3 mt-3"><?php the_title() ?></h4>
            <?php the_excerpt_limit(30); ?>
        </a>
    </div>
  <?php
  }
}
