<?php
/*
Template Name: Golf Page
*/
get_header(); ?>
<?php
//  Get Parent Category Type
  $catID = get_cat_id('golf');
?>

	<div class="row interior white toppadding1">
      <div class="medium-9 columns"><h1>Golf</h1><hr>
      <p>HD Supply Waterworks is the nation’s largest distributor of water, sewer, storm and fire protection products. We deliver the quality products and superior services our customers demand to get the job done. Our highly knowledgeable associates understand the specific needs of our customers and can be relied upon to provide personal touch service.</p></div>
      <div class="medium-3 columns">

               <ul class="side-nav hide-for-small-only">
        
          <li class=""><a href="?page_id=14">All Equipment</a></li>
          <li class=""><a href="?page_id=19">Agriculture</a></li>
          <li class="active"><a href="?page_id=254">Golf</a></li>
          <li class=""><a href="?page_id=16">Irrigation</a></li>
          <li class=""><a href="?page_id=8">Waterworks</a></li>

        </ul>
			</div>
	</div>
	
	<div class="row interior white">
	  <div class=" medium-12 columns">
	    <div class="row toppadding1">
	      <div class="medium-12 columns">
	        
	        <?php
	          //  Filter by Type
	          // $args = array( 'post_type' => 'products', 'posts_per_page' => 10, 'cat' => $catID );
	          // $postsa = get_posts( $args );

	        //  Get Sub categories for parent
	          $sub_categories = get_categories('&title_li=&show_count=1&child_of='.$catID);
					if($catID != 0) {
	        //  For each subcategory,
	        foreach($sub_categories as $sub_c) {
	          //  - Get product entries
	          $args = array( 'post_type' => 'products', 'cat' => $sub_c->cat_ID );
	          $products_in_sub_category = get_posts( $args );
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
	      	}// End of IF
	        ?>

	      </div>
	    </div>
	  </div>
	</div>


<?php get_footer(); ?>