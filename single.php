<?php get_header(); ?>

<?php while (have_posts()) : ?>
<?php the_post(); ?>


<div class="content">

        <div class="title">
            <h1>
                <?php the_title(); ?>
            </h1>
        </div>

        <div class="meta">
            <span class="date"><i>Опубликовано:<?php the_time(__('d M Y', PADD_THEME_SLUG)); ?></i></span>
        </div>

        <?php the_content(); ?>

        <?php comments_template('',true); ?>
    </div>

    <div class="sidebar">
        <?php get_sidebar(); ?>
    </div>
    

    <div class="clear"></div>
    

<?php endwhile; ?>

<?php get_footer(); ?>