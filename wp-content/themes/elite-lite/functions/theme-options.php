<?php

add_action('init', 'of_options');
if (!function_exists('of_options')) {

    function of_options() {
        // VARIABLES
        $themename = 'Elite lite ';
        $shortname = "of";
        // Populate OptionsFramework option in array for use in theme
        global $of_options;
        $of_options = elite_get_option('of_options');
        //Front page on/off
        $file_rename = array("on" => "On", "off" => "Off");
        // Background Defaults
        $background_defaults = array('color' => '', 'image' => '', 'repeat' => 'repeat', 'position' => 'top center', 'attachment' => 'scroll');
        //Stylesheet Reader
        $alt_stylesheets = array("default" => "default", "black" => "black", "brown" => "brown", "blue" => "blue", "orange" => "orange", "pink" => "pink", "purple" => "purple", "red" => "red", "green" => "green", "olive" => "olive");
        // Pull all the categories into an array
        $options_categories = array();
        $options_categories_obj = get_categories('hide_empty=0');
        foreach ($options_categories_obj as $category) {
            $options_categories[$category->cat_ID] = $category->cat_name;
        }
        // Pull all the pages into an array
        $options_pages = array();
        $options_pages_obj = get_pages('sort_column=post_parent,menu_order');
        $options_pages[''] = 'Select a page:';
        foreach ($options_pages_obj as $page) {
            $options_pages[$page->ID] = $page->post_title;
        }
        // If using image radio buttons, define a directory path
        $imagepath = get_template_directory_uri() . '/images/';
        $options = array(
            /* ---------------------------------------------------------------------------- */
            /* General Setting */
            /* ---------------------------------------------------------------------------- */
            array("name" => "General Settings",
                "type" => "heading"),
            array("name" => "Custom Logo",
                "desc" => "Choose your own logo. Optimal Size: 221px Wide by 84px Height.",
                "id" => "elite_logo",
                "type" => "upload"),
            array("name" => "Custom Favicon",
                "desc" => "Specify a 16px x 16px image that will represent your website's favicon.",
                "id" => "elite_favicon",
                "type" => "upload"),
            array("name" => "Body Background Image",
                "desc" => "Select image to change your website background",
                "id" => "elite_bodybg",
                "std" => "",
                "type" => "upload"),
            array("name" => "Enable Custom Front Page",
                "desc" => "Overrides the WordPress <a href='" . admin_url('/options-reading.php') . "'>front page option</a>",
                "id" => "re_nm",
                "std" => "on",
                "type" => "radio",
                "options" => $file_rename),
            /* ---------------------------------------------------------------------------- */
            /* Slider Setting */
            /* ---------------------------------------------------------------------------- */
            //Slider Setting
            array("name" => "Feature Setting",
                "type" => "heading"),
            //First Slider
            array("name" => "Feature Image",
                "desc" => "Choose your image for feature. Optimal size is 640px wide and 332px height.",
                "id" => "elite_slideimage1",
                "std" => "",
                "type" => "upload"),
            array("name" => "Feature Heading",
                "desc" => "Enter your text heading for feature",
                "id" => "elite_sliderhead1",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Feature Description",
                "desc" => "Enter your text for feature description",
                "id" => "elite_sliderdesc1",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Feature Read More Link Text",
                "desc" => "Enter your text for feature read more Link",
                "id" => "elite_slidelink_text1",
                "std" => "",
                "type" => "text"),
            array("name" => "feature Read More Link",
                "desc" => "Enter yout link url for read more",
                "id" => "elite_slidelink1",
                "std" => "",
                "type" => "text"),
            /* ---------------------------------------------------------------------------- */
            /* Homepage Feature Area */
            /* ---------------------------------------------------------------------------- */
            array("name" => "Homepage Settings",
                "type" => "heading"),
            //Homepage Main Heading 
            array("name" => "Homepage Content Heading",
                "desc" => "Enter your text heading for homepage content heading",
                "id" => "elite_homehead",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Homepage Content Area",
                "desc" => "Put your text content or html code in this area. If required, You can visually design using the WordPress Page/Post Editor too and later copy and paste the HTML from that editor",
                "id" => "elite_homecontent",
                "std" => "",
                "type" => "texteditor"),
             array("name" => "Posts Heading",
                "desc" => "Enter your text for posts heading",
                "id" => "elite_home_blog",
                "std" => "",
                "type" => "textarea"),
            array("name" => "Posts On Front Page",
                "desc" => "Check if you want to show latest posts on front page.",
                "id" => "elite_post_front",
                "std" => "1",
                "type" => "checkbox"),
            /* ---------------------------------------------------------------------------- */
            /* Styling Setting */
            /* ---------------------------------------------------------------------------- */
            array("name" => "Styling Options",
                "type" => "heading"),
            array("name" => "Custom CSS",
                "desc" => "Quickly add some CSS to your theme by adding it to this block.",
                "id" => "elite_customcss",
                "std" => "",
                "type" => "textarea"),
            /* ---------------------------------------------------------------------------- */
            /* Footer Setting */
            /* ---------------------------------------------------------------------------- */
            array("name" => "Footer Settings",
                "type" => "heading"),
            array("name" => "Footer Text",
                "desc" => "Enter text you want to be displayed on Footer",
                "id" => "elite_footertext",
                "std" => "",
                "type" => "text"),
        );
        elite_update_option('of_template', $options);
        elite_update_option('of_themename', $themename);
        elite_update_option('of_shortname', $shortname);
    }

}
?>
