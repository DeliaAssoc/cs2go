<?php 
function forta_master_customizer( $wp_customize ) {

	// Customizer Sections
	// Logo
	$wp_customize->add_section( 'forta_master_logo_section' , array(
	    'title'       => __( 'Company Logos', 'forta_master' ),
	    'priority'    => 10,
	    'description' => 'Add Company Logos',
	) );
	// Company Information
	$wp_customize->add_section( 'forta_master_companyinfo_section' , array(
	    'title'       => __( 'Company Information', 'forta_master' ),
	    'priority'    => 10,
	    'description' => 'Enter company information',
	) );
	// Social Media
	$wp_customize->add_section( 'forta_master_social_section' , array(
	    'title'       => __( 'Social Media', 'forta_master' ),
	    'priority'    => 30,
	    'description' => 'Add your social media links',
	) );
	// Page Banners
	$wp_customize->add_section( 'forta_master_page_banner_section' , array(
	    'title'       => __( 'Default Page Banners', 'forta_master' ),
	    'priority'    => 30,
	    'description' => 'Here you can set default page banners for the different page template types',
	) );
	// Product Pages
	$wp_customize->add_section( 'forta_master_product_section' , array(
	    'title'       => __( 'Product Pages', 'forta_master' ),
	    'priority'    => 30,
	    'description' => 'Product Page common elements',
	) );
	// Privacy Policy
	$wp_customize->add_section( 'forta_master_privacy_section' , array(
	    'title'       => __( 'Privacy Policy', 'forta_master' ),
	    'priority'    => 30,
	    'description' => 'Add your Privacy Policy link here',
	) );

	// Remove default sections
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_panel( 'widgets' );


	// Customizer Settings
	// Logo Section
	$wp_customize->add_setting( 'forta_master_logo_section' );
	$wp_customize->add_setting( 'forta_master_logo', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_mark', array( 'default' => __( '' ), 'forta_master' ) );
	// Company Information
	$wp_customize->add_setting( 'forta_master_companyinfo_section', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_email', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_street', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_city', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_state', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_zip', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_country', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_gmap', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_phone', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_tollfree', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_fax', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_street2', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_city2', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_state2', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_zip2', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_country2', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_gmap2', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_phone2', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_tollfree2', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_fax2', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_company_snippet', array( 'default' => __( '' ), 'forta_master' ) );
	// Social Media
	$wp_customize->add_setting( 'forta_master_social' );
	$wp_customize->add_setting( 'forta_master_social_facebook_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_twitter_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_gplus_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_linkedin_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_youtube_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_vimeo_link', array( 'default' => __( '' ), 'forta_master' ) );
	$wp_customize->add_setting( 'forta_master_social_pinterest_link', array( 'default' => __( '' ), 'forta_master' ) );
	// Privacy Policy
	$wp_customize->add_setting( 'forta_privacy_policy' );

	// Customizer Controls
	// Company Logo
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'forta_master_logo', array(
		'description' => __( 'Upload division logo here' ),
	    'label'    => __( 'Site Logo', 'forta_master' ),
	    'section'  => 'forta_master_logo_section',
	    'settings' => 'forta_master_logo',
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'forta_master_company_mark', array(
		'description' => __( 'Upload division mark image' ),
	    'label'    => __( 'Division Company Mark', 'forta_master' ),
	    'section'  => 'forta_master_logo_section',
	    'settings' => 'forta_master_company_mark',
	) ) );
	// Company Information
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_street', array(
	    'label'    => __( 'Location 1 Street Address', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_street',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_city', array(
	    'label'    => __( 'Location 1 City', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_city',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_state', array(
	    'label'    => __( 'Location 1 State', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_state',
	    'type'     => 'select',
	    'choices'  => array(
	        'AL' => 'Alabama',
	        'AK' => 'Alaska',
	        'AZ' => 'Arizona',
	        'AR' => 'Arkansas',
	        'CA' => 'California',
	        'CO' => 'Colorado',
	        'CT' => 'Connecticut',
	        'DE' => 'Delaware',
	        'DC' => 'District of Columbia',
	        'FL' => 'Florida',
	        'GA' => 'Georgia',
	        'HI' => 'Hawaii',
	        'ID' => 'Idaho',
	        'IL' => 'Illinois',
	        'IN' => 'Indiana',
	        'IA' => 'Iowa',
	        'KS' => 'Kansas',
	        'KY' => 'Kentucky',
	        'LA' => 'Louisiana',
	        'ME' => 'Maine',
	        'MD' => 'Maryland',
	        'MA' => 'Massachusetts',
	        'MI' => 'Michigan',
	        'MN' => 'Minnesota',
	        'MS' => 'Mississippi',
	        'MO' => 'Missouri',
	        'MT' => 'Montana',
	        'NE' => 'Nebraska',
	        'NV' => 'Nevada',
	        'NH' => 'New Hampshire',
	        'NJ' => 'New Jersey',
	        'NM' => 'New Mexico',
	        'NY' => 'New York',
	        'NC' => 'North Carolina',
	        'ND' => 'North Dakota',
	        'OH' => 'Ohio',
	        'OK' => 'Oklahoma',
	        'OR' => 'Oregon',
	        'PA' => 'Pennsylvania',
	        'RI' => 'Rhode Island',
	        'SC' => 'South Carolina',
	        'SD' => 'South Dakota',
	        'TN' => 'Tennessee',
	        'TX' => 'Texas',
	        'UT' => 'Utah',
	        'VT' => 'Vermont',
	        'VA' => 'Virginia',
	        'WA' => 'Washington',
	        'WV' => 'West Virginia',
	        'WI' => 'Wisconsin',
	        'WY' => 'Wyoming' )
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_zip', array(
	    'label'    => __( 'Location 1 Zip Code', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_zip',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_country', array(
	    'label'    => __( 'Location 1 Country', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_country',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_gmap', array(
		'description' => __( 'Paste the Google Code Snippet Here starting with &lt;iframe&gt;. Please replace width to 100% and have the height set to at least 300.' ),
	    'label'    => __( 'Location 1 Google Map', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_gmap',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_phone', array(
	    'label'    => __( 'Location 1 Local Phone', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_phone',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_tollfree', array(
	    'label'    => __( 'Location 1 Toll Free Phone', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_tollfree',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_fax', array(
	    'label'    => __( 'Location 1 Fax', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_fax',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_street2', array(
	    'label'    => __( 'Location 2 Street Address', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_street2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_city2', array(
	    'label'    => __( 'Location 2 City', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_city2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_state2', array(
	    'label'    => __( 'Location 2 State', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_state2',
	    'type'     => 'select',
	    'choices'  => array(
	        'AL' => 'Alabama',
	        'AK' => 'Alaska',
	        'AZ' => 'Arizona',
	        'AR' => 'Arkansas',
	        'CA' => 'California',
	        'CO' => 'Colorado',
	        'CT' => 'Connecticut',
	        'DE' => 'Delaware',
	        'DC' => 'District of Columbia',
	        'FL' => 'Florida',
	        'GA' => 'Georgia',
	        'HI' => 'Hawaii',
	        'ID' => 'Idaho',
	        'IL' => 'Illinois',
	        'IN' => 'Indiana',
	        'IA' => 'Iowa',
	        'KS' => 'Kansas',
	        'KY' => 'Kentucky',
	        'LA' => 'Louisiana',
	        'ME' => 'Maine',
	        'MD' => 'Maryland',
	        'MA' => 'Massachusetts',
	        'MI' => 'Michigan',
	        'MN' => 'Minnesota',
	        'MS' => 'Mississippi',
	        'MO' => 'Missouri',
	        'MT' => 'Montana',
	        'NE' => 'Nebraska',
	        'NV' => 'Nevada',
	        'NH' => 'New Hampshire',
	        'NJ' => 'New Jersey',
	        'NM' => 'New Mexico',
	        'NY' => 'New York',
	        'NC' => 'North Carolina',
	        'ND' => 'North Dakota',
	        'OH' => 'Ohio',
	        'OK' => 'Oklahoma',
	        'OR' => 'Oregon',
	        'PA' => 'Pennsylvania',
	        'RI' => 'Rhode Island',
	        'SC' => 'South Carolina',
	        'SD' => 'South Dakota',
	        'TN' => 'Tennessee',
	        'TX' => 'Texas',
	        'UT' => 'Utah',
	        'VT' => 'Vermont',
	        'VA' => 'Virginia',
	        'WA' => 'Washington',
	        'WV' => 'West Virginia',
	        'WI' => 'Wisconsin',
	        'WY' => 'Wyoming' )
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_zip2', array(
	    'label'    => __( 'Location 2 Zip Code', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_zip2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_country2', array(
	    'label'    => __( 'Location 2 Country', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_country2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_gmap2', array(
		'description' => __( 'Paste the Google Code Snippet Here starting with &lt;iframe&gt;. Please replace width to 100% and have the height set to at least 300.' ),
	    'label'    => __( 'Location 2 Google Map', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_gmap2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_phone2', array(
	    'label'    => __( 'Location 2 Local Phone', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_phone2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_tollfree2', array(
	    'label'    => __( 'Location 2 Toll Free Phone', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_tollfree2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_fax2', array(
	    'label'    => __( 'Location 2 Fax', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_fax2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_email', array(
	    'label'    => __( 'Email', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_email',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_company_snippet', array(
	    'label'    => __( 'Snippet', 'forta_master' ),
	    'section'  => 'forta_master_companyinfo_section',
	    'settings' => 'forta_master_company_snippet',
	    'type'	   => 'textarea',
	) ) );

	// Social Media
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_facebook_link', array(
	    'label'    => __( 'Facebook Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_facebook_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_twitter_link', array(
	    'label'    => __( 'Twitter Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_twitter_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_gplus_link', array(
	    'label'    => __( 'Google Plus Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_gplus_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_linkedin_link', array(
	    'label'    => __( 'LinkedIn Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_linkedin_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_youtube_link', array(
	    'label'    => __( 'YouTube Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_youtube_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_vimeo_link', array(
	    'label'    => __( 'Vimeo Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_vimeo_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_master_social_pinterest_link', array(
	    'label'    => __( 'Pinterest Link', 'forta_master' ),
	    'section'  => 'forta_master_social_section',
	    'settings' => 'forta_master_social_pinterest_link',
	) ) );

	// Privacy Policy
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_privacy_policy', array(
	    'label'    => __( 'Privacy Policy Link', 'forta_master' ),
	    'section'  => 'forta_master_privacy_section',
	    'settings' => 'forta_privacy_policy',
	) ) );
}

add_action( 'customize_register', 'forta_master_customizer' );