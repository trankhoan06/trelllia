<?php


global $disableFullpage;
$disableFullpage= true;
get_header();

$pageID = get_option( 'page_for_posts' );
?>


<section  class=" animatedParent animateOnce section-news-list section-top ">
    <div class=" section-padding div_zindex">
        <div class="container-d">

            <div class="section-content-wrapper ">

                <div class="items post-list row gutter-lg">
                    <?php
                    if ( have_posts() ) {
                            while ( have_posts() ) {
                                the_post();
                                echo '<div class="col-sm-6 col-lg-4">';
                            
                                echo '</div>';

                            } // end while
                        } // end if
                    ?>
                </div>
                <?php
                  if (function_exists('custom_pagination')) {
                    custom_pagination();
                  }
                ?>



            </div>

        </div>
    </div>
</section>



<?php get_footer(); ?>