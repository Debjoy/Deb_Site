<?php



?>
	<div id="sidebar" role="complementary" class="CustomSidebar">
		
			<?php
			  /* Widgetized sidebar, if you have the plugin installed. */
			if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar() ) :
				?>
			

			<!-- Author information is disabled per default. Uncomment and fill in your details if you want to use it.
			<li><h2><?php _e( 'Author' ); ?></h2>
			<p>A little something about you, the author. Nothing lengthy, just an overview.</p>
			</li>
			-->

				
		
		    <h2>Pages</h2>
				<ul><?php wp_list_pages( 
                    array(
						'title_li'   => '',
					)
                ); ?></ul>

			<h2><?php _e( 'Archives' ); ?></h2>
				
        <ul><?php wp_get_archives( array( 'type' => 'monthly' ) ); ?></ul>
				
			
            <h2>Categories</h2>
				<ul><?php
				$list=wp_list_categories(
					array(
						'show_count' => 1,
						'title_li'   => '',
					)
				);
                    
                    ?></ul>
		
		
				<?php if ( is_home() || is_page() ) { /* If this is the frontpage */ ?>
					<?php wp_list_bookmarks(); ?>

			<h2><?php _e( 'Meta' ); ?></h2>
				
					<ul><?php wp_register(); ?>
                        <li><?php wp_loginout(); ?></li></ul>
					<?php wp_meta(); ?>
				
				
			<?php } ?>

			<?php endif; /* ! dynamic_sidebar() */ ?>
		
	</div>
