<?php 
/**
* Menu Archive
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

if(have_posts()) : while(have_posts()) : the_post();

	nectar_page_header($post->ID); 

endwhile; endif;

?>

<div class="container-wrap <?php echo ($fullscreen_header == true) ? 'fullscreen-blog-header': null; ?> <?php if($blog_type == 'std-blog-fullwidth' || $hide_sidebar == '1') echo 'no-sidebar'; ?>">

	<div class="container main-content menu">

		<?php
		$args = array( 'post_type' => 'menus', 'orderby' => 'menu_order', 'order'=> 'ASC' );
		$menuslist = get_posts( $args );
		foreach ( $menuslist as $post ) :
		  setup_postdata( $post ); ?> 
			<?php get_template_part( 'partials/menu' ); ?> 	
		<?php
		endforeach; 
		wp_reset_postdata();
		?>
		
	</div><!--/container-->

</div><!--/container-wrap-->
	
<?php get_footer(); ?>