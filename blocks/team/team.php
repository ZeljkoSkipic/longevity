<?php

$margin = get_field_object('margin');
$padding = get_field_object('padding');
$layout = get_field_object('layout');


$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

$class = 'il_block team';
if ( ! empty( $block['className'] ) ) {
    $class .= ' ' . $block['className'];
}
if ( ! empty( $cols ) ) {
    $class .=  ' ' . $cols['value'];
}
if ( ! empty( $tab_cols ) ) {
    $class .=  ' ' . $tab_cols['value'];
}
if ( ! empty( $mob_cols ) ) {
    $class .=  ' ' . $mob_cols['value'];
}
if ( ! empty( $margin ) ) {
    $class .=  ' ' . $margin['value'];
}

if ( ! empty( $padding) ) {
    $class .=  ' ' . $padding['value'];
}

if ( ! empty( $layout ) ) {
    $class .=  ' ' . $layout['value'];
}
$member_class = 'member';
if ( ! empty( $block['className'] ) ) {
    $member_class .= ' ' . $block['className'];
}

 ?>
<div <?php echo $anchor; ?> class="<?php echo $class ?>">
<div class="il_block_team_inner">
<?php get_template_part('components/background');

	if ( have_rows('team_row') ) : ?>
	<div class="container">
		<?php get_template_part('components/intro'); ?>
	</div>
	<?php while( have_rows('team_row') ) : the_row();
	if ( have_rows('member') ) : ?>

		<div class="il_team_row">
			<?php $item=1; ?>
			<?php while( have_rows('member') ) : the_row();
				$image = get_sub_field('image');
				$size = 'full';
				$name = get_sub_field('name');
				$position = get_sub_field('position');
				$description_intro = get_sub_field('description_intro');
				$description = get_sub_field('description');
				$profession = get_sub_field('profession');
				?>
					<div class="il_team_member il_member_<?php echo $item; ?>">
						<?php if( $image ) { ?>
							<figure class="member_image">
								<?php echo wp_get_attachment_image( $image, $size ); ?>
							</figure>
						<?php } ?>
						<h4 class="member_name"><?php echo $name; ?></h4>
						<span class="member_position"><?php echo $position ?></span>
					</div>
					<div class="member_text member_text_<?php echo $item; ?>">
						<div class="member_text_inner container">
						<span class="close"><svg width="34" height="36" viewBox="0 0 34 36" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0.958984 35.462H9.35899L17.159 23.362L24.959 35.462H33.459L21.909 17.612L32.759 0.612035H24.209L17.209 11.712L10.159 0.612035H1.55898L12.459 17.562L0.958984 35.462Z" fill="#0BCBD7"/>
						</svg>
						</span>
							<h2 class="member_box_name tg_title_1 tg_light"><?php echo $name; ?></h2>
							<div class="member_description">
								<h4 class="member_profession"><?php echo $profession; ?></h4>
								<div class="description_intro">
									<?php echo $description_intro; ?>
								</div>
								<?php echo $description; ?>
							</div>
						</div>
					</div>
					<?php $item++;?>
			<?php endwhile; ?>
		</div>
		<?php endif;
		if ( have_rows('member2') ) : ?>

		<div class="il_team_row">
			<?php $item=1; ?>
			<?php while( have_rows('member2') ) : the_row();
				$image = get_sub_field('image');
				$size = 'full';
				$name = get_sub_field('name');
				$position = get_sub_field('position');
				$description_intro = get_sub_field('description_intro');
				$description = get_sub_field('description');
				$profession = get_sub_field('profession');
				?>
					<div class="il_team_member il_member_<?php echo $item; ?>">
						<?php if( $image ) { ?>
							<figure class="member_image">
								<?php echo wp_get_attachment_image( $image, $size ); ?>
							</figure>
						<?php } ?>
						<h4 class="member_name"><?php echo $name; ?></h4>
						<span class="member_position"><?php echo $position ?></span>
					</div>
					<div class="member_text member_text_<?php echo $item; ?>">
						<div class="member_text_inner container">
						<span class="close"><svg width="34" height="36" viewBox="0 0 34 36" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M0.958984 35.462H9.35899L17.159 23.362L24.959 35.462H33.459L21.909 17.612L32.759 0.612035H24.209L17.209 11.712L10.159 0.612035H1.55898L12.459 17.562L0.958984 35.462Z" fill="#0BCBD7"/>
						</svg>
						</span>
							<h2 class="member_box_name tg_title_1 tg_light"><?php echo $name; ?></h2>
							<div class="member_description">
								<h4 class="member_profession"><?php echo $profession; ?></h4>
								<div class="description_intro">
									<?php echo $description_intro; ?>
								</div>
								<?php echo $description; ?>
							</div>
						</div>
					</div>
					<?php $item++;?>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
		<?php endwhile; ?>
		<?php endif; ?>
</div>
</div>
