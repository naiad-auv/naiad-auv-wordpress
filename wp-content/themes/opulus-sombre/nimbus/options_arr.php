<?php

/* * *************************************************************************************************** */
// Global Options Array
/* * *************************************************************************************************** */


global $NIMBUS_OPTIONS_ARR;

$NIMBUS_OPTIONS_ARR = array();

 // Membership

$NIMBUS_OPTIONS_ARR[] = array("name" => "Nimbus Membership",
    "id" => "membership_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "membership",
    "type" => "tab");
    
$NIMBUS_OPTIONS_ARR[] = array( "tab" => "membership",
    "html" => "
        <div id='membership_tab'>
            <h1 style='float:left; margin-bottom:0;'>" . __('Nimbus Membership', 'nimbus_opulus_sombre') . "</h1>
            <a class='membership_button' style='float:right; margin:30px 0 0 0' href='http://www.nimbusthemes.com/join/?utm_source=opulus_sombre&utm_medium=theme&utm_content=panel_membership_tag&utm_campaign=opulus_sombre'>" . __('Join Today!', 'nimbus_opulus_sombre') . "</a>
            <div class='clear'></div>
            <h2>" . __('Unlimited downloads of all Nimbus Themes! Plus...', 'nimbus_opulus_sombre') . "</h2>
            <div class='clear5'></div>
            <ul>
                <li>
                    <h3>" . __('Unlimited Support on the Nimbus Forums', 'nimbus_opulus_sombre') . "</h3>
                    <p>" . __('If you\'ve got questions, we\'ve got answers. It\'s our commitment to you that we\'ll provide the most positive support anywhere on the web!', 'nimbus_opulus_sombre') . "</p>
                </li>
                <li>
                    <h3>" . __('Powerful SEO Tools', 'nimbus_opulus_sombre') . "</h3>
                    <p>" . __('Get powerful SEO tools that give you maximum control of your theme\'s placement on Google. Add custom titles, descriptions and keywords to each page or choose defaults for ease of use.', 'nimbus_opulus_sombre') . "</p>
                </li>
                <li><h3>" . __('Hundreds of Shortcodes', 'nimbus_opulus_sombre') . "</h3>
                    <p>" . __('Style your website with custom buttons, images, lists, typography, tables, columns, and more... all brought to you by our vast library of shortcodes. View all your shortcode options here:', 'nimbus_opulus_sombre') . " <a href='http://demo.nimbusthemes.com/opulus-sombre/shortcodes/' target='_blank'>" . __('Opulus Sombre Shortcodes', 'nimbus_opulus_sombre') . "</a></p>
                </li>
                <li><h3>" . __('Custom Widgets', 'nimbus_opulus_sombre') . "</h3>
                    <p>" . __('Use custom widgets to quickly and easily populate your website with profesionally designed content.', 'nimbus_opulus_sombre') . "</p>
                </li>
                <li><h3>" . __('Frontpage Slideshows', 'nimbus_opulus_sombre') . "</h3>
                    <p>" . __('Create your website\'s front page by choosing from dozens of home page layout options, including dynamic slideshows, static images, featured posts, widgets, and blog feeds. So many options means you\'re never stuck with a generic site! Preview some of your options:', 'nimbus_opulus_sombre') . "</p>
                    <p><a href='http://demo.nimbusthemes.com/opulus-sombre/' target='_blank'>" . __('Frontpage 1', 'nimbus_opulus_sombre') . "</a> | <a href='http://demo.nimbusthemes.com/opulus-sombre/home/alt-home-1/' target='_blank'>" . __('Frontpage 2', 'nimbus_opulus_sombre') . "</a> | <a href='http://demo.nimbusthemes.com/opulus-sombre/home/alt-home-2/' target='_blank'>" . __('Frontpage 3', 'nimbus_opulus_sombre') . "</a> |
    <a href='http://demo.nimbusthemes.com/opulus-sombre/home/alt-home-3/' target='_blank'>" . __('Frontpage 4', 'nimbus_opulus_sombre') . "</a> | <a href='http://demo.nimbusthemes.com/opulus-sombre/home/alt-home-4/' target='_blank'>" . __('Frontpage 5', 'nimbus_opulus_sombre') . "</a> | <a href='http://demo.nimbusthemes.com/opulus-sombre/home/alt-home-5/' target='_blank'>" . __('Frontpage 6', 'nimbus_opulus_sombre') . "</a> | <a href='http://demo.nimbusthemes.com/opulus-sombre/home/alt-home-6/' target='_blank'>" . __('Frontpage 7', 'nimbus_opulus_sombre') . "</a></p>
                </li>
                <li><h3>" . __('Portfolio Pages', 'nimbus_opulus_sombre') . "</h3>
                    <p>" . __('To truly showcase your work in style, choose from one of our five gorgeous portfolio layout options. Preview just some of your options:', 'nimbus_opulus_sombre') . "</p> 
                    <p><a href='http://demo.nimbusthemes.com/opulus-sombre/portfolio/' target='_blank'>" . __('Portfolio', 'nimbus_opulus_sombre') . "</a> | <a href='http://demo.nimbusthemes.com/opulus-sombre/portfolio/type/dignissimos/' target='_blank'>" . __('Alt Portfolio 1', 'nimbus_opulus_sombre') . "</a> | <a href='http://demo.nimbusthemes.com/opulus-sombre/portfolio/type/consectetuer/' target='_blank'>" . __('Alt Portfolio 2', 'nimbus_opulus_sombre') . "</a>
    <a href='http://demo.nimbusthemes.com/opulus-sombre/portfolio/type/tincidunt/' target='_blank'>" . __('Alt Portfolio 3', 'nimbus_opulus_sombre') . "</a> | <a href='http://demo.nimbusthemes.com/opulus-sombre/portfolio/type/dolor/' target='_blank'>" . __('Alt Portfolio 4', 'nimbus_opulus_sombre') . "</a></p>
                </li>
                <li><h3>" . __('Responsive, Custom CSS Options', 'nimbus_opulus_sombre') . "</h3>
                    <p>" . __('Polish your site down to the minute detail with responisve, custom CSS. Your site can look different on every browser size!', 'nimbus_opulus_sombre') . "</p>
                </li>
            <ul>
        </div>
        
  
    <div class='clear30'></div>
    <div class='clear30'></div>
    <div class='clear30'></div>
    <div class='clear30'></div> 
  ",
  "type" => "html"); 

// Setup

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Theme Setup', 'nimbus_opulus_sombre'),
    "id" => "setup_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "setup",
    "type" => "tab");
    
$NIMBUS_OPTIONS_ARR[] = array( "tab" => "setup",
    "html" => "
    <h1>" . __('Set Up Your', 'nimbus_opulus_sombre') . THEME_NAME . __('Theme', 'nimbus_opulus_sombre') . "</h1>
    <p><strong>" . __('We realize there\'s a lot going on with this theme, so we\'ve tried to make setup as simple as possible.', 'nimbus_opulus_sombre') . "</strong></p> 
    <p>" . __('There are a few initial steps that will put you on track to creating the fully operational website of your dreams:', 'nimbus_opulus_sombre') . "</p> 
    <ol> 
        <li>
            <p>" . __('If you are starting from scratch, then you\'ll want to load some example content by clicking the button below.', 'nimbus_opulus_sombre') . "</p>
            <div class='clear10'></div>    
            <input type='submit' class='nimbus_button_blue' name='loaddemo' onclick='return confirm( \"This action will create several new pages, posts and portfolio items on your website and set one of these pages as the frontpage. Please confirm that you would like to proceed.\" );' value='Load Demo Content' />
            <div class='clear10'></div>
        </li>
        <li>
            <p>" . __('Once you\'ve loaded the demo content, you\'re going to want to learn how to make changes to your website and use the Nimbus Panel. We\'ve provided an extensive user guide PDF that you\'ll want to read through as you\'re learning your way around:', 'nimbus_opulus_sombre') . "</p>
            <div class='clear20'></div> 
            <a class='nimbus_button_blue' target='_blank' href='" . get_template_directory_uri() . '/Opulus_Sombre_User_Guide.pdf' . "'>" . __('Download the User Guide', 'nimbus_opulus_sombre') . "</a>
            <div class='clear10'></div>
        </li>
        <li>
            <p>" . __('Join the Nimbus Themes Newsletter to stay up to date with theme features, updates, news and special offers.', 'nimbus_opulus_sombre') . "</p>
            <div class='clear20'></div> 
            <a class='nimbus_button_blue' target='_blank' href='http://eepurl.com/A2701'>" . __('Signup Now', 'nimbus_opulus_sombre') . "</a>
            <div class='clear30'></div> 
            <div class='clear30'></div> 
        </li>
    </ol>
    <h1>" . __('Additional Settings', 'nimbus_opulus_sombre') . "</h1>
  ",
  "type" => "html");  
  
$NIMBUS_OPTIONS_ARR[] = array("name" => __('Reminder Images', 'nimbus_opulus_sombre'),
    "desc" => __('When you\'re comfortable with loading featured images and working with the ', 'nimbus_opulus_sombre') . THEME_NAME . __(' Theme, you may want to turn off all reminder images.', 'nimbus_opulus_sombre'),
    "id" => "reminder_images",
    "default" => "on",
    "type" => "radio",
    "tab" => "setup",
    "classes" => "",
    "options" => array("on" => __('On', 'nimbus_opulus_sombre'),"off" => __('Off', 'nimbus_opulus_sombre')));
    
$NIMBUS_OPTIONS_ARR[] = array("name" => __('Example Widgets', 'nimbus_opulus_sombre'),
    "desc" => __('When you\'re comfortable working with the theme, you may want to turn off all example widgets.', 'nimbus_opulus_sombre'),
    "id" => "example_widgets",
    "default" => "on",
    "type" => "radio",
    "tab" => "setup",
    "classes" => "",
    "options" => array("on" => __('On', 'nimbus_opulus_sombre'),"off" => __('Off', 'nimbus_opulus_sombre')));   
  

  
// General	

