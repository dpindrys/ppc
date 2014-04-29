<?php
/*
Template Name: Vendors Page
*/
get_header(); ?>
<?php
  //  Get Parent Category Type
  $catID[0] = get_cat_id('agriculture');
  $catID[1] = get_cat_id('golf');
  $catID[2] = get_cat_id('irrigation');
  $catID[3] = get_cat_id('waterworks');
  $active_page_name = 'all-equipments';
  include(locate_template('partials/products-index.php'));
?>