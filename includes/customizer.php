<?php 
function cs2g_customizer( $wp_customize ) {

	// Customizer Sections
	// Logo
	$wp_customize->add_section( 'cs2g_logo_section' , array(
	    'title'       => __( 'Company Logos', 'cs2g' ),
	    'priority'    => 10,
	    'description' => 'Add Company Logos',
	) );
	// Company Information
	$wp_customize->add_section( 'cs2g_companyinfo_section' , array(
	    'title'       => __( 'Company Information', 'cs2g' ),
	    'priority'    => 10,
	    'description' => 'Enter company information',
	) );
	// Social Media
	$wp_customize->add_section( 'cs2g_social_section' , array(
	    'title'       => __( 'Social Media', 'cs2g' ),
	    'priority'    => 30,
	    'description' => 'Add your social media links',
	) );
	// Privacy Policy
	$wp_customize->add_section( 'cs2g_privacy_section' , array(
	    'title'       => __( 'Privacy Policy', 'cs2g' ),
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
	$wp_customize->add_setting( 'cs2g_logo_section' );
	$wp_customize->add_setting( 'cs2g_logo', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_footer_logo', array( 'default' => __( '' ), 'cs2g' ) );
	// Company Information
	$wp_customize->add_setting( 'cs2g_companyinfo_section', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_email_image', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_email', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_address_image', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_street', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_city', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_state', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_zip', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_country', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_gmap', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_phone', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_tollfree_image', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_tollfree', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_fax', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_street2', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_city2', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_state2', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_zip2', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_country2', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_gmap2', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_phone2', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_tollfree2', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_fax2', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_company_snippet', array( 'default' => __( '' ), 'cs2g' ) );
	// Social Media
	$wp_customize->add_setting( 'cs2g_social' );
	$wp_customize->add_setting( 'cs2g_social_facebook_link', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_social_twitter_link', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_social_gplus_link', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_social_linkedin_link', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_social_youtube_link', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_social_vimeo_link', array( 'default' => __( '' ), 'cs2g' ) );
	$wp_customize->add_setting( 'cs2g_social_pinterest_link', array( 'default' => __( '' ), 'cs2g' ) );
	// Privacy Policy
	$wp_customize->add_setting( 'forta_privacy_policy' );

	// Customizer Controls
	// Company Logo
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cs2g_logo', array(
		'description' => __( 'Upload division logo here' ),
	    'label'    => __( 'Site Logo', 'cs2g' ),
	    'section'  => 'cs2g_logo_section',
	    'settings' => 'cs2g_logo',
	) ) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cs2g_footer_logo', array(
		'description' => __( 'Upload footer logo image' ),
	    'label'    => __( 'Footer Logo', 'cs2g' ),
	    'section'  => 'cs2g_logo_section',
	    'settings' => 'cs2g_footer_logo',
	) ) );
	
	// Company Information
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cs2g_company_address_image', array(
		'description' => __( 'Upload Address Image' ),
	    'label'    => __( 'Contact Address Image', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_address_image',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_street', array(
	    'label'    => __( 'Location 1 Street Address', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_street',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_city', array(
	    'label'    => __( 'Location 1 City', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_city',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_state', array(
	    'label'    => __( 'Location 1 State', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_state',
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

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_zip', array(
	    'label'    => __( 'Location 1 Zip Code', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_zip',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_country', array(
	    'label'    => __( 'Location 1 Country', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_country',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_gmap', array(
		'description' => __( 'Paste the Google Code Snippet Here starting with &lt;iframe&gt;. Please replace width to 100% and have the height set to at least 300.' ),
	    'label'    => __( 'Location 1 Google Map', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_gmap',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_phone', array(
	    'label'    => __( 'Location 1 Local Phone', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_phone',
	) ) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cs2g_company_tollfree_image', array(
		'description' => __( 'Upload Tollfree Phone Image' ),
	    'label'    => __( 'Contact Tollfree Image', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_tollfree_image',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_tollfree', array(
	    'label'    => __( 'Location 1 Toll Free Phone', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_tollfree',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_fax', array(
	    'label'    => __( 'Location 1 Fax', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_fax',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_street2', array(
	    'label'    => __( 'Location 2 Street Address', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_street2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_city2', array(
	    'label'    => __( 'Location 2 City', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_city2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_state2', array(
	    'label'    => __( 'Location 2 State', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_state2',
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

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_zip2', array(
	    'label'    => __( 'Location 2 Zip Code', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_zip2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_country2', array(
	    'label'    => __( 'Location 2 Country', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_country2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_gmap2', array(
		'description' => __( 'Paste the Google Code Snippet Here starting with &lt;iframe&gt;. Please replace width to 100% and have the height set to at least 300.' ),
	    'label'    => __( 'Location 2 Google Map', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_gmap2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_phone2', array(
	    'label'    => __( 'Location 2 Local Phone', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_phone2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_tollfree2', array(
	    'label'    => __( 'Location 2 Toll Free Phone', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_tollfree2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_fax2', array(
	    'label'    => __( 'Location 2 Fax', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_fax2',
	) ) );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'cs2g_company_email_image', array(
		'description' => __( 'Upload Email Image' ),
	    'label'    => __( 'Contact Email Image', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_email_image',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_email', array(
	    'label'    => __( 'Email', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_email',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_company_snippet', array(
	    'label'    => __( 'Snippet', 'cs2g' ),
	    'section'  => 'cs2g_companyinfo_section',
	    'settings' => 'cs2g_company_snippet',
	    'type'	   => 'textarea',
	) ) );

	// Social Media
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_social_facebook_link', array(
	    'label'    => __( 'Facebook Link', 'cs2g' ),
	    'section'  => 'cs2g_social_section',
	    'settings' => 'cs2g_social_facebook_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_social_twitter_link', array(
	    'label'    => __( 'Twitter Link', 'cs2g' ),
	    'section'  => 'cs2g_social_section',
	    'settings' => 'cs2g_social_twitter_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_social_gplus_link', array(
	    'label'    => __( 'Google Plus Link', 'cs2g' ),
	    'section'  => 'cs2g_social_section',
	    'settings' => 'cs2g_social_gplus_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_social_linkedin_link', array(
	    'label'    => __( 'LinkedIn Link', 'cs2g' ),
	    'section'  => 'cs2g_social_section',
	    'settings' => 'cs2g_social_linkedin_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_social_youtube_link', array(
	    'label'    => __( 'YouTube Link', 'cs2g' ),
	    'section'  => 'cs2g_social_section',
	    'settings' => 'cs2g_social_youtube_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_social_vimeo_link', array(
	    'label'    => __( 'Vimeo Link', 'cs2g' ),
	    'section'  => 'cs2g_social_section',
	    'settings' => 'cs2g_social_vimeo_link',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cs2g_social_pinterest_link', array(
	    'label'    => __( 'Pinterest Link', 'cs2g' ),
	    'section'  => 'cs2g_social_section',
	    'settings' => 'cs2g_social_pinterest_link',
	) ) );

	// Privacy Policy
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'forta_privacy_policy', array(
	    'label'    => __( 'Privacy Policy Link', 'cs2g' ),
	    'section'  => 'cs2g_privacy_section',
	    'settings' => 'forta_privacy_policy',
	) ) );
}

add_action( 'customize_register', 'cs2g_customizer' );