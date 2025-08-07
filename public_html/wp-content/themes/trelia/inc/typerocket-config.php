<?php
//$int = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);

use TypeRocket\Elements\Fields\Repeater;

$editorSettings = [];

// Adding Matrix field to existing "page" post type 
add_action('edit_form_after_title', function ($post) use ($editorSettings) {
    echo '<div class="typerocket-container">';
    if ($post->post_type == 'page' && basename(get_page_template()) == "homepage.php") {
        remove_post_type_support('page', 'editor');

        $form = tr_form();
        echo beginBox("Banner Chính", true);
        echo $form->image('home_banner_image')->setLabel("Banner Image");
        $form->text('banner_title')->setLabel("Tiêu đề");
        echo $form->row(
            $form->text('year_active')->setLabel("Số năm hoạt động"),
            $form->text('year_label')->setLabel("Mô tả năm hoạt động")
        );
        echo $form->row(
            $form->text('field_active')->setLabel("Số lĩnh vực"),
            $form->text('field_label')->setLabel("Mô tả lĩnh vực")
        );
        echo $form->row(
            $form->text('partner_active')->setLabel("Số đối tác"),
            $form->text('partner_label')->setLabel("Mô tả đối tác")
        );
        echo $form->row(
            $form->text('year_active')->setLabel("Số nhân sự"),
            $form->text('year_label')->setLabel("Mô tả nhân sự")
        );
        echo endBox();
        //subdivision
        echo beginBox("Về chúng tôi", true);
        echo $form->image('home_about_img')->setLabel("Hình ảnh");
        echo $form->text('home_about_title')->setLabel("Tiêu đề");
        echo $form->editor('home_about_desc')->setLabel("Mô tả");
        echo $form->row(
            $form->text('home_about_btn_txt')->setLabel("Button text"),
            $form->text('home_about_btn_link')->setLabel("Button link")
        );
        echo endBox();
        echo beginBox("Thông điệp", true);
        echo $form->image('home_message_img')->setLabel("Background Image");
        echo $form->text('home_message_title')->setLabel("Tiêu đề");
        echo $form->editor('home_message_desc')->setLabel("Mô tả");
        echo $form->row(
            $form->text('home_message_btn_txt')->setLabel("Button text"),
            $form->text('home_message_btn_link')->setLabel("Button link")
        );
        echo $form->text('home_message_itme1')->setLabel("Mô tả Item 1");
        echo $form->text('home_message_itme2')->setLabel("Mô tả Item 2");
        echo $form->text('home_message_itme3')->setLabel("Mô tả Item 3");
        echo $form->text('home_message_itme4')->setLabel("Mô tả Item 4");
        echo endBox();

        echo beginBox("Hệ sinh thái", true);
        echo $form->text('home_ecosystem_title')->setLabel("Tiêu đề");
        echo $form->editor('home_ecosystem_desc')->setLabel("Mô tả");
        echo $form->row(
            $form->text('home_ecosystem_btn_txt')->setLabel("Button text"),
            $form->text('home_ecosystem_btn_link')->setLabel("Button link")
        );
        echo $form->repeater('ecosystem_items')->setLabel("Card Item")->setFields([
            $form->row(
                $form->image('img')->setLabel("Hình ảnh"),
                $form->text('title')->setLabel("Tiêu đề"),
            )
        ]);
        echo endBox();

        echo beginBox("Quan hệ cổ đông", true);
        echo $form->image('home_relation_img')->setLabel("Hình ảnh");
        echo $form->text('home_relation_title')->setLabel("Tiêu đề");
        echo $form->editor('home_relation_desc')->setLabel("Mô tả");
        echo $form->row(
            $form->text('home_relation_btn_txt')->setLabel("Button text"),
            $form->text('home_relation_btn_link')->setLabel("Button link")
        );
        echo endBox();
        echo beginBox("Tin tức sự kiện", true);
        echo $form->text('home_event_title')->setLabel("Tiêu đề");
        echo $form->text('home_event_btn_txt')->setLabel("Button Text");

        echo endBox();

        echo beginBox("Logo", true);
        echo $form->repeater('logo_items')->setLabel("Logo Item")->setFields([
            $form->image('img')->setLabel("Hình ảnh"),

        ]);
        echo endBox();
    } else if ($post->post_type == 'page' && basename(get_page_template()) == "aboutus.php") {
        remove_post_type_support('page', 'editor');


        $form = tr_form();
        echo beginBox("Banner Chính", true);
        echo $form->row(
            $form->image('banner_image')->setLabel("Banner"),
            $form->image('banner_image_mobile')->setLabel("Banner Mobile")
        );
        echo $form->row(
            $form->text('banner_title')->setLabel("Tiêu đề"),
            $form->textarea('banner_content')->setLabel("Nội dung")
        );
        echo endBox();

        echo beginBox("Tổng quan", true);
        echo $form->row(
            $form->image('oveview_bg')->setLabel("Hình ảnh")
        );
        echo $form->repeater('oveview_items')->setLabel("Nội dung")->setFields([
            $form->repeater('group')->setLabel("")->setFields([
                $form->row(
                    $form->text('title')->setLabel("Tiêu đề"),
                    $form->text('content')->setLabel("Mô tả"),
                    $form->checkbox('highlight')->setLabel("Nổi bật")
                )
            ])
        ]);
        echo endBox();
    } else if ($post->post_type == 'page' && basename(get_page_template()) == "gioi_thieu.php") {
        remove_post_type_support('page', 'editor');

        $form = tr_form();
        echo beginBox("Banner- Về chúng tôi", true);
        echo $form->image('about_banner_img')->setLabel("Hình banner");
        echo $form->text('about_banner_label')->setLabel("Tiêu đề phụ");
        echo $form->text('about_banner_title')->setLabel("Tiêu đề");
        echo $form->editor('about_banner_description')->setLabel("Nội dung");
        echo endBox();
        echo beginBox("Hệ sinh thái- Về chúng tôi", true);
        echo $form->text('about_ecosystem_title')->setLabel("Tiêu đề");
        echo $form->editor('about_ecosystem_desc')->setLabel("Nội dung");
        echo $form->image('about_ecosystem_img_left')->setLabel("Hình ảnh bên trái");
        echo $form->image('about_ecosystem_img_right')->setLabel("Hình ảnh bên phải");
        echo endBox();
        echo beginBox("Tầm nhìn- Về chúng tôi", true);
        echo $form->text('about_vision_title')->setLabel("Tiêu đề");
        echo $form->text('about_vision_sub')->setLabel("Mô tả ngắn");
        echo $form->editor('about_vision_desc')->setLabel("Nội dung");
        echo endBox();
        echo beginBox("Sứ mệnh- Về chúng tôi", true);
        echo $form->text('about_mission_title')->setLabel("Tiêu đề");
        echo $form->text('about_mission_sub')->setLabel("Mô tả ngắn");
        echo $form->text('about_mission_sub2')->setLabel("Mô tả dài");
        echo $form->editor('about_mission_desc')->setLabel("nội dung");
        echo endBox();
        echo beginBox("Giá trị cốt lõi- Về chúng tôi", true);
        echo $form->text('about_value_title')->setLabel("Tiêu đề");
        echo $form->text('about_value_sub')->setLabel("Mô tả ngắn");
        echo $form->repeater('about_value_items')->setLabel("Card Item")->setFields([
            $form->row(
                $form->text('title')->setLabel("Tiêu đề"),
                $form->editor('content')->setLabel("Mô tả"),
            ),
            $form->image('icon')->setLabel("Icon")
        ]);
        echo endBox();
        echo beginBox("Lời nói chủ tịch- Về chúng tôi", true);
        echo $form->editor('about_talk_title')->setLabel("Tiêu đề");
        echo $form->text('about_talk_sub')->setLabel("Tên người nói");
        echo endBox();
        echo beginBox("Banner- Đội ngũ lãnh đạo", true);
        echo $form->image('about_banner2_img')->setLabel("Hình banner");
        echo $form->text('about_banner2_label')->setLabel("Tiêu đề phụ");
        echo $form->text('about_banner2_title')->setLabel("Tiêu đề");
        echo $form->editor('about_banner2_description')->setLabel("Nội dung");
        echo endBox();
        echo beginBox("Trích lời nói- Đội ngũ lãnh đạo", true);
        echo $form->editor('about_talk2_title')->setLabel("Lời nói");
        echo $form->text('about_talk2_name')->setLabel("Tên người nói");
        echo $form->text('about_talk2_position')->setLabel("Chức vụ");
        echo $form->image('about_talk2_img')->setLabel("Hình đại diện");
        echo endBox();
        echo beginBox("Thông tin chủ tịch- Đội ngũ lãnh đạo", true);
        echo $form->editor('about_team_title')->setLabel("Giới thiệu");
        echo $form->image('about_team_img')->setLabel("Hình đại diện");
        echo endBox();
        echo beginBox("Thông tin phó chủ tịch tập đoàn- Đội ngũ lãnh đạo", true);
        echo $form->editor('about_team2_title')->setLabel("Giới thiệu");
        echo $form->image('about_team2_img')->setLabel("Hình đại diện");
        echo endBox();
        echo beginBox("Thông tin tổng giám đốc tập đoàn- Đội ngũ lãnh đạo", true);
        echo $form->editor('about_team3_title')->setLabel("Giới thiệu");
        echo $form->image('about_team3_img')->setLabel("Hình đại diện");
        echo endBox();
        echo beginBox("Thông tin phó giám đốc tập đoàn- Đội ngũ lãnh đạo", true);
        echo $form->text('about_team4_title')->setLabel("Tiêu đề");
        echo $form->repeater('about_team4_items')->setLabel("Phó giảm đốc")->setFields([
            $form->editor('title')->setLabel("Giới thiệu"),
            $form->text('name')->setLabel("Tên "),
            $form->text('position')->setLabel("Chức vụ"),
            $form->image('img')->setLabel("Hình đại diện")
        ]);
        echo endBox();
        echo beginBox("Chủ tịch - Tổng Giám đốc Các Công ty thành viên- Đội ngũ lãnh đạo", true);
        echo $form->text('about_team5_title')->setLabel("Tiêu đề");
        echo $form->repeater('about_team5_items')->setLabel("Phó giảm đốc")->setFields([
            $form->editor('title')->setLabel("Giới thiệu"),
            $form->text('name')->setLabel("Tên "),
            $form->text('position')->setLabel("Chức vụ"),
            $form->image('img')->setLabel("Hình đại diện")
        ]);
        echo endBox();
        echo beginBox("Banner- Hệ sinh thái", true);
        echo $form->image('about_banner3_img')->setLabel("Hình banner");
        echo $form->text('about_banner3_label')->setLabel("Tiêu đề phụ");
        echo $form->text('about_banner3_title')->setLabel("Tiêu đề");
        echo $form->editor('about_banner3_description')->setLabel("Nội dung");
        echo endBox();
        echo beginBox("H Đông Dương- Hệ sinh thái", true);
        echo $form->text('about_hdongduong_title')->setLabel("Tiêu đề");
        echo $form->editor('about_hdongduong_description')->setLabel("Nội dung");
        echo $form->repeater('about_hdongduong_items')->setLabel("Card Item")->setFields([
            $form->row(
                $form->image('img')->setLabel("Hình ảnh"),
                $form->text('title')->setLabel("Tiêu đề"),
            )
        ]);
        echo endBox();
        echo beginBox("Lĩnh vực- Hệ sinh thái", true);
        echo $form->repeater('about_field_items')->setLabel("Card Item")->setFields([
            $form->row(
                $form->column(
                    $form->text('title')->setLabel("Tiêu đề"),
                    $form->editor('content')->setLabel("Mô tả"),
                    $form->editor('team1')->setLabel("Thành viên 1"),
                    $form->editor('team2')->setLabel("Thành viên 2"),
                    $form->editor('team3')->setLabel("Thành viên 3"),
                ),
                $form->image('img')->setLabel("Hình ảnh"),
            )
        ]);
        echo endBox();
    } else if ($post->post_type == 'page' && basename(get_page_template()) == "tin_tuc.php") {
        remove_post_type_support('page', 'editor');

        $form = tr_form();
        echo beginBox("Banner", true);
        echo $form->image('banner_img')->setLabel("Hình ảnh");
        echo endBox();
    } else if ($post->post_type == 'page' && basename(get_page_template()) == "du_an.php") {
        remove_post_type_support('page', 'editor');

        $form = tr_form();
        echo beginBox("Banner", true);
        echo $form->text('banner_label')->setLabel("Tiêu đề phụ");
        echo $form->editor('banner_desc')->setLabel("Nội dung");
        echo $form->text('banner_btn')->setLabel("Chữ button");
        echo $form->repeater('banner_items')->setLabel("Card Items")->setFields([
            $form->image('img')->setLabel("Hình ảnh"),
            $form->text('title')->setLabel("Tiêu đề"),
        ]);
        echo endBox();
        echo beginBox("Đầu tư đa ngành", true);
        echo $form->image('invest_banner_img')->setLabel("Hình ảnh");
        echo $form->text('invest_banner_label')->setLabel("Tiêu đề phụ");
        echo $form->text('invest_banner_title')->setLabel("Tiêu đề");
        echo $form->editor('invest_banner_desc')->setLabel("Nội dung");
        echo endBox();
        echo beginBox("Dự án tiêu biểu", true);
        echo $form->text('project_show_title')->setLabel("Tiêu đề");
        echo $form->repeater('project_show_items')->setLabel("Card Items")->setFields([
            $form->image('img')->setLabel("Hình ảnh"),
            $form->editor('title')->setLabel("Tiêu đề"),
        ]);
        echo endBox();
    } else if ($post->post_type == 'page' && basename(get_page_template()) == "van_hoa_tap_doan.php") {
        remove_post_type_support('page', 'editor');

        $form = tr_form();
        echo beginBox("Banner", true);
        echo $form->file('banner_img')->setLabel("Video banner");
        echo $form->text('banner_label')->setLabel("Tiêu đề phụ");
        echo $form->text('banner_title1')->setLabel("Tiêu đề - Văn hóa doanh nghiệp");
        echo $form->text('banner_title2')->setLabel("Tiêu đề - Trách nhiệm xã hội");
        echo $form->text('banner_title3')->setLabel("Tiêu đề - Đối tác & khách hàng");
        echo endBox();
        echo beginBox("Highway - Văn hóa doanh nghiệp", true);
        echo $form->text('highway_title')->setLabel("Tiêu đề");
        echo $form->editor('highway_desc')->setLabel("Nội dung");
        echo endBox();
        echo beginBox("Cards - Văn hóa doanh nghiệp", true);
        echo $form->repeater('card_items')->setLabel("Card Items")->setFields([
            $form->image('img')->setLabel("Hình ảnh"),
            $form->text('letter')->setLabel("Chữ cái tiêu đề"),
            $form->text('label')->setLabel("Tiêu đề phụ"),
            $form->text('title')->setLabel("Tiêu đề"),
            $form->editor('sub')->setLabel("Nội dung"),
        ]);
        echo endBox();
        echo beginBox("Mục đích - Trách nhiệm xã hội", true);
        echo $form->text('purpose_title')->setLabel("Tiêu đề");
        echo $form->editor('purpose_sub')->setLabel("Nội dung");
        echo endBox();
        echo beginBox("Phát triển - Trách nhiệm xã hội", true);
        echo $form->text('develop_title_big')->setLabel("Tiêu đề lớn");
        echo $form->text('develop_title_small')->setLabel("Tiêu đề");
        echo $form->editor('develop_title_sub')->setLabel("Tiêu đề phụ");
        echo $form->repeater('develop_item')->setLabel("Cards Item")->setFields([
            $form->image('img')->setLabel("Icon"),
            $form->text('title')->setLabel("Tiêu đề"),
            $form->text('sub')->setLabel("Nội dung"),
        ]);
        echo endBox();
        echo beginBox("Trách nhiệm - Trách nhiệm xã hội", true);
        echo $form->text('responsibility_title')->setLabel("Tiêu đề ");
        echo $form->text('responsibility_sub')->setLabel("Tiêu đề phụ");
        echo $form->repeater('responsibility_items')->setLabel("Cards Item")->setFields([
            $form->image('img')->setLabel("Icon"),
            $form->image('img_big')->setLabel("Hình ảnh"),
            $form->text('sub')->setLabel("Nội dung"),
        ]);
        echo endBox();
        echo beginBox("Định hướng - Trách nhiệm xã hội", true);
        echo $form->text('orientation_title')->setLabel("Tiêu đề ");
        echo endBox();
        echo beginBox("H Đông Dương - Đối tác & Khách hàng", true);
        echo $form->text('dong_duong_title')->setLabel("Tiêu đề ");
        echo $form->editor('dong_duong_sub')->setLabel("Nội dung ");
        echo endBox();
        echo beginBox("Đối tác - Đối tác & Khách hàng", true);
        echo $form->text('partner_title')->setLabel("Tiêu đề ");
        echo $form->repeater('partner_items')->setLabel("Cards Item")->setFields([
            $form->image('img')->setLabel("Hình ảnh"),
        ]);
        echo endBox();
        echo beginBox("Đồng hành - Đối tác & Khách hàng", true);
        echo $form->text('companion_title')->setLabel("Tiêu đề ");
        echo endBox();
        echo beginBox("Khách hàng - Đối tác & Khách hàng", true);
        echo $form->text('customer_title')->setLabel("Tiêu đề ");
        echo $form->repeater('customer_items')->setLabel("Cards Item")->setFields([
            $form->image('img')->setLabel("Hình ảnh"),
        ]);
        echo endBox();
    } else if ($post->post_type == 'page' && basename(get_page_template()) == "tuyen_dung.php") {
        remove_post_type_support('page', 'editor');

        $form = tr_form();
        echo beginBox("Banner", true);
        echo $form->image('recruit_banner_img')->setLabel("Hình banner");
        echo $form->text('recruit_banner_label')->setLabel("Tiêu đề phụ");
        echo $form->text('recruit_banner_title')->setLabel("Tiêu đề");
        echo $form->editor('recruit_banner_description')->setLabel("Nội dung");
        echo endBox();
        echo beginBox("Quyền lợi", true);
        echo $form->image('recruit_benefit_img')->setLabel("Hình ảnh");
        echo $form->text('recruit_benefit_title')->setLabel("Tiêu đề");
        echo $form->editor('recruit_benefit_desc')->setLabel("Nội dung");
        echo endBox();
        echo beginBox("Cơ hội nghề nghiệp", true);
        echo $form->text('recruit_job_title')->setLabel("Tiêu đề");
        echo $form->repeater('recruit_job_items')->setLabel("Card Items")->setFields([
            $form->text('title')->setLabel("Tiêu đề"),
            $form->text('location')->setLabel("Địa điểm"),
            $form->text('date')->setLabel("Ngày hết hạn"),
            $form->editor('desc')->setLabel("Mô tả"),
        ]);
        echo endBox();
    } else if ($post->post_type == 'page' && basename(get_page_template()) == "lien_he.php") {
        remove_post_type_support('page', 'editor');

        $form = tr_form();
        echo beginBox("Banner", true);
        echo $form->image('contact_banner_img')->setLabel("Hình banner");
        echo $form->text('contact_banner_label')->setLabel("Tiêu đề phụ");
        echo $form->text('contact_banner_title')->setLabel("Tiêu đề");
        echo endBox();
    } else if ($post->post_type == 'page' && basename(get_page_template()) == "quan_he_co_dong.php") {
        remove_post_type_support('page', 'editor');
        $form = tr_form();
        echo beginBox("Banner", true);
        echo $form->image('banner_img')->setLabel("Hình ảnh");
        echo $form->text('banner_label')->setLabel("Tiêu đề phụ");
        echo $form->text('banner_title')->setLabel("Tiêu đề ");
        echo endBox();
        echo beginBox("Hồ sơ năng lực", true);
        echo $form->text('file_desc')->setLabel("Mô tả ngắn");
        echo $form->text('file_btn')->setLabel("Button Text");
        echo $form->text('file_btn_link')->setLabel("Button Link");
        echo $form->text('file_title')->setLabel("Tiêu đề");
        echo $form->repeater('timeline_years')->setLabel("Dòng thời gian theo năm")->setFields([
            $form->text('year')->setLabel("Năm")->setHelp("VD: 2022"),
            $form->repeater('months')->setLabel("Danh sách theo tháng")->setFields([
                $form->text('month')->setLabel("Tháng")->setHelp("VD: 6"),
                $form->repeater('documents')->setLabel("Danh sách tài liệu")->setFields([
                    $form->editor('description')->setLabel("Mô tả ngắn"),
                    $form->date('date')->setLabel("Ngày cập nhật"),
                    $form->file('file')->setLabel("Tệp đính kèm"),
                ])

            ])

        ]);

        echo endBox();
    } else if ($post->post_type == 'project') {
        remove_post_type_support('post', 'editor');
        $form = tr_form();
        echo beginBox("Thông tin Chi tiết", true);
        echo $form->text('project_position')->setLabel("Vị trí");
        echo $form->text('project_dien_tich')->setLabel("Tổng diện tích");
        echo $form->text('project_type')->setLabel("Loại dự án");
        echo $form->text('project_quy_mo')->setLabel("Quy mô");
        echo $form->repeater('thumb_imgs')->setLabel("Hình ảnh tham khảo")->setFields([
            $form->image('img')->setLabel("Hình ảnh")
        ]);
        echo endBox();
    }

    echo '</div>';
});

