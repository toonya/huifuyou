<?php
// ----------------------------------------
// ! Custom page
// ----------------------------------------
?>

<?php
	function my_search_template_redirect()
	{
	        // not a search page, don't do anything
	        if( ! is_home() )
	            return;

	        echo '<div id="content" class="search_results_page">';

	        echo '<h1 class="page-title">This is a home page</h1>';

	        // search results loop goes here

	        echo '</div>';
	        exit();
	}
	add_action( 'template_redirect', 'my_search_template_redirect', 1 );
?>