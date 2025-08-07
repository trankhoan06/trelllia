<?php
include 'typerocket/init.php';
require dirname( __FILE__ ) . '/inc/init.php';

add_filter('tr_theme_options_page', function() {
    return get_template_directory() . '/theme-options.php';
});

load_theme_textdomain( 'tbs', get_template_directory().'/languages' );
add_theme_support( 'post-thumbnails' );
function webp_upload_mimes($existing_mimes) {
  $existing_mimes['webp'] = 'image/webp';
  return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');
add_filter('wpcf7_autop_or_not', '__return_false');
function theme_enqueue_scripts() {
  wp_enqueue_style('swiper', get_template_directory_uri() . '/plugin/swiper/swiper-bundle.min.css');
    wp_enqueue_script('jquery-cus', 'https://code.jquery.com/jquery-3.7.1.min.js', array(), SITE_VERSION, true);
    wp_enqueue_script('lenis-js', 'https://unpkg.com/lenis@1.1.5/dist/lenis.min.js', array(), SITE_VERSION, true);
    wp_enqueue_script('gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), SITE_VERSION, true);
    wp_enqueue_script('scrolltrigger-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array(), SITE_VERSION, true);
    wp_enqueue_script('scrollscroll-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js', array(), SITE_VERSION, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/plugin/swiper/swiper-bundle.min.js', array(), SITE_VERSION, true);
    wp_enqueue_script('splitType3', get_template_directory_uri() . '/js/split-type.js', array(), null, true);
  wp_enqueue_script('core-animation-js', get_template_directory_uri() . '/js/core-animation/index.js', array(), SITE_VERSION, true);
    wp_enqueue_script('homepage-js', get_template_directory_uri() . '/js/homepage.js', array(), '1.0.4', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
//Media Support
add_image_size( 'post-default', 900, 480, true ); // 480 pixels wide by 370 pixels tall, soft proportional crop mode
//add_image_size( 'post-news', 410, 460, true );


add_action('init','theme_widgets_init');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'mytheme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

  register_sidebar( array(
    'name'          => __( 'Footer', 'mytheme' ),
    'id'            => 'footer-1',
    'description'   => 'Widgets added to this region will appear beneath the header and above the main content.',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
}
function tr_lang_field($key, $post_id = null) {
  $lang = function_exists('pll_current_language') ? pll_current_language() : 'vi';
  return tr_posts_field("{$key}_{$lang}", $post_id);
}
// This theme uses wp_nav_menu() in two locations.
register_nav_menus( array(
	'primary'		=> __( 'Primary Menu', 'mytheme' ),
  'secondary'   => __( 'Secondary Menu', 'mytheme' ),
  'footer'   => __( 'Footer Menu', 'mytheme' ),
) );


add_filter('next_posts_link_attributes', 'posts_link_attributes_next');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_prev');

function posts_link_attributes_next() {
    return 'class="next"';
}
function posts_link_attributes_prev() {
    return 'class="prev"';
}

add_filter('show_admin_bar', '__return_false');

function remove_core_updates(){
  global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
//add_filter('pre_site_transient_update_core','remove_core_updates');
//add_filter('pre_site_transient_update_plugins','remove_core_updates');
//add_filter('pre_site_transient_update_themes','remove_core_updates');

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('←'),
    'next_text'       => __('→'),
    'type'            => 'array',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if (is_array($paginate_links)) {
    echo "<nav class='pagination'>";
        echo '<ul class="page-numbers">';
        foreach ( $paginate_links as $page ) {
          echo "<li>$page</li>";
        }
       echo '</ul>';
     
    echo "</nav>";
  }
}

function custom_search_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => '&paged=%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('←'),
    'next_text'       => __('→'),
    'type'            => 'array',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if (is_array($paginate_links)) {
    echo "<nav class='woocommerce-pagination'>";
        echo '<ul class="page-numbers">';
        foreach ( $paginate_links as $page ) {
          echo "<li>$page</li>";
        }
       echo '</ul>';
     
    echo "</nav>";
  }
}

function custom_ajax_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  //global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => '&paged=%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => false,
    'type'            => 'array',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if (is_array($paginate_links)) {
    echo "<nav class='pagination ajax-pagination'>";
        echo '<ul class="page-numbers">';
        foreach ( $paginate_links as $page ) {
          echo "<li>$page</li>";
        }
       echo '</ul>';
     
    echo "</nav>";
  }
}
add_action('wp_ajax_get_post_detail', 'handle_get_post_detail');
add_action('wp_ajax_nopriv_get_post_detail', 'handle_get_post_detail');

function handle_get_post_detail() {
    $post_id = isset($_POST['post_id']) ? intval($_POST['post_id']) : 0;

    if (!$post_id || get_post_status($post_id) !== 'publish') {
        wp_send_json_error('Bài viết không tồn tại hoặc chưa được public.');
    }

    $post = get_post($post_id);

   $data = [
    'title'   => html_entity_decode(get_the_title($post), ENT_QUOTES | ENT_HTML5, 'UTF-8'),
    'updated' => get_the_modified_date('d/m/Y', $post),
    'content' => html_entity_decode(apply_filters('the_content', $post->post_content), ENT_QUOTES | ENT_HTML5, 'UTF-8'),
];

    wp_send_json_success($data);
}

function custom_pagination2($numpages = '', $pagerange = '', $paged=''){

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  
    echo '<div class="isotope-pager">';
    echo get_previous_posts_link( '<i class="fa fa-angle-left" aria-hidden="true"></i>' );
    echo '<span class="pager prev">'.$paged.'<small> \ '.$numpages.'</small></span>';
    echo get_next_posts_link( '<i class="fa fa-angle-right" aria-hidden="true"></i>' ); 
    echo '</div>';
  
}

function searchFilter($query) {
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', array('product','post','project','solution'));
    };
    return $query;
};

//add_filter('pre_get_posts','searchFilter');



add_filter('post_gallery','customFormatGallery',10,2);

function customFormatGallery($string,$attr){
    global $post;
    $output = "<div class='row gutter-5'>";
    $posts = get_posts(array('include' => $attr['ids'],'post_type' => 'attachment'));

    foreach($posts as $imagePost){
        $output .= "<a class='col-sm-4 item fancybox fancy-gallery' rel='gallery' href='".wp_get_attachment_image_src($imagePost->ID, 'full')[0]."'>";
        $output .= "<img src='".wp_get_attachment_image_src($imagePost->ID, 'medium')[0]."'/>";
        $output .= "</a>";
    }

    $output .= "</div>";
    return $output;
}

function remove_dashboard_meta() {
        remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
        remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
        remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');//since 3.8

        remove_action('welcome_panel', 'wp_welcome_panel');
}
add_action( 'admin_init', 'remove_dashboard_meta' );

function custom_loginlogo() {
echo '<style type="text/css">
body #login h1 a {background-image: url('.get_bloginfo('template_directory').'/images/logo-backend.svg); background-size:contain; width:180px; }
</style>';
}
add_action('login_head', 'custom_loginlogo');

//Custom post perpage
function custom_posts_per_page( $query ) {
    if ( $query->is_archive() && $query->is_main_query() && isset($query->query_vars['post_type']) && in_array($query->query_vars['post_type'] , ["video","gallery"])  ) {
        $query->set( 'posts_per_page', -1 );
    }
}
//add_action( 'pre_get_posts', 'custom_posts_per_page' );

function site_picture_add_dashboard_widgets() {

  wp_add_dashboard_widget(
                 'site_picture_dashboard_widget',         // Widget slug.
                 'Thông tin kích thước hình ảnh',         // Title.
                 'site_picture_information' // Display function.
    );
    
}

add_action( 'wp_dashboard_setup', 'site_picture_add_dashboard_widgets' );

/**
 * Create the function to output the contents of our Dashboard Widget.
 */
function site_picture_information() {

  // Display whatever it is you want to show.
	echo '';
 
}


function archive_posttype() {



}
add_action('init', 'register_project_post_type');
function register_project_post_type() {
    $labels = array(
        'name'               => 'Dự án',
        'singular_name'      => 'Dự án',
        'menu_name'          => 'Dự án',
        'name_admin_bar'     => 'Dự án',
        'add_new'            => 'Thêm mới',
        'add_new_item'       => 'Thêm Dự án mới',
        'new_item'           => 'Dự án mới',
        'edit_item'          => 'Chỉnh sửa Dự án',
        'view_item'          => 'Xem Dự án',
        'all_items'          => 'Tất cả Dự án',
        'search_items'       => 'Tìm kiếm Dự án',
        'not_found'          => 'Không tìm thấy',
        'not_found_in_trash' => 'Không tìm thấy trong thùng rác',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'du-an-chi-tiet'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-building',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'show_in_rest'       => true
    );

    register_post_type('project', $args);
}

add_action('init', 'register_project_taxonomy');
function register_project_taxonomy() {
    $labels = array(
        'name'              => 'Danh mục Dự án',
        'singular_name'     => 'Danh mục Dự án',
        'search_items'      => 'Tìm kiếm danh mục',
        'all_items'         => 'Tất cả danh mục',
        'parent_item'       => 'Danh mục cha',
        'parent_item_colon' => 'Danh mục cha:',
        'edit_item'         => 'Chỉnh sửa danh mục',
        'update_item'       => 'Cập nhật danh mục',
        'add_new_item'      => 'Thêm danh mục mới',
        'new_item_name'     => 'Tên danh mục mới',
        'menu_name'         => 'Danh mục Dự án',
    );

    register_taxonomy('project_category', array('project'), array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'rewrite'           => array('slug' => 'danh-muc-du-an'),
        'show_in_rest'      => true
    ));
}

// 2. Add featured checkbox meta box
add_action('add_meta_boxes', function() {
    add_meta_box('project_featured_metabox', 'Nổi bật', function($post) {
        $value = get_post_meta($post->ID, '_is_featured_project', true);
        echo '<label><input type="checkbox" name="is_featured_project" value="1"' . checked($value, 1, false) . '> Dánh dấu là dự án nổi bật</label>';
    }, 'project', 'side', 'high');
});

add_action('save_post', function($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    if (isset($_POST['is_featured_project'])) {
        update_post_meta($post_id, '_is_featured_project', 1);
    } else {
        delete_post_meta($post_id, '_is_featured_project');
    }
});

// 3. Add column in list table
add_filter('manage_project_posts_columns', function($columns) {
    $columns['is_featured'] = 'Nổi bật';
    return $columns;
});

add_action('manage_project_posts_custom_column', function($column, $post_id) {
    if ($column === 'is_featured') {
        $is_featured = get_post_meta($post_id, '_is_featured_project', true);
        echo '<div data-is_featured="' . ($is_featured ? '1' : '0') . '">' . ($is_featured ? '✅' : '—') . '</div>';
    }
}, 10, 2);

add_filter('manage_edit-project_sortable_columns', function($columns) {
    $columns['is_featured'] = 'is_featured';
    return $columns;
});

add_action('pre_get_posts', function($query) {
    if (!is_admin()) return;
    if ($query->get('orderby') === 'is_featured') {
        $query->set('meta_key', '_is_featured_project');
        $query->set('orderby', 'meta_value_num');
    }
});

// 4. Quick edit support
add_action('quick_edit_custom_box', function($column_name, $post_type) {
    if ($column_name !== 'is_featured' || $post_type !== 'project') return;
    echo '<fieldset class="inline-edit-col-right"><div class="inline-edit-col"><label><input type="checkbox" name="is_featured_project" value="1"> Dánh dấu là nổi bật</label></div></fieldset>';
}, 10, 2);

add_action('admin_footer', function() {
    global $post_type;
    if ($post_type !== 'project') return;
    ?>
    <script>
    jQuery(function($){
        var $wp_inline_edit = inlineEditPost.edit;
        inlineEditPost.edit = function(id) {
            $wp_inline_edit.apply(this, arguments);
            var post_id = typeof(id) === 'object' ? parseInt(this.getId(id)) : id;
            var is_featured = $('#post-' + post_id).find('td.column-is_featured div').data('is_featured');
            $('input[name="is_featured_project"]', '.inline-edit-row').prop('checked', is_featured == 1);
        };
    });
    </script>
    <?php
});
// 1. Meta box trong trang chỉnh sửa post
function add_custom_fields_for_post() {
    add_meta_box(
        'custom_display_fields',
        'Tùy chọn hiển thị',
        'render_custom_fields_for_post',
        'post',
        'side',
        'default'
    );
}
add_action('add_meta_boxes', 'add_custom_fields_for_post');

function render_custom_fields_for_post($post) {
    $show_on_homepage = get_post_meta($post->ID, '_show_on_homepage', true);
    $is_featured = get_post_meta($post->ID, '_is_featured', true);
    ?>
    <p><label><input type="checkbox" name="show_on_homepage" <?php checked($show_on_homepage, 'yes'); ?> /> Hiển thị Homepage</label></p>
    <p><label><input type="checkbox" name="is_featured" <?php checked($is_featured, 'yes'); ?> /> Nổi bật</label></p>
    <?php
}
// 2. Thêm cột vào bảng danh sách post
function add_custom_columns_to_post($columns) {
    $columns['show_on_homepage'] = 'Hiển thị Homepage';
    $columns['is_featured'] = 'Nổi bật';
    return $columns;
}
add_filter('manage_post_posts_columns', 'add_custom_columns_to_post');

function render_custom_columns_for_post($column, $post_id) {
    if ($column === 'show_on_homepage') {
        echo get_post_meta($post_id, '_show_on_homepage', true) === 'yes' ? '✅' : '–';
    }
    if ($column === 'is_featured') {
        echo get_post_meta($post_id, '_is_featured', true) === 'yes' ? '⭐' : '–';
    }
}
add_action('manage_post_posts_custom_column', 'render_custom_columns_for_post', 10, 2);
// 3. Thêm class để truyền dữ liệu qua JavaScript
add_filter('post_class', function($classes, $class, $post_id) {
    $show = get_post_meta($post_id, '_show_on_homepage', true) === 'yes' ? 'yes' : 'no';
    $feat = get_post_meta($post_id, '_is_featured', true) === 'yes' ? 'yes' : 'no';
    $classes[] = "data-show-homepage-$show";
    $classes[] = "data-is-featured-$feat";
    return $classes;
}, 10, 3);
// 4. Hiển thị checkbox trong Quick Edit (tách cột riêng)
function add_quick_edit_custom_fields($column_name, $post_type) {
    if ($post_type !== 'post') return;

    if ($column_name === 'show_on_homepage') {
        ?>
        <fieldset class="inline-edit-col-left">
            <div class="inline-edit-col">
                <label class="alignleft">
                    <input type="checkbox" name="custom_quickedit_show_on_homepage" class="custom_quickedit_show_on_homepage" />
                    <span class="checkbox-title">Hiển thị Homepage</span>
                </label>
            </div>
        </fieldset>
        <?php
    }

    if ($column_name === 'is_featured') {
        ?>
        <fieldset class="inline-edit-col-left">
            <div class="inline-edit-col">
                <label class="alignleft">
                    <input type="checkbox" name="custom_quickedit_is_featured" class="custom_quickedit_is_featured" />
                    <span class="checkbox-title">Nổi bật</span>
                </label>
            </div>
        </fieldset>
        <?php
    }
}
add_action('quick_edit_custom_box', 'add_quick_edit_custom_fields', 10, 2);
// 5. Lưu dữ liệu từ meta box và quick edit
function save_all_custom_fields($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    $show = (isset($_POST['show_on_homepage']) || isset($_POST['custom_quickedit_show_on_homepage'])) ? 'yes' : '';
    $feat = (isset($_POST['is_featured']) || isset($_POST['custom_quickedit_is_featured'])) ? 'yes' : '';

    update_post_meta($post_id, '_show_on_homepage', $show);
    update_post_meta($post_id, '_is_featured', $feat);
}
add_action('save_post', 'save_all_custom_fields');
// 6. JavaScript để gán lại checkbox khi mở Quick Edit
add_action('admin_footer-edit.php', function () {
    global $current_screen;
    if ($current_screen->post_type !== 'post') return;
    ?>
    <script>
        jQuery(function($){
            $(document).on('click', '.editinline', function () {
                const postId = $(this).closest('tr').attr('id').replace('post-', '');
                const row = $('#post-' + postId);

                const showHomepage = row.hasClass('data-show-homepage-yes');
                const isFeatured = row.hasClass('data-is-featured-yes');

                const editRow = $('#edit-' + postId);
                editRow.find('input.custom_quickedit_show_on_homepage').prop('checked', showHomepage);
                editRow.find('input.custom_quickedit_is_featured').prop('checked', isFeatured);
            });
        });
    </script>
    <?php
});
