<?php get_search_form() ?>

<div class="main-sidebar__container mb-4">
  <?php
  $argsAtuacao = array(
    'post_type' => 'atuacao',
    'posts_per_page'  => -1
  );
  //
  $loopAtuacao = get_posts($argsAtuacao);
  $i = 0;
  ?>
    <div class="area-atuacao__navegacao">
      <?php foreach ($loopAtuacao as $post): setup_postdata($post) ?>
          <a href="<?php the_permalink(); ?>" data-target="<?= $i ?>" class="area-atuacao__links area-atuacao__links--sidebar">
              <div class="">
                  <img src="<?= get_field('icones') ?>" alt="" width="29" class="area-atuacao__links--images" />
                  <img src="<?= get_field('icones_hover') ?>" alt="" width="29" class="area-atuacao__links--images--hover" />
              </div>
              <div class="area-atuacao__links--label">
                <?= get_field('nome_curto') ?>
              </div>
          </a>
        <?php
        $i++;
      endforeach; ?>
    </div>
</div>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) :?>
  <p class="msg-info">Gerencie seus Widgets pelo painel administrativo do Wordpress.</p>
<?php endif; ?>