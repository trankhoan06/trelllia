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
wp_enqueue_style('home-style', get_template_directory_uri() . '/css/home.css', [], filemtime(get_template_directory() . '<?= get_template_directory_uri(); ?>/css/non-homepage.css'), 'all');

$pageID = get_queried_object_id();
$pageID = get_queried_object_id();

/** Video */
$video_logo     = wp_get_attachment_url(tr_posts_field('video_logo', $pageID));
$video_title    = tr_posts_field('video_title', $pageID);
$video_seemore  = tr_posts_field('video_seemore', $pageID);
$video_link     = tr_posts_field('video_link', $pageID);
$video_ytb      = tr_posts_field('video_ytb', $pageID); // URL YouTube (embed)

/** Banner Chính */
$banner_image   = wp_get_attachment_url(tr_posts_field('banner_image', $pageID));
$banner_sub1    = tr_posts_field('banner_subtitle1', $pageID);
$banner_title   = tr_posts_field('banner_title', $pageID);
$banner_sub2    = tr_posts_field('banner_subtitle2', $pageID);
$banner_des     = tr_posts_field('banner_des', $pageID);
$banner_seemore = tr_posts_field('banner_seemore', $pageID);
$banner_link    = tr_posts_field('banner_link', $pageID);
$banner_item    = tr_posts_field('banner_item', $pageID); // [{banner_item_image}]

/** Lĩnh vực hoạt động */
$active_title   = tr_posts_field('active_title', $pageID);
$active_item    = tr_posts_field('active_item', $pageID);
// mỗi item: active_item_image, active_item_logo, active_item_des, active_major:[{active_major_des, active_major_link}]

/** Phát triển bền vững */
$dev_title      = tr_posts_field('development_title', $pageID);
$dev_subtitle   = tr_posts_field('development_subtitle', $pageID);
$dev_ct_title   = tr_posts_field('development_content_title', $pageID);
$dev_ct_des     = tr_posts_field('development_content_des', $pageID);
$dev_ct_sub     = tr_posts_field('development_content_subtitle', $pageID);
$dev_item       = tr_posts_field('development_item', $pageID); // [{development_item_des}]
$dev_seemore    = tr_posts_field('development_seemore', $pageID);
$dev_link       = tr_posts_field('development_link', $pageID);
$dev_img        = tr_posts_field('development_img', $pageID); // [{development_img_cap, development_img_des}]

/** Giải thưởng (⚠️ key đang là 'achiieve_*') */
$award_title    = tr_posts_field('achieve_title', $pageID);
$award_item     = tr_posts_field('achieve_item', $pageID); // [{achieve_item_img, achieve_item_des}]
$award_bg       = wp_get_attachment_url(tr_posts_field('achieve_bg', $pageID));

/** Đối tác */
$partner_title  = tr_posts_field('partner_title', $pageID);
$partner_item   = tr_posts_field('partner_item', $pageID); // [{partner_item_img}]

?>


