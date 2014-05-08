<?php
/*
Template Name: Waterworks Page
*/
get_header(); ?>
<a href="#" data-dropdown="drop1" class="show-for-small-only button dropdown">Agriculture</a><br>
<ul id="drop1" data-dropdown-content class="f-dropdown">
  <li><a href="#">All Products</a></li>
  <li><a href="#">Agriculture</a></li>
  <li><a href="#">Golf</a></li>
  <li><a href="#">Irrigation</a></li>
  <li><a href="#">Waterworks</a></li>
</ul>
<?php
  //  Get Parent Category Type
  $catID[0] = get_cat_id('waterworks');
  if($catID[0] == 0) $catID = [];
  $active_page_name = 'waterworks';
  include(locate_template('partials/products-index.php'));
?>