<?php

// Check value exists.
if( have_rows('preventions') ):

    // Loop through rows.
    while ( have_rows('preventions') ) : the_row();

        // Case: Paragraph layout.
        if( get_row_layout() == 'default' ):
            get_template_part( CMP, 'preventions-item-default', get_sub_field("content"));
            
        elseif( get_row_layout() == 'img' ): 
            get_template_part( CMP, 'preventions-item-img', get_sub_field("content"));

        elseif( get_row_layout() == 'gallery' ): 
            get_template_part( CMP, 'preventions-item-gallery', get_sub_field("content"));

        endif;

    // End loop.
    endwhile;
endif;

?>