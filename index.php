<?php

/*
Plugin Name: Remove Protected
Description: This small plugin will remove "Protected: " from your title names on pages that are password protected.
Author: Aubrey Portwood
Author URI: http://aubreypwd.com/
Version: 1.0
*/

add_filter( 'private_title_format', 'aubreypwd_remove_protected' );
add_filter( 'protected_title_format', 'aubreypwd_remove_protected' );
 
function aubreypwd_remove_protected( $format ) {
    return '%s';
}

?>