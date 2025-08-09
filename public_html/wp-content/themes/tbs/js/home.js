function homeDevelop(){
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 'auto',        // Hiển thị 6 slide cùng lúc
    spaceBetween: parseRem(10),        // Khoảng cách giữa các slide
    loop: false,             // Không lặp lại (tuỳ bạn, có thể true nếu cần)
    // breakpoints: {
    //       768: {
    //         slidesPerView: 3,
    //         spaceBetween: parseRem(20),
    //       },
    //       991: {
    //         slidesPerView: 6,
    //         spaceBetween: parseRem(30),
    //       },
    //     },
  });
}
$(document).ready(function () {
  homeDevelop();
});