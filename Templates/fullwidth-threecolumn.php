<?php 
/*
Template Name: Full Width Page (Three Columns)
*/
get_header(); ?>
	<section class="container-fluid contents">
		<?php 
			if(is_front_page()) 
			{
				get_template_part('featured_content');
			}
		?>
		<?php 
			query_posts('category_name='); 
			// wp_reset_postdata();
			while(have_posts()): the_post() 
		?>
			<article class="col-md-4">
				<a href="<?php the_permalink(); ?>">
					<?php the_title('<h3 class="entry-title">','</h3>'); ?>
				</a>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	</section>
<?php get_footer(); ?>