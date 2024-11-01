<?php
/*
Plugin Name: WC Shop Title
Plugin URI: https://wordpres.org/extend/plugins/wc-shop-title
Description: Uses the title given to the WooCommerce shop page as the actual title instead of "Products."
Author: Bill Robbins
Author URI: https://justabill.blog
WC tested up to: 3.6
WC requires at least: 3.3
Version: 1.0.0
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/


function ijab_wc_easy_shop_title( $title ) {

    if ( is_shop() && isset( $title['title'] ) ) {
        $title['title'] = apply_filters( 'the_title', get_the_title( get_option( 'woocommerce_shop_page_id' ) ) );
    }

    return $title;
    
}
add_filter( 'document_title_parts', 'ijab_wc_easy_shop_title' );