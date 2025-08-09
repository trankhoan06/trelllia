<?php

/**
 * Template Name: Tin tức
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
get_header();
wp_enqueue_style('tin-tuc', get_template_directory_uri() . '/css/tin-tuc.css', [], SITE_VERSION, 'all');
$pageID = get_queried_object_id();
$banner_image = wp_get_attachment_url(tr_posts_field('news_banner_img', $pageID));
$banner_title = tr_posts_field('news_banner_txt', $pageID);
?>
<section class="news_hero">
  <div class="news_hero_img img_full">
    <img src="<?php echo $banner_image ?>" alt="">
  </div>
  <h1 class="news_hero_txt txt_uppercase heading txt_55"><?= wp_kses_post($banner_title) ?> </h1>
</section>
<section class="news_content">
  <div class="kl_container">
    <div class="news_content_inner kl_grid">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 6, // số bài mỗi trang
        'paged'          => $paged,
      );
      $query = new WP_Query($args);
      ?>
      <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="news_content_item">
            <div class="news_content_item_img img_full">
              <img src="<?= get_template_directory_uri(); ?>/img/news_content.webp" alt="">
            </div>
            <div class="news_content_item_time txt_17"><?php echo get_the_date('d-m-Y'); ?></div>
            <div class="news_content_item_txt">
              <div class="news_content_item_title txt_bold txt_18 txt_justify"><?php the_title(); ?></div>
              <div class="news_content_item_des txt_17 txt_justify"><?php echo wp_trim_words(get_the_excerpt(), 30); ?></div>
            </div>
            <div class="news_content_item_detail">
              <div class="news_content_item_detail_txt txt_17">Chi tiết</div>
              <div class="news_content_item_detail_img img_full">
                <img src="<?= get_template_directory_uri(); ?>/img/icon_next_detail.svg" alt="">
              </div>
            </div>
          </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <p>Không tìm thấy bài viết.</p>
      <?php endif; ?>
    </div>
    <?php
    $total_pages = $query->max_num_pages;
    if ($total_pages > 1) :
      $current_page = max(1, get_query_var('paged'));
    ?>
      <div class="news_content_paging">
        <?php if ($current_page > 1) : ?>
          <a class="news_content_paging_prev2 active" href="<?php echo get_pagenum_link(1); ?>">
            <img src="<?= get_template_directory_uri(); ?>/img/paging_prev2.svg" alt="">
          </a>
          <a class="news_content_paging_prev active" href="<?php echo get_pagenum_link($current_page - 1); ?>">
            <img src="<?= get_template_directory_uri(); ?>/img/paging_prev1.svg" alt="">
          </a>
        <?php endif; ?>

        <?php
        for ($i = 1; $i <= $total_pages; $i++) :
          if ($i <= 3 || $i == $total_pages || abs($i - $current_page) <= 1) :
            if ($i == $current_page) {
              echo '<a href="#" class="news_content_paging_num txt_18 txt_bold active">' . $i . '</a>';
            } else {
              echo '<a href="' . get_pagenum_link($i) . '" class="news_content_paging_num txt_18 txt_bold">' . $i . '</a>';
            }
          elseif ($i == 4 || $i == $total_pages - 1) :
            echo '<div class="news_content_paging_more txt_18 txt_bold">...</div>';
          endif;
        endfor;
        ?>

        <?php if ($current_page < $total_pages) : ?>
          <a class="news_content_paging_next active" href="<?php echo get_pagenum_link($current_page + 1); ?>">
            <img src="<?= get_template_directory_uri(); ?>/img/paging_next1.svg" alt="">
          </a>
          <a class="news_content_paging_next2 active" href="<?php echo get_pagenum_link($total_pages); ?>">
            <img src="<?= get_template_directory_uri(); ?>/img/paging_next2.svg" alt="">
          </a>
        <?php endif; ?>
      </div>
    <?php endif; ?>

  </div>
</section>
<?php
wp_enqueue_script('tin-tuc', get_template_directory_uri() . '/js/tin-tuc.js', array('global-js'), SITE_VERSION, true);
get_footer();
?>