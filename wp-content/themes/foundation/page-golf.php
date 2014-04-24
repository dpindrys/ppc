<?php
/*
Template Name: Golf Page
*/
get_header(); ?>
<?php
 //  $postsa = get_posts(array('post_type'=>'products'));
	// foreach($postsa as $p) {
	// 				echo "\n";
	//         $pc = get_post_complete($p->ID);
	//         // get_post_complete() returns data as an ARRAY, not as an OBJECT!!!
	//         print $pc['post_title'];  
	//         print $pc['my_custom_field'];
	//         print_r($pc); // <-- prints out all available fields, both built-in and custom fields
	//         echo "_______________________________________________________________________________________";
	//         echo "_______________________________________________________________________________________";
	//         echo "_______________________________________________________________________________________";
	// }

	// if ( is_category( 'golf-slug' ) ) : 
	// 	echo "asdfas";
	// 	$postsa = get_posts( array( 'category_name' => 'club', 'posts_per_page' => -1 ) ); 

	// endif;
	// foreach($postsa as $p) {
	// 				echo "\n";
	//         $pc = get_post_complete($p->ID);
	//         // get_post_complete() returns data as an ARRAY, not as an OBJECT!!!
	//         print $pc['post_title'];  
	//         print $pc['my_custom_field'];
	//         print_r($pc); // <-- prints out all available fields, both built-in and custom fields
	//         echo "_______________________________________________________________________________________";
	//         echo "_______________________________________________________________________________________";
	//         echo "_______________________________________________________________________________________";
	// }
	


//	Get Parent Category Type
	$catID = get_cat_id('golf');
	//	Filter by Type
	// $args = array( 'post_type' => 'products', 'posts_per_page' => 10, 'cat' => $catID );
	// $postsa = get_posts( $args );

//	Get Sub categories for parent
	$sub_categories = get_categories('&title_li=&show_count=1&child_of='.$catID);

//	For each subcategory,
	foreach($sub_categories as $sub_c) {
		//	- Get product entries
		$args = array( 'post_type' => 'products', 'cat' => $sub_c->cat_ID );
		$products_in_sub_category = get_posts( $args );
		echo "<h4>" . $sub_c->name . "</h4>";

		//	- Vendor information
		foreach($products_in_sub_category as $p) {
    	$pc = get_post_complete($p->ID);
    	// print_r($pc);

    	// $args = array( 'post_type' => 'vendor', 'posts_per_page' => 10, 'ID' => $p->vendor );
    	// $vendor = get_posts( $args );
    	// print_r($vendor);

    	// get_post_complete() // returns data as an ARRAY, not as an OBJECT!!!
?>
	  	<a href=" <?php echo $pc['URL']; ?> " target="_blank"> <?php echo $pc['post_title'] ?> </a> <br>

<?php
			// $posta = new WP_Query( $args );
      // print $pc['my_custom_field'];
      // print_r($pc); // <-- prints out all available fields, both built-in and custom fields
		}	//	End of inner loop
  }	//	End of outer loop
?>


  <!-- while ( $posta->have_posts() ) : $posta->the_post(); -->
  	<!-- the_title(); -->
  	<!-- echo '<div class="entry-content">'; -->
  	<!-- the_content(); -->
  	<!-- echo '</div>'; -->
  <!-- endwhile; -->




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

	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<!--
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			-->
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
		
<?php get_footer(); ?>