$NIMBUS_OPTIONS_ARR[] = array("name" => __('General Settings', 'nimbus_opulus_sombre'),
    "id" => "general_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "general",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Image Logo', 'nimbus_opulus_sombre'),
    "desc" => __('Upload a logo image. Click the info icon to left for more information.', 'nimbus_opulus_sombre'),
    "id" => "image_logo",
    "default" => "",
    "tab" => "general",
    "classes" => "",
    "info" => "<p>" . __('If you have a logo, enter it here. The dimensions of the logo image you upload will be the dimensions you see on your website, so make sure it\'s the size you want. ', 'nimbus_opulus_sombre') . "</p>
                                    <p>" . __('In order for the header to look the same as the demo site header, the logo should be no taller than 77 pixels. There is a 5px margin on the top and bottom of the logo so it won\'t butt up against the edges, but make sure to leave some open space in your logo for proper spacing.', 'nimbus_opulus_sombre') . "</p>
                                    <p>" . __('Select <strong>Browse</strong> and find the file on your computer. After it\'s uploaded, select <strong>Insert into Post</strong> and this will auto-populate the <strong>Logo</strong> field with the new URL of the uploaded logo file. ', 'nimbus_opulus_sombre') . "</p>
                                    <p>" . __('Make sure to <strong>Save</strong>.', 'nimbus_opulus_sombre') . "</p>",
    //"video" => "",
    "type" => "image");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Text Logo', 'nimbus_opulus_sombre'),
    "desc" => __('If no image logo is loaded, a text logo will be displayed. You can style this text on the <strong>Typogaphy</strong> tab.', 'nimbus_opulus_sombre'),
    "id" => "text_logo",
    "default" => get_bloginfo('name'),
    "type" => "text",
    "info" => "<p>" . __('If you don\'t have a logo, you can use one of our many preset Google fonts to create a quick logo. Just type in the text you want for the logo in this space. You can style the text on the typography tab later on.', 'nimbus_opulus_sombre') . "</p>",
    "tab" => "general",
    "classes" => "");

/* $NIMBUS_OPTIONS_ARR[] = array( "name" => "Input Radio (one)",
  "desc" => "Radio select with default options 'one'.",
  "id" => "example_radio",
  "default" => "one",
  "tab" => "general",
  "type" => "radio",
  "options" => array("one" => "One","two" => "Two","three" => "Three","four" => "Four","five" => "Five"));

  $NIMBUS_OPTIONS_ARR[] = array( "tab" => "general",
  "html" => "<hr>",
  "type" => "html"); */

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Favicon', 'nimbus_opulus_sombre'),
    "desc" => __('Upload a favicon image.', 'nimbus_opulus_sombre'),
    "id" => "favicon",
    "default" => "",
    "tab" => "general",
    "classes" => "",


    "type" => "pro");

$NIMBUS_OPTIONS_ARR[] = array("name" => "Default Gravatar",
    "desc" => "There is already a default gravatar that ships with WordPress, but you can change it here. Upload a default gravatar that will be displayed when a commenter has not signed up for a personalized gravatar. After loading your new gravatar here you will then need to navigate to Setting >> Discussion >> select your new gravatar.",
    "id" => "gravatar",
    "default" => "",
    "tab" => "general",
    "classes" => "",
    "info" => "<p>The default avatar is the image that appears in the comments section of the blog if a user doesn't have a personal avatar through Gravatar. </p>
                                    <p>The theme already has a default avatar but if you'd like to put one of your own in, this is where you do it. The avatar image can be any size as long as it's a square; it will be resized automatically to fit the 75x75px default commentator image.</p>
                                    <p> Once you've uploaded the avatar, select <strong>Save</strong> and then go to <strong>Settings >> Discussion</strong> and scroll down to <strong>Avatars</strong>, select the new default avatar and <strong>Save Changes</strong>.</p>",
    "type" => "image");
    
$NIMBUS_OPTIONS_ARR[] = array("name" => __('Read More Text', 'nimbus_opulus_sombre'),
    "desc" => __('In several locations around the theme there are links to Read More. This text can be changed here', 'nimbus_opulus_sombre'),
    "id" => "read_more",
    "default" => "Read More &rarr;",
    "type" => "text",
    "tab" => "general",
    "classes" => "");     

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Copyright Text', 'nimbus_opulus_sombre'),
    "desc" => __('This text wil be displayed in the footer of your website.', 'nimbus_opulus_sombre'),
    "id" => "copyright",
    "tab" => "general",
    "default" => "&copy; " . date('o') . ", " . get_bloginfo('name'),
    "info" => "<p>" . __('The copyright text will show up in the footer. Just put your site/company name in place of the default site title. Change the year here too if you\'d like.', 'nimbus_opulus_sombre') . "</p>",
    "type" => "textarea");

// Contact	

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Contact Info', 'nimbus_opulus_sombre'),
    "id" => "contact_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "contact",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Public Phone Number', 'nimbus_opulus_sombre'),
    "desc" => __('Enter the phone number that will be displayed. Leave blank to dispay none.', 'nimbus_opulus_sombre'),
    "id" => "public_phone",
    "default" => "",
    "type" => "text",
    "tab" => "contact",
    "info" => "<p>" . __('The phone number that you enter into this field will populate the header and footer of your website. Leave blank if you do not wish to publicly display a phone number.', 'nimbus_opulus_sombre') . "</p>",
    "classes" => "");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Public Email', 'nimbus_opulus_sombre'),
    "desc" => __('Enter the email address that will be displayed. Leave blank to dispay none.', 'nimbus_opulus_sombre'),
    "id" => "public_email",
    "default" => "",
    "type" => "text",
    "tab" => "contact",
    "info" => "<p>" . __('The email address that you enter into this field will populate the header and footer of your website. Leave blank if you do not wish to publicly display an email address.', 'nimbus_opulus_sombre') . "</p>",
    "classes" => "");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Public Fax', 'nimbus_opulus_sombre'),
    "desc" => __('Enter the fax number that will be displayed. Leave blank to dispay none.', 'nimbus_opulus_sombre'),
    "id" => "public_fax",
    "default" => "",
    "type" => "text",
    "tab" => "contact",
    "info" => "<p>" . __('The fax number that you enter into this field will populate the header and footer of your website. Leave blank if you do not wish to publicly display a fax number.', 'nimbus_opulus_sombre') . "</p>",
    "classes" => "");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Public Address', 'nimbus_opulus_sombre'),
    "desc" => __('Enter the phisical address that will be displayed. Leave blank to dispay none.', 'nimbus_opulus_sombre'),
    "id" => "address",
    "tab" => "contact",
    "default" => "",
    "info" => "<p>" . __('The address that you enter into this field will populate the footer of your website. Leave blank if you do not wish to publicly display an address.', 'nimbus_opulus_sombre') . "</p>",
    "type" => "textarea");





// Frontpage

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Frontpage', 'nimbus_opulus_sombre'),
    "id" => "frontpage_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "frontpage",
    "type" => "tab");    

$NIMBUS_OPTIONS_ARR[] = array("name" => "Banner Options",
    "desc" => __('Select which banner layout you would like to display on the frontpage.', 'nimbus_opulus_sombre') . "<br /><span style='color:#fc7e2a; font-weight:bold;'>" . __('Slideshows are available to Nimbus Members', 'nimbus_opulus_sombre') . "</span> <a href='http://www.nimbusthemes.com/join/?utm_source=opulus_sombre&amp;utm_medium=theme&amp;utm_content=panel_link&amp;utm_campaign=opulus_sombre'  style='font-weight:bold;'>" . __('Join today!!', 'nimbus_opulus_sombre') . "</a>",
    "id" => "banner_option",
    "default" => "full_image_border",
    "tab" => "frontpage",
    "type" => "radio",
    "info" => "<p>You have the option of creating a variety of layouts for the banner area on your home page. Here's a breakdown of the options:</p>
                                    <ul>
                                        <li><strong>" . __('(1) Banner Content, Image with No Border:</strong> Banner content is located on the left. Static image is aligned top-right with no border. This is the setting we\'ve used for the Opulus Demo frontpage. You can use this no-border image to place a PNG (or JPG w/the same background color as the header) onto the frontpage.', 'nimbus_opulus_sombre') . "<br /><img src='" . OPTIONS_PATH . "images/banner_1.gif' style='margin:10px 0 10px 80px; border: 1px solid #B6B6B6;' alt='banner example' /></li> 
                                        <li><strong>" . __('(2) Banner Content, Image with Border:</strong> Banner content is located on the left. Static image is aligned top-right with a border.', 'nimbus_opulus_sombre') . "<br /><img src='" . OPTIONS_PATH . "images/banner_2.gif' style='margin:10px 0 10px 80px; border: 1px solid #B6B6B6;' alt='banner example'  /></li> 
                                        <li><strong>" . __('(3) Full Width Static Image With Border', 'nimbus_opulus_sombre') . "</strong><br /><img src='" . OPTIONS_PATH . "images/banner_3.gif' style='margin:10px 0 10px 80px; border: 1px solid #B6B6B6;' alt='banner example' /></li> 
                                        <li><strong>" . __('(4) Full Width Static Image, No Border:</strong> This is where you can put full-width transparencies or images with the same background color as the rest of the banner area.', 'nimbus_opulus_sombre') . "<br /><img src='" . OPTIONS_PATH . "images/banner_4.gif' style='margin:10px 0 10px 80px; border: 1px solid #B6B6B6;' alt='banner example'  /></li> 
                                        <li><strong>" . __('(5) Full Width Slideshow:</strong> Full sized slideshow spans across the entire banner area.', 'nimbus_opulus_sombre') . "<br /><img src='" . OPTIONS_PATH . "images/banner_5.gif' style='margin:10px 0 10px 80px; border: 1px solid #B6B6B6;' alt='banner example' /></li> 
                                        <li><strong>" . __('(6) Banner Content with Slideshow:</strong> Banner content is located on the left. Slideshow on the right side.', 'nimbus_opulus_sombre') . "<br /><img src='" . OPTIONS_PATH . "images/banner_6.gif' style='margin:10px 0 10px 80px; border: 1px solid #B6B6B6;' alt='banner example'  /></li> 
                                        <li><strong>" . __('(7) Full Width Banner Content:</strong> Banner content spans full width.', 'nimbus_opulus_sombre') . "<br /><img src='" . OPTIONS_PATH . "images/banner_7.gif' style='margin:10px 0 10px 80px; border: 1px solid #B6B6B6;' alt='banner example' /></li> 
                                    </ul>",
    "options" => array("image" => __('Banner Content, Image, No Border', 'nimbus_opulus_sombre'), "image_border" => __('Banner Content, Image with Border', 'nimbus_opulus_sombre'), "full_image" => __('Full Width Static Image, No Border', 'nimbus_opulus_sombre'), "full_image_border" => __('Full Width Static Image, with Border', 'nimbus_opulus_sombre'), "content_only" => __('Full Width Banner Content: No image.', 'nimbus_opulus_sombre')));

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Action Text', 'nimbus_opulus_sombre'),
    "desc" => __('This text wil be displayed in in the gradient box just below the header on the frontpage.', 'nimbus_opulus_sombre'),
    "id" => "action_text",
    "tab" => "frontpage",
    "default" => __('Welcome to Opulus Sombre, a dark version of the Opulus WordPress Theme. To edit this text, please login to your WordPress dashboard and select Theme Options, then Frontpage.', 'nimbus_opulus_sombre'),
    "type" => "textarea");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Display Featured Pages', 'nimbus_opulus_sombre'),
    "desc" => __('Check here to display three featured pages under the banner on the frontpage.', 'nimbus_opulus_sombre'),
    "id" => "toggle_featured",
    "tab" => "frontpage",
    "default" => "1",
    "label" => "Show Featured",
    "info" => "<p>" . __('The three images you see below the action text are the featured pages. Select <strong>Show Featured</strong> to display the three featured pages. You can choose which pages you want displayed in options 4-6 of the <strong>Frontpage</strong> settings in the Nimbus Panel.', 'nimbus_opulus_sombre') . "</p>",
    "type" => "checkbox");
    
