<?php
  $page_title = the_TITLE('','',false);
  // $page_title_lowercase = strtolower($page_title);
?>
<div class="row interior white toppadding1">
    <div class="medium-9 columns">
      
      <h1><?php echo $page_title; ?></h1>
      <hr>
      <p <?php post_class(); ?> id="post-<?php the_TITLE(); ?>">
        <?php while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; // End the loop ?>
      </p>
    </div>
    <div class="medium-3 columns">
      <ul class="side-nav hide-for-small-only">
        <li class="active-menu-for-<?php print_r($active_page_name); ?>" id="page-all-equipments">
          <a href="<?php bloginfo('url'); ?>/products/"> All Products </a>
        </li>
        <li class="active-menu-for-<?php print_r($active_page_name); ?>" id="page-agriculture">
          <a href="<?php bloginfo('url'); ?>/products/agriculture/"> Agriculture </a>
        </li>
        <li class="active-menu-for-<?php print_r($active_page_name); ?>" id="page-golf">
          <a href="<?php bloginfo('url'); ?>/products/golf/"> Golf </a>
        </li>
        <li class="active-menu-for-<?php print_r($active_page_name); ?>" id="page-irrigation">
          <a href="<?php bloginfo('url'); ?>/products/irrigation/">  Irrigation  </a>
        </li>
        <li class="active-menu-for-<?php print_r($active_page_name); ?>" id="page-waterworks">
          <a href="<?php bloginfo('url'); ?>/products/waterworks/"> Waterworks </a>
        </li>
      </ul>
		</div>
</div>

<div class="row interior white">
  <div class=" medium-12 columns">
    <div class="row toppadding1">
      <div class="medium-12 columns">
        
        <?php
  				if(count($catID) > 0) {
  					//  Collect Sub categories for each parent category provided
            $sub_categories = [];
            for($i=0; $i < count($catID); $i=$i+1) {
              $sub_category = get_categories('&title_li=&show_count=1&child_of='.$catID[$i]);
              $sub_categories = array_merge( $sub_categories, $sub_category );
              //  Remove Duplicate Entries
              $sub_categories = array_map("unserialize", array_unique(array_map("serialize", $sub_categories)));
            }
            
            //  Sort Array by Name
  				  usort($sub_categories, "cmp_name");

            //  For each subcategory,
            foreach($sub_categories as $sub_c) {
              //  - Get product entries
              $args = array( 'post_type' => 'products', 'cat' => $sub_c->cat_ID );
              $products_in_sub_category = get_posts( $args );
              usort($products_in_sub_category, "cmp_post_title");
            ?>
              <table>
               <thead>
                  <tr>
                    <th> <?php echo $sub_c->name; ?> </th>
                    <th class="vendor-cell">Vendor</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  //  - Vendor information
                  foreach($products_in_sub_category as $p) {
                    $pc = get_post_complete($p->ID);
                ?>
                  <tr>
                    <td>
                      <a href=" <?php echo $pc['URL']; ?> " target="_blank"> <?php echo $pc['post_title'] ?> </a> <br>
                    </td>
                    <td class="product-logo"><a href="#"><img class="product-logo" src="img/products/ARI/logo.png"></a></td>
                  </tr>
                <?php
                  } //  End of inner loop
                ?>
                </tbody>
              </table>
            <?php
            } //  End of outer loop
        	} else {
      	?>
      		<table>
      		 <thead>
      		    <tr>
      		      <th> Category </th>
      		      <th class="vendor-cell">Vendor</th>
      		    </tr>
      		  </thead>
      		  <tbody>
      		  	<tr>
      		  	  <td>
      		  	    No Entries Found
      		  	  </td>
      		  	  <td>
      		  	    -
      		  	  </td>
      		  	</tr>
      		  </tbody>
      		</table>
      	<?php	
      	 } // End of IF
        ?>

      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>