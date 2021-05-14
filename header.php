<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ГородОк
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="expires" content="Sun, 01 Jan 2022 07:01:00 GMT">

    <?php wp_head(); ?>
    <link rel="icon" href="<? echo get_template_directory_uri() . '/assets/img/logo.png'; ?>">
    <link rel="apple-touch-icon" href="<? echo get_template_directory_uri() . '/assets/img/logo.png'; ?>">
  </head>

  <body <?php body_class(); ?>>

    <header id="is-header" class="is-header header">
      <nav id="navbar" class="is-navbar navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="/">
            <img
                src="<? the_field('system_logo_header', 'option'); ?>"
                alt="Город'ОК"
                loading="lazy"
                height="106px"
                width="auto"
            />
            <span>
              Рекламно-производственная компания
            </span>
          </a>
          <div class="is-navbar__contacts__item mob-top-phone-navbar">
            <p class="title">
              <img src="<? echo get_template_directory_uri() . '/assets/img/phone.svg'; ?>" alt="Телефон">
              <button
                  class="link drop-link"
                  type="button"
                  id="dropdownMenuButton"
                  data-mdb-toggle="dropdown"
                  aria-expanded="false"
              >
                  <? the_field('system_phone', 'option'); ?>
              </button>
            </p>
            <div class="dropdown">

            </div>
          </div>
          <button
              class="navbar-toggler"
              type="button"
              onclick="showMenu()"
              aria-expanded="false"
              aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="is-navbar__contacts ms-auto d-flex">
              <div class="is-navbar__contacts__item">
                <p class="title">
                  <img src="<? echo get_template_directory_uri() . '/assets/img/map.svg'; ?>" alt="Адрес" width="15px" height="15px">Адрес
                </p>
                <a href="<? the_field('system_address_link', 'option'); ?>" class="link" target="_blank">
                    <? the_field('system_address', 'option'); ?>
                </a>
              </div>
              <div class="is-navbar__contacts__item">
                <p class="title">
                  <img src="<? echo get_template_directory_uri() . '/assets/img/email.svg'; ?>" alt="Email" width="15px" height="15px">
                  Наша почта
                </p>
                <a href="mailto:<? the_field('system_email', 'option'); ?>" class="link">
                    <? the_field('system_email', 'option'); ?>
                </a>
              </div>
              <div class="is-navbar__contacts__item">
                <p class="title">
                  <img src="<? echo get_template_directory_uri() . '/assets/img/phone.svg'; ?>" alt="Телефон"  width="15px" height="15px">
                  Наши телефоны
                </p>
                <div class="dropdown">
                  <button
                      class="link drop-link dropdown-toggle"
                      type="button"
                      id="dropdownMenuButton"
                      data-mdb-toggle="dropdown"
                      aria-expanded="false"
                  >
                      <? the_field('system_phone', 'option'); ?>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <?php while ( have_rows('system_phones', 'option') ) : the_row(); ?>
                        <li>
                          <a class="dropdown-item" href="tel:<? the_sub_field('phone', 'option'); ?>">
                              <? the_sub_field('phone', 'option'); ?>
                          </a>
                        </li>
                      <?php endwhile; ?>
                  </ul>
                </div>
              </div>
              <div class="is-navbar__contacts__item">
                <p class="title">
                  <i class="fab fa-viber" style="color: #C23A3A;font-size: 15px;"></i>
                  Viber
                </p>
                <a href="https://viber.click/+7 (913) 353-8858" class="link" target="_blank">
                  +7 (913) 353 88 58
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="container desktop-menu-wrap">
            <?
            wp_nav_menu( array(
                'theme_location'  => 'headerDesktop',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'gorodok-menu',
                'menu_class'      => 'navbar-nav mx-auto mb-2 mb-lg-0',
                'menu_id'         => 'gorodokMenuList',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        </div>
      </nav>
      <nav id="is-navbar-mobile" class="is-navbar-mobile d-lg-none navbar navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <svg style="margin: 0 auto 1rem; display: block;" width="134" height="68" viewBox="0 0 134 68" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g filter="url(#filter0_d)">
                <path d="M113.643 48.049L113.485 47.8221L113.221 47.9071C111.839 48.3526 110.348 48.5977 108.812 48.5977C108.281 48.5977 107.758 48.5752 107.263 48.5095L107.238 48.5063H107.213H107.208C106.717 48.462 106.221 48.3745 105.719 48.2636L105.679 48.2548H105.646C98.7984 47.113 94.6407 41.0295 94.1502 33.9846V33.9519V16.4847V15.6482L93.5257 16.2047C88.6768 20.5257 85.6118 26.8449 85.6118 33.9061C85.6118 46.9111 95.9939 57.4412 108.789 57.4412C112.152 57.4412 115.357 56.7208 118.242 55.395L118.65 55.2074L118.393 54.8393L113.643 48.049ZM107.18 10.4411L106.838 10.4713V10.8147V18.931V19.3406L107.246 19.3045C107.765 19.2587 108.29 19.2145 108.812 19.2145C110.371 19.2145 111.794 19.4372 113.238 19.9263L113.252 19.931L113.266 19.9346L113.341 19.9535C114.109 20.2218 114.85 20.5326 115.544 20.9071L115.572 20.9222L115.602 20.9323L115.644 20.9465L115.687 20.9686L115.75 21.0002C116.845 21.6015 117.851 22.3353 118.748 23.2014C119.715 24.1397 120.572 25.2106 121.251 26.3683L121.275 26.4085L121.299 26.4331C122.618 28.6251 123.293 31.2847 123.293 33.8833C123.293 35.9583 122.876 37.9204 122.107 39.7265L122.026 39.919L122.146 40.0899L127.256 47.3145L127.567 47.7546L127.872 47.3098C130.48 43.499 131.989 38.8756 131.989 33.9061C131.989 20.9014 121.63 10.3711 108.812 10.3711C108.261 10.3711 107.71 10.3944 107.18 10.4411Z" fill="#212C4F" stroke="white" stroke-width="0.75"/>
                <path d="M105.623 35.6748L106.306 36.6529V35.4602V30.7733V29.5901L105.624 30.5573L103.981 32.8893L103.83 33.1042L103.98 33.3199L105.623 35.6748ZM113.073 20.4266L112.808 20.338L112.647 20.5668L107.11 28.4544L107.041 28.5514V28.6699V37.5407V37.6574L107.108 37.7535L107.199 37.886V37.9117L107.268 38.0091L108.774 40.1328L108.776 40.1354L109.81 41.6189L109.811 41.6204L119.085 54.7894L119.273 55.0566L119.564 54.9068C120.167 54.5956 121.029 54.5573 122.09 54.6837C122.927 54.7834 123.833 54.9772 124.764 55.1762C125.003 55.2274 125.244 55.2789 125.486 55.3293C126.65 55.5718 127.833 55.7868 128.867 55.765C129.902 55.7433 130.866 55.4825 131.501 54.6946L131.679 54.4738L131.515 54.2424L116.521 33.0835L120.799 27.1049L120.944 26.9034L120.815 26.6917C119.064 23.8128 116.588 21.6009 113.073 20.4266Z" fill="#B5191A" stroke="white" stroke-width="0.75"/>
                <path d="M95.0806 4.90625H94.7056V5.28125V33.9055V33.9187L94.7065 33.9319C95.2124 41.103 99.5958 46.2559 105.844 47.7366L106.305 47.846V47.3717V5.28125V4.90625H105.93H95.0806Z" fill="#B5191A" stroke="white" stroke-width="0.75"/>
                <path d="M13.2356 41.7566H13.6106V41.3816V38.3408V37.9658H13.2356H3.62402H3.24902V38.3408V56.5396V56.9146H3.62402H7.15804H7.53304V56.5396V41.7566H13.2356Z" fill="#212C4F" stroke="white" stroke-width="0.75"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.29344 56.6767H3.4668V38.1807H13.371V41.5415H7.29344V56.6767ZM3.78193 56.3795H7.02332V41.2214H13.1009V38.455H3.78193V56.3795Z" fill="#212C4F"/>
                <path d="M23.4101 57.3031C26.3575 57.3031 28.8696 56.2822 30.6461 54.5255C32.4228 52.7688 33.4418 50.298 33.4418 47.44C33.4418 44.5829 32.429 42.1011 30.6557 40.3328C28.8822 38.5643 26.3697 37.5312 23.4101 37.5312C20.4506 37.5312 17.9328 38.5642 16.1537 40.3324C14.3748 42.1004 13.356 44.5823 13.356 47.44C13.356 50.2986 14.381 52.7695 16.1633 54.526C17.9453 56.2822 20.4628 57.3031 23.4101 57.3031ZM23.3876 41.5049C26.6982 41.5049 29.0452 43.9495 29.0452 47.44C29.0452 49.1944 28.4509 50.6699 27.4585 51.7044C26.4672 52.7379 25.0588 53.3523 23.3876 53.3523C21.7164 53.3523 20.308 52.7379 19.3167 51.7044C18.3243 50.6699 17.73 49.1944 17.73 47.44C17.73 45.6737 18.3247 44.1925 19.317 43.1553C20.3083 42.1193 21.7164 41.5049 23.3876 41.5049Z" fill="#212C4F" stroke="white" stroke-width="0.75"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M23.3879 57.0886C20.5967 57.0886 18.0757 56.1284 16.2974 54.3679C14.5416 52.6304 13.5737 50.1612 13.5737 47.4405C13.5737 44.697 14.5416 42.2506 16.2974 40.4902C18.0757 38.7298 20.5742 37.7695 23.3879 37.7695C26.1791 37.7695 28.7002 38.7298 30.4785 40.4902C32.2342 42.2278 33.2022 44.697 33.2022 47.4405C33.2022 50.1612 32.2342 52.6304 30.4785 54.3679C28.7227 56.1284 26.2016 57.0886 23.3879 57.0886ZM23.3879 38.0667C17.783 38.0667 13.8664 41.9306 13.8664 47.4405C13.8664 52.9504 17.783 56.7914 23.3879 56.7914C28.9928 56.7914 32.9095 52.9504 32.9095 47.4405C32.9095 41.9306 28.9928 38.0667 23.3879 38.0667ZM23.3879 53.865C21.6322 53.865 20.0565 53.2248 18.9535 52.0588C17.8281 50.8928 17.2203 49.2467 17.2203 47.4405C17.2203 45.6115 17.8281 43.9654 18.9535 42.7994C20.079 41.6333 21.6547 40.9932 23.3879 40.9932C25.1437 40.9932 26.7194 41.6333 27.8223 42.7994C28.9478 43.9654 29.5556 45.6115 29.5556 47.4405C29.5556 49.2695 28.9478 50.8928 27.8223 52.0588C26.7194 53.2248 25.1437 53.865 23.3879 53.865ZM23.3879 41.2904C19.9215 41.2904 17.5129 43.8282 17.5129 47.4405C17.5129 51.0528 19.9215 53.5677 23.3879 53.5677C26.8544 53.5677 29.263 51.0528 29.263 47.4405C29.2855 43.8282 26.8544 41.2904 23.3879 41.2904Z" fill="#212C4F"/>
                <path d="M46.6241 39.4597L46.6241 39.4597L46.6173 39.4537C45.1849 38.1961 43.6518 37.9658 41.5978 37.9658H36.3306H35.9556V38.3408V56.5396V56.9146H36.3306H39.8646H40.2396V56.5396V50.1701H42.1381C44.3052 50.1701 45.895 49.5525 46.9943 48.4608L46.9943 48.4608L46.9973 48.4578C48.4807 46.951 48.5907 44.8512 48.5907 44.1251C48.5907 42.7548 48.1881 40.9016 46.6241 39.4597ZM41.3052 46.3565H40.2396V41.7566H41.0801C41.9132 41.7566 42.7194 41.8089 43.3536 42.2533C43.8029 42.6132 44.2166 43.1751 44.2166 44.0337C44.2166 44.716 43.9397 45.4207 43.3938 45.8636C42.7419 46.3473 41.9895 46.3565 41.3052 46.3565Z" fill="#212C4F" stroke="white" stroke-width="0.75"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M39.9995 56.6767H36.1729V38.1807H41.5977C43.6686 38.1807 45.1092 38.4093 46.4823 39.5982C48.1255 41.1071 48.3731 43.0733 48.3731 44.1021C48.3731 45.0852 48.1705 46.9371 46.8424 48.286C45.762 49.3834 44.1638 49.9322 42.1604 49.9322H40.022V56.6767H39.9995ZM36.4655 56.3795H39.7069V49.6349H42.1379C44.0738 49.6349 45.5819 49.1091 46.6173 48.0574C47.8779 46.7999 48.058 45.0395 48.058 44.1021C48.058 43.119 47.8329 41.2443 46.2572 39.8268C44.9741 38.6836 43.6236 38.4779 41.5752 38.4779H36.4655V56.3795ZM41.3051 46.8914H39.7294V41.2443H41.1025C42.0029 41.2443 42.9483 41.3129 43.6911 41.8387C44.3889 42.3874 44.749 43.1419 44.749 44.0335C44.749 44.9252 44.3664 45.7711 43.7136 46.2741C42.9032 46.8914 41.9578 46.8914 41.3051 46.8914ZM39.9995 46.5942H41.2825C41.9578 46.5942 42.7907 46.5942 43.511 46.0455C44.0963 45.5882 44.4339 44.8337 44.4339 44.0335C44.4339 43.2333 44.1188 42.5703 43.4885 42.0902C42.7682 41.5872 41.8678 41.5415 41.08 41.5415H39.9995V46.5942Z" fill="#212C4F"/>
                <path d="M59.6069 37.5312H59.6054C56.6568 37.5312 54.1445 38.5645 52.3684 40.3326C50.5925 42.1005 49.5737 44.5823 49.5737 47.44C49.5737 50.2974 50.5866 52.7683 52.3607 54.5253C54.1347 56.2823 56.6471 57.3031 59.6054 57.3031C62.5636 57.3031 65.0813 56.2824 66.8609 54.5258C68.6405 52.769 69.6595 50.298 69.6595 47.44C69.6595 44.5821 68.6406 42.1059 66.8616 40.3407C65.0826 38.5757 62.5653 37.543 59.6069 37.5312ZM59.6279 41.5049C62.9385 41.5049 65.2855 43.9495 65.2855 47.44C65.2855 49.1944 64.6912 50.6699 63.6988 51.7044C62.7074 52.7379 61.2991 53.3523 59.6279 53.3523C57.9567 53.3523 56.5483 52.7379 55.557 51.7044C54.5646 50.6699 53.9703 49.1944 53.9703 47.44C53.9703 45.6737 54.5649 44.1925 55.5573 43.1553C56.5486 42.1193 57.9567 41.5049 59.6279 41.5049Z" fill="#212C4F" stroke="white" stroke-width="0.75"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M59.6282 57.0886C56.837 57.0886 54.3159 56.1284 52.5376 54.3679C50.7819 52.6304 49.814 50.1612 49.814 47.4405C49.814 44.697 50.7819 42.2506 52.5376 40.4902C54.3159 38.7298 56.8145 37.7695 59.6282 37.7695C62.4194 37.7695 64.9404 38.7298 66.7187 40.4902C68.4745 42.2278 69.4424 44.697 69.4424 47.4405C69.4424 50.1612 68.4745 52.6304 66.7187 54.3679C64.9404 56.1284 62.4194 57.0886 59.6282 57.0886ZM59.6282 38.0667C54.0233 38.0667 50.1066 41.9306 50.1066 47.4405C50.1066 52.9504 54.0233 56.7914 59.6282 56.7914C65.2331 56.7914 69.1498 52.9504 69.1498 47.4405C69.1498 41.9306 65.2331 38.0667 59.6282 38.0667ZM59.6282 53.865C57.8724 53.865 56.2967 53.2248 55.1938 52.0588C54.0683 50.8928 53.4605 49.2467 53.4605 47.4405C53.4605 45.6115 54.0683 43.9654 55.1938 42.7994C56.3193 41.6333 57.8949 40.9932 59.6282 40.9932C61.3839 40.9932 62.9596 41.6333 64.0626 42.7994C65.1881 43.9654 65.7958 45.6115 65.7958 47.4405C65.7958 49.2695 65.1881 50.8928 64.0626 52.0588C62.9596 53.2248 61.3839 53.865 59.6282 53.865ZM59.6282 41.2904C56.1617 41.2904 53.7532 43.8282 53.7532 47.4405C53.7532 51.0528 56.1617 53.5677 59.6282 53.5677C63.0947 53.5677 65.5032 51.0528 65.5032 47.4405C65.5032 43.8282 63.0947 41.2904 59.6282 41.2904Z" fill="#212C4F"/>
                <path d="M80.212 38.4527L80.1174 38.2178H79.8642H77.073H76.8172L76.7238 38.4559L71.0097 53.0329H69.9824H69.6074V53.4079V56.5401V56.9151H69.9824H87.2249H87.5999V56.5401V53.4079V53.0329H87.2249H86.0825L80.212 38.4527ZM81.3514 52.9414H75.5562L78.5674 45.4203L81.3514 52.9414Z" fill="#212C4F" stroke="white" stroke-width="0.75"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M87.3597 56.6771H69.8247V53.2477H71.1528L76.9603 38.4326H79.9541L85.9191 53.2477H87.3372V56.6771H87.3597ZM70.1173 56.3799H87.0446V53.5449H85.7165L79.7515 38.7298H77.1403L71.3554 53.5449H70.1173V56.3799ZM82.115 53.4535H74.7993L78.6035 43.9426L82.115 53.4535ZM75.227 53.1563H81.6873L78.581 44.7656L75.227 53.1563Z" fill="#212C4F"/>
              </g>
              <defs>
                <filter id="filter0_d" x="-7.12598" y="-5.46875" width="149.49" height="73.2849" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                  <feOffset/>
                  <feGaussianBlur stdDeviation="5"/>
                  <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 0.25 0"/>
                  <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape"/>
                </filter>
              </defs>
            </svg>

            <span>
              Рекламно-производственная компания
            </span>
          </a>
          <div class="container desktop-menu-wrap">
            <div class="">

                <?
                wp_nav_menu( array(
                    'theme_location'  => 'headerMobile',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => '',
                    'container_id'    => 'gorodok-mobile-menu',
                    'menu_class'      => 'navbar-nav mx-auto mb-2 mb-lg-0',
                    'menu_id'         => 'gorodokMobileMenuList',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
            </div>
          </div>
          <div class="is-navbar-mobile__divider"></div>
          <div class="is-navbar-mobile__contacts-wrapper" id="">
            <div class="is-navbar__contacts is-navbar-mobile__contacts ms-auto d-flex">
              <div class="is-navbar__contacts__item is-navbar-mobile__contacts__item">
                <p class="title">
                  <img src="<? echo get_template_directory_uri() . '/assets/img/map.svg'; ?>" alt="Адрес">Адрес
                </p>
                <a href="<? the_field('system_address_link', 'option'); ?>" class="link" target="_blank">
                    <? the_field('system_address', 'option'); ?>
                </a>
              </div>
              <div class="is-navbar__contacts__item is-navbar-mobile__contacts__item">
                <p class="title">
                  <img src="<? echo get_template_directory_uri() . '/assets/img/email.svg'; ?>" alt="Email">
                  Наша почта
                </p>
                <a href="mailto:<? the_field('system_email', 'option'); ?>" class="link">
                    <? the_field('system_email', 'option'); ?>
                </a>
              </div>
              <div class="is-navbar__contacts__item is-navbar-mobile__contacts__item">
                <p class="title">
                  <img src="<? echo get_template_directory_uri() . '/assets/img/phone.svg'; ?>" alt="Телефон">
                  Наши телефоны
                </p>
                <div class="dropdown">
                  <button
                      class="link drop-link dropdown-toggle"
                      type="button"
                      id="dropdownMenuButton"
                      data-mdb-toggle="dropdown"
                      aria-expanded="false"
                  >
                      <? the_field('system_phone', 'option'); ?>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <?php while ( have_rows('system_phones', 'option') ) : the_row(); ?>
                        <li>
                          <a class="dropdown-item" href="tel:<? the_sub_field('phone', 'option'); ?>">
                              <? the_sub_field('phone', 'option'); ?>
                          </a>
                        </li>
                      <?php endwhile; ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main id="is-main" class="is-main">

