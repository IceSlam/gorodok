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
        $termID = get_queried_object_id();
        $args = array(
            'post_type'      => 'portfolio',
            'post_status'    => 'publish',
            'posts_per_page' => - 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'portfolio_tax',
                    'field'    => 'term_id',
                    'terms'    => $termID
                )
            )
        );

        $query = new WP_Query( $args );

        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post(); ?>
              <div class="col-lg-4 is-category-products__card-portfolio__cards-card">
                <div class="is-category-products__card-portfolio__cards-card__inner">
                  <div class="is-category-products__card-portfolio__cards-card__inner-img" style="background: url('<?php the_post_thumbnail_url(); ?>');"></div>
                  <a href="<? the_permalink(); ?>" class="is-category-products__card-portfolio__cards-card__inner-title d-block">
                      <? the_title(); ?>
                  </a>
                  <div class="is-category-products__card-portfolio__cards-card__inner-info">
                      <? the_excerpt(); ?>
                  </div>
                </div>
              </div>
            <?  }
        } else {
            echo '<p class="text-center">Работ не найдено</p>';
        }

        wp_reset_postdata();
        ?>
    </div>
  </section>
<?php
get_footer();
