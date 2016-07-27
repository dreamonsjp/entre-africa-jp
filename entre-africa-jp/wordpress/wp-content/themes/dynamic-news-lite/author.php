<?php
/*
Template Name:Challengers
*/
?>

<?php get_header(); ?>

	<div id="wrap" class="container clearfix">
		
		<section id="content" class="primary" role="main">
		
		<?php if ( function_exists( 'themezee_breadcrumbs' ) ) themezee_breadcrumbs(); ?>

<?php // Profile ?>
<?php $user_data = get_userdata($author); ?>
<div class="post-1 post type-post status-publish format-standard hentry category-achievement category-activity-report category-article category-1">
    <h1 class="page-title">
        <?php printf( $user_data->display_name, '<span class="vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( "ID" ) ) ) . '" title="' . esc_attr( get_the_author() ) . '" rel="me">' . get_the_author() . '</a></span>' ); ?>
    </h1>
<div id="meta-status-badge-container" id="item-header">
	<img src="<?php echo sprintf('%s',$user_data->face?$user_data->face:'/wp-content/uploads/2016/05/cropped-Dollarphotoclub_74502588-1-300x300.jpg') ?>" width="150" height="150" alt="<?php echo $user_data->display_name ?>" class="avatar avatar-150 photo">
	<ul id="user-meta">
		<li id="user-company">
			<div class="dashicons dashicons-portfolio"></div> <?php echo $user_data->display_name?>
		</li>

		<?php if ($user_data->area):?>
		<li id="user-location">
			<div class="dashicons dashicons-location-alt"></div> <?php echo $user_data->area?>
		</li>
		<?php endif;?>

		<?php if ($user_data->url):?>
		<li id="user-website">
			<div class="dashicons dashicons-admin-links"></div> <a href="<?php echo $user_data->url?>" rel="nofollow"><?php echo 'ブログ'?></a>
		</li>
		<?php endif;?>

<div class="profile"><?php echo nl2br(get_the_author_meta('user_description', $author)) ?></div>
		<?php if ($user_data->profile):?>
		<div><?php echo $user_data->profile ?></div>	
		<?php endif;?>

		<ul id="user-social-media-accounts">
			<!-- this will be populated with an AJAX request after the page has loaded -->
			<?php if ($user_data->facebook):?>
			<li><a href="https://www.facebook.com/<?php echo $user_data->facebook?>" target="_blank">
				<div class="genericon genericon-facebook" title="facebook"></div>
			</a></li>  
			<?php endif;?>
			<?php if ($user_data->twitter):?>
			<li><a href="http://twitter.com/<?php echo $user_data->twitter?>" target="_blank">
				<div class="genericon genericon-twitter" title="twitter"></div>
			</a></li>  
			<?php endif;?>
			<?php if ($user_data->instagram):?>
			<li><a href="http://instagram.com/<?php echo $user_data->instagram?>" target="_blank">
				<div class="genericon genericon-instagram" title="instagram"></div>
			</a></li>  
			<?php endif;?>
			<?php if ($user_data->google):?>
			<li><a href="http://www.youtube.com/user/<?php echo $user_data->google?>" target="_blank">
				<div class="genericon genericon-youtube" title="youtube"></div>
			</a></li>  
			<?php endif;?>
			
		</ul>
	</ul>
	<!-- #user-meta -->
</div>
<?php /*
<div class="archive-meta type-post">
<?php
echo $user_data->last_name . ' '. $user_data->first_name . "<br />";
//echo sprintf('<a href="%s" target="_blank">%s<a>', $user_data->user_url, 'URL') . "<br />";
echo $user_data->description;
if ($user_data->twitter) {
  echo $user_data->twitter . "<br />";
}
if ($user_data->facebook) {
  echo $user_data->facebook . "<br />";
}
if ($user_data->instagram) {
  echo $user_data->instagram . "<br />";
}
?>
</div>
*/?>
</div>

<?php // Instagram Feeds
if ($user_data->instagram_feed_wd) {
  echo wdi_feed(array('id'=>$user_data->instagram_feed_wd)); 
}
?>
			
<?php // Post Archives ?>
<?php if($posts) : the_post(); ?>
<?php rewind_posts(); ?>
<?php endif;?>

		<?php if (have_posts()) : while (have_posts()) : the_post();

			get_template_part( 'content', 'page' );

			endwhile;

		endif; ?>
		
		<?php //comments_template(); ?>
		
		</section>
		
		<?php get_sidebar(); ?>
		
	</div>
	
<?php get_footer(); ?>
