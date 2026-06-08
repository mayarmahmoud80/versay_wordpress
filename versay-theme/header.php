<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  
  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/imgs/projects_img/Black.PNG">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

  <?php wp_head(); ?>


</head>

<body <?php body_class('body-wrapper dark body-digital-agency font-heading-instrumentsans-medium'); ?> style="background-color: transparent!important;">

<div id="preloader" dir="ltr">
  <div id="container" class="container-preloader">
    <div class="logo-preloader">
      <span class="versaisa-letter">V</span>
      <span class="versaisa-letter">E</span>
      <span class="versaisa-letter">R</span>
      <span class="versaisa-letter">S</span>
      <span class="versaisa-letter">A</span>
      <span class="versaisa-letter">I</span>
      <span class="versaisa-letter">S</span>
      <span class="versaisa-letter">A</span>
    </div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
</div>

<div class="progress-wrap">
  <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
  </svg>
</div>

<div class="cursor-wrapper relative">
  <div class="cursor"></div>
  <div class="cursor-follower"></div>
</div>

<aside class="fix">
  <div class="side-info">
    <div class="side-info-content">
      <div class="offset-widget offset-header">
        <div class="offset-logo" style="display: flex; justify-content: center;">
          <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/projects_img/White_2.PNG" width="80" height="80" alt="site logo" loading="lazy">
          </a>
        </div>
        <button id="side-info-close" class="side-info-close">
          <i class="fas fa-times"></i>
        </button>
      </div>
      <div class="mobile-menu d-xl-none fix mt-2"></div>
      <div class="offset-widget-box mt-2">
        <div class="contact-meta">
          <div class="contact-item">
            <span class="icon"><i class="fa-solid fa-calendar-days"></i> </span>
            <span class="text">طوال الأسبوع على مدار الساعة</span>
          </div>
          <div class="contact-item">
            <span class="icon"><i class="fa-solid fa-envelope"></i></span>
            <span class="text"><a href="mailto:info@versaisa.net">info@versaisa.net</a></span>
          </div>
          <div class="contact-item">
            <span class="icon"><i class="fa-solid fa-phone"></i></span>
            <span class="text"><a href="tel:920031969">920031969</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</aside>
<div class="offcanvas-overlay"></div>

<header class="header-area-2 index_1" style="background-color: transparent!important;">
  <div class="header-main mx-0">
    <div class="container-fluid large ">
      <div class="header-area-2__inner d-flex flex-column">
        <div class="header__navicon">
          <button class="side-toggle"><img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/icon/icon-2.webp" alt="image" loading="lazy"></button>
        </div>
        <div class="header__logo w-100 d-flex align-items-center justify-content-between px-3 text-center align-items flex-row border_header">
          <div class="line_hr col-5">
            <hr class="my-4" style="border-top: 2px solid #fff;">
          </div>
          <a href="<?php echo home_url('/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/projects_img/White_2.PNG" width="120" height="60" class="normal-logo" alt="Site Logo" fetchpriority="high">
          </a>
          <div class="line_hr col-5">
            <hr class="my-4" style="border-top: 2px solid #fff;">
          </div>
        </div>
        <div class="button_header2 d-flex w-100">
          <div class="header__nav mx-0 pos1-center">
            <nav class="main-menu">
              <ul>
                <li class="mx-3"><a href="<?php echo home_url('/about'); ?>" style="font-size: 20px;">عن فرساي</a></li>
                <li class="mx-3"><a href="<?php echo home_url('/portfolio'); ?>" style="font-size: 20px;">مشاريعنا</a></li>
                <li class="mx-3"><a href="<?php echo home_url('/map'); ?>" style="font-size: 20px;">الخريطة العقارية</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<a id="whatsapp-btn" href="https://wa.me/966559604044?text=" target="_blank">
  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" width="38" alt="واتساب" loading="lazy">
</a>

<div id="has_smooth"></div>
<div id="smooth-wrapper">
  <div id="smooth-content">
    <main>