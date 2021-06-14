<?php
if(wp_is_mobile()):
  get_template_part('parts/home/home-blog-mobile');
else:
  get_template_part('parts/home/home-blog-desktop');
endif;