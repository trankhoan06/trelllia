$(document).ready(function(){
function factory(){
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1.5,        // Hiển thị 6 slide cùng lúc
    spaceBetween: parseRem(35),        // Khoảng cách giữa các slide
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
            slidesPerView: 4,
            spaceBetween: parseRem(30),
          },
        },
  });
}
factory()

function figure(){
  var swiper = new Swiper(".industrial_figure_slide_wrap", {
    slidesPerView: 2,        // Hiển thị 6 slide cùng lúc
    spaceBetween: parseRem(35),        // Khoảng cách giữa các slide
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
            slidesPerView: 4,
            spaceBetween: parseRem(30),
          },
        },
  });
}
figure();
})