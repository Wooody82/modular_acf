<?php
/**
 * The template used for displaying one column content
 *
 */
$content_1col = get_sub_field('content_1col1');

if( $content_1col["content_list"] )
  {
    foreach( $content_1col["content_list"] as $i => $row )
    {    
        if($row['acf_fc_layout'] == 'tag_title_layout'){
          echo $row['tag_title'];
        }
        elseif($row['acf_fc_layout'] == 'big_title_layout'){
          echo $row['big_title'];
        } 
        elseif($row['acf_fc_layout'] == 'intro_text_layout'){
          echo $row['intro_text'];
        }            
        elseif($row['acf_fc_layout'] == 'image_layout'){
          echo $row['image']['url'];
        }
    }
  }

?>
