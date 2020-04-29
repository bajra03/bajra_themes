<?php
/**
 * Front page template
 */

get_header();
?>

<?php
    $area = 'Main Content';
    $rendered = bajra_render_blocks($page_id, array());
    if (isset($rendered[$area])) {
    echo $rendered[$area];
    }
?>

<?php get_footer(); ?>