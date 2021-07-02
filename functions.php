add_filter( 'woocommerce_checkout_fields' , 'codeithub_change_address_input_type', 10, 1 );
 
function codeithub_change_address_input_type( $fields ) {
$fields['billing']['billing_address_1']['type'] = 'textarea';
return $fields;
}
