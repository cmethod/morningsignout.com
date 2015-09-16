<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="handheldFriendly" content="true">
		<title>
			<?php
				//title of each page is dynamic for SEO reasons
				bloginfo( 'name');
				wp_title( '-', true, 'left');
			?>
		</title>
		<?php wp_head(); ?>
	</head>
	<body>
		<div class="container">
			<header>
				<div class="header__upper">
					<div class="header__upper__nav">
						<a href="<?php echo site_url(); ?>/about">About MSO  &raquo;</a>
						<a href="http://morningsignout.us9.list-manage.com/subscribe?u=a58522d1fd56473113a096e88&id=322396a603">Subscribe  &raquo;</a>
						<a href="<?php echo site_url(); ?>/recruitment">Join  &raquo;</a> 
					</div>
					<div class="header__upper__search">
						<?php get_search_form(); ?>
					</div>
					</ul>
				</div>
				<div class="header__lower">
					<div class="header__lower__logo">
						<a href="<?php echo site_url(); ?>">
							<img src="<?php echo get_template_directory_uri()?>/img/logo.jpg">
						</a>
					</div>
					<div class="header__lower__nav">
						<?php

							$args = array(
								'menu' => 'main-menu',
								'container'       => false,
								'echo'            => false,
								'items_wrap'      => '%3$s',
								'depth'           => 0
								);

							echo strip_tags(wp_nav_menu( $args ), '<a>');

						?>
					</div>
				</div>		
			</header>