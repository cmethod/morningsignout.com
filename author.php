<?php get_header(); ?>

<?php global $wp_query;
$curauth = $wp_query->get_queried_object(); ?>

<div class="content content--multiple content--author">
	
	<div class="author-gravatar">
		<?php // Determine which gravatar to use for the user
		$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.png';
		$email = $curauth->user_email;
		$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=140";?>
    	<img src="<?php echo $grav_url; ?>" width="140" height="140" alt="" />
	</div>

	<div class="author-information">
		<h1><?php echo $curauth->display_name; ?></h1>
		<h2 class="author-information__role"><?php echo $curauth->nickname; ?></h2>
		<h2><a href="mailto:<?php echo $curauth->user_email; ?>"><?php echo $curauth->user_email; ?></a></h2>
		<h2><a href="<?php echo $curauth->user_url; ?>"><?php echo $curauth->user_url; ?></a></h2>
	</div>
	
	<div class="author-bio">
		<?php echo $curauth->description; ?>
	</div>

	<div class="author-posts">	
		<?php if ( have_posts() ) :?>
			<h1><?php echo $curauth->first_name; ?> has written <?php the_author_posts(); ?> post(s)</h1>
			<? while ( have_posts() ) : the_post(); ?>
				<div class="content__post">
					<div class="content__post__info">
						<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
						<?php the_post_thumbnail();?>
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
				$big = 999999999; // need an unlikely integer

				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
				) );
				?>
			</div>
		<?php else: ?>
		<? endif; ?>
	</div>
</div>

<?php get_footer(); ?>