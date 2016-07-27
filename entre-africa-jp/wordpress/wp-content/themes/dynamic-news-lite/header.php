<!DOCTYPE html><!-- HTML 5 -->
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php // Get Theme Options from Database
	$theme_options = dynamicnews_theme_options();
?>

<div id="wrapper" class="hfeed">
	
	<div id="topnavi-wrap">
		<?php locate_template('/inc/top-navigation.php', true); ?>
	</div>
		
	<div id="header-wrap">
	
		<header id="header" class="container clearfix" role="banner">

			<div id="logo" class="clearfix">
			
				<?php dynamicnews_site_logo(); ?>
				<?php dynamicnews_site_title(); ?>
				
				<?php // Display Tagline on header if activated
				if ( isset($theme_options['header_tagline']) and $theme_options['header_tagline'] == true ) : ?>			
					<h2 class="site-description"><?php echo bloginfo('description'); ?></h2>
				<?php endif; ?>
			
			</div>
			<?php if($post->post_name=='top') :?>
			<div id="header-content" class="clearfix">
				<?php get_template_part('inc/header-content'); ?>
			</div>
			<div id="header-copytext" class="clearfix">
				<div class="text-catch clearfix">
					<img src="<?php echo get_template_directory_uri(); ?>/images/text_catch.png" class="wp-post-image" alt="アフリカには、未来がある。" />
				</div>
				<div class="text-sub clearfix">
					<img src="<?php echo get_template_directory_uri(); ?>/images/text_sub.png" class="wp-post-image" alt="21世紀において最も人口が増えて成長の可能性があるアフリカ。そのアフリカの社会的課題を解決しながら持続的成長を支えることにチャレンジしている日本人の起業家たちがいる。" />
				</div>
			</div>
			<?php endif;?>
		</header>
	
	</div>
	
	<?php // Display Custom Header Image
		if($post->post_name == 'top') :
			dynamicnews_display_custom_header();
		else :
		?>
		<div style="min-height:170px; background-color:#fff;"></div>
		<?php 
		endif;
	?>
	
	<div id="navi-wrap">
		<nav id="mainnav" class="container clearfix" role="navigation">
			<?php 
				// Get Navigation out of Theme Options
				wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_id' => 'mainnav-menu', 'echo' => true, 'fallback_cb' => 'dynamicnews_default_menu', 'before' => '', 'after' => '', 'link_before' => '', 'link_after' => '', 'depth' => 0));
			?>
		</nav>
	</div>
	