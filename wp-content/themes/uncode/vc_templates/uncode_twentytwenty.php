<?php
$media_before = $media_after = $el_id = $el_class = '';
extract(shortcode_atts(array(
	'media_before' => '',
	'media_after' => '',
	'el_id' => '',
	'el_class' => '',
) , $atts));

if ( $el_id !== '' ) {
	$el_id = ' id="' . esc_attr( trim( $el_id ) ) . '"';
} else {
	$el_id = '';
}

global $adaptive_images, $adaptive_images_async;

$el_class = $this->getExtraClass($el_class);
$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'uncode-twentytwenty ' . $el_class, $this->settings['base'], $atts);

if ($media_before === '' || $media_after === '') {
	return;
}

$media_attributes_before = uncode_get_media_info($media_before);
$media_before_metavalue = unserialize($media_attributes_before->metadata);
if (empty($media_before_metavalue)) {
	$media_before_metavalue['width'] = $media_before_metavalue['height'] = 1;
}
$resized_image_before = uncode_resize_image($media_attributes_before->id, $media_attributes_before->guid, $media_attributes_before->path, $media_before_metavalue['width'], $media_before_metavalue['height'], 12, null, false);
$img_data_before = '';
if ($adaptive_images === 'on' && $adaptive_images_async === 'on') {
	$img_class_before = ' class="img-responsive adaptive-async"';
	$img_data_before = ' data-uniqueid="' . esc_attr( $media_before.'-'.uncode_big_rand() ) . '" data-guid="' . esc_attr( $media_attributes_before->guid ) . '" data-path="' . esc_attr( $media_attributes_before->path ) . '" data-width="' . esc_attr( $media_before_metavalue['width'] ) . '" data-height="' . esc_attr( $media_before_metavalue['height'] ) . '" data-singlew="12" data-singleh="null" data-crop=""';
} else {
	$img_class_before = '';
	$img_data_before = '';
}

$media_attributes_after = uncode_get_media_info($media_after);
$media_after_metavalue = unserialize($media_attributes_after->metadata);
if (empty($media_after_metavalue)) {
	$media_after_metavalue['width'] = $media_after_metavalue['height'] = 1;
}
$resized_image_after = uncode_resize_image($media_attributes_after->id, $media_attributes_after->guid, $media_attributes_after->path, $media_after_metavalue['width'], $media_after_metavalue['height'], 12, null, false);
$img_data_after = '';
if ($adaptive_images === 'on' && $adaptive_images_async === 'on') {
	$img_class_after = ' class="img-responsive adaptive-async"';
	$img_data_after = ' data-uniqueid="' . esc_attr( $media_after.'-'.uncode_big_rand() ) . '" data-guid="' . esc_attr( $media_attributes_after->guid ) . '" data-path="' . esc_attr( $media_attributes_after->path ) . '" data-width="' . esc_attr( $media_after_metavalue['width'] ) . '" data-height="' . esc_attr( $media_after_metavalue['height'] ) . '" data-singlew="12" data-singleh="null" data-crop=""';
} else {
	$img_class_after = '';
	$img_data_after = '';
}

$alt_before = isset( $media_attributes_before->alt ) && $media_attributes_before->alt !== '' ? ' alt="' . esc_attr( $media_attributes_before->alt ) . '"' : '';
$alt_after = isset( $media_attributes_after->alt ) && $media_attributes_after->alt !== '' ? ' alt="' . esc_attr( $media_attributes_after->alt ) . '"' : '';

?>

<div class="<?php echo esc_attr( $css_class ); ?>" <?php echo uncode_switch_stock_string( $el_id ); ?>>
	<div class="twentytwenty-container">
		<img src="<?php echo esc_url( $resized_image_before['url'] ); ?>"  width="<?php echo esc_attr( $resized_image_before['width'] ); ?>" height="<?php echo esc_attr( $resized_image_before['height'] ); ?>"<?php echo wp_kses_post( $img_class_before.$img_data_before.$alt_before ); ?>>
		<img src="<?php echo esc_url( $resized_image_after['url'] ); ?>" width="<?php echo esc_attr( $resized_image_after['width'] ); ?>" height="<?php echo esc_attr( $resized_image_after['height'] ); ?>"<?php echo wp_kses_post( $img_class_after.$img_data_after.$alt_after ); ?>>
	</div>
</div>
