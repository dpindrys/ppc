<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php'); 

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// HM Custom Meta Boxes
require_once( 'Custom-Meta-Boxes/custom-meta-boxes.php' );

// add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );

// function cmb_sample_metaboxes( array $meta_boxes ) {

//     $meta_boxes[] = array(
//         'title' => 'Vendor name',
//         'pages' => 'page',
//         'show_on' => array( 'id' => array( 1 ) ),
//         'context'    => 'normal',
//         'priority'   => 'high',
//         'fields' => $fields // an array of fields - see individual field documentation.
//     );

//     return $meta_boxes; 
// }

// Custom Sort Functions
function cmp_name($a, $b)
{
    return strcmp($a->name, $b->name);
}
function cmp_post_title($a, $b)
{
    return strcmp($a->post_title, $b->post_title);
}

?>