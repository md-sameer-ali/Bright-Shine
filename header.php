<?php 
$directory = get_stylesheet_directory_uri();
$header_logo = get_field('header_logo', 'options');
$header_quote_button = get_field('header_quote_button', 'options');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>

    <!-- ================= HEADER AREA ============== -->
    <header class="header_area_main">
        <div class="container">
            <div class="header_area">
                <a href="<?php echo site_url(); ?>" class="logo_area">
                    <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>">
                </a>
                <div class="nav_area_with_btn">
                    <nav class="nav-area">
                        <div class="mobile-nav">
                            <div class="logo_area_main">
                                <a href="<?php echo site_url(); ?>" class="logo_area">
                                    <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>">
                                </a>
                                <i class="fa-solid fa-xmark cross"></i>
                            </div>
                        </div>
                       <?php header_nav(); ?>
                    </nav>
                    <div class="book_btn_area">
                        <a href="<?php echo $header_quote_button['url']; ?>" class="common_btn"><?php echo $header_quote_button['title']; ?></a>
                        <div class="menu_bar">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="black_overlay_for_mobile_responsive"></div>
    </header>