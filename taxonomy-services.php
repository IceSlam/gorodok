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
            Каталог
          </h2>
        </div>
      </div>
      <ul class="row is-catlist__catbtns nav nav-pills mb-3" id="ex1" role="tablist">
        <li class="nav-item col-sm-6 col-md-4 col-lg-2 mt-3" role="presentation">
          <div
              class="nav-link is-catlist__catbtns-card"
              id="ex1-tab-2"
              data-mdb-toggle="pill"
              href="#ex1-pills-2"
              role="tab"
              aria-controls="ex1-pills-2"
              aria-selected="true"
          >
            <div class="is-catlist__catbtns-card__img">
              <svg width="77" height="77" viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                  <path d="M10.2666 70.583H17.9666V75.7163C17.9666 76.4251 17.392 76.9997 16.6833 76.9997H11.5499C10.8412 76.9997 10.2666 76.4251 10.2666 75.7163V70.583Z" fill="#C23A3A"/>
                  <path d="M59.0332 70.583H66.7332V75.7163C66.7332 76.4251 66.1586 76.9997 65.4499 76.9997H60.3165C59.6078 76.9997 59.0332 76.4251 59.0332 75.7163V70.583Z" fill="#C23A3A"/>
                  <path d="M41.0666 15.4004H35.9332C35.2245 15.4004 34.6499 15.975 34.6499 16.6837V19.2504C34.6499 19.9592 35.2245 20.5337 35.9332 20.5337H41.0666C41.7753 20.5337 42.3499 19.9592 42.3499 19.2504V16.6837C42.3499 15.975 41.7753 15.4004 41.0666 15.4004Z" fill="#C23A3A"/>
                  <path d="M50.05 0H26.95C25.5324 0 24.3833 1.14914 24.3833 2.56667V10.2667C24.3833 11.6842 25.5324 12.8333 26.95 12.8333H50.05C51.4675 12.8333 52.6166 11.6842 52.6166 10.2667V2.56667C52.6166 1.14914 51.4675 0 50.05 0ZM45.8278 7.32783L44.5445 8.61117C44.1773 8.98136 43.6227 9.09262 43.1412 8.89269C42.6596 8.69276 42.3469 8.22137 42.35 7.7H32.0833C31.3745 7.7 30.8 7.12543 30.8 6.41667C30.8 5.7079 31.3745 5.13333 32.0833 5.13333H42.35C42.348 4.79222 42.4819 4.46436 42.7221 4.22217C42.9631 3.97922 43.2911 3.84256 43.6333 3.84256C43.9755 3.84256 44.3035 3.97922 44.5445 4.22217L45.8278 5.5055C46.0707 5.74647 46.2074 6.07448 46.2074 6.41667C46.2074 6.75885 46.0707 7.08687 45.8278 7.32783Z" fill="#C23A3A"/>
                  <path d="M22.3429 49.9478L26.0646 48.3436L21.9836 43.6338L17.6973 48.3821L21.3034 49.935C21.6351 50.074 22.0079 50.0786 22.3429 49.9478Z" fill="#C23A3A"/>
                  <path d="M54.182 40.7583C53.6874 40.9692 53.1541 41.0741 52.6164 41.0663C52.1003 41.0653 51.5897 40.9606 51.1149 40.7583L46.8799 38.9488L44.5057 41.7336L57.3391 56.9155C57.7997 57.4541 57.7365 58.2643 57.1979 58.725C56.6592 59.1857 55.8491 59.1225 55.3884 58.5838L43.1325 44.018L38.7949 45.8916C38.295 46.1 37.758 46.2048 37.2164 46.1996C36.7003 46.1986 36.1897 46.0939 35.7149 45.8916L31.4927 44.0821L28.695 47.483L36.8955 56.9283C37.3265 57.4633 37.2596 58.2429 36.7439 58.6967C36.2281 59.1506 35.4465 59.1178 34.9705 58.6223L27.8352 50.409L23.3307 52.334C22.8501 52.5291 22.335 52.6252 21.8164 52.6163C21.3003 52.6153 20.7897 52.5106 20.3149 52.3083L15.8874 50.409L7.69971 59.5206V60.3163C7.69971 61.0251 8.27428 61.5996 8.98304 61.5996H68.0164C68.7251 61.5996 69.2997 61.0251 69.2997 60.3163V51.6281L58.5326 38.8975L54.182 40.7583Z" fill="#C23A3A"/>
                  <path d="M37.7941 43.5308L41.4002 41.978L37.3706 37.2168L33.2896 42.0421L36.7674 43.5308C37.0947 43.6737 37.4667 43.6737 37.7941 43.5308Z" fill="#C23A3A"/>
                  <path d="M68.0164 25.667H8.98304C8.27428 25.667 7.69971 26.2416 7.69971 26.9503V55.6842L20.0454 41.9397C20.5469 41.4123 21.2427 41.1138 21.9704 41.1138C22.6981 41.1138 23.3939 41.4123 23.8954 41.9397L26.9497 45.4945L35.4197 35.5487C35.9193 35.0179 36.6158 34.717 37.3447 34.717C38.0736 34.717 38.7701 35.0179 39.2697 35.5487L42.8759 39.7837L50.8197 30.4153C51.3193 29.8846 52.0158 29.5837 52.7447 29.5837C53.4736 29.5837 54.1701 29.8846 54.6697 30.4153L69.2997 47.6505V26.9503C69.2997 26.2416 68.7251 25.667 68.0164 25.667Z" fill="#C23A3A"/>
                  <path d="M53.1942 38.397L56.8004 36.8442L52.7707 32.083L48.6641 36.8955L52.1547 38.397C52.4857 38.5436 52.8632 38.5436 53.1942 38.397Z" fill="#C23A3A"/>
                  <path d="M70.5832 19.25H6.41654C3.58147 19.25 1.2832 21.5483 1.2832 24.3833V62.8833C1.2832 65.7184 3.58147 68.0167 6.41654 68.0167H70.5832C73.4183 68.0167 75.7165 65.7184 75.7165 62.8833V24.3833C75.7165 21.5483 73.4183 19.25 70.5832 19.25ZM71.8665 60.3167C71.8665 62.443 70.1428 64.1667 68.0165 64.1667H8.9832C6.85691 64.1667 5.1332 62.443 5.1332 60.3167V26.95C5.1332 24.8237 6.85691 23.1 8.9832 23.1H68.0165C70.1428 23.1 71.8665 24.8237 71.8665 26.95V60.3167Z" fill="#C23A3A"/>
                </g>
                <defs>
                  <clipPath id="clip0">
                    <rect width="77" height="77" fill="white"/>
                  </clipPath>
                </defs>
              </svg>
            </div>
            <a class="is-catlist__catbtns-card__title" href="!#" target="_blank">
              Рекламные конструкции
            </a>
          </div>
        </li>
        <li class="nav-item col-sm-6 col-md-4 col-lg-2 mt-3" role="presentation">
          <div
              class="nav-link is-catlist__catbtns-card"
              id="ex1-tab-3"
              data-mdb-toggle="pill"
              href="#ex1-pills-3"
              role="tab"
              aria-controls="ex1-pills-3"
              aria-selected="false"
          >
            <div class="is-catlist__catbtns-card__img">
              <svg width="92" height="92" viewBox="0 0 92 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.0776 0V92H78.9217V0H13.0776ZM75.9895 88.8856H16.0081V3.11442H75.9895V88.8856ZM32.0912 16.7619H30.8967C30.9218 16.5886 30.9841 16.4516 31.0824 16.3507C31.1805 16.2495 31.3189 16.1993 31.496 16.1993C31.6603 16.1993 31.797 16.2478 31.9072 16.3432C32.0197 16.4381 32.0796 16.5765 32.0912 16.7619ZM31.2736 34.2572C30.5916 34.2572 30.0481 34.0063 29.6412 33.5037C29.2351 33.0005 29.033 32.2856 29.033 31.3582C29.033 30.4296 29.2354 29.715 29.6412 29.2115C30.0481 28.7089 30.5916 28.458 31.2736 28.458C31.9542 28.458 32.4955 28.7103 32.8963 29.2144C33.2963 29.7194 33.497 30.4339 33.497 31.3582C33.497 32.2859 33.2963 33.0005 32.8963 33.5037C32.4958 34.0063 31.9556 34.2572 31.2736 34.2572ZM72.8751 6.22884H19.1225V85.7714H72.8751V6.22884ZM67.2302 39.5113V42.2425H24.0185V39.5113H67.2302ZM27.3229 31.3579C27.3229 29.8486 27.7402 28.7164 28.5745 27.9597C29.1965 27.3195 30.0959 26.9986 31.2736 26.9986C32.4508 26.9986 33.3511 27.3195 33.9722 27.9597C34.8016 28.7164 35.2177 29.8486 35.2177 31.3579C35.2177 32.8367 34.8019 33.9688 33.9722 34.7549C33.3511 35.3954 32.4508 35.7161 31.2736 35.7161C30.0959 35.7161 29.1965 35.3954 28.5745 34.7549C27.7402 33.9688 27.3229 32.8352 27.3229 31.3579ZM36.5041 35.4859V27.2497H38.3067L41.5772 32.993V27.2497H43.1814V35.4859H41.4607L38.1075 29.6418V35.4859H36.5041ZM44.6558 35.4859V27.2497H46.3676V35.4859H44.6558ZM50.0308 33.6109C50.4934 34.0314 51.0193 34.2419 51.6065 34.2419C52.1844 34.2419 52.6602 34.0761 53.0267 33.7445C53.3947 33.4131 53.6245 32.978 53.7081 32.4427H51.8011V31.0666H55.2316V35.4859H54.0911L53.9209 34.4579C53.5864 34.8472 53.2911 35.1217 53.0264 35.2821C52.5702 35.5589 52.0122 35.6988 51.3507 35.6988C50.2604 35.6988 49.3661 35.3207 48.668 34.5657C47.941 33.8053 47.5794 32.7669 47.5794 31.449C47.5794 30.1159 47.947 29.0477 48.6801 28.2449C49.4146 27.4412 50.3849 27.0395 51.5909 27.0395C52.6371 27.0395 53.4766 27.3042 54.1121 27.8348C54.7477 28.3655 55.1128 29.0278 55.2039 29.8217H53.51C53.3791 29.2597 53.0628 28.8661 52.5549 28.6432C52.2723 28.5197 51.956 28.4589 51.6137 28.4589C50.949 28.4589 50.4031 28.7098 49.9757 29.2095C49.5512 29.7098 49.337 30.4619 49.337 31.4646C49.3376 32.4739 49.5688 33.1905 50.0308 33.6109ZM61.7771 30.3907V27.2497H63.488V35.4859H61.7771V31.8089H58.5747V35.4859H56.8623V27.2497H58.5747V30.3907H61.7771ZM66.9277 35.4859V28.7089H64.4503V27.2497H71.1232V28.7089H68.6597V35.4859H66.9277ZM38.1078 15.7993H38.8446V16.5263H38.1078V15.7993ZM38.1078 17.6227H38.8446V18.3503H38.1078V17.6227ZM36.3034 15.7221V14.9824H36.99V15.7221H37.4212V16.2155H36.99V17.6167C36.99 17.7254 37.0036 17.7923 37.0319 17.8191C37.0601 17.8459 37.1446 17.8595 37.2859 17.8595C37.3064 17.8595 37.3292 17.8595 37.3528 17.858C37.3765 17.858 37.3992 17.8566 37.4212 17.8549V18.3751L37.0927 18.3881C36.7657 18.3987 36.5416 18.3425 36.4214 18.2185C36.3438 18.1386 36.3052 18.0155 36.3052 17.8505V16.2189H35.9357V15.7221H36.3034ZM33.1685 15.7027H33.8399V16.0892C33.9281 15.9536 34.0126 15.8544 34.0922 15.7947C34.2335 15.6875 34.4137 15.6341 34.632 15.6341C34.9048 15.6341 35.1272 15.7056 35.3019 15.8487C35.4744 15.9923 35.5617 16.2302 35.5617 16.5641V18.3503H34.8515V16.7366C34.8515 16.5967 34.8327 16.4903 34.7952 16.4159C34.7283 16.2789 34.5991 16.212 34.4091 16.212C34.1755 16.212 34.0152 16.3118 33.9278 16.511C33.8828 16.6169 33.8609 16.7507 33.8609 16.9139V18.3503H33.1682L33.1685 15.7027ZM30.5475 15.9957C30.7909 15.7515 31.1064 15.6286 31.4957 15.6286C31.7267 15.6286 31.9352 15.6704 32.1206 15.7532C32.3054 15.8354 32.4583 15.966 32.5782 16.1457C32.6869 16.3023 32.757 16.4862 32.7896 16.693C32.8086 16.8147 32.8161 16.9909 32.8133 17.2199H30.8826C30.8933 17.486 30.9853 17.6729 31.1594 17.7787C31.2653 17.8456 31.393 17.8785 31.5427 17.8785C31.7001 17.8785 31.8293 17.8381 31.9274 17.7568C31.9816 17.7136 32.0286 17.6527 32.0704 17.5751H32.7789C32.7599 17.7326 32.6748 17.8929 32.522 18.0541C32.2841 18.3125 31.9525 18.4403 31.5237 18.4403C31.1701 18.4403 30.859 18.3315 30.5899 18.1132C30.3197 17.8958 30.1847 17.5426 30.1847 17.0517C30.1833 16.5924 30.305 16.2403 30.5475 15.9957ZM28.1373 15.6984L28.6901 17.6542L29.2536 15.6984H29.9982L29.0408 18.3506H28.3086L27.3575 15.6984H28.1373ZM24.3749 14.7638H27.0049V15.3994H25.1071V16.1607H26.8491V16.7833H25.1071V17.7055H27.0925V18.3503H24.3749V14.7638ZM24.0185 20.8245H67.2302V23.5557H24.0185V20.8245ZM20.1534 27.2497H26.8241V28.7089H24.3614V35.4859H22.6294V28.7089H20.1537L20.1534 27.2497ZM25.289 53.6035L26.8835 48.6934L28.4779 53.6035H33.6406L29.4641 56.6375L31.0585 61.5461L26.882 58.5136L22.7061 61.5464L24.3005 56.6378L20.1237 53.6038L25.289 53.6035ZM31.1612 83.7001C26.2874 83.7001 22.3364 79.7494 22.3364 74.8753C22.3364 70.0012 26.2874 66.0505 31.1612 66.0505C36.0349 66.0505 39.9859 70.0012 39.9859 74.8753C39.9859 79.7494 36.0349 83.7001 31.1612 83.7001ZM55.2316 61.1205H36.7671V59.5633H55.2316V61.1205ZM55.2316 56.4489H36.7671V54.8917H55.2316V56.4489ZM55.2316 51.7772H36.7671V50.2203H55.2316V51.7772ZM69.2194 61.5464L65.0435 58.5139L60.8647 61.5464L62.4599 56.6378L58.2826 53.6038H63.4436L65.0374 48.6937L66.631 53.6038H71.7937L67.6163 56.6378L69.2194 61.5464ZM35.0277 70.2481L25.2175 75.8927L24.4404 74.5422L34.2505 68.8973L35.0277 70.2481ZM36.4525 72.7344L26.6424 78.3776L25.8652 77.0286L35.6753 71.3837L36.4525 72.7344ZM37.1149 73.8671L37.8903 75.2176L28.0747 80.8532L27.2993 79.5028L37.1149 73.8671Z" fill="#C23A3A"/>
              </svg>
            </div>
            <a class="is-catlist__catbtns-card__title" href="!#" target="_blank">
              Широкоформатная печать
            </a>
          </div>
        </li>
        <li class="nav-item col-sm-6 col-md-4 col-lg-2 mt-3" role="presentation">
          <div
              class="nav-link is-catlist__catbtns-card"
              id="ex1-tab-4"
              data-mdb-toggle="pill"
              href="#ex1-pills-4"
              role="tab"
              aria-controls="ex1-pills-4"
              aria-selected="false"
          >
            <div class="is-catlist__catbtns-card__img">
              <svg width="101" height="55" viewBox="0 0 101 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M40.7758 9.21188C46.0021 10.6804 50.6186 12.5457 55.0823 14.3493C67.8812 19.5235 78.934 23.988 98.0354 15.9915C98.1946 15.9254 98.3518 15.8599 98.5067 15.7969C98.6926 15.7214 98.8412 15.6426 99.0062 15.5284C99.6519 15.0811 100.105 14.3536 100.105 13.5682V5C100.105 2.23858 97.8664 0 95.105 0H4.89332C2.31513 0 0.225098 2.09003 0.225098 4.66822C0.225098 8.07036 3.78033 10.3833 7.04123 9.4132C14.6829 7.13982 26.7221 5.26772 40.7758 9.21188Z" fill="#C23A3A"/>
                <path d="M100.104 18.7806C100.104 18.7806 100.104 18.7806 100.104 18.7807C100.018 18.8078 99.935 18.8295 99.8555 18.8463C99.6959 18.88 99.5358 18.9151 99.3855 18.9783C99.3583 18.9898 99.3305 19.0015 99.3022 19.0135C91.3285 22.352 84.6051 23.6252 78.6017 23.6252C69.2838 23.6252 61.7042 20.5587 53.8524 17.386C49.4712 15.6142 44.9409 13.7841 39.8884 12.3661C22.9952 7.6235 8.97387 11.8894 3.00123 14.3304C1.26761 15.0389 0.226074 16.7674 0.226074 18.6402V49.0819C0.226074 51.8433 2.46465 54.0819 5.22607 54.0819H95.1057C97.8671 54.0819 100.106 51.8433 100.106 49.0819V18.782C100.106 18.7812 100.105 18.7806 100.104 18.7806ZM15.0736 34.4179C13.121 36.3708 9.95498 36.3709 8.00228 34.4181L7.4378 33.8536C5.48523 31.901 5.48526 28.7352 7.43786 26.7826L8.00234 26.2181C9.95503 24.2654 13.121 24.2655 15.0736 26.2183L15.638 26.7828C17.5904 28.7353 17.5904 31.9008 15.6381 33.8534L15.0736 34.4179ZM60.1327 33.1606H26.885C25.3151 33.1606 24.0425 31.888 24.0425 30.3182C24.0425 28.7484 25.3151 27.4758 26.885 27.4758H57.2905C58.8603 27.4758 60.1329 28.7484 60.1329 30.3182V33.1604C60.1329 33.1605 60.1328 33.1606 60.1327 33.1606ZM96.5127 49.1653C96.5127 49.9573 95.8707 50.5993 95.0787 50.5993H76.198C75.406 50.5993 74.764 49.9573 74.764 49.1653C74.764 48.3733 75.406 47.7312 76.198 47.7312H95.0787C95.8707 47.7312 96.5127 48.3733 96.5127 49.1653ZM96.5127 43.429C96.5127 44.2209 95.8707 44.8629 95.0788 44.8629H76.1979C75.406 44.8629 74.764 44.2209 74.764 43.429C74.764 42.6371 75.406 41.9951 76.1979 41.9951H95.0788C95.8707 41.9951 96.5127 42.6371 96.5127 43.429ZM96.5127 37.6931C96.5127 38.485 95.8707 39.127 95.0788 39.127H76.1979C75.406 39.127 74.764 38.485 74.764 37.6931C74.764 36.9012 75.406 36.2592 76.1979 36.2592H95.0788C95.8707 36.2592 96.5127 36.9012 96.5127 37.6931Z" fill="#C23A3A"/>
              </svg>
            </div>
            <a class="is-catlist__catbtns-card__title" href="!#" target="_blank">
              Полиграфия
            </a>
          </div>
        </li>
        <li class="nav-item col-sm-6 col-md-4 col-lg-2 mt-3" role="presentation">
          <div
              class="nav-link is-catlist__catbtns-card"
              id="ex1-tab-5"
              data-mdb-toggle="pill"
              href="#ex1-pills-5"
              role="tab"
              aria-controls="ex1-pills-5"
              aria-selected="false"
          >
            <div class="is-catlist__catbtns-card__img">
              <svg width="106" height="106" viewBox="0 0 106 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M44.7188 79.5H48.0312V96.0625H44.7188V79.5Z" fill="#C23A3A"/>
                <path d="M57.9688 80.0781H61.2812V102.688H57.9688V80.0781Z" fill="#C23A3A"/>
                <path d="M71.2188 71.2188H34.7812C33.8665 71.2188 33.125 71.9603 33.125 72.875V76.1875C33.125 77.1022 33.8665 77.8438 34.7812 77.8438H71.2188C72.1335 77.8438 72.875 77.1022 72.875 76.1875V72.875C72.875 71.9603 72.1335 71.2188 71.2188 71.2188Z" fill="#C23A3A"/>
                <path d="M51.0788 59.6084C50.8209 59.5653 50.577 59.4618 50.3669 59.3064C50.1567 59.1509 49.9863 58.948 49.8697 58.7141L48.6606 56.3125H48.0312V67.9062H57.9688V56.3125H55.3353L52.5197 59.1447C52.3312 59.3274 52.1032 59.4643 51.8534 59.5448C51.6035 59.6252 51.3384 59.647 51.0788 59.6084Z" fill="#C23A3A"/>
                <path d="M44.7188 54.6562C44.7188 54.217 44.8932 53.7957 45.2039 53.4851C45.5145 53.1745 45.9357 53 46.375 53H49.6875C49.9943 52.9965 50.2957 53.0802 50.5567 53.2415C50.8177 53.4028 51.0275 53.635 51.1616 53.9109L51.7909 55.1697L53.4803 53.4803C53.7961 53.1752 54.2172 53.0033 54.6562 53H59.625C60.0643 53 60.4855 53.1745 60.7961 53.4851C61.1068 53.7957 61.2812 54.217 61.2812 54.6562V67.9062H67.9062V39.75C67.9062 35.7966 66.3358 32.0052 63.5403 29.2097C60.7448 26.4142 56.9534 24.8438 53 24.8438C49.0466 24.8438 45.2552 26.4142 42.4597 29.2097C39.6642 32.0052 38.0938 35.7966 38.0938 39.75V67.9062H44.7188V54.6562ZM39.75 39.75C39.7539 36.2371 41.1512 32.8692 43.6352 30.3852C46.1192 27.9012 49.4871 26.5039 53 26.5V29.8125C50.3652 29.8151 47.8391 30.863 45.976 32.726C44.113 34.5891 43.0651 37.1152 43.0625 39.75H39.75Z" fill="#C23A3A"/>
                <path d="M51.3438 3.3125H54.6562V13.25H51.3438V3.3125Z" fill="#C23A3A"/>
                <path d="M16.6899 19.0391L19.0322 16.6968L26.0591 23.7236L23.7168 26.0659L16.6899 19.0391Z" fill="#C23A3A"/>
                <path d="M3.3125 51.3438H13.25V54.6562H3.3125V51.3438Z" fill="#C23A3A"/>
                <path d="M92.75 51.3438H102.688V54.6562H92.75V51.3438Z" fill="#C23A3A"/>
                <path d="M79.9253 23.7275L86.9522 16.7007L89.2945 19.043L82.2676 26.0698L79.9253 23.7275Z" fill="#C23A3A"/>
              </svg>
            </div>
            <a class="is-catlist__catbtns-card__title" href="!#" target="_blank">
              Led-технологии
            </a>
          </div>
        </li>
        <li class="nav-item col-sm-6 col-md-4 col-lg-2 mt-3" role="presentation">
          <div
              class="nav-link is-catlist__catbtns-card"
              id="ex1-tab-6"
              data-mdb-toggle="pill"
              href="#ex1-pills-6"
              role="tab"
              aria-controls="ex1-pills-6"
              aria-selected="false"
          >
            <div class="is-catlist__catbtns-card__img">
              <svg width="82" height="82" viewBox="0 0 82 82" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                  <path d="M9.56738 68.433H56.014V74.106H9.56738V68.433Z" fill="#C23A3A"></path>
                  <path d="M71.2714 21.952H65.5821V7.84766H0V30.8107C0 36.7677 1.80426 42.4971 5.21759 47.3793C8.06349 51.4496 9.56746 56.2261 9.56746 61.1928V63.6283H56.014V61.1928C56.014 59.3954 56.2142 57.6237 56.6002 55.9008H71.2714C77.1872 55.9008 82 51.088 82 45.1728V32.6806C82 26.7649 77.1872 21.952 71.2714 21.952ZM40.848 43.2891C38.3668 45.7697 35.1756 47.039 32.1364 47.039C29.5807 47.039 27.1321 46.1419 25.3034 44.3132C21.3002 40.3093 21.7594 33.3363 26.3276 28.7687C28.4872 26.6085 31.2511 25.2865 34.1095 25.0457C37.1193 24.7917 39.8777 25.7501 41.8715 27.7446C45.8754 31.7478 45.4156 38.7209 40.848 43.2891ZM77.1909 45.1722C77.1909 48.4366 74.5352 51.0917 71.2714 51.0917H58.2331C58.8286 49.8036 59.5381 48.5611 60.3645 47.3793C63.7778 42.4977 65.5821 36.7684 65.5821 30.8107V26.7611H71.2714C74.5358 26.7611 77.1909 29.4162 77.1909 32.6806V45.1722Z" fill="#C23A3A"></path>
                  <path d="M38.5909 33.9838C37.8602 34.1852 37.4936 34.2872 36.8511 34.9291C36.2092 35.571 36.1072 35.9382 35.9058 36.6689C35.6349 37.648 35.2645 38.9893 33.7249 40.5283C32.8678 41.386 32.072 41.8802 31.3657 42.1968C33.3477 42.4727 35.6662 41.6694 37.4473 39.8883C39.2841 38.0515 40.0805 35.6435 39.727 33.6228C39.3104 33.7836 38.9287 33.8906 38.5909 33.9838Z" fill="#C23A3A"></path>
                  <path d="M35.7975 29.866C35.551 29.8322 35.297 29.8153 35.0373 29.8153C34.8653 29.8153 34.6908 29.8228 34.5137 29.8378C32.7851 29.9836 31.0854 30.8113 29.7278 32.1689C27.8916 34.005 27.0946 36.413 27.4481 38.4343C27.8653 38.2736 28.247 38.1666 28.5848 38.0734C29.3155 37.8713 29.6827 37.7699 30.3246 37.1281C30.9671 36.4856 31.0685 36.119 31.2705 35.3882C31.5408 34.4085 31.9118 33.0679 33.4508 31.5289C34.3035 30.6761 35.0949 30.1825 35.7975 29.866Z" fill="#C23A3A"></path>
                </g>
                <defs>
                  <clipPath id="clip0">
                    <rect width="82" height="82" fill="white"></rect>
                  </clipPath>
                </defs>
              </svg>
            </div>
            <a class="is-catlist__catbtns-card__title" href="!#" target="_blank">
              Производство и сувениры
            </a>
          </div>
        </li>
        <li class="nav-item col-sm-6 col-md-4 col-lg-2 mt-3" role="presentation">
          <div
              class="nav-link is-catlist__catbtns-card"
              id="ex1-tab-7"
              data-mdb-toggle="pill"
              href="#ex1-pills-7"
              role="tab"
              aria-controls="ex1-pills-7"
              aria-selected="false"
          >
            <div class="is-catlist__catbtns-card__img">
              <svg width="81" height="81" viewBox="0 0 81 81" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M56.451 48.3701H24.5494C23.2831 48.3701 22.2656 49.5023 22.2656 50.7694V76.0099H58.7348V50.7694C58.7348 49.5023 57.7174 48.3701 56.451 48.3701ZM52.6121 70.2516H28.3883C27.5403 70.2516 26.8528 69.5641 26.8528 68.7161C26.8528 67.8681 27.5403 67.1805 28.3883 67.1805H52.6121C53.4601 67.1805 54.1477 67.8681 54.1477 68.7161C54.1477 69.5641 53.4601 70.2516 52.6121 70.2516ZM52.6121 64.1095H28.3883C27.5403 64.1095 26.8528 63.4219 26.8528 62.5739C26.8528 61.7259 27.5403 61.0384 28.3883 61.0384H52.6121C53.4601 61.0384 54.1477 61.7259 54.1477 62.5739C54.1477 63.4219 53.4601 64.1095 52.6121 64.1095ZM52.6121 57.9673H28.3883C27.5403 57.9673 26.8528 57.2797 26.8528 56.4317C26.8528 55.5837 27.5403 54.8962 28.3883 54.8962H52.6121C53.4601 54.8962 54.1477 55.5837 54.1477 56.4317C54.1477 57.2797 53.4601 57.9673 52.6121 57.9673Z" fill="#C23A3A"/>
                <path d="M21.114 14.5879H13.0906C11.798 14.6246 10.7648 15.6751 10.749 16.9677V20.3462H21.114V14.5879Z" fill="#C23A3A"/>
                <path d="M56.8154 7.37003C56.7996 6.07741 55.7664 5.02697 54.4738 4.99023H26.5266C25.234 5.02697 24.2008 6.07741 24.1851 7.37003V20.3457H56.8154V7.37003Z" fill="#C23A3A"/>
                <path d="M70.2512 16.9677C70.2354 15.6751 69.2022 14.6246 67.9096 14.5879H59.8862V20.3462H70.2512V16.9677Z" fill="#C23A3A"/>
                <path d="M74.8578 23.4172H6.14218C4.52266 23.4044 2.96462 24.0372 1.81221 25.1754C0.659805 26.3128 0.00749778 27.8634 0 29.4829V54.4542C0 57.8327 2.76368 60.6542 6.14218 60.6542H19.1943V50.7691C19.1943 47.8135 21.5936 45.2987 24.5492 45.2987H56.4508C59.4064 45.2987 61.8057 47.794 61.8057 50.7691V60.6542H74.8578C78.2596 60.6242 81.0015 57.8567 81 54.4542V29.4829C80.9925 27.8634 80.3402 26.3128 79.1878 25.1754C78.0354 24.0372 76.4773 23.4044 74.8578 23.4172ZM22.8412 35.7015H9.02133C8.17333 35.7015 7.48578 35.014 7.48578 34.166C7.48578 33.318 8.17333 32.6305 9.02133 32.6305H22.8412C23.6892 32.6305 24.3768 33.318 24.3768 34.166C24.3768 35.014 23.6892 35.7015 22.8412 35.7015Z" fill="#C23A3A"/>
              </svg>
            </div>
            <a class="is-catlist__catbtns-card__title" href="!#" target="_blank">
              УФ-печать
            </a>
          </div>
        </li>

      </ul>
      <div class="row is-catlist__cards tab-content" id="ex1-content">
        <div
            class="row tab-pane fade show active"
            id="ex1-pills-1"
            role="tabpanel"
            aria-labelledby="ex1-tab-1"
        >
            <?
            $args = array(
                'post_type'      => 'catalog',
                'post_status'    => 'publish',
                'posts_per_page' => - 1,
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
        <div
            class="row tab-pane fade"
            id="ex1-pills-2"
            role="tabpanel"
            aria-labelledby="ex1-tab-2"
        >
            <?
            $args = array(
                'post_type'      => 'catalog',
                'post_status'    => 'publish',
                'posts_per_page' => - 1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'services_tax',
                        'field'    => 'slug',
                        'terms'    => 'adsbuildings'
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
        <div
            class="row tab-pane fade"
            id="ex1-pills-3"
            role="tabpanel"
            aria-labelledby="ex1-tab-3"
        >
            <?
            $args = array(
                'post_type'      => 'catalog',
                'post_status'    => 'publish',
                'posts_per_page' => - 1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'services_tax',
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
        <div
            class="row tab-pane fade"
            id="ex1-pills-4"
            role="tabpanel"
            aria-labelledby="ex1-tab-4"
        >
            <?
            $args = array(
                'post_type'      => 'catalog',
                'post_status'    => 'publish',
                'posts_per_page' => - 1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'services_tax',
                        'field'    => 'slug',
                        'terms'    => 'polygraphy'
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
        <div
            class="row tab-pane fade"
            id="ex1-pills-5"
            role="tabpanel"
            aria-labelledby="ex1-tab-5"
        >
            <?
            $args = array(
                'post_type'      => 'catalog',
                'post_status'    => 'publish',
                'posts_per_page' => - 1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'services_tax',
                        'field'    => 'slug',
                        'terms'    => 'led-tech'
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
        <div
            class="row tab-pane fade"
            id="ex1-pills-6"
            role="tabpanel"
            aria-labelledby="ex1-tab-6"
        >
            <?
            $args = array(
                'post_type'      => 'catalog',
                'post_status'    => 'publish',
                'posts_per_page' => - 1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'services_tax',
                        'field'    => 'slug',
                        'terms'    => 'souvenirs'
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
        <div
            class="row tab-pane fade"
            id="ex1-pills-7"
            role="tabpanel"
            aria-labelledby="ex1-tab-7"
        >
            <?
            $args = array(
                'post_type'      => 'catalog',
                'post_status'    => 'publish',
                'posts_per_page' => - 1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'services_tax',
                        'field'    => 'slug',
                        'terms'    => 'uv-printing'
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
      </div>
    </section>


<?php
get_footer();