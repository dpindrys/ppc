<?php
/*
Template Name: Irrigation Page
*/
get_header(); ?>
<?php
	//  Get Parent Category Type
  $catID[0] = get_cat_id('irrigation');
  if($catID[0] == 0) $catID = [];
  $active_page_name = 'irrigation';
  include(locate_template('partials/products-index.php'));
?>
