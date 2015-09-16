<?php get_header(); ?>

<div class="content content--single">
<? $ids = array(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
$ids[] = get_the_ID();
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
	<div class="content__post">
		<div class="content__post__info">
			<h1><?php the_title(); ?></h1>
			<img class="featured-img" src="<?php echo $thumb['0'];?>" title="Featured Image">
			<h2><?php the_author_posts_link(); ?></h2>
			<?php $archive_year  = get_the_time('Y'); ?>
			<?php $archive_month = get_the_time('m'); ?>
			<h3>
			<a href="<?php echo get_month_link( $archive_year, $archive_month ); ?>">
			<?php the_date(); ?> </a>
			</h3>
			<h4>Category: <?php the_category( ', ' ); ?></h4>
			<h4><?php the_tags(); ?></h4>
		</div>
		<?php the_content(); ?>
		<div class="post-nav">
		<p>
		<?php previous_post_link( 'Read older: %link'); ?>
		</p>
		<p>
		<?php next_post_link( 'Read newer: %link'); ?>
		</p>
		</div>
		<?php comments_template(); ?> 
	</div>
<?php endwhile; endif; ?>

	<div class="content__related">
		<ul>
			<h3>Featured</h3>
		<?php $the_query = new WP_Query( 'category_name=featured&posts_per_page=3' ); ?>
		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
		$ids[] = get_the_ID();?>		
		 	<li>
		 		<a href="<?php the_permalink();?>"><?php the_title();?></a>
		 	</li>
		<?php endwhile; endif;
		wp_reset_query(); ?>
		</ul>

		<ul>
			<h3>Latest</h3>
		<?php $the_query = new WP_Query( array('post__not_in' => $ids, 'posts_per_page' => 8) ); ?>
		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>		
		 	<li>
		 		<a href="<?php the_permalink();?>"><?php the_title();?></a>
		 	</li>
		<?php endwhile; endif;
		wp_reset_query(); ?>
		</ul>
	</div>
	
</div>

<?php get_footer(); ?>