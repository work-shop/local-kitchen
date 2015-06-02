<?php

	$menu_sections = get_field_object('menu_sections');
	
	$img =  wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );

?>


<article>
	<header>
		<h1><?php echo the_title(); ?></h1>
		<div class="photo" style="background-image: url( '<?php echo $img[0] ?>' )"></div>
	</header>

	<?php foreach ($menu_sections['value'] as $section) { ?>
	<section>

		<h2><?php echo $section['menu_section_title']; ?></h2>
		<?php foreach ($section['menu_section_dishes'] as $dish) { 
			$dish_name = $dish['menu_section_dish_name'];
			$dish_price = $dish['menu_section_dish_price'];
			$dish_description = $dish['menu_section_dish_description'];
		?>
			<div class="menu-item">
				<h3><?php echo $dish_name; ?> <span class="numerals"><?php if ( $dish_price ) echo $dish_price . '.' ?></span></h3>
				<p><?php echo $dish_description; ?></p>
			</div>
		<?php } ?>

	</section>
	<?php } ?>
</article>