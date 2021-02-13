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
      <section id="is-advantages" class="section is-advantages">
        <div class="is-advantages__wrapper" style="background: url('<? echo get_template_directory_uri() . '/assets/img/index_about_bg.png'; ?>');">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="is-advantages__title">
                  Наши преимущества
                </div>
              </div>
            </div>
            <div class="row is-advantages__content">
                <?php while ( have_rows('about_advantages') ) : the_row(); ?>
                  <div class="col-lg-6">
                    <div class="is-advantages__content-card">
                      <div class="is-advantages__content-card__img" style="background: url('<? the_sub_field('image'); ?>');"></div>
                      <h5 class="is-advantages__content-card__title">
                        <? the_sub_field('title'); ?>
                      </h5>
                      <p class="is-advantages__content-card__caption">
                          <? the_sub_field('subtitle'); ?>
                      </p>
                    </div>
                  </div>
                <?php endwhile; ?>
            </div>
          </div>
        </div>
      </section>
      <section id="is-records" class="section is-records">
        <div style="overflow: hidden;padding-top: 4rem;">
          <div class="container">
            <div class="row is-records__cards">
              <div class="col-lg-12 is-records__cards-circle__wrapper">
                <div class="is-records__cards-circle">
                  <div class="is-records__cards-circle__inner">
                    <h2 class="is-records__cards-circle__title">
                      Наши рекорды
                    </h2>
                  </div>
                </div>
              </div>
                <?php while ( have_rows('about_records') ) : the_row(); ?>
                  <div class="col-lg-6 is-records__cards-square__wrapper">
                    <p class="is-records__cards-square__wrapper-caption">
                      <? the_sub_field('title'); ?>
                    </p>
                    <div id="capt-one" class="is-records__cards-square">
                      <p class="is-records__cards-square__caption">
                        <span class="capt" data-n="<? the_sub_field('count'); ?>">
                          0
                      </span>
                        <span class="qtype">
                        <? the_sub_field('measure'); ?>
                      </span>
                      </p>
                    </div>
                  </div>
                <?php endwhile; ?>
            </div>
            <div class="row section__order">
              <div class="col-md-12">
                <div class="section__order__block" style="background: url(<? echo get_template_directory_uri() . '/assets/img/index_working_order_bg.png'; ?>), #122042;);">
                  <h4 class="section__order__block__title">
                    Запросить расчеты
                  </h4>
                  <button
                      type="button"
                      class="btn section__order__block__btn"
                      data-mdb-toggle="modal"
                      data-mdb-target="#section-order-modal"
                  >
                    Оставить заявку
                  </button>
                  <div
                      class="modal fade section__order__modal"
                      id="section-order-modal"
                      tabindex="-1"
                      aria-labelledby="section-order-modal-label"
                      aria-hidden="true"
                  >
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="section-order-modal-label">
                            Оставить заявку
                          </h5>
                          <button
                              type="button"
                              class="btn-close"
                              data-mdb-dismiss="modal"
                              aria-label="Close"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>

                            <div class="form-outline mb-4">
                              <input type="text" id="section-order-form-name" class="form-control" />
                              <label class="form-label" for="section-order-form-name">
                                Ваше имя
                              </label>
                            </div>

                            <div class="form-outline mb-4">
                              <input type="email" id="section-order-form-email" class="form-control" />
                              <label class="form-label" for="section-order-form-email">
                                Ваш E-mail
                              </label>
                            </div>

                            <div class="form-outline mb-4">
                              <textarea class="form-control" id="section-order-form-message" rows="4"></textarea>
                              <label class="form-label" for="section-order-form-message">
                                Ваше сообщение
                              </label>
                            </div>

                            <div class="form-check d-flex mb-4 px-0" >
                              <input
                                  class="form-check-input me-0 mx-0"
                                  type="checkbox"
                                  value=""
                                  id="form4Example4"
                                  style="margin-left: 1rem;width: 16px;height: 16px;"
                              />
                              <label class="form-check-label mx-3" for="form4Example4">
                                С <a href="!#" style="color: #c23a3a;">Политикой конфиденциальности и обработки персональных данных</a> ознакомлен
                              </label>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn is-btn-close" data-mdb-dismiss="modal">
                                Отмена
                              </button>
                              <button type="submit" class="btn">
                                Отправить
                              </button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <img src="<? echo get_template_directory_uri() . '/assets/img/index_working_right_round_bg.svg'; ?>" alt="ГородОк" class="is-records__round-right">
        </div>
        <div class="is-records__line-bold"></div>
        <div class="is-records__line-thin"></div>
      </section>
<?php
get_footer(); ?>

