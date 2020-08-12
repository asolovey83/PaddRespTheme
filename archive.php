<?php
/*
Template Name: Archive
*/
?>
<?php get_header(); ?>

<div id="content" class="content content-group content-archive">
	<div id="content-pad">
		<div class="post-group">
			<?php the_post(); ?>
			<?php rewind_posts(); ?>
			<?php get_template_part('loop','archive'); ?>
			<?php
				if (!is_singular()) :
					Padd_Theme_PageNavigation::render();
				endif;

		?>
		</div>
	</div>

</div>

<div class="sidebar">
<?php get_sidebar(); ?>
</div>

<div class="clear"></div>

<?php get_footer(); ?>

