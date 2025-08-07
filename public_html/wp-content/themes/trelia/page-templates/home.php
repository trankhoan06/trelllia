<?php

/**
 * Template Name: HomePage
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
get_header();
?>
<main class="mainpage">
    <section class="cove_hero section full_screen">
        <div class="cove_hero_inner swiper mySwiper">
            <div class="cove_hero_slide swiper-wrapper">
                <div class="cove_hero_slide_item swiper-slide img_fullfill ">
                    <div class="cove_hero_overlay"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/banner-hero.jpg" alt="">
                    
                </div>
                
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section data-section-scroll="cam_hung" class="cove_inspiration full_screen section" data-section="green">
        <div class="kl_container flex">
            <div class="cove_inspiration_inner">
                <div class="cove_inspiration_info">
                    <div class="cove_inspiration_info_title txt_65 txt_title">Cảm hứng</div>
                    <div class="cove_inspiration_info_des txt_justify">Trellia là sự kết hợp tinh tế giữa “Tre” –
                        loài
                        cây thân thuộc trong văn hóa Á Đông, biểu tượng cho sức sống bền bỉ, thanh tao; và “Villa” –
                        phong cách sống riêng tư, đẳng cấp, nhưng vẫn kết nối hài hòa. “Cove” gợi nhắc về
                        một
                        chốn an cư yên bình, ấm áp giữa thiên nhiên.</div>
                    <div class="cove_inspiration_info_des txt_justify">Không chỉ là tên gọi, Trellia Cove còn là một
                        tuyên ngôn sống: thanh lịch, sâu sắc, hài hòa và vững bền. Tại đây, mỗi tổ ấm được
                        nâng
                        niu bởi những giá trị sâu bền, để hạnh phúc sẽ vun đắp qua từng khoảnh khắc đời thường,
                        và
                        “hôm nay” sẽ nuôi dưỡng gốc rễ cho “mai sau” vững vàng, an lành.</div>
                </div>
                <div class="cove_inspiration_list">
                    <div class="cove_inspiration_list_left cove_inspiration_list_item">
                        <div class="cove_inspiration_list_img img_fullfill img_clip_path item4">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/cam_hung4.jpg" alt="" loading="lazy">
                        </div>
                        <div class="cove_inspiration_list_img img_fullfill img_clip_path item3">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/cam_hung3.jpg" alt=""loading="lazy">
                        </div>
                    </div>
                    <div class="cove_inspiration_list_right cove_inspiration_list_item">
                        <div class="cove_inspiration_list_img img_fullfill img_clip_path item1">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/cam_hung1.jpg" alt=""loading="lazy">
                        </div>
                        <div class="cove_inspiration_list_img img_fullfill img_clip_path item2">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/cam_hung2.jpg" alt=""loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-section-scroll="dac_diem_noi_bat" class="cove_characteristic full_screen section">
        <div class="cove_characteristic_bg">
            <div class="cove_characteristic_bg_item img_fullfill active">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bg_characteristic.webp" alt=""loading="lazy">
            </div>
            <div class="cove_characteristic_bg_item img_fullfill">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bg_characteristic2.webp" alt=""loading="lazy">
            </div>
            <div class="cove_characteristic_bg_item img_fullfill">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bg_characteristic3.webp" alt=""loading="lazy">
            </div>
            <div class="cove_characteristic_bg_item img_fullfill">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bg_characteristic4.webp" alt=""loading="lazy">
            </div>
        </div>
        <div class="kl_container">
            <div class="cove_characteristic_overlay"></div>
            <div class="cove_characteristic_inner_wrap">
                <div class="cove_characteristic_content">
                    <div class="cove_characteristic_content_num">
                        4
                    </div>
                    <div class="cove_characteristic_content_txt txt_title txt_65">đặc điểm nổi bật</div>
                </div>
                <div class="cove_characteristic_wrap">
                    <div class="cove_characteristic_inner">
                        <div class="cove_characteristic_list_item">
                            <div class="cove_characteristic_list_item_bg  active">
                                <div class="cove_characteristic_list_item_bg_img img_fullfill"><img
                                        src="<?php echo get_template_directory_uri(); ?>/img/characteristic1.webp"
                                        alt=""></div>
                                <div class="cove_characteristic_list_item_txt active txt_25">“Ốc đảo riêng” cuối
                                    trục
                                    <br>
                                    sống của cả khu đô thị
                                </div>
                            </div>
                            <div class="cove_characteristic_list_item_img img_full" data-type="building">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_characteristic1.svg"
                                    alt="">
                            </div>
                            <div class="cove_characteristic_list_item_txt txt_25">“Ốc đảo riêng” cuối trục <br> sống
                                của cả
                                khu đô thị</div>
                            <div class="cove_characteristic_list_item_line "></div>
                        </div>
                        <div class="cove_characteristic_list_item" data-type="priviate">
                            <div class="cove_characteristic_list_item_bg img_fullfill">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/characteristic2.webp" alt="">
                                <div class="cove_characteristic_list_item_txt active txt_25">An ninh và riêng tư
                                    <br>
                                    vượt
                                    trội
                                </div>
                            </div>
                            <div class="cove_characteristic_list_item_img active img_full">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_characteristic2.svg"
                                    alt="">
                            </div>
                            <div class="cove_characteristic_list_item_txt active txt_25">An ninh và riêng tư <br>
                                vượt
                                trội
                            </div>
                            <div class="cove_characteristic_list_item_line "></div>
                        </div>
                        <div class="cove_characteristic_list_item" data-type="space">
                            <div class="cove_characteristic_list_item_bg img_fullfill">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/characteristic3.webp" alt="">
                                <div class="cove_characteristic_list_item_txt active txt_25">Không gian sống biệt
                                    lập
                                    <br>và
                                    ít bị xáo trộn
                                </div>
                            </div>
                            <div class="cove_characteristic_list_item_img active img_full">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_characteristic3.svg"
                                    alt="">
                            </div>
                            <div class="cove_characteristic_list_item_txt active txt_25">Không gian sống biệt lập
                                <br>và
                                ít
                                bị xáo trộn
                            </div>
                            <div class="cove_characteristic_list_item_line "></div>
                        </div>
                        <div class="cove_characteristic_list_item" data-type="global">
                            <div class="cove_characteristic_list_item_bg img_fullfill">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/characteristic4.webp" alt="">
                                <div class="cove_characteristic_list_item_txt active txt_25">Hưởng trọn toàn bộ <br>
                                    hệ
                                    sinh
                                    thái có sẵn</div>
                            </div>
                            <div class="cove_characteristic_list_item_img active img_full">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/icon_characteristic4.svg"
                                    alt="">
                            </div>
                            <div class="cove_characteristic_list_item_txt active txt_25">Hưởng trọn toàn bộ <br> hệ
                                sinh
                                thái có sẵn</div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination-cus"></div>
            </div>
        </div>
    </section>
    <section data-section-scroll="vi_tri" class="cove_location1 full_screen section" data-section="green">
        <div class="kl_container">
            <div class="cove_location1_inner">
                <div class="cove_location1_img img_fullfill ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/location1.webp" alt="" class="on-dk" loading="lazy">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/vi_tri_img_mob.jpg" alt="" class="on-mob">
                </div>
            </div>
        </div>
    </section>
    <section class="cove_location full_screen section" data-section="green">
        <div class="kl_container flex">
            <div class="cove_location_inner">
                <div class="cove_location_img  img_fullfill">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/location.webp" alt="" loading="lazy">
                </div>
                <div class="cove_location_info">
                    <div class="cove_location_info_overlay"></div>
                    <div class="cove_location_info_inner">
                        <div class="cove_location_info_title txt_title txt_65">Vị trí</div>
                        <div class="cove_location_info_des txt_justify">Trellia Cove sở hữu vị trí "hai mặt hướng
                            thủy"
                            - cực kỳ hiếm khu đô thị tích hợp hiện đại Mizuki Park quy mô 26ha, các chủ nhân tại đây
                            sẽ
                            được sở hữu view 360 độ “có một không hai” với một bên là khu đô thị cùng hệ thống kênh
                            đào,
                            đường dạo bộ, hệ thống công viên ven kênh quanh năm xanh mát và bên còn lại là sông nước
                            mênh mông, quảng trường và bến thuyền vô cùng hiếm hoi của thành phố.</div>
                        <div class="cove_location_info_des txt_justify">Ngoài ra Trellia Cove còn thừa hưởng vị trí
                            chiến lược của Mizuki Park khi tọa lạc tại nút giao ngã 3 Mizuki - Nguyễn Văn Linh lộ
                            giới
                            120m với 10 làn xe. Hạ tầng kết nối, dễ dàng tiếp cận với các khu vực lân cận như khu đô
                            thị
                            Phú Mỹ Hưng, Quận 4, Quận 5 hay trung tâm thành phố… </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="cove_utilities full_screen section">
        <div class="kl_container">
            <div class="cove_utilities_title txt_title txt_65 txt_center">Tiện ích</div>
            <div class="cove_utilities_img img_fullfill">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tienich.webp" alt="" loading="lazy">
            </div>
        </div>
    </section>
    <section data-section-scroll="mat_bang" class="cove_production full_screen section">
        <div class="kl_container">
            <div class="cove_production_btn_wrap first">
                <div class="cove_production_high cove_production_btn_item"><span>Căn hộ Trellia</span></div>
                <div class="cove_production_next cove_production_btn_item"><span>Nhà phố Trellia</span></div>
            </div>

            <div class="cove_production_overlay"></div>
            <div class="cove_production_bg img_fullfill">
                <img src="<?php echo get_template_directory_uri(); ?>/img/bg_production.webp" alt="" loading="lazy">
            </div>
            <div class="  cove_production_building img_full">
            </div>
            <div class=" cove_production_item cove_production_item_building img_full">
            </div>
            <div class=" cove_production_house img_full">
            </div>
            <div class="cove_production_item cove_production_item_house img_full">
            </div>
            <div class="cove_production_content">
                <div class="cove_production_content_title txt_65">Sản phẩm</div>
                <div class="cove_production_content_des txt txt-18 txt_justify">Trellia Cove – Gồm 3 Block căn hộ
                    với
                    817 sản phẩm
                    cao tầng &
                    24 Nhà phố Trellia thấp tầng.</div>
                <div class="cove_production_content_des txt txt-18 txt_justify">Được bao bởi 2 mặt sông nước, với an
                    ninh tuyệt đối,
                    hệ thống
                    tiện ích riêng biệt đây được là phân khu compound duy nhất của Khu đô thị</div>
            </div>
        </div>
        <div class="cove_production_highfloor" data-lenis-prevent>
            <div class="cove_production_btn_wrap">
                <div class="cove_production_high active"><span>Căn hộ Trellia</span></div>
                <div class="cove_production_next"><span>Nhà phố Trellia</span></div>
            </div>
            <div class="cove_production_highfloor_close">
                <svg width="100%" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 3L17.4927 17.4927" stroke="#015533" stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M17.4922 3L2.99953 17.4927" stroke="#015533" stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

            </div>
            <div class="cove_production_highfloor_inner">
                <div class="cove_production_highfloor_title txt_title txt_50">CĂN HỘ LOẠI A</div>
                <div class="swiper cove_production_highfloor_swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide ">
                            <div class="cove_production_highfloor_content">
                                <div class="cove_production_highfloor_area">
                                    <div class="cove_production_highfloor_area_txt">2PN+1WC</div>
                                    <div class="cove_production_highfloor_area_txt">DTTT: ~59.83m2</div>
                                    <div class="cove_production_highfloor_area_txt">DTLL: ~55.17m2</div>
                                </div>
                                <div class="cove_production_highfloor_info">
                                    <div class="cove_production_highfloor_info_txt">2 Phòng ngủ riêng biệt, 1 phòng
                                        tắm.
                                    </div>
                                    <div class="cove_production_highfloor_info_txt">P.Bếp tối ưu hoá diện tích kết
                                        nối
                                        với
                                        bàn ăn và
                                        phòng khách.</div>
                                    <div class="cove_production_highfloor_info_txt">Thiết kế đảm bảo ánh sáng &
                                        Thông
                                        gió tự
                                        nhiên.
                                    </div>
                                    <div class="cove_production_highfloor_info_txt">Căn hộ gọn gàng, hiệu quả, ấm
                                        cúng
                                        cho
                                        gia đình
                                        trẻ. Căn hộ có view cảnh quan kênh và thành phố.</div>
                                </div>
                            </div>
                            <div class="cove_production_highfloor_list">
                                <div class="cove_production_highfloor_list_img img_full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/high-floor1.webp" alt="" loading="lazy">
                                </div>
                                <div class="cove_production_highfloor_list_img1 img_full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/high-floor2.webp" alt=""loading="lazy">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide ">
                            <div class="cove_production_highfloor_content">
                                <div class="cove_production_highfloor_area">
                                    <div class="cove_production_highfloor_area_txt">2PN+1WC</div>
                                    <div class="cove_production_highfloor_area_txt">DTTT: ~59.83m2</div>
                                    <div class="cove_production_highfloor_area_txt">DTLL: ~55.17m2</div>
                                </div>
                                <div class="cove_production_highfloor_info">
                                    <div class="cove_production_highfloor_info_txt">2 Phòng ngủ riêng biệt, 1 phòng
                                        tắm.
                                    </div>
                                    <div class="cove_production_highfloor_info_txt">P.Bếp tối ưu hoá diện tích kết
                                        nối
                                        với
                                        bàn ăn và
                                        phòng khách.</div>
                                    <div class="cove_production_highfloor_info_txt">Thiết kế đảm bảo ánh sáng &
                                        Thông
                                        gió tự
                                        nhiên.
                                    </div>
                                    <div class="cove_production_highfloor_info_txt">Căn hộ gọn gàng, hiệu quả, ấm
                                        cúng
                                        cho
                                        gia đình
                                        trẻ. Căn hộ có view cảnh quan kênh và thành phố.</div>
                                </div>
                            </div>
                            <div class="cove_production_highfloor_list">
                                <div class="cove_production_highfloor_list_img img_full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/high-floor1.webp" alt=""loading="lazy">
                                </div>
                                <div class="cove_production_highfloor_list_img1 img_full">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/high-floor2.webp" alt=""loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cove_production_highfloor_button">
                    <div class="cove_production_floor_button_prev cove_production_highfloor_button_prev img_fullfill">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/prev.svg" alt="">
                    </div>
                    <div class="cove_production_floor_button_next cove_production_highfloor_button_next img_fullfill">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/next.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="cove_production_lowfloor" data-lenis-prevent>
            <div class="cove_production_btn_wrap">
                <div class="cove_production_high"><span>Căn hộ Trellia</span></div>
                <div class="cove_production_next active"><span>Nhà phố Trellia</span></div>
            </div>
            <div class="cove_production_lowfloor_close">
                <svg width="100%" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 3L17.4927 17.4927" stroke="#015533" stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M17.4922 3L2.99953 17.4927" stroke="#015533" stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </div>
            <div class="cove_production_lowfloor_inner">
                <!-- Tabs -->
                <div class=" cove_production_lowfloor_title_swiper">
                    <div class="cove_production_lowfloor_title ">
                        <div class=" cove_production_lowfloor_title_txt txt_30 txt_title active" data-floor="floor1">MẪU
                            D
                        </div>
                        <div class=" cove_production_lowfloor_title_txt txt_30 txt_title" data-floor="floor2">MẪU A
                            và
                            A1
                        </div>
                        <div class=" cove_production_lowfloor_title_txt txt_30 txt_title" data-floor="floor3">MẪU C
                            và
                            C1
                        </div>
                        <div class=" cove_production_lowfloor_title_txt txt_30 txt_title" data-floor="floor4">MẪU D’
                        </div>
                    </div>
                </div>

                <div class="cove_production_lowfloor_content_wrap">
                    <!-- Content Floor 1 -->
                    <div class="cove_production_lowfloor_content active" data-floor="floor1">
                        <div class="swiper swiper-floor1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="cove_production_lowfloor_content_img img_full">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/lowfloor.webp" alt=""loading="lazy">
                                    </div>
                                    <div class="cove_production_lowfloor_content_des txt_25 txt_center">Mặt bằng mẫu
                                        D
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cove_production_lowfloor_content_img img_full">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/lowfloor2.webp" loading="lazy"
                                            alt="">
                                    </div>
                                    <div class="cove_production_lowfloor_content_des txt_25 txt_center">Tầng trệt
                                        mẫu D
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="cove_production_lowfloor_button">
                            <div class="cove_production_floor_button_prev img_fullfill swiper-button-prev-floor1">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/prev.svg" alt="">
                            </div>
                            <div class="cove_production_floor_button_next img_fullfill swiper-button-next-floor1">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/next.svg" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Content Floor 2 -->
                    <div class="cove_production_lowfloor_content" data-floor="floor2">
                        <div class="swiper swiper-floor2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="cove_production_lowfloor_content_img img_full">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/lowfloor.webp" alt="" loading="lazy">
                                    </div>
                                    <div class="cove_production_lowfloor_content_des txt_25 txt_center">Mặt bằng mẫu
                                        D
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cove_production_lowfloor_content_img img_full">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/lowfloor2.webp" loading="lazy"
                                            alt="">
                                    </div>
                                    <div class="cove_production_lowfloor_content_des txt_25 txt_center">Tầng trệt
                                        mẫu D
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cove_production_lowfloor_button">
                            <div class="cove_production_floor_button_prev img_fullfill swiper-button-prev-floor2" >
                                <img src="<?php echo get_template_directory_uri(); ?>/img/prev.svg" alt="">
                            </div>
                            <div class="cove_production_floor_button_next img_fullfill swiper-button-next-floor2">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/next.svg" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Content Floor 3 -->
                    <div class="cove_production_lowfloor_content" data-floor="floor3">
                        <div class="swiper swiper-floor3">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="cove_production_lowfloor_content_img img_full">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/lowfloor.webp" alt="" loading="lazy">
                                    </div>
                                    <div class="cove_production_lowfloor_content_des txt_25 txt_center">Mặt bằng mẫu
                                        D
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cove_production_lowfloor_content_img img_full">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/lowfloor2.webp" loading="lazy"
                                            alt="">
                                    </div>
                                    <div class="cove_production_lowfloor_content_des txt_25 txt_center">Tầng trệt
                                        mẫu D
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cove_production_lowfloor_button">
                            <div class="cove_production_floor_button_prev img_fullfill swiper-button-prev-floor3">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/prev.svg" alt="">
                            </div>
                            <div class="cove_production_floor_button_next img_fullfill swiper-button-next-floor3">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/next.svg" alt="">
                            </div>
                        </div>
                    </div>

                    <!-- Content Floor 4 -->
                    <div class="cove_production_lowfloor_content" data-floor="floor4">
                        <div class="swiper swiper-floor4">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="cove_production_lowfloor_content_img img_full">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/lowfloor.webp" alt="" loading="lazy">
                                    </div>
                                    <div class="cove_production_lowfloor_content_des txt_25 txt_center">Mặt bằng mẫu
                                        D
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="cove_production_lowfloor_content_img img_full">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/lowfloor2.webp" loading="lazy"
                                            alt="">
                                    </div>
                                    <div class="cove_production_lowfloor_content_des txt_25 txt_center">Tầng trệt
                                        mẫu D
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cove_production_lowfloor_button">
                            <div class="cove_production_floor_button_prev img_fullfill swiper-button-prev-floor4">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/prev.svg" alt="">
                            </div>
                            <div class="cove_production_floor_button_next img_fullfill swiper-button-next-floor4">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/next.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="cove_production_floor"data-lenis-prevent>

            <div class="cove_production_btn_wrap">
                <div class="cove_production_high"><span>Căn hộ Trellia</span></div>
                <div class="cove_production_next"><span>Nhà phố Trellia</span></div>
            </div>
            <div class="cove_production_floor_close"><svg width="100%" viewBox="0 0 20 20" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 3L17.4927 17.4927" stroke="#015533" stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M17.4922 3L2.99953 17.4927" stroke="#015533" stroke-width="3" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg></div>
            <div class="cove_production_floor_inner">
                <div class="swiper production_floor1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide cove_production_floor_img img_full">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/floor.webp" alt="" loading="lazy">
                        </div>
                        <div class="swiper-slide cove_production_floor_img img_full">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/floor.webp" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="cove_production_floor_button">
                    <div class="cove_production_floor_button_prev img_fullfill">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/prev.svg" alt="">
                    </div>
                    <div class="cove_production_floor_button_next img_fullfill">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/next.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section data-section-scroll="truyen_thong" class="cove_news full_screen section " data-section="green">
        <div class="kl_container">
            <div class="cove_news_inner active">
                <div class="cove_news_title_wrap">
                    <div class="cove_news_title txt_35 hover-un active">
                        <span>Tin tức</span>
                        <div class="line line-md line-hover">
                            <div class="line-inner line-inner-hover"></div>
                        </div>
                    </div>
                    <div class="cove_news_title txt_35 hover-un">
                        <span>Thư viện</span>
                        <div class="line line-md line-hover">
                            <div class="line-inner line-inner-hover"></div>
                        </div>
                    </div>
                </div>
                <?php
                $categories = [
                    'tin-tuc'   => 'active', // tab đầu tiên active
                    'thu-vien'  => ''
                ];

                foreach ($categories as $category_slug => $active_class) :
                    $args = [
                        'post_type'      => 'post',
                        'posts_per_page' => -1,
                        'category_name'  => $category_slug,
                        'orderby'        => 'date',
                        'order'          => 'DESC'
                    ];
                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        $query->the_post(); // Lấy bài viết đầu tiên
                        $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: get_template_directory_uri() . '/img/default.png';
                        $date  = get_the_date('d/m/Y');
                        $day   = get_the_date('d');
                        $month_year = get_the_date('m/Y');
                        $title = get_the_title();
                        $link  = get_the_permalink();
                        $post_id = get_the_ID();
                ?>
                <div class="cove_news_tab_item <?php echo $active_class; ?>">
                    <!-- BÀI VIẾT MỚI NHẤT -->
                    <div class="cove_news_content news_item" data-id="<?= $post_id ?>">
                        <div class="cove_news_content_img img_full">
                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($title); ?>" loading="lazy">
                        </div>
                        <div class="cove_news_content_info">
                            <div class="cove_news_content_info_time txt_25">
                                <?php echo esc_html($date); ?>
                            </div>
                            <div class="cove_news_content_info_des txt_22 news_item_title">
                                <?php echo esc_html($title); ?>
                            </div>
                            <a href="<?php echo esc_url($link); ?>"
                                class="cove_news_content_info_seemore news_item_more btn-outline"><span>Xem
                                    thêm</span></a>
                        
                        </div>
                    </div>

                    <!-- CÁC BÀI VIẾT CÒN LẠI -->
                    <div class="cove_news_other active">
                        <?php
                                while ($query->have_posts()) : $query->the_post();
                                    $thumb2 = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: get_template_directory_uri() . '/img/tree.png';
                                     $date2  = get_the_date('d/m/Y');
                                    $title2 = get_the_title();
                                    $link2 = get_the_permalink();
                                     $post_id2 = get_the_ID();
                                ?>
                        <div class="cove_news_other_item news_item" data-id="<?= $post_id2 ?>">
                            <div class="cove_news_other_img img_full">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/tree.png"
                                    alt="<?php echo esc_attr($title2); ?>" loading="lazy">
                            </div>
                            <div class="cove_news_other_info">
                                <div class="cove_news_other_info_day txt_25">
                                    <?php echo esc_html($date2); ?>
                                </div>
                                <div class="cove_news_other_info_des txt_22 news_item_title">
                                    <?php echo esc_html($title2); ?>
                                </div>
                                <a href="<?php echo esc_url($link2); ?>"
                                    class="news_item_more cove_news_other_info_seemore btn-outline"><span>Xem
                                        thêm</span></a>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <?php
                        wp_reset_postdata();
                    endif;
                endforeach;
                ?>

            </div>
        </div>
    </section>
    <section class="cove_partner full_screen section">
        <div class="kl_container">
            <div class="cove_partner_title txt_center txt_35">KHU ĐÔ THỊ TÍCH HỢP MIZUKI PARK</div>
            <div class="cove_partner_logo_img img_full">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo_partner.png" alt="">
            </div>
            <div class="cove_partner_title2 txt_center">Được phát triển bởi <br> các nhà đầu tư uy tín từ việt nam
                và
                nhật bản</div>
            <div class="cove_partner_list">
                <div class="cove_partner_list_item img_full">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo_namlong.png" alt="">
                </div>
                <div class="cove_partner_list_item img_full">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo_nnr.png" alt="">
                </div>
                <div class="cove_partner_list_item img_full">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo_hankyu.png" alt="">
                </div>
            </div>
            <div class="cove_partner_title1 txt_center txt_28">Đối tác phát triển dự án</div>
            <div class="cove_partner_list_partner">
                <div class="cove_partner_list_partner_item">
                    <div class="cove_partner_list_partner_item_img img_full">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/doi-tac-xay-dung.png" alt="">
                    </div>
                    <div class="cove_partner_list_partner_item_txt txt_center txt_16">Đối tác xây dựng</div>
                </div>
                <div class="cove_partner_list_partner_item">
                    <div class="cove_partner_list_partner_item_img img_full">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tu-van-quy-hoach.png" alt="">
                    </div>
                    <div class="cove_partner_list_partner_item_txt txt_center txt_16">Tư vấn quy hoạch cảnh quan
                    </div>
                </div>
                <div class="cove_partner_list_partner_item">
                    <div class="cove_partner_list_partner_item_img img_full">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/thiet-ke-kien-truc.png" alt="">
                    </div>
                    <div class="cove_partner_list_partner_item_txt txt_center txt_16">Thiết kế kiến trúc căn hộ
                    </div>
                </div>
                <div class="cove_partner_list_partner_item">
                    <div class="cove_partner_list_partner_item_img img_full">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tu-van-thiet-ke-ha-tang.png" alt="">
                    </div>
                    <div class="cove_partner_list_partner_item_txt txt_center txt_16">Tư vấn thiết kế hạ tầng</div>
                </div>
            </div>
        </div>
    </section>
    <footer data-section-scroll="lien_he" class="cove_contact full_screen section" data-section="green">
        <div class="kl_container">
            <div class="cove_contact_inner">
                <div class="cove_contact_list">
                    <div class="cove_contact_list_img_wrap">
                        <div class="cove_contact_list_img img_list img_full img_clip_path">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/footer1.jpg" alt="">
                        </div>
                        <div class="cove_contact_list_img img_full img_clip_path">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/footer2.jpg" alt="">
                        </div>
                    </div>
                    <div class="cove_contact_list_img_wrap">
                        <div class="cove_contact_list_img img_full img_clip_path">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/footer3.jpg" alt="">
                        </div>
                        <div class="cove_contact_list_img img_full img_clip_path">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/footer4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="cove_contact_info">
                    <div class="cove_contact_info_title txt_55 txt_title">Liên hệ</div>
                    <div class="cove_contact_info_inner">
                        <div class="cove_contact_inner_info_form">
                            <?php echo do_shortcode('[contact-form-7 id="0acc8e8" title="Form Footer"]'); ?>
                            <div class="cove_contact_inner_info_form_des txt_17">Bằng việc bấm vào nút "Gửi", Quý
                                khách
                                hàng đồng ý với Chính sách Bảo vệ Dữ liệu Cá nhân của chúng tôi</div>
                        </div>
                        <div class="cove_contact_inner_info_address">
                            <div class="cove_contact_inner_info_address_title txt_22">Hotline</div>
                            <a href="tel:0902000895" class="cove_contact_inner_info_address_title txt_22">0902 000
                                895</a>
                            <div class="cove_contact_inner_info_address_title1 ">CÔNG TY CỔ PHẦN ĐẦU TƯ NAM LONG
                            </div>
                            <div class="cove_contact_inner_info_address_des">Số 6 Nguyễn Khắc Viện, P. Tân Mỹ, TP.
                                Hồ
                                Chí Minh</div>
                            <a class="cove_contact_inner_info_address_ggmap btn-bg" target="_blank"
                                href="https://maps.app.goo.gl/Uyza95g8HBkj3ZxWA?g_st=ipc">Google map</a>
                            <div class="cove_contact_inner_info_address_list">
                                <a href="https://www.facebook.com/share/17Boo548tQ/?mibextid=wwXIfr" target="_blank"
                                    class="cove_contact_inner_info_address_list_icon img_full">
                                    <svg width="100%" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21.3838 31.7823V21.2405H24.9223L25.4521 17.1322H21.3838V14.5091C21.3838 13.3197 21.7142 12.509 23.42 12.509L25.5955 12.508V8.83358C25.2191 8.7837 23.9278 8.67188 22.4254 8.67188C19.2888 8.67188 17.1414 10.5864 17.1414 14.1024V17.1323H13.5938V21.2406H17.1413V31.7824L21.3838 31.7823Z"
                                            fill="currentColor" />
                                    </svg>

                                </a>
                                <a href="https://youtube.com/playlist?list=PLHLDo_d930aM-NimkVKTvcR4BwNpqc4yp&si=sKuwQc85bHm7yq8d" target="_blank"
                                    class="cove_contact_inner_info_address_list_icon img_full">
                                    <svg width="100%" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M31.2542 14.2279C31.1276 13.7547 30.8782 13.3228 30.5308 12.9755C30.1835 12.6282 29.7505 12.3776 29.275 12.2488C27.5248 11.7813 20.5291 11.7812 20.5291 11.7812C20.5291 11.7812 13.5334 11.7813 11.7832 12.2488C11.3077 12.3776 10.8747 12.6282 10.5273 12.9755C10.18 13.3228 9.93058 13.7547 9.80402 14.2279C9.33594 15.9744 9.33594 19.6165 9.33594 19.6165C9.33594 19.6165 9.33594 23.2586 9.80402 25.0051C9.93058 25.4782 10.18 25.9101 10.5273 26.2574C10.8747 26.6047 11.3077 26.8553 11.7832 26.9841C13.5334 27.4517 20.5291 27.4517 20.5291 27.4517C20.5291 27.4517 27.5248 27.4517 29.275 26.9841C29.7505 26.8553 30.1835 26.6047 30.5308 26.2574C30.8782 25.9101 31.1276 25.4782 31.2542 25.0051C31.7223 23.2586 31.7222 19.6165 31.7222 19.6165C31.7222 19.6165 31.7223 15.9744 31.2542 14.2279Z"
                                            fill="currentColor" />
                                        <path class="cove_contact_inner_info_address_list_icon_path"
                                            d="M18.2891 21.8622V16.2656L23.8856 19.0639L18.2891 21.8622Z"
                                            fill="#E0E2E2" />
                                    </svg>

                                </a>
                                <a href="https://maps.app.goo.gl/Uyza95g8HBkj3ZxWA?g_st=ipc" target="_blank"
                                    class="cove_contact_inner_info_address_list_icon img_full">
                                    <svg width="100%" viewBox="0 0 40 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.4948 16.9688V12.9688H16.0518C15.7348 14.1767 15.5448 15.5378 15.5078 16.9688H19.4948Z"
                                            fill="currentColor" />
                                        <path
                                            d="M19.4964 11.9653V8.03125C18.2214 8.34525 17.0914 9.83925 16.3594 11.9653H19.4964Z"
                                            fill="currentColor" />
                                        <path
                                            d="M19.4958 17.9688H15.5078C15.5448 19.3997 15.7358 20.7608 16.0518 21.9688H19.4958V17.9688Z"
                                            fill="currentColor" />
                                        <path
                                            d="M14.5114 17.9688H10.5234C10.5994 19.4088 10.9854 20.7678 11.6344 21.9688H15.0174C14.7214 20.7517 14.5454 19.4028 14.5114 17.9688Z"
                                            fill="currentColor" />
                                        <path
                                            d="M24.488 16.9688C24.451 15.5378 24.26 14.1767 23.944 12.9688H20.5V16.9688H24.488Z"
                                            fill="currentColor" />
                                        <path
                                            d="M15.0174 12.9688H11.6344C10.9854 14.1697 10.5984 15.5287 10.5234 16.9688H14.5104C14.5454 15.5347 14.7214 14.1858 15.0174 12.9688Z"
                                            fill="currentColor" />
                                        <path
                                            d="M20.5 8.03125V11.9653H23.637C22.905 9.83925 21.775 8.34525 20.5 8.03125Z"
                                            fill="currentColor" />
                                        <path
                                            d="M24.9766 21.9688H28.3596C29.0086 20.7678 29.3956 19.4088 29.4706 17.9688H25.4836C25.4486 19.4028 25.2726 20.7517 24.9766 21.9688Z"
                                            fill="currentColor" />
                                        <path
                                            d="M19.4964 26.9027V22.9688H16.3594C17.0914 25.0947 18.2214 26.5887 19.4964 26.9027Z"
                                            fill="currentColor" />
                                        <path
                                            d="M15.2956 22.9688H12.2656C13.4646 24.6487 15.1906 25.9278 17.2066 26.5488C16.4206 25.6798 15.7656 24.4507 15.2956 22.9688Z"
                                            fill="currentColor" />
                                        <path
                                            d="M24.7001 11.9628H27.7301C26.5311 10.2828 24.8051 9.00381 22.7891 8.38281C23.5751 9.25181 24.2301 10.4808 24.7001 11.9628Z"
                                            fill="currentColor" />
                                        <path
                                            d="M24.7001 22.9688C24.2301 24.4507 23.5751 25.6798 22.7891 26.5488C24.8051 25.9278 26.5311 24.6487 27.7301 22.9688H24.7001Z"
                                            fill="currentColor" />
                                        <path
                                            d="M15.2956 11.9628C15.7656 10.4808 16.4206 9.25181 17.2066 8.38281C15.1906 9.00381 13.4646 10.2828 12.2656 11.9628H15.2956Z"
                                            fill="currentColor" />
                                        <path
                                            d="M20.5 22.9688V26.9027C21.775 26.5887 22.905 25.0947 23.637 22.9688H20.5Z"
                                            fill="currentColor" />
                                        <path
                                            d="M24.9766 12.9688C25.2726 14.1858 25.4486 15.5347 25.4826 16.9688H29.4696C29.3936 15.5287 29.0076 14.1697 28.3586 12.9688H24.9766Z"
                                            fill="currentColor" />
                                        <path
                                            d="M20.5 17.9688V21.9688H23.943C24.26 20.7608 24.45 19.3997 24.487 17.9688H20.5Z"
                                            fill="currentColor" />
                                        <path
                                            d="M22 28.9688H21.5V28.4688C21.5 28.1928 21.276 27.9688 21 27.9688H19C18.724 27.9688 18.5 28.1928 18.5 28.4688V28.9688H18C17.724 28.9688 17.5 29.1927 17.5 29.4688V31.4688C17.5 31.7448 17.724 31.9688 18 31.9688H22C22.276 31.9688 22.5 31.7448 22.5 31.4688V29.4688C22.5 29.1927 22.276 28.9688 22 28.9688Z"
                                            fill="currentColor" />
                                        <path
                                            d="M27 30.9688H22C21.724 30.9688 21.5 30.7448 21.5 30.4688C21.5 30.1928 21.724 29.9688 22 29.9688H27C27.276 29.9688 27.5 30.1928 27.5 30.4688C27.5 30.7448 27.276 30.9688 27 30.9688Z"
                                            fill="currentColor" />
                                        <path
                                            d="M18 30.9688H13C12.724 30.9688 12.5 30.7448 12.5 30.4688C12.5 30.1928 12.724 29.9688 13 29.9688H18C18.276 29.9688 18.5 30.1928 18.5 30.4688C18.5 30.7448 18.276 30.9688 18 30.9688Z"
                                            fill="currentColor" />
                                    </svg>

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="cove_contact_subtitle txt_center">TRANG WEB THUỘC BẢN QUYỀN CỦA NAM LONG GROUP</div>
                    <div class="cove_contact_logo img_full">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/namlong.png" alt="">
                    </div>
                    <div class="cove_contact_des txt_center  txt_17">Hình ảnh phối cảnh & bố trí công trình mang
                        tính
                        chất minh họa, có thể điều chỉnh. Thông tin chính thức được căn cứ trên hợp đồng mua bán.
                    </div>
                    <div class="cove_contact_des txt_center  txt_17">© 2025 Trellia Cove. All Rights Reserved.</div>
                </div>
            </div>
        </div>
    </footer>
</main>
<section class="cove_btn">
    <div class="cove_btn_list">
        <a href="tel:0902000895" target="_blank" class="cove_btn_list_item img_full">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_phone.svg" alt="">
        </a>
        <a href="http://360.mizuki.vn/trelliacove" target="_blank" class="cove_btn_list_item img_full">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_rotate.svg" alt="">
        </a>
        <a data-section-scroll-item="lien_he" class="cove_btn_list_item img_full">
            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_table.svg" alt="">
        </a>
    </div>
    <div class="cove_btn_crolltop img_full">
        <img src="<?php echo get_template_directory_uri(); ?>/img/icon_crolltop.svg" alt="">
    </div>
</section>
<svg width="0" height="0" viewBox="0 0 20 20" style="position: absolute;">
    <defs>
        <clipPath id="cam_hung1" clipPathUnits="objectBoundingBox">
            <path
                d="M0.945992 0.66014C0.93199 0.580639 0.93099 0.500384 0.943325 0.420882L1 0.0512564C1 -0.00224698 0.934323 1.37267e-05 0.934323 1.37267e-05L0.0658682 1.37267e-05C0.0658682 1.37267e-05 0.000191544 -0.00224697 0.000191544 0.0512564L0.0568669 0.420882C0.0692021 0.500384 0.0682019 0.580639 0.0541998 0.66014L0.000191544 0.96722C0.000191544 0.96722 -0.00647613 1 0.0588672 1H0.940991C1.00633 1 0.999667 0.96722 0.999667 0.96722L0.945658 0.66014H0.945992Z"
                fill="black" />
        </clipPath>
    </defs>
</svg>
<div class="news_popup" data-lenis-prevent>
    <div class="news_popup_overlay"></div>
    <div class="news_popup_main">
        <div class="news_popup_inner">
        <div class="news_popup_close">X</div>
        <div class="news_popup_title  txt txt_50 txt_title">Trellia Cove Dấu Ấn Biệt Lập Giữa Lòng Đại Đô Thị Mizuki
            Park</div>
        <div class="news_popup_time txt txt_22">05/11/2024</div>
        <div class="news_popup_content txt txt_18">
        </div>
    </div>
    </div>
</div>
</body>

</html>
<?php get_footer(); ?>