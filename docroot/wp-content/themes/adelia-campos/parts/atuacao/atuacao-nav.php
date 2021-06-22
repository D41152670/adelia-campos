<?php
$argsAtuacao = array(
  'post_type' => 'atuacao',
  'posts_per_page'  => -1
);
//
$loopAtuacao = get_posts($argsAtuacao);
$i = 0;
if(!wp_is_mobile()):
  ?>
  <div class="area-atuacao__navegacao">
    <?php foreach ($loopAtuacao as $post): setup_postdata($post) ?>
      <a href="#" data-target="<?= $i ?>" class="area-atuacao__links area-atuacao__js <?php echo ($i < 1) ? "area-atuacao__links--active" : ''; ?>">
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
<?php else: ?>
  <div class="area-atuacao__slider swiper-container">
    <div class="swiper-wrapper">
      <?php foreach ($loopAtuacao as $post): setup_postdata($post) ?>
        <div class="swiper-slide">
            <a href="#" data-target="<?= $i ?>" class="area-atuacao__links area-atuacao__js <?php echo ($i < 1) ? "area-atuacao__links--active" : ''; ?>">
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
        $i++;
      endforeach;
      ?>
    </div>
  </div>
<?php endif ?>