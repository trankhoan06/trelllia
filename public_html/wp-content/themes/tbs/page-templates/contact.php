<?php
/**
 * Template Name: Liên hệ
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
get_header();
wp_enqueue_style('lien-he', get_template_directory_uri() . '/css/lien-he.css', [], SITE_VERSION, 'all');

$pageID = get_queried_object_id();

// === Banner Chính ===
$banner_image = wp_get_attachment_url(tr_posts_field('banner_image', $pageID));
$banner_title = tr_posts_field('banner_title', $pageID);

// === Bản đồ ===
$ggmap_link = tr_posts_field('ggmap_link', $pageID); // Sử dụng cho iframe src hoặc link
$ggmap_title = tr_posts_field('ggmap_title', $pageID);
$ggmap_content = tr_posts_field('ggmap_content', $pageID);

// === Form liên hệ (labels) ===
$form_title = tr_posts_field('form_title', $pageID);
$form_name_label = tr_posts_field('form_name', $pageID);
$form_email_label = tr_posts_field('form_email', $pageID);
$form_tel_label = tr_posts_field('form_tel', $pageID);
$form_des_label = tr_posts_field('form_des', $pageID);
$form_submit_label = tr_posts_field('form_submit', $pageID);
?>
<section class="contact_hero">
      <div class="contact_hero_overlay mobile"></div>
      <div class="contact_hero_img img_full">
        <img src="<?php echo $banner_image ?>" alt="" />
      </div>
      <div class="contact_hero_txt txt_uppercase txt_55"><?= wp_kses_post($banner_title) ?></div>
    </section>
    <section class="contact_content">
      <div class="kl_container">
        <div class="contact_content_map">
          <iframe
            src="<?= wp_kses_post($ggmap_link) ?>"
            width="100%"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          >
          </iframe>
          <div class="contact_content_map_address">
            <div class="contact_content_map_address_title heading txt_30 txt_uppercase txt_title_color"><?= wp_kses_post($ggmap_title) ?></div>
            <div class="contact_content_map_address_des txt_17"><?= wp_kses_post($ggmap_content) ?></div>
          </div>
        </div>
        <div class="contact_content_form">
            <div class="contact_content_form_title txt_title_color txt_30 txt_uppercase heading txt_center"><?= wp_kses_post($form_title) ?></div>
            <div class="contact_content_form_input">
                <div class="contact_content_form_input_inner kl_grid">
                    <input type="text" name="name" placeholder="<?= wp_kses_post($form_name_label) ?>" required>
                    <input type="email" name="email" placeholder="<?= wp_kses_post($form_email_label) ?>" required>
                    <input type="tel" name="phone" placeholder="<?= wp_kses_post($form_tel_label) ?>" required>
                </div>
                <div class="contact_content_form_input_inner">
                    <textarea name="message" placeholder="<?= wp_kses_post($form_des_label) ?>" rows="5" required></textarea>
                </div>
                    <button class="contact_content_form_input_submit txt_20 txt_bold" type="submit"><?= wp_kses_post($form_submit_label) ?></button>
            </div>
        </div>
      </div>
    </section>
<?php 
wp_enqueue_script('lien-he', get_template_directory_uri() . '/js/lien-he.js', array('global-js'), SITE_VERSION, true);
get_footer(); ?>
