<?php 

/*

	Template Name: About

*/

get_header(); ?>
	
<img class="banner" src="<?php echo get_template_directory_uri()?>/img/about.png">

<div class="content content--single">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="content__post">
		<?php the_content(); ?>
	</div>
	<?php endwhile; endif; ?>

	<?php 
		$the_query = new WP_Query( 'tag=featured&posts_per_page=3' );
		$ids = array();
	?>
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