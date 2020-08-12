<?php
/*
Template Name: Index Page
*/
?>
<?php get_header(); ?>

<div id="content" class="content content-group content-home">
	<div id="content-pad">
		<div class="post-group">
			<?php get_template_part('loop','index'); ?>
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