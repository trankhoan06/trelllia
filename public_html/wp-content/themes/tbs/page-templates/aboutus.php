<?php

/**
 * Template Name: Giới thiệu
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
get_header();
wp_enqueue_style('about-style', get_template_directory_uri() . '/css/about.css', [], filemtime(get_template_directory() . '<?= get_template_directory_uri(); ?>/css/non-homepage.css'), 'all');
$pageID = get_queried_object_id();
// === Banner Chính ===
$banner_image = wp_get_attachment_url(tr_posts_field('banner_image', $pageID));
$banner_subtitle1 = tr_posts_field('banner_subtitle1', $pageID);
$banner_title = tr_posts_field('banner_title', $pageID);
$banner_subtitle2 = tr_posts_field('banner_subtitle2', $pageID);
$banner_des = tr_posts_field('banner_des', $pageID);

// === Giới thiệu ===
$intro_image = wp_get_attachment_url(tr_posts_field('intro_image', $pageID));
$intro_des = tr_posts_field('intro_des', $pageID);

// === Tầm nhìn ===
$sight_image = wp_get_attachment_url(tr_posts_field('sight_image', $pageID));
$sight_title = tr_posts_field('sight_title', $pageID);
$sight_des = tr_posts_field('sight_des', $pageID);

// === Sứ mệnh ===
$assign_image = wp_get_attachment_url(tr_posts_field('assign_image', $pageID));
$assign_title = tr_posts_field('assign_title', $pageID);
$assign_des = tr_posts_field('assign_des', $pageID);

// === Giá trị cốt lõi ===
$value_title = tr_posts_field('value_title', $pageID);
$value_subtitle = tr_posts_field('value_subtitle', $pageID);
$value_item = tr_posts_field('value_item', $pageID); // Repeater: ['value_item_title', 'value_item_des']
$value_des = tr_posts_field('value_des', $pageID);

// === Lịch sử hình thành ===
$history_title = tr_posts_field('history_title', $pageID);
$history_des = tr_posts_field('history_des', $pageID);
$history_subtitle = tr_posts_field('history_subtitle', $pageID);
$history_item = tr_posts_field('history_item', $pageID); // Repeater: ['history_item_year', 'history_item_image', 'history_item_des']
$history_image = wp_get_attachment_url(tr_posts_field('history_image', $pageID));

// === Câu chuyện hình thành ===
$story_title = tr_posts_field('story_title', $pageID);
$story_subtitle = tr_posts_field('story_subtitle', $pageID);
$story_item = tr_posts_field('story_item', $pageID); // Repeater: ['story_item_des', 'story_item_image']

// === Thành tựu ===
$achieve_title = tr_posts_field('achieve_title', $pageID);
$achieve_subtitle = tr_posts_field('achieve_subtitle', $pageID);
$achieve_item = tr_posts_field('achieve_item', $pageID); // Repeater: ['achieve_item_des', 'achieve_item_image']
?>
?>
<svg width="0" height="0" viewBox="0 0 20 20" class="svg_bg">
  <defs>
    <clipPath id="hexClipLarge" clipPathUnits="objectBoundingBox">
      <path
        d="M0.97663 0H0V1H0.73548C0.75023 1 0.7634 0.98662 0.76842 0.96654L0.99859 0.04532C1.00409 0.02327 0.99282 0 0.97663 0Z"
        fill="#D9D9D9"></path>
    </clipPath>
    <clipPath id="hexClipLarge2" clipPathUnits="objectBoundingBox">
      <path
        d="M0.25913 0H1L0.999417 1H0.0233349C0.00711659 1 -0.00414672 0.976501 0.00145583 0.954353L0.237251 0.0222071C0.240626 0.00886479 0.24936 0 0.25913 0Z"
        fill="#D9D9D9" />
    </clipPath>
  </defs>
</svg>
<section class="about_hero">
  <div class="about_hero_img img_full">
    <img src="<?php echo $banner_image ?>" alt="">
  </div>
  <div class="about_hero_txt">
    <div class="about_hero_txt_subtitle heading txt_28 txt_center">
      <?= wp_kses_post($banner_subtitle1) ?>
    </div>
    <h1 class="about_hero_txt_title txt_55 heading txt_center">
      <?= wp_kses_post($banner_title) ?>
    </h1>
    <div class="about_hero_txt_smalltitle heading txt_30 txt_center">
      <?= wp_kses_post($banner_subtitle2) ?>
    </div>
    <div class="about_hero_txt_des txt_20 font_tbs txt_center">
      <?= wp_kses_post($banner_des) ?>
    </div>
  </div>
</section>
<section class="about_content">
  <div class="about_content_top">
    <div class="kl_container kl_grid">
      <div class="about_content_top_txt">
        <div class="about_content_top_txt_des txt_justify txt_20">
          <?= wp_kses_post($intro_des) ?>
        </div>
      </div>
      <div class="about_content_top_img img_full">
        <img
          class="img_radius"
          src="<?php echo $intro_image ?>"
          alt="" />
      </div>
    </div>
  </div>
  <div class="about_content_sight bg_line">
    <div class="kl_container kl_grid about_content_sight_inner">
      <div class="about_content_sight_txt_title heading txt_55 txt_center_mb mobile">
        <?= wp_kses_post($sight_title) ?>
      </div>
      <div class="about_content_sight_img img_full">
        <img class="img_radius" src="<?php echo $sight_image ?>" alt="" />
      </div>
      <div class="about_content_sight_txt">
        <h2 class="about_content_sight_txt_title heading txt_55 middle">
          <?= wp_kses_post($sight_title) ?>
        </h2>
        <div class="about_content_sight_txt_des txt_17">
          <?= wp_kses_post($sight_des) ?>
        </div>
      </div>
    </div>
  </div>
  <div class="about_content_sight">
    <div class="kl_container kl_grid">
      <div class="about_content_assign_txt">
        <h2
          class="about_content_sight_txt_title heading txt_center_mb txt_55">
          <?= wp_kses_post($assign_title) ?>
        </h2>
        <div class="about_content_assign_txt_des txt_17 txt_justify">
          <?= wp_kses_post($assign_des) ?>
        </div>
      </div>
      <div class="about_content_assign_img img_full">
        <img class="img_radius" src="<?php echo $assign_image ?>" alt="" />
      </div>
    </div>
  </div>
</section>
<section class="about_value bg_line">
  <div class="kl_container">
    <h2
      class="about_value__title txt_55 heading txt_center txt_center_mb">
      <?= wp_kses_post($value_title) ?>
    </h2>
    <div
      class="about_value_smalltitle txt_28 heading txt_center txt_center_mb">
      <?= wp_kses_post($value_subtitle) ?>
    </div>
    <div class="value_swiper">
      <div class="about_value_wrap">
        <?php if (!empty($value_item)) : ?>
            <?php foreach ($value_item as $item): ?>
        <div class="about_value_item">
          <div class="about_value_item_img__wrap">
            <div class="about_value_item_img img_full">
              <img
                class="img_radius"
                src="<?= esc_url(wp_get_attachment_url($item['value_item_image'])) ?>"
                alt="" />
            </div>
          </div>
          <div class="about_value_item_title txt_bold txt_20 txt_center">
            <?= $item['value_item_title'] ?>
          </div>
          <div class="about_value_item_des txt_17 txt_center">
            <?= $item['value_item_des'] ?>
          </div>
        </div>
        <?php endforeach; ?>
          <?php endif; ?>
      </div>
      <div class="swiper-pagination-value mobile"></div>
    </div>
    <div class="about_value_des heading txt_uppercase txt_20 txt_center txt_title_color">
      <?= wp_kses_post($value_des) ?>
    </div>
  </div>
</section>
<section class="about_history">
  <h2
    class="about_history_title txt_title_color heading txt_55 txt_center">
    <?= wp_kses_post($history_title) ?>
  </h2>
  <div class="about_history_des txt_center txt_17">
    <?= wp_kses_post($history_des) ?>
  </div>
  <div class="about_history_smalltitle txt_center txt_28 heading">
    <?= wp_kses_post($history_subtitle) ?>
  </div>
  <div class="kl_container">
    <div class="about_history_swiper_wrap">
      <div class="about_history_swiper_wrap_bg"></div>
      <div class="about_history_swiper swiper">
        <!-- <div class="about_history_content_wrap"> -->
        <div class="about_history_content swiper-wrapper">
          <?php if (!empty($history_item)) : ?>
                <?php foreach ($history_item as $item): ?>
          <div class="about_history_content_item__wrap swiper-slide">
            <div class="about_history_content_item">
              <div class="about_history_content_item_year txt_24 heading">
                 <?= $item['history_item_year'] ?>
              </div>
              <div class="about_history_content_item_inner">
                <div
                  class="about_history_content_item_title txt_17 txt_bold">
                  Khởi nghiệp
                </div>
                <div class="about_history_content_item_img img_full">
                  <img src="<?= esc_url(wp_get_attachment_url($item['history_item_image'])) ?>" alt="" />
                </div>
                <div class="about_history_content_item_des txt_17">
                   <?= $item['history_item_des'] ?>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
              <?php endif; ?>
          <!-- <div class="about_history_content_item__wrap swiper-slide">
                                <div class="about_history_content_item">
                                </div>
                            </div> -->
        </div>
        <!-- </div> -->
      </div>
    </div>
  </div>
  <div class="about_history_img img_full">
    <img src="<?php echo $history_image ?>" alt="">
  </div>
</section>
<section class="about_expert bg_line">
  <div class="kl_container">
    <h2
      class="about_expert_title txt_center txt_55 txt_title_color heading">
      <?= wp_kses_post($story_title) ?>
    </h2>
    <div class="about_expert_smalltitle txt_center heading txt_30">
      <?= wp_kses_post($story_subtitle) ?>
    </div>
    <div class="about_expert_content_wrap">
      <?php if (!empty($story_item)) : ?>
            <?php foreach ($story_item as $item): ?>
      <div class="about_expert_content kl_grid">
        <div class="about_expert_content_info">
          <div class="about_expert_content_info_des txt_justify txt_17">
            <?= $item['story_item_des'] ?>
          </div>
        </div>
        <div class="about_expert_content_img right_full">
          <div class="about_expert_content_img_inner img_full">
            <img src="<?= esc_url(wp_get_attachment_url($item['story_item_image'])) ?>" alt="" />
          </div>
          <div
            class="about_expert_content_info_authen txt_center txt_title_color txt_24 txt_uppercase heading">
             <?= $item['story_item_cap'] ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
          <?php endif; ?>
    </div>
  </div>
</section>
<section class="about_archive">
  <div class="about_archive__inner">
    <div class="kl_container">
      <div
        class="about_archive_title txt_55 heading txt_title_color txt_center">
        <?= wp_kses_post($achieve_title) ?>
      </div>
      <div class="about_archive_des txt_17 txt_center">
         <?= wp_kses_post($achieve_subtitle) ?>
      </div>
    </div>
    <div class="mySwiper_wrap">
      <div class="swiper mySwiper">
        <div class="about_archive_wrap swiper-wrapper">
          <?php if (!empty($achieve_item)) : ?>
            <?php foreach ($achieve_item as $item): ?>
          <div class="about_archive_item swiper-slide">
            <div class="about_archive_item_img img_fullfill">
              <img src="<?= esc_url(wp_get_attachment_url($item['value_item_image'])) ?>" alt="" />
            </div>
            <div class="about_archive_item_border"></div>
            <div
              class="about_archive_item_name txt_17 txt_bold txt_center">
               <?= $item['value_item_title'] ?>
            </div>
          </div>
          <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>
      <div class="button_swiper">
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
<?php
wp_enqueue_script('about', get_template_directory_uri() . '/js/about.js', array('global-js'), SITE_VERSION, true);
get_footer(); ?>