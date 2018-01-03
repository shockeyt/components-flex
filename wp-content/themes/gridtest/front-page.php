<?php
/**
 * The Front Page
 */

get_header();

	while ( have_posts() ) : the_post(); ?>

		<?php

		renderComponent('example', 'container');

		?>

	<?php endwhile;

get_footer(); ?>