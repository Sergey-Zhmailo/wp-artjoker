<?php
get_header();
?>
	<main>
        <?php
        // slider start
        $slider = CFS()->get( 'home_slider' );
        if ($slider) {
            ?>
            <!--? slider Area Start -->
            <div class="slider-area ">
                <div class="slider-active">
                    <?php
                    foreach ($slider as $slide) {
                        ?>
                        <!-- Single Slider -->
                        <div class="single-slider slider-height d-flex align-items-center slide-bg">
                            <div class="container">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                                        <div class="hero__caption">
                                            <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms"><?php echo $slide['slide_title']; ?></h1>
                                            <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms"><?php echo $slide['slide_text']; ?></p>
                                            <!-- Hero-btn -->
                                            <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                                <a href="<?php echo $slide['slide_button_link']; ?>" class="btn hero-btn"><?php echo $slide['slide_button_text']; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                                        <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                            <img src="<?php echo $slide['slide_img']; ?>" alt="" class=" heartbeat">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                        / Single Slider -->
                        <?php
                    }
                    ?>
                </div>
<!--                /slider-active -->
            </div>
            <!-- slider Area End-->
            <?php
        }
        // slider end
        get_template_part('template-parts/staff-section');
        // gallery
		$gallery = CFS()->get( 'home_gallery' );
		if ($gallery) {
		    ?>
            <!--? Gallery Area Start -->
            <div class="gallery-area">
                <div class="container-fluid p-0 fix">
                    <div class="row">
                        <?php
                        if ($gallery[0]) {
                            ?>
                            <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img big-img" style="background-image: url(<?php echo $gallery[0]['img_link']; ?>);"></div>
                                </div>
                            </div>
                            <?php
                        }
                        if ($gallery[1]) {
                            ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-gallery mb-30">
                                    <div class="gallery-img big-img" style="background-image: url(<?php echo $gallery[1]['img_link']; ?>);"></div>
                                </div>
                            </div>
                            <?php
                        }
                        if ($gallery[2]) {
                            ?>
                            <div class="col-xl-3 col-lg-4 col-md-12">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                                        <div class="single-gallery mb-30">
                                            <div class="gallery-img small-img" style="background-image: url(<?php echo $gallery[2]['img_link']; ?>);"></div>
                                        </div>
                                    </div>
                                    <?php
	                                if ($gallery[3]) {
	                                    ?>
                                        <div class="col-xl-12 col-lg-12  col-md-6 col-sm-6">
                                            <div class="single-gallery mb-30">
                                                <div class="gallery-img small-img" style="background-image: url(<?php echo $gallery[3]['img_link']; ?>);"></div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>




                    </div>
                </div>
            </div>
            <!-- Gallery Area End -->
            <?php
        }
		?>

        <!--? Popular Items Start -->
        <?php
        $posts_options = array(
	        'post_type' => array('post', 'news'),
	        'posts_per_page' => 6,
	        'orderby'        => 'rand',
	        'order'      => 'DESC'
        );
        $query_posts = new WP_Query( $posts_options  );
        if ($query_posts) {
            ?>
            <div class="popular-items section-padding30">
                <div class="container">
                    <!-- Section tittle -->
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-8 col-md-10">
                            <div class="section-tittle mb-70 text-center">
                                <h2><?php _e('Популярное', 'timezone'); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
	                    <?php
	                    while( $query_posts->have_posts() ){
		                    $query_posts->the_post();
		                    ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                <div class="single-popular-items mb-50 text-center <?php echo $post->post_type; ?>">
                                    <div class="popular-img">
	                                    <?php
	                                    if (get_the_post_thumbnail()) {
		                                    the_post_thumbnail('post-size');
	                                    } else {
		                                    ?>
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/no_img_post.jpg" alt="no image">
		                                    <?php
	                                    }
	                                    ?>
                                        <div class="img-cap">
                                            <a href="<?php the_permalink(); ?>"><?php _e('Подробнее', 'timezone'); ?></a>
                                        </div>
                                    </div>
                                    <div class="popular-caption">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    </div>
                                </div>
                            </div>
                            <!--					      / post item -->
		                    <?php

	                    }
	                    wp_reset_postdata();
	                    ?>
                    </div>
                    <!-- Button -->
                    <div class="row justify-content-center">
                        <div class="room-btn pt-70">
                            <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="btn view-btn1"><?php _e('Все записи', 'timezone'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
		<!-- Popular Items End -->


		<!--? Shop Method Start-->
		<div class="shop-method-area">
			<div class="container">
				<div class="method-wrapper">
					<div class="row d-flex justify-content-between">
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="single-method mb-40">
								<i class="ti-package"></i>
								<h6>Free Shipping Method</h6>
								<p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="single-method mb-40">
								<i class="ti-unlock"></i>
								<h6>Secure Payment System</h6>
								<p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="single-method mb-40">
								<i class="ti-reload"></i>
								<h6>Secure Payment System</h6>
								<p>aorem ixpsacdolor sit ameasecur adipisicing elitsf edasd.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Shop Method End-->
	</main>
<?php
get_footer();