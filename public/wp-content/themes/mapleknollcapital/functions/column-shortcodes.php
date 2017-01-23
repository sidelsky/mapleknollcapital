<?php

function hide_column_shortcodes( $shortcodes ) {

    /* uncomment ( remove the '//' ) any of the following to remove it's shortcode from menu */
    //http://www.codepresshq.com/wordpress-plugins/shortcode-columns/

    unset( $shortcodes['full_width'] );
    // unset( $shortcodes['one_half'] );
    unset( $shortcodes['one_third'] );
    unset( $shortcodes['one_fourth'] );
    unset( $shortcodes['two_third'] );
    unset( $shortcodes['three_fourth'] );
    unset( $shortcodes['one_fifth'] );
    unset( $shortcodes['two_fifth'] );
    unset( $shortcodes['three_fifth'] );
    unset( $shortcodes['four_fifth'] );
    unset( $shortcodes['one_sixth'] );
    unset( $shortcodes['five_sixth'] );

    return $shortcodes;
}

add_filter( 'cpsh_column_shortcodes', 'hide_column_shortcodes' );

 ?>
