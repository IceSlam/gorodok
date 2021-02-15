<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ГородОк
 */

get_header();
?>

  <section id="is-theader" class="section is-theader container" style="padding-bottom: 1rem;">
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
  <section id="is-news-single" class="section is-news-single">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
            <? the_post_thumbnail(); ?>
            <p class="is-news-single__date">
              <i class="fas fa-clock"></i> Дата публикации: <? the_date(); ?>
            </p>
            <p class="is-news-single__author">
              <i class="fas fa-user"></i> Автор: <? the_author(); ?>
            </p>
        </div>
        <div class="col-lg-9">
          <div class="row">
            <div class="col-lg-12">
              <h2 class="is-news-single__title">
                  <? the_title(); ?>
              </h2>
            </div>
            <div class="col-lg-12 is-news-single__content">
                <? the_content(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
get_footer();
