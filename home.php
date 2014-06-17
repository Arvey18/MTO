<?php get_header(); ?>
<!-- <section class="container-fluid contents"> -->
<!-- 	<div class="col-md-3 contents">
		<?php get_sidebar(); ?>
	</div> -->
	<div class="row contents home-header">
		<div class="wrapper container-fluid">
			<h3 class="image-title-link">MTO provides brands and businesses a hollistic and<br/> integrated approach to marketing</h3>
		</div>
<!-- 	<?php 
		if(is_front_page()) 
		{
			get_template_part('featured_content');
		}
	?> -->
<!-- 	<?php if(!is_page()) {?>
		<h2> Recent Post </h2>
	<?php }?>	 -->
<!-- 	<?php 
		query_posts('category_name=');
		//wp_reset_postdata(); 
		while(have_posts()): the_post() 
	?> -->
	<!-- 		<article>
				<a href="<?php the_permalink(); ?>">
					<?php the_title('<h3 class="entry-title">','</h3>'); ?>
				</a>
				<div class="entry-content">
					<?php 
						// the_content(); 
						the_excerpt();
					?>
				</div>
			</article>
		<?php endwhile; ?>
 -->	</div>
 		<div class="row image-links image-link1">
 			<div class="wrapper container-fluid">
 				<h1 class="image-title-link">Featured Case Study Image #1</h1>
 			</div>
 		</div>
 		<div class="row image-links image-link2">
 			<div class="wrapper container-fluid">
 				<h1 class="image-title-link">Featured Case Study Image #2</h1>
 			</div>
 		</div>
 		<div class="row image-links image-link3">
 			<div class="wrapper container-fluid">
 				<h1 class="image-title-link">Featured Case Study Image #3</h1>
 			</div>
 		</div>
<!-- </section> -->
<?php get_footer(); ?>