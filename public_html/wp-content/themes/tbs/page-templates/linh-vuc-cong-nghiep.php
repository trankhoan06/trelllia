<?php
/**
 * Template Name: Lĩnh vực công nghiệp
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
wp_enqueue_style('linh-vuc-cong-nghiep-style', get_template_directory_uri() . '/css/linh-vuc-cong-nghiep.css', [], SITE_VERSION, 'all');
get_header();

$pageID = get_queried_object_id(); // Lấy ID của trang hiện tại

$banner_image = wp_get_attachment_url(tr_posts_field('banner_image', $pageID));
$banner_title = tr_posts_field('banner_title', $pageID);

// Giới thiệu
$intro_logo = wp_get_attachment_url(tr_posts_field('intro_logo', $pageID));
$intro_des = tr_posts_field('intro_des', $pageID);

// Nhà máy
$factory_items = tr_posts_field('factory_items', $pageID);
// Mỗi item: ['factory_img', 'factory_title']

// Sản phẩm
$product_img = wp_get_attachment_url(tr_posts_field('product_img', $pageID));
$product_title = tr_posts_field('product_title', $pageID);
$product_text_items = tr_posts_field('product_text_items', $pageID);

$product2_img = wp_get_attachment_url(tr_posts_field('product2_img', $pageID));
$product2_title = tr_posts_field('product2_title', $pageID);
$product2_text_items = tr_posts_field('product2_text_items', $pageID);
// Mỗi item: ['product_img', 'product_title', 'product_text_items' => [['product_subtitle', 'product_des']]]

// Số liệu
$figure_items = tr_posts_field('figure_items', $pageID);
// Mỗi item: ['figure_title', 'figure_des']

// Địa điểm văn phòng
$location1_des_top = tr_posts_field('location1_des_top', $pageID);
$location1_des = tr_posts_field('location1_des', $pageID);
$location1_des_inter = tr_posts_field('location1_des_inter', $pageID);
$location2_subtitle = tr_posts_field('location2_subtitle', $pageID);
$location2_des = tr_posts_field('location2_des', $pageID);

$location_item = tr_posts_field('location_item', $pageID); // ['location_map_item_name']



$location_map_image = wp_get_attachment_url(tr_posts_field('location_map_image', $pageID));
$location_map_title = tr_posts_field('location_map_title', $pageID);
$location_map_item = tr_posts_field('location_map_item', $pageID); // ['location_map_item_name']
$location_map_icon = wp_get_attachment_url(tr_posts_field('location_map_icon', $pageID)); // ['location_map_item_name']
?>
<section class="industrial_hero">
      <div class="industrial_hero_inner">
        <div class="industrial_hero_img img_full">
          <img src="<?php echo $banner_image ?>" alt="" />
        </div>
        <h1 class="industrial_hero_title txt_55 heading">
          <?= wp_kses_post($banner_title) ?>
        </h1>
      </div>
    </section>
    <section class="industrial_intro">
      <div class="kl_container">
        <div class="industrial_intro_txt">
          <div class="industrial_intro_txt_logo img_full">
            <img src="<?php echo $intro_logo ?>" alt="" />
          </div>
          <div class="industrial_intro_txt_des txt_20 txt_justify">
            <?= wp_kses_post($intro_des) ?>
          </div>
        </div>
        <div class="industrial_swiper_wrap">
          <div class="swiper mySwiper">
            <div class="industrial_intro_slide swiper-wrapper">
              <?php if (!empty($factory_items)) : ?>
                <?php foreach ($factory_items as $item): ?>
              <div class="industrial_intro_slide_item swiper-slide">
                <div class="industrial_intro_slide_item_img img_full">
                  <img src="<?= esc_url(wp_get_attachment_url($item['factory_img'])) ?>" alt="" />
                </div>
                <div class="industrial_intro_slide_item_txt txt_20">
                  <?= $item['factory_title'] ?>
                </div>
              </div>
               <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="industrial_button">
            <div class="button_swiper_prev button_swiper_item img_full">
              <img src="<?= get_template_directory_uri(); ?>/img/icon_pre.svg" alt="" />
            </div>
            <div class="button_swiper_next button_swiper_item img_full">
              <img src="<?= get_template_directory_uri(); ?>/img/icon_next.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="industrial_product">
      <div class="kl_container">
        <div class="industrial_product_inner kl_grid">
          <div class="industrial_product_img img_full">
            <img src="<?php echo $product_img ?>" alt="" />
          </div>
          <div class="industrial_product_info bg_line">
            <h2
              class="industrial_product_info_name txt_title_color txt_55 heading"
            >
              <?= wp_kses_post($product_title) ?>
          </h2>
          <?php if (!empty($product_text_items)) : ?>
                <?php foreach ($product_text_items as $item): ?>
            <div class="industrial_product_info_title heading txt_35">
              <?= $item['product_subtitle'] ?>
            </div>
            <div class="industrial_product_info_des txt_17">
              <?= $item['product_des'] ?>
            </div>
             <?php endforeach; ?>
              <?php endif; ?>
          </div>
        </div>
        <div class="industrial_product_inner bag kl_grid">
          <div class="industrial_product_info bag bg_line">
            <h2
              class="industrial_product_info_name txt_title_color txt_55 heading"
            >
              <?= wp_kses_post($product2_title) ?>
          </h2>
          <?php if (!empty($product2_text_items)) : ?>
                <?php foreach ($product2_text_items as $item): ?>
            <div class="industrial_product_info_title heading txt_35">
              <?= $item['product2_subtitle'] ?>
            </div>
            <div class="industrial_product_info_des txt_17">
               <?= $item['product2_des'] ?>
            </div>
            <?php endforeach; ?>
              <?php endif; ?>
          </div>
          <div class="industrial_product_img bag img_full">
            <img src="<?php echo $product2_img ?>" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section class="industrial_figure">
      <div class="kl_container">
        <div class="industrial_figure_inner">
          <div class="industrial_figure_slide_wrap swiper">
            <div class="industrial_figure_slide swiper-wrapper">
               <?php if (!empty($figure_items)) : ?>
                <?php foreach ($figure_items as $item): ?>
              <div class="industrial_figure_slide_item swiper-slide">
                <div class="industrial_figure_slide_item_title txt_center heading tx txt_55">
                  <?= $item['figure_title'] ?>
                </div>
                <div class="industrial_figure_slide_item_des txt_center txt_20">
                  <?= $item['figure_des'] ?>
                </div>
              </div>
               <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="industrial_figure_button">
            <div class="button_swiper_prev figure_button_swiper_item img_full">
              <img src="<?= get_template_directory_uri(); ?>/img/icon_pre.svg" alt="" />
            </div>
            <div class="button_swiper_next figure_button_swiper_item img_full">
              <img src="<?= get_template_directory_uri(); ?>/img/icon_next.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="industrial_location">
      <div class="industrial_location_inner">
        <div class="industrial_location_left">
          <div class="industrial_location_left_top_wrap">
            <div class="industrial_location_left_top">
                <div class="industrial_location_left_top_inner">
                <div class="industrial_location_left_top_title txt_70 heading"> <?= wp_kses_post($location1_des_top) ?></div>
                <div class="industrial_location_left_top_des txt_25 heading"><?= wp_kses_post($location1_des) ?></div>
                <div class="industrial_location_left_top_smalltitle heading txt_30 txt_title_color"><?= wp_kses_post($location1_des_inter) ?></div>
              </div>
            </div>
            <div class="industrial_location_left_top">
              <div class="industrial_location_left_top_inner">
                <div class="industrial_location_left_top_smalltitle1 txt_title_color heading txt_30"><?= wp_kses_post($location2_subtitle) ?></div>
                <div class="industrial_location_left_top_des1 txt_25 heading"><?= wp_kses_post($location2_des) ?></div>
              </div>
            </div>
          </div>
          <div class="industrial_location_left_content_wrap">
            <?php if (!empty($location_item)) : ?>
                <?php foreach ($location_item as $item): ?>
            <div class="industrial_location_left_content">
              <div class="industrial_location_left_content_percent border1 title1 txt_40 heading"> <?= $item['location_item1_percent'] ?><span class="txt_30">%</span></div>
              <div class="industrial_location_left_content_inner">
                <div class="industrial_location_left_content_title heading txt_25 title1"> <?= $item['location_item1_title'] ?></div>
                <div class="industrial_location_left_content_des txt_17"> <?= $item['location_item1_des'] ?></div>
              </div>
            </div>
            <?php endforeach; ?>
              <?php endif; ?>
          </div>
        </div>
        <div class="industrial_location_right">
          <div class="industrial_location_right_img img_full">
            <img src="<?php echo $location_map_image ?>" alt="">
          </div>
          <div class="industrial_location_right_officer">
            <div class="industrial_location_right_officer_title">
              <div class="industrial_location_right_officer_title_inner txt_30 heading"><?= wp_kses_post($location_map_title) ?></div>
            </div>
            <div class="industrial_location_right_officer_content">
              <div class="industrial_location_right_officer_content_inner">
                 <?php if (!empty($location_map_item)) : ?>
                <?php foreach ($location_map_item as $item): ?>
                <div class="industrial_location_right_officer_content_item" >
                  <div class="industrial_location_right_officer_content_item_img img_full">
                    <img src="<?php echo $location_map_icon ?>" alt="">
                  </div>
                  <div class="industrial_location_right_officer_content_item_txt heading txt_25"> <?= $item['location_map_item_name'] ?></div>
                </div>
                 <?php endforeach; ?>
              <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php 
wp_enqueue_script('linh-vuc-cong-nghiep', get_template_directory_uri() . '/js/linh-vuc-cong-nghiep.js',array('global-js'),SITE_VERSION,true);
get_footer(); 

?>