add_action('edit_form_after_editor', function ($post) use ($editorSettings) {
    echo '<div class="typerocket-container">';
    if ($post->post_type == 'page' && basename(get_page_template()) == "pdppolicy.php") {
    }
    echo '</div>';
});



/*
$floor = tr_post_type('floor','Tầng')->setSlug('tang')->setIcon('Book');
$args = $floor->getArguments();
$args = array_merge( $args, array(
  'supports'  =>  array('title','thumbnail'),
  'publicly_queryable'  => false
  )
);

$floor->setArguments( $args );
$floorDetails = tr_meta_box('floor_detail')->setLabel("Chi tiết");
$floorDetails->setCallback(function(){
    $form = tr_form();

    echo $form->row(
        $form->text('subdivision_title')->setLabel("Tiêu đề"),
        $form->image('subdivision_bg')->setLabel("Hình nền")
    );
    echo $form->repeater('prod_items')->setLabel("Sản phẩm")->setFields([
            $form->row(
                $form->text('title')->setLabel("Tên sản phẩm"),
                $form->search('prod')->setPostType('prod')->setLabel("Chọn Sản phẩm"),
                $form->text('position')->setLabel("Vị trí trên hình (Top,Left)")
            ),
            $form->textarea('coordinates')->setLabel("Tọa độ")
    ]);
    echo $form->repeater('legend')->setLabel("Ghi chú")->setFields([
        $form->row(
            $form->text('title')->setLabel("Tên sản phẩm"),
            $form->color('color')->setLabel("Mã màu")
        )
    ]);



});
$floor->apply($floorDetails);

$floorcate = tr_taxonomy('floorcate', 'Tháp');
$floorcate->setSlug('thap');
$floorcate->setHierarchical();

$floorcate->setMainForm(function() {
    $form = tr_form();
    echo $form->image('map')->setLabel("Hình vị trí");
});


$args = $floorcate->getArguments();
$args = array_merge( $args, array( 'show_admin_column' => true ) );
$floorcate->setArguments( $args );
$floor->apply($floorcate);



$prod = tr_post_type('prod','Sản phẩm')->setSlug('san-pham')->setIcon('Book');
$args = $prod->getArguments();
$args = array_merge( $args, array(
  'supports'  =>  array('title','thumbnail'),
  'publicly_queryable'  => false
  )
);

$prod->setArguments( $args );
$prodDetails = tr_meta_box('prod_detail')->setLabel("Chi tiết");
$prodDetails->setCallback(function(){
    $form = tr_form();
    echo $form->row(
        $form->text('bed')->setLabel("Phòng ngủ"),
        $form->text('bath')->setLabel("Phòng tắm"),
        $form->text('acreage_1')->setLabel("Diện tích tim tưởng"),
        $form->text('acreage_2')->setLabel("Diện tích thông thủy")

    );
    echo $form->row(
        $form->text('link_360')->setLabel("Link 360")
        //$form->image('map')->setLabel("Hình vị trí"),

    );

    echo $form->repeater('image_items')->setLabel("Hình ảnh mặt bằng")->setFields([
        $form->row(
            $form->text('title')->setLabel("Tiêu đề"),
            $form->image('image')->setLabel("Hình")
        )
    ]);

    echo $form->repeater('other_items')->setLabel("Hình ảnh Phối cảnh")->setFields([
        $form->row(
            $form->text('title')->setLabel("Tiêu đề"),
            $form->image('image')->setLabel("Hình")
        )
    ]);

});
$prod->apply($prodDetails);

*/



