<?php
/**
 * The template for displaying all pages
 * Template Name: Главная
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ГородОк
 */

get_header();
?>
      <div class="is-main-about" style="background: url('<? echo get_template_directory_uri() . '/assets/img/about_page_block_bg.png'; ?>'), #fff;">
        <section id="is-theader" class="section is-theader container">
          <div class="row">
            <div class="col-lg-12">

              <nav aria-label="breadcrumb" class="is-theader__breadcrumbs">
                  <?php
                  if ( function_exists('yoast_breadcrumb') ) {
                      yoast_breadcrumb( '<ol id="breadcrumbs" class="breadcrumb is-theader__breadcrumbs-list">','</ol>' );
                  }
                  ?>
              </nav>
            </div>
          </div>
        </section>
        <section id="is-about" class="section is-about container">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="is-about__title">
                О компании
              </h2>
            </div>
          </div>
          <div class="row is-about__content">
            <div class="col-md-12 col-lg-6 is-about__content-info d-flex align-items-center">
              <div class="d-block">
                  <? the_field('about_history'); ?>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 is-about__content-video">
              <div class="is-about__content-video__wrapper" style="background: url('<? the_field('about_company_video_preview'); ?>');">
                <a href="<? the_field('about_company_video'); ?>" data-fancybox>
                  <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                      <path d="M24.3398 43.0975L41.218 30.9477L24.3398 18.7979V43.0975Z" fill="white"/>
                      <path d="M31 0.0488281C13.9065 0.0488281 0 13.9098 0 30.9472C0 47.9846 13.9065 61.8456 31 61.8456C48.0935 61.8456 62 47.9846 62 30.9472C62 13.9098 48.0935 0.0488281 31 0.0488281ZM45.3838 32.415L23.5869 48.1056C23.2714 48.3326 22.8982 48.4483 22.5232 48.4483C22.2407 48.4483 21.9573 48.3828 21.6965 48.2498C21.0892 47.9402 20.707 47.3176 20.707 46.6378V15.2566C20.707 14.5767 21.0892 13.9542 21.6965 13.6447C22.3038 13.3352 23.0338 13.3909 23.5869 13.7889L45.3838 29.4795C45.8566 29.8199 46.1367 30.3659 46.1367 30.9472C46.1367 31.5285 45.8566 32.0746 45.3838 32.415Z" fill="white"/>
                    </g>
                    <defs>
                      <clipPath id="clip0">
                        <rect width="62" height="61.7967" fill="white" transform="translate(0 0.0488281)"/>
                      </clipPath>
                    </defs>
                  </svg>
                </a>
              </div>
              <p class="is-about__content-video__info">
                <? the_field('about_company_video_description'); ?>
              </p>
            </div>
            <img src="<? echo get_template_directory_uri() . '/assets/img/about_page_block_logo.png'; ?>" alt="Город'ОК" class="is-about__content-bgi">
          </div>
        </section>
      </div>
<?php
get_footer(); ?>