<section class="home_intro full_screen">
       <iframe class="home_intro_video"
        src="<?= wp_kses_post($video_ytb) ?>?autoplay=1&mute=1&loop=1&playlist=yqJuRMhvFcU&controls=0&rel=0&modestbranding=1&playsinline=1"
        frameborder="0"
        allow="autoplay; fullscreen"
        allowfullscreen>
        </iframe>
          <div class="home_intro_content">
            <div class="home_intro_content_logo img_full">
                <img src="<?php echo $video_logo ?>" alt="">
            </div>
            <h1 class="home_intro_content_title txt_uppercase txt_60 heading"><?= wp_kses_post($video_title) ?></h1>
            <a href="<?= wp_kses_post($video_link) ?>" class="home_intro_seemore txt_20 txt_bold "><?= wp_kses_post($video_seemore) ?></a>
          </div>
    </section>
    <section class="home_hero full_screen">
        <div class="home_hero_inner">
            <div class="home_hero_img img_full">
              <img src="<?php echo $vidbanner_imageeo_logo ?>" alt="">
            </div>
            <div class="home_hero_txt">
              <div class="home_hero_txt_subtitle heading txt_28 txt_center">
                <?= wp_kses_post($banner_sub1) ?>
              </div>
              <h1 class="home_hero_txt_title txt_55 heading txt_center">
                <?= wp_kses_post($banner_title) ?>
              </h1>
              <div class="home_hero_txt_smalltitle heading txt_30 txt_center">
                <?= wp_kses_post($banner_sub2) ?>
              </div>
              <div class="home_hero_txt_des txt_20 font_tbs txt_center">
                <?= wp_kses_post($banner_des) ?>
              </div>
              <a href="<?= wp_kses_post($banner_link) ?>" class="home_hero_txt_link txt_20 txt_bold"><span><?= wp_kses_post($banner_seemore) ?></span></a>
            </div>
        </div>
        <div class="kl_container">
            <div class="home_hero_logo">
                <?php if (!empty($banner_item)) : ?>
                <?php foreach ($banner_item as $item): ?>
                <div class="home_hero_logo_item">
                    <img src="<?= esc_url(wp_get_attachment_url($item['banner_item_image'])) ?>" alt="">
                </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
        </div>
      </section>
      <section class="home_active full_screen">
        <div class="kl_container">
            <div class="home_active_title txt_title_color heading txt_55 txt_uppercase txt_center"><?= wp_kses_post($active_title) ?></div>
            <div class="home_active_inner">
                <?php if (!empty($active_item)) : ?>
                <?php foreach ($active_item as $item): ?>
                <div class="home_active_item">
                    <div class="home_active_item_img img_full">
                        <img src="<?= esc_url(wp_get_attachment_url($item['active_item_image'])) ?>" alt="">
                    </div>
                    <div class="home_active_item_txt">
                        <div class="home_active_item_txt_logo img_full">
                            <img src="<?= esc_url(wp_get_attachment_url($item['active_item_logo'])) ?>" alt="">
                        </div>
                        <div class="home_active_item_txt_des txt_20"><?= $item['active_item_des'] ?></div>
                        <div class="home_active_item_txt_inner">
                             <?php if (!empty($active_major)) : ?>
                                <?php foreach ($active_major as $item1): ?>
                                    <a href="<?= $item['active_major_link'] ?>" class="home_active_item_txt_item txt_bold txt_uppercase txt_center txt_title_color txt_20"><?= $item['active_major_des'] ?></a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
        </div>
      </section>
      <section class="home_development full_screen">
        <div class="kl_container">
            <div class="home_development_title heading txt_55 txt_uppercase txt_center txt_title_color"><?= wp_kses_post($dev_title) ?></div>
            <div class="home_development_subtitle txt_bold txt_35 txt_uppercase txt_center"><?= wp_kses_post($dev_subtitle) ?></div>
            <div class="home_development_inner">
                <div class="home_development_info">
                    <div class="home_development_info_title txt_bold txt_30 txt_uppercase">
                        <?= wp_kses_post($dev_ct_title) ?>
                    </div>
                    <div class="home_development_info_des txt_17"><?= wp_kses_post($dev_ct_des) ?></div>
                    <div class="home_development_info_subtitle txt_17 txt_bold"><?= wp_kses_post($dev_ct_sub) ?></div>
                    <?php if (!empty($dev_item)) : ?>
                        <?php foreach ($dev_item as $item): ?>
                    <div class="home_development_info_des txt_17 des_spot"><?= $item['development_item_des'] ?></div>
                         <?php endforeach; ?>
                    <?php endif; ?>
                    <a href="<?= wp_kses_post($banner_link) ?>" class="home_development_info_link txt_20 txt_uppercase txt_title_color"><?= wp_kses_post($banner_link) ?></a>
                </div>
                <div class="home_development_slide right_full">
                    <div class="home_development_slide_inner mySwiper swiper">
                        <div class="home_development_slide_list swiper-wrapper">
                            <?php if (!empty($dev_img)) : ?>
                                <?php foreach ($dev_img as $item): ?>
                            <div class="home_development_slide_list_item swiper-slide img_full">
                                <img src="<?= esc_url(wp_get_attachment_url($item['development_img_cap'])) ?>" alt="">
                                <div class="home_development_slide_list_item_caption txt_uppercase txt_20 "><?= $item['development_img_des'] ?></div>
                            </div>
                             <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <section class="home_achieve full_screen">
        <div class="kl_container">
            <div class="home_achieve_inner">
                <div class="home_achieve_title heading txt_55 txt_uppercase"><?= wp_kses_post($achieve_title) ?></div>
                <div class="home_achieve_list">
                    <?php if (!empty($award_item)) : ?>
                <?php foreach ($award_item as $item): ?>
                    <div class="home_archive_item">
                        <div class="home_archive_item_img img_fullfill">
                            <img src="<?= esc_url(wp_get_attachment_url($item['achieve_item_img'])) ?>" alt="" />
                        </div>
                        <div class="home_archive_item_border"></div>
                        <div
                            class="home_archive_item_name txt_18 txt_bold txt_center txt_uppercase"
                        >
                            <?= $item['achieve_item_des'] ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="home_achieve_bg img_full">
            <img src="<?php echo $award_bg ?>" alt="">
        </div>
      </section>
      <section class="home_news full_screen">
        <div class="kl_container">
            <div class="home_news_title heading txt_title_color txt_55 txt_uppercase txt_center">tin tức</div>
            <div class="home_news_inner kl_grid">
                <a href="#" class="home_news_content_item">
                    <div class="home_news_content_item_img img_full">
                        <img src="<?php echo get_template_directory_uri()?>/img/news_content.webp" alt="">
                    </div>
                    <div class="home_news_content_item_time txt_17">09-02-2025</div>
                    <div class="home_news_content_item_txt">
                        <div class="home_news_content_item_title txt_bold txt_18 txt_justify">Nhà máy TBS Sông Trà – 10 năm kiến tạo dấu ấn từ quê hương năm tấn</div>
                        <div class="home_news_content_item_des txt_17 txt_justify">Nhỏ nhắn. Giản dị. Đó là ấn tượng đầu tiên với chị Nguyễn Thị Thu Hà – TGĐ ĐH N. Chuỗi Túi xách – người chèo lái con thuyền hơn 10.000 nhân sự đã làm việc tại nơi này</div>
                    </div>
                    <div class="home_news_content_item_detail">
                        <div class="home_news_content_item_detail_txt txt_17">Chi tiết</div>
                        <div class="home_news_content_item_detail_img img_full">
                            <img src="<?php echo get_template_directory_uri()?>/img/icon_next_detail.svg" alt="">
                        </div>
                    </div>
                </a>
                <a href="#" class="home_news_content_item">
                    <div class="home_news_content_item_img img_full">
                        <img src="<?php echo get_template_directory_uri()?>/img/news_content.webp" alt="">
                    </div>
                    <div class="home_news_content_item_time txt_17">09-02-2025</div>
                    <div class="home_news_content_item_txt">
                        <div class="home_news_content_item_title txt_bold txt_18 txt_justify">Nhà máy TBS Sông Trà – 10 năm kiến tạo dấu ấn từ quê hương năm tấn</div>
                        <div class="home_news_content_item_des txt_17 txt_justify">Nhỏ nhắn. Giản dị. Đó là ấn tượng đầu tiên với chị Nguyễn Thị Thu Hà – TGĐ ĐH N. Chuỗi Túi xách – người chèo lái con thuyền hơn 10.000 nhân sự đã làm việc tại nơi này</div>
                    </div>
                    <div class="home_news_content_item_detail">
                        <div class="home_news_content_item_detail_txt txt_17">Chi tiết</div>
                        <div class="home_news_content_item_detail_img img_full">
                            <img src="<?php echo get_template_directory_uri()?>/img/icon_next_detail.svg" alt="">
                        </div>
                    </div>
                </a>
                <a href="#" class="home_news_content_item">
                    <div class="home_news_content_item_img img_full">
                        <img src="<?php echo get_template_directory_uri()?>/img/news_content.webp" alt="">
                    </div>
                    <div class="home_news_content_item_time txt_17">09-02-2025</div>
                    <div class="home_news_content_item_txt">
                        <div class="home_news_content_item_title txt_bold txt_18 txt_justify">Nhà máy TBS Sông Trà – 10 năm kiến tạo dấu ấn từ quê hương năm tấn</div>
                        <div class="home_news_content_item_des txt_17 txt_justify">Nhỏ nhắn. Giản dị. Đó là ấn tượng đầu tiên với chị Nguyễn Thị Thu Hà – TGĐ ĐH N. Chuỗi Túi xách – người chèo lái con thuyền hơn 10.000 nhân sự đã làm việc tại nơi này</div>
                    </div>
                    <div class="home_news_content_item_detail">
                        <div class="home_news_content_item_detail_txt txt_17">Chi tiết</div>
                        <div class="home_news_content_item_detail_img img_full">
                            <img src="<?php echo get_template_directory_uri()?>/img/icon_next_detail.svg" alt="">
                        </div>
                    </div>
                </a>
            </div>
            <a href="" class="home_news_seeall txt_20 txt_uppercase txt_title_color txt_center">
                Xem tất cả
                <svg width="22" height="17" viewBox="0 0 22 17" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.1327 14.7425C12.8328 15.0282 12.8212 15.5029 13.1069 15.8029C13.3926 16.1028 13.8673 16.1144 14.1672 15.8287L13.1327 14.7425ZM21.5172 8.82874C21.8172 8.54308 21.8288 8.06835 21.5431 7.7684C21.2574 7.46845 20.7827 7.45687 20.4828 7.74254L21.5172 8.82874ZM20.4828 8.82883C20.7827 9.11449 21.2574 9.10292 21.5431 8.80297C21.8288 8.50302 21.8172 8.02829 21.5172 7.74262L20.4828 8.82883ZM14.1672 0.742618C13.8673 0.456953 13.3926 0.468533 13.1069 0.76848C12.8212 1.06843 12.8328 1.54316 13.1327 1.82882L14.1672 0.742618ZM21 9.03562C21.4142 9.03562 21.75 8.69983 21.75 8.28562C21.75 7.87141 21.4142 7.53562 21 7.53562V9.03562ZM1.39997 7.53562C0.98576 7.53562 0.649973 7.87141 0.649973 8.28562C0.649973 8.69983 0.98576 9.03562 1.39997 9.03562V7.53562ZM14.1672 15.8287L21.5172 8.82874L20.4828 7.74254L13.1327 14.7425L14.1672 15.8287ZM21.5172 7.74262L14.1672 0.742618L13.1327 1.82882L20.4828 8.82883L21.5172 7.74262ZM21 7.53562L1.39997 7.53562V9.03562L21 9.03562V7.53562Z"
                                            fill="currentColor" />
                                    </svg>
            </a>
        </div>
        <div class="home_news_bg img_full">
            <img src="<?php echo get_template_directory_uri()?>/img/home_news_bg.png" alt="">
        </div>
      </section>
      <section class="home_partner full_screen">
        <div class="kl_container">
            <div class="home_partner_title txt_title_color txt_uppercase txt_center txt_55 heading"><?= wp_kses_post($partner_title) ?></div>
            <div class="home_partner_inner"> 
                <?php if (!empty($partner_item)) : ?>
                <?php foreach ($partner_item as $item): ?>
                <div class="home_partner_item img_full">
                        <img src="<?= esc_url(wp_get_attachment_url($item['partner_item_img'])) ?>" alt="">
                </div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
        </div>
        <div class="footer_wrap">
        <?php
wp_enqueue_script('home', get_template_directory_uri() . '/js/home.js', array('global-js'), SITE_VERSION, true);
 get_footer(); ?>
        </div>
      </section>




