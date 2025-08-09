<?php
//$int = (int) filter_var($str, FILTER_SANITIZE_NUMBER_INT);
$editorSettings = [];

// Adding Matrix field to existing "page" post type 
add_action('edit_form_after_title', function($post) use($editorSettings) {
    echo '<div class="typerocket-container">';    
 if($post->post_type == 'page' && basename(get_page_template())=="tin-tuc.php") {
        remove_post_type_support( 'page', 'editor' );

        $form = tr_form();
        echo beginBox("Banner Chính",true);
        echo $form->image('news_banner_img')->setLabel("HÌnh ảnh banner");
        echo $form->text('news_banner_txt')->setLabel("Tiêu đề");
        echo endBox();


    }


    else if($post->post_type == 'page' && basename(get_page_template())=="thanks.php") {
        remove_post_type_support( 'page', 'editor' );

        $form = tr_form();
        echo beginBox("Banner Chính",true);
        echo $form->image('banner')->setLabel("Hình banner");
        echo $form->text('banner_title')->setLabel("Tiêu đề");
        echo $form->editor('banner_description')->setLabel("Nội dung");
        echo endBox();



    }
    else if($post->post_type == 'page' && basename(get_page_template())=="linh-vuc-cong-nghiep.php"){
        remove_post_type_support( 'page', 'editor' );


        $form = tr_form();
        echo beginBox("Banner Chính",true);
        echo $form->row(
            $form->image('banner_image')->setLabel("Banner"),
        );
        echo $form->row(
            $form->text('banner_title')->setLabel("Tiêu đề"),
        );
        echo endBox();

         echo beginBox("Giới thiệu",true);
        echo $form->row(
            $form->image('intro_logo')->setLabel("Ảnh Logo"),
        );
        echo $form->row(
            $form->text('intro_des')->setLabel("Mô tả"),
        );
        echo endBox();

        echo beginBox("Nhà máy",true);
        echo $form->repeater('factory_items')->setLabel("Nhà máy")->setFields([
            $form->row(
                $form->image('factory_img')->setLabel("Hình ảnh nhà máy"),
                $form->text('factory_title')->setLabel("Tiêu đề"),
            )
        ]);
        
        echo endBox();

         echo beginBox("Sản phẩm",true);
           echo $form->row(
                $form->image('product_img')->setLabel("Hình ảnh sản phẩm"),
                $form->text('product_title')->setLabel("tên sản phẩm"),
                     $form->repeater('product_text_items')->setLabel("Text Item")->setFields([
                    $form->row(
                        $form->text('product_subtitle')->setLabel("Tiêu đề"),
                        $form->editor('product_des')->setLabel("Mô tả"),
                        
                    )
                ])
            );
             echo $form->row(
                $form->image('product2_img')->setLabel("Hình ảnh sản phẩm"),
                $form->text('product2_title')->setLabel("tên sản phẩm"),
                     $form->repeater('product2_text_items')->setLabel("Text Item")->setFields([
                    $form->row(
                        $form->text('product2_subtitle')->setLabel("Tiêu đề"),
                        $form->editor('product2_des')->setLabel("Mô tả"),
                        
                    )
                ])
            );
        echo endBox();

        echo beginBox("Số liệu",true);
                 echo $form->repeater('figure_items')->setLabel("Số liệu")->setFields([
                    $form->row(
                        $form->text('figure_title')->setLabel("Tiêu đề"),
                        $form->text('figure_des')->setLabel("Mô tả"),
                        
                    )
                ]);
        echo endBox();

        echo beginBox("Địa điểm văn phòng",true);
                    echo $form->row(
                        $form->text('location1_des_top')->setLabel("Top"),
                        $form->text('location1_des')->setLabel("Mô tả"),
                        $form->text('location1_des_inter')->setLabel("Quốc Gia"),
                        
                    );
                    echo $form->row(
                        $form->text('location2_subtitle')->setLabel("Xuất khẩu đến"),
                        $form->editor('location2_des')->setLabel("hơn 70 quốc gia"),
                        
                    );
                    echo $form->repeater('location_item')->setLabel("Số liệu")->setFields([
                        $form->row(
                            $form->text('location_item1_percent')->setLabel("Phần trăm"),
                        ),
                        $form->row(
                            $form->text('location_item1_title')->setLabel("Tên thị trường"),
                        ),
                        $form->row(
                            $form->editor('location_item1_des')->setLabel("Mô tả"),
                        ),
                        
                    ]);
                echo $form->row(
                        $form->image('location_map_image')->setLabel("ảnh bản đồ"),
                        $form->text('location_map_title')->setLabel("Tiêu đề"),
                        $form->image('location_map_icon')->setLabel("Icon Location"),
                         $form->repeater('location_map_item')->setLabel("Quốc gia")->setFields([
                            $form->row(
                                $form->text('location_map_item_name')->setLabel("Tên quốc gia"),                                
                            )
                        ])
                        
                    );
        echo endBox();


    }
     else if($post->post_type == 'page' && basename(get_page_template())=="linh-vuc-bat-dong-san.php"){
        remove_post_type_support( 'page', 'editor' );


        $form = tr_form();
        echo beginBox("Banner Chính",true);
        echo $form->row(
            $form->image('banner_image')->setLabel("Banner image desktop"),
            $form->image('banner_image_mobile')->setLabel("Banner image mobile"),
        );
        echo $form->row(
            $form->text('banner_title')->setLabel("Tiêu đề"),
        );
        echo endBox();

        echo beginBox("Giới thiệu",true);
        echo $form->row(
            $form->image('intro_logo')->setLabel("Ảnh Logo desktop"),
            $form->image('intro_logo_mobile')->setLabel("Ảnh Logo mobile"),
        );
        echo $form->row(
            $form->editor('intro_des')->setLabel("Mô tả"),
        );
        echo endBox();

        echo beginBox("Bất động sản công nghiệp",true);
        echo $form->row(
            $form->image('industrial_content')->setLabel("Ảnh nội dung"),
        );
        echo $form->row(
            $form->editor('industrial_title')->setLabel("Tiêu đề"),
            $form->repeater('industrial_des_item')->setLabel("Mô tả")->setFields([
                $form->row(
                        $form->editor('industrial_des_item_des')->setLabel("Mô tả"),                                
                    )
            ])
        );
        echo endBox();

        echo beginBox("Bất động sản dân dụng",true);
        echo $form->row(
            $form->editor('residential_title')->setLabel("Tiêu đề"),
        );
        echo $form->row(
            $form->editor('residential_item_des')->setLabel("Mô tả"),                               
        );
        echo $form->row(
            $form->text('residential_subtitle')->setLabel("Dự án tiêu biểu"),                                
        );
        echo $form->row(
            $form->repeater('residential_des_item')->setLabel("Mô tả")->setFields([
                $form->row(
                    $form->text('residential_des_item_des')->setLabel("Tên dự án"),                                
                )
            ])
        );
        echo $form->repeater('residential_image_item')->setLabel("Ảnh nội dung")->setFields([
            $form->image('residential_image_item_content')->setLabel("Ảnh nội dung"),
        ]);
        echo endBox();

        echo beginBox("Thương mại Dịch vụ & Văn phòng cho thuê",true);
        echo $form->row(
            $form->image('economic_image')->setLabel("Ảnh nổi dung"),
        );
        echo $form->row(
            $form->editor('economic_title')->setLabel("Tiêu đề"),
            $form->editor('economic_des')->setLabel("Mô tả"),                                
        );
        echo endBox();

        echo beginBox("Nghỉ dưỡng & Khách sạn",true);
        echo $form->row(
            $form->editor('hotel_title')->setLabel("Tiêu đề"),
            $form->repeater('hotel_des')->setLabel("Mô tả")->setFields([
                $form->row(
                        $form->text('hotel_des_subtitle')->setLabel("tiêu đề phụ"),           
                        $form->editor('hotel_des_item_des')->setLabel("Mô tả"),                                
                )
            ])
        );
        echo $form->repeater('hotel_image_item')->setLabel("Ảnh nội dung")->setFields([
            $form->image('hotel_image_item_content')->setLabel("Ảnh nội dung"),
        ]);
        echo endBox();

        echo beginBox("TBS Logistics",true);
        echo $form->row(
            $form->image('logistics_logo')->setLabel("Ảnh logo"),
            $form->editor('logistics_des')->setLabel("Mô tả")
        );
        echo $form->row(
            $form->repeater('logistics_item')->setLabel("item")->setFields([
                $form->row(
                        $form->text('logistics_item_title')->setLabel("Tiêu đề"),                 
                        $form->editor('logistics_item_des')->setLabel("Mô tả")                
                )
            ])
        );
        echo $form->image('logistics_image')->setLabel("Ảnh nổi dung");
        echo $form->row(
            $form->repeater('logistics_experiance_item')->setLabel("Kinh nghiệm")->setFields([
                $form->row(
                        $form->text('logistics_experiance_item_title')->setLabel("Tiêu đề"),                 
                        $form->editor('logistics_experiance_item_des')->setLabel("Mô tả")                
                )
            ])
        );
        echo endBox();

     }
     else if($post->post_type == 'page' && basename(get_page_template())=="phat-trien.php"){
         remove_post_type_support( 'page', 'editor' );


        $form = tr_form();
        echo beginBox("Banner Chính",true);
        echo $form->row(
            $form->image('banner_image')->setLabel("Banner"),
        );
        echo $form->row(
            $form->text('banner_title')->setLabel("Tiêu đề"),
        );
        echo endBox();

        echo beginBox("Tầm nhìn",true);
        echo $form->row(
            $form->text('sight_title')->setLabel("Tiêu đề"),
            $form->text('sight_des')->setLabel("Mô tả"),
            $form->image('sight_image')->setLabel("Ảnh nội dung"),
        );
        echo endBox();

        echo beginBox("Sức khỏe & An toàn lao động",true);
        echo $form->editor('safe_title1')->setLabel("Tiêu đề");
        echo $form->editor('safe_title2')->setLabel("Tiêu đề");
        echo $form->row(
            $form->repeater('safe_item')->setLabel("Mô tả")->setFields([
                $form->row(
                        $form->editor('safe_item_des')->setLabel("Mô tả"),                                
                    )
            ])
        );
        echo $form->image('safe_image')->setLabel("Ảnh nội dung");
        echo endBox();

        echo beginBox("Vì môi trường",true);
        echo $form->editor('environment_title')->setLabel("Tiêu đề");
        echo $form->image('environment_image')->setLabel("Ảnh nội dung");
        echo $form->row(
            $form->repeater('environment_item')->setLabel("Mô tả")->setFields([
                $form->row(
                        $form->editor('environment_item_des')->setLabel("Mô tả"),                                
                    )
            ])
        );
         echo $form->image('environment_image_logo')->setLabel("Ảnh logo");

        echo endBox();

        echo beginBox("Dự án xanh",true);
        echo $form->repeater('project_item')->setLabel("Dự án")->setFields([
            $form->image('project_item_image')->setLabel("Ảnh nội dung"),
            $form->editor('project_item_title')->setLabel("Tiêu đề"),
            $form->row(
                $form->editor('project_item_des')->setLabel("Mô tả"),                                
            )
        ]);

        echo endBox();

        echo beginBox("Trách nhiệm xã hội",true);
        echo $form->editor('response_title')->setLabel("Tiêu đề");
        echo $form->row(
                $form->repeater('response_item_des')->setLabel("Mô tả")->setFields([
                    $form->row(
                        $form->editor('response_item_des_des')->setLabel("Mô tả"),                                
                    )
                ])
                    );
        echo $form->image('response_image')->setLabel("Ảnh nội dung");
        echo $form->repeater('response_item')->setLabel("Trách nhiệm")->setFields([
            $form->text('response_item_title')->setLabel("Tiêu đề"),
            $form->editor('response_item_des')->setLabel("Mô tả"),                                
        ]);

        echo endBox();
     }
     else if($post->post_type == 'page' && basename(get_page_template())=="tuyen-dung.php"){
         remove_post_type_support( 'page', 'editor' );

        $form = tr_form();
        echo beginBox("Banner Chính",true);
        echo $form->image('banner_image')->setLabel("Hình banner");
        echo $form->image('banner_image_mobile')->setLabel("Hình banner");
        echo $form->text('banner_title')->setLabel("Tiêu đề");
        echo endBox();

        echo beginBox("Văn hóa doanh nghiệp",true);
        echo $form->text('culture_title')->setLabel("Tiêu đề");
        echo $form->editor('culture_des')->setLabel("Nội dung");
        echo $form->image('culture_image')->setLabel("Hình ảnh");
        echo endBox();

        echo beginBox("Hoạt động của TSB Group",true);
        echo $form->text('active_title')->setLabel("Tiêu đề");
         echo $form->row(
                $form->repeater('active_item')->setLabel("Các hoạt động")->setFields([
                     $form->image('active_item_image')->setLabel("Hình ảnh"),
                     $form->text('active_item_caption')->setLabel("Tiêu đề"),
                ])
            );
        echo endBox();

        echo beginBox("lý do chọn TSB Group",true);
        echo $form->text('reason_title')->setLabel("Tiêu đề");
         echo $form->row(
                $form->repeater('reason_item')->setLabel("Các lý do")->setFields([
                     $form->text('reason_item_title')->setLabel("Tiêu đề"),
                     $form->editor('reason_item_des')->setLabel("Nội dung"),
                     $form->image('reason_item_image')->setLabel("Hình ảnh"),
                ])
            );
        echo endBox();


     }
     else if($post->post_type == 'page' && basename(get_page_template())=="contact.php"){
         remove_post_type_support( 'page', 'editor' );

        $form = tr_form();
        echo beginBox("Banner Chính",true);
        echo $form->image('banner_image')->setLabel("Hình banner");
        echo $form->text('banner_title')->setLabel("Tiêu đề");
        echo endBox();

        echo beginBox("Bản đồ",true);
        echo $form->text('ggmap_link')->setLabel("link địa chỉ google map");
        echo $form->text('ggmap_title')->setLabel("Tiêu đề");
        echo $form->editor('ggmap_content')->setLabel("Nội dung");
        echo endBox();

        echo beginBox("Form liên hệ",true);
        echo $form->text('form_title')->setLabel("Tiêu đề");
        echo $form->text('form_name')->setLabel("Label fiel họ tên");
        echo $form->text('form_email')->setLabel("Label fiel email");
        echo $form->text('form_tel')->setLabel("Label fiel số điện thoại");
        echo $form->text('form_des')->setLabel("Label fiel nội dung");
        echo $form->text('form_submit')->setLabel("Label fiel button");
        echo endBox();


     }
     else if($post->post_type == 'page' && basename(get_page_template())=="aboutus.php"){
        remove_post_type_support( 'page', 'editor' );

        $form = tr_form();
        echo beginBox("Banner Chính",true);
        echo $form->image('banner_image')->setLabel("Hình banner");
        echo $form->text('banner_subtitle1')->setLabel("Tiêu đề phụ");
        echo $form->text('banner_title')->setLabel("Tiêu đề");
        echo $form->text('banner_subtitle2')->setLabel("Tiêu đề phụ");
        echo $form->text('banner_des')->setLabel("Mô tả");
        echo endBox();

        echo beginBox("Giới thiệu",true);
        echo $form->image('intro_image')->setLabel("Hình ảnh");
        echo $form->editor  ('intro_des')->setLabel("Mô tả");
        echo endBox();

         echo beginBox("Tầm Nhìn",true);
        echo $form->image('sight_image')->setLabel("Hình ảnh");
        echo $form->text('sight_title')->setLabel("Tiêu đề");
        echo $form->editor  ('sight_des')->setLabel("Mô tả");
        echo endBox();

        echo beginBox("Sứ mệnh",true);
        echo $form->image('assign_image')->setLabel("Hình ảnh");
        echo $form->text('assign_title')->setLabel("Tiêu đề");
        echo $form->editor  ('assign_des')->setLabel("Mô tả");
        echo endBox();

         echo beginBox("Giá trị cốt lõi",true);
        echo $form->text('value_title')->setLabel("Tiêu đề");
        echo $form->text('value_subtitle')->setLabel("Tiêu đề phụ");
         echo $form->row(
             $form->repeater('value_item')->setLabel("Item Value")->setFields([
                $form->image('value_item_image')->setLabel("Hình ảnh"),
                $form->text('value_item_title')->setLabel("Tiêu đề"),
                $form->editor('value_item_des')->setLabel("Mô tả"),                                
            ])
        );
        echo $form->editor('value_des')->setLabel("Mô tả");
        echo endBox();

        echo beginBox("Lịch sử hình thành",true);
        echo $form->text('history_title')->setLabel("Tiêu đề");
        echo $form->editor('history_des')->setLabel("Mô tả");
        echo $form->text('history_subtitle')->setLabel("Tiêu đề phụ");
        echo $form->row(
            $form->repeater('history_item')->setLabel("Item History")->setFields([
                $form->text('history_item_year')->setLabel("Năm"),
                $form->image('history_item_image')->setLabel("Hình ảnh"),
                $form->text('history_item_des')->setLabel("Mô tả"),                                
                ])
            );
        echo $form->image('history_image')->setLabel("Hình ảnh");
        echo endBox();

        echo beginBox("Câu chuyện hình thành",true);
        echo $form->text('story_title')->setLabel("Tiêu đề");
        echo $form->text('story_subtitle')->setLabel("Tiêu đề phụ");
        echo $form->row(
            $form->repeater('story_item')->setLabel("Item Story")->setFields([
                $form->editor('story_item_des')->setLabel("Nội dung"),                                
                $form->image('story_item_image')->setLabel("Hình ảnh"),
                $form->text('story_item_cap')->setLabel("Nội dung ảnh"),
                ])
            );
        echo endBox();

        echo beginBox("Thành tựu",true);
        echo $form->text('achieve_title')->setLabel("Tiêu đề");
        echo $form->text('achieve_subtitle')->setLabel("Mô tả");
        echo $form->row(
            $form->repeater('achieve_item')->setLabel("Item achieve")->setFields([
                $form->editor('achieve_item_des')->setLabel("Nội dung"),                                
                $form->image('achieve_item_image')->setLabel("Hình ảnh"),
                ])
            );
        echo endBox();


     }
      else if($post->post_type == 'page' && basename(get_page_template())=="homepage.php"){
        remove_post_type_support( 'page', 'editor' );

        $form = tr_form();
        echo beginBox("Video ",true);
        echo $form->image('video_logo')->setLabel("Ảnh logo");
        echo $form->text('video_title')->setLabel("Tiêu đề");
        echo $form->text('video_seemore')->setLabel("Xem thêm");    
        echo $form->text('video_link')->setLabel("Link xem thêm");
        echo $form->text('video_ytb')->setLabel("Link youtube");
        echo endBox();

        echo beginBox("Banner Chính",true);
        echo $form->image('banner_image')->setLabel("Hình banner");
        echo $form->text('banner_subtitle1')->setLabel("Tiêu đề phụ");
        echo $form->text('banner_title')->setLabel("Tiêu đề");
        echo $form->text('banner_subtitle2')->setLabel("Tiêu đề phụ");
        echo $form->text('banner_des')->setLabel("Mô tả");
        echo $form->text('banner_seemore')->setLabel("Xem thêm");
        echo $form->text('banner_link')->setLabel("Link xem thêm");
        echo $form->repeater('banner_item')->setLabel("Logo")->setFields([
            $form->image('banner_item_image')->setLabel("Ảnh logo"),
        ]);
        echo endBox();

        echo beginBox("Lĩnh vực hoạt động",true);
        echo $form->editor('active_title')->setLabel("Tiêu đề");
        echo $form->repeater('active_item')->setLabel("Logo")->setFields([
            $form->image('active_item_image')->setLabel("Hình ảnh"),
            $form->image('active_item_logo')->setLabel("Ảnh logo"),
            $form->text('active_item_des')->setLabel("Mô tả"),
            $form->repeater('active_major')->setLabel(" Các nghành")->setFields([
                $form->text('active_major_des')->setLabel("Tên nghành"),
                $form->text('active_major_link')->setLabel("Link nghành"),
            ])
            
        ]);
        echo endBox();

        echo beginBox("Phát triển bền vững",true);
        echo $form->text('development_title')->setLabel("Tiêu đề");
        echo $form->text('development_subtitle')->setLabel("Tiêu đề phụ");
        echo $form->text('development_content_title')->setLabel("Tiêu đề nội dung");
        echo $form->text('development_content_des')->setLabel("nội dung");
        echo $form->text('development_content_subtitle')->setLabel("Tiêu đề nội dung phụ");
        echo $form->repeater('development_item')->setLabel("nội dung")->setFields([
            $form->text('development_item_des')->setLabel("nội dung"),
        ]);
        echo $form->text('development_seemore')->setLabel("Xem thêm");
        echo $form->text('development_link')->setLabel("Link xem thêm");
         echo $form->repeater('development_img')->setLabel("slide")->setFields([
            $form->image('development_img_cap')->setLabel("Hình ảnh"),
            $form->editor('development_img_des')->setLabel("nội dung"),
        ]);
        echo endBox();

        echo beginBox("Giải thưởng",true);
        echo $form->text('achieve_title')->setLabel("Tiêu đề");
        echo $form->repeater('achieve_item')->setLabel("nội dung")->setFields([
            $form->image('achieve_item_img')->setLabel("Hình ảnh"),
            $form->text('achieve_item_des')->setLabel("nội dung"),
        ]);
        echo $form->image('achieve_bg')->setLabel("Ảnh background");
        echo endBox();
        
        echo beginBox("Đối tác",true);
        echo $form->text('partner_title')->setLabel("Tiêu đề");
        echo $form->repeater('partner_item')->setLabel("nội dung")->setFields([
            $form->image('partner_item_img')->setLabel("Hình ảnh logo"),
        ]);
        echo endBox();

      }
    else if($post->post_type == 'page'){
        $form = tr_form();
        echo beginBox("Banner Chính",true);
        echo $form->row(
            $form->image('banner_image')->setLabel("Banner"),
            $form->image('banner_image_mobile')->setLabel("Banner Mobile")
        );
        echo $form->row(
            $form->text('banner_title')->setLabel("Tiêu đề"),
            $form->textarea('banner_content')->setLabel("Nội dung")
        );
        echo endBox();
    }
    echo '</div>';
});

