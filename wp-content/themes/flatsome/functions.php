<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
// code trang thanh toán
add_filter( 'woocommerce_checkout_fields' , 'custom_checkout_form' );
function custom_checkout_form( $fields ) {
   unset($fields['billing']['billing_postcode']); //Ẩn postCode
 unset($fields['billing']['billing_state']); //Ẩn bang hạt
   unset($fields['billing']['billing_country']);// Ẩn quốc gia
    unset($fields['billing']['billing_address_2']); //billing_company
    unset($fields['billing']['billing_company']);
   unset($fields['billing']['billing_last_name']);
   unset($fields['billing']['order_comments']);// Ẩn quốc gia
   unset($fields['billing']['billing_city']); //Ẩn select box chọn thành phố
 unset($fields['billing']['billing_email']); //Ẩn select box chọn thành phố
     $fields['billing']['billing_first_name']['placeholder'] = "Họ và tên";
     $fields['billing']['billing_phone']['placeholder'] = "Số điện thoại";
    return $fields;
}
function custom_checkout_field_label( $fields ) {
    $fields['address_1']['label'] = 'Địa chỉ giao sản phẩm';
    $fields['first_name']['label'] = 'Tên';
    return $fields;
}
// Bỏ bắt buộc điền mail trong trang thanh toán

add_filter( 'woocommerce_billing_fields', 'filter_billing_fields', 20, 1 );
function filter_billing_fields( $billing_fields ) {
    // Only on checkout page
    if( ! is_checkout() ) return $billing_fields;

	$billing_fields['billing_email']['required'] = false;
	$billing_fields['billing_company']['required'] = false;
	$billing_fields['billing_city']['required'] = false;
	$billing_fields['billing_address_2']['required'] = false;
	$billing_fields['billing_state']['required'] = false;
	$billing_fields['billing_postcode']['required'] = false;
	$billing_fields['billing_last_name']['required'] = false;
    return $billing_fields;
}
