<div class="custom-header">

		<div class="custom-header-media">
			<div class="meteor">
        		<div class="red" style="left:600px;"></div>
        		<div class="orange" style="left:700px;"></div>
        		<div class="yellow" style="left:900px;"></div>
        		<div class="green" style="left:1100px;"></div>
        		<div class="cyan" style="left:1260px;"></div>
        		<div class="blue" style="left:1400px;"></div>
        		<div class="purple" style="left:1500px;"></div>
        
        		<div class="red" style="left:0px;"></div>
        		<div class="orange" style="left:100px;"></div>
        		<div class="yellow" style="left:300px;"></div>
        		<div class="green" style="left:500px;"></div>
        		<div class="cyan" style="left:660px;"></div>
        		<div class="blue" style="left:800px;"></div>
        		<div class="purple" style="left:900px;"></div>
        
        		<div class="red" style="left:1200px;"></div>
        		<div class="orange" style="left:1300px;"></div>
        		<div class="yellow" style="left:1500px;"></div>
        		<div class="green" style="left:1700px;"></div>
       			<div class="cyan" style="left:1860px;"></div>
        		<div class="blue" style="left:2000px;"></div>
        		<div class="purple" style="left:2100px;"></div>
    		</div>
			<?php
			if(( is_single() || ( is_page() && ! twentyseventeen_is_frontpage())) && has_post_thumbnail(get_queried_object_id())){
				echo '<div id="wp-custom-header" class="wp-custom-header">';
				echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
				echo '</div>';
			}else{
			    the_custom_header_markup();
			}
			?>
		</div>

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