$NIMBUS_OPTIONS_ARR[] = array("name" => __('Hide featured pages excerpts', 'nimbus_opulus_sombre'),
    "desc" => __('Check here to hide the excerpt on each of the three featured content spots.', 'nimbus_opulus_sombre'),
    "id" => "toggle_featured_exerpt",
    "tab" => "frontpage",
    "default" => "0",
    "label" => "Hide featured pages excerpt",
    "type" => "checkbox");    

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Left Feature Column', 'nimbus_opulus_sombre'),
    "desc" => __('Set the page to display in the left feature column on the frontpage. Remember to set a featured image for this page if you want one to appear.', 'nimbus_opulus_sombre'),
    "id" => "left_featured",
    "default" => nimbus_random_page(),
    "tab" => "frontpage",
    "type" => "select",
    "class" => "",
    "info" => "<p>" . __('From the dropdown, select the page you want displayed in the left feature column. The image will be the feature image associated with that page.', 'nimbus_opulus_sombre') . "</p>",
    "options" => nimbus_pages_arr());

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Center Feature Column', 'nimbus_opulus_sombre'),
    "desc" => __('Set the page to display in the center feature column on the frontpage. Remember to set a featured image for this page if you want one to appear.', 'nimbus_opulus_sombre'),
    "id" => "center_featured",
    "default" => nimbus_random_page(),
    "tab" => "frontpage",
    "type" => "select",
    "class" => "",
    "info" => "<p>" . __('From the dropdown, select the page you want displayed in the center feature column. The image will be the feature image associated with that page.', 'nimbus_opulus_sombre') . "</p>",
    "options" => nimbus_pages_arr());

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Right Feature Column', 'nimbus_opulus_sombre'),
    "desc" => __('Set the page to display in the right feature column on the frontpage. Remember to set a featured image for this page if you want one to appear.', 'nimbus_opulus_sombre'),
    "id" => "right_featured",
    "default" => nimbus_random_page(),
    "tab" => "frontpage",
    "type" => "select",
    "class" => "",
    "info" => "<p>" . __('From the dropdown, select the page you want displayed in the right feature column. The image will be the feature image associated with that page.', 'nimbus_opulus_sombre') . "</p>",
    "options" => nimbus_pages_arr());

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Display Content Position', 'nimbus_opulus_sombre'),
    "desc" => __('Select where you would like to display content on the frontpage.', 'nimbus_opulus_sombre'),
    "id" => "fp_content_pos",
    "default" => "none",
    "tab" => "frontpage",
    "type" => "radio",
    "info" => "<p>" . __('The content area on the <strong>Home</strong> page will be displayed here. Choose where you want it displayed, whether <strong>Above Featured Pages</strong>, <strong>Below Featured Pages</strong>, or choose <strong>Don\'t Display Content</strong>.', 'nimbus_opulus_sombre') . "</p>",
    "options" => array("below" => __('Below Featured Pages', 'nimbus_opulus_sombre'), "above" => __('Above Featured Pages', 'nimbus_opulus_sombre'), "none" => __('Don\'t Display Content', 'nimbus_opulus_sombre')));

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Display Blog Feed Row', 'nimbus_opulus_sombre'),
    "desc" => __('Check here to display a small blog feed on the frontpage. A widget area will also be added.', 'nimbus_opulus_sombre'),
    "id" => "toggle_blog",
    "tab" => "frontpage",
    "default" => "1",
    "label" => "Show Blog Row",
    "info" => "<p>" . __('Will display a small blog feed on the frontpage if you choose <strong>Show Blog Row</strong>.', 'nimbus_opulus_sombre') . "</p>",
    "type" => "checkbox");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Frontpage Blog Feed Title', 'nimbus_opulus_sombre'),
    "desc" => __('Enter the title you would like to have displayed above the blog feed.', 'nimbus_opulus_sombre'),
    "id" => "blog_feed_title",
    "default" => __('Latest News From the Blog', 'nimbus_opulus_sombre'),
    "type" => "text",
    "tab" => "frontpage",
    "info" => "<p>" . __('If you\'ve chosen to display the blog feed on the frontpage, enter the title you would like to have displayed above the blog feed here.', 'nimbus_opulus_sombre') . "</p>",
    "classes" => ""); 

// Blog

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Blog', 'nimbus_opulus_sombre'),
    "id" => "blog_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "blog",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Title of Blog', 'nimbus_opulus_sombre'),
    "desc" => __('Set the title you would like to have displayed on the blog page.', 'nimbus_opulus_sombre'),
    "id" => "blog_title",
    "default" => "Blog",
    "type" => "text",
    "tab" => "blog",
    "info" => "<p>" . __('You can change the name so that it displays differently in the header section of the Blog pages. Note that if you want to change the name of the Blog as it appears in the navigation, you can rename it in the <strong>Menus</strong> editor under <strong>Appearance</strong> - just click the arrow down next to the page you want to rename and enter in the new name under <strong>Navigation Label</strong>.', 'nimbus_opulus_sombre') . "</p>",
    "classes" => "");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Number of Posts on the Blog', 'nimbus_opulus_sombre'),
    "desc" => __('Set the number of posts you would like to be visible on the Blog, Archives, Tags and other blog-related pages.', 'nimbus_opulus_sombre'),
    "id" => "posts_on_blog",
    "default" => "5",
    "type" => "text",
    "tab" => "blog",
    "classes" => "minitext");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Display Meta Information on Posts', 'nimbus_opulus_sombre'),
    "desc" => __('Select the folllowing information you would like to have displayed on post pages.', 'nimbus_opulus_sombre'),
    "id" => "nimbus_post_meta_single",
    "tab" => "blog",
    "default" => array("title" => "1", "post_thumb" => "1", "author" => "1", "date" => "1", "categories" => "1", "tags" => "1"),
    "type" => "multicheck",
    "options" => nimbus_include_post_meta());

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Display Meta Information on Blog and Archive', 'nimbus_opulus_sombre'),
    "desc" => __('Select the folllowing information you would like to have displayed on blog and archive pages.', 'nimbus_opulus_sombre'),
    "id" => "post_meta_blog",
    "tab" => "blog",
    "default" => array("title" => "1", "post_thumb" => "1", "author" => "1", "date" => "1", "categories" => "1"),
    "type" => "multicheck",
    "options" => nimbus_include_blog_meta());

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Display Author Bio', 'nimbus_opulus_sombre'),
    "desc" => __('Select to display the author\'s bio at the bottom of the post.', 'nimbus_opulus_sombre'),
    "id" => "display_bio",
    "tab" => "blog",
    "default" => "1",
    "label" => "Display Bio",
    "info" => "<p>" . __('The author bio will be displayed at the bottom of the post. This information is coming from the <strong>Profile</strong> page located under <strong>Users >> Your Profile</strong>.', 'nimbus_opulus_sombre') . "</p>",
    "type" => "checkbox");



// Design

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Design', 'nimbus_opulus_sombre'),
    "id" => "design_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "design",
    "type" => "tab");  

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Body Background Color', 'nimbus_opulus_sombre'),
    "desc" => __('Set the background color for your website.', 'nimbus_opulus_sombre'),
    "id" => "body_bg_color",
    "html" => "<p>Please use the WordPress core <a href='" . admin_url() . "themes.php?page=custom-background'>Background</a> setting under Appearance >> Background.</p>",
    "tab" => "design",
    "type" => "item_html");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Header Background Color', 'nimbus_opulus_sombre'),
    "desc" => __('Set the background color for the header area.', 'nimbus_opulus_sombre'),
    "id" => "header_bg_color",
    "tab" => "design",
    "default" => '#353535',
    "type" => "color");
    
$NIMBUS_OPTIONS_ARR[] = array("name" => __('Dropdown Menu Backgound Color', 'nimbus_opulus_sombre'),
    "desc" => __('Set the background color for the dropdown menus.', 'nimbus_opulus_sombre'),
    "id" => "dd_bg_color",
    "tab" => "design",
    "default" => '#464646',
    "type" => "color");     
    
