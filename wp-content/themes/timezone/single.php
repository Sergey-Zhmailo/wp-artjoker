<?php
get_header();
do_action('get_views');
$views = (int)get_post_meta(get_the_ID(), 'views', true);
$views++;
update_post_meta(get_the_ID(), 'views', $views);

?>
	<main>
		<!-- Hero Area Start-->
		<div class="slider-area ">
			<div class="single-slider slider-height2 d-flex align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="hero-cap text-center">
								<h2>Blog details</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--================Blog Area =================-->
		<section class="blog_area single-post-area section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 posts-list">
						<div class="single-post">
							<div class="feature-img">
								<?php
								if (get_the_post_thumbnail()) {
								?>
								<img class="card-img rounded-0" src="<?php the_post_thumbnail_url('blog-size'); ?>" alt="<?php the_title(); ?>">
								<?php
	                                } else {
		                                ?>
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/no_img_blog.jpg" alt="no image">
								<?php
								}
								?>
							</div>
							<div class="blog_details">
								<?php
								the_content();
								?>
							</div>
						</div>

						<div class="navigation-top">
							<div class="d-sm-flex justify-content-between text-center">
								<p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
									people like this</p>
								<div class="col-sm-4 text-center my-2 my-sm-0">
									<!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
								</div>

							</div>
							<div class="navigation-area">
								<div class="row">
									<div
										class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
										<div class="thumb">
											<a href="#">
												<img class="img-fluid" src="assets/img/post/preview.png" alt="">
											</a>
										</div>
										<div class="arrow">
											<a href="#">
												<span class="lnr text-white ti-arrow-left"></span>
											</a>
										</div>
										<div class="detials">
											<p>Prev Post</p>
											<a href="#">
												<h4>Space The Final Frontier</h4>
											</a>
										</div>
									</div>
									<div
										class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
										<div class="detials">
											<p>Next Post</p>
											<a href="#">
												<h4>Telescopes 101</h4>
											</a>
										</div>
										<div class="arrow">
											<a href="#">
												<span class="lnr text-white ti-arrow-right"></span>
											</a>
										</div>
										<div class="thumb">
											<a href="#">
												<img class="img-fluid" src="assets/img/post/next.png" alt="">
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="blog-author">
							<div class="media align-items-center">
								<img src="assets/img/blog/author.png" alt="">
								<div class="media-body">
									<a href="#">
										<h4>Harvard milan</h4>
									</a>
									<p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
										our dominion twon Second divided from</p>
								</div>
							</div>
						</div>
						<div class="comments-area">
							<h4>05 Comments</h4>
							<div class="comment-list">
								<div class="single-comment justify-content-between d-flex">
									<div class="user justify-content-between d-flex">
										<div class="thumb">
											<img src="assets/img/comment/comment_1.png" alt="">
										</div>
										<div class="desc">
											<p class="comment">
												Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
												Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
											</p>
											<div class="d-flex justify-content-between">
												<div class="d-flex align-items-center">
													<h5>
														<a href="#">Emilly Blunt</a>
													</h5>
													<p class="date">December 4, 2017 at 3:12 pm </p>
												</div>
												<div class="reply-btn">
													<a href="#" class="btn-reply text-uppercase">reply</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="comment-list">
								<div class="single-comment justify-content-between d-flex">
									<div class="user justify-content-between d-flex">
										<div class="thumb">
											<img src="assets/img/comment/comment_2.png" alt="">
										</div>
										<div class="desc">
											<p class="comment">
												Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
												Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
											</p>
											<div class="d-flex justify-content-between">
												<div class="d-flex align-items-center">
													<h5>
														<a href="#">Emilly Blunt</a>
													</h5>
													<p class="date">December 4, 2017 at 3:12 pm </p>
												</div>
												<div class="reply-btn">
													<a href="#" class="btn-reply text-uppercase">reply</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="comment-list">
								<div class="single-comment justify-content-between d-flex">
									<div class="user justify-content-between d-flex">
										<div class="thumb">
											<img src="assets/img/comment/comment_3.png" alt="">
										</div>
										<div class="desc">
											<p class="comment">
												Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
												Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
											</p>
											<div class="d-flex justify-content-between">
												<div class="d-flex align-items-center">
													<h5>
														<a href="#">Emilly Blunt</a>
													</h5>
													<p class="date">December 4, 2017 at 3:12 pm </p>
												</div>
												<div class="reply-btn">
													<a href="#" class="btn-reply text-uppercase">reply</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="comment-form">
							<h4>Leave a Reply</h4>
							<form class="form-contact comment_form" action="#" id="commentForm">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
                                 <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                           placeholder="Write Comment"></textarea>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input class="form-control" name="name" id="name" type="text" placeholder="Name">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<input class="form-control" name="email" id="email" type="email" placeholder="Email">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<input class="form-control" name="website" id="website" type="text" placeholder="Website">
										</div>
									</div>
								</div>
								<div class="form-group">
									<button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="blog_right_sidebar">
							<?php get_sidebar('blog-right'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ Blog Area end =================-->
	</main>
<?php

get_footer();