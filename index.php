<?php 
/*
Plugin Name:  Gravity Forms Disable Entries
Plugin URI:   https://github.com/ojdon/gravity-forms-disable-entries/new/master
Description:  Disables the entry storage functionality in Gravity Forms for WordPress.
Version:      20180604
Author:       Ollie Reardon 
Author URI:   https://ojdon.github.io
License:      MIT
License URI:  https://opensource.org/licenses/MIT
*/

// Disable all form entry submissions
add_action( 'gform_after_submission', 'remove_form_entry' );
function remove_form_entry( $entry ) {
    GFAPI::delete_entry( $entry['id'] );
}
