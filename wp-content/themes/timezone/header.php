<?php
?>
<!DOCTYPE html>
	<html <?php language_attributes(); ?> class="no-js">
    <base href="<?php echo home_url(); ?>">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.ico">
		<!-- Author Meta -->
		<meta name="author" content="">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<!-- Site Title -->
		<title><?php echo wp_get_document_title(); ?></title>
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="manifest" href="site.webmanifest">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
    <!--? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <?php
                    if (get_custom_logo()) {
	                    $custom_logo_url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' );
                        ?>
	                    <img src="<?php echo $custom_logo_url[0]; ?>" alt="preloader-img">
                    <?php
                    } else {
                        ?>
	                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/logo.png" alt="">
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <?php
                        if (get_custom_logo()) {
	                        the_custom_logo();
                        } else {
                            ?>
	                        <div class="logo">
                                <a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        <?php
                        }
                        ?>
                        <!-- Main-menu -->
                        <?php
                        $menu_args = array(
	                        'menu'            => 'Primary_menu',
	                        'container'       => 'div',
	                        'container_class' => 'main-menu d-none d-lg-block',
	                        'menu_id'         => 'navigation',
                        );
                        wp_nav_menu( $menu_args );
                        ?>
                        <!-- Header Right -->
                        <div class="header-right">
                            <ul>
                                <li>
                                    <div class="nav-search search-switch">
                                        <span class="flaticon-search"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>