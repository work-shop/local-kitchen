<?php
	$menu_sections = get_field_object('menu_sections');
?>

<article>
	<header>
		<h1><?php echo the_title(); ?></h1>
		<?php the_post_thumbnail(); ?>
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
				<h3><?php echo $dish_name; ?> <span class="numerals"><?php echo $dish_price; ?></span></h3>
				<p><?php echo $dish_description; ?></p>
			</div>
		<?php } ?>

	</section>
	<?php } ?>
</article>