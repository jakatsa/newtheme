<?php get_header(); ?>
  
		<article class="content px-3 py-5 p-md-5">
	     <!-- using the wordpress loop to display the content of the page -->
			<?php
				if ( have_posts() ) {
					
					while ( have_posts() ) {
						the_post();
					
						the_content();
					}
				}
			
            ?>
	    </article>
	   
   
<?php get_footer(); ?>
