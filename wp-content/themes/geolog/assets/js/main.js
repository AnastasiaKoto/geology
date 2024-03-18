document.addEventListener("DOMContentLoaded", function (event) {
  jQuery(function ($) {

    /*bind fancybox */

    Fancybox.bind(".trigger-fancy", {
      mainClass: "global-popup",
      closeButton: '<button data-fancybox-close class="f-button is-close-btn" title="{{CLOSE}}"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M19.7334 1.5537C19.8179 1.46918 19.885 1.36885 19.9307 1.25843C19.9765 1.14801 20 1.02966 20 0.910135C20 0.790614 19.9765 0.672264 19.9307 0.561841C19.885 0.451419 19.8179 0.351086 19.7334 0.266572C19.6489 0.182058 19.5486 0.115019 19.4382 0.06928C19.3277 0.0235414 19.2094 0 19.0899 0C18.9703 0 18.852 0.0235414 18.7416 0.06928C18.6311 0.115019 18.5308 0.182058 18.4463 0.266572L10 8.71469L1.5537 0.266572C1.46918 0.182058 1.36885 0.115019 1.25843 0.06928C1.14801 0.0235414 1.02966 8.90498e-10 0.910135 0C0.790614 -8.90498e-10 0.672264 0.0235414 0.561841 0.06928C0.451419 0.115019 0.351086 0.182058 0.266572 0.266572C0.182058 0.351086 0.115019 0.451419 0.06928 0.561841C0.0235414 0.672264 -8.90498e-10 0.790614 0 0.910135C8.90498e-10 1.02966 0.0235414 1.14801 0.06928 1.25843C0.115019 1.36885 0.182058 1.46918 0.266572 1.5537L8.71469 10L0.266572 18.4463C0.0958887 18.617 0 18.8485 0 19.0899C0 19.3312 0.0958887 19.5627 0.266572 19.7334C0.437255 19.9041 0.668752 20 0.910135 20C1.15152 20 1.38301 19.9041 1.5537 19.7334L10 11.2853L18.4463 19.7334C18.617 19.9041 18.8485 20 19.0899 20C19.3312 20 19.5627 19.9041 19.7334 19.7334C19.9041 19.5627 20 19.3312 20 19.0899C20 18.8485 19.9041 18.617 19.7334 18.4463L11.2853 10L19.7334 1.5537Z" fill="#3EB250"/></svg> </button>',
      dragToClose: false
    });

    /*locataion */
    $(".header-location").hover(function () {
      $(".header-location__place").toggleClass("header-location__place_active");
    });

    $(".mobile-menu-location__city").click(function(){
        $(this).toggleClass("mobile-menu-location__city_active");
    });

    $(".bottom-header__list > li").hover(function () {
      $(this).toggleClass("bottom-header__list_active");
    });
    /*mask */
    $("input[name='phone']").mask("+7 (999) 999-9999");

    /* faq */
    $(".section-faq-question__header").click(function () {
      $(this).toggleClass("section-faq-question__header_active");
    });
    /*close menu */
    $(".mobile-menu__close").click(function(){
      $(".mobile-menu").removeClass("mobile-menu_active");
    });


    /* reviews slider */
    const reviewsSlider = new Swiper('.reviews-slider', {
      // Optional parameters
      loop: false,
      slidesPerView: 4,
      spaceBetween: 30,
      // Navigation arrows
      navigation: {
        nextEl: '.arrow-slider-next',
        prevEl: '.arrow-slider-prev',
      },

    });

    /*advantages slider */
    const advantagesSlider = new Swiper('.reviews-slider', {
      // Optional parameters


      breakpoints: {
        0: {
          slidesPerView: "auto",
          centeredSlider: true,
          loop: true,
          spaceBetween: 9, 
        },
        767:{
          slidesPerView:3,
          spaceBetween: 9, 
        },
        1200: {
          loop: false,
          slidesPerView: 4,
          spaceBetween: 30,
          // Navigation arrows
          navigation: {
            nextEl: '.arrow-slider-next',
            prevEl: '.arrow-slider-prev',
          },
        }
      },


    });


    const empoloyersSlider = new Swiper('.employers-slider', {
      // Optional parameters


      breakpoints: {
        0: {
          initialSlide:1,
          slidesPerView: 1,
          centeredSlider: true,
          loop: true,
          spaceBetween: 18,
          
        },
        767:{
          initialSlide:1,
          slidesPerView: 3,
          centeredSlider: true,
          spaceBetween: 18,
        },
        1200: {
          loop: true,
          slidesPerView: 3,
          spaceBetween: 26,
        }
      },

    });

    const equipmentSlider = new Swiper('.equipment-slider', {
      // Optional parameters
      breakpoints: {
        0: {
          slidesPerView: 1,
          spaceBetween: 5,
          pagination: {
            el: '.slider-pagination',
            clickable: true,
          },
      
        },
        768:{
          loop: true,
          slidesPerView: 2,
          spaceBetween: 26,
        },
        1200: {
          loop: true,
          slidesPerView: 3,
          spaceBetween: 26,
        }
      },

  


    });

    const advSlider = new Swiper('.advantages-slider', {
      // Optional parameters



      breakpoints: {
        // when window width is >= 320px
        0: {

          slidesPerView: 1,
          pagination: {
            el: '.slider-pagination',
            clickable: true,
          },

        },
        576: {
          slidesPerView: 2,
          spaceBetween: 12,
        },
        1200: {
          loop: true,
          slidesPerView: 4,
          spaceBetween: 12,
        }

      }
      ,



    });

    const researchSlider = new Swiper('.research-slider', {
      // Optional parameters
      observer:true,

      breakpoints: {
        // when window width is >= 320px
        0: {
          grid:false,
          slidesPerView: 1,
          spaceBetween: 5,
          pagination: {
            el: '.slider-pagination',
            clickable: true,
          },

        },
        767:{
          slidesPerView: 1,
          spaceBetween: 15,
          grid: {
            rows: 5,
            fill:"rows"

          },
          slidesPerView: 1,

        },
        1200: {
          slidesPerView: 1,
          spaceBetween: 15,
          grid: {
            rows: 5,

          },
          slidesPerView: 1,

        }

      }
      // pagination: {
      //   el: '.slider-pagination',
      //   clickable: true,
      // },

    });

    const conditionSlider = new Swiper('.condition-slider', {
      observer:true,
      // Optional parameters
      breakpoints: {
        // when window width is >= 320px
        0: {

          slidesPerView: 1.15,
          spaceBetween: 9,
          scrollbar: {
            el: '.slider-scroll-bar',
          },
          grid:false

        },
        768:{
          slidesPerView: 1.5,
          spaceBetween: 9,
          scrollbar:false,
          grid:false
        }
        ,
        1200: {
          grid: {
            rows: 6,

          },
          slidesPerView: 1,
          spaceBetween: 9,
        
          slidesPerView: 1,

        }

      }


    });


    const mainBannerSlider = new Swiper('.main-banner-slider', {
      // Optional parameters

      breakpoints: {
        // when window width is >= 320px
        0: {
          slidesPerView: "auto",
          spaceBetween: 10,
          slideToClickedSlide: true,
          grid: false


        },
        768:{
          slidesPerView: 3,
          spaceBetween: 11,
          grid: {
            rows: 2,
            fill: 'row'

          },
        },
        1200: {
          slidesPerView: 3,
          spaceBetween: 11,
          grid: {
            rows: 2,
            fill: 'row'

          },
        }

      }
      // pagination: {
      //   el: '.slider-pagination',
      //   clickable: true,
      // },



    });

    /* mobile menu */
    $(".mobile-menu-trigger").click(function () {
      $(this).next(".mobile-menu").toggleClass("mobile-menu_active");
    });

    //отправляем форму
    $('form .callback-form__btn').each(function() {
      let formSubmitted = false;
      $(this).on('click', function (e) {
        e.preventDefault();
        let form = $(this).closest('form');
        if (formSubmitted == false) {
          form.find('.global_err').removeClass('active');
          let policy = form.find('input[name="agree"]');
          form.find('.error').removeClass('error');
          form.find('.form__error').remove();
    
          if (policy.is(':checked')) {
            formSubmitted = true;
            $.ajax({
              url: '/wp-admin/admin-ajax.php',
              data: form.serialize() + '&action=callback',
              type: 'POST',
            }).done(function (result) {
              formSubmitted = false;
              if (result.errors) {
                $.each(result.errors, function (e, index) {
                  form.find('input[name="' + e + '"]').addClass('error');
                  form
                  .find('input[name="' + e + '"]')
                  .parent()
                  .append('<div class="form__error">' + index[0] + '</div>');
                });
              } else {
                if (result.success == true) {
                  form[0].reset();
                  $('.modal_ok').addClass('active');
                  form.find('.global_err').removeClass('active');
                }
              }
            });
          } else {
            console.log('политика не заполнена');
            policy.parent().addClass('error');
            policy.parent().append('<div class="form__error">Это обязательное поле</div>');
          }
        } else {
          form.find('.global_err').addClass('active');
        }
      });
    });

  })
});