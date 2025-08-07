<h2>Theme Option</h2>

<?php
$form = tr_form("option");
$form->useJson();
$form->setGroup( $this->getName() );
?>

<div class="typerocket-container">
    <?php
    echo $form->open();
// theme
    $theme_cus = $form->image('logo')->setLabel('Logo');
    $smtp = $form->text('SMTP Host');
    $smtp .= $form->text('SMTP Port');
    $smtp .= $form->radio('Encryption')->setOptions([
            'No encryption.' => '',
            'Use SSL encryption.' => 'ssl',
            'Use TLS encryption.' => 'tls'
        ]);
    $smtp .= $form->radio('Authentication')->setOptions([
            'No: Do not use SMTP authentication.' => 0,
            'Yes: Use SMTP authentication.' => 1
        ]);
    $smtp .= $form->text('Username');
    $smtp .= $form->text('Password')->setType('password');
    $smtp .= $form->text('From Email');
    $smtp .= $form->text('Receive Email');



    

    $social = $form->text('facebook')->setLabel('Facebook');
    $social .= $form->text('linkedin')->setLabel('Linkedin');
    $social .= $form->text('phone')->setLabel('Phone');
    $social .= $form->text('email')->setLabel('Email');
    $social .= $form->text('address_main')->setLabel('Trụ sở chính');
    $social .= $form->text('address_nam')->setLabel('Trụ sở miền nam');
    $social .= $form->text('address_japan')->setLabel('Trụ sở Nhật Bản');

    // popup
    $popup = $form->checkbox('enable_popup')->setLabel('Hiển thị');
    $popup .= $form->image('banner_popup')->setLabel('Banner');
    $popup .= $form->text('link_popup')->setLabel('Liên kết');

    $script = $form->textarea('script_header')->setLabel('Header');
    $script .= $form->textarea('script_body')->setLabel('Body');
    $script .= $form->textarea('script_footer')->setLabel('Footer');



    // save
    $save = $form->submit( 'Lưu' );

    // layout
    tr_tabs()
    ->setSidebar( $save )
    ->addTab( 'Theme', $theme_cus )
    ->addTab( 'Mạng xã hội', $social )
    ->addTab( 'Email SMTP', $smtp )
    ->addTab( 'Script', $script )
    ->addTab( 'Popup', $popup )
    ->render( 'box' );
    echo $form->close();
    ?>
</div>

