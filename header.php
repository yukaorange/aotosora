<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,viewport-fit=cover,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <meta name="theme-color" content="#FFFFFF">
  <?php wp_head(); ?>
</head>

<body class="body">
  <?php wp_body_open(); ?>
  <header class="header" id="header">
    <div class="header__inner">
      <?php if (is_front_page()) {; ?>
        <h1 class="header__logo logo">
          <a href="<?php echo esc_url(home_url()); ?>">
            <img width="200" height="47" src="<?php echo get_template_directory_uri(); ?>/dist/images/logo/logo.png" alt="TOMORROW COMPANY">
          </a>
        </h1>
      <?php } else {; ?>
        <div class="header__logo logo">
          <a href="<?php echo esc_url(home_url()); ?>">
            <img width="200" height="47" src="<?php echo get_template_directory_uri(); ?>/dist/images/logo/logo.png" alt="TOMORROW COMPANY">
          </a>
        </div>
      <?php }; ?>
      <div class="header__buttons">
        <a href="tel:0977-80-7575" class="button-tel">
          <span class="button-tel__icon">
            <img width="25" height="25" src="<?php echo get_template_directory_uri(); ?>/dist/images/icon/icon-tel-brown.png" alt="電話発信ボタンです">
          </span>
          <span class="button-tel__text _en">tel</span>
        </a>
        <a href="<?php echo esc_url(home_url("contact")); ?>" class="button-contact">
          <span class="button-contact__icon">
            <img width="25" height="25" src="<?php echo get_template_directory_uri(); ?>/dist/images/icon/icon-mail-brown.png" alt="お問い合わせページへ">
          </span>
          <span class="button-contact__text _en">contact</span>
        </a>
        <?php
        get_template_part("template-part/component/drawer-button");
        ?>
      </div>
    </div>
  </header>
  <?php
  get_template_part("template-part//component/drawer-nav");
  ?>
  <?php
  get_template_part("template-part/common/common-loading"); ?>
  <?php
  get_template_part('template-part/common/common-movie');
  ?>
  <!-- scroll-container -->
  <div class="js-scroller">
    <!-- scroll-content -->
    <div class="js-scroller__content">