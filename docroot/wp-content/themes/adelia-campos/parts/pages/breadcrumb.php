<section class="breadcrumb">
    <div class="container">
        <div class="main-breadcrumb">
              Você está aqui:
              <?php
              if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
              }
              ?>
        </div>
    </div>
</section>