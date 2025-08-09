function aboutArchive(){
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,        // Hiển thị 6 slide cùng lúc
    spaceBetween: parseRem(10),        // Khoảng cách giữa các slide
    loop: false,             // Không lặp lại (tuỳ bạn, có thể true nếu cần)
    navigation: {
      nextEl: ".button_swiper_next",
      prevEl: ".button_swiper_prev",
    },
    breakpoints: {
          768: {
            slidesPerView: 3,
            spaceBetween: parseRem(20),
          },
          991: {
            slidesPerView: 6,
            spaceBetween: parseRem(30),
          },
        },
  });
}
aboutArchive();
function aboutValue(){
  if(viewport.w < 768){
    $('.value_swiper').addClass('swiper');
    $('.about_value_item').addClass('swiper-slide');
    $('.about_value_wrap').addClass('swiper-wrapper');
    var swiper1 = new Swiper(".value_swiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination-value",
        clickable: true,
      },
    });
  }
  
}
aboutValue();

function aboutHistory(){
  var swiper = new Swiper(".about_history_swiper", {
    slidesPerView: 'auto',        // Hiển thị 6 slide cùng lúc
    spaceBetween: parseRem(0),        // Khoảng cách giữa các slide
    loop: false,             // Không lặp lại (tuỳ bạn, có thể true nếu cần)
    breakpoints: {
          768: {
            slidesPerView: 'auto',
            spaceBetween: parseRem(0),
          },
          991: {
            slidesPerView: 'auto',
            spaceBetween: parseRem(0),
          },
        },
  });
  
}
aboutHistory();