<?php
/**
 * The template used for displaying two column content
 *
 */
  $content_col1 = get_sub_field('content_2col1');
  $content_col2 = get_sub_field('content_2col2');
  if( $content_col1["content_list"] )
    {
      foreach( $content_col1["content_list"] as $i => $row )
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
   if( $content_col2["content_list"] )
    {
      foreach( $content_col2["content_list"] as $i => $row )
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
