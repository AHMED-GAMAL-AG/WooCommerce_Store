<?php
// no need to add child theme it is already added in the parent theme

// add_action('wp_enqueue_scripts', 'storefront_child_enqueue_styles');
// function storefront_child_enqueue_styles()
// {
//     $parent_handle = 'storefront-style'; // This is 'storefront-style' for the Storefront theme.
//     $theme = wp_get_theme();
//     wp_enqueue_style(
//         $parent_handle,
//         get_template_directory_uri() . '/style.css',
//         array(),  // if the parent theme code has a dependency, copy it to here
//         $theme->parent()->get('Version')
//     );
//     wp_enqueue_style(
//         'storefront-child-style',
//         get_stylesheet_uri(),
//         array($parent_handle),
//         $theme->get('Version') // this only works if you have Version in the style header
//     );
// }



/**
 * Set a minimum order amount for checkout
 */

function wc_minimum_order_amount()
{
    // Set this variable to specify a minimum order value
    $minimum = 25;
    if (WC()->cart->total < $minimum) {
        if (is_cart()) {
            wc_print_notice(
                sprintf(
                    __('Your current order total is %s — you must have an order with a minimum of %s to place your order ', 'storefront-child'),
                    wc_price(WC()->cart->total),
                    wc_price($minimum)
                ),
                'error'
            );
        } else {
            wc_add_notice(
                sprintf(
                    __('Your current order total is %s — you must have an order with a minimum of %s to place your order', 'storefront-child'),
                    wc_price(WC()->cart->total),
                    wc_price($minimum)
                ),
                'error'
            );
        }
    }
}
add_action('woocommerce_checkout_process', 'wc_minimum_order_amount');
add_action('woocommerce_before_cart', 'wc_minimum_order_amount');

/**
 * Add a new country to countries list
 */
add_filter('woocommerce_countries',  'wc_add_my_country');
function wc_add_my_country($countries)
{
    $new_countries = array(
        'NIRE'  => __('قوالا لمبور', 'storefront-child'),
    );

    return array_merge($countries, $new_countries);
}

add_filter('woocommerce_continents', 'wc_add_my_country_to_continent');
function wc_add_my_country_to_continent($continents)
{
    $continents['EU']['countries'][] = __('NIRE', 'storefront-child');
    return $continents;
}

require get_stylesheet_directory() . '/inc/wcp-online-summit.php';