add_action('edit_form_after_editor', function($post) use($editorSettings) {
    echo '<div class="typerocket-container">';
    if($post->post_type == 'page' && basename(get_page_template())=="pdppolicy.php") {

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



$register = tr_post_type('register','Liên hệ')->setSlug('dang-ky-slug')->setIcon('Book');  
$args = $register->getArguments();
$args = array_merge( $args, array( 
  'supports'  =>  array('title'),
  'publicly_queryable'  => false
  )
);

$register->setArguments( $args );
$registerDetails = tr_meta_box('register_detail')->setLabel("Chi tiết");
$registerDetails->setCallback(function(){
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

$register->addColumn('mobile', true, 'Số điện thoại', function($value) {
    echo $value;
}, 'text');
$register->addColumn('email', true, 'Email', function($value) {
    echo $value;
}, 'text');
/*$register->addColumn('address', true, 'Địa chỉ', function($value) {
    echo $value;
}, 'text');
*/
$register->addColumn('interest', true, 'Sản phẩm quan tâm', function($value) {
    echo $value;
}, 'text');

$register->addColumn('content', true, 'Nội dung', function($value) {
    echo $value;
}, 'text');
$register->addColumn('device', true, 'Thiết bị', function($value) {
    echo $value;
}, 'text');
$register->addColumn('source', true, 'Nguồn', function($value) {
    echo $value;
}, 'text');


