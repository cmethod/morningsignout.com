<?php get_header(); ?>
	
<div class="page-title">
	<?php wp_title(""); ?>
</div>

<div class="content content--multiple">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="content__post">
			<div class="content__post__info">
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<?php the_post_thumbnail();?>
				<h2><?php the_author_posts_link(); ?></h2>
				<?php $archive_year  = get_the_time('Y'); ?>
				<?php $archive_month = get_the_time('m'); ?>
				<h4>
					<a href="<?php echo get_month_link( $archive_year, $archive_month ); ?>">
					<?php the_time('j F Y'); ?> </a>
				</h4>
				<h4>Category: <?php the_category( ', ' ); ?></h4>
				<h4><?php the_tags(); ?></h4>
			</div>
			<?php the_excerpt(); ?>
		</div>
		<?php endwhile; ?>
		<div class="pagination">
			<?php
			global $wp_query;

			$big = 999999999; // need an unlikely integer

			echo paginate_links( array(
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => 3
			) );
			?>
		</div>
	<?php else: endif; ?>

<?php get_footer(); ?>