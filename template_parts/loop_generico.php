<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        if (in_category('ejemplo')) {
            the_title('<h2>', '</h2>');
            if (has_post_thumbnail()) {
                the_post_thumbnail('full', array('class'=> 'img-fluid'));
            }
            the_content();
        }
    }
}   else {
        echo '<p>No content found</p>';
    }
?>