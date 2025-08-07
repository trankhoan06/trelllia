const mainScript = () => {
  gsap.registerPlugin(ScrollTrigger, Observer);
  $("html").css("scroll-behavior", "auto");
  $("html").css("height", "auto");
  function replaceHyphenWithSpan(el) {
    $(el).html(function (index, oldHtml) {
      return oldHtml.replaceAll("-", "<span>-</span>");
    });
  }
  const lenis = new Lenis({
    lerp: 0.15,
    smootth: false
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

    return Math.abs(rect.top - headerRect.top) <= 2; // sai số 2px là chấp nhận được
  }
  let observer;
  if (viewport.w > 991) {
    const sections = gsap.utils.toArray(".section");
    let currentIndex = 0;
    let isAnimating = false;

    function goToSection(index) {
      index = Math.max(0, Math.min(sections.length - 1, index));

      if (index === currentIndex || isAnimating) return;

      isAnimating = true;
      currentIndex = index;

      lenis.stop();

      gsap.to(window, {
        scrollTo: sections[index],
        duration: .6,
        onComplete: () => {
            gsap.delayedCall(0.2, () => {
              isAnimating = false;
              lenis.start();
          });
        }
      });
    }
    sections.forEach((panel, i) => {
      ScrollTrigger.create({
        trigger: panel,
        start: "top center",
        onEnter: () => {
          if (!isAnimating){
            currentIndex = i;
          } 
        }
      });
    });

    // Observer chỉ tạo 1 lần (bên ngoài vòng lặp)
     observer = Observer.create({
      target: window,
      type: "wheel,touch",
      onUp: () => {
          console.log(isAnimating)
        if (!document.querySelector('html.open-popup') && !isAnimating) {
          goToSection(currentIndex - 1);
        }
      },
      onDown: () => {
          console.log(isAnimating)
        if (!document.querySelector('html.open-popup') && !isAnimating) {
          goToSection(currentIndex + 1);
        }
      },
      preventDefault: (event) => {
        return !document.documentElement.classList.contains('open-popup');
      },
      tolerance: 20
    });
  }
  // setTimeout(function () {
  //   $('.cove_model').addClass('active');
  //   ScrollTrigger.refresh();
  // }, 500)
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
          $('.cove_btn_crolltop').addClass('active')
        }
      } else {
        $('.cove_btn_crolltop').removeClass('active')
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
  function validationForm() {
    console.log($('form.wpcf7-form'))
    $('form.wpcf7-form').each(function () {
      const $form = $(this);

      $form.find('.cove_model_form_submit').on('click', function (e) {
        let isValid = true;
        let name = $form.find('[name="name"]').val().trim();
        let phone = $form.find('[name="phone"]').val().trim();
        let email = $form.find('[name="email"]').val().trim();
        let $this = $(this)

        // Reset trạng thái lỗi
        $form.find('.form_message').text('');
        $form.find('[name]').removeClass('error');

        // Kiểm tra họ tên
        if (name === '') {
          $form.find('[name="name"]').addClass('error');
          $form.find('[name="name"]').next('.form_message').text("Vui lòng nhập họ tên");
          isValid = false;
        }

        // Kiểm tra số điện thoại
        if (phone === '') {
          $form.find('[name="phone"]').addClass('error');
          $form.find('[name="phone"]').next('.form_message').text("Vui lòng nhập số điện thoại");
          isValid = false;
        } else {
          let phonePattern = /^[0-9]{10}$/;
          if (!phonePattern.test(phone)) {
            $form.find('[name="phone"]').addClass('error');
            $form.find('[name="phone"]').next('.form_message').text("Số điện thoại không hợp lệ");
            isValid = false;
          }
        }

        // Kiểm tra email
        if (email === '') {
          $form.find('[name="email"]').addClass('error');
          $form.find('[name="email"]').next('.form_message').text("Vui lòng nhập email");
          isValid = false;
        } else {
          let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailPattern.test(email)) {
            $form.find('[name="email"]').addClass('error');
            $form.find('[name="email"]').next('.form_message').text("Email không đúng định dạng");
            isValid = false;
          }
        }

        if (isValid) {
          $this.addClass('on_submit');
          setTimeout(function () {
            window.location.href = '/thankyou';
          }, 2000)
        }
        else {
          e.preventDefault();
        }
      });
    });

  }
  validationForm();
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
  const popupSelector = '.cove_production_lowfloor, .cove_production_highfloor, .cove_production_floor';

  function isAnyPopupOpen() {
    return $(popupSelector).is('.active');
  }

  function disableObserverIfWide() {
    if (window.innerWidth > 991 && typeof observer !== 'undefined') {
      observer.disable();
      $('html').addClass('open-popup');
      lenis.stop();
    }
  }

  function enableObserverIfWide() {
    if (window.innerWidth > 991 && typeof observer !== 'undefined') {
      observer.enable();
      $('html').removeClass('open-popup')
      lenis.start();
    }
  }

  $('.cove_production_building, .cove_production_next, .cove_production_high').on('click', function () {
    disableObserverIfWide();

    if ($(this).hasClass('cove_production_high')) {
      $(".cove_production_floor, .cove_production_lowfloor").removeClass("active");
      $(".cove_production_highfloor").addClass("active");
    } else if ($(this).hasClass('cove_production_next')) {
      $(".cove_production_floor, .cove_production_highfloor").removeClass("active");
      $(".cove_production_lowfloor").addClass("active");
    } else {
      $(".cove_production_floor").addClass("active");
      $(".cove_production_highfloor, .cove_production_lowfloor").removeClass("active");
    }
  });

  $('.cove_production_lowfloor_close, .cove_production_highfloor_close, .cove_production_floor_close').on('click', function () {
    $(this).closest(popupSelector).removeClass('active');

    setTimeout(() => {
      if (!isAnyPopupOpen()) {
        enableObserverIfWide();
      }
    }, 100);
  });

  $('.cove_production_lowfloor_title_txt').on('click', function () {
    var selectedFloor = $(this).data('floor');

    $('.cove_production_lowfloor_title_txt').removeClass('active');
    $(this).addClass('active');

    $('.cove_production_lowfloor_content').removeClass('active');
    $('.cove_production_lowfloor_content[data-floor="' + selectedFloor + '"]').addClass('active');
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
    let swiper_production = new Swiper('.cove_production_lowfloor_title_swiper', {
      slidesPerView: 'auto',
      spaceBetween: 30,
    });
  }
  $('[data-section-scroll-item]').on('click', function (e) {
    e.preventDefault();
    if ($('body').hasClass('menu-open')) {
      header.deactiveMenuTablet();
    }
    let value = $(this).attr('data-section-scroll-item');

    lenis.scrollTo(`[data-section-scroll="${value}"]`, {
      duration: 1.6
    });
  });
  $('.cove_btn_crolltop').on('click', function (e) {
    e.preventDefault();
    $(this).removeClass('active')
    lenis.scrollTo('top', {
      duration: 1
    })
  })

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
    let tl = new gsap.timeline({
      scrollTrigger: {
        trigger: '.cove_inspiration_list',
        start: 'top top+=65%',
      },
      onComplete: () => {
        $('.cove_inspiration_list_img').addClass('on_hover')
      }
    })
    new MasterTimeline({
      timeline: tl,
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
    if(viewport.w > 991){
    $('.cove_characteristic_list_item').each((idx, item) => {
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
      else if (idx == $('.cove_characteristic_list_item').length - 1) {
        let tlItem = new gsap.timeline({
          onComplete: () => {
            if (viewport.w > 767) {
              startAutoScrollCharacteristic();
            }
          }
        })
        new MasterTimeline({
          timeline: tlItem,
          triggerInit: $(item),
          scrollTrigger: { trigger: $(item) },
          tweenArr: [
            new ScaleInset({ el: $(item).find('.cove_characteristic_list_item_img').get(0) }),
            new FadeSplitText({ el: $(item).find('.cove_characteristic_list_item_txt ').get(1), onMask: true, isDisableRevert: true }),
            new ScaleLine({ el: $(item).find('.cove_characteristic_list_item_line').get(0) })
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
    }
    let itemText = new SplitType('.cove_characteristic_list_item_bg .cove_characteristic_list_item_txt ', { types: 'lines, words', lineClass: 'kv_line' });
    let autoCharacteristicInterval;
    let autoRestartDelay = 8000;

    function triggerCharacteristicItem($item) {
      if ($item.find('.cove_characteristic_list_item_bg').hasClass('active')) return;

      $('.cove_characteristic_list_item_bg').removeClass('active');
      $('.cove_characteristic_list_item').removeClass('active_prev');
      $item.prev('.cove_characteristic_list_item').addClass('active_prev');
      $item.find('.cove_characteristic_list_item_bg').addClass('active');

      let index = $item.index();
      $('.cove_characteristic_bg_item').removeClass('active');
      $('.cove_characteristic_bg_item').eq(index).addClass('active');

      gsap.fromTo('.cove_characteristic_bg_item', { scale: 1.4 }, { scale: 1, duration: 1.6, ease: 'power3.out' });
      gsap.fromTo(
        $item.find('.cove_characteristic_list_item_bg .cove_characteristic_list_item_txt .word'),
        { yPercent: 100, autoAlpha: 0 },
        { autoAlpha: 1, yPercent: 0, duration: .6, stagger: .025, ease: 'power3.out' }
      );
    }


    function startAutoScrollCharacteristic(startIndex = 0) {
      let $items = $('.cove_characteristic_list_item');
      let currentIndex = startIndex;

      function nextItem() {
        let $current = $items.eq(currentIndex);
        triggerCharacteristicItem($current);
        currentIndex = (currentIndex + 1) % $items.length;
      }

      autoCharacteristicInterval = setInterval(nextItem, 5000);
      nextItem();
    }

    // Xử lý click thủ công
    $('.cove_characteristic_list_item').on('click', function () {
      clearInterval(autoCharacteristicInterval);
      triggerCharacteristicItem($(this));

      // Lấy lại vị trí index hiện tại để tiếp tục auto đúng chỗ
      let clickedIndex = $(this).index();
      setTimeout(() => {
        startAutoScrollCharacteristic((clickedIndex + 1) % $('.cove_characteristic_list_item').length);
      }, autoRestartDelay);
    });

    if (viewport.w < 767) {
      $('.cove_characteristic_wrap').addClass('swiper')
      $('.cove_characteristic_inner').addClass('swiper-wrapper')
      $('.cove_characteristic_list_item').addClass('swiper-slide')
      let cove_characteristic = new Swiper('.cove_characteristic_wrap', {
        slidesPerView: 1,
        spaceBetween: 20,
        autoplay: {
          delay: 4000,       // chuyển slide mỗi 5 giây
          disableOnInteraction: false, // vẫn tiếp tục autoplay sau khi người dùng tương tác
        },
        loop: true,
        pagination: {
          el: ".swiper-pagination-cus",
          clickable: true,
        },
        on: {
          slideChange: function () {
            let index = this.realIndex; // Lấy index hiện tại
            let $item = $('.cove_characteristic_list_item').eq(index);
            triggerCharacteristicItem($item);
          }
        }
      });
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
      triggerInit: '.cove_production_content_title',
      scrollTrigger: { trigger: '.cove_production_content_title' },
      tweenArr: [
        new FadeSplitText({ el: $('.cove_production_content_title ').get(0), onMask: true }),
        ...$('.cove_production_content_des ').map((idx, el) => new FadeIn({ el: el })),
      ]
    })
  }
  product();
  function event() {
    $(".news_item_more").on("click", function (e) {
      e.preventDefault();
      lenis.stop();
      $('html').addClass('open-popup');
      let parent = $(this).closest(".news_item");
      let postId = parent.data("id");
      if(viewport.w>991){
        observer.disable();
      }
      $.ajax({
        url: ajaxurl, // đã định nghĩa từ WordPress (nếu chưa thì thêm thủ công)
        type: "POST",
        dataType: "json",
        data: {
          action: "get_post_detail",
          post_id: postId,
        },
        success: function (res) {
          if (res.success) {
            $('.news_popup_title').text(res.data.title);
            $('.news_popup_time').text(res.data.updated);
            $('.news_popup_content').html(res.data.content);
            $('.news_popup').addClass('active');
          } else {
            alert("Không tìm thấy dữ liệu bài viết.");
          }
        },
        error: function () {
          alert("Có lỗi xảy ra khi tải bài viết.");
        },
      });
    });

    $('.news_popup_close').on('click', function () {
      lenis.start();
      $('html').removeClass('open-popup');
      $('.news_popup').removeClass('active');
      if(viewport.w>991){
        observer.enable();
      }
    })
    $('.news_popup').on('click', function (e) {
      // Nếu click không nằm trong phần inner
      if (!$(e.target).closest('.news_popup_inner').length) {
        lenis.start();
      $('html').removeClass('open-popup');
        $('.news_popup').removeClass('active');
        if(viewport.w>991){
        observer.enable();
      }
      }
    });
    new MasterTimeline({
      triggerInit: '.cove_news_title_wrap',
      scrollTrigger: { trigger: '.cove_news_title_wrap' },
      tweenArr: [
        ...$('.cove_news_title  ').map((idx, el) => new FadeIn({ el: el })),
        new FadeIn({ el: '.cove_news_content' }),
        new ScaleInset({ el: $('.cove_news_content_img ').get(0) }),
        new FadeSplitText({ el: $('.cove_news_content_info_time ').get(0), onMask: true }),
        new FadeIn({ el: $('.cove_news_content_info_des ').get(0) }),
        new FadeIn({ el: $('.cove_news_content_info_seemore ').get(0) }),

      ]
    })
    $('.cove_news_other_item').each((idx, item) => {
      new MasterTimeline({
        triggerInit: '.cove_news_other ',
        scrollTrigger: { trigger: '.cove_news_other ' },
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
  function footer() {

    let tl = new gsap.timeline({
      scrollTrigger: {
        trigger: '.cove_contact_list',
        start: 'top top+=65%',
      },
      onComplete: () => {
        $('.cove_contact_list_img').addClass('on_hover')
      }
    })
    new MasterTimeline({
      timeline: tl,
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
  ScrollTrigger.refresh()
};
window.onload = mainScript;