<?php
/*
Template Name:Awardeeds
*/
?>

<?php get_header(); ?>

	<div id="wrap" class="container clearfix">
		
		<section id="content" class="primary" role="main">
		
		<?php if ( function_exists( 'themezee_breadcrumbs' ) ) themezee_breadcrumbs(); ?>
			

	<div id="post-17" class="post-17 page type-page status-publish hentry">
				
	<h1 class="page-title">支援先</h1>
		<div class="entry clearfix">

<div class="writers">
<h2>2017</h2>
<?php
$users =get_users( array('include'=>array(6,22,26,10),'orderby'=>'meta_value', 'meta_key'=>'first_name','order'=>ASC) );
foreach($users as $user):
    $uid =  $user->ID;
    if($uid <= 3) continue;
    $userData = get_userdata($uid);
    echo '<div class="writer-profile">';
        echo '<figure class="eyecatch">';
        //echo get_avatar( $uid ,300 );
	    $face_image = $userData->face?$userData->face:'/wp-content/uploads/2016/05/cropped-Dollarphotoclub_74502588-1-300x300.jpg';
	    echo '<a href="'.get_bloginfo(url).'/author/'.$userData->user_login.'">';
	    echo '<img src="'.$face_image.'" width="150" height="150" alt="'.$userData->display_name.'" class="avatar avatar-150 photo">';
            echo '<p class="name">'.$user->display_name.'</p>';
	    echo '</a>';
        echo '</figure>';
    echo '</div>';
endforeach;
?>
</div>
<div class="writers">
<h2>2016</h2>
<?php
$users =get_users( array('include'=>array(12,7,18),'orderby'=>'meta_value', 'meta_key'=>'first_name','order'=>ASC) );
foreach($users as $user):
    $uid =  $user->ID;
    if($uid <= 3) continue;
    $userData = get_userdata($uid);
    echo '<div class="writer-profile">';
        echo '<figure class="eyecatch">';
        //echo get_avatar( $uid ,300 );
            $face_image = $userData->face?$userData->face:'/wp-content/uploads/2016/05/cropped-Dollarphotoclub_74502588-1-300x300.jpg';
            echo '<a href="'.get_bloginfo(url).'/author/'.$userData->user_login.'">';
            echo '<img src="'.$face_image.'" width="150" height="150" alt="'.$userData->display_name.'" class="avatar avatar-150 photo">';
            echo '<p class="name">'.$user->display_name.'</p>';
            echo '</a>';
        echo '</figure>';
    echo '</div>';
endforeach;
?>
</div>

		
		</div>
	</div>
<?php if (have_posts()) : while (have_posts()) : the_post();
	get_template_part( 'content', 'page' );
?>
<?php
			endwhile;

		endif; ?>
		
		<?php //comments_template(); ?>
		
		</section>
		
		<?php get_sidebar(); ?>
		
	</div>
	
<?php get_footer(); ?>
