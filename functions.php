<?php

require_once('walker.php');



// Publikasi 

function register_publikasi_post_type() {
    $labels = array(
        'name'               => __('Publikasi', 'textdomain'),
        'singular_name'      => __('Publikasi', 'textdomain'),
        'menu_name'          => __('Publikasi', 'textdomain'),
        'name_admin_bar'     => __('Publikasi', 'textdomain'),
        'add_new'            => __('Tambah Publikasi', 'textdomain'),
        'add_new_item'       => __('Tambah Publikasi Baru', 'textdomain'),
        'new_item'           => __('Publikasi Baru', 'textdomain'),
        'edit_item'          => __('Edit Publikasi', 'textdomain'),
        'view_item'          => __('Lihat Publikasi', 'textdomain'),
        'all_items'          => __('Semua Publikasi', 'textdomain'),
        'search_items'       => __('Cari Publikasi', 'textdomain'),
        'not_found'          => __('Publikasi Tidak Ditemukan', 'textdomain'),
        'not_found_in_trash' => __('Publikasi Tidak Ditemukan di Sampah', 'textdomain'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'publikasi'),
        'menu_icon'          => 'dashicons-media-document',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
    );

    register_post_type('publikasi', $args);
}

add_action('init', 'register_publikasi_post_type');



function custom_menu_item_classes($classes, $item, $args)
{
    if ($args->theme_location === 'primary') {
        $classes[] = 'sp-menu-item'; // Kelas tambahan untuk elemen <li>
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'custom_menu_item_classes', 10, 3);

// function register_slider_post_type()
// {
//     $labels = array(
//         'name'               => 'Sliders',
//         'singular_name'      => 'Slider',
//         'menu_name'          => 'Sliders',
//         'name_admin_bar'     => 'Slider',
//         'add_new'            => 'Add New',
//         'add_new_item'       => 'Add New Slider',
//         'new_item'           => 'New Slider',
//         'edit_item'          => 'Edit Slider',
//         'view_item'          => 'View Slider',
//         'all_items'          => 'All Sliders',
//         'search_items'       => 'Search Sliders',
//     );

//     $args = array(
//         'labels'             => $labels,
//         'public'             => true,
//         'show_in_menu'       => true,
//         'supports'           => array('title', 'thumbnail'),
//         'menu_position'      => 20,
//         'menu_icon'          => 'dashicons-images-alt2',
//     );

//     register_post_type('slider', $args);
// }
// add_action('init', 'register_slider_post_type');

function get_slider()
{
    get_template_part('slider');
}


function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'), // Menu utama
            'footer-menu'  => __('Footer Menu')   // Menu di footer
        )
    );
}
add_action('init', 'register_my_menus');


// Include custom navwalker
// require_once('inc/bs4navwalker.php');

add_action('get_header', 'my_filter_head');

function my_filter_head()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}

function bootstrapstarter_wp_setup()
{
    add_theme_support('title-tag');
    // This theme uses post thumbnails
    add_theme_support('post-thumbnails');
}
add_action('init', 'bootstrapstarter_wp_setup');

function bootstrapstarter_register_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'bootstrapstarter_register_menu');

function bootstrapstarter_register_footer_menu()
{
    register_nav_menu('footer-menu', __('Footer Menu'));
}
add_action('init', 'bootstrapstarter_register_footer_menu');

