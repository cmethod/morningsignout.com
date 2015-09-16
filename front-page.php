<?php get_header(); ?>
<?php
	$the_query = new WP_Query( 'category_name=featured&posts_per_page=9' );
	$ids = array();
?>

<!-- <a href="<?php echo site_url(); ?>/about"><img class="banner banner--frontpage" src="<?php echo get_template_directory_uri()?>/img/frontpage.png"></a> -->

<div class="featured">
	<h1><a href="<?php echo site_url(); ?>/category/featured">Featured >></a></h1>
	<?php if ( $the_query->have_posts() ) :?>
		<div class="featured__slider">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post();
			$ids[] = get_the_ID();
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
			 	<div style="background-image: url('<?php echo $thumb['0'];?>')">
			 		<a href="<?php the_permalink();?>">

				 			<h2><?php the_title();?></h2>

			 		</a>
			 	</div>
			<?php endwhile; ?>
		</div>
	<?php else: ?>
		<h1>There are no featured posts.</h1>
	<?php endif; ?>
</div>

<?php $the_query = new WP_Query( array('post__not_in' => $ids, 'posts_per_page' => 8) ); ?>
<div class="latest">
	<?php if ( $the_query->have_posts() ) :?>
		<?php $archive_year  = get_the_time('Y'); ?>
		<?php $archive_month = get_the_time('m'); ?>
		<h1><a href="<?php echo site_url(); ?>/latest">Latest >></a></h1>
		<ul class="latest__posts">
			<?php while ( $the_query->have_posts() ) : $the_query->the_post();
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
			 	<li style="background-image: url('<?php echo $thumb['0'];?>')">
			 		<a href="<?php the_permalink();?>">
			 			<div class="post-information">
			 				<h2><?php the_title();?></h2>
			 			</div>
			 		</a>
			 	</li>
			 <?php endwhile; ?>
		</ul>
	<?php else: ?>
		<h1>There are no posts.</h1>
	<?php endif; ?>
</div>

<?php get_footer(); ?>