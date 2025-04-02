<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$date_format = newsx_get_option('date_format');
$date_string = '';

if ( 'default' == $date_format ) {
	$date_string = date_i18n( 'l, F j, Y' );
} elseif ( 'wordpress' == $date_format ) {
	$date_string = date_i18n( get_option( 'date_format' ) );
}

// Get Args
$is_duplicate = isset($args['is_duplicate']) && $args['is_duplicate'];
$class = $is_duplicate ? ' newsx-duplicate-element' : '';

echo '<div class="newsx-date-and-time'. esc_attr($class) .'">';
	echo newsx_customizer_edit_button_markup('hd_date_and_time');
	echo '<span>'. esc_html( $date_string ) .'</span>';
echo '</div>';
