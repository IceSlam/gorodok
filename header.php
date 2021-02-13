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

    <?php wp_head(); ?>
    <link rel="icon" href="<? echo get_template_directory_uri() . '/assets/img/logo.png'; ?>">
    <link rel="apple-touch-icon" href="<? echo get_template_directory_uri() . '/assets/img/logo.png'; ?>">
  </head>

  <body <?php body_class(); ?>>

    <header id="is-header" class="is-header header">
      <nav id="navbar" class="is-navbar navbar navbar-expand-lg navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img
                src="<? the_field('system_logo_header', 'option'); ?>"
                alt="Город'ОК"
                loading="lazy"
            />
            <span>
              Рекламно-производственная компания
            </span>
          </a>
          <div class="is-navbar__contacts__item mob-top-phone-navbar">
            <p class="title">
              <img src="<? echo get_template_directory_uri() . '/assets/img/phone.svg'; ?>" alt="Телефон">
              Наш телефон
            </p>
            <div class="dropdown">
              <button
                  class="link drop-link"
                  type="button"
                  id="dropdownMenuButton"
                  data-mdb-toggle="dropdown"
                  aria-expanded="false"
              >
                  <? the_field('system_phone', 'option'); ?>
              </button>
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
                  <img src="<? echo get_template_directory_uri() . '/assets/img/map.svg'; ?>" alt="Адрес">Адрес
                </p>
                <a href="" class="link">
                    <? the_field('system_address', 'option'); ?>
                </a>
              </div>
              <div class="is-navbar__contacts__item">
                <p class="title">
                  <img src="<? echo get_template_directory_uri() . '/assets/img/email.svg'; ?>" alt="Email">
                  Наша почта
                </p>
                <a href="mailto:<? the_field('system_email', 'option'); ?>" class="link">
                    <? the_field('system_email', 'option'); ?>
                </a>
              </div>
              <div class="is-navbar__contacts__item">
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
            <img
                src="<? the_field('system_logo_header', 'option'); ?>"
                alt="Город'ОК"
                loading="lazy"
            />
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
                <a href="" class="link">
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

