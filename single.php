<?php
$post = $wp_query->post;
if ( in_category( 'catalog' ) ) { //ID категории
    include( TEMPLATEPATH.'/single-catalog.php' );
} else {
    include( TEMPLATEPATH.'/page.php' );
}
?>