<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
    <section id="is-catlist" class="section is-catlist container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="is-catlist__title">
              <?php single_term_title(); ?>
          </h2>
        </div>
      </div>
      <div class="row is-catlist__cards" >
          <?
          $args = array(
              'post_type'      => 'catalog',
              'post_status'    => 'publish',
              'posts_per_page' => - 1,
              'tax_query' => array(
                  array(
                      'taxonomy' => 'services',
                      'field'    => 'slug',
                      'terms'    => 'large-format-printing'
                  )
              )
          );

          $query = new WP_Query( $args );

          if ( $query->have_posts() ) {
              while ( $query->have_posts() ) {
                  $query->the_post(); ?>
                <div class="col-md-6 mt-3">
                  <div class="is-catlist__cards-card">
                    <div class="is-catlist__cards-card__wrapper">
                      <div class="is-catlist__cards-card__wrapper-header">
                        <h5 class="is-catlist__cards-card__wrapper-header__title">
                            <? the_title(); ?>
                        </h5>
                      </div>
                      <div class="is-catlist__cards-card__wrapper-body" style="background: url('<?php the_post_thumbnail_url(); ?>')">
                        <div class="mask"></div>
                        <div class="is-catlist__cards-card__wrapper-body__info">
                          <p>
                              <? the_excerpt(); ?>
                          </p>
                        </div>
                      </div>
                    </div>
                    <a href="<? the_permalink(); ?>" class="btn is-catlist__cards-card__btn">
                        <span>
                          Подробнее
                        </span>
                    </a>
                  </div>
                </div>
              <?  }
          } else {
              echo '<p class="text-center">Услуг не найдено</p>';
          }

          wp_reset_postdata();
          ?>
      </div>
    </section>


<?php
get_footer();
