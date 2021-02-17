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
    <section id="is-news" class="section is-news">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="is-news__title">
              Новости и статьи
            </h2>
          </div>
        </div>
        <div class="row is-news__cards-wrapper">
            <?
            $args = array(
                'post_type'      => 'news',
                'post_status'    => 'publish',
                'posts_per_page' => - 1,
            );

            $query = new WP_Query( $args );

            if ( $query->have_posts() ) {
                while ( $query->have_posts() ) {
                    $query->the_post(); ?>
                  <div class="col-md-6 col-lg-4">
                    <div class="is-news__cards-wrapper__card card">
                      <div class="is-news__cards-wrapper__card-header" style="background: url('<?php the_post_thumbnail_url(); ?>');">
                        <img
                            src="<? echo get_template_directory_uri() . '/assets/img/index_news_item1.jpg'; ?>"
                            class="card-img-top is-news__cards-wrapper__card-header__img img-fluid"
                            alt="<? the_title(); ?>"
                        />
                        <div class="is-news__cards-wrapper__card-header__badge">
                            <? echo get_the_date(); ?>
                        </div>
                      </div>
                      <div class="card-body is-news__cards-wrapper__card-body">
                        <h5 class="card-title is-news__cards-wrapper__card-body__title">
                            <? the_title(); ?>
                        </h5>
                        <a href="<? the_permalink(); ?>" class="btn is-news__cards-wrapper__card-body__btn">
                          Подробнее
                          <img src="<? echo get_template_directory_uri() . '/assets/img/index_news_btn_more.svg'; ?>" alt="Подробнее">
                        </a>
                      </div>
                    </div>
                  </div>
                <?  }
            } else {
                echo '<p class="text-center">Новостей не найдено</p>';
            }

            wp_reset_postdata();
            ?>
        </div>
      </div>
      <div class="is-news__line-bold"></div>
      <div class="is-news__line-thin"></div>
    </section>


<?php
get_footer();
