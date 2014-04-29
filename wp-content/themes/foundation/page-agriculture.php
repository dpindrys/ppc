<?php
/*
Template Name: Agriculture Page
*/
get_header(); ?>
<?php
  //  Get Parent Category Type
  $catID[0] = get_cat_id('agriculture');
  if($catID[0] == 0) $catID = [];
  $active_page_name = 'agriculture';
  include(locate_template('partials/products-index.php'));
?>