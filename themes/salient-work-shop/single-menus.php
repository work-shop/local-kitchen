<?php 
/**
* Template Name: Menu
*/

get_header(); 


global $nectar_theme_skin, $options;

$bg = get_post_meta($post->ID, '_nectar_header_bg', true);
$bg_color = get_post_meta($post->ID, '_nectar_header_bg_color', true);
$fullscreen_header = (!empty($options['blog_header_type']) && $options['blog_header_type'] == 'fullscreen' && is_singular('post')) ? true : false;
$fullscreen_class = ($fullscreen_header == true) ? "fullscreen-header full-width-content" : null;
$theme_skin = (!empty($options['theme-skin']) && $options['theme-skin'] == 'ascend') ? 'ascend' : 'default';
$hide_sidebar = (!empty($options['blog_hide_sidebar'])) ? $options['blog_hide_sidebar'] : '0'; 
$blog_type = $options['blog_type']; 

$menu_sections = get_field_object('menu_sections');


if(have_posts()) : while(have_posts()) : the_post();

	nectar_page_header($post->ID); 

endwhile; endif;



 if($fullscreen_header == true) { 

	if(empty($bg) && empty($bg_color)) { ?>
		<div class="not-loaded default-blog-title fullscreen-header" id="page-header-bg" data-alignment="center" data-parallax="0" data-height="450" style="height: 450px;">
			<div class="container">	
				<div class="row">
					<div class="col span_6 section-title blog-title">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<div class="author-section">
						 	<span class="meta-author vcard author">  
						 		<?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), 100 ); }?>
						 	</span> 
							 <div class="avatar-post-info">
							 	<span class="fn"><?php the_author_posts_link(); ?></span>
							 	<span class="meta-date date updated"><i><?php echo get_the_date(); ?></i></span>
							 </div>
						</div>
					</div>
				</div>
			</div>
			<a href="#" class="section-down-arrow"><i class="icon-salient-down-arrow icon-default-style"> </i></a>
		</div>
	<?php } 


	if($theme_skin != 'ascend') { ?>
		<div class="container">
			<div id="single-below-header" class="<?php echo $fullscreen_class; ?> custom-skip">
				<span class="meta-share-count"><i class="icon-default-style steadysets-icon-share"></i> <?php echo '<a href=""><span class="share-count-total">0</span> <span class="plural">'. __('Shares',NECTAR_THEME_NAME) . '</span> <span class="singular">'. __('Share',NECTAR_THEME_NAME) .'</span></a>'; nectar_blog_social_sharing(); ?> </span>
				<span class="meta-category"><i class="icon-default-style steadysets-icon-book2"></i> <?php the_category(', '); ?></span>
				<span class="meta-comment-count"><i class="icon-default-style steadysets-icon-chat-3"></i> <a href="<?php comments_link(); ?>"><?php comments_number( __('No Comments', NECTAR_THEME_NAME), __('One Comment ', NECTAR_THEME_NAME), __('% Comments', NECTAR_THEME_NAME) ); ?></a></span>
			</div><!--/single-below-header-->
		</div>

	<?php }

 } ?>





<div class="container-wrap <?php echo ($fullscreen_header == true) ? 'fullscreen-blog-header': null; ?> <?php if($blog_type == 'std-blog-fullwidth' || $hide_sidebar == '1') echo 'no-sidebar'; ?>">

	<div class="container main-content">
			
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

			<?php get_template_part( 'partials/menu' ); ?> 
		
		<?php endwhile; endif; ?>	


		<!--ascend only author/comment positioning-->
		<div class="row">

			<?php if($theme_skin == 'ascend' && $fullscreen_header == true) { ?>

			<div id="single-below-header" class="<?php echo $fullscreen_class; ?> custom-skip">
				<span class="meta-share-count"><i class="icon-default-style steadysets-icon-share"></i> <?php echo '<a href=""><span class="share-count-total">0</span> <span class="plural">'. __('Shares',NECTAR_THEME_NAME) . '</span> <span class="singular">'. __('Share',NECTAR_THEME_NAME) .'</span> </a>'; nectar_blog_social_sharing(); ?> </span>
				<span class="meta-category"><i class="icon-default-style steadysets-icon-book2"></i> <?php the_category(', '); ?></span>
				<span class="meta-comment-count"><i class="icon-default-style steadysets-icon-chat-3"></i> <a class="comments-link" href="<?php comments_link(); ?>"><?php comments_number( __('No Comments', NECTAR_THEME_NAME), __('One Comment ', NECTAR_THEME_NAME), __('% Comments', NECTAR_THEME_NAME) ); ?></a></span>
			</div><!--/single-below-header-->

			<?php }

			if($theme_skin == 'ascend') nectar_next_post_display(); ?>

			<?php if( !empty($options['author_bio']) && $options['author_bio'] == true && $theme_skin == 'ascend'){ 
						$grav_size = 80;
						$fw_class = 'full-width-section '; 
						$next_post = get_previous_post();
						$next_post_button = (!empty($options['blog_next_post_link']) && $options['blog_next_post_link'] == '1') ? 'on' : 'off';
					?>
						
						<div id="author-bio" class="<?php echo $fw_class; if(empty($next_post) || $next_post_button == 'off' || $fullscreen_header == false && $next_post_button == 'off') echo 'no-pagination'; ?>">
							<div class="span_12">
								<?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), $grav_size ); }?>
								<div id="author-info">
									<h3><span><?php if(!empty($options['theme-skin']) && $options['theme-skin'] == 'ascend') {  echo '<i>' . __('Author', NECTAR_THEME_NAME) . '</i>'; } else { _e('About', NECTAR_THEME_NAME); } ?></span> <?php the_author(); ?></h3>
									<p><?php the_author_meta('description'); ?></p>
								</div>
								<?php if(!empty($options['theme-skin']) && $options['theme-skin'] == 'ascend'){ echo '<a href="'. get_author_posts_url(get_the_author_meta( 'ID' )).'" data-hover-text-color-override="#fff" data-hover-color-override="false" data-color-override="#000000" class="nectar-button see-through-2 large">' . __("More posts by",NECTAR_THEME_NAME) . ' ' . get_the_author().' </a>'; } ?>
								<div class="clear"></div>
							</div>
						</div>
 
			 <?php } ?>


			  <?php if($theme_skin == 'ascend') { ?>

			 	 <div class="comments-section">
					   <?php comments_template(); ?>
				 </div>   

			 <?php } ?>

		</div>


	   <?php if($theme_skin != 'ascend') nectar_next_post_display(); ?>
		
	</div><!--/container-->

</div><!--/container-wrap-->
	
<?php get_footer(); ?>