$NIMBUS_OPTIONS_ARR[] = array("name" => __('Dropdown Menu Border Color', 'nimbus_opulus_sombre'),
    "desc" => __('Set the border color for the dropdown menus.', 'nimbus_opulus_sombre'),
    "id" => "dd_border_color",
    "tab" => "design",
    "default" => '#535353',
    "type" => "color");     

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Ribbon Background Color', 'nimbus_opulus_sombre'),
    "desc" => __('Set the background color for the ribbon that spans the header.', 'nimbus_opulus_sombre'),
    "id" => "ribbon_bg_color",
    "tab" => "design",
    "default" => '#ffffff',
    "type" => "color");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Ribbon and Content Drop Shadow', 'nimbus_opulus_sombre'),
    "desc" => __('Set the drop shadow color for the ribbon and content area.', 'nimbus_opulus_sombre'),
    "id" => "ribbon_content_shadow_color",
    "tab" => "design",
    "default" => '#000000',
    "type" => "color");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Action Text Gradient Color Top', 'nimbus_opulus_sombre'),
    "desc" => __('Set the background color for the top of the gradient in the action text area.', 'nimbus_opulus_sombre'),
    "id" => "action_bg_color_top",
    "tab" => "design",
    "default" => '#575757',
    "type" => "color");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Action Text Gradient Color Bottom', 'nimbus_opulus_sombre'),
    "desc" => __('Set the background color for the bottom of the gradient in the action text area.', 'nimbus_opulus_sombre'),
    "id" => "action_bg_color_bottom",
    "tab" => "design",
    "default" => '#353535',
    "type" => "color");
    
$NIMBUS_OPTIONS_ARR[] = array("name" => __('Action Text Bottom Border Color', 'nimbus_opulus_sombre'),
    "desc" => __('Set the color for the bottom border of the action text area.', 'nimbus_opulus_sombre'),
    "id" => "action_border_color_bottom",
    "tab" => "design",
    "default" => '#262626',
    "type" => "color");    

/** 	$NIMBUS_OPTIONS_ARR[] = array( 	"name" => "Image Border Thickness",
  "desc" => "Set the thickness of borders (in pixals) that suround all images within the content area of your website. Set to zero for no border.",
  "id" => "image_border_thickness",
  "default" => "1",
  "type" => "text",
  "tab" => "design",
  "classes" => "minitext");

  $NIMBUS_OPTIONS_ARR[] = array( 	"name" => "Image Padding",
  "desc" => "Set the padding for all images in content area. Set to zero for no padding.",
  "id" => "image_padding_thickness",
  "default" => "4",
  "type" => "text",
  "tab" => "design",
  "classes" => "minitext"); * */
  
$NIMBUS_OPTIONS_ARR[] = array("name" => __('Image Stroke Color', 'nimbus_opulus_sombre'),
    "desc" => __('Set the one pixel stroke color for theme images in the content area.', 'nimbus_opulus_sombre'),
    "id" => "image_stroke_color",
    "tab" => "design",
    "default" => '#000000',
    "type" => "color");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Image Border Color', 'nimbus_opulus_sombre'),
    "desc" => __('Set the four pixel border color for theme images in the content area.', 'nimbus_opulus_sombre'),
    "id" => "image_border_color",
    "tab" => "design",
    "default" => '#ffffff',
    "type" => "color");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Image Border Type', 'nimbus_opulus_sombre'),
    "desc" => __('Set the boder type for theme images in the content area', 'nimbus_opulus_sombre'),
    "id" => "image_border_type",
    "default" => "solid",
    "tab" => "design",
    "type" => "select",
    "class" => "",
    "options" => nimbus_image_border_types());

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Image Drop Shadow Color', 'nimbus_opulus_sombre'),
    "desc" => __('Set the drop shadow color for theme images in the content area.', 'nimbus_opulus_sombre'),
    "id" => "image_shadow_color",
    "tab" => "design",
    "default" => '#000000',
    "type" => "color");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Banner Image Stroke Color', 'nimbus_opulus_sombre'),
    "desc" => __('Set the one pixel stroke color for theme images in the frontpage banner area.', 'nimbus_opulus_sombre'),
    "id" => "banner_image_stroke_color",
    "tab" => "design",
    "default" => '#000000',
    "type" => "color");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Banner Image Border Color', 'nimbus_opulus_sombre'),
    "desc" => __('Set the four pixel border color for theme images in the frontpage banner  area.', 'nimbus_opulus_sombre'),
    "id" => "banner_image_border_color",
    "tab" => "design",
    "default" => '#ffffff',
    "type" => "color");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Banner Image Border Type', 'nimbus_opulus_sombre'),
    "desc" => __('Set the boder type for theme images in the frontpage banner  area', 'nimbus_opulus_sombre'),
    "id" => "banner_image_border_type",
    "default" => "solid",
    "tab" => "design",
    "type" => "select",
    "class" => "",
    "options" => nimbus_image_border_types());

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Banner Image Drop Shadow Color', 'nimbus_opulus_sombre'),
    "desc" => __('Set the drop shadow color for theme images in the frontpage banner  area.', 'nimbus_opulus_sombre'),
    "id" => "banner_image_shadow_color",
    "tab" => "design",
    "default" => '#000000',
    "type" => "color");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Buttons Gradient Color Top', 'nimbus_opulus_sombre'),
    "desc" => __('Set the background color for the top of the gradient in the Buttons.', 'nimbus_opulus_sombre'),
    "id" => "buttons_bg_color_top",
    "tab" => "design",
    "default" => '#ffffff',
    "type" => "color");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Buttons Gradient Color Bottom', 'nimbus_opulus_sombre'),
    "desc" => __('Set the background color for the bottom of the gradient in the Buttons.', 'nimbus_opulus_sombre'),
    "id" => "buttons_bg_color_bottom",
    "tab" => "design",
    "default" => '#adadad',
    "type" => "color");
    
$NIMBUS_OPTIONS_ARR[] = array("name" => __('Footer Background Color', 'nimbus'),
    "desc" => __('Set the background color for the footer area.', 'nimbus'),
    "id" => "nimbus_footer_bg_color",
    "tab" => "design",
    "default" => '#353535',
    "type" => "color");     

/* 	$NIMBUS_OPTIONS_ARR[] = array( 	"name" => "Blockquote Background Color",
  "desc" => "Set the background color for <strong>blockquotes</strong>.",
  "id" => "content_bg_color",
  "tab" => "design",
  "default" => '#ffffff',
  "type" => "color"); */

// Typography

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Typography', 'nimbus_opulus_sombre'),
    "id" => "typography_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "typography",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Body Settings', 'nimbus_opulus_sombre'),
    "desc" => __('Set <strong>Body</strong> font style. This is the default font that will be used in most instances on your website.', 'nimbus_opulus_sombre'),
    "id" => "body_style",
    "tab" => "typography",
    "info" => "<p>" . __('The <strong>Body</strong> font is the default font that will show up in most instances on your website. If you want your type to be legible, keep the majority of the default settings as they are. You can play around with the Font Face, Size, Line Height, and Color, but the others should probably stay as they are.', 'nimbus_opulus_sombre') . "</p>
                                    <ul>
                                        <li>" . __('<strong>Font Face</strong>: These are all the font options you have for the body text. We\'ve included our favorite and the most popular Google Fonts as well. If you want to know what a font looks like, search for the font online. Note that the body text is the text that will be displayed in small, paragraph format, so you want to pick a very readable font (not a display font that should be used only as a Header font).', 'nimbus_opulus_sombre') . "</li>
                                        <li>" . __('<strong>Font Size:</strong> The typical size for a Body font ranges between 10 and 14 pixels depending on the font. Bottom line, it should be readable.', 'nimbus_opulus_sombre') . "</li>
                                        <li>" . __('<strong>Line Height:</strong> This is the space in between the lines. 1 em is equal to whatever the font size is that you\'ve chosen. Generally, 1.4-1.6 is a good line height. If in doubt, keep the default and then play around with it to see the difference.', 'nimbus_opulus_sombre') . "</li>
                                        <li>" . __('<strong>Font Style:</strong> Normal would be good for a body font, but you can also choose bold, italic, or bold italic.', 'nimbus_opulus_sombre') . "</li>
                                        <li>" . __('<strong>Font Case:</strong> This allows you to choose to capitalize every letter, or make every letter lowercase. For a body font, this should remain in the Normal setting.', 'nimbus_opulus_sombre') . "</li>
                                        <li>" . __('<strong>Font Color:</strong> Use the Color Picker Tool to the left of the hexadecimal color code (ex: #d6d6d6) to choose a new body font color.', 'nimbus_opulus_sombre') . "</li>
                                    </ul>",
    "default" => array("size" => "13px", "line" => "1.5em", "face" => "Open Sans", "style" => "normal", "color" => "#d6d6d6", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Link Color', 'nimbus_opulus_sombre'),
    "desc" => __('Set the default link color.', 'nimbus_opulus_sombre'),
    "id" => "link_color",
    "tab" => "typography",
    "default" => '#ffffff',
    "type" => "color");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Link Hover Color', 'nimbus_opulus_sombre'),
    "desc" => __('Set link hover color.', 'nimbus_opulus_sombre'),
    "id" => "link_hover_color",
    "tab" => "typography",
    "default" => '#e8e8e8',
    "type" => "color");


$NIMBUS_OPTIONS_ARR[] = array("name" => __('Default Logo Typography', 'nimbus_opulus_sombre'),
    "desc" => __('Set typography preferences for the text logo that is displayed when no image logo exists.', 'nimbus_opulus_sombre'),
    "id" => "logo_style",
    "tab" => "typography",
    "default" => array("size" => "30px", "line" => "1em", "face" => "Croissant One", "style" => "normal", "color" => "#262626", "fonttrans" => "none"),
    "type" => "typography");
  
$NIMBUS_OPTIONS_ARR[] = array("name" => __('Contact Info in Header', 'nimbus_opulus_sombre'),
    "desc" => __('Set typography preferences for the contact info in the header.', 'nimbus_opulus_sombre'),
    "id" => "head_contact_style",
    "tab" => "typography",
    "default" => array("size" => "11px", "line" => "1em", "face" => "Open Sans", "style" => "normal", "color" => "#edeaea", "fonttrans" => "none"),
    "type" => "typography");   

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Navigation Font', 'nimbus_opulus_sombre'),
    "desc" => __('Set the navigation menu font style', 'nimbus_opulus_sombre'),
    "id" => "main_menu_style",
    "tab" => "typography",
    "default" => array("size" => "18px", "line" => "1em", "face" => "Anaheim", "style" => "normal", "color" => "#535353", "fonttrans" => "uppercase"),
    "type" => "typography");
    
