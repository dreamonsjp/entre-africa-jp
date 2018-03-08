<?php get_header(); ?>

<?php // Get Theme Options from Database
	$theme_options = dynamicnews_theme_options();
if(is_author()) {
    $userData = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));

}
?>

	<div id="wrap" class="container clearfix">
		
		<section id="content" class="primary" role="main">
		
			<?php if ( function_exists( 'themezee_breadcrumbs' ) ) themezee_breadcrumbs(); ?>
			
			<header class="page-header" <?php if(is_author()) echo 'style="min-height: 160px"'?>>

<?php
if(is_author()) {
    $userData = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));

    echo '<div class="writer-profile">';
        echo '<figure class="eyecatch">';
	    $face_image = $userData->face?$userData->face:'/wp-content/uploads/2016/05/cropped-Dollarphotoclub_74502588-1-300x300.jpg';
	    echo '<a href="'.get_bloginfo(url).'/author/'.$userData->user_login.'">';
	        echo '<img src="'.$face_image.'" width="150" height="150" alt="'.$userData->display_name.'" class="avatar avatar-150 photo">';
	    echo '</a>';
        echo '</figure>';
    echo '</div>';
}
?>

				<h1 class="archive-title"><?php echo $userData->display_name;?></h1>
				<div class="archive-description"><?php echo $userData->description;?></div>

<?php if(is_author()): ?>
  <?php if($userData->facebook):?>
  <span>
    <a href="https://www.facebook.com/<?php echo $userData->facebook ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/socialmedia/facebook.png" /></a>
  </span><?php endif; // facebook ?>
  <?php if($userData->twitter):?>
  <span>
    <a href="https://twitter.com/<?php echo $userData->twitter ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/socialmedia/twitter.png" /></a>
  </span><?php endif; // twitter ?>
  <?php if($userData->google):?>
  <span>
    <a href="https://plus.google.com/+<?php echo $userData->google ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/socialmedia/google_plus.png" /></a>
  </span><?php endif; // google ?>
  <?php if($userData->instagram):?>
  <span>
    <a href="https://www.instagram.com/<?php echo $userData->instagram ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/images/socialmedia/instagram.png" /></a>
  </span><?php endif; // twitter ?>
<?php endif; //is_author() ?>
			</header>
			
<?php if(is_author() && $userData->instagram_feed_wd): ?>
  <?php echo wdi_feed(array('id'=>$userData->instagram_feed_wd)); ?>
<?php endif; ?>
			<?php if (have_posts()) : while (have_posts()) : the_post();
			
				get_template_part( 'content', $theme_options['posts_length'] );
			
				endwhile;
				
			dynamicnews_display_pagination();

			endif; ?>
			
		</section>
		
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>
