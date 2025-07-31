function swiperSlide(){
  var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
          delay: 100000,
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
function lowFloorImg(){
  $('.cove_production_lowfloor_title_txt').on('click', function () {
    var selectedFloor = $(this).data('floor');

    // Bỏ active khỏi tất cả các nút
    $('.cove_production_lowfloor_title_txt').removeClass('active');
    // Gán active cho nút được click
    $(this).addClass('active');

    // Ẩn toàn bộ ảnh
    $('.cove_production_lowfloor_img').removeClass('active');
    // Hiện ảnh tương ứng
    $('.cove_production_lowfloor_img[data-floor="' + selectedFloor + '"]').addClass('active');
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
  $('.cove_model_close').on('click', function () {
     $(".cove_model").removeClass("active")
  });
  }
  
  lowFloorImg()