<div class="main-tab__bg">
<?php
//if(have_rows('aba')){
    $count = 1;
    while(have_rows('aba')){ the_row();
        if($count < 2){
          $checked = "checked";
        } else {
          $checked = "";
        }
        ?>
        <input type="radio" name="tabs" id="tab<?= $count ?>" class="input-tabs" <?= $checked ?> />
        <label for="tab<?= $count ?>"><?= get_sub_field('titulo_da_aba') ?></label>
    <?php
    $count++;
    }
//}
//if(have_rows('aba')){
    $count = 1;
    while(have_rows('aba')) {
      the_row();
      ?>
        <div class="tab tab-content content<?= $count ?>">
          <?= get_sub_field('conteudo_aba') ?>
        </div>
    <?php
      $count++;
    }
//} else {
//    echo" Clique na caneta para começar adicionar abas";
//}
?>
</div>