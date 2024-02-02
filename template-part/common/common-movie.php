<div class="common-movie js-videoPlayObserver">
  <video autoplay muted loop playsinline class="common-movie__video js-common-movie__video">
    <!-- <source src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/movie/bg.mp4" alt=""> -->
  </video>
  <div class="common-movie__movieAltImage js-common-movie__movieAltImage">
    <picture>
      <source srcset='<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/bg/bg.webp' media='(max-width: 780px)' />
      <img width="640" height="440" src="<?php echo  esc_url(get_template_directory_uri()); ?>/dist/images/bg/bg.webp" alt="">
    </picture>
  </div>
</div>