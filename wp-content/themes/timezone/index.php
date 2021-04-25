<?php
get_header();
?>

	<div class="index">
	<?php
		// циклы вывода записей
		// если записи найдены
		if ( have_posts() ){
			while ( have_posts() ){
				the_post();
				echo '<h3><a href="'. get_permalink() .'">'. get_the_title() .'</a></h3>';

				echo get_the_excerpt();
			}
			?>
			<div class="navigation">
		<div class="next-posts"><?php next_posts_link(); ?></div>
		<div class="prev-posts"><?php previous_posts_link(); ?></div>
	</div>
			<?php 
		}
		// елси записей не найдено
		else{
			_e('Нет новостей', 'karma');
		}
		?>
	</div>
<?php get_footer(); ?>