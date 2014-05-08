<?php
/*
Template Name: Vendors Page
*/
get_header(); ?>
<a href="#" data-dropdown="drop1" class="show-for-small-only button dropdown">All Products</a><br>
<ul id="drop1" data-dropdown-content class="f-dropdown">
  <li><a href="#">All Products</a></li>
  <li><a href="../agriculture">Agriculture</a></li>
  <li><a href="#">Golf</a></li>
  <li><a href="#">Irrigation</a></li>
  <li><a href="#">Waterworks</a></li>
</ul>
<?php
  //  Get Parent Category Type
  $catID[0] = get_cat_id('agriculture');
  $catID[1] = get_cat_id('golf');
  $catID[2] = get_cat_id('irrigation');
  $catID[3] = get_cat_id('waterworks');
  $active_page_name = 'all-equipments';
  include(locate_template('partials/products-index.php'));
?>