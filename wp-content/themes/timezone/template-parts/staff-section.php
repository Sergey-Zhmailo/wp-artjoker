<?php
?>
<!-- ? Staff Start -->
<?php
      $staff_options = array(
        'post_type' => 'staff',
        'posts_per_page' => 3,
        'orderby'        => 'rand',
        'order'      => 'ASC'
      );
      $query_staff = new WP_Query( $staff_options );
      if( $query_staff->have_posts() ){
        ?>
	      <section class="new-product-area section-padding30">
		      <div class="container">
			      <!-- Section tittle -->
			      <div class="row">
				      <div class="col-xl-12">
					      <div class="section-tittle mb-70">
						      <h2><?php _e('Наши сотрудники', 'timezone');?></h2>
					      </div>
				      </div>
			      </div>
			      <div class="row">
				      <?php
				      while( $query_staff->have_posts() ){
					      $query_staff->the_post();
					      ?>
					      <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
						      <div class="single-new-pro mb-30 text-center">
							      <div class="product-img">
								      <?php
								      if (get_the_post_thumbnail()) {
								      	the_post_thumbnail('staff-size');
								      } else {
								      	?>
									      <img src="<?php echo get_template_directory_uri() ?>/assets/img/no_img_staff.jpg" alt="no image">
								      <?php
								      }
								      ?>
							      </div>
							      <div class="product-caption">
								      <h3><a href="product_details.html"><?php the_title(); ?></a></h3>
								      <?php
					                  $position = CFS()->get( 'position' );
								      if ($position) {
								      	?>
									      <span><?php echo $position; ?></span>
								      <?php
								      }
								      ?>
							      </div>
						      </div>
					      </div>
<!--					      / satff item -->
				      <?php

				      }
				      wp_reset_postdata();
				      ?>
			      </div>
<!--			      /row -->
		      </div>
<!--		      /container -->
	      </section>
		<?php
      }
?>

<!--  Staff End -->