<section class="media">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="box-title box-title__media text-center">
                    <h2 class="title title__red title__section">Mídias Sociais</h2>
                    <h3 class="title__section--subtitle">Siga e fique por dentro das nossas atualizações</h3>
                </div>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <?php
                if( wp_is_mobile() ):
                  ?>
                    <!-- -->
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous"
                            src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v11.0&appId=1136541676820634&autoLogAppEvents=1" nonce="PeGM3Lii"></script>
                    <div class="fb-page"
                         data-href="https://www.facebook.com/adeliacamposadv.acadv" data-tabs="timeline" data-width="320" data-height=""
                         data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                        <blockquote cite="https://www.facebook.com/adeliacamposadv.acadv" class="fb-xfbml-parse-ignore">
                            <a href="https://www.facebook.com/adeliacamposadv.acadv">Adélia Campos Advogados</a></blockquote></div>
                    <!-- -->
                <?php
                else:
                ?>
                    <!-- -->
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous"
                        src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v11.0&appId=1136541676820634&autoLogAppEvents=1" nonce="PeGM3Lii"></script>
                <div class="fb-page"
                     data-href="https://www.facebook.com/adeliacamposadv.acadv" data-tabs="timeline" data-width="500" data-height=""
                     data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false">
                    <blockquote cite="https://www.facebook.com/adeliacamposadv.acadv" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/adeliacamposadv.acadv">Adélia Campos Advogados</a></blockquote></div>
                <!-- -->
                <?php
                endif;
                ?>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                <a class="twitter-timeline" data-height="600" href="https://twitter.com/AdeliaCamposAdv?ref_src=twsrc%5Etfw">Tweets by AdeliaCamposAdv</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
    </div>
</section>