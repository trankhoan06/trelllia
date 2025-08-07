<?php

/**
 * Template Name: ThankPage
 * Description:
 *
 * Tip:
 *
 * @package WordPress
 * @subpackage tbs
 * @since tbs 1.0
 */
get_header();
?>
<style>
.thankyou_main {
    position: relative;
    .kl_container{
        display: flex;
        position: relative;
        z-index: 10;
    }
}
.thankyou_main_overlay {
    position: absolute;
    left: 0;
    bottom: 0;
    background: linear-gradient(to top, #053522f7 0%, #053522ae 50%, #05352277 75%, #05352200 100%);
    height: 40%;
    z-index: 5;
    width: 100%;
}
.thankyou_main_bg  {
    position: absolute;
    inset: 0;
    z-index: 2;
}
.thankyou_main_title {
    margin-bottom: 2rem;
    text-transform: uppercase;
}
.thankyou_main_sub{
 margin-bottom: 1.2rem;
 color: white;
text-align: center;
}
.thankyou_main_btn{
    padding-block: 1.2rem;
    color: #fff;
    background-color: #C09C6B;
    border: none;
    font-weight: 600;
    line-height: 1.6;
    padding-inline: 5.5rem;
    border-radius: 1rem;
    text-transform: uppercase;
    font-size: 2rem;
    font-family: 'Montserrat';
    margin-bottom: 2.5rem;
    display: block;
    width: max-content;
    text-decoration: none;
    margin-top: 1.5rem;
}
.thankyou_main_content {
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-top: auto;
    margin-inline: auto;
    align-items: center;
    margin-bottom: 4rem;
}
.thankyou_main_title {
    text-align: center;
    color: white;
}
.cove_model.active, .header_nav, .navbar-toggler-icon-wrap{
    display: none !important;
}
 @media only screen and (max-width: 991px) {
    .thankyou_main{
        height: 100vh !important;
        padding-inline: 2rem;
    }
    .thankyou_main_btn {
        font-size: 1.6rem;
    }
 }
 .thankyou_main_overlay_top {
    position: absolute;
    inset: 0 0 50%;
    opacity: .3;
    background: linear-gradient(to bottom, #46301A 0%, #46301A00 100%);
    z-index: 5;
    pointer-events: none;
}
</style>
<section class="thankyou_main full_screen">
    <div class="thankyou_main_overlay_top"></div>
    <div class="thankyou_main_overlay"></div>
    <div class="thankyou_main_bg img_fullfill">
        <img src="<?php echo get_template_directory_uri(); ?>/img/banner1.webp" alt="">
    </div>
    <div class="kl_container">
        <div class="thankyou_main_content">
            <h1 class="heading h2 thankyou_main_title">Cảm ơn</h1>
            <div class="txt txt-20 thankyou_main_sub">Quý khách đã hoàn tất đăng ký thông tin.</div>
            <div class="txt txt-20 thankyou_main_sub">Nam Long sẽ liên hệ với Quý khách trong thời gian sớm nhất.</div>
            <a href="/" class="txt txt-18 btn-bg thankyou_main_btn">Về trang chủ</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>