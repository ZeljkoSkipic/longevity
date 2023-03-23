<?php

$cols = get_field_object('columns');
$tab_cols = get_field_object('tab_columns');
$mob_cols = get_field_object('mob_columns');

$margin = get_field_object('margin');
$padding = get_field_object('padding');


$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class = 'il_block il_logos';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}
if ( ! empty( $margin ) ) {
    $class .=  ' ' . $margin['value'];
}

if ( ! empty( $padding ) ) {
    $class .=  ' ' . $padding['value'];
}


 ?>
<div <?php echo $anchor; ?> class="<?php echo $class ?>">
<?php get_template_part('components/background'); ?>
	<div class="container">
		<?php get_template_part('components/intro'); ?>
			<?php if ( have_rows('images_partners') ) : ?>
				<h3 class="intro_title " style="color: var(--color-1);">Partners</h3>
				<div class="il_logos_inner">
					<?php while( have_rows('images_partners') ) : the_row();
						$image = get_sub_field('image_partner');

						$url = $image['url'];
						$title = $image['title'];
						$alt = $image['alt'];
						$caption = $image['caption']; ?>
						<div class="column">
							<figure class="il_logo">
								<img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" />
							</figure>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php if ( have_rows('images_sponsors') ) : ?>
				<h3 class="intro_title " style="color: var(--color-2);">Sponsors</h3>
				<div class="il_logos_inner">
					<?php while( have_rows('images_sponsors') ) : the_row();
						$image = get_sub_field('image_sponsor');

						$url = $image['url'];
						$title = $image['title'];
						$alt = $image['alt'];
						$caption = $image['caption']; ?>
						<div class="column">
							<figure class="il_logo">
								<img src="<?php echo esc_url($url); ?>" alt="<?php echo esc_attr($alt); ?>" />
							</figure>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
	</div>
</div>
