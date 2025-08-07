<?php
wp_enqueue_style('tin-tuc-style', get_template_directory_uri() . '/css/new.css', [], '2.3.1');
wp_enqueue_style('tin-tuc-detail-style', get_template_directory_uri() . '/css/new_detail.css', [], '2.3.1');
get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        $post_id = get_the_ID();

        // Các field đơn lẻ


        // Repeater hình ảnh
        $thumb_imgs = tr_posts_field('thumb_imgs', $post_id);
?>

        <section class="new__hero">
            <div class="new__hero__inner">
                <div class="new__hero__img image__full">
                    <img src="/wp-content/uploads/2025/07/tin-tuc-hero-1.jpg" alt="">
                </div>
                <?php
                $categories = get_the_category();
                $first_cat_name = $categories ? $categories[0]->name : '';
                ?>
                <div class="new__hero__content">
                    <div class="new__hero__content__subtitle subtitle__banner">Tin tức</div>
                    <div class="new__hero__content__smalltitle title__banner"><?php echo $first_cat_name; ?></div>
                </div>
                <?php
                $categories = get_the_category();
                $first_cat_slug = $categories ? $categories[0]->slug : '';
                ?>
                <div class="new__hero__menu">
                    <?php
                    $tintuc_url = '/tin-tuc';
                    ?>
                    <?php if ($first_cat_slug === 'truyen-thong') : ?>
                        <div class="new__hero__menu__item active">
                            <div class="new__hero__menu__item__txt">TRUYỀN THÔNG</div>
                        </div>
                    <?php else : ?>
                        <a href="<?php echo esc_url(add_query_arg('tab', 'truyen-thong', $tintuc_url)); ?>" class="new__hero__menu__item">
                            <div class="new__hero__menu__item__txt">TRUYỀN THÔNG</div>
                        </a>
                    <?php endif; ?>

                    <?php if ($first_cat_slug === 'su-kien') : ?>
                        <div class="new__hero__menu__item active">
                            <div class="new__hero__menu__item__txt">SỰ KIỆN</div>
                        </div>
                    <?php else : ?>
                        <a href="<?php echo esc_url(add_query_arg('tab', 'su-kien', $tintuc_url)); ?>" class="new__hero__menu__item">
                            <div class="new__hero__menu__item__txt">SỰ KIỆN</div>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="new__detail">
            <div class="new__detail__wrap">
                <div class="new__detail__time"><?php echo get_the_date('d-m-Y'); ?></div>

                <div class="new__detail__title"><?php the_title(); ?></div>
                <div class="new__detail__content">
                    <div class="new__detail__content__des">
                        <?php
                        the_content();
                        ?>
                    </div>
                </div>


            </div>

        </section>
        <section class="new__other">
            <div class="new__other__title">Tin tức khác</div>
            <div class="new__relate__wrap">
                <?php
                // Lấy category của bài viết hiện tại
                $categories = get_the_category();
                $cat_ids = wp_list_pluck($categories, 'term_id');

                // Xử lý phân trang
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $posts_per_page = 4;

                $args = [
                    'post_type'      => 'post',
                    'posts_per_page' => $posts_per_page,
                    'post__not_in'   => [get_the_ID()],
                    'category__in'   => $cat_ids,
                    'paged'          => $paged,
                ];

                $other_posts = new WP_Query($args);
                if ($other_posts->have_posts()) :
                    while ($other_posts->have_posts()) : $other_posts->the_post();
                        $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: get_template_directory_uri() . '/assets/img/default-thumb.jpg';
                ?>
                        <a href="<?php the_permalink(); ?>" class="new__relate__item">
                            <div class="new__relate__item__time"><?php the_time('d-m-Y'); ?></div>
                            <div class="new__relate__item__title"><?php the_title(); ?></div>
                            <div class="new__relate__item__img image__full">
                                <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                            </div>
                            <div class="new__relate__item__link image__full">
                                <img src="/wp-content/uploads/2025/07/arrow.png" alt="">
                            </div>
                        </a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>Không có bài viết liên quan.</p>';
                endif;
                ?>
            </div>

        </section>



<?php
    endwhile;
endif;
?>

<?php
get_footer(); ?>