$register = tr_post_type('register', 'Liên hệ')->setSlug('dang-ky-slug')->setIcon('Book');
$args = $register->getArguments();
$args = array_merge(
    $args,
    array(
        'supports'  =>  array('title'),
        'publicly_queryable'  => false
    )
);

$register->setArguments($args);
$registerDetails = tr_meta_box('register_detail')->setLabel("Chi tiết");
$registerDetails->setCallback(function () {
    $form = tr_form();
    echo $form->text('mobile')->setLabel("Số điện thoại");
    echo $form->text('email')->setLabel("Email");
    //echo $form->text('address')->setLabel("Địa chỉ");
    echo $form->text('interest')->setLabel("Quan tâm");
    echo $form->text('device')->setLabel("Thiết Bị");
    echo $form->text('source')->setLabel("Nguồn");
    echo $form->text('user_agent')->setLabel("User Agent");
    echo $form->textarea('content')->setLabel("Nội dung");
});
$register->apply($registerDetails);

$register->addColumn('mobile', true, 'Số điện thoại', function ($value) {
    echo $value;
}, 'text');
$register->addColumn('email', true, 'Email', function ($value) {
    echo $value;
}, 'text');
/*$register->addColumn('address', true, 'Địa chỉ', function($value) {
    echo $value;
}, 'text');
*/
$register->addColumn('interest', true, 'Sản phẩm quan tâm', function ($value) {
    echo $value;
}, 'text');

$register->addColumn('content', true, 'Nội dung', function ($value) {
    echo $value;
}, 'text');
$register->addColumn('device', true, 'Thiết bị', function ($value) {
    echo $value;
}, 'text');
$register->addColumn('source', true, 'Nguồn', function ($value) {
    echo $value;
}, 'text');
