<?php
/**
 * Template Name: Lĩnh vực bất động sản
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
wp_enqueue_style('linh-vuc-bat-dong-san-style', get_template_directory_uri() . '/css/linh-vuc-bat-dong-san.css', [], SITE_VERSION, 'all');
get_header();

$pageID = get_queried_object_id();

// === Banner Chính ===
$banner_image = wp_get_attachment_url(tr_posts_field('banner_image', $pageID));
$banner_image_mobile = wp_get_attachment_url(tr_posts_field('banner_image_mobile', $pageID));
$banner_title = tr_posts_field('banner_title', $pageID);

// === Giới thiệu ===
$intro_logo = wp_get_attachment_url(tr_posts_field('intro_logo', $pageID));
$intro_logo_mobile = wp_get_attachment_url(tr_posts_field('intro_logo_mobile', $pageID));
$intro_des = tr_posts_field('intro_des', $pageID);

// === Bất động sản công nghiệp ===
$industrial_content = wp_get_attachment_url(tr_posts_field('industrial_content', $pageID));
$industrial_title = tr_posts_field('industrial_title', $pageID);
$industrial_des_item = tr_posts_field('industrial_des_item', $pageID); // Mỗi item: ['industrial_des_item_des']

// === Bất động sản dân dụng ===
$residential_title = tr_posts_field('residential_title', $pageID);
$residential_des = tr_posts_field('residential_item_des', $pageID);
$residential_subtitle = tr_posts_field('residential_subtitle', $pageID);
$residential_des_item = tr_posts_field('residential_des_item', $pageID); // Mỗi item: ['residential_des_item_des']
$residential_image_item = tr_posts_field('residential_image_item', $pageID);

// === Thương mại dịch vụ & Văn phòng cho thuê ===
$economic_image = wp_get_attachment_url(tr_posts_field('economic_image', $pageID));
$economic_title = tr_posts_field('economic_title', $pageID);
$economic_des = tr_posts_field('economic_des', $pageID); // Mỗi item: ['economic_item_des']

// === Nghỉ dưỡng & Khách sạn ===
$hotel_title = tr_posts_field('hotel_title', $pageID);
$hotel_des = tr_posts_field('hotel_des', $pageID); // Nested repeater
$hotel_image_item = tr_posts_field('hotel_image_item', $pageID);

// === TBS Logistics ===
$logistics_logo = wp_get_attachment_url(tr_posts_field('logistics_logo', $pageID));
$logistics_des = tr_posts_field('logistics_des', $pageID);
$logistics_item = tr_posts_field('logistics_item', $pageID); // Mỗi item: ['logistics_item_title', 'logistics_item_des']
$logistics_image = wp_get_attachment_url(tr_posts_field('logistics_image', $pageID));
$logistics_experiance_item = tr_posts_field('logistics_experiance_item', $pageID); // Mỗi item: ['logistics_experiance_item_title', 'logistics_experiance_item_des']
?>
?>
<section class="estate_hero">
      <div class="estate_hero_img img_full">
        <img class="middle" src="<?php echo $banner_image ?>" alt="" />
        <img class="mobile" src="<?php echo $banner_image_mobile ?>" alt="" />
      </div>
      <h1 class="estate_hero_txt txt_uppercase heading txt_55">
       <?= wp_kses_post($banner_title) ?>
      </h1>
    </section>
    <section class="estate_content">
      <div class="kl_container">
        <div class="estate_intro_txt">
          <div class="estate_intro_txt_logo img_full">
            <img class="middle" src="<?php echo $intro_logo ?>" alt="" />
            <img class="mobile" src="<?php echo $intro_logo_mobile ?>" alt="" />
          </div>
          <div class="estate_intro_txt_des txt_20 txt_justify">
            <?= wp_kses_post($intro_des) ?>
          </div>
        </div>
        <div class="estate_content_inner kl_grid">
          <div class="estate_content_img img_full left_full">
            <img src="<?php echo $industrial_content ?>" alt="">
          </div>
          <div class="estate_content_info">
            <h2 class="estate_content_info_title txt_uppercase txt_55 txt_title_color heading"><?= wp_kses_post($industrial_title) ?></h2>
            <?php if (!empty($industrial_des_item)) : ?>
                <?php foreach ($industrial_des_item as $item): ?>
            <div class="estate_content_info_des des_spot txt_17 txt_justify"><?= $item['industrial_des_item_des'] ?></div>
            <?php endforeach; ?>
              <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="kl_container bg_line">
        <div class="estate_content_inner kl_grid">
          <div class="estate_content_info1">
            <h2 class="estate_content_info_title txt_uppercase txt txt_55 txt_title_color heading"><?= wp_kses_post($residential_title) ?></h2>
            <div class="estate_content_info_des txt_17 txt_justify"><?= wp_kses_post($residential_des) ?></div>

              <div class="estate_content_info_subtitle txt_uppercase txt_24 heading"><?= wp_kses_post($residential_subtitle) ?></div>
              <?php if (!empty($residential_des_item)) : ?>
                <?php foreach ($residential_des_item as $item): ?>
            <div class="estate_content_info_des des_spot txt_17 txt_justify"><?= $item['residential_des_item_des'] ?></div>
             <?php endforeach; ?>
              <?php endif; ?>
          </div>
          <div class="estate_content_img1 right_full">
            <div class="estate_content_img1_inner swiper mySwiper">
              <div class="estate_content_img1_list swiper-wrapper">
                <?php if (!empty($residential_image_item)) : ?>
                <?php foreach ($residential_image_item as $item): ?>
                <div class="estate_content_img1_list_item img_full swiper-slide">
                  <img src="<?= esc_url(wp_get_attachment_url($item['residential_image_item_content'])) ?>" alt="">
                </div>
                <?php endforeach; ?>
              <?php endif; ?>
              </div>
            </div>
            <div class="estate_button">
              <div class="estate_button_swiper_prev estate_button_swiper_item img_full">
                <img src="<?= get_template_directory_uri(); ?>/img/icon_grayprev.svg" alt="" />
              </div>
              <div class="estate_button_swiper_next estate_button_swiper_item img_full">
                <img src="<?= get_template_directory_uri(); ?>/img/icon_graynext.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="kl_container">
        <div class="estate_content_inner kl_grid">
          <div class="estate_content_img img_full left_full">
            <img src="<?php echo $economic_image ?>" alt="">
          </div>
          <div class="estate_content_info">
            <h2 class="estate_content_info_title txt_uppercase txt_55 txt_title_color heading"><?= wp_kses_post($economic_title) ?></h2>
            <div class="estate_content_info_des txt_17 txt_justify"><?= wp_kses_post($economic_des) ?></div>
          </div>
        </div>
      </div>
      <div class="kl_container bg_line">
        <div class="estate_content_inner kl_grid">
          <div class="estate_content_info1 gap">
            <h2 class="estate_content_info_title txt_uppercase txt txt_55 txt_title_color heading"><?= wp_kses_post($hotel_title) ?></h2>
            <?php if (!empty($hotel_des)) : ?>
                <?php foreach ($hotel_des as $item): ?>
            <div class="estate_content_info_subtitle txt_uppercase txt_24 heading"><?= $item['hotel_des_subtitle'] ?></div>
            <div class="estate_content_info_des txt_17 txt_justify"><?= $item['hotel_des_item_des'] ?></div>
              <?php endforeach; ?>
              <?php endif; ?>
          </div>
           <div class="estate_content_img1 right_full">
            <div class="estate_content_img1_inner mySwiper1 swiper">
              <div class="estate_content_img1_list swiper-wrapper">
                <?php if (!empty($hotel_image_item)) : ?>
                <?php foreach ($hotel_image_item as $item): ?>
                <div class="estate_content_img1_list_item img_full swiper-slide">
                  <img src="<?= esc_url(wp_get_attachment_url($item['hotel_image_item_content'])) ?>" alt="">
                </div>
                <?php endforeach; ?>
              <?php endif; ?>
              </div>
            </div>
            <div class="estate_button">
              <div class="estate_button1_swiper_prev estate_button_swiper_item img_full">
                <img src="<?= get_template_directory_uri(); ?>/img/icon_grayprev.svg" alt="" />
              </div>
              <div class="estate_button1_swiper_next estate_button_swiper_item img_full">
                <img src="<?= get_template_directory_uri(); ?>/img/icon_graynext.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="estate_logistics">
        <div class="estate_logistics_logo img_full">
          <img src="<?php echo $logistics_logo ?>" alt="">
        </div>
        <div class="estate_logistics_des txt_17 txt_center"><?= wp_kses_post($logistics_des) ?></div>
          <div class="estate_logistics_list">
             <?php if (!empty($logistics_item)) : ?>
                <?php foreach ($logistics_item as $item): ?>
            <div class="estate_logistics_list_item">
              <div class="estate_logistics_list_item_title heading txt_35 txt_center"><?= $item['logistics_item_title'] ?></div>
              <div class="estate_logistics_list_item_des txt_17 txt_center"><?= $item['logistics_item_des'] ?></div>
            </div>
             <?php endforeach; ?>
              <?php endif; ?>
          </div>
          <div class="estate_logistics_img img_full">
            <img src="<?php echo $logistics_image ?>" alt="">
          </div>
          <div class="kl_container">
            <div class="estate_logistics_exper kl_grid">
                 <?php if (!empty($logistics_experiance_item)) : ?>
                <?php foreach ($logistics_experiance_item as $item): ?>
              <div class="estate_logistics_exper_item item1">
                <div class="estate_logistics_exper_item_title txt_center heading txt_55"><?= $item['logistics_experiance_item_title'] ?></div>
                <div class="estate_logistics_exper_item_des txt_20 txt_center"><?= $item['logistics_experiance_item_des'] ?></div>
              </div>
              <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
    </section>
<?php 
wp_enqueue_script('linh-vuc-bat-dong-san', get_template_directory_uri() . '/js/linh-vuc-bat-dong-san.js',array('global-js'),SITE_VERSION,true);
get_footer(); 

?>