/**
 * Get a Views shortcode attribute's value.
 *
 * @param     string    $att    The slug of the attribute.
 *
 * @return    mixed             The shortcode attributes value.
 */
function wpv_get_shortcode_attribute( $att = '', $query_type = '', $object = '' ) {
    global $WP_Views;
    $attributes = reset( $WP_Views->view_shortcode_attributes );

    return isset( $attributes[ $att ] ) ? $attributes[ $att ] : '';
}

add_shortcode( 'wpv_get_shortcode_attribute', 'wpv_get_shortcode_attribute_shortcode' );
/**
 * Shortcode - get a single Views shortcode attribute value.
 *
 * Example: [wpv_view_shortcode_attribute att="target_att"]
 *
 * @param     string    $att    The slug of the attribute.
 *
 * @return    mixed             The shortcode attributes value.
 */
function wpv_get_shortcode_attribute_shortcode( $atts ) {
	extract( shortcode_atts( array(
		'att' => '',
		), $atts, 'wpv_view_shortcode_attribute' )
	);

	return trim( wpv_get_shortcode_attribute( $att ) );
}
