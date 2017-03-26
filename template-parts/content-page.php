<?php
/**
 * The template used for displaying hero content
 *
 */
?>
<section class="Section Section-hero">
  <div class="wrap">
       
        <?php        
        // check if the flexible content field has rows of data
        if( have_rows('flex_layout') ):

             // loop through the rows of data
            while ( have_rows('flex_layout') ) : the_row();
 
                // IF ONE COLUMN
                if( get_row_layout() == 'one_column' ): 

                  get_template_part( 'template-parts/layout/layout', 'onecol' );                 
                ?>
             


              <?php  
                // IF TWO COLUMNS
                elseif( get_row_layout() == 'two_column' ):  
                  get_template_part( 'template-parts/layout/layout', 'twocol' );        
                ?>
 
                
                <?php 
                endif;  //End if first layout check - one_column
            endwhile;

        else :
            // no layouts found
        endif;
      ?>

  </div>
</section>