$NIMBUS_OPTIONS_ARR[] = array("name" => __('Sub Navigation Font', 'nimbus_opulus_sombre'),
    "desc" => __('Set the sub navigation menu font style', 'nimbus_opulus_sombre'),
    "id" => "sub_menu_style",
    "tab" => "typography",
    "default" => array("size" => "16px", "line" => "1em", "face" => "Anaheim", "style" => "normal", "color" => "#e1e1e1", "fonttrans" => "none"),
    "type" => "typography");     

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Action Text Settings', 'nimbus_opulus_sombre'),
    "desc" => __('Set font preferences for the action text on the frontpage.', 'nimbus_opulus_sombre'),
    "id" => "action_style",
    "tab" => "typography",
    "default" => array("size" => "22px", "line" => "1.5em", "face" => "Anaheim", "style" => "normal", "color" => "#f0f0f0", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('H1 Settings', 'nimbus_opulus_sombre'),
    "desc" => __('Set H1 style.', 'nimbus_opulus_sombre'),
    "id" => "h1_style",
    "tab" => "typography",
    "default" => array("size" => "25px", "line" => "1em", "face" => "Anaheim", "style" => "normal", "color" => "#f2f2f2", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('H2 Settings', 'nimbus_opulus_sombre'),
    "desc" => __('Set H2 style.', 'nimbus_opulus_sombre'),
    "id" => "h2_style",
    "tab" => "typography",
    "default" => array("size" => "22px", "line" => "1.3em", "face" => "Anaheim", "style" => "normal", "color" => "#f2f2f2", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('H3 Settings', 'nimbus_opulus_sombre'),
    "desc" => __('Set H3 style.', 'nimbus_opulus_sombre'),
    "id" => "h3_style",
    "tab" => "typography",
    "default" => array("size" => "18px", "line" => "1.3em", "face" => "Anaheim", "style" => "bold", "color" => "#f2f2f2", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('H4 Settings', 'nimbus_opulus_sombre'),
    "desc" => __('Set H4 style.', 'nimbus_opulus_sombre'),
    "id" => "h4_style",
    "tab" => "typography",
    "default" => array("size" => "18px", "line" => "1.3em", "face" => "Anaheim", "style" => "normal", "color" => "#f2f2f2", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('H5 Settings', 'nimbus_opulus_sombre'),
    "desc" => __('Set H5 style.', 'nimbus_opulus_sombre'),
    "id" => "h5_style",
    "tab" => "typography",
    "default" => array("size" => "16px", "line" => "1.3em", "face" => "Anaheim", "style" => "normal", "color" => "#f2f2f2", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('H6 Settings', 'nimbus_opulus_sombre'),
    "desc" => __('Set H6 style.', 'nimbus_opulus_sombre'),
    "id" => "h6_style",
    "tab" => "typography",
    "default" => array("size" => "16px", "line" => "1.3em", "face" => "Anaheim", "style" => "normal", "color" => "#f2f2f2", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Blockquote Settings', 'nimbus_opulus_sombre'),
    "desc" => __('Set blockquote tag style and the typographic style for the [nimbus_quote] shortcode.', 'nimbus_opulus_sombre'),
    "id" => "blockquote_style",
    "tab" => "typography",
    "default" => array("size" => "18px", "line" => "1.4em", "face" => "Anaheim", "style" => "normal", "color" => "#ffffff", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Pullquote Settings', 'nimbus_opulus_sombre'),
    "desc" => __('Set typographic style for the [nimbus_pullquote_left] and [nimbus_pullquote_right] shortcodes.', 'nimbus_opulus_sombre'),
    "id" => "pullquote_style",
    "tab" => "typography",
    "default" => array("size" => "20px", "line" => "1.2em", "face" => "Anaheim", "style" => "normal", "color" => "#ffffff", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Code/Pre Settings', 'nimbus_opulus_sombre'),
    "desc" => __('Set Code/Pre style.', 'nimbus_opulus_sombre'),
    "id" => "code_style",
    "tab" => "typography",
    "default" => array('face' => 'Courier New', 'color' => '#535353'),
    "type" => "font");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('TH Settings', 'nimbus_opulus_sombre'),
    "desc" => __('Set TH (Table Heading) style.', 'nimbus_opulus_sombre'),
    "id" => "th_style",
    "tab" => "typography",
    "default" => array("size" => "18px", "line" => "1em", "face" => "Open Sans", "style" => "bold", "color" => "#0078ff", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('TD Settings', 'nimbus_opulus_sombre'),
    "desc" => __('Set TD (Table Data) style.', 'nimbus_opulus_sombre'),
    "id" => "td_style",
    "tab" => "typography",
    "default" => array("size" => "13px", "line" => "1.4em", "face" => "Arial", "style" => "normal", "color" => "#535353", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Table Caption Settings', 'nimbus_opulus_sombre'),
    "desc" => __('Set Table Caption style.', 'nimbus_opulus_sombre'),
    "id" => "tc_style",
    "tab" => "typography",
    "default" => array("size" => "13px", "line" => "1em", "face" => "Open Sans", "style" => "bold italic", "color" => "#535353", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Sidebar Titles', 'nimbus_opulus_sombre'),
    "desc" => __('Set the default font that will be used on sidebar titles.', 'nimbus_opulus_sombre'),
    "id" => "sidebar_title_style",
    "tab" => "typography",
    "default" => array("size" => "18px", "line" => "1.3em", "face" => "Anaheim", "style" => "bold", "color" => "#f2f2f2", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Footer Titles', 'nimbus_opulus_sombre'),
    "desc" => __('Set the default font that will be used for footer titles.', 'nimbus_opulus_sombre'),
    "id" => "footer_title_style",
    "tab" => "typography",
    "default" => array("size" => "18px", "line" => "1.3em", "face" => "Anaheim", "style" => "bold", "color" => "#f2f2f2", "fonttrans" => "uppercase"),
    "type" => "typography");
    
$NIMBUS_OPTIONS_ARR[] = array("name" => __('Footer Text', 'nimbus_opulus_sombre'),
    "desc" => __('Set the default font that will be used for footer text.', 'nimbus_opulus_sombre'),
    "id" => "footer_text_style",
    "tab" => "typography",
    "default" => array("size" => "13px", "line" => "1.4em", "face" => "Open Sans", "style" => "normal", "color" => "#f2f2f2", "fonttrans" => "none"),
    "type" => "typography"); 

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Default Button Font', 'nimbus_opulus_sombre'),
    "desc" => __('Set button style', 'nimbus_opulus_sombre'),
    "id" => "default_button_style",
    "tab" => "typography",
    "default" => array("size" => "18px", "line" => "1em", "face" => "Anaheim", "style" => "400", "color" => "#000000", "fonttrans" => "uppercase"),
    "type" => "typography");    

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Font for [nimbus_typography_one] Shortcode ', 'nimbus_opulus_sombre'),
    "desc" => __('Set the font that will be used for the [nimbus_typography_one] alternate typography shortcode.', 'nimbus_opulus_sombre'),
    "id" => "nimbus_typography_one",
    "tab" => "typography",
    "default" => array("face" => "Anaheim"),
    "type" => "pro");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Font for [nimbus_typography_two] Shortcode ', 'nimbus_opulus_sombre'),
    "desc" => __('Set the font that will be used for the [nimbus_typography_two] alternate typography shortcode.', 'nimbus_opulus_sombre'),
    "id" => "nimbus_typography_two",
    "tab" => "typography",
    "default" => array("face" => "Open Sans"),
    "type" => "pro");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Font for [nimbus_typography_three] Shortcode ', 'nimbus_opulus_sombre'),
    "desc" => __('Set the font that will be used for the [nimbus_typography_three] alternate typography shortcode.', 'nimbus_opulus_sombre'),
    "id" => "nimbus_typography_three",
    "tab" => "typography",
    "default" => array("face" => "Open Sans"),
    "type" => "pro");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Button Shortcodes', 'nimbus_opulus_sombre'),
    "desc" => __('Set the font that will be used for all button shortcodes.', 'nimbus_opulus_sombre'),
    "id" => "button_style",
    "tab" => "typography",
    "default" => array("face" => "Anaheim"),
    "type" => "pro");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Copyright Text', 'nimbus_opulus_sombre'),
    "desc" => __('Set the default text for the copright.', 'nimbus_opulus_sombre'),
    "id" => "copyright_style",
    "tab" => "typography",
    "default" => array("size" => "11px", "line" => "1em", "face" => "Open Sans", "style" => "normal", "color" => "#a6a6a6", "fonttrans" => "none"),
    "type" => "typography");
       

// Social Media

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Social Media', 'nimbus_opulus_sombre'),
    "id" => "social_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "social",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Facebook Page URL', 'nimbus_opulus_sombre'),
    "desc" => __('Full URL for your Facebook page. Like: https://www.facebook.com/profile.php?id=1138181505 ', 'nimbus_opulus_sombre'),
    "id" => "facebook_url",
    "default" => "",
    "type" => "text",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Twitter Page URL', 'nimbus_opulus_sombre'),
    "desc" => __('Full URL for your Twitter page. Like: http://twitter.com/#!/nimbusthemes ', 'nimbus_opulus_sombre'),
    "id" => "twitter_url",
    "default" => "",
    "type" => "text",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('LinkedIn Page URL', 'nimbus_opulus_sombre'),
    "desc" => __('Full URL to your LinkedIn page. Like: http://www.linkedin.com/profile/view?id=41331545', 'nimbus_opulus_sombre'),
    "id" => "linkedin_url",
    "default" => "",
    "type" => "text",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('YouTube Page URL', 'nimbus_opulus_sombre'),
    "desc" => __('Enter the URL for your YouTube page. Leave blank to dispay none.', 'nimbus_opulus_sombre'),
    "id" => "youtube_url",
    "default" => "",
    "type" => "text",
    "tab" => "social",
    "classes" => "");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Google+ Page URL', 'nimbus_opulus_sombre'),
    "desc" => __('Full URL to your Google+ page. Like: https://plus.google.com/113799555397172215948#113799555397172215948/posts', 'nimbus_opulus_sombre'),
    "id" => "google_plus_url",
    "default" => "",
    "type" => "text",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Display Social Media Buttons', 'nimbus_opulus_sombre'),
    "desc" => __('Check here to display social media buttons in the footer', 'nimbus_opulus_sombre'),
    "id" => "display_social_buttons",
    "tab" => "social",
    "default" => "1",
    "label" => "Display Buttons",
    "info" => "<p>" . __('Make sure this box is checked in order for your social media icons to be displayed in the footer.', 'nimbus_opulus_sombre') . "</p>",
    "type" => "checkbox");

// Scripts and Tracking

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Scripts &amp; Tracking', 'nimbus_opulus_sombre'),
    "id" => "scripts_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "scripts",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Add Scripts to Head', 'nimbus_opulus_sombre'),
    "desc" => __('Add any scripts you would like to add just before the closing &lt;/head&gt; tag.', 'nimbus_opulus_sombre'),
    "id" => "scripts_head",
    "classes" => "code",
    "tab" => "scripts",
    "default" => "",
    "type" => "textarea");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Add Scripts to Top of Content', 'nimbus_opulus_sombre'),
    "desc" => __('Add any scripts you would like to add just before start of the content on post/pages.', 'nimbus_opulus_sombre'),
    "id" => "scripts_top_content",
    "tab" => "scripts",
    "classes" => "code",
    "default" => "",
    "type" => "textarea");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Include Top of Content Scripts', 'nimbus_opulus_sombre'),
    "desc" => __('Select the content types where you would like to include the scripts from the text area above.', 'nimbus_opulus_sombre'),
    "id" => "top_scripts_multi",
    "tab" => "scripts",
    "default" => array("home" => "0", "pages" => "0", "blog" => "0", "posts" => "0", "portfolio" => "0", "portfolio_item" => "0"),
    "type" => "multicheck",
    "options" => array("home" => "Home", "pages" => "Pages", "blog" => "Blog Page", "posts" => "Posts", "portfolio" => "Portfolio", "portfolio_item" => "Portfolio Items"));

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Add Scripts to Bottom of Content', 'nimbus_opulus_sombre'),
    "desc" => __('Add any scripts you would like to add directly after the content on post/pages.', 'nimbus_opulus_sombre'),
    "id" => "scripts_bottom_content",
    "tab" => "scripts",
    "classes" => "code",
    "default" => "",
    "type" => "textarea");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Include Bottom of Content Scripts', 'nimbus_opulus_sombre'),
    "desc" => __('Select the content types where you would like to include the scripts from the text area above.', 'nimbus_opulus_sombre'),
    "id" => "bottom_scripts_multi",
    "tab" => "scripts",
    "default" => array("home" => "0", "pages" => "0", "blog" => "0", "posts" => "0", "portfolio" => "0", "portfolio_item" => "0"),
    "type" => "multicheck",
    "options" => array("home" => "Home", "pages" => "Pages", "blog" => "Blog Page", "posts" => "Posts", "portfolio" => "Portfolio", "portfolio_item" => "Portfolio Items"));

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Add Scripts to Footer', 'nimbus_opulus_sombre'),
    "desc" => __('Add any scripts you would like to add just before the closing &lt;/body&gt; tag.', 'nimbus_opulus_sombre'),
    "id" => "scripts_foot",
    "tab" => "scripts",
    "classes" => "code",
    "default" => "",
    "type" => "textarea");
    
