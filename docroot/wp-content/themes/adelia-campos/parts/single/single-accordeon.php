<!-- -->
<?php
if(have_rows('adicionar_conteudo')):
  $count = 0;
  while(have_rows('adicionar_conteudo')): the_row();
    ?>
    <div id="accordion" class="main-accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <a class="main-accordion__link" data-toggle="collapse" data-target="#col<?= $count ?>" aria-expanded="true" aria-controls="collapseOne">
                        <?= get_sub_field('titulo_da_sessao') ?>
                    </a>
                </h5>
            </div>

            <div id="col<?= $count ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <?= get_sub_field('conteudo_da_sessao') ?>
                </div>
            </div>
        </div>
    </div>
  <?php
    $count++;
  endwhile;
endif;
