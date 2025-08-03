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
      rect.top <= 0
    );
  }
  class Header {
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
      let menu_item = new SplitType('.main_menu_item_txt ', { types: 'lines, words', lineClass: 'kv_line' });
    }
    play() {
      this.tl.play();
    }
    interact() {
      $(".navbar-toggler-icon-wrap").on("click", (e) => {
        e.preventDefault();
        if ($('body').hasClass('menu-open')) {
          $('body').removeClass('menu-open');
          this.deactiveMenuTablet();
        }
        else {
          $('body').addClass('menu-open');
          this.activeMenuTablet();
        }
      })
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
    activeMenuTablet = () => {
      // lenis.stop();
      gsap.fromTo('.main_menu_item_txt .word', { autoAlpha: 0, yPercent: 100 }, { duration: .8, autoAlpha: 1, yPercent: 0, stagger: .025, ease: "circ.inOut" });
      gsap.fromTo('.main_menu_logo', { scale: 1.5 }, { duration: 1, scale: 1, ease: "circ.inOut" });
      gsap.fromTo('.main_menu', { clipPath: 'polygon(100% 0%, 100% 0%, 100% 100%, 100% 100%)' }, {
        duration: 1, clipPath: 'polygon(0% 0%, 100% 0, 100% 100%, 0% 100%)', ease: "circ.inOut"
      });
    }
    deactiveMenuTablet = () => {
      // lenis.start();
      $('body').removeClass('menu-open')
      gsap.fromTo('.main_menu_item_txt .word', { autoAlpha: 1, yPercent: 0 }, { duration: .6, autoAlpha: 0, yPercent: 100, stagger: .025, ease: "circ.inOut" });
      gsap.fromTo('.main_menu_logo', { scale: 1 }, { duration: .8, scale: .8, ease: "circ.inOut" });
      gsap.fromTo('.main_menu', { clipPath: 'polygon(0% 0%, 100% 0, 100% 100%, 0% 100%)' }, {
        duration: 1, clipPath: 'polygon(0% 0%, 0% 0%, 0% 100%, 0% 100%)', ease: "circ.inOut"
      });
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
      speed: 800,
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

  const floorKeys = ['floor1', 'floor2', 'floor3', 'floor4'];
  // Khởi tạo từng Swiper riêng
  floorKeys.forEach(function (floor) {
    new Swiper('.swiper-' + floor, {
      slidesPerView: 1,
      spaceBetween: 0,
      navigation: {
        nextEl: '.swiper-button-next-' + floor,
        prevEl: '.swiper-button-prev-' + floor,
      },
    });
  });
  new Swiper('.production_floor1', {
    slidesPerView: 1,
    spaceBetween: 0,
    navigation: {
      nextEl: '.cove_production_floor_button_next',
      prevEl: '.cove_production_floor_button_prev',
    },
  });
  new Swiper('.cove_production_highfloor_swiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    navigation: {
      nextEl: '.cove_production_highfloor_button_next',
      prevEl: '.cove_production_highfloor_button_prev',
    },
  });
  // Tab click handler
  $('.cove_production_lowfloor_title_txt').click(function () {
    const floor = $(this).data('floor');

    $('.cove_production_lowfloor_title_txt').removeClass('active');
    $(this).addClass('active');

    $('.cove_production_lowfloor_content').removeClass('active');
    $('.cove_production_lowfloor_content[data-floor="' + floor + '"]').addClass('active');
  });
  if (viewport.w < 768) {
    $('.cove_production_lowfloor_title_swiper').addClass('swiper')
    $('.cove_production_lowfloor_title').addClass('swiper-wrapper')
    $('.cove_production_lowfloor_title_txt').addClass('swiper-slide')
    let khanh = new Swiper('.cove_production_lowfloor_title_swiper', {
      slidesPerView: 'auto',
      spaceBetween: 30,
    });
  }
 $('[data-section-scroll-item]').on('click', function(e) {
  e.preventDefault();
  if($('body').hasClass('menu-open')){
    header.deactiveMenuTablet();
  }
  let value = $(this).attr('data-section-scroll-item');

  lenis.scrollTo(`[data-section-scroll="${value}"]`, {
    duration: 1.6
  });
});

  function hero() {
    let itemText = new SplitType('.cove_hero_slide_item:first-child .cove_hero_slide_item_txt ', { types: 'lines, words', lineClass: 'kv_line' });
    let tl = new gsap.timeline({
      onStart: () => {
        $('.df_hide_onload').removeClass('df_hide_onload');
      },
    });
    tl
      .fromTo('.cove_hero_slide_item:first-child img', { scale: 1.4, autoAlpha: 1 }, { scale: 1, autoAlpha: 1, duration: 1.6, ease: 'power.out4' })
      .fromTo('.cove_hero_slide_item:first-child .cove_hero_slide_item_txt .word', { autoAlpha: 0, yPercent: 100 }, { autoAlpha: 1, yPercent: 0, duration: .6, stagger: .02 }, '<=.6')
  }
  hero();
  function inspiration() {
    new MasterTimeline({
      triggerInit: '.cove_inspiration_info ',
      scrollTrigger: { trigger: '.cove_inspiration_info ' },
      tweenArr: [
        new FadeSplitText({ el: $('.cove_inspiration_info_title').get(0), onMask: true }),
        ...$('.cove_inspiration_info_des ').map((idx, el) => new FadeIn({ el: el })),
      ]
    })
    // gsap.set('.cove_inspiration_inner img', {scale: 1.3, objectPosition: 'top'})
    new MasterTimeline({
      triggerInit: '.cove_inspiration_list ',
      scrollTrigger: { trigger: '.cove_inspiration_list ' },
      tweenArr: [
        ...$('.cove_inspiration_list_img  ').map((idx, el) => new ScaleInset({ el: el })),
      ]
    })
    // let tlScroll = gsap.timeline({
    //     scrollTrigger: {
    //       trigger: '.cove_inspiration_inner',
    //       start: viewport.w > 991 ? 'top+=50% bottom' : 'top+=70% bottom-=70%',
    //       end: viewport.w > 991 ? 'bottom top-=40%' : 'bottom-=40% top-=40%',
    //       scrub: 1,
    //     }
    //   });
    //   tlScroll
    //   .fromTo('.cove_inspiration_inner img', { yPercent: 15 }, { yPercent: -15 , ease: 'none'}, 0)
  }
  inspiration();
  function characteristic() {
    new MasterTimeline({
      triggerInit: '.cove_characteristic_content ',
      scrollTrigger: { trigger: '.cove_characteristic_content ' },
      tweenArr: [
        new ScaleInset({ el: $('.cove_characteristic_bg_item').get(0) }),
        new FadeIn({ el: $('.cove_characteristic_content_num').get(0) }),
        new FadeSplitText({ el: $('.cove_characteristic_content_txt ').get(0), onMask: true, isDisableRevert: true }),
      ]
    })
    $('.cove_characteristic_list_item').each((idx, item) => {
      console.log(idx)
      if (idx == 0) {
        new MasterTimeline({
          triggerInit: $(item),
          scrollTrigger: { trigger: $(item) },
          tweenArr: [
            new ScaleInset({ el: $(item).find('.cove_characteristic_list_item_bg_img').get(0) }),
            new FadeSplitText({ el: $(item).find('.cove_characteristic_list_item_txt ').get(0), onMask: true, isDisableRevert: true })
          ]
        })
      }
      else {
        new MasterTimeline({
          triggerInit: $(item),
          scrollTrigger: { trigger: $(item) },
          tweenArr: [
            new ScaleInset({ el: $(item).find('.cove_characteristic_list_item_img').get(0) }),
            new FadeSplitText({ el: $(item).find('.cove_characteristic_list_item_txt ').get(1), onMask: true, isDisableRevert: true }),
            new ScaleLine({ el: $(item).find('.cove_characteristic_list_item_line').get(0) })
          ]
        })
      }
    })
    let itemText = new SplitType('.cove_characteristic_list_item_bg .cove_characteristic_list_item_txt ', { types: 'lines, words', lineClass: 'kv_line' });
    $('.cove_characteristic_list_item ').hover(function () {
      if ($(this).find('.cove_characteristic_list_item_bg ').hasClass('active')) return;
      $('.cove_characteristic_list_item_bg ').removeClass('active');
      $('.cove_characteristic_list_item').removeClass('active_prev');
      $(this).prev('.cove_characteristic_list_item').addClass('active_prev');
      $(this).find('.cove_characteristic_list_item_bg ').addClass('active');
      let index = $(this).index();
      $('.cove_characteristic_bg_item ').removeClass('active');
      $('.cove_characteristic_bg_item ').eq(index).addClass('active');
      gsap.fromTo('.cove_characteristic_bg_item', { scale: 1.4 }, { scale: 1, duration: 1.6, ease: 'power3.out' })
      gsap.fromTo($(this).find('.cove_characteristic_list_item_bg .cove_characteristic_list_item_txt .word '), { yPercent: 100, autoAlpha: 0 }, { autoAlpha: 1, yPercent: 0, duration: .4, stagger: .025, ease: 'power3.out' });

    }),
      function () {

      }
  }
  characteristic()
  new MasterTimeline({
    triggerInit: '.cove_location1',
    scrollTrigger: { trigger: '.cove_location1' },
    tweenArr: [
      new ScaleInset({ el: $('.cove_location1_img').get(0) }),
    ]
  })
  function position() {
    new MasterTimeline({
      triggerInit: '.cove_location_inner',
      scrollTrigger: { trigger: '.cove_location_inner' },
      tweenArr: [
        new ScaleInset({ el: $('.cove_location_img').get(0) }),
      ]
    }),
      new MasterTimeline({
        triggerInit: '.cove_location_info ',
        scrollTrigger: { trigger: '.cove_location_info ' },
        tweenArr: [
          new FadeSplitText({ el: $('.cove_location_info_title').get(0), onMask: true }),
          ...$('.cove_location_info_des ').map((idx, el) => new FadeIn({ el: el })),
        ]
      })
  }
  position();
  function cove_utilities_img() {
    new MasterTimeline({
      triggerInit: '.cove_utilities',
      scrollTrigger: { trigger: '.cove_utilities' },
      tweenArr: [
        new ScaleInset({ el: $('.cove_utilities_img ').get(0) }),
        new FadeSplitText({ el: $('.cove_utilities_title ').get(0), onMask: true }),
      ]
    })
  }
  cove_utilities_img();
  function product() {
    new MasterTimeline({
      triggerInit: '.cove_production_btn_wrap.first',
      scrollTrigger: { trigger: '.cove_production_btn_wrap.first' },
      tweenArr: [
        new ScaleInset({ el: $('.cove_production_bg ').get(0) }),
        ...$('.cove_production_btn_item ').map((idx, el) => new FadeIn({ el: el })),
      ]
    })
    new MasterTimeline({
      triggerInit: '.cove_production_content',
      scrollTrigger: { trigger: '.cove_production_content' },
      tweenArr: [
        new FadeSplitText({ el: $('.cove_production_content_title ').get(0), onMask: true }),
        ...$('.cove_production_content_des ').map((idx, el) => new FadeIn({ el: el })),
      ]
    })
  }
  product();
  function event() {
    new MasterTimeline({
      triggerInit: '.cove_news_title_wrap',
      scrollTrigger: { trigger: '.cove_news_title_wrap' },
      tweenArr: [
        ...$('.cove_news_title  ').map((idx, el) => new FadeIn({ el: el })),
        new ScaleInset({ el: $('.cove_news_content_img ').get(0) }),
        new FadeSplitText({ el: $('.cove_news_content_info_time ').get(0), onMask: true }),
        new FadeIn({ el: $('.cove_news_content_info_des ').get(0) }),
        new FadeIn({ el: $('.cove_news_content_info_seemore ').get(0) }),

      ]
    })
    $('.cove_news_other_item').each((idx, item) => {
      new MasterTimeline({
        triggerInit: '.cove_news_title_wrap',
        scrollTrigger: { trigger: '.cove_news_title_wrap' },
        tweenArr: [
          new ScaleLine({ el: $(item).find('.cove_news_other_img') }),
          new FadeSplitText({ el: $(item).find('.cove_news_other_info_day ').get(0), onMask: true }),
          new FadeSplitText({ el: $(item).find(' .cove_news_other_info_time  ').get(0), onMask: true }),
          new FadeIn({ el: $(item).find(' .cove_news_other_info_des  ').get(0) }),
          new FadeIn({ el: $(item).find('.cove_news_other_info_seemore ').get(0) }),

        ]
      })
    })
    $('.cove_news_title').on('click', function () {
      let index = $(this).index();
      $('.cove_news_title').removeClass('active')
      $(this).addClass('active');
      $('.cove_news_tab_item').removeClass('active')
      $('.cove_news_tab_item').eq(index).addClass('active')
    })
  }
  event();
  function partner() {
    new MasterTimeline({
      triggerInit: '.cove_partner  .kl_container',
      scrollTrigger: { trigger: '.cove_partner  .kl_container' },
      tweenArr: [
        new FadeSplitText({ el: $('.cove_partner_title ').get(0), onMask: true }),
        new FadeIn({ el: $('.cove_partner_logo_img ').get(0) }),
        new FadeSplitText({ el: $('.cove_partner_title2 ').get(0), onMask: true }),
        ...$('.cove_partner_list_item  ').map((idx, el) => new FadeIn({ el: el })),
        new FadeSplitText({ el: $('.cove_partner_title1  ').get(0), onMask: true }),
        ...$('.cove_partner_list_partner_item  ').map((idx, el) => new FadeIn({ el: el })),
      ]
    })
  }
  partner();
  function footer(){
     new MasterTimeline({
      triggerInit: '.cove_contact_list ',
      scrollTrigger: { trigger: '.cove_contact_list ' },
      tweenArr: [
        ...$('.cove_contact_list_img  ').map((idx, el) => new ScaleInset({ el: el })),
      ]
    })
    new MasterTimeline({
      triggerInit: '.cove_contact_info ',
      scrollTrigger: { trigger: '.cove_contact_info ' },
      tweenArr: [
        new FadeSplitText({ el: $('.cove_contact_info_title ').get(0), onMask: true }),
        new FadeIn({ el: $('.cove_contact_inner_info_form ').get(0) }),
        new FadeSplitText({ el: $('.cove_contact_inner_info_form_des ').get(0), onMask: true }),

      ]
    })
    new MasterTimeline({
      triggerInit: '.cove_contact_inner_info_address ',
      scrollTrigger: { trigger: '.cove_contact_inner_info_address ' },
      tweenArr: [
        ...$('.cove_contact_inner_info_address_title  ').map((idx, el) => new FadeSplitText({ el: el, onMask: true }),),
        new FadeSplitText({ el: $('.cove_contact_inner_info_address_title1 ').get(0), onMask: true }),
        new FadeSplitText({ el: $('.cove_contact_inner_info_address_des ').get(0), onMask: true }),
        new FadeIn({ el: $('.cove_contact_inner_info_address_ggmap ').get(0) }),
        new FadeSplitText({ el: $('.cove_contact_inner_info_form_des ').get(0), onMask: true }),
        ...$('.cove_contact_inner_info_address_list_icon  ').map((idx, el) => new FadeIn({ el: el }),),
        new FadeSplitText({ el: $('.cove_contact_subtitle ').get(0), onMask: true }),
        new FadeIn({ el: $('.cove_contact_logo ').get(0) }),
        ...$('.cove_contact_des  ').map((idx, el) => new FadeSplitText({ el: el, onMask: true }),),

      ]
    })
  }
  footer();
};
window.onload = mainScript;