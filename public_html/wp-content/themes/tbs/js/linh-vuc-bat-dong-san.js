var swiper1 = new Swiper(".mySwiper", {
        slidesPerView: 1,        // Hiển thị 6 slide cùng lúc
      spaceBetween: parseRem(30),        // Khoảng cách giữa các slide
      loop: false,             // Không lặp lại (tuỳ bạn, có thể true nếu cần)
      navigation: {
        nextEl: ".estate_button_swiper_next",
        prevEl: ".estate_button_swiper_prev",
      },
  });
  var swiper1 = new Swiper(".mySwiper1", {
        slidesPerView: 1,        // Hiển thị 6 slide cùng lúc
      spaceBetween: parseRem(30),        // Khoảng cách giữa các slide
      loop: false,             // Không lặp lại (tuỳ bạn, có thể true nếu cần)
      navigation: {
        prevEl: ".estate_button1_swiper_prev",
        nextEl: ".estate_button1_swiper_next",
      },
  });