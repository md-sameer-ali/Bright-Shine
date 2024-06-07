<?php 
get_header();
$directory = get_stylesheet_directory_uri();
$banner_slider_area = get_field('banner_slider_area');
$banner_get_quote_text = get_field('banner_get_quote_text');
$banner_contact_number = get_field('banner_contact_number');
$social_media_area = get_field('social_media_area');

$service_section_heading = get_field('service_section_heading');
$service_section_small_heading = get_field('service_section_small_heading');
$cleaning_tab_contents = get_field('cleaning_tab_contents');



$do_you_want_to_add_what_we_offer_section_on_home_page = get_field('do_you_want_to_add_what_we_offer_section_on_home_page');
$do_you_want_to_add_about_section_on_home_page = get_field('do_you_want_to_add_about_section_on_home_page');
$do_you_want_to_add_blog_section_on_home_page = get_field('do_you_want_to_add_blog_section_on_home_page');


$what_we_small_heading = get_field('what_we_small_heading');
$what_we_offer_big_heading = get_field('what_we_offer_big_heading');
$what_are_offer_section_image = get_field('what_are_offer_section_image');
$what_we_offer_background_image = get_field('what_we_offer_background_image');
$what_we_offer_details_area_with_points = get_field('what_we_offer_details_area_with_points');
$what_we_offer_button = get_field('what_we_offer_button');


$about_section_image = get_field('about_section_image');
$about_small_heading = get_field('about_small_heading');
$about_big_heading = get_field('about_big_heading');
$founder_details = get_field('founder_details');
$about_details = get_field('about_details');
$about_section_button = get_field('about_section_button');


$our_values_section_heading = get_field('our_values_section_heading');
$our_values_area = get_field('our_values_area');

$testimonials_section_heading = get_field('testimonials_section_heading');
$reviews_area = get_field('reviews_area', 'options');

$why_choose_us_small_heading = get_field('why_choose_us_small_heading');
$why_choose_us_heading = get_field('why_choose_us_heading');
$why_choose_us_points = get_field('why_choose_us_points');
$why_choose_us_button = get_field('why_choose_us_button');
$why_choose_us_section_image = get_field('why_choose_us_section_image');

