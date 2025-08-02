const mainScript = () => {
  gsap.registerPlugin(ScrollTrigger);
  $("html").css("scroll-behavior", "auto");
  $("html").css("height", "auto");
  function replaceHyphenWithSpan(el) {
    $(el).html(function (index, oldHtml) {
      return oldHtml.replaceAll("-", "<span>-</span>");
    });
  }
  const lenis = new Lenis({
  wheelMultiplier: 1.5, // tăng hệ số cuộn chuột, mặc định là 1
});
    function raf(time) {
    lenis.raf(time);
    requestAnimationFrame(raf);
  }
  requestAnimationFrame(raf);
  const viewport = {
    w: window.innerWidth,
    h: window.innerHeight,
  };
  function isInHeaderCheck(el) {
        const rect = $(el).get(0).getBoundingClientRect();
        const headerRect = $('.header').get(0).getBoundingClientRect();
        return (
            rect.bottom >= 0 &&
            rect.top  <= 0
        );
    }
  class Header  {
    constructor() {
      this.tl = null;
    }
    trigger() {
      this.setup();
      this.interact();
    }
    setup() {
      this.tl = gsap.timeline({
        onStart: () => {
          console.log('init')
          $('[data-init-df]').removeAttr('data-init-df');
          this.init = true
        },
        onComplete() {
        }
      });
      $('.navbar-toggler-icon-wrap').on('click', function () {
        console.log('khanh')
        $('body').toggleClass('menu-open');
        $('.main_menu').toggleClass('active');
      })
    }
    play() {
      this.tl.play();
    }
    interact() {
    }
    toggleColorMode = (color) => {
      let elArr = Array.from($(`[data-section="${color}"]`));
      console.log(color)
      if (elArr.some(function (el) { return isInHeaderCheck(el) })) {
        $('.header').addClass(`on-${color}`);
      }
      else if (!$('.header').hasClass('on-show-menu')) {
        $('.header').removeClass(`on-${color}`);
      }
    }
    toggleOnHide = (inst) => {
      const scrollTop = document.documentElement.scrollTop || window.scrollY;
      const $header = $('.header');
      const isScrollHeader = scrollTop > $('.header').height() * (viewport.w > 767 ? 4 : 1.5);
      if (isScrollHeader) {
        if (inst.direction >= 0) {
          $header.addClass('on-hide');
        } 
      } else {
        $header.removeClass('on-hide');
      }
    }

  }
  const header = new Header();
  header.trigger();
 lenis.on("scroll", function (inst) {
    header.toggleColorMode('green');
    header.toggleOnHide(inst);
});
  function swiperSlide() {
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 7500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }
  swiperSlide()
  function lowFloorImg() {
    $('.cove_production_lowfloor_title_txt').on('click', function () {
      var selectedFloor = $(this).data('floor');

      // Bỏ active khỏi tất cả các nút
      $('.cove_production_lowfloor_title_txt').removeClass('active');
      // Gán active cho nút được click
      $(this).addClass('active');

      // Ẩn toàn bộ ảnh
      $('.cove_production_lowfloor_content').removeClass('active');
      // Hiện ảnh tương ứng
      $('.cove_production_lowfloor_content[data-floor="' + selectedFloor + '"]').addClass('active');
    });
    $('.cove_production_lowfloor_close').on('click', function () {
      $(".cove_production_lowfloor").removeClass("active")
    });
    $('.cove_production_highfloor_close').on('click', function () {
      $(".cove_production_highfloor").removeClass("active")
    });
    $('.cove_production_floor_close').on('click', function () {
      $(".cove_production_floor").removeClass("active")
    });
    $('.cove_production_high').on('click', function () {
      $(".cove_production_floor").removeClass("active")
      $(".cove_production_highfloor").addClass("active")
      $(".cove_production_lowfloor").removeClass("active")
    });
    $('.cove_production_next').on('click', function () {
      $(".cove_production_floor").removeClass("active")
      $(".cove_production_highfloor").removeClass("active")
      $(".cove_production_lowfloor").addClass("active")
    });
    $('.cove_production_building').on('click', function () {
      $(".cove_production_floor").addClass("active")
      $(".cove_production_highfloor").removeClass("active")
      $(".cove_production_lowfloor").removeClass("active")
    });
  }
  lowFloorImg()
  function model() {
    $('.cove_model_close').on('click', function () {
      $(".cove_model").removeClass("active")
    });
    $('.cove_model').on('click', function (e) {
      if (!$(e.target).closest('.cove_model_inner').length) {
        $('.cove_model').removeClass('active');
      }
    });
  }
  model()

  function characteristic() {
    $('.cove_characteristic_list_item').hover(
      function () {
        $(this).find('.cove_characteristic_list_item_bg').addClass("active")
        $(".cove_characteristic_list_item_img").addClass("active")
        $(".cove_characteristic_list_item_txt").addClass("active")
        $(this).find('.cove_characteristic_list_item_img').removeClass("active")
        $(this).find('.cove_characteristic_list_item_txt').removeClass("active")
      },
      function () {
        $(this).find('.cove_characteristic_list_item_bg').removeClass("active")
        $(".").removeClass("active")
      }
    );
  }
  // characteristic()
};
window.onload = mainScript;