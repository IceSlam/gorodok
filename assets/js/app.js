$(function () {
    var fx = function fx() {
        $(".capt").each(function (i, el) {
            var data = parseInt(this.dataset.n, 10);
            var props = {
                "from": {
                    "count": 0
                },
                "to": {
                    "count": data
                }
            };
            $(props.from).animate(props.to, {
                duration: 1000 * 1,
                step: function (now, fx) {
                    $(el).text(Math.ceil(now));
                },
                complete:function() {
                    if (el.dataset.sym !== undefined) {
                        el.textContent = el.textContent.concat(el.dataset.sym)
                    }
                }
            });
        });
    };

    var reset = function reset() {
        //console.log($(this).scrollTop())
        if ($(this).scrollTop() > 1300) {
            $(this).off("scroll");
            fx()
        }
    };

    $(window).on("scroll", reset);
});

$('.is-reviews__slider-slide__more').click(function(eventObject){
    $(this).toggleClass('rotate');
    $(this).parent().find('.is-reviews__slider-slide__review').toggleClass('show');
    if ($(this).parent().find('.is-reviews__slider-slide__review').hasClass('show')) {
        $(this).html('Скрыть <img src="https://gorodok17.ru/wp-content/themes/gorodok/assets/img/about_page_reviews_more.svg" alt="Скрыть">');
    } else {
        $(this).html('Подробнее <img src="https://gorodok17.ru/wp-content/themes/gorodok/assets/img/about_page_reviews_more.svg" alt="Больше">');
    }
    return false;
});

(function() {
    'use strict';

    var goTopBtn = document.querySelector('.is-navbar');
    function trackScroll() {
        let scrolled = window.pageYOffset;
        let coords = document.documentElement.clientHeight;

        if (scrolled > coords) {
            goTopBtn.classList.add('thin');
        }
        if (scrolled < coords) {
            goTopBtn.classList.remove('thin');
        }
    }

    function backToTop() {
        if (window.pageYOffset > 30) {
            window.scrollBy(0, -40);
            setTimeout(backToTop, 0);
        }
    }
    window.addEventListener('scroll', trackScroll);
})();

showMenu = () => {
    document.getElementById('is-navbar-mobile').classList.toggle("show")
}

(function() {
    'use strict';

    var scrollTopBtn = document.querySelector('.back_to_top');
    function topScroll() {
        let scrolled = window.pageYOffset;
        let coords = document.documentElement.clientHeight;

        if (scrolled > coords) {
            scrollTopBtn.classList.add('show');
        }
        if (scrolled < coords) {
            scrollTopBtn.classList.remove('show');
        }
    }

    function scrollToTop() {
        if (window.pageYOffset > 30) {
            window.scrollBy(0, -40);
            setTimeout(scrollToTop, 0);
        }
    }
    window.addEventListener('scroll', topScroll);
})();


let cls = 0;

new PerformanceObserver((entryList) => {
    for (const entry of entryList.getEntries()) {
        if (!entry.hadRecentInput) {
            cls += entry.value;
            console.log('Current CLS value:', cls, entry);
        }
    }
}).observe({type: 'layout-shift', buffered: true});

