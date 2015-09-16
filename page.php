<?php get_header(); ?>

<img class="banner" src="<?php echo get_template_directory_uri()?>/img/about.png">

<div class="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content() ?>
<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>