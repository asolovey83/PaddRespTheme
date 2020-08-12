<?php
/**
 * The Search Form
 *
 * Optional file that allows displaying a custom search form
 * when the get_search_form() template tag is used.
 *
 */

?>

<form id="mobsearch-form" method="get" action="<?php bloginfo('home'); ?>/">
<input type="search" name="s" title="Search" placeholder="Ввод" value="<?php echo get_search_query(); ?>">
<input type="submit" id="mobsearch-btn" value="Искать">
</form>

