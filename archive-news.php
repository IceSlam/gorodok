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

	<main id="primary" class="site-main">

        <?
        $args = array(
            'post_type'      => 'news',
            'post_status'    => 'publish',
            'posts_per_page' => 3,
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
            echo 'Ничего не найдено';
        }

        wp_reset_postdata();
        ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
