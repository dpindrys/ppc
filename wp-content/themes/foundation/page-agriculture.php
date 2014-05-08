<?php
/*
Template Name: Agriculture Page
*/
get_header(); ?>
<a href="#" data-dropdown="drop1" class="show-for-small-only button dropdown">Agriculture</a><br>
<ul id="drop1" data-dropdown-content class="f-dropdown">
  <li><a href="../">All Products</a></li>
  <li><a href="../agriculture">Agriculture</a></li>
  <li><a href="../golf">Golf</a></li>
  <li><a href="../irrigation">Irrigation</a></li>
  <li><a href="../waterworks">Waterworks</a></li>
</ul>
<?php
  //  Get Parent Category Type
  $catID[0] = get_cat_id('agriculture');
  if($catID[0] == 0) $catID = [];
  $active_page_name = 'agriculture';
  include(locate_template('partials/products-index.php'));
?>