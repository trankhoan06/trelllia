<?php

/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */

?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?> xmlns:fb="http://ogp.me/ns/fb#">
<!--<![endif]-->

<head>
<meta charset="UTF-8" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="format-detection" content="telephone=no">

<title><?php  wp_title(''); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

<link href="<?= get_template_directory_uri(); ?>/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?= get_template_directory_uri(); ?>/plugin/font-awesome/css/all.min.css" rel="stylesheet" >

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />


<?php
  $currentLang = get_locale();
  $currentLang= explode("_",$currentLang)[0];
 
	wp_head();

global $hotline; 
$hotline = tr_options_field('tr_theme_options.company_phone');
if(is_array($hotline)){
  $hotline=  $hotline[array_rand($hotline)];
}


    $facebook= tr_options_field('tr_theme_options.facebook');
    $tiktok= tr_options_field('tr_theme_options.tiktok');
    $youtube= tr_options_field('tr_theme_options.youtube');

    $link_360= tr_options_field('tr_theme_options.link_360');

  
  $currentLang = get_locale();
  $currentLang= explode("_",$currentLang)[0];
  $homeUrl = home_url();
  $isFrontPage = is_front_page();

  $languages=[
    ["url"=>"#","slug"=>"vi"],
    ["url"=>"#","slug"=>"en"],
  ];
  if(function_exists("pll_the_languages")){
    $languages =   pll_the_languages( array(
           'show_flags' => 0,
           'hide_current'=>0,
           'raw'=>1
      ));  
  }
  
 ?>

 <script type="text/javascript">
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    var homeurl = "<?php echo $homeUrl ?>";
    var thankurl = "<?php echo getPageTemplateUrl('thanks'); ?>";
    var template_directory = "<?php echo get_template_directory_uri(); ?>";
    var app = {
      message:{
        content_empty:'<?= __("Nội dung đang cập nhật","tbs") ?>',
        register_success:'<?= __("<p>Cám ơn Quý khách đã liên hệ!</p><p>Chúng tôi sẽ liên hệ Quý khách trong thời gian sớm nhất<p>Xin cảm ơn!</p>","tbs") ?>',
        register_duplicate:'<?= __("<p>Đăng ký không thành công.</p><p>Tài khoản Email hoặc Số điện thoại đã được liên hệ.</p>","tbs") ?>',
        register_false:'<?= __("<p>Đăng ký không thành công.</p><p>Vui lòng liên hệ qua hotline.</p>","tbs") ?>',
        term_false:'<?= __("DIEU_KHOAN_LOI_XAC_NHAN","tbs") ?>',
        term_success:'<?= __("DIEU_KHOAN_HOAN_THANH","tbs") ?>',
        term_success_button:'<?= __("Hoàn thành","tbs") ?>'
      },
      variable: {lang:'vi_VN'},
    }
</script>
 <!-- Internet Explorer condition - HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 

<?= tr_options_field('tr_theme_options.script_header');?>


</head>

<?php 
  global $disableFullpage;
  global $pageClass;
?>

<header class="header" >
  <div class="header_top">
    <a href="/" class="header_top_logo img_full">
      <img src="<?= get_template_directory_uri(); ?>/img/header-logo.png" alt="">
    </a>
    <div class="header_top_right">
      <div class="header_top_right_language">
        <div class="header_top_right_language_item active txt_17">VN</div>
        <div class="header_top_right_language_icon img_full">
          <img src="<?= get_template_directory_uri(); ?>/img/header_icon.svg" alt="">
        </div>
        <div class="header_top_right_language_item language_other txt_17"> EN</div>
      </div>
      <div class="header_top_right_menu_wrap">
        <div class="header_top_right_menu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </div>
  <div class="header_nav">
    <a href="/" class="header_top_logo img_full">
      <img src="<?= get_template_directory_uri(); ?>/img/header-logo.png" alt="">
    </a>
    <div class="header_nav_menu">
      <div class="header_nav_menu_item">
        <a href="/" class="header_nav_menu_item_link txt_17 txt_title_color txt_uppercase">
          VỀ TBS GROUP
        </a>
      </div>
      <div class="header_nav_menu_item">
        <div class="header_nav_menu_item_link menu_item txt_17 txt_title_color txt_uppercase" >
          LĨNH VỰC HOẠT ĐỘNG
        </div>
        <div class="header_nav_menu_item_child">
          <a href="/" class="header_nav_menu_item_link txt_17" >
             <div class="header_nav_menu_item_link_icon img_full">
          <img src="<?= get_template_directory_uri(); ?>/img/header_icon.svg" alt="">
        </div>
            Sản xuất công nghiệp
        </a>
        <a href="/" class="header_nav_menu_item_link txt_17" >
           <div class="header_nav_menu_item_link_icon img_full">
          <img src="<?= get_template_directory_uri(); ?>/img/header_icon.svg" alt="">
        </div>
            Bất động sản
        </a>
        </div>
      </div>
       <div class="header_nav_menu_item" >
        <a href="/" class="header_nav_menu_item_link txt_17 txt_title_color txt_uppercase" >
          Phát triển bền vững
        </a>
      </div>
       <div class="header_nav_menu_item">
        <a href="/" class="header_nav_menu_item_link txt_17 txt_title_color txt_uppercase" >
          TIN TỨC - SỰ KIỆN
        </a>
      </div>
       <div class="header_nav_menu_item">
        <a href="/" class="header_nav_menu_item_link txt_17 txt_title_color txt_uppercase" >
          TUYỂN DỤNG
        </a>
      </div>
       <div class="header_nav_menu_item">
        <a href="/" class="header_nav_menu_item_link txt_17 txt_title_color txt_uppercase" >
          Liên hệ
        </a>
      </div>
    </div>
    <div class="header_nav_language">
      <div class="header_nav_language_item txt_17 active">VN</div>
      <div class="header_nav_language_item txt_17">EN</div>
    </div>
  </div>
</header>