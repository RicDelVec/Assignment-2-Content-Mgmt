<?php 
	/**
	 * Template Name: Photography
	 * Template Post Type: post, page, produc
	 **/
	get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="page-content">
			<h1><?php echo esc_html(get_the_title()); ?></h1>
			<div>
				<?php $query = new WP_Query(array('post_type' => 'photography', 'posts_per_page' => 10));

				while ($query->have_posts()) : $query->the_post();?>
				<div class="photo-content">
					<div><h3><?php the_title(); ?></h3></div>
					<?php 
						the_post_thumbnail();
						the_content();
					?>
				</div>
				<?php wp_reset_postdata(); ?>

				<?php endwhile; ?>
			</div>
		</section>
	</main>
</div>

<?php 
	get_footer()
?>