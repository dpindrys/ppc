<?php
/*
Template Name: Golf Page
*/
get_header(); ?>
<?php
	//  Get Parent Category Type
  $catID[0] = get_cat_id('golf');
  if($catID[0] == 0) $catID = [];
  $active_page_name = 'golf';
  include(locate_template('partials/products-index.php'));
?>
