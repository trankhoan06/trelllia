<?php

/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header();
wp_enqueue_style('tin-tuc-chi-tiet', get_template_directory_uri() . '/css/tin-tuc-chi-tiet.css', [], SITE_VERSION, 'all');
?>
<section class="newsdetail_hero">
    <div class="newsdetail_hero_img img_full">
        <img src="<?= get_template_directory_uri(); ?>/img/news_hero.webp" alt="">
    </div>
    <h1 class="newsdetail_hero_txt txt_uppercase heading txt_55">TIN TỨC - sự kiện </h1>
</section>
<section class="newsdetail_content">
    <div class="kl_container">
        <h2 class="newsdetail_content_title txt_50 heading txt_uppercase">
            <?php the_title(); ?>
        </h2>
        <div class="newsdetail_content_time txt_17">
            <?php echo get_the_date('d-m-Y'); ?>
        </div>
        <div class="newsdetail_content_inner txt txt_17 txt_justify">
            <?php the_content(); ?>
        </div>
<div class="newsdetail_content_share">
                <a href="#" class="newsdetail_content_share_inner">
                    <div class="newsdetail_content_share_txt txt_17 txt_bold">Chia sẻ bài viết</div>
                    <div class="newsdetail_content_share_icon img_full">
                        <img src="<?= get_template_directory_uri(); ?>/img/icon_fb.svg" alt="">
                    </div>
                </a>
            </div>
    </div>
</section>
<?php
// Lấy ID bài viết hiện tại
$current_id = get_the_ID();

// Lấy số trang từ query string: ?page=2
$paged = isset($_GET['page']) ? max(1, intval($_GET['page'])) : 1;

// Cấu hình truy vấn bài viết "tin khác"
$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'paged'          => $paged,
    'post__not_in'   => array($current_id),
);

$related_query = new WP_Query($args);
$total_pages = $related_query->max_num_pages;
?>

<section class="newsdetail_other" data-post-id="<?php echo get_the_ID(); ?>">
    <div class="kl_container">
        <h2 class="newsdetail_other_title txt_uppercase txt_title_color txt_center txt_50 heading">TIN KHÁC</h2>
        <div id="related-posts" class="newsdetail_other_inner kl_grid"></div>

        <div class="newsdetail_other_paging" id="related-pagination"></div>
    </div>
</section>



<?php
wp_enqueue_script('tin-tuc-chi-tiet', get_template_directory_uri() . '/js/tin-tuc-chi-tiet.js', array('global-js'), SITE_VERSION, true);
get_footer();
?>
<script>
document.addEventListener("DOMContentLoaded", function () {
    let currentPage = 1;
    const postsContainer = document.getElementById('related-posts');
    const paginationContainer = document.getElementById('related-pagination');
    const currentPostId = document.querySelector('.newsdetail_other').dataset.postId;

    function loadRelatedPosts(page = 1) {
        fetch('<?php echo admin_url('admin-ajax.php'); ?>?action=load_related_posts&post_id=' + currentPostId + '&page=' + page)
            .then(response => response.text())
            .then(data => {
                const result = JSON.parse(data);
                postsContainer.innerHTML = result.posts;
                paginationContainer.innerHTML = result.pagination;
                currentPage = page;
                bindPaginationLinks();
            });
    }

    function bindPaginationLinks() {
        const links = paginationContainer.querySelectorAll('a[data-page]');
        links.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                const page = parseInt(this.dataset.page);
                loadRelatedPosts(page);
            });
        });
    }

    loadRelatedPosts();
});
</script>
