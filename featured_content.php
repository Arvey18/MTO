<?php query_posts('category_name=Featured Contents')?>
<div class="row">
	<?php while(have_posts()): the_post(); ?>
	<a href="<?php the_permalink()?>"><?php the_title('<h3>','</h3>');?></a>
	<p>
		<?php the_content(); ?>
	</p>
	<?php endwhile; ?>
</div>