<?php

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 200, true );


  ## WORDPRESS KATEGORİLER ##
  FUNCTION __WP_KATEGORILER(){
    global $wpdb;
    $get = $wpdb->get_results("SELECT * FROM $wpdb->term_taxonomy where taxonomy='category'");
    FOREACH ( $get AS $g ){
      $cid = $g->term_id;
      $adbul = $wpdb->get_row("Select * from $wpdb->terms where term_id='$cid'");
      $cname= $adbul->name;
    ECHO '<option value="'.$cid.'">'.$cname.'</option>';
    }
  }
/* Webinyo.COM WordPress Gerekli Kodlar */

register_sidebar(
   array(
        'name' => 'SolAlt',
        'id' => 'solalt',
        'before_widget' => '<div class="footericisol">',
        'after_widget' => '</div>',
        'before_title' => '<p>',
        'after_title' => '</p>'
   )
);

register_sidebar(
  array(
           'name' => 'SagAlt',
           'id' => 'sagalt',
           'before_widget' => '<div class="footericisag">',
           'after_widget' => '</div>',
           'before_title' => '<p>',
           'after_title' => '</p>'
      )

);








?>
