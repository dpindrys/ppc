<?php
/*
Template Name: Waterworks Page
*/
get_header(); ?>

<?php
  //  Get Parent Category Type
  $catID[0] = get_cat_id('waterworks');
  if($catID[0] == 0) $catID = [];
  $active_page_name = 'waterworks';
  include(locate_template('partials/products-index.php'));
?>