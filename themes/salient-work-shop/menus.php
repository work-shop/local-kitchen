<?php 
/**
* Template Name: Menu Page
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

$menus = get_field_object('menu_picker');

if(have_posts()) : while(have_posts()) : the_post();

	nectar_page_header($post->ID); 

endwhile; endif;

?>

<div class="menu">
			
	<?php
	
	$args = array( 'post_type' => 'menus', 'orderby' => 'menu_order', 'order'=> 'ASC' );
	$menuslist = get_posts( $args );
	foreach ( $menuslist as $post ) :
	  setup_postdata( $post ); ?> 
		<?php get_template_part( 'partials/menu' ); ?> 	
	<?php
	endforeach; 
	wp_reset_postdata();

	the_content();

	?>	
		
</div>
	
<?php get_footer(); ?>