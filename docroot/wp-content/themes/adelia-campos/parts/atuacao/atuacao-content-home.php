<?php
$argsAtuacao = array(
  'post_type' => 'atuacao',
  'posts_per_page'  => -1
);
//
$loopAtuacao = get_posts($argsAtuacao);
$i = 0;
foreach ($loopAtuacao as $post): setup_postdata($post); ?>
  <div id="<?= $i ?>" data-idcontent="<?= $i ?>" class="area-atuacao__content <?php echo ($i < 1) ? "area-atuacao__content--active" : ''; ?>">
    <h4><?php the_title() ?></h4>
    <?= get_field('texto_disponivel_na_home_do_site', $post->ID); ?>
    <a href="" class="btn btn__outline">
      Converse com um especialista
    </a>
  </div>
<?php
$i++;
endforeach;
