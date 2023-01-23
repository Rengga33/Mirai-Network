<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'microtype', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'microtype' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'microtype' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'microtype' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'microtype' ),
	'button_url'  => 'https://wordpress.org/support/theme/microtype/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'microtype' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'microtype' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'microtype' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'microtype' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'microtype' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'microtype' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'microtype' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Recommended Plugins
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'microtype' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'microtype' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Enable Blog Heading
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'heading-enable',
	'label'			=> esc_html__( 'Enable Blog Heading', 'microtype' ),
	'description'	=> esc_html__( 'Show heading on blog home', 'microtype' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Heading
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'microtype' ),
	'description'	=> esc_html__( 'Your blog heading', 'microtype' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'microtype' ),
	'description'	=> esc_html__( 'Your blog subheading', 'microtype' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'microtype' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'microtype' ),
	'section'		=> 'blog',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Position
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'featured-position',
	'label'			=> esc_html__( 'Featured Posts Position', 'microtype' ),
	'description'	=> esc_html__( 'Where to show the featured posts slider', 'microtype' ),
	'section'		=> 'blog',
	'default'		=> 'below',
	'choices'		=> array(
		'above'		=> esc_html__( 'Above posts', 'microtype' ),
		'below'		=> esc_html__( 'Below posts', 'microtype' ),
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'microtype' ),
	'description'	=> esc_html__( 'Exclude featured posts from the content below', 'microtype' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Featured Category
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'microtype' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'microtype' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'microtype' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'microtype' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'microtype' ),
	'section'		=> 'blog',
	'default'		=> '3',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'microtype' ),
	'description'	=> esc_html__( 'A column of widgets', 'microtype' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'microtype' ),
	'description'	=> esc_html__( 'A column of widgets', 'microtype' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'microtype' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'microtype' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'microtype' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'microtype' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'microtype' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'microtype' ),
		'categories'=> esc_html__( 'Related by categories', 'microtype' ),
		'tags'		=> esc_html__( 'Related by tags', 'microtype' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'microtype' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'microtype' ),
	'section'		=> 'blog',
	'default'		=> 'content',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'microtype' ),
		'content'	=> esc_html__( 'Below content', 'microtype' ),
	),
) );
// Header: Search
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'microtype' ),
	'description'	=> esc_html__( 'Header search button', 'microtype' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'microtype' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'microtype' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Profile Avatar
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'microtype' ),
	'description'	=> esc_html__( 'Minimum width of 320px', 'microtype' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'microtype' ),
	'description'	=> esc_html__( 'Your name appears below the image', 'microtype' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'microtype' ),
	'description'	=> esc_html__( 'A short description of you', 'microtype' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Footer: Ads
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'microtype' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'microtype' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'microtype' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'microtype' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'microtype' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'microtype' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'microtype' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'microtype' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'microtype' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'microtype' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'microtype' ),
	'description'	=> esc_html__( 'Footer credit text', 'microtype' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );

// Social Links: List
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'microtype' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'microtype' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'microtype' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'microtype' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'microtype' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'microtype' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'microtype' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'microtype' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'microtype' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'microtype' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'microtype' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'microtype' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'microtype' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'microtype' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'microtype' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'microtype' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'microtype' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'microtype' ),
	'description'	=> esc_html__( 'Select font for the theme', 'microtype' ),
	'section'		=> 'styling',
	'default'		=> 'inter',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'microtype' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'microtype' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'microtype' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'microtype' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'microtype' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'microtype' ),
		'inter'					=> esc_html__( 'Inter, Latin', 'microtype' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'microtype' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'microtype' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'microtype' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'microtype' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'microtype' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'microtype' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'microtype' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'microtype' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'microtype' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'microtype' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'microtype' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'microtype' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'microtype' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'microtype' ),
		'arial'					=> esc_html__( 'Arial', 'microtype' ),
		'georgia'				=> esc_html__( 'Georgia', 'microtype' ),
		'verdana'				=> esc_html__( 'Verdana', 'microtype' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'microtype' ),
	),
) );
// Styling: Layout Box Max-width
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'layout-box-width',
	'label'			=> esc_html__( 'Layout Box Max-width', 'microtype' ),
	'description'	=> esc_html__( 'Max-width of the layout box', 'microtype' ),
	'section'		=> 'styling',
	'default'		=> '600',
	'choices'     => array(
		'min'	=> '400',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'microtype' ),
	'description'	=> esc_html__( 'Max-width of the content', 'microtype' ),
	'section'		=> 'styling',
	'default'		=> '520',
	'choices'     => array(
		'min'	=> '400',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'microtype' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'microtype' ),
	'section'		=> 'styling',
	'default'		=> '50',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Dark
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dark-theme',
	'label'			=> esc_html__( 'Dark Theme', 'microtype' ),
	'description'	=> esc_html__( 'Use dark instead of light base', 'microtype' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Theme Toggle
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'theme-toggle',
	'label'			=> esc_html__( 'Light/Dark Theme Toggle', 'microtype' ),
	'description'	=> esc_html__( 'Do not use with dark theme enabled', 'microtype' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Invert Dark Logo
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'invert-logo',
	'label'			=> esc_html__( 'Invert Dark Logo Color', 'microtype' ),
	'description'	=> esc_html__( 'Change color for the logo in dark mode', 'microtype' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Box Border Radius
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'box-border-radius',
	'label'			=> esc_html__( 'Box Border Radius', 'microtype' ),
	'description'	=> esc_html__( 'Change radius of the layout box.', 'microtype' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '60',
		'step'	=> '1',
	),
) );
// Styling: Primary Accent
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Accent', 'microtype' ),
	'section'		=> 'styling',
	'default'		=> '#1da9ff',
) );
// Styling: Background Color
Kirki::add_field( 'microtype_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'microtype' ),
	'section'		=> 'styling',
	'default'		=> '#f4f4f4',
) );
