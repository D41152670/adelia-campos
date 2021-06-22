<?php
$argsEquipe = array(
  'post_type' => 'equipe'
);
$loopEquipe = get_posts($argsEquipe);
foreach ($loopEquipe as $post): setup_postdata($post) ?>
  <a href="<?= get_the_permalink($post->ID) ?>" class="col-md-4 mb-5 main-box__link">
    <div class="main-box main-box__equipe">
      <h4 class="">Advogada</h4>
      <div class="main-box__image">
        <img src="<?= get_the_post_thumbnail_url() ?>" alt="" class="img-fluid">
      </div>
      <h3 class="">
        Adélia Campos
      </h3>
      OAB-MG 107.153
    </div>
  </a>
<?php endforeach;