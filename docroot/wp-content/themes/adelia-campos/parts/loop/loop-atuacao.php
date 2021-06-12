<?php
$argsAtuacao = array(
  'post_type' => 'atuacao',
  'posts_per_page'  => -1
);
//
$loopAtuacao = get_posts($argsAtuacao);
foreach ($loopAtuacao as $post): setup_postdata($post);
?>
  <div class="col-md-4">
    <a href="<?= get_the_permalink() ?>" data-target="<?= $i ?>" class="area-atuacao__links">
      <div class="">
        <img src="<?= get_field('icones') ?>" alt="" width="29" class="area-atuacao__links--images" />
        <img src="<?= get_field('icones_hover') ?>" alt="" width="29" class="area-atuacao__links--images--hover" />
      </div>
      <div class="area-atuacao__links--label">
        <?= get_field('nome_curto') ?>
      </div>
    </a>
  </div>
<?php
endforeach;