function wpbeginner_numeric_posts_nav()
{

    if (is_singular())
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if ($wp_query->max_num_pages <= 1)
        return;

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max   = intval($wp_query->max_num_pages);

    /** Add current page to the array */
    if ($paged >= 1)
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<nav class="d-flex justify-content-center my-4 wow fadeIn"><ul class="pagination pagination-circle pg-info mb-0">' . "\n";

    /** Previous Post Link */
    if (get_previous_posts_link())
        printf('<li class="page-item page-prev">%s</li>' . "\n", get_previous_posts_link());

    /** Link to first page, plus ellipses if necessary */
    if (! in_array(1, $links)) {
        $class = 1 == $paged ? ' class="page-item active"' : ' class="page-item"';

        printf('<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (! in_array(2, $links))
            echo '<li class="page-item">…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="page-item active"' : ' class="page-item"';
        printf('<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (! in_array($max, $links)) {
        if (! in_array($max - 1, $links))
            echo '<li class="page-item">…</li>' . "\n";

        $class = $paged == $max ? ' class="page-item active"' : ' class="page-item"';
        printf('<li%s><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** Next Post Link */
    if (get_next_posts_link())
        printf('<li class="page-item page-next">%s</li>' . "\n", get_next_posts_link());

    echo '</ul></nav>' . "\n";
}


// wp theme setting
function build_options_page()
{ ?>
    <div id="theme-options-wrap">
        <div class="icon32" id="icon-tools"> <br /> </div>
        <h2>Theme Settings</h2>
        <p>Update various settings throughout your website.</p>
        <form method="post" action="options.php" enctype="multipart/form-data">
            <?php settings_fields('theme_options'); ?>
            <?php do_settings_sections(__FILE__); ?>
            <p class="submit">
                <input name="Submit" type="submit" class="button-primary" value="<?php esc_attr_e('Save Changes'); ?>" />
            </p>
        </form>
    </div>
<?php }
add_action('admin_init', 'register_and_build_fields');
function register_and_build_fields()
{
    register_setting('theme_options', 'theme_options', 'validate_setting');
    add_settings_section('homepage_settings', 'Homepage Settings', 'section_homepage', __FILE__);
    function section_homepage() {}
    add_settings_field('logooption', 'Logo Option', 'logo_option', __FILE__, 'homepage_settings');
    add_settings_field('logotext', 'Logo Text', 'logo_text', __FILE__, 'homepage_settings');
    add_settings_field('logoimage', 'Logo Image URL (300px x 60px)', 'logo_image', __FILE__, 'homepage_settings');
}

function validate_setting($theme_options)
{
    return $theme_options;
}

function logo_option()
{
    $options = get_option('theme_options');
    echo "<select name='theme_options[logo_type]'><option value='text' " . ($options['logo_type'] == 'text' ? 'selected' : '') . ">Text</option><option value='image' " . ($options['logo_type'] == 'image' ? 'selected' : '') . ">Image</option></select>";
}

function logo_text()
{
    $options = get_option('theme_options');
    echo "<input name='theme_options[logo_text]' type='text' value='{$options['logo_text']}' />";
}

function logo_image()
{
    $options = get_option('theme_options');
    echo "<input name='theme_options[logo_image]' type='text' value='{$options['logo_image']}' />";
}

add_action('admin_menu', 'theme_options_page');
function theme_options_page()
{
    add_options_page('Theme Settings', 'Theme Settings', 'administrator', __FILE__, 'build_options_page');
}

if(isset($_GET['import_image']))
{
    $filepath = 'https://bapperida.asahankab.go.id/content/uploads/'; //Change this to the actual file path...

    $images = file_get_contents("https://bapperida.asahankab.go.id/exporter/image.php");
    $images = json_decode($images);
    $page = $_GET['import_image'];
    $length = 10;
    $idx = $page*$length;
    foreach($images as $index => $image)
    {
        if($index < $idx) continue;
        if($index == $idx+$length) break;

        $the_slug = $image->post_name;
        $args = array(
            'name'           => $the_slug,
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => 1
        );
        $my_posts = get_posts($args);
        if( $my_posts )
        {
            $post_id = $my_posts[0]->ID;
            $post_thumbnail_url = $image->thumbnail;
            $image_name = basename($post_thumbnail_url);
            $name = explode('.', $image_name)[0];
            $upload_dir = wp_upload_dir();
            $upload_dir_path = $upload_dir['path'];
            $image_name = basename($post_thumbnail_url);
            $image_path = $upload_dir_path . '/' . $image_name;
            $image_data = file_get_contents($post_thumbnail_url);
            if (file_put_contents($image_path, $image_data) !== FALSE) {
                $image_url = $upload_dir['url'] . '/' . $image_name;
            }
            $type = wp_check_filetype($post_thumbnail_url)['type'];
            $attachment = array(
                'guid' => $image_url,
                'post_mime_type' => $type,
                'post_status' => 'inherit',
                'post_title' => $name,
                'post_parent' => $post_id

            );

            $attachment_id = wp_insert_attachment($attachment, $image_path, $post_id);
            if ($attachment_id) {
                require_once(ABSPATH . 'wp-admin/includes/image.php');
                $attachment_data = wp_generate_attachment_metadata($attachment_id, $image_path);
                wp_update_attachment_metadata($attachment_id, $attachment_data);
                set_post_thumbnail($post_id, $attachment_id);
            } else {
                wp_send_json_error(array('message' => 'Error While generating post attachment'));
                wp_die();
            }
        }
    }
    die;
}


$cookie_name = "visitor_counter";
$date = date('Y-m-d');
$init_counter = [$date => 0];
$counter = get_option( $cookie_name,  $init_counter);

if (!isset($_COOKIE[$cookie_name])) {

    $counter[$date] += 1;

    update_option($cookie_name, $counter); 

    setcookie($cookie_name, "visited", time() + (86400), "/"); // expired in 1 day
}

// $stats = [];
// for($d=2015;$d<2025;$d++)
// {
//     $stats[$d.'-01-01'] = mt_rand(10, 1000);
// }

// update_option($cookie_name, $stats); 

// for($d=1;$d<=10;$d++)
// {
//     $counter['2024-'.$d.'-01'] = mt_rand(10, 1000);;
// }

// update_option($cookie_name, $counter); 