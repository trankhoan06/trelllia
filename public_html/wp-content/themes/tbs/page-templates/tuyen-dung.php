<?php

/**
 * Template Name: Tuyển dụng
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
get_header();
wp_enqueue_style('tuyen-dung', get_template_directory_uri() . '/css/tuyen-dung.css', [], SITE_VERSION, 'all');
$pageID = get_queried_object_id();


$pageID = get_queried_object_id();

// === Banner Chính ===
$banner_image = wp_get_attachment_url(tr_posts_field('banner_image', $pageID));
$banner_image_mobile = wp_get_attachment_url(tr_posts_field('banner_image_mobile', $pageID));
$banner_title = tr_posts_field('banner_title', $pageID);

// === Văn hóa doanh nghiệp ===
$culture_title = tr_posts_field('culture_title', $pageID);
$culture_des = tr_posts_field('culture_des', $pageID);
$culture_image = wp_get_attachment_url(tr_posts_field('culture_image', $pageID));

// === Hoạt động của TSB Group ===
$active_title = tr_posts_field('active_title', $pageID);
$active_item = tr_posts_field('active_item', $pageID); // Mỗi item: ['active_item_image', 'active_item_caption']

// === Lý do chọn TSB Group ===
$reason_title = tr_posts_field('reason_title', $pageID);
$reason_item = tr_posts_field('reason_item', $pageID); 
?>
   <svg width="0" height="0" viewBox="0 0 20 20" class="svg_bg"  >
        <defs>
          <clipPath id="hexClipLarge" clipPathUnits="objectBoundingBox">
            <path
              d="M0.97663 0H0V1H0.73548C0.75023 1 0.7634 0.98662 0.76842 0.96654L0.99859 0.04532C1.00409 0.02327 0.99282 0 0.97663 0Z"
              fill="#D9D9D9"
            ></path>
          </clipPath>
          <clipPath id="hexClipLarge2" clipPathUnits="objectBoundingBox">
            <path
              d="M0.25913 0H1L0.999417 1H0.0233349C0.00711659 1 -0.00414672 0.976501 0.00145583 0.954353L0.237251 0.0222071C0.240626 0.00886479 0.24936 0 0.25913 0Z"
              fill="#D9D9D9"
            />
          </clipPath>
        </defs>
      </svg>
    <section class="recruit_hero">
        <div class="recruit_hero_img img_full">
            <img class="middle" src="<?php echo $banner_image ?>" alt="">
            <img class="middle" src="<?php echo $banner_image_mobile ?>" alt="">
        </div>
        <div class="recruit_hero_txt txt_uppercase txt_55"><?= wp_kses_post($banner_title) ?></div>
    </section>
    <section class="recruit_resreach">
        <div class="kl_container">
            <div class="recruit_resreach_top">
                <div class="recruit_resreach_top_input">
                    <input type="text" placeholder="Tìm kiếm việc làm" >
                    <div class="recruit_resreach_top_input_icon img_full">
                        <img src="<?= get_template_directory_uri(); ?>/img/icon_search.svg" alt="">
                    </div>  
                </div>
                <div class="recruit_resreach_top_list txt_17">
                    <select>
                        <option class="txt_17" disabled selected>DANH SÁCH BỘ PHẬN</option>
                        <option class="txt_17">Phòng Nhân Sự</option>
                        <option class="txt_17">Phòng Kế Toán</option>
                        <option class="txt_17">Phòng Kỹ Thuật</option>
                        <option class="txt_17">Phòng Marketing</option>
                    </select>
                    <div class="recruit_resreach_top_list_icon img_full">
                        <img src="<?= get_template_directory_uri(); ?>/img/arrow_down.svg" alt="">
                    </div>
                     <div class="recruit_resreach_top_list_icon2 img_full">
                        <img src="<?= get_template_directory_uri(); ?>/img/icon_list.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="recruit_resreach_list">
                <div class="recruit_resreach_list_inner mySwiper">
                    <div class="recruit_resreach_list_card">
                        <div class="recruit_resreach_list_card_item">
                            <div class="recruit_resreach_list_card_item_title txt_bold txt_uppercase txt_17">Nhân viên kinh doanh</div>
                            <div class="recruit_resreach_list_card_item_info">
                                <div class="recruit_resreach_list_card_item_info_icon img_full">
                                    <img src="<?= get_template_directory_uri(); ?>/img/recruit_location.svg" alt="">
                                </div>

                                <div class="recruit_resreach_list_card_item_info_location txt_17">Bình Dương</div>
                                <div class="recruit_resreach_list_card_item_info_time txt_17">30.04.2025</div>
                            </div>
                            <a href="#" class="recruit_resreach_list_card_item_link" >
                                <div class="recruit_resreach_list_card_item_link_txt txt_18 txt_uppercase">Ứng tuyển</div>
                                <div class="recruit_resreach_list_card_item_link_img img_full">
                                   <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.1327 14.7425C12.8328 15.0282 12.8212 15.5029 13.1069 15.8029C13.3926 16.1028 13.8673 16.1144 14.1672 15.8287L13.1327 14.7425ZM21.5172 8.82874C21.8172 8.54308 21.8288 8.06835 21.5431 7.7684C21.2574 7.46845 20.7827 7.45687 20.4828 7.74254L21.5172 8.82874ZM20.4828 8.82883C20.7827 9.11449 21.2574 9.10292 21.5431 8.80297C21.8288 8.50302 21.8172 8.02829 21.5172 7.74262L20.4828 8.82883ZM14.1672 0.742618C13.8673 0.456953 13.3926 0.468533 13.1069 0.76848C12.8212 1.06843 12.8328 1.54316 13.1327 1.82882L14.1672 0.742618ZM21 9.03562C21.4142 9.03562 21.75 8.69983 21.75 8.28562C21.75 7.87141 21.4142 7.53562 21 7.53562V9.03562ZM1.39997 7.53562C0.98576 7.53562 0.649973 7.87141 0.649973 8.28562C0.649973 8.69983 0.98576 9.03562 1.39997 9.03562V7.53562ZM14.1672 15.8287L21.5172 8.82874L20.4828 7.74254L13.1327 14.7425L14.1672 15.8287ZM21.5172 7.74262L14.1672 0.742618L13.1327 1.82882L20.4828 8.82883L21.5172 7.74262ZM21 7.53562L1.39997 7.53562V9.03562L21 9.03562V7.53562Z"
                                            fill="#014129" />
                                    </svg>
                                </div>
                            </a>

                        </div>
                         <div class="recruit_resreach_list_card_item">
                            <div class="recruit_resreach_list_card_item_title txt_bold txt_uppercase txt_17">Nhân viên kinh doanh</div>
                            <div class="recruit_resreach_list_card_item_info">
                                <div class="recruit_resreach_list_card_item_info_icon img_full">
                                    <img src="<?= get_template_directory_uri(); ?>/img/recruit_location.svg" alt="">
                                </div>

                                <div class="recruit_resreach_list_card_item_info_location txt_17">Bình Dương</div>
                                <div class="recruit_resreach_list_card_item_info_time txt_17">30.04.2025</div>
                            </div>
                            <a href="#" class="recruit_resreach_list_card_item_link" >
                                <div class="recruit_resreach_list_card_item_link_txt txt_18 txt_uppercase">Ứng tuyển</div>
                                <div class="recruit_resreach_list_card_item_link_img img_full">
                                   <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.1327 14.7425C12.8328 15.0282 12.8212 15.5029 13.1069 15.8029C13.3926 16.1028 13.8673 16.1144 14.1672 15.8287L13.1327 14.7425ZM21.5172 8.82874C21.8172 8.54308 21.8288 8.06835 21.5431 7.7684C21.2574 7.46845 20.7827 7.45687 20.4828 7.74254L21.5172 8.82874ZM20.4828 8.82883C20.7827 9.11449 21.2574 9.10292 21.5431 8.80297C21.8288 8.50302 21.8172 8.02829 21.5172 7.74262L20.4828 8.82883ZM14.1672 0.742618C13.8673 0.456953 13.3926 0.468533 13.1069 0.76848C12.8212 1.06843 12.8328 1.54316 13.1327 1.82882L14.1672 0.742618ZM21 9.03562C21.4142 9.03562 21.75 8.69983 21.75 8.28562C21.75 7.87141 21.4142 7.53562 21 7.53562V9.03562ZM1.39997 7.53562C0.98576 7.53562 0.649973 7.87141 0.649973 8.28562C0.649973 8.69983 0.98576 9.03562 1.39997 9.03562V7.53562ZM14.1672 15.8287L21.5172 8.82874L20.4828 7.74254L13.1327 14.7425L14.1672 15.8287ZM21.5172 7.74262L14.1672 0.742618L13.1327 1.82882L20.4828 8.82883L21.5172 7.74262ZM21 7.53562L1.39997 7.53562V9.03562L21 9.03562V7.53562Z"
                                            fill="#014129" />
                                    </svg>
                                </div>
                            </a>

                        </div>
                         <div class="recruit_resreach_list_card_item">
                            <div class="recruit_resreach_list_card_item_title txt_bold txt_uppercase txt_17">Nhân viên kinh doanh</div>
                            <div class="recruit_resreach_list_card_item_info">
                                <div class="recruit_resreach_list_card_item_info_icon img_full">
                                    <img src="<?= get_template_directory_uri(); ?>/img/recruit_location.svg" alt="">
                                </div>

                                <div class="recruit_resreach_list_card_item_info_location txt_17">Bình Dương</div>
                                <div class="recruit_resreach_list_card_item_info_time txt_17">30.04.2025</div>
                            </div>
                            <a href="#" class="recruit_resreach_list_card_item_link" >
                                <div class="recruit_resreach_list_card_item_link_txt txt_18 txt_uppercase">Ứng tuyển</div>
                                <div class="recruit_resreach_list_card_item_link_img img_full">
                                   <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.1327 14.7425C12.8328 15.0282 12.8212 15.5029 13.1069 15.8029C13.3926 16.1028 13.8673 16.1144 14.1672 15.8287L13.1327 14.7425ZM21.5172 8.82874C21.8172 8.54308 21.8288 8.06835 21.5431 7.7684C21.2574 7.46845 20.7827 7.45687 20.4828 7.74254L21.5172 8.82874ZM20.4828 8.82883C20.7827 9.11449 21.2574 9.10292 21.5431 8.80297C21.8288 8.50302 21.8172 8.02829 21.5172 7.74262L20.4828 8.82883ZM14.1672 0.742618C13.8673 0.456953 13.3926 0.468533 13.1069 0.76848C12.8212 1.06843 12.8328 1.54316 13.1327 1.82882L14.1672 0.742618ZM21 9.03562C21.4142 9.03562 21.75 8.69983 21.75 8.28562C21.75 7.87141 21.4142 7.53562 21 7.53562V9.03562ZM1.39997 7.53562C0.98576 7.53562 0.649973 7.87141 0.649973 8.28562C0.649973 8.69983 0.98576 9.03562 1.39997 9.03562V7.53562ZM14.1672 15.8287L21.5172 8.82874L20.4828 7.74254L13.1327 14.7425L14.1672 15.8287ZM21.5172 7.74262L14.1672 0.742618L13.1327 1.82882L20.4828 8.82883L21.5172 7.74262ZM21 7.53562L1.39997 7.53562V9.03562L21 9.03562V7.53562Z"
                                            fill="#014129" />
                                    </svg>
                                </div>
                            </a>

                        </div>
                         <div class="recruit_resreach_list_card_item">
                            <div class="recruit_resreach_list_card_item_title txt_bold txt_uppercase txt_17">Nhân viên kinh doanh</div>
                            <div class="recruit_resreach_list_card_item_info">
                                <div class="recruit_resreach_list_card_item_info_icon img_full">
                                    <img src="<?= get_template_directory_uri(); ?>/img/recruit_location.svg" alt="">
                                </div>

                                <div class="recruit_resreach_list_card_item_info_location txt_17">Bình Dương</div>
                                <div class="recruit_resreach_list_card_item_info_time txt_17">30.04.2025</div>
                            </div>
                            <a href="#" class="recruit_resreach_list_card_item_link" >
                                <div class="recruit_resreach_list_card_item_link_txt txt_18 txt_uppercase">Ứng tuyển</div>
                                <div class="recruit_resreach_list_card_item_link_img img_full">
                                   <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.1327 14.7425C12.8328 15.0282 12.8212 15.5029 13.1069 15.8029C13.3926 16.1028 13.8673 16.1144 14.1672 15.8287L13.1327 14.7425ZM21.5172 8.82874C21.8172 8.54308 21.8288 8.06835 21.5431 7.7684C21.2574 7.46845 20.7827 7.45687 20.4828 7.74254L21.5172 8.82874ZM20.4828 8.82883C20.7827 9.11449 21.2574 9.10292 21.5431 8.80297C21.8288 8.50302 21.8172 8.02829 21.5172 7.74262L20.4828 8.82883ZM14.1672 0.742618C13.8673 0.456953 13.3926 0.468533 13.1069 0.76848C12.8212 1.06843 12.8328 1.54316 13.1327 1.82882L14.1672 0.742618ZM21 9.03562C21.4142 9.03562 21.75 8.69983 21.75 8.28562C21.75 7.87141 21.4142 7.53562 21 7.53562V9.03562ZM1.39997 7.53562C0.98576 7.53562 0.649973 7.87141 0.649973 8.28562C0.649973 8.69983 0.98576 9.03562 1.39997 9.03562V7.53562ZM14.1672 15.8287L21.5172 8.82874L20.4828 7.74254L13.1327 14.7425L14.1672 15.8287ZM21.5172 7.74262L14.1672 0.742618L13.1327 1.82882L20.4828 8.82883L21.5172 7.74262ZM21 7.53562L1.39997 7.53562V9.03562L21 9.03562V7.53562Z"
                                            fill="#014129" />
                                    </svg>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="recruit_resreach_button middle">
                     <div class="recruit_resreach_button_prev recruit_resreach_button_item img_full">
                        <img src="<?= get_template_directory_uri(); ?>/img/icon_pre.svg" alt="" />
                    </div>
                    <div class="recruit_resreach_button_next recruit_resreach_button_item img_full">
                        <img src="<?= get_template_directory_uri(); ?>/img/icon_next.svg" alt="" />
                    </div>
                </div>
            </div>
            <div class="recruit__opportunity__form">
                <div class="recruit__opportunity__form__inner">
                    <div class="recruit__opportunity__form__close">x</div>
                    <div class="recruit__opportunity__form__wrap">
                    <div class="recruit__opportunity__form__title txt_30">Nộp hồ sơ ứng tuyển</div>
                    <div class="recruit__opportunity__form__input">
                        <div class="recruit__opportunity__form__input__left">
                            <input type="text" placeholder="Họ và tên" required />
                            <input type="email" placeholder="Email" required />
                            <input type="tel" placeholder="Số điện thoại" required />
                        </div>
                        <div class="recruit__opportunity__form__input__right">
                        <textarea placeholder="Ghi chú"></textarea>
                        <div class="recruit__opportunity__form__input__right__select">
                            <select required>
                            <option disabled selected>Vị trí ứng tuyển</option>
                            <option>Nhân viên hành chính</option>
                            <option>Chuyên viên nhân sự</option>
                            </select>
                            <div class="recruit__opportunity__form__input__right__selecticon img_full">
                                <img src="<?= get_template_directory_uri(); ?>/img/icon_down.svg" alt="">
                            </div>

                        </div>
                        </div>
                        <div class="recruit__opportunity__form__input__cv">
                        <input type="file" name="file-cv" id="file" />
                        <label for="file">Gửi Kèm CV</label>
                        <span class="upload-icon img_full">
                            <img src="<?= get_template_directory_uri(); ?>/img/icon-attach.svg" alt="">
                        </span>
                        </div>
                        
                    </div>
                    <button class="recruit__opportunity__form__submit txt_18" type="submit"><span>ĐĂNG KÝ</span></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="recruit_culture">
        <div class="kl_container">
            <div class="recruit_culture_inner kl_grid">
                <div class="recruit_culture_info">
                    <div class="recruit_culture_info_title txt_uppercase heading txt_55"><?= wp_kses_post($culture_title) ?></div>
                    <div class="recruit_culture_info_des txt_17 txt_justify"> <?= wp_kses_post($culture_des) ?></div>
                </div>
                <div class="recruit_culture_img img_full right_full">
                    <img src="<?php echo $culture_image ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="recruit_active bg_line">
        <div class="kl_container">
            <div class="recruit_active_title txt_35 heading txt_uppercase txt_center"><?= wp_kses_post($active_title) ?></div>
            <div class="recruit_active_inner">
                <div class="recruit_active_list kl_grid">
                    <?php if (!empty($active_item)) : ?>
                    <?php foreach ($active_item as $item): ?>
                    <div class="recruit_active_list_item">
                        <div class="recruit_active_list_item_img img_full">
                            <img src="<?= esc_url(wp_get_attachment_url($item['active_item_image'])) ?>" alt="">
                        </div>
                        <div class="recruit_active_list_item_txt txt_24 txt_uppercase txt_center heading"><?= $item['active_item_caption'] ?></div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="recruit_content">
        <div class="kl_container">
            <div class="recruit_content_title txt_uppercase txt_center heading txt_55"><?= wp_kses_post($reason_title) ?></div>
            <div class="recruit_content_item_wrap">
                <?php if (!empty($reason_item)) : ?>
                <?php foreach ($reason_item as $item): ?>
                <div class="recruit_content_item kl_grid">
                    <div class="recruit_content_item_info left">
                        <div class="recruit_content_item_info_title heading txt_28 txt_uppercase"><?= $item['reason_item_title'] ?></div>
                        <div class="recruit_content_item_info_des txt_17 txt_justify"> <?= $item['reason_item_des'] ?></div>
                    </div>
                    <div class="recruit_content_item_img right img_full">
                        <img src="<?= esc_url(wp_get_attachment_url($item['reason_item_image'])) ?>" alt="">
                    </div>
                    
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php
wp_enqueue_script('tuyen-dung', get_template_directory_uri() . '/js/tuyen-dung.js', array('global-js'), SITE_VERSION, true);
get_footer();
?>