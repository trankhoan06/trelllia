$(document).ready(function () {

  $('.relationship__content__history__year__item[data-year="2025"]').click();
  if ($(document).width() < 768) {
    $('.relationship__content__history__time').addClass('swiper')
    $('.relationship__content__history__year').addClass('swiper-wrapper')
    $('.relationship__content__history__year__item').addClass('swiper-slide')
    let totalSlides = $('.relationship__content__history__time .swiper-slide').length;
    let swiperYear = new Swiper('.relationship__content__history__time', {
      slidesPerView: 1,
      spaceBetween: 0,
      initialSlide: totalSlides - 1,
      on: {
        slideChange: function () {
          let currentIndex = this.realIndex;
          let selectedYear = $('.relationship__content__history__year__item').eq(currentIndex).data('year');

          $('.relationship__content__item').removeClass('active');
          $('.relationship__content__item[data-year="' + selectedYear + '"]').addClass('active');

        }
      }
    })
    $('.relationship__content__history__year__item').click(function () {
      let index = $(this).index();
      swiperYear.slideTo(index, 500);
      var selectedYear = $(this).data('year');
      $('.relationship__content__item').removeClass('active');
      $('.relationship__content__item[data-year="' + selectedYear + '"]').addClass('active');
    });
  }
  else {
    $('.relationship__content__history__year__item').click(function () {
      var selectedYear = $(this).data('year'); // đúng cú pháp
      $('.relationship__content__history__year__item').removeClass('active');
      $(this).addClass('active');
      $('.relationship__content__item').removeClass('active');
      $('.relationship__content__item[data-year="' + selectedYear + '"]').addClass('active');
    });
  }
  function relationHero() {
    let label = new  SplitType('.relationship__hero__content__subtitle', { types: 'lines, words', lineClass: 'klc-line' })
    let title = new SplitType('.relationship__hero__content__smalltitle', { types: 'lines, words', lineClass: 'klc-line' })
    gsap.set(label.words, { autoAlpha: 0, yPercent: 100 })
    gsap.set(title.words, { autoAlpha: 0, yPercent: 100 })
    let tl = new gsap.timeline({
      onStart: () => {
        $('.df_hide_onload').removeClass('df_hide_onload');
      },
    });
    tl
      .fromTo('.relationship__hero__img',{scale: 1.2}, { scale: 1, duration: 2} )
      .to(label.words, {autoAlpha: 1, yPercent: 0, duration: .6, stagger: .025}, '<=0')
      .to(title.words, {autoAlpha: 1, yPercent: 0, duration: .8, stagger: .04}, '<=.2')
  }
  
  relationHero();
});
