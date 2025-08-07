  <?php

    /**
     * The Header for our theme.
     *
     * Displays all of the <head> section and everything up till <div id="main">
     */

    ?>
  <!DOCTYPE html>
  <!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
  <!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
  <!--[if !(IE 7) | !(IE 8)  ]><!-->
  <html <?php language_attributes(); ?> xmlns:fb="http://ogp.me/ns/fb#">
  <!--<![endif]-->

  <head history.scrollRestoration = "manual";>
      <meta charset="UTF-8" />
      <meta http-equiv="content-type" content="text/html;charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="format-detection" content="telephone=no">
      <title><?php wp_title(''); ?></title>

      <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/global.css?v=<?= SITE_VERSION ?>">
      <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/style.css?v=<?= SITE_VERSION ?>">
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
      <style>
          .df_hide_onload {
              opacity: 0;
          }
      </style>

      <?php
        $currentLang = get_locale();
        $currentLang = explode("_", $currentLang)[0];

        wp_head();
        $currentLang = get_locale();
        $currentLang = explode("_", $currentLang)[0];
        $languages = [
            ["url" => "#", "slug" => "vi"],
            ["url" => "#", "slug" => "en"],
        ];
        if (function_exists("pll_the_languages")) {
            $languages =   pll_the_languages(array(
                'show_flags' => 0,
                'hide_current' => 0,
                'raw' => 1
            ));
        }

        ?>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LNVFXLVQZF"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LNVFXLVQZF');
