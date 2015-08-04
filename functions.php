<?php
// if ( function_exists('register_sidebar') )
// register_sidebar();
// if ( function_exists('register_sidebar') ) 
// register_sidebar(array( 
// 'before_widget' => '', 
// 'after_widget' => '', 
// 'before_title' => '<p>', 
// 'after_title' => '</p>', 
// ));

// *****************************************************************
// THUMBNAILS
// *****************************************************************
add_theme_support('post-thumbnails');


add_action('init', 'remove_then_add_image_sizes');
function remove_then_add_image_sizes() {

    // SET SIZE FOR 'featured'
    add_image_size('post-image', 440 );
}

add_filter( 'image_size_names_choose', 'my_custom_sizes' );
function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
        'post-image' => __( 'Post Image' ),
    ) );
}

$archive_year = 0;
add_filter('get_archives_link','wp_get_archive_grouped_by_year',10,2);
function wp_get_archive_grouped_by_year($link_html) {
    global $archive_year;
    //Get the year from the link(probably better if you change this to regexp)
    $year_new = explode(' ', $link_html);
    $year_new = explode('</a>',$year_new[2]);
    $year_new = $year_new[0];
    $year_html = '';

    if ($year_new != $archive_year) {
    	if ($archive_year == 0) {
    		$archive_year = $year_new;
        	$year_html = '<li><span class="has-sub-list"><span class="genericond genericon genericon-rightarrow"></span>'.$archive_year.'</span><ul class="archive-months sub-list">';	
    	} else {
    		$archive_year = $year_new;
        	$year_html = '</ul></li><li><span class="has-sub-list"><span class="genericond genericon genericon-rightarrow"></span>'.$archive_year.'</span><ul class="sub-list archive-months">';
    	}
        
    }

    //Remove the year from the month link
    $link_html = str_replace(' '.$archive_year, "", $link_html);

    //Return the new links
    echo $year_html.$link_html;
}

show_admin_bar( false );

function improved_trim_excerpt($text) {
        global $post;
        if ( '' == $text ) {
                $text = get_the_content('');
                $text = apply_filters('the_content', $text);
                $text = str_replace('\]\]\>', ']]&gt;', $text);
                $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
                $text = strip_tags($text, '<img>');
                $excerpt_length = 40;
                $words = explode(' ', $text, $excerpt_length + 1);
                if (count($words)> $excerpt_length) {
                        array_pop($words);
                        array_push($words, '...');
                        $text = implode(' ', $words);
                }
        }
        return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');


?>