// Custom CSS	

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Custom CSS', 'nimbus_opulus_sombre'),
    "id" => "css_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "css",
    "type" => "tab");    
    
$NIMBUS_OPTIONS_ARR[] = array("name" => __('Custom CSS', 'nimbus_opulus_sombre'),
    "desc" => __('Add your custom css to the header.', 'nimbus_opulus_sombre'),
    "id" => "custom_css",
    "tab" => "css",
    "default" => "",
    "type" => "textarea");   


$NIMBUS_OPTIONS_ARR[] = array("name" => __('Responsive CSS: Browsers Less Then 767px', 'nimbus_opulus_sombre'),
    "desc" => __('Add your custom css to the header.', 'nimbus_opulus_sombre'),
    "id" => "custom_css_less_767",
    "tab" => "css",
    "default" => "",
    "type" => "pro"); 
    
$NIMBUS_OPTIONS_ARR[] = array("name" => __('Responsive CSS: Browsers Between 768px and 979px', 'nimbus_opulus_sombre'),
    "desc" => __('Add your custom css to the header.', 'nimbus_opulus_sombre'),
    "id" => "custom_css_768_979",
    "tab" => "css",
    "default" => "",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Responsive CSS: Browsers Between 980px and 1200px', 'nimbus_opulus_sombre'),
    "desc" => __('Add your custom css to the header.', 'nimbus_opulus_sombre'),
    "id" => "custom_css_980_1200",
    "tab" => "css",
    "default" => "",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR[] = array("name" => __('Responsive CSS: Browsers Larger Then 1200px', 'nimbus_opulus_sombre'),
    "desc" => __('Add your custom css to the header.', 'nimbus_opulus_sombre'),
    "id" => "custom_css_more_1200",
    "tab" => "css",
    "default" => "",
    "type" => "pro");    





    
    

/* * *************************************************************************************************** */

// Pages
/* * *************************************************************************************************** */

function nimbus_pages_arr() {

    $pages = array();
    $get_pages = get_pages('sort_column=post_parent,menu_order');
    foreach ($get_pages as $page) {
        $pages[$page->ID] = $page->post_title;
    }
    return $pages;
}

function nimbus_random_page(){ 
    $get_pages = get_pages();
    if(!empty($get_pages)) {    
        shuffle($get_pages);
        $page = $get_pages[0]->ID; 
    } else {
        $page = "";
    }
    return $page; 

} 



/* * *************************************************************************************************** */

// Meta Info
/* * *************************************************************************************************** */

function nimbus_include_post_meta() {

    $post_meta = array("title" => "Post Title",
        "post_thumb" => "Post Thumbnail Image",
        "author" => "Author",
        "date" => "Date",
        "categories" => "Categories",
        "tags" => "Tags");
    return $post_meta;
}

function nimbus_include_blog_meta() {

    $post_meta = array("title" => "Post Title",
        "post_thumb" => "Post Thumbnail Image",
        "author" => "Author",
        "date" => "Date",
        "categories" => "Categories");
    return $post_meta;
}

/* * *************************************************************************************************** */

// Border Types
/* * *************************************************************************************************** */

function nimbus_image_border_types() {

    $border_types = array("solid" => "Solid",
        "double" => "Double",
        "grooved" => "Grooved",
        "dotted" => "Dotted",
        "inset" => "Inset",
        "outset" => "Outset",
        "ridged" => "Ridged",
        "dashed" => "Dashed");
    return $border_types;
}

/* * *************************************************************************************************** */

// Border Types
/* * *************************************************************************************************** */

function nimbus_nivo_effect_types() {

    $nivo_effects = array("random" => "Random",
        "fade" => "Fade",
        "sliceDown" => "Slice Down",
        "sliceDownLeft" => "Slice Down Left",
        "sliceUp" => "Slice Up",
        "sliceUpLeft" => "Slice Up Left",
        "sliceUpDown" => "Slice Up Down",
        "sliceUpDownLeft" => "Slice Up Down Left",
        "fold" => "Fold",
        "slideInRight" => "Slide In Right",
        "boxRandom" => "Box Random",
        "boxRain" => "Box Rain",
        "boxRainReverse" => "Box Rain Reverse",
        "boxRainGrowReverse" => "Box Rain Grow Reverse");
    return $nivo_effects;
}

/* * *************************************************************************************************** */

// Default Title Configs
/* * *************************************************************************************************** */

function nimbus_default_title_config() {

    $title_configs = array("post-site" => "Post Title | Site Title",
        "site-post" => "Site Title | Post Title",
        "site" => "Site Title",
        "post" => "Post Title");
    return $title_configs;
}

/* * *************************************************************************************************** */

// Font fonttrans Options
/* * *************************************************************************************************** */

function nimbus_font_transform() {

    $font_transform = array("none" => "Normal",
        "capitalize" => "Capitalize",
        "uppercase" => "Uppercase",
        "lowercase" => "Lowercase");
    return $font_transform;
}

/* * *************************************************************************************************** */

// Fonts Styles
/* * *************************************************************************************************** */

function nimbus_font_styles() {

    $default = array("normal" => "Normal",
        "italic" => "Italic",
        "bold" => "Bold",
        "bold italic" => "Bold Italic");

    return $default;
}

/* * *************************************************************************************************** */
// Font faces
/* * *************************************************************************************************** */

global $NIMBUS_FONT_FACES;

$NIMBUS_FONT_FACES = array();

$NIMBUS_FONT_FACES = array("Droid Sans" => array("name" => "Droid Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />",
        "fam" => "'Droid Sans', sans-serif"),
    "Open Sans" => array("name" => "Open Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>",
        "fam" => "'Open Sans', sans-serif"),
    "Oswald" => array("name" => "Oswald*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Oswald', sans-serif"),
    "Droid Serif" => array("name" => "Droid Serif*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css' />",
        "fam" => "'Droid Serif', serif"),
    "PT Sans" => array("name" => "PT Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css' />",
        "fam" => "'PT Sans', sans-serif"),
    "Lobster" => array("name" => "Lobster*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />",
        "fam" => "'Lobster', cursive"),
    "Yanone Kaffeesatz" => array("name" => "Yanone Kaffeesatz*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,300,200,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Yanone Kaffeesatz', sans-serif"),
    "Arvo" => array("name" => "Arvo*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Arvo:400,400italic,700,700italic' rel='stylesheet' type='text/css' />",
        "fam" => "'Arvo', serif"),
    "Ubuntu" => array("name" => "Ubuntu*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Ubuntu', sans-serif"),
    "The Girl Next Door" => array("name" => "The Girl Next Door*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=The+Girl+Next+Door' rel='stylesheet' type='text/css' />",
        "fam" => "'The Girl Next Door', cursive"),
    "Calligraffitti" => array("name" => "Calligraffitti*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css' />",
        "fam" => "'Calligraffitti', cursive"),
    "Cabin" => array("name" => "Cabin*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700,400italic,500italic,600italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Cabin', sans-serif"),
    "Dancing Script" => array("name" => "Dancing Script*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css' />",
        "fam" => "'Dancing Script', cursive"),
    "Josefin Sans" => array("name" => "Josefin Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Josefin Sans', sans-serif"),
    "Nobile" => array("name" => "Nobile*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Nobile:400,400italic,700,700italic' rel='stylesheet' type='text/css' />",
        "fam" => "'Nobile', sans-serif"),
    "Molengo" => array("name" => "Molengo*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css' />",
        "fam" => "'Molengo', sans-serif"),
    "PT Sans Narrow" => array("name" => "PT Sans Narrow*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css' />",
        "fam" => "'PT Sans Narrow', sans-serif"),
    "Cuprum" => array("name" => "Cuprum*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Cuprum:400,700italic,700,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Cuprum', sans-serif"),
    "Josefin Slab" => array("name" => "Josefin Slab*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Josefin Slab', serif"),
    "Arimo" => array("name" => "Arimo*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css' />",
        "fam" => "'Arimo', sans-serif"),
    "Cantarell" => array("name" => "Cantarell*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Cantarell:400,700,700italic,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Cantarell', sans-serif"),
    "Signika Negative" => array("name" => "Signika Negative*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Signika Negative', sans-serif"),
    "Open Sans Condensed" => array("name" => "Open Sans Condensed*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Open Sans Condensed', sans-serif"),
    "Six Caps" => array("name" => "Six Caps*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Six+Caps' rel='stylesheet' type='text/css'>",
        "fam" => "'Six Caps', sans-serif"),
    "Lato" => array("name" => "Lato*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Lato', sans-serif"),
    "Signika" => array("name" => "Signika*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Signika:400,700,300,600' rel='stylesheet' type='text/css'>",
        "fam" => "'Signika', sans-serif"),
    "Abel" => array("name" => "Abel*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>",
        "fam" => "'Abel', sans-serif"),
    "Gudea" => array("name" => "Gudea*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Gudea:400,700,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Gudea', sans-serif"),
    "Ruda" => array("name" => "Ruda*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Ruda:400,700,900' rel='stylesheet' type='text/css'>",
        "fam" => "'Ruda', sans-serif"),
    "Duru Sans" => array("name" => "Duru Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Duru+Sans' rel='stylesheet' type='text/css'>",
        "fam" => "'Duru Sans', sans-serif"),
    "Asul" => array("name" => "Asul*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Asul:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Asul', sans-serif"),
    "Tenor Sans" => array("name" => "Tenor Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Tenor+Sans' rel='stylesheet' type='text/css'>",
        "fam" => "'Tenor Sans', sans-serif"),
    "Nunito" => array("name" => "Nunito*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>",
        "fam" => "'Nunito', sans-serif"),
    "Michroma" => array("name" => "Michroma*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Michroma' rel='stylesheet' type='text/css'>",
        "fam" => "'Michroma', sans-serif"),
    "Quattrocento Sans" => array("name" => "Quattrocento Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Quattrocento:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Quattrocento Sans', sans-serif"),
    "Chivo" => array("name" => "Chivo*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Chivo:400,900,400italic,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Chivo', sans-serif"),
    "Maven Pro" => array("name" => "Maven Pro*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900' rel='stylesheet' type='text/css'>",
        "fam" => "'Maven Pro', sans-serif"),
    "Federo" => array("name" => "Federo*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Federo' rel='stylesheet' type='text/css'>",
        "fam" => "'Federo', sans-serif"),
    "Andika" => array("name" => "Andika*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Andika' rel='stylesheet' type='text/css'>",
        "fam" => "Andika', sans-serif"),
    "Varela" => array("name" => "Varela*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>",
        "fam" => "'Varela', sans-serif"),
    "Amaranth" => array("name" => "Amaranth*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Amaranth:400,400italic,700,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Amaranth', sans-serif"),
    "Inder" => array("name" => "Inder*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>",
        "fam" => "'Inder', sans-serif"),
    "Istok Web" => array("name" => "Istok Web*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Istok+Web:400,700,400italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Istok Web', sans-serif"),
    "Snippet" => array("name" => "Snippet*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Snippet' rel='stylesheet' type='text/css'>",
        "fam" => "'Snippet', sans-serif"),
    "Rosario" => array("name" => "Rosario*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Rosario:400,400italic,700,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Rosario', sans-serif"),
    "Mako" => array("name" => "Mako*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Mako' rel='stylesheet' type='text/css'>",
        "fam" => "'Mako', sans-serif"),
    "Droid Sans Mono" => array("name" => "Droid Sans Mono*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'>",
        "fam" => "'Droid Sans Mono', sans-serif"),
    "Questrial" => array("name" => "Questrial*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>",
        "fam" => "'Questrial', sans-serif"),
    "Shanti" => array("name" => "Shanti*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Shanti' rel='stylesheet' type='text/css'>",
        "fam" => "'Shanti', sans-serif"),
    "Gentium Basic" => array("name" => "Gentium Basic*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Gentium+Basic:400,700,400italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Gentium Basic', serif"),		
    "Basic" => array("name" => "Basic*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Basic' rel='stylesheet' type='text/css'>",
        "fam" => "'Basic', sans-serif"),
    "Varela Round" => array("name" => "Varela Round*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>",
        "fam" => "'Varela Round', sans-serif"),
    "Antic" => array("name" => "Antic*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Antic' rel='stylesheet' type='text/css'>",
        "fam" => "'Antic', sans-serif"),
    "Rosario" => array("name" => "Rosario*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Rosario:400,700,400italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Rosario', sans-serif"),
    "Actor" => array("name" => "Actor*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Rosario:400,400italic,700,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Actor', sans-serif"),
    "Cabin Condensed" => array("name" => "Cabin Condensed*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed:400,500,600,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Cabin Condensed', sans-serif"),
    "Ropa Sans" => array("name" => "Ropa Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Ropa+Sans:400,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Ropa Sans', cursive"),
    "Trochut" => array("name" => "Trochut*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Trochut:400,400italic,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Trochut', cursive"),
    "Port Lligat Sans" => array("name" => "Port Lligat Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Port+Lligat+Sans' rel='stylesheet' type='text/css'>",
        "fam" => "'Port Lligat Sans', cursive"),
    "Flamenco" => array("name" => "Flamenco*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Flamenco:300,400' rel='stylesheet' type='text/css'>",
        "fam" => "'Flamenco', cursive"),
    "Metamorphous" => array("name" => "Metamorphous*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Metamorphous' rel='stylesheet' type='text/css'>",
        "fam" => "'Metamorphous', cursive"),
    "Fredericka the Great" => array("name" => "Fredericka the Great*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Fredericka+the+Great' rel='stylesheet' type='text/css'>",
        "fam" => "'Fredericka the Great', cursive"),
    "Nixie One" => array("name" => "Nixie One*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Nixie One', cursive"),
    "Sancreek" => array("name" => "Sancreek*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Sancreek' rel='stylesheet' type='text/css'>",
        "fam" => "'Sancreek', cursive"),
    "Vast Shadow" => array("name" => "Vast Shadow*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Vast+Shadow' rel='stylesheet' type='text/css'>",
        "fam" => "'Vast Shadow', cursive"),
    "Monoton" => array("name" => "Monoton*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Monoton' rel='stylesheet' type='text/css'>",
        "fam" => "'Monoton', cursive"),
    "Raleway" => array("name" => "Raleway*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>",
        "fam" => "'Raleway', cursive"),
    "Geostar" => array("name" => "Geostar*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Geostar' rel='stylesheet' type='text/css'>",
        "fam" => "'Geostar', cursive"),
    "Buda" => array("name" => "Buda*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Buda:300' rel='stylesheet' type='text/css'>",
        "fam" => "'Buda', cursive"),
    "Forum" => array("name" => "Forum*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Forum' rel='stylesheet' type='text/css'>",
        "fam" => "'Forum', cursive"),
    "Mr Bedfort" => array("name" => "Mr Bedfort*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Mr+Bedfort' rel='stylesheet' type='text/css'>",
        "fam" => "'Mr Bedfort', cursive"),
    "Rouge Script" => array("name" => "Rouge Script*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Rouge+Script' rel='stylesheet' type='text/css'>",
        "fam" => "'Rouge Script', cursive"),
    "Habibi" => array("name" => "Habibi*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Habibi' rel='stylesheet' type='text/css'>",
        "fam" => "'Habibi', serif"),
    "Lora" => array("name" => "Lora*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Lora', serif"),
    "Playfair Display" => array("name" => "Playfair Display*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Playfair Display', serif"),
    "Brawler" => array("name" => "Brawler*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Brawler' rel='stylesheet' type='text/css'>",
        "fam" => "'Brawler', serif"),
    "Caudex" => array("name" => "Caudex*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Caudex:400,700,400italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Caudex', serif"),
    "Cambo" => array("name" => "Cambo*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Cambo' rel='stylesheet' type='text/css'>",
        "fam" => "'Cambo', serif"),
    "Esteban" => array("name" => "Esteban*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Esteban' rel='stylesheet' type='text/css'>",
        "fam" => "'Esteban', serif"),
    "Alegreya SC" => array("name" => "Alegreya SC*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Alegreya+SC:400,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Alegreya SC', serif"),
    "Lustria" => array("name" => "Lustria*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Lustria' rel='stylesheet' type='text/css'>",
        "fam" => "'Lustria', serif"),
    "Amethysta" => array("name" => "Amethysta*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Amethysta' rel='stylesheet' type='text/css'>",
        "fam" => "'Amethysta', serif"),
    "Junge" => array("name" => "Junge*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Junge' rel='stylesheet' type='text/css'>",
        "fam" => "'Junge', serif"),
    "Glegoo" => array("name" => "Glegoo*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Glegoo' rel='stylesheet' type='text/css'>",
        "fam" => "'Glegoo', serif"),
    "Mr De Haviland" => array("name" => "Mr De Haviland*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Mr+De+Haviland' rel='stylesheet' type='text/css'>",
        "fam" => "'Mr De Haviland', cursive"),
    "Herr Von Muellerhoff" => array("name" => "Herr Von Muellerhoff*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff' rel='stylesheet' type='text/css'>",
        "fam" => "'Herr Von Muellerhoff', cursive"),
    "Sofia" => array("name" => "Sofia*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Sofia' rel='stylesheet' type='text/css'>",
        "fam" => "'Sofia', cursive"),
    "Noto Sans" => array("name" => "Noto Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Noto Sans', sans-serif"),
	"Fauna One" => array("name" => "Fauna One*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Fauna One', serif"),	
	"Inconsolata" => array("name" => "Inconsolata*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Inconsolata', sans-serif"),	
	"Kite One" => array("name" => "Kite One*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Kite+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Kite One', sans-serif"),	
	"Expletus Sans" => array("name" => "Expletus Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Expletus+Sans:400,500,600,400italic,700,500italic,600italic,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Expletus Sans', cursive"),	
	"Numans" => array("name" => "Numans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Numans' rel='stylesheet' type='text/css'>",
        "fam" => "'Numans', sans-serif"),	
	"Leckerli One" => array("name" => "Leckerli One*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Leckerli+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Leckerli One', cursive"),	
	"Carrois Gothic" => array("name" => "Carrois Gothic*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>",
        "fam" => "'Carrois Gothic', sans-serif"),	
	"Lily Script One" => array("name" => "Lily Script One*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Lily+Script+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Lily Script One', cursive"),		
	"EB Garamond" => array("name" => "EB Garamond*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>",
        "fam" => "'EB Garamond', serif"),	
	"Merriweather" => array("name" => "Merriweather*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Merriweather', serif"),	
	"Merriweather Sans" => array("name" => "Merriweather Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Merriweather Sans', sans-serif"),			
	"Titillium Web" => array("name" => "Titillium Web*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>",
        "fam" => "'Titillium Web', sans-serif"),	
	"Crimson Text" => array("name" => "Crimson Text*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Crimson Text', serif"),	
	"Croissant One" => array("name" => "Croissant One*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Croissant+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Croissant One', cursive"),	
	"Monsieur La Doulaise" => array("name" => "Monsieur La Doulaise*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Monsieur+La+Doulaise' rel='stylesheet' type='text/css'>",
        "fam" => "'Monsieur La Doulaise', cursive"),	
	"Roboto Slab" => array("name" => "Roboto Slab*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>",
        "fam" => "'Roboto Slab', serif"),		
	"Roboto" => array("name" => "Roboto*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Roboto', sans-serif"),	
	"Roboto Condensed" => array("name" => "Roboto Condensed*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Roboto Condensed', sans-serif"),		
	"Berkshire Swash" => array("name" => "Berkshire Swash*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet' type='text/css'>",
        "fam" => "'Berkshire Swash', cursive"),	
	"Graduate" => array("name" => "Graduate*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Graduate' rel='stylesheet' type='text/css'>",
        "fam" => "'Graduate', sans-serif"),	
	"Text Me One" => array("name" => "Text Me One*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Text+Me+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Text Me One', sans-serif"),	
	"Shadows Into Light Two" => array("name" => "Shadows Into Light Two*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>",
        "fam" => "'Shadows Into Light Two', cursive"),	
	"Alef" => array("name" => "Alef*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Alef:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Alef', sans-serif"),	
	"Elsie" => array("name" => "Elsie*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Elsie:400,900' rel='stylesheet' type='text/css'>",
        "fam" => "'Elsie', cursive"),	
	"Muli" => array("name" => "Muli*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Muli:300,400,300italic,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Muli', sans-serif"),	
	"Simonetta" => array("name" => "Simonetta*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Simonetta:400,900,400italic,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Simonetta', cursive"),	
	"Belgrano" => array("name" => "Belgrano*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Belgrano' rel='stylesheet' type='text/css'>",
        "fam" => "'Belgrano', serif"),	
	"Parisienne" => array("name" => "Parisienne*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Parisienne' rel='stylesheet' type='text/css'>",
        "fam" => "'Parisienne', cursive"),	
	"Arapey" => array("name" => "Arapey*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Arapey:400italic,400' rel='stylesheet' type='text/css'>",
        "fam" => "'Arapey', serif"),	
	"Sintony" => array("name" => "Sintony*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Sintony', sans-serif"),
	"Montserrat Alternates" => array("name" => "Montserrat Alternates*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Montserrat Alternates', sans-serif"),
	"Grand Hotel" => array("name" => "Grand Hotel*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>",
        "fam" => "'Grand Hotel', cursive"),
	"Cinzel" => array("name" => "Cinzel*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Cinzel:400,900,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Cinzel', serif"),
	"Telex" => array("name" => "Telex*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Telex' rel='stylesheet' type='text/css'>",
        "fam" => "'Telex', sans-serif"),
	"Armata" => array("name" => "Armata*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Armata' rel='stylesheet' type='text/css'>",
        "fam" => "'Armata', sans-serif"),
	"Archivo Narrow" => array("name" => "Archivo Narrow*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Archivo Narrow', sans-serif"),	
	"Anaheim" => array("name" => "Anaheim*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Anaheim' rel='stylesheet' type='text/css'>",
        "fam" => "'Anaheim', sans-serif"),	
	"Source Sans Pro" => array("name" => "Source Sans Pro*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Source Sans Pro', sans-serif"),
	"ABeeZee" => array("name" => "ABeeZee*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=ABeeZee:400,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'ABeeZee', sans-serif"),
	"Karla" => array("name" => "Karla*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Karla', serif"),	
	"Great Vibes" => array("name" => "Great Vibes*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>",
        "fam" => "'Great Vibes', cursive"),	
	"Didact Gothic" => array("name" => "Didact Gothic*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>",
        "fam" => "'Didact Gothic', serif"),	
	"Coustard" => array("name" => "Coustard*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Coustard:400,900' rel='stylesheet' type='text/css'>",
        "fam" => "'Coustard', serif"),
	"Domine" => array("name" => "Domine*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Domine:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Domine', serif"),
	"Sacramento" => array("name" => "Sacramento*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Sacramento' rel='stylesheet' type='text/css'>",
        "fam" => "'Sacramento', serif"),
	"Rochester" => array("name" => "Rochester*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Rochester' rel='stylesheet' type='text/css'>",
        "fam" => "'Rochester', serif"),
	"Oxygen" => array("name" => "Oxygen*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>",
        "fam" => "'Oxygen', serif"),
	"Rokkit" => array("name" => "Rokkit*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Rokkit', serif"),
	"Exo" => array("name" => "Exo*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900,100italic,200italic,300italic,400italic,500italic,600italic,700italic,800italic,900italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Exo', sans-serif"),
	"Arbutus Slab" => array("name" => "Arbutus Slab*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Arbutus+Slab' rel='stylesheet' type='text/css'>",
        "fam" => "'Arbutus Slab', serif"),
	"Marcellus" => array("name" => "Marcellus*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>",
        "fam" => "'Marcellus', serif"),
	"Marcellus SC" => array("name" => "Marcellus SC*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Marcellus+SC' rel='stylesheet' type='text/css'>",
        "fam" => "'Marcellus SC', serif"),
	"Bitter" => array("name" => "Bitter*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>",
        "fam" => "'Bitter', serif"),
	"Julius Sans One" => array("name" => "Julius Sans One*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Julius+Sans+One' rel='stylesheet' type='text/css'>",
        "fam" => "'Julius Sans One', sans-serif"),
    "Arial" => array("name" => "Arial, Helvetica",
        "import" => "",
        "fam" => "Arial, Helvetica, sans-serif"),
    "Arial Black" => array("name" => "Arial Black, Gadget",
        "import" => "",
        "fam" => "Arial Black, Gadget, sans-serif"),
    "Comic Sans MS" => array("name" => "Comic Sans MS",
        "import" => "",
        "fam" => "'Comic Sans MS', cursive, sans-serif"),
    "Lucida Sans Unicode" => array("name" => "Lucida Sans Unicode",
        "import" => "",
        "fam" => "'Lucida Sans Unicode', 'Lucida Grande', sans-serif"),
    "Tahoma" => array("name" => "Tahoma",
        "import" => "",
        "fam" => "Tahoma, Geneva, sans-serif"),
    "Trebuchet MS" => array("name" => "Trebuchet MS",
        "import" => "",
        "fam" => "'Trebuchet MS', Helvetica, sans-serif"),
    "Verdana" => array("name" => "Verdana",
        "import" => "",
        "fam" => "Verdana, Geneva, sans-serif"),
    "Georgia" => array("name" => "Georgia",
        "import" => "",
        "fam" => "Georgia, serif"),
    "Palatino Linotype" => array("name" => "Palatino Linotype",
        "import" => "",
        "fam" => "'Palatino Linotype', 'Book Antiqua', Palatino, serif"),
    "Times New Roman" => array("name" => "Times New Roman",
        "import" => "",
        "fam" => "'Times New Roman', Times, serif"),
    "Courier New" => array("name" => "Courier New",
        "import" => "",
        "fam" => "'Courier New', Courier, monospace"),
    "Lucida Console" => array("name" => "Lucida Console",
        "import" => "",
        "fam" => "'Lucida Console', Monaco, monospace"),
    "Bebas" => array("name" => "Bebas**",
        "import" => "<style type='text/css'>@font-face { font-family: 'BebasRegular'; src: url('" . OPTIONS_PATH . "fonts/BEBAS___-webfont.eot'); src: url('" . OPTIONS_PATH . "fonts/BEBAS___-webfont.eot?#iefix') format('embedded-opentype'), url('" . OPTIONS_PATH . "fonts/BEBAS___-webfont.woff') format('woff'), url('" . OPTIONS_PATH . "fonts/BEBAS___-webfont.ttf') format('truetype'), url('" . OPTIONS_PATH . "fonts/BEBAS___-webfont.svg#BebasRegular') format('svg'); font-weight: normal; font-style: normal; }</style>",
        "fam" => "'BebasRegular'")
);