</script>
      <script type="text/javascript">
          var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
          var thankurl = "<?php echo getPageTemplateUrl('thanks'); ?>";
          var template_directory = "<?php echo get_template_directory_uri(); ?>";
          var app = {
              message: {
                  content_empty: '<?= __("Nội dung đang cập nhật", "tbs") ?>',
                  register_success: '<?= __("<p>Cám ơn Quý khách đã liên hệ!</p><p>Chúng tôi sẽ liên hệ Quý khách trong thời gian sớm nhất<p>Xin cảm ơn!</p>", "tbs") ?>',
                  register_duplicate: '<?= __("<p>Đăng ký không thành công.</p><p>Tài khoản Email hoặc Số điện thoại đã được liên hệ.</p>", "tbs") ?>',
                  register_false: '<?= __("<p>Đăng ký không thành công.</p><p>Vui lòng liên hệ qua hotline.</p>", "tbs") ?>',
                  term_false: '<?= __("DIEU_KHOAN_LOI_XAC_NHAN", "tbs") ?>',
                  term_success: '<?= __("DIEU_KHOAN_HOAN_THANH", "tbs") ?>',
                  term_success_button: '<?= __("Hoàn thành", "tbs") ?>'
              },
              variable: {
                  lang: 'vi_VN'
              },
          }
      </script>


  </head>

  <?php
    global $disableFullpage;
    global $pageClass;
    ?>

  <body class="<?= $pageClass ?>">
      <!-- Header -->
     <header class="header " id="header">
        <div class="kl_container">
            <div class="header_inner">
                <a href="/" class="haeder_logo img_full">
                    <svg width="250" height="25" viewBox="0 0 250 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1275_1948)">
                            <path d="M7.74518 4.89564H0V0.367188H20.4244V4.89564H12.6792V24.5074H7.74518V4.89564Z"
                                fill="currentColor" />
                            <path
                                d="M38.2443 24.509L33.413 17.6306H28.4094V24.509H23.5781V0.367188H33.4479C39.8215 0.367188 43.248 3.43226 43.248 8.9824C43.248 12.8648 41.5695 15.4521 38.4167 16.7111L44.1402 24.509H38.2459H38.2443ZM38.1763 9.21975C38.1763 6.22384 36.5659 4.65672 33.0365 4.65672H28.411V13.5093H32.66C36.4298 13.5093 38.1779 11.7724 38.1779 9.21975H38.1763Z"
                                fill="currentColor" />
                            <path
                                d="M46.9844 0.367188H64.6325V4.72588H51.6796V10.5479H62.5776V14.6677H51.6796V20.1833H65.1814V24.5074H46.9844V0.367188Z"
                                fill="currentColor" />
                            <path d="M68.7031 0.367188H73.604V19.9789H86.318V24.5074H68.7047V0.367188H68.7031Z"
                                fill="currentColor" />
                            <path d="M89.2656 0.367188H94.1665V19.9789H106.881V24.5074H89.2672V0.367188H89.2656Z"
                                fill="currentColor" />
                            <path
                                d="M134.161 15.8613L132.345 11.5718L130.46 6.63469L128.61 11.5718L126.794 15.8613L125.148 19.9135L123.059 24.5096H117.781L128.883 0.265625H132.036L143.173 24.5096H137.896L135.771 19.9135L134.161 15.8613Z"
                                fill="currentColor" />
                            <path
                                d="M114.809 12.1691C114.803 8.37314 114.964 4.57873 115.314 0.864493C115.327 0.587851 114.966 0.265625 114.515 0.265625H110.549C110.097 0.265625 109.736 0.589423 109.75 0.864493C110.1 4.57716 110.261 8.37157 110.255 12.1691H114.809Z"
                                fill="currentColor" />
                            <path
                                d="M110.252 12.6094C110.242 16.4006 110.072 20.1919 109.75 23.9061C109.736 24.1891 110.097 24.5129 110.549 24.5129H114.515C114.968 24.5129 115.327 24.1891 115.314 23.9061C114.993 20.1919 114.821 16.4006 114.811 12.6094H110.253H110.252Z"
                                fill="currentColor" />
                            <path
                                d="M153.562 12.3798C153.562 4.62905 158.533 0 165.919 0C170.75 0 174.064 1.81704 176.377 4.62905L174.099 6.51525C172.373 4.25181 169.613 2.67369 165.919 2.67369C160.431 2.67369 156.567 6.30934 156.567 12.3782C156.567 18.447 160.433 22.3232 165.919 22.3232C169.613 22.3232 172.373 20.7796 174.099 18.5162L176.377 20.4024C174.064 23.2144 170.752 24.9984 165.919 24.9984C158.533 24.9984 153.562 20.1289 153.562 12.3782V12.3798Z"
                                fill="currentColor" />
                            <path
                                d="M179.07 12.5165C179.07 5.24678 184.074 0 191.909 0C199.226 0 204.783 4.76737 204.783 12.5165C204.783 19.7516 199.745 25 191.909 25C184.593 25 179.07 20.2672 179.07 12.5165ZM201.781 12.5165C201.781 6.82333 197.881 2.67369 191.909 2.67369C186.352 2.67369 182.073 6.44609 182.073 12.5165C182.073 18.1751 185.972 22.3247 191.909 22.3247C197.467 22.3247 201.781 18.5869 201.781 12.5165Z"
                                fill="currentColor" />
                            <path
                                d="M228.732 0.414062L217.826 24.8655H216.17L205.297 0.414062H208.541L214.858 14.9881L216.964 20.0981L219.172 15.0227L225.489 0.414062H228.733H228.732Z"
                                fill="currentColor" />
                            <path
                                d="M231.805 0.414062H248.338V3.08932H234.704V11.2518H246.197V13.9271H234.704V21.9167H249.062V24.592H231.805V0.414062Z"
                                fill="currentColor" />
                            <path
                                d="M133.522 13.7669C133.522 13.7669 131.842 14.3564 129.493 14.8373C127.152 15.334 124.145 15.7003 121.813 15.6405C117.145 15.5117 115.302 13.7323 115.305 13.7433C115.294 13.7323 117.444 12.2218 122.018 12.3428C124.306 12.3994 127.172 12.8537 129.471 13.1853L133.522 13.7653V13.7669Z"
                                fill="#C09C6B" />
                            <path
                                d="M121.78 5.60156C121.78 5.60156 120.513 8.34127 118.51 10.4617C116.506 12.5805 115.505 12.329 115.508 12.329C115.505 12.329 115.889 10.5623 117.9 8.44501C119.91 6.32932 121.782 5.60156 121.78 5.60156Z"
                                fill="#C09C6B" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1275_1948">
                                <rect width="249.065" height="25" fill="currentColor" />
                            </clipPath>
                        </defs>
                    </svg>

                </a>
                <div class="header_nav">
                    <a href="/" data-section-scroll-item="cam_hung" class="header_nav_item hover-un">
                        <div class="header_nav_item_txt">
                            Cảm hứng
                        </div>
                        <div class="line line-md line-hover">
                            <div class="line-inner line-inner-hover"></div>
                        </div>
                    </a>
                    <a href="/" data-section-scroll-item="dac_diem_noi_bat" class="header_nav_item hover-un">
                        <div class="header_nav_item_txt">
                            Đặc điểm nổi bật
                        </div>
                        <div class="line line-md line-hover">
                            <div class="line-inner line-inner-hover"></div>
                        </div>
                    </a>
                    <a href="/" data-section-scroll-item="vi_tri" class="header_nav_item hover-un">
                        <div class="header_nav_item_txt">
                            Vị trí & Tiện ích
                        </div>
                        <div class="line line-md line-hover">
                            <div class="line-inner line-inner-hover"></div>
                        </div>
                    </a>
                    <a href="/" data-section-scroll-item="mat_bang" class="header_nav_item hover-un">
                        <div class="header_nav_item_txt">
                            Mặt bằng
                        </div>
                        <div class="line line-md line-hover">
                            <div class="line-inner line-inner-hover"></div>
                        </div>
                    </a>
                    <a href="/" data-section-scroll-item="truyen_thong" class="header_nav_item hover-un">
                        <div class="header_nav_item_txt">
                            Truyền thông
                        </div>
                        <div class="line line-md line-hover">
                            <div class="line-inner line-inner-hover"></div>
                        </div>
                    </a>
                    <a href="/" data-section-scroll-item="lien_he" class="header_nav_item hover-un">
                        <div class="header_nav_item_txt">
                            Liên hệ
                        </div>
                        <div class="line line-md line-hover">
                            <div class="line-inner line-inner-hover"></div>
                        </div>
                    </a>
                </div>
                <div class="header_icon_lg img_full">
                    <!-- <div class="header_lang_wrap">
                        <div class="header_lang_item txt_25 txt_semi active">VI</div>
                        <div class="header_lang_space txt_25 txt_semi">/</div>
                        <div class="header_lang_item txt_25 txt_semi">EN</div>
                    </div> -->

                </div>
            </div>
        </div>
    </header>
    <div class="navbar-toggler-icon-wrap">
        <div class="navbar-toggler-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <section class="main_menu">
        <div class="main_menu_logo img_full">
            <svg width="250" height="25" viewBox="0 0 250 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1275_1948)">
                    <path d="M7.74518 4.89564H0V0.367188H20.4244V4.89564H12.6792V24.5074H7.74518V4.89564Z"
                        fill="currentColor" />
                    <path
                        d="M38.2443 24.509L33.413 17.6306H28.4094V24.509H23.5781V0.367188H33.4479C39.8215 0.367188 43.248 3.43226 43.248 8.9824C43.248 12.8648 41.5695 15.4521 38.4167 16.7111L44.1402 24.509H38.2459H38.2443ZM38.1763 9.21975C38.1763 6.22384 36.5659 4.65672 33.0365 4.65672H28.411V13.5093H32.66C36.4298 13.5093 38.1779 11.7724 38.1779 9.21975H38.1763Z"
                        fill="currentColor" />
                    <path
                        d="M46.9844 0.367188H64.6325V4.72588H51.6796V10.5479H62.5776V14.6677H51.6796V20.1833H65.1814V24.5074H46.9844V0.367188Z"
                        fill="currentColor" />
                    <path d="M68.7031 0.367188H73.604V19.9789H86.318V24.5074H68.7047V0.367188H68.7031Z"
                        fill="currentColor" />
                    <path d="M89.2656 0.367188H94.1665V19.9789H106.881V24.5074H89.2672V0.367188H89.2656Z"
                        fill="currentColor" />
                    <path
                        d="M134.161 15.8613L132.345 11.5718L130.46 6.63469L128.61 11.5718L126.794 15.8613L125.148 19.9135L123.059 24.5096H117.781L128.883 0.265625H132.036L143.173 24.5096H137.896L135.771 19.9135L134.161 15.8613Z"
                        fill="currentColor" />
                    <path
                        d="M114.809 12.1691C114.803 8.37314 114.964 4.57873 115.314 0.864493C115.327 0.587851 114.966 0.265625 114.515 0.265625H110.549C110.097 0.265625 109.736 0.589423 109.75 0.864493C110.1 4.57716 110.261 8.37157 110.255 12.1691H114.809Z"
                        fill="currentColor" />
                    <path
                        d="M110.252 12.6094C110.242 16.4006 110.072 20.1919 109.75 23.9061C109.736 24.1891 110.097 24.5129 110.549 24.5129H114.515C114.968 24.5129 115.327 24.1891 115.314 23.9061C114.993 20.1919 114.821 16.4006 114.811 12.6094H110.253H110.252Z"
                        fill="currentColor" />
                    <path
                        d="M153.562 12.3798C153.562 4.62905 158.533 0 165.919 0C170.75 0 174.064 1.81704 176.377 4.62905L174.099 6.51525C172.373 4.25181 169.613 2.67369 165.919 2.67369C160.431 2.67369 156.567 6.30934 156.567 12.3782C156.567 18.447 160.433 22.3232 165.919 22.3232C169.613 22.3232 172.373 20.7796 174.099 18.5162L176.377 20.4024C174.064 23.2144 170.752 24.9984 165.919 24.9984C158.533 24.9984 153.562 20.1289 153.562 12.3782V12.3798Z"
                        fill="currentColor" />
                    <path
                        d="M179.07 12.5165C179.07 5.24678 184.074 0 191.909 0C199.226 0 204.783 4.76737 204.783 12.5165C204.783 19.7516 199.745 25 191.909 25C184.593 25 179.07 20.2672 179.07 12.5165ZM201.781 12.5165C201.781 6.82333 197.881 2.67369 191.909 2.67369C186.352 2.67369 182.073 6.44609 182.073 12.5165C182.073 18.1751 185.972 22.3247 191.909 22.3247C197.467 22.3247 201.781 18.5869 201.781 12.5165Z"
                        fill="currentColor" />
                    <path
                        d="M228.732 0.414062L217.826 24.8655H216.17L205.297 0.414062H208.541L214.858 14.9881L216.964 20.0981L219.172 15.0227L225.489 0.414062H228.733H228.732Z"
                        fill="currentColor" />
                    <path
                        d="M231.805 0.414062H248.338V3.08932H234.704V11.2518H246.197V13.9271H234.704V21.9167H249.062V24.592H231.805V0.414062Z"
                        fill="currentColor" />
                    <path
                        d="M133.522 13.7669C133.522 13.7669 131.842 14.3564 129.493 14.8373C127.152 15.334 124.145 15.7003 121.813 15.6405C117.145 15.5117 115.302 13.7323 115.305 13.7433C115.294 13.7323 117.444 12.2218 122.018 12.3428C124.306 12.3994 127.172 12.8537 129.471 13.1853L133.522 13.7653V13.7669Z"
                        fill="#C09C6B" />
                    <path
                        d="M121.78 5.60156C121.78 5.60156 120.513 8.34127 118.51 10.4617C116.506 12.5805 115.505 12.329 115.508 12.329C115.505 12.329 115.889 10.5623 117.9 8.44501C119.91 6.32932 121.782 5.60156 121.78 5.60156Z"
                        fill="#C09C6B" />
                </g>
                <defs>
                    <clipPath id="clip0_1275_1948">
                        <rect width="249.065" height="25" fill="currentColor" />
                    </clipPath>
                </defs>
            </svg>
        </div>
        <div class="main_menu_nav">
            <a href="#" data-section-scroll-item="cam_hung" class="main_menu_item hover-un">
                <div class="main_menu_item_txt txt_32">Cảm hứng</div>
                <div class="line line-md line-hover">
                    <div class="line-inner line-inner-hover"></div>
                </div>
            </a>
            <a href="#" data-section-scroll-item="dac_diem_noi_bat" class="main_menu_item hover-un">
                <div class="main_menu_item_txt txt_32">Đặc điểm nổi bật</div>
                <div class="line line-md line-hover">
                    <div class="line-inner line-inner-hover"></div>
                </div>
            </a>
            <a href="#" data-section-scroll-item="vi_tri" class="main_menu_item hover-un">
                <div class="main_menu_item_txt txt_32">Vị trí & Tiện ích</div>
                <div class="line line-md line-hover">
                    <div class="line-inner line-inner-hover"></div>
                </div>
            </a>
            <a href="#" data-section-scroll-item="mat_bang" class="main_menu_item hover-un">
                <div class="main_menu_item_txt txt_32">Mặt bằng</div>
                <div class="line line-md line-hover">
                    <div class="line-inner line-inner-hover"></div>
                </div>
            </a>
            <a href="#" data-section-scroll-item="truyen_thong" class="main_menu_item hover-un">
                <div class="main_menu_item_txt txt_32">Truyền thông</div>
                <div class="line line-md line-hover">
                    <div class="line-inner line-inner-hover"></div>
                </div>
            </a>
            <a href="#" data-section-scroll-item="lien_he" class="main_menu_item hover-un">
                <div class="main_menu_item_txt txt_32">Liên hệ</div>
                <div class="line line-md line-hover">
                    <div class="line-inner line-inner-hover"></div>
                </div>
            </a>
        </div>
    </section>
    <section class="cove_model">
        <div class="cove_model_inner">
            <div class="cove_model_close">X</div>
            <div class="cove_model_list">
                <div class="cove_model_list_img img_fullfill">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/contact3.png" alt="">
                </div>
                <div class="cove_model_list_img img_fullfill">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/contact4.png" alt="">
                </div>
            </div>
            <div class="cove_model_form">
                <div class="cove_model_form_title txt_title txt_65">Liên hệ</div>
                <div class="cove_model_form_inner">
                    <?php echo do_shortcode('[contact-form-7 id="0acc8e8" title="Form Footer"]'); ?>

                </div>
                <div class="cove_model_form_tel">Hotline: 0902 000 895</div>
                <div class="cove_model_form_subtitle">KHU ĐÔ THỊ TÍCH HỢP MIZUKI PARK</div>
                <div class="cove_model_form_location">Đường Nguyễn Văn Linh, Xã Bình Hưng, TP. Hồ Chí Minh </div>
                <a href="https://maps.app.goo.gl/Uyza95g8HBkj3ZxWA?g_st=ipc" class="cove_model_form_ggmap txt_center">Google map</a>
            </div>
        </div>
    </section>


      <!-- /Header -->
      <div id="fullpage" class="fp-custom ">