<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ГородОк
 */

?>

</main>

<footer id="is-footer" class="bg-light text-center text-lg-start is-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 is-footer__logo">
        <img src="<? the_field('system_logo_footer', 'option'); ?>" alt="Город'ОК" class="is-footer__logo-img">
      </div>
        <?
        wp_nav_menu( array(
            'theme_location'  => 'footerLeft',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'col-lg-2 is-footer__menu',
            'container_id'    => 'gorodok-footer-left-menu',
            'menu_class'      => 'list-unstyled mb-0 is-footer__menu-list',
            'menu_id'         => 'gorodokFooterLeftMenuList'
        ) );
        ?>
        <?
        wp_nav_menu( array(
            'theme_location'  => 'footerRight',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'col-lg-3 is-footer__menu',
            'container_id'    => 'gorodok-footer-right-menu',
            'menu_class'      => 'list-unstyled mb-0 is-footer__menu-list',
            'menu_id'         => 'gorodokFooterRightMenuList'
        ) );
        ?>
      <div class="col-lg-1 is-footer__social">
          <? $facebook = get_field('system_facebook', 'option');
          if ($facebook) { ?>
            <a href="<? the_field('system_facebook', 'option'); ?>" class="btn" target="_blank">
              <svg width="10" height="15" viewBox="0 0 10 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.11845 3.71292C7.14251 3.6898 7.25502 3.61427 7.69686 3.61427L9.1455 3.61382C9.61677 3.61382 10 3.28743 10 2.8862V0.730591C10 0.330048 9.61731 0.00366211 9.14684 0.00297545L6.99505 0C5.66699 0 4.538 0.372963 3.73014 1.07872C2.92591 1.78127 2.50074 2.76203 2.50074 3.91479V5.0774H0.854639C0.383364 5.0774 0 5.40379 0 5.80502V8.12656C0 8.52779 0.383364 8.85418 0.854639 8.85418H2.50074V14.2724C2.50074 14.6736 2.8841 15 3.35538 15H6.17684C6.64812 15 7.03148 14.6736 7.03148 14.2724V8.85429H9.04361C9.51488 8.85429 9.89811 8.52779 9.89811 8.12679L9.89919 5.80513C9.89919 5.54157 9.73076 5.2977 9.4595 5.16872C9.33382 5.10899 9.18757 5.0774 9.03675 5.0774H7.03148V4.1589C7.03148 3.85952 7.0788 3.75114 7.11845 3.71292Z" fill="white"/>
              </svg>
            </a>
          <? } ?>
          <?php while ( have_rows('system_instagram', 'option') ) : the_row(); ?>
            <a href="<? the_sub_field('link', 'option'); ?>" class="btn" target="_blank">
              <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.5 4.375C5.7769 4.375 4.375 5.7769 4.375 7.5C4.375 9.2231 5.7769 10.625 7.5 10.625C9.2231 10.625 10.625 9.2231 10.625 7.5C10.625 5.7769 9.22322 4.375 7.5 4.375Z" fill="white"/>
                <path d="M13.4886 1.51142C12.5139 0.536728 11.223 0 9.85359 0H5.14641C3.77701 0 2.486 0.536728 1.51142 1.51142C0.536728 2.486 0 3.77701 0 5.14641V9.85348C0 11.223 0.536728 12.514 1.51142 13.4886C2.486 14.4633 3.77701 15 5.14641 15H9.85359C11.223 15 12.514 14.4633 13.4886 13.4886C14.4632 12.514 15 11.223 15 9.85348V5.14641C15 3.77701 14.4632 2.486 13.4886 1.51142ZM7.5 11.4697C5.31109 11.4697 3.53027 9.68891 3.53027 7.5C3.53027 5.31109 5.31109 3.53027 7.5 3.53027C9.68891 3.53027 11.4697 5.31109 11.4697 7.5C11.4697 9.68891 9.68891 11.4697 7.5 11.4697ZM11.8977 3.72379C11.816 3.8055 11.7026 3.85242 11.587 3.85242C11.4713 3.85242 11.3581 3.8055 11.2764 3.72379C11.1944 3.64197 11.1476 3.52867 11.1476 3.41297C11.1476 3.29727 11.1944 3.18386 11.2764 3.10215C11.3581 3.02032 11.4712 2.97352 11.587 2.97352C11.7026 2.97352 11.816 3.02032 11.8977 3.10215C11.9796 3.18386 12.0265 3.29727 12.0265 3.41297C12.0265 3.52856 11.9796 3.64197 11.8977 3.72379Z" fill="white"/>
              </svg>
            </a>
          <?php endwhile; ?>
          <? $vk = get_field('system_vk', 'option');
          if ($vk) { ?>
            <a href="<? the_field('system_vk', 'option'); ?>" class="btn" target="_blank">
              <svg width="20" height="11" viewBox="0 0 20 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M19.1069 9.81131C19.0551 9.72455 18.7346 9.02805 17.1922 7.5965C15.5775 6.09746 15.7944 6.34087 17.7392 3.74889C18.9238 2.17033 19.3973 1.20632 19.2491 0.794205C19.1081 0.401371 18.2369 0.505002 18.2369 0.505002L15.3401 0.521872C15.3401 0.521872 15.1256 0.492952 14.9653 0.588148C14.8099 0.682139 14.7098 0.899041 14.7098 0.899041C14.7098 0.899041 14.2507 2.12092 13.6386 3.15964C12.348 5.35156 11.8311 5.46724 11.6202 5.33107C11.1298 5.01416 11.2527 4.05617 11.2527 3.37655C11.2527 1.25211 11.5744 0.366426 10.6249 0.137473C10.3091 0.0615577 10.0778 0.0109472 9.27163 0.0025121C8.23773 -0.008333 7.36169 0.00612713 6.86643 0.248334C6.53625 0.409806 6.28199 0.770105 6.43744 0.79059C6.62904 0.815895 7.06284 0.907476 7.293 1.22078C7.59064 1.62446 7.57979 2.53304 7.57979 2.53304C7.57979 2.53304 7.7509 5.03344 7.18093 5.34433C6.78931 5.55762 6.25307 5.12261 5.10229 3.13313C4.51304 2.1149 4.06718 0.988212 4.06718 0.988212C4.06718 0.988212 3.98163 0.77854 3.82859 0.666474C3.64302 0.530307 3.38274 0.486927 3.38274 0.486927L0.62808 0.503797C0.62808 0.503797 0.214761 0.515847 0.0629296 0.695394C-0.0720317 0.855661 0.0520845 1.18583 0.0520845 1.18583C0.0520845 1.18583 2.20906 6.23122 4.65041 8.775C6.89053 11.1067 9.4331 10.9537 9.4331 10.9537H10.5851C10.5851 10.9537 10.9333 10.9151 11.1105 10.7235C11.2744 10.5476 11.2683 10.2174 11.2683 10.2174C11.2683 10.2174 11.2454 8.67137 11.9636 8.44362C12.671 8.21949 13.5795 9.93783 14.5424 10.5994C15.2702 11.0995 15.8233 10.9898 15.8233 10.9898L18.3984 10.9537C18.3984 10.9537 19.7456 10.8705 19.1069 9.81131Z" fill="white"/>
              </svg>
            </a>
          <? } ?>
          <? $twitter = get_field('system_twitter', 'option');
          if ($twitter) { ?>
            <a href="<? the_field('system_twitter', 'option'); ?>" class="btn" target="_blank">
              <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.34636 12.9999C11.7618 12.9999 15.2701 7.99887 15.2701 3.66234C15.2701 3.52031 15.267 3.37886 15.2602 3.23819C15.9411 2.7749 16.533 2.19678 17 1.53873C16.3751 1.80021 15.7024 1.976 14.9971 2.05553C15.7171 1.64908 16.27 1.00639 16.5307 0.24025C15.8568 0.616178 15.1105 0.889296 14.316 1.03681C13.6796 0.398916 12.7733 0 11.77 0C9.84397 0 8.28194 1.46967 8.28194 3.28133C8.28194 3.53899 8.31261 3.78941 8.37239 4.02966C5.47361 3.89242 2.90304 2.5866 1.18299 0.60082C0.883575 1.08572 0.710789 1.64917 0.710789 2.25039C0.710789 3.38883 1.32656 4.39415 2.26284 4.98205C1.69063 4.96552 1.15315 4.81771 0.683239 4.57169C0.68272 4.58548 0.68272 4.59889 0.68272 4.61356C0.68272 6.20296 1.88494 7.53001 3.48107 7.83072C3.1879 7.90575 2.87944 7.94615 2.56132 7.94615C2.33697 7.94615 2.11823 7.92541 1.90573 7.88696C2.34975 9.19093 3.63743 10.1398 5.16401 10.1664C3.97021 11.0468 2.4664 11.5712 0.832009 11.5712C0.550896 11.5712 0.273005 11.5561 0 11.5257C1.54363 12.4567 3.37659 13 5.34646 13" fill="white"/>
              </svg>
            </a>
          <? } ?>
      </div>
      <div class="col-lg-3 is-footer__contacts-wrapper">
        <div class="is-footer__contacts-wrapper__content">
          <h3 class="is-footer__contacts-wrapper__content-title">
            Наши контакты
          </h3>
          <div class="is-footer__contacts-wrapper__content-item">
            <p class="title">
              <img src="<? echo get_template_directory_uri() . '/assets/img/map.svg'; ?>" alt="Адрес">Адрес
            </p>
            <a href="<? the_field('system_address_link', 'option'); ?>" class="link">
                <? the_field('system_address', 'option'); ?>
            </a>
          </div>
          <div class="is-footer__contacts-wrapper__content-item">
            <p class="title">
              <img src="<? echo get_template_directory_uri() . '/assets/img/email.svg'; ?>" alt="Email">
              Наша почта
            </p>
            <a href="mailto:<? the_field('system_email', 'option'); ?>" class="link">
              <? the_field('system_email', 'option'); ?>
            </a>
          </div>
          <div class="is-footer__contacts-wrapper__content-item">
            <p class="title">
              <img src="<? echo get_template_directory_uri() . '/assets/img/phone.svg'; ?>" alt="">
              Наши телефоны
            </p>
              <?php while ( have_rows('system_phones', 'option') ) : the_row(); ?>
                <a href="tel:<? the_sub_field('phone', 'option'); ?>" class="link">
                    <? the_sub_field('phone', 'option'); ?>
                </a>
              <?php endwhile; ?>
          </div>
          <div class="is-footer__contacts-wrapper__content-item messenger mt-4">
            <?
              $wa =  get_field('system_whatsapp', 'option');
              if ($wa) {?>
                <a
                    href="https://wa.me/<? the_field('system_whatsapp', 'option'); ?>"
                    class="btn"
                    target="_blank"
                >
                  <i class="fab fa-whatsapp"></i>
                </a>
             <? } ?>
              <?
              $viber =  get_field('system_viber', 'option');
              if ($viber) { ?>
                <a
                    href="https://viber.click/<? the_field('system_viber', 'option'); ?>"
                    class="btn"
                    target="_blank"
                >
                  <i class="fab fa-viber"></i>
                </a>
              <? } ?>
              <?
              $telegram =  get_field('system_telegram', 'option');
              if ($telegram) { ?>
                <a
                    href="https://t.me/<? the_field('system_telegram', 'option'); ?>"
                    class="btn"
                    target="_blank"
                >
                  <i class="fab fa-telegram-plane"></i>
                </a>
              <? } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="is-footer__copyright">
    <div class="container">
      <p>
        &copy; 2018 - <?php echo date("Y");?> «Город'ОК». Все права защищены.
      </p>
      <a href="https://alianscompany.ru" target="_blank">
        Сайт разработан
        <img src="<? echo get_template_directory_uri() . '/assets/img/ia-alians.png'; ?>" alt="ИА Альянс+">
      </a>
    </div>
  </div>
</footer>
<a class="back_to_top" href="#is-header" uk-scroll>
  <i class="fas fa-chevron-up"></i>
</a>
<?php wp_footer(); ?>

</body>
</html>
