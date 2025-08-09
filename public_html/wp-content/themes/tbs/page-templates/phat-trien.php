<?php
/**
 * Template Name: Phát triển
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
wp_enqueue_style('phat-trien-style', get_template_directory_uri() . '/css/phat-trien.css', [], SITE_VERSION, 'all');
get_header();

$pageID = get_queried_object_id();

// === Banner Chính ===
$banner_image = wp_get_attachment_url(tr_posts_field('banner_image', $pageID));
$banner_title = tr_posts_field('banner_title', $pageID);

// === Tầm nhìn ===
$sight_title = tr_posts_field('sight_title', $pageID);
$sight_des = tr_posts_field('sight_des', $pageID);
$sight_image = wp_get_attachment_url(tr_posts_field('sight_image', $pageID));

// === Sức khỏe & An toàn lao động ===
$safe_title1 = tr_posts_field('safe_title1', $pageID);
$safe_title2 = tr_posts_field('safe_title2', $pageID);
$safe_item = tr_posts_field('safe_item', $pageID); // Array of ['safe_item_des']
$safe_image = wp_get_attachment_url(tr_posts_field('safe_image', $pageID));

// === Vì môi trường ===
$environment_title = tr_posts_field('environment_title', $pageID);
$environment_image = wp_get_attachment_url(tr_posts_field('environment_image', $pageID));
$environment_item = tr_posts_field('environment_item', $pageID); // Array of ['environment_item_des']
$environment_image_logo = wp_get_attachment_url(tr_posts_field('environment_image_logo', $pageID));

// === Dự án xanh ===
$project_item = tr_posts_field('project_item', $pageID);
// Mỗi item: ['project_item_image', 'project_item_title', 'project_item_des' => [['project_item_des_item']]]

// === Trách nhiệm xã hội ===
$response_title = tr_posts_field('response_title', $pageID);
$response_item_des = tr_posts_field('response_item_des', $pageID); // Array of ['response_item_des_des']
$response_image = wp_get_attachment_url(tr_posts_field('response_image', $pageID));
$response_item = tr_posts_field('response_item', $pageID); // Array of ['response_item_title', 'response_item_des']
?>
 <section class="development_hero">
        <div class="development_hero_img img_full">
          <img src="<?php echo $banner_image ?>" alt="">
        </div>
        <h1 class="development_hero_txt heading txt_55"><?= wp_kses_post($banner_title) ?></h1>
    </section>
    <section class="development_sight">
      <div class="kl_container">
        <h2 class="development_sight_title txt_title_color txt_uppercase heading txt_55 txt_center"><?= wp_kses_post($sight_title) ?></h2>
        <div class="development_sight_des txt_17"><?= wp_kses_post($sight_des) ?></div>
        <div class="development_sight_img img_full">
          <img src="<?php echo $sight_image ?>" alt="">
        </div>
      </div>
    </section>
    <section class="development_safe bg_line">
      <div class="kl_container">
        <div class="development_safe_inner kl_grid">
          <div class="development_safe_info">
            <div class="development_safe_info_title_wrap">
              <h2 class="development_safe_info_title heading txt_title_color txt_uppercase txt_55"><?= wp_kses_post($safe_title1) ?></h2>
              <h2 class="development_safe_info_title right heading txt_title_color txt_uppercase txt_55"><?= wp_kses_post($safe_title2) ?> </h2>
            </div>
            <?php if (!empty($safe_item)) : ?>
                <?php foreach ($safe_item as $item): ?>
            <div class="development_safe_info_des txt_justify txt_17"><?= $item['safe_item_des'] ?></div>
             <?php endforeach; ?>
              <?php endif; ?>
          </div>
          <div class="development_safe_img img_full right_full">
            <img src="<?php echo $safe_image ?>" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="development_environment">
      <div class="kl_container">
        <div class="development_environment_content kl_grid">
          <h2 class="development_environment_title desktop heading txt_title_color txt_uppercase txt_55 txt_center"><?= wp_kses_post($environment_title) ?></h2>
          <div class="development_environment_img img_full left_full">
            <img src="<?php echo $environment_image ?>" alt="">
          </div>
          <div class="development_environment_info">
          <h2 class="development_environment_title heading txt_title_color txt_uppercase txt_55 txt_center tablet"><?= wp_kses_post($environment_title) ?></h2>
           <?php if (!empty($environment_item)) : ?>
                <?php foreach ($environment_item as $item): ?>
            <div class="development_environment_info_des txt_17 txt_justify"><?= $item['environment_item_des'] ?></div>
            <?php endforeach; ?>
              <?php endif; ?>
            <div class="development_environment_info_logo">
              <div class="development_environment_info_logo_inner img_full">
                <img src="<?php echo $environment_image_logo ?>" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="development_environment_project kl_grid">
             <?php if (!empty($project_item)) : ?>
                <?php foreach ($project_item as $item): ?>
          <div class="development_environment_project_left">
            <div class="development_environment_project_img img_full">
              <img src="<?= esc_url(wp_get_attachment_url($item['project_item_image'])) ?>" alt="">
            </div>
            <div class="development_environment_project_title title_project txt_uppercase heading txt_28"><?= $item['project_item_title'] ?></div>
            <div class="development_environment_project_des txt_17"><?= $item['project_item_des'] ?></div>
          </div>
          <?php endforeach; ?>
              <?php endif; ?>
        </div>
      </div>
    </section>
    <section class="development_response bg_line">
      <div class="kl_container">
        <div class="development_response_inner kl_grid">
          <div class="development_response_info">
            <h2 class="development_response_info_title heading txt_55 txt_title_color txt_uppercase"><?= wp_kses_post($response_title) ?></h2>
            <?php if (!empty($response_item_des)) : ?>
                <?php foreach ($response_item_des as $item): ?>
            <div class="development_response_info_des txt_17 txt_justify"><?= $item['response_item_des_des'] ?></div>
            <?php endforeach; ?>
              <?php endif; ?>
          </div>
          <div class="development_response_img img_full right_full">
            <img src="<?php echo $response_image ?>" alt="">
          </div>
        </div>
        <div class="development_response_card kl_grid">
             <?php if (!empty($response_item)) : ?>
                <?php foreach ($response_item as $item): ?>
          <div class="development_response_card_item">
            <div class="development_response_card_item_title txt_center txt_uppercase txt_24"><?= $item['response_item_title'] ?></div>
            <div class="development_response_card_item_des txt_17 txt_center"><?= $item['response_item_des'] ?></div>
          </div>
           <?php endforeach; ?>
              <?php endif; ?>
        </div>
      </div>
    </section>
<?php 
wp_enqueue_script('phat-trien', get_template_directory_uri() . '/js/phat-trien.js',array('global-js'),SITE_VERSION,true);
get_footer(); 

?>