?>
    <!-- ================= BANNER AREA ============== -->
    <?php if($banner_slider_area) : ?> 
        <section class="banner_area_main">
            <div class="color_with_contact">
                <div class="contact_number_area">
                    <p><?php echo $banner_get_quote_text; ?> <a href="tel:<?php echo $banner_contact_number; ?>"><?php echo $banner_contact_number; ?></a></p>
                </div>
            </div>
            <div class="color_with_social">
                <?php if($social_media_area) : ?>
                    <div class="social_area">
                        <p>Follow Us On:</p>
                        <ul>
                            <?php 
                                foreach($social_media_area as $each_social_media) :
                                    $add_social_media_icon = $each_social_media['add_social_media_icon'];
                                    $social_media_link = $each_social_media['social_media_link'];
                            ?>
                            <li class="social_item">
                                <a href="<?php echo $social_media_link; ?>">
                                    <?php echo $add_social_media_icon; ?>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
            <div class="banner_slider_area">
                <div class="swiper bannerSwiper">
                    <div class="swiper-wrapper">
                        <?php 
                            foreach($banner_slider_area as $each_banner_slide) :
                                $banner_background_image = $each_banner_slide['banner_background_image'];
                                $banner_small_heading = $each_banner_slide['banner_small_heading'];
                                $banner_big_heading = $each_banner_slide['banner_big_heading'];
                        ?>
                                    <div class="swiper-slide">
                                        <div class="banner_content">
                                            <img src="<?php echo $banner_background_image['url']; ?>" alt="<?php echo $banner_background_image['alt']; ?>">
                                            <div class="container">
                                                <div class="small_container">
                                                    <div class="banner_text_area">
                                                        <img src="<?php echo $directory; ?>/img/blue_quote.png" alt="img" class="theme_color_quote">
                                                        <h3><?php echo $banner_small_heading; ?></h3>
                                                        <div class="common_heading_banner">
                                                            <?php echo $banner_big_heading; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- ================= SERVICES AREA ============== -->
    <?php if($cleaning_tab_contents): ?>
        <section class="services_area_main common_bg_color">
            <div class="container">
                <div class="services_area">
                    <div class="common_heading">
                        <h2><?php echo $service_section_heading; ?></h2>
                    </div>
                    <div class="common_heading_small">
                        <h3><?php echo $service_section_small_heading; ?></h3>
                    </div>
                    <div class="service_tab_area">
                        <div class="tabs">
                            <div class="tab_top_area">
                                <ul id="tabs-nav" class="tab_ul">
                                    <?php 
                                        foreach($cleaning_tab_contents as $key=> $tab_name_item) :
                                            $tab_name = $tab_name_item['tab_name'];
                                    ?>
                                                <li><a href="#tab<?php echo $key; ?>"><?php echo $tab_name; ?></a></li>
                                    <?php endforeach; ?>
                                </ul> <!-- END tabs-nav -->
                            </div>
                            <div id="tabs-content">
                                    <?php 
                                        foreach($cleaning_tab_contents as $key=> $tab_name_item) :
                                            $tab_name = $tab_name_item['tab_name'];
                                            $tab_heading = $tab_name_item['tab_heading'];
                                            $tab_details = $tab_name_item['tab_details'];
                                            $tab_image = $tab_name_item['tab_image'];
                                            $request_a_quote_button = $tab_name_item['request_a_quote_button'];
                                    ?>
                                                <div id="tab<?php echo $key; ?>" class="tab-content">
                                                    <div class="tab_content_details">
                                                        <div class="row">
                                                            <div class="col-xl-5">
                                                                <div class="tab_content_photo_area <?php echo ($key==0) ? "wow fadeInDown" : "" ?>" data-wow-offset="100">
                                                                    <div class="common_photo_design_area">
                                                                        <img src="<?php echo $tab_image['url']; ?>" alt="<?php echo $tab_image['alt']; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-7">
                                                                <div class="tab_content_details_area <?php echo ($key==0) ? "wow fadeInDown" : "" ?>"
                                                                    data-wow-offset="100" data-wow-duration="1.2s">
                                                                    <div class="tab_content_text_details">
                                                                        <div class="cleaning_topics">
                                                                            <h3><?php echo $tab_name; ?></h3>
                                                                            <div class="common_para which_type_of_cleaning">
                                                                                <?php echo $tab_details; ?>
                                                                                <?php if($request_a_quote_button) : ?>
                                                                                    <a href="<?php echo $request_a_quote_button['url']; ?>" class="common_btn"><?php echo $request_a_quote_button['title']; ?></a>
                                                                                <?php endif; ?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    <?php endforeach; ?>
                                
                            </div> <!-- END tabs-content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- ================= WHAT WE OFFER AREA ============== -->
    <?php if($do_you_want_to_add_what_we_offer_section_on_home_page) : ?>
        <section class="what_we_offer_area_main">
            <div class="what_we_offer_details_area_main wow fadeInDown" data-wow-offset="100" data-wow-duration="1.5s">
                <div class="what_we_offer_details_area">
                    <div class="bg_fade_image">
                        <img src="<?php echo $what_we_offer_background_image['url']; ?>" alt="<?php echo $what_we_offer_background_image['alt']; ?>">
                    </div>
                    <div class="common_heading_small">
                        <h3><?php echo $what_we_small_heading; ?></h3>
                    </div>
                    <div class="common_heading">
                        <h2><?php echo $what_we_offer_big_heading; ?></h2>
                    </div>
                    <div class="offer_points">
                        <ul>
                            <?php
                                foreach($what_we_offer_details_area_with_points as $each_points) :
                                    $what_we_offer_details_area_heading =  $each_points['what_we_offer_details_area_heading'];
                                    $what_we_offer_details =  $each_points['what_we_offer_details'];
                            ?>
                                            <li class="points_area">
                                                <h4><?php echo $what_we_offer_details_area_heading; ?></h4>
                                                <p><?php echo $what_we_offer_details; ?> </p>
                                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <a href="<?php echo $what_we_offer_button['url']; ?>" class="common_btn"><?php echo $what_we_offer_button['title']; ?></a>
                    </div>
                </div>
            </div>
            <div class="what_we_cleaing_photo wow bounceInUp" data-wow-offset="100" data-wow-duration="2s">
                <img src="<?php echo $what_are_offer_section_image['url']; ?>" alt="<?php echo $what_are_offer_section_image['alt']; ?>">
            </div>
        </section>
    <?php endif; ?>
    <!-- ================= ABOUT AREA ============== -->
    <?php if($do_you_want_to_add_about_section_on_home_page) : ?>
        <section class="about_area_main">
            <div class="container">
                <div class="about_area">
                    <div class="tab_content_details">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="tab_content_details_area wow slideInLeft" data-wow-offset="100" data-wow-duration="1.2s">
                                    <div class="tab_content_details">
                                        <div class="common_heading_small">
                                            <h3><?php echo $about_small_heading; ?></h3>
                                        </div>
                                        <div class="common_heading">
                                            <h2><?php echo $about_big_heading; ?></h2>
                                        </div>
                                        <div class="founder_text">
                                            <p><?php echo $founder_details; ?></p>
                                        </div>
                                        <div class="cleaning_topics">
                                            <div class="common_para which_type_of_cleaning">
                                                <?php echo $about_details; ?>
                                                <a href="<?php echo $about_section_button['url']; ?>" class="common_btn"><?php echo $about_section_button['title']; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="tab_content_photo_area wow fadeInDown" data-wow-offset="100">
                                    <div class="common_photo_design_area">
                                        <img src="<?php echo $about_section_image['url']; ?>" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- ================= OUR VALUES AREA ============== -->
    <?php if($our_values_area) : ?>
        <section class="our_values_area_main">
            <div class="container">
                <div class="small_container">
                    <div class="our_values_area">
                        <div class="common_heading">
                            <h2><?php echo $our_values_section_heading; ?></h2>
                        </div>
                        <div class="our_values_card_area">
                            <?php
                                foreach($our_values_area as $each_values) :
                                    $value_heading = $each_values['value_heading'];
                                    $value_details = $each_values['value_details'];
                            ?>
                                        <div class="process_card wow fadeInDown" data-wow-offset="150">
                                            <div class="common_heading_small">
                                                <h3><?php echo $value_heading; ?></h3>
                                            </div>
                                            <div class="common_para">
                                                <p><?php echo $value_details; ?></p>
                                            </div>
                                        </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- ================= TESTIMONIAL AND WHY CHOOSE US ============== -->
    <?php if($reviews_area) : ?>
        <section class="testimonials_and_why_area_main">
            <div class="small_container">
                <div class="testimonials_and_why_area">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial_slider_area wow fadeInDown" data-wow-offset="100" data-wow-duration="1.5s">
                                <div class="common_heading">
                                    <h2><?php echo $testimonials_section_heading; ?></h2>
                                </div>
                                <div class="swiper testimonialSwiper">
                                    <div class="swiper-wrapper">
                                        <?php 
                                            foreach($reviews_area as $each_review) :
                                                $review_given_person_image = $each_review['review_given_person_image'];
                                                $review_content = $each_review['review_content'];
                                                $review_given_person_name = $each_review['review_given_person_name'];
                                        ?>
                                                    <div class="swiper-slide">
                                                        <div class="testimonial_content_area">
                                                            <div class="testimonial_person">
                                                                <img src="<?php echo $review_given_person_image['url']; ?>" alt="img">
                                                            </div>
                                                            <div class="testimonial_content">
                                                                <?php echo $review_content; ?>
                                                            </div>
                                                            <div class="testimonial_person_name">
                                                                <p><?php echo $review_given_person_name; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="swiper-button-next arrow t_next"></div>
                                    <div class="swiper-button-prev arrow t_prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <!-- ================= WHY CHOOSE US AREA ============== -->
    <!-- <?php if($why_choose_us_heading) : ?>
    <section class="what_we_offer_area_main why_section_area_main">
        <div class="container">
            <div class="small_container">
                <div class="what_we_offer_details_area_main wow fadeInDown" data-wow-offset="100"
                    data-wow-duration="1.5s">
                    <div class="what_we_offer_details_area">
                        <div class="common_heading_small">
                            <h3><?php echo $why_choose_us_small_heading; ?></h3>
                        </div>
                        <div class="common_heading">
                            <h2><?php echo $why_choose_us_heading; ?></h2>
                        </div>
                        <div class="offer_points">
                            <ul>
                                <?php
                                    foreach($why_choose_us_points as $each_why_choose_poitns) :
                                        $reason_points = $each_why_choose_poitns['reason_points'];
                                        $reason_details = $each_why_choose_poitns['reason_details'];

                                ?>
                                            <li class="points_area">
                                                <h4><?php echo $reason_points; ?></h4>
                                                <p><?php echo $reason_details; ?></p>
                                            </li>
                                <?php endforeach; ?>
                            </ul>
                            <a href="<?php echo $why_choose_us_button['url']; ?>" class="common_btn"><?php echo $why_choose_us_button['title']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="what_we_cleaing_photo wow bounceInUp" data-wow-offset="100" data-wow-duration="2s">
            <img src="<?php echo $why_choose_us_section_image['url']; ?>" alt="img">
        </div>
    </section>
    <?php endif; ?> -->
    <!-- ================= LATEST ARTICLES AREA ============== -->
    <?php 
        $blog_posts = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 2,
        );

        $blog_post_query = new WP_Query($blog_posts);

        if($blog_post_query->posts) :
            if($do_you_want_to_add_blog_section_on_home_page) :
    ?>
        <section class="latest_article_area_main">
            <div class="container">
                <div class="small_container">
                    <div class="latest_article_area">
                        <div class="common_heading">
                            <h2>Latest Articles</h2>
                        </div>
                        <div class="article_area_main">
                            <?php 
                                foreach($blog_post_query->posts as $each_post) :
                            ?>
                                    <div class="article_box wow fadeInDown" data-wow-offset="100" data-wow-duration="1.5s">
                                        <div class="common_photo_design_area">
                                            <?php echo get_the_post_thumbnail($each_post->ID); ?>
                                        </div>
                                        <span class="date_main"><?php echo date('j.n.Y', strtotime($each_post->post_modified)); ?></span>
                                        <h3><?php echo $each_post->post_excerpt; ?></h3>
                                        <a href="<?php echo get_the_permalink($each_post->ID); ?>" class="common_btn">Read more</a>
                                    </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; endif; ?>

<?php get_footer(); ?>