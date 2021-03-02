/* ********************************nav scroll************************** */
$(window).scroll(function() {
    if ($(document).scrollTop() > 50) {
      $('.navi').addClass('color-change');
      $('.navi a').addClass('li-change');
    } else {
      $('.navi').removeClass('color-change');
      $('.navi a').removeClass('li-change');
    }
  });

  // ******************counters in about*************************
    $('.count').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });


    var swiper2 = new Swiper('.swiper-container-crd', {
      slidesPerView: 1,
      spaceBetween: 10,
      grabCursor: true,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
      el: '.swiper-container-crd .swiper-pagination',
      clickable: true,
      },
      autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      },
      breakpoints: {
      960: {
      slidesPerView: 5,
      spaceBetween: 30
      },
      720: {
      slidesPerView: 3,
      spaceBetween: 30
      },
      540: {
      slidesPerView: 1,
      spaceBetween: 30
      },
      320: {
      slidesPerView: 1,
      spaceBetween: 30
      },
      }
      });

