<?php 

//Add CSS
function theme_styles() {
	wp_enqueue_style( 'normalize', get_template_directory_uri(). '/css/normalize.css' );
    wp_enqueue_style( 'slick', get_template_directory_uri(). '/css/slick.css' );
    wp_enqueue_style( 'slicktheme', get_template_directory_uri(). '/css/slick-theme.css' );
	wp_enqueue_style( 'main', get_template_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles');

//Add JS
function theme_js() {

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'prefixfree', get_template_directory_uri(). "/js/prefixfree.min.js", array('jquery'), '', false);
    wp_enqueue_script( 'slick', get_template_directory_uri(). "/js/slick.min.js", array('jquery'), '', false);
	
    //Author pages often don't have enough content so load sticky header only on other pages
    wp_register_script( 'script', get_template_directory_uri(). "/js/script.js", array('jquery'), '', true);
	if ( ! is_author() ) {
		wp_enqueue_script( 'script');
	}

    //Slick Slider for front page
    wp_register_script( 'slider', get_template_directory_uri(). "/js/slider.js", array('jquery'), '', true);
    if ( is_front_page() ) {
        wp_enqueue_script( 'slider');
    }

}
add_action( 'wp_enqueue_scripts', 'theme_js');


//Enable custom menus
add_theme_support( 'menus' );

//Enable post thumbnails/featured image
add_theme_support( 'post-thumbnails' );

//Set the text for Read More button on excerpts
function new_excerpt_more( $more ) {
	return ' ... '.' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

//Set the number of posts displayed based on various pages
function post_count( $query ) {
    if ( $query->is_main_query() && ($query->is_home() || $query->is_category() || $query->is_tag() || $query->is_search() || $query->is_date()) ) {
        $query->set( 'posts_per_page', 12 );
    }
    else if ( $query->is_author()) {
        $query->set( 'posts_per_page', 6 );
    }
}
add_action( 'pre_get_posts', 'post_count' );

/**
 * Filter to replace the [caption] shortcode text with HTML5 compliant code
 *
 * @return text HTML content describing embedded figure
 **/
function my_img_caption_shortcode_filter($val, $attr, $content = null)
{
    extract(shortcode_atts(array(
        'id'    => '',
        'align' => '',
        'width' => '',
        'caption' => ''
    ), $attr));

    if ( 1 > (int) $width || empty($caption) )
        return $val;

    $capid = '';
    if ( $id ) {
        $id = esc_attr($id);
        $capid = 'id="figcaption_'. $id . '" ';
        $id = 'id="' . $id . '" aria-labelledby="figcaption_' . $id . '" ';
    }

    return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >'
    . do_shortcode( $content ) . '<figcaption ' . $capid 
    . 'class="wp-caption-text">' . $caption . '</figcaption></figure>';
}
add_filter('img_caption_shortcode', 'my_img_caption_shortcode_filter',10,3);

//Set Wordpress seach to only look for posts, not pages
function SearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','SearchFilter');

//Links to next and previous months on date archives
function next_month_link($label = 'Next Month') {
        echo get_archive_month_link($label, false);
}
    
function previous_month_link($label = 'Previous Month') {
        echo get_archive_month_link($label);
}
    
function get_archive_month_link($label, $previous = true) {
    
    $archive_month = get_next_or_previous_month($previous);
    if($archive_month) {
        
        $year = $archive_month[0]->year;
        $month = $archive_month[0]->month;
        $full_month = date("F", strtotime("$year-$month"));
        
        $label = str_replace(array('%month','%year'), array($full_month,$year), $label);
        
        return '<a href="' . get_month_link($year, $month).'">'.$label.'</a>';
    }
    return '';
    
}
   
function get_next_or_previous_month($previous = true) {
    $result = '';
    if(is_archive() && is_month()) {
        $year  =    get_query_var('year');
        $month = get_query_var('monthnum');
        $month = str_pad($month, 2, "0", STR_PAD_LEFT);
        
        if($previous) {
            $first_day = $year. '-'. $month . '-01 00:00:00';
            $post_date = " AND post_date < '$first_day'";
            $order = "DESC";
    
        } else {
            $last_day = date("Y-m-d H:i:s", strtotime("first day of next month" .  $year. '-'.$month));
            $post_date = " AND post_date >= '$last_day'";
            $order = "ASC";
        }
        global $wpdb;
        $query = "SELECT YEAR(post_date) AS `year`, MONTH(post_date) AS `month`, count(ID) as posts FROM $wpdb->posts WHERE post_type = 'post' AND post_status = 'publish'$post_date GROUP BY YEAR(post_date), MONTH(post_date) ORDER BY post_date $order LIMIT 0, 1";
        $result = $wpdb->get_results($query);
    }
    return $result;
}

//Custome user profile field for user groups, such as Admin or Research
function custom_user_profile_fields( $user ) {
?> 
    <table class="form-table">
        <tr>
            <th><label for="dropdown"> Choose your group </label></th>
            <td>
                <?php 
                //get dropdown saved value
                $selected = get_the_author_meta( 'user_group', $user->ID );  
                ?>
                <select name="user_group" id="user_group">
                    <option value="exec" <?php echo ($selected == "exec")?  'selected="selected"' : '' ?>>Exec Team</option>
                    <option value="admin" <?php echo ($selected == "admin")?  'selected="selected"' : '' ?>>Gen Admin</option>
                    <option value="research" <?php echo ($selected == "research")?  'selected="selected"' : '' ?>>Research</option>
                    <option value="wellness" <?php echo ($selected == "wellness")?  'selected="selected"' : '' ?>>Wellness</option>
                    <option value="humanities" <?php echo ($selected == "humanities")?  'selected="selected"' : '' ?>>Humanities</option>
                    <option value="medicine" <?php echo ($selected == "medicine")?  'selected="selected"' : '' ?>>Medicine</option>
                    <option value="publichealth" <?php echo ($selected == "publichealth")?  'selected="selected"' : '' ?>>Public Health</option>
                    <option value="healthcare" <?php echo ($selected == "healthcare")?  'selected="selected"' : '' ?>>Healthcare</option>
                    <option value="web" <?php echo ($selected == "web")?  'selected="selected"' : '' ?>>Web</option>
                    <option value="visual" <?php echo ($selected == "visual")?  'selected="selected"' : '' ?>>Visual</option>
                    <option value="marketing" <?php echo ($selected == "marketing")?  'selected="selected"' : '' ?>>Marketing</option>
                    <option value="finance" <?php echo ($selected == "finance")?  'selected="selected"' : '' ?>>Finance</option>
                    <option value="hr" <?php echo ($selected == "hr")?  'selected="selected"' : '' ?>>Operations &amp; Admins</option>
                    <option value="none" <?php echo ($selected == "none")?  'selected="selected"' : '' ?>>None</option>
                </select>
            </td>
        </tr>
    </table>
<?php }

function save_custom_user_profile_fields( $user_id ) {
    
    if ( !current_user_can( 'edit_user', $user_id ) )
        return FALSE;
    
    update_user_meta( $user_id, 'user_group', $_POST['user_group'] );
}

add_action( 'show_user_profile', 'custom_user_profile_fields' );
add_action( 'edit_user_profile', 'custom_user_profile_fields' );

add_action( 'personal_options_update', 'save_custom_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_custom_user_profile_fields' );
