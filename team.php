<?php 
/*

	Template Name: Team

*/
get_header(); ?>

<h1 class="page-title"><span>MSO</span>Team Members</h1>

<div class="content content--multiple">

	<!--<?php $user_query = new WP_User_Query( array( 'meta_key' => 'user_group', 'meta_value' => 'chief' ) );
	if ( ! empty( $user_query->results ) ) { ?>
	<div class="user-group">
		<h2> Editors in Chief </h2>
	<?php foreach ( $user_query->results as $user ) { ?>
		<div class="user">
			<a href="<?php echo site_url(); ?>/author/<?php echo $user->user_login ?>">
				<div class="author-gravatar">
					<?php 
					$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.png';
					$email = $user->user_email;
					$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=140";?>
			    	<img src="<?php echo $grav_url; ?>" width="140" height="140" alt="" />
				</div>

				<div class="author-information">
					<h1><?php echo $user->display_name; ?></h1>
					<h2 class="author-information__role"><?php echo $user->nickname; ?></h2>
				</div>
			</a>
		</div><?php
		}
	}?>
	</div>-->

	<?php $user_query = new WP_User_Query( array( 'meta_key' => 'user_group', 'meta_value' => 'exec' ) );
	if ( ! empty( $user_query->results ) ) { ?>
	<div class="user-group">
		<h2> Executive </h2>
	<?php foreach ( $user_query->results as $user ) { ?>
		<div class="user">
			<a href="<?php echo site_url(); ?>/author/<?php echo $user->user_login ?>">
				<div class="author-gravatar">
					<?php 
					$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.png';
					$email = $user->user_email;
					$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=140";?>
			    	<img src="<?php echo $grav_url; ?>" width="140" height="140" alt="" />
				</div>

				<div class="author-information">
					<h1><?php echo $user->display_name; ?></h1>
					<h2 class="author-information__role"><?php echo $user->nickname; ?></h2>
				</div>
			</a>
		</div><?php
		}
	}?>
	</div>

	<?php $user_query = new WP_User_Query( array( 'meta_key' => 'user_group', 'meta_value' => 'admin' ) );
	if ( ! empty( $user_query->results ) ) { ?>
	<div class="user-group">
		<h2> General Administration </h2>
	<?php foreach ( $user_query->results as $user ) { ?>
		<div class="user">
			<a href="<?php echo site_url(); ?>/author/<?php echo $user->user_login ?>">
				<div class="author-gravatar">
					<?php 
					$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.png';
					$email = $user->user_email;
					$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=140";?>
			    	<img src="<?php echo $grav_url; ?>" width="140" height="140" alt="" />
				</div>

				<div class="author-information">
					<h1><?php echo $user->display_name; ?></h1>
					<h2 class="author-information__role"><?php echo $user->nickname; ?></h2>
				</div>
			</a>
		</div><?php
		}
	}?>
	</div>

	<?php $user_query = new WP_User_Query( array( 'meta_key' => 'user_group', 'meta_value' => 'research' ) );
	if ( ! empty( $user_query->results ) ) { ?>
	<div class="user-group">
		<h2> Category: Research </h2>
	<?php foreach ( $user_query->results as $user ) { ?>
		<div class="user">
			<a href="<?php echo site_url(); ?>/author/<?php echo $user->user_login ?>">
				<div class="author-gravatar">
					<?php 
					$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.png';
					$email = $user->user_email;
					$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=140";?>
			    	<img src="<?php echo $grav_url; ?>" width="140" height="140" alt="" />
				</div>

				<div class="author-information">
					<h1><?php echo $user->display_name; ?></h1>
					<h2 class="author-information__role"><?php echo $user->nickname; ?></h2>
				</div>
			</a>
		</div><?php
		}
	}?>
	</div>

	<?php $user_query = new WP_User_Query( array( 'meta_key' => 'user_group', 'meta_value' => 'wellness' ) );
	if ( ! empty( $user_query->results ) ) { ?>
	<div class="user-group">
		<h2> Category: Wellness </h2>
	<?php foreach ( $user_query->results as $user ) { ?>
		<div class="user">
			<a href="<?php echo site_url(); ?>/author/<?php echo $user->user_login ?>">
				<div class="author-gravatar">
					<?php 
					$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.png';
					$email = $user->user_email;
					$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=140";?>
			    	<img src="<?php echo $grav_url; ?>" width="140" height="140" alt="" />
				</div>

				<div class="author-information">
					<h1><?php echo $user->display_name; ?></h1>
					<h2 class="author-information__role"><?php echo $user->nickname; ?></h2>
				</div>
			</a>
		</div><?php
		}
	}?>
	</div>

	<?php $user_query = new WP_User_Query( array( 'meta_key' => 'user_group', 'meta_value' => 'humanities' ) );
	if ( ! empty( $user_query->results ) ) { ?>
	<div class="user-group">
		<h2> Category: Humanities</h2>
	<?php foreach ( $user_query->results as $user ) { ?>
		<div class="user">
			<a href="<?php echo site_url(); ?>/author/<?php echo $user->user_login ?>">
				<div class="author-gravatar">
					<?php 
					$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.png';
					$email = $user->user_email;
					$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=140";?>
			    	<img src="<?php echo $grav_url; ?>" width="140" height="140" alt="" />
				</div>

				<div class="author-information">
					<h1><?php echo $user->display_name; ?></h1>
					<h2 class="author-information__role"><?php echo $user->nickname; ?></h2>
				</div>
			</a>
		</div><?php
		}
	}?>
	</div>

	<?php $user_query = new WP_User_Query( array( 'meta_key' => 'user_group', 'meta_value' => 'medicine' ) );
	if ( ! empty( $user_query->results ) ) { ?>
	<div class="user-group">
		<h2> Category: Medicine </h2>
	<?php foreach ( $user_query->results as $user ) { ?>
		<div class="user">
			<a href="<?php echo site_url(); ?>/author/<?php echo $user->user_login ?>">
				<div class="author-gravatar">
					<?php 
					$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.png';
					$email = $user->user_email;
					$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=140";?>
			    	<img src="<?php echo $grav_url; ?>" width="140" height="140" alt="" />
				</div>

				<div class="author-information">
					<h1><?php echo $user->display_name; ?></h1>
					<h2 class="author-information__role"><?php echo $user->nickname; ?></h2>
				</div>
			</a>
		</div><?php
		}
	}?>
	</div>

	<?php $user_query = new WP_User_Query( array( 'meta_key' => 'user_group', 'meta_value' => 'publichealth' ) );
	if ( ! empty( $user_query->results ) ) { ?>
	<div class="user-group">
		<h2> Category: Public Health </h2>
	<?php foreach ( $user_query->results as $user ) { ?>
		<div class="user">
			<a href="<?php echo site_url(); ?>/author/<?php echo $user->user_login ?>">
				<div class="author-gravatar">
					<?php 
					$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.png';
					$email = $user->user_email;
					$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=140";?>
			    	<img src="<?php echo $grav_url; ?>" width="140" height="140" alt="" />
				</div>

				<div class="author-information">
					<h1><?php echo $user->display_name; ?></h1>
					<h2 class="author-information__role"><?php echo $user->nickname; ?></h2>
				</div>
			</a>
		</div><?php
		}
	}?>
	</div>

	<?php $user_query = new WP_User_Query( array( 'meta_key' => 'user_group', 'meta_value' => 'healthcare' ) );
	if ( ! empty( $user_query->results ) ) { ?>
	<div class="user-group">
		<h2> Category: Healthcare </h2>
	<?php foreach ( $user_query->results as $user ) { ?>
		<div class="user">
			<a href="<?php echo site_url(); ?>/author/<?php echo $user->user_login ?>">
				<div class="author-gravatar">
					<?php 
					$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.png';
					$email = $user->user_email;
					$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=140";?>
			    	<img src="<?php echo $grav_url; ?>" width="140" height="140" alt="" />
				</div>

				<div class="author-information">
					<h1><?php echo $user->display_name; ?></h1>
					<h2 class="author-information__role"><?php echo $user->nickname; ?></h2>
				</div>
			</a>
		</div><?php
		}
	}?>
	</div>

	<?php $user_query = new WP_User_Query( array( 'meta_key' => 'user_group', 'meta_value' => 'web' ) );
	if ( ! empty( $user_query->results ) ) { ?>
	<div class="user-group">
		<h2> Web Team </h2>
	<?php foreach ( $user_query->results as $user ) { ?>
		<div class="user">
			<a href="<?php echo site_url(); ?>/author/<?php echo $user->user_login ?>">
				<div class="author-gravatar">
					<?php 
					$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.png';
					$email = $user->user_email;
					$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=140";?>
			    	<img src="<?php echo $grav_url; ?>" width="140" height="140" alt="" />
				</div>

				<div class="author-information">
					<h1><?php echo $user->display_name; ?></h1>
					<h2 class="author-information__role"><?php echo $user->nickname; ?></h2>
				</div>
			</a>
		</div><?php
		}
	}?>
	</div>

	<?php $user_query = new WP_User_Query( array( 'meta_key' => 'user_group', 'meta_value' => 'visual' ) );
	if ( ! empty( $user_query->results ) ) { ?>
	<div class="user-group">
		<h2> Visuals Team </h2>
	<?php foreach ( $user_query->results as $user ) { ?>
		<div class="user">
			<a href="<?php echo site_url(); ?>/author/<?php echo $user->user_login ?>">
				<div class="author-gravatar">
					<?php 
					$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.png';
					$email = $user->user_email;
					$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=140";?>
			    	<img src="<?php echo $grav_url; ?>" width="140" height="140" alt="" />
				</div>

				<div class="author-information">
					<h1><?php echo $user->display_name; ?></h1>
					<h2 class="author-information__role"><?php echo $user->nickname; ?></h2>
				</div>
			</a>
		</div><?php
		}
	}?>
	</div>

	<?php $user_query = new WP_User_Query( array( 'meta_key' => 'user_group', 'meta_value' => 'marketing' ) );
	if ( ! empty( $user_query->results ) ) { ?>
	<div class="user-group">
		<h2> Marketing Team </h2>
	<?php foreach ( $user_query->results as $user ) { ?>
		<div class="user">
			<a href="<?php echo site_url(); ?>/author/<?php echo $user->user_login ?>">
				<div class="author-gravatar">
					<?php 
					$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.png';
					$email = $user->user_email;
					$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=140";?>
			    	<img src="<?php echo $grav_url; ?>" width="140" height="140" alt="" />
				</div>

				<div class="author-information">
					<h1><?php echo $user->display_name; ?></h1>
					<h2 class="author-information__role"><?php echo $user->nickname; ?></h2>
				</div>
			</a>
		</div><?php
		}
	}?>
	</div>

	<?php $user_query = new WP_User_Query( array( 'meta_key' => 'user_group', 'meta_value' => 'finance' ) );
	if ( ! empty( $user_query->results ) ) { ?>
	<div class="user-group">
		<h2> Finance Team </h2>
	<?php foreach ( $user_query->results as $user ) { ?>
		<div class="user">
			<a href="<?php echo site_url(); ?>/author/<?php echo $user->user_login ?>">
				<div class="author-gravatar">
					<?php 
					$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.png';
					$email = $user->user_email;
					$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=140";?>
			    	<img src="<?php echo $grav_url; ?>" width="140" height="140" alt="" />
				</div>

				<div class="author-information">
					<h1><?php echo $user->display_name; ?></h1>
					<h2 class="author-information__role"><?php echo $user->nickname; ?></h2>
				</div>
			</a>
		</div><?php
		}
	}?>
	</div>

	<?php $user_query = new WP_User_Query( array( 'meta_key' => 'user_group', 'meta_value' => 'hr' ) );
	if ( ! empty( $user_query->results ) ) { ?>
	<div class="user-group">
		<h2> Operations &amp; Admin </h2>
	<?php foreach ( $user_query->results as $user ) { ?>
		<div class="user">
			<a href="<?php echo site_url(); ?>/author/<?php echo $user->user_login ?>">
				<div class="author-gravatar">
					<?php 
					$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.png';
					$email = $user->user_email;
					$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=140";?>
			    	<img src="<?php echo $grav_url; ?>" width="140" height="140" alt="" />
				</div>

				<div class="author-information">
					<h1><?php echo $user->display_name; ?></h1>
					<h2 class="author-information__role"><?php echo $user->nickname; ?></h2>
				</div>
			</a>
		</div><?php
		}
	}?>
	</div>

</div>

<?php get_footer(); ?>