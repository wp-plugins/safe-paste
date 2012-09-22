<?php
/*
Plugin Name: Safe Paste
Plugin URI: http://www.samuelaguilera.com
Description: Removes a lot of HTML tags from post and page content before inserting it to database. Preventing users to paste undesired HTML tags to post content.
Author: Samuel Aguilera
Version: 1.0
Author URI: http://www.samuelaguilera.com
License: GPL2
*/

/*
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License version 3 as published by
the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


function SAR_cleanPost($data) {

  global $post;
  
    $post_type = get_post_type( $post->ID );
  
      if ($post_type == 'post' || $post_type == 'page') {  // only make the job on post or pages not in custom post types
    
              // These are the tags to STAY, add or remove any if you know how to do it... (but don't ask me if you don't!!!)
              $cleanPost_tags = '<p><a><img><h1><h2><h3><h4><h5><h6><blockquote><ol><ul><li><em><strong><del>';
          
              // Doing the clean for HTML tags...
              
              $data['post_content'] = strip_tags($data['post_content'], $cleanPost_tags);
              
              // Removing &nbsp;
              
              $data['post_content'] = preg_replace("/&nbsp;/i","",$data['post_content']);
              
              // Removes ALL HTML entities, not only &nbsp;
              // $data['post_content'] = preg_replace("/&#?[a-z0-9]{2,8};/i","",$data['post_content']);
              
              return $data; // return data to WP
        
        } else {  // if not post or page, don't touch anything!
        
              return $data; // return data, untouched, to WP
        
        }
    
  }

add_filter( 'wp_insert_post_data' , 'SAR_cleanPost');

?>