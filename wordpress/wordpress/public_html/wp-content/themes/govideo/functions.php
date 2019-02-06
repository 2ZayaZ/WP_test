<?php


define( 'GOVIDEO_VERSION', '1.6' );
define( 'GOVIDEO_TEXTDOMAIN', 'govideo' );
define( 'GOVIDEO_THEME_DIR', get_template_directory() . '/' );
define( 'GOVIDEO_THEME_URI', get_template_directory_uri() . '/' );

// Helper library for the theme customizer.
require_once GOVIDEO_THEME_DIR . '/inc/kirki-framework/kirki.php';
require_once GOVIDEO_THEME_DIR . '/inc/customizer-options.php';

// Theme setup.
require_once GOVIDEO_THEME_DIR . '/inc/theme-setup.php';

// Common-functions
require_once GOVIDEO_THEME_DIR . 'inc/template-functions.php';

// Enqueue scripts and styles.
require_once GOVIDEO_THEME_DIR . '/inc/enqueue-scripts.php';

// Custom template tags for this theme.
require_once GOVIDEO_THEME_DIR . 'inc/template-tags.php';

// Customizer.
require_once GOVIDEO_THEME_DIR . 'inc/customizer.php';

// Register sidebar.
require_once GOVIDEO_THEME_DIR . 'inc/widgets.php';

// Video iframe.
require_once GOVIDEO_THEME_DIR . 'inc/video-helper.php';

// Admin page.
require_once GOVIDEO_THEME_DIR . 'inc/theme-admin-page.php';

add_action( 'hoo_after_post', 'action_add_text' );
function action_add_text(){
?>
 
Страна: <b>Великобритания</b>


 
<?php
}

add_action( 'hoo_after_post', 'action_add_text1' );
function action_add_text1(){
?>
 
<p>Жанр: <b>Фантастика</b> </p>


 
<?php
}

add_shortcode( 'wfm-cats', 'wfm_add_category_posts' );
function wfm_add_category_posts($atts){
 if( empty($atts['id']) ) return;
 $per_page = !empty($atts['count']) ? (int)$atts['count'] : 3;
 if( $per_page < 1 ) $per_page = 5;
 
 $cats_id = explode(',', $atts['id']);
 
 $get_posts = new WP_Query(
 array(
 'category__in' => $cats_id,
 'posts_per_page' => $per_page
 )
 );
 
 $content = '';
 
 if( $get_posts->have_posts() ){
 $content .= '<div class="insert-posts">';
 while( $get_posts->have_posts() ){
 $get_posts->the_post();
 
 if( has_post_thumbnail() ){
 $img = get_the_post_thumbnail( get_the_ID(), 'full', array('title' => get_the_title() ) );
 }else{
 $img = '<img src="' . get_template_directory_uri() . '/images/no_img.png" alt="" title="' . get_the_title() . '">';
 }
 
 $content .= '<a href="' . get_permalink() . '">' . $img . '</a>';
 }
 $content .= '</div>';
 wp_reset_query();
 }
 
 return $content;
}