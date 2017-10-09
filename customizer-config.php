<?php

$panel_to_section = array(
	'id'           => 'starterpro_panel_options',
	'title'        => esc_html( 'Starter Pro Options', 'themeum-core' ),
	'description'  => esc_html__( 'Starter Pro Theme Options', 'themeum-core' ),
	'priority'     => 10,
	'sections'     => array(

		array(
			'id'              => 'header_setting',
			'title'           => esc_html__( 'Header Setting', 'themeum-core' ),
			'description'     => esc_html__( 'Header Settings', 'themeum-core' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(
				array(
					'settings' => 'head_style',
					'label'    => esc_html__( 'Select Header Style', 'themeum-core' ),
					'type'     => 'select',
					'priority' => 10,
					'default'  => 'solid',
					'choices'  => array(
						'transparent' => esc_html( 'Transparent Header', 'themeum-core' ),
						'solid' => esc_html( 'Solid Header', 'themeum-core' ),
					)
				),
				array(
					'settings' => 'header_color',
					'label'    => esc_html__( 'Header background Color', 'themeum-core' ),
					'type'     => 'rgba',
					'priority' => 10,
					'default'  => '#fff',
				),
				array(
					'settings' => 'header_border_color',
					'label'    => esc_html__( 'Header border bottom color', 'themeum-core' ),
					'type'     => 'rgba',
					'priority' => 10,
					'default'  => 'rgba(255, 255, 255, 0)',
				),
				array(
					'settings' => 'header_padding_top',
					'label'    => esc_html__( 'Header Top Padding', 'themeum-core' ),
					'type'     => 'number',
					'priority' => 10,
					'default'  => 20,
				),
				array(
					'settings' => 'header_padding_bottom',
					'label'    => esc_html__( 'Header Bottom Padding', 'themeum-core' ),
					'type'     => 'number',
					'priority' => 10,
					'default'  => 20,
				),
				array(
					'settings' => 'header_fixed',
					'label'    => esc_html__( 'Sticky Header', 'themeum-core' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => false,
				),
				array(
					'settings' => 'sticky_header_color',
					'label'    => esc_html__( 'Sticky background Color', 'themeum-core' ),
					'type'     => 'rgba',
					'priority' => 10,
					'default'  => '#fff',
				),
				array(
					'settings' => 'google_map_api_key',
					'label'    => esc_html__( 'Google Map Api Key', 'themeum-core' ),
					'subtitle'  => __('You will need to generate a Google API key to use this feature. Please visit: https://developers.google.com/fonts/docs/developer_api#Auth', 'themeum-core'),
					'type'     => 'text',
					'priority' => 10,
					
				),				
			)//fields
		),//header_setting

		array(
			'id'              => 'logo_setting',
			'title'           => esc_html__( 'All Logo & favicon', 'themeum-core' ),
			'description'     => esc_html__( 'All Logo & favicon', 'themeum-core' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(
				array(
					'settings' => 'logo_style',
					'label'    => esc_html__( 'Select Header Style', 'themeum-core' ),
					'type'     => 'select',
					'priority' => 10,
					'default'  => 'logoimg',
					'choices'  => array(
						'logoimg' => esc_html( 'Logo image', 'themeum-core' ),
						'logotext' => esc_html( 'Logo text', 'themeum-core' ),
					)
				),
				array(
					'settings' => 'logo',
					'label'    => esc_html__( 'Upload Logo', 'themeum-core' ),
					'type'     => 'upload',
					'priority' => 10,
					'default' => get_template_directory_uri().'/images/logo.png',
				),
				array(
					'settings' => 'logo_width',
					'label'    => esc_html__( 'Logo Width', 'themeum-core' ),
					'type'     => 'number',
					'priority' => 10,
				),
				array(
					'settings' => 'logo_height',
					'label'    => esc_html__( 'Logo Height', 'themeum-core' ),
					'type'     => 'number',
					'priority' => 10,
				),
				array(
					'settings' => 'logo_text',
					'label'    => esc_html__( 'Use your Custom logo text', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => 'Starter Pro',
				),				
			)//fields
		),//logo_setting
		
		array(
			'id'              => 'sub_header_banner',
			'title'           => esc_html__( 'Sub Header Banner', 'themeum-core' ),
			'description'     => esc_html__( 'sub header banner', 'themeum-core' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(
				array(
					'settings' => 'sub_header_padding_top',
					'label'    => esc_html__( 'Sub-Header Padding Top', 'themeum-core' ),
					'type'     => 'number',
					'priority' => 10,
					'default'  => 142,
				),
				array(
					'settings' => 'sub_header_padding_bottom',
					'label'    => esc_html__( 'Sub-Header Padding Bottom', 'themeum-core' ),
					'type'     => 'number',
					'priority' => 10,
					'default'  => 92,
				),
				array(
					'settings' => 'sub_header_margin_bottom',
					'label'    => esc_html__( 'Sub-Header Margin Bottom', 'themeum-core' ),
					'type'     => 'number',
					'priority' => 10,
					'default'  => 100,
				),
				array(
					'settings' => 'sub_header_banner_img',
					'label'    => esc_html__( 'Sub-Header Background Image', 'themeum-core' ),
					'type'     => 'image',
					'priority' => 10,
				),
				array(
					'settings' => 'sub_header_banner_color',
					'label'    => esc_html__( 'Sub-Header Background Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#333',
				),
				array(
					'settings' => 'sub_header_title',
					'label'    => esc_html__( 'Title Settings', 'themeum-core' ),
					'type'     => 'title',
					'priority' => 10,
				),
				array(
					'settings' => 'sub_header_title_enable',
					'label'    => esc_html__( 'Header Title Enable', 'themeum-core' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => true,
				),
				array(
					'settings' => 'sub_header_title_size',
					'label'    => esc_html__( 'Header Title Font Size', 'themeum-core' ),
					'type'     => 'number',
					'priority' => 10,
					'default'  => '42',
				),
				array(
					'settings' => 'sub_header_title_color',
					'label'    => esc_html__( 'Header Title Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#fff',
				),
			)//fields
		),//sub_header_banner


		array(
			'id'              => 'typo_setting',
			'title'           => esc_html__( 'Typography Setting', 'themeum-core' ),
			'description'     => esc_html__( 'Typography Setting', 'themeum-core' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(

				//body font
				array(
					'settings' => 'body_google_font',
					'label'    => esc_html__( 'Select Google Font', 'themeum-core' ),
					'type'     => 'select',
					'default'  => 'Raleway',
					'choices'  => get_google_fonts(),
					'google_font' => true,
					'google_font_weight' => 'body_font_weight',
					'google_font_weight_default' => '400'
				),
				array(
					'settings' => 'body_font_size',
					'label'    => esc_html__( 'Body Font Size', 'themeum-core' ),
					'type'     => 'number',
					'default'  => '14',
				),
				array(
					'settings' => 'body_font_height',
					'label'    => esc_html__( 'Body Font Line Height', 'themeum-core' ),
					'type'     => 'number',
					'default'  => '24',
				),
				array(
					'settings' => 'body_font_weight',
					'label'    => esc_html__( 'Body Font Weight', 'themeum-core' ),
					'type'     => 'select',
					'priority' => 10,
					'default'  => '400',
					'choices'  => array(
						'' => esc_html( 'Select', 'themeum-core' ),
						'100' => esc_html( '100', 'themeum-core' ),
						'200' => esc_html( '200', 'themeum-core' ),
						'300' => esc_html( '300', 'themeum-core' ),
						'400' => esc_html( '400', 'themeum-core' ),
						'500' => esc_html( '500', 'themeum-core' ),
						'600' => esc_html( '600', 'themeum-core' ),
						'700' => esc_html( '700', 'themeum-core' ),
						'800' => esc_html( '800', 'themeum-core' ),
						'900' => esc_html( '900', 'themeum-core' ),
					)
				),
				array(
					'settings' => 'body_font_color',
					'label'    => esc_html__( 'Body Font Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#777777',
				),

				//Menu font
				array(
					'settings' => 'menu_google_font',
					'label'    => esc_html__( 'Select Google Font', 'themeum-core' ),
					'type'     => 'select',
					'default'  => 'Lato',
					'choices'  => get_google_fonts(),
					'google_font' => true,
					'google_font_weight' => 'menu_font_weight',
					'google_font_weight_default' => '400'
				),
				array(
					'settings' => 'menu_font_size',
					'label'    => esc_html__( 'Menu Font Size', 'themeum-core' ),
					'type'     => 'number',
					'default'  => '14',
				),
				array(
					'settings' => 'menu_font_height',
					'label'    => esc_html__( 'Menu Font Line Height', 'themeum-core' ),
					'type'     => 'number',
					'default'  => '24',
				),
				array(
					'settings' => 'menu_font_weight',
					'label'    => esc_html__( 'Menu Font Weight', 'themeum-core' ),
					'type'     => 'select',
					'priority' => 10,
					'default'  => '400',
					'choices'  => array(
						'' => esc_html( 'Select', 'themeum-core' ),
						'100' => esc_html( '100', 'themeum-core' ),
						'200' => esc_html( '200', 'themeum-core' ),
						'300' => esc_html( '300', 'themeum-core' ),
						'400' => esc_html( '400', 'themeum-core' ),
						'500' => esc_html( '500', 'themeum-core' ),
						'600' => esc_html( '600', 'themeum-core' ),
						'700' => esc_html( '700', 'themeum-core' ),
						'800' => esc_html( '800', 'themeum-core' ),
						'900' => esc_html( '900', 'themeum-core' ),
					)
				),
				array(
					'settings' => 'menu_font_color',
					'label'    => esc_html__( 'Menu Font Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#777777',
				),


				//Heading 1
				array(
					'settings' => 'h1_google_font',
					'label'    => esc_html__( 'Heading1 Google Font', 'themeum-core' ),
					'type'     => 'select',
					'default'  => 'Lato',
					'choices'  => get_google_fonts(),
					'google_font' => true,
					'google_font_weight' => 'menu_font_weight',
					'google_font_weight_default' => '400'
				),
				array(
					'settings' => 'h1_font_size',
					'label'    => esc_html__( 'Heading1 Font Size', 'themeum-core' ),
					'type'     => 'number',
					'default'  => '46',
				),
				array(
					'settings' => 'h1_font_height',
					'label'    => esc_html__( 'Heading1 Font Line Height', 'themeum-core' ),
					'type'     => 'number',
					'default'  => '24',
				),
				array(
					'settings' => 'h1_font_weight',
					'label'    => esc_html__( 'Heading1 Font Weight', 'themeum-core' ),
					'type'     => 'select',
					'priority' => 10,
					'default'  => '400',
					'choices'  => array(
						'' => esc_html( 'Select', 'themeum-core' ),
						'100' => esc_html( '100', 'themeum-core' ),
						'200' => esc_html( '200', 'themeum-core' ),
						'300' => esc_html( '300', 'themeum-core' ),
						'400' => esc_html( '400', 'themeum-core' ),
						'500' => esc_html( '500', 'themeum-core' ),
						'600' => esc_html( '600', 'themeum-core' ),
						'700' => esc_html( '700', 'themeum-core' ),
						'800' => esc_html( '800', 'themeum-core' ),
						'900' => esc_html( '900', 'themeum-core' ),
					)
				),
				array(
					'settings' => 'h1_font_color',
					'label'    => esc_html__( 'Heading1 Font Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#777777',
				),

				//Heading 2
				array(
					'settings' => 'h2_google_font',
					'label'    => esc_html__( 'Heading2 Google Font', 'themeum-core' ),
					'type'     => 'select',
					'default'  => 'Lato',
					'choices'  => get_google_fonts(),
					'google_font' => true,
					'google_font_weight' => 'menu_font_weight',
					'google_font_weight_default' => '400'
				),
				array(
					'settings' => 'h2_font_size',
					'label'    => esc_html__( 'Heading2 Font Size', 'themeum-core' ),
					'type'     => 'number',
					'default'  => '36',
				),
				array(
					'settings' => 'h2_font_height',
					'label'    => esc_html__( 'Heading2 Font Line Height', 'themeum-core' ),
					'type'     => 'number',
					'default'  => '24',
				),
				array(
					'settings' => 'h2_font_weight',
					'label'    => esc_html__( 'Heading2 Font Weight', 'themeum-core' ),
					'type'     => 'select',
					'priority' => 10,
					'default'  => '400',
					'choices'  => array(
						'' => esc_html( 'Select', 'themeum-core' ),
						'100' => esc_html( '100', 'themeum-core' ),
						'200' => esc_html( '200', 'themeum-core' ),
						'300' => esc_html( '300', 'themeum-core' ),
						'400' => esc_html( '400', 'themeum-core' ),
						'500' => esc_html( '500', 'themeum-core' ),
						'600' => esc_html( '600', 'themeum-core' ),
						'700' => esc_html( '700', 'themeum-core' ),
						'800' => esc_html( '800', 'themeum-core' ),
						'900' => esc_html( '900', 'themeum-core' ),
					)
				),
				array(
					'settings' => 'h2_font_color',
					'label'    => esc_html__( 'Heading2 Font Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#777777',
				),

				//Heading 3
				array(
					'settings' => 'h3_google_font',
					'label'    => esc_html__( 'Heading3 Google Font', 'themeum-core' ),
					'type'     => 'select',
					'default'  => 'Lato',
					'choices'  => get_google_fonts(),
					'google_font' => true,
					'google_font_weight' => 'menu_font_weight',
					'google_font_weight_default' => '400'
				),
				array(
					'settings' => 'h3_font_size',
					'label'    => esc_html__( 'Heading3 Font Size', 'themeum-core' ),
					'type'     => 'number',
					'default'  => '26',
				),
				array(
					'settings' => 'h3_font_height',
					'label'    => esc_html__( 'Heading3 Font Line Height', 'themeum-core' ),
					'type'     => 'number',
					'default'  => '24',
				),
				array(
					'settings' => 'h3_font_weight',
					'label'    => esc_html__( 'Heading3 Font Weight', 'themeum-core' ),
					'type'     => 'select',
					'priority' => 10,
					'default'  => '400',
					'choices'  => array(
						'' => esc_html( 'Select', 'themeum-core' ),
						'100' => esc_html( '100', 'themeum-core' ),
						'200' => esc_html( '200', 'themeum-core' ),
						'300' => esc_html( '300', 'themeum-core' ),
						'400' => esc_html( '400', 'themeum-core' ),
						'500' => esc_html( '500', 'themeum-core' ),
						'600' => esc_html( '600', 'themeum-core' ),
						'700' => esc_html( '700', 'themeum-core' ),
						'800' => esc_html( '800', 'themeum-core' ),
						'900' => esc_html( '900', 'themeum-core' ),
					)
				),
				array(
					'settings' => 'h3_font_color',
					'label'    => esc_html__( 'Heading3 Font Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#777777',
				),

				//Heading 4
				array(
					'settings' => 'h4_google_font',
					'label'    => esc_html__( 'Heading4 Google Font', 'themeum-core' ),
					'type'     => 'select',
					'default'  => 'Lato',
					'choices'  => get_google_fonts(),
					'google_font' => true,
					'google_font_weight' => 'menu_font_weight',
					'google_font_weight_default' => '400'
				),
				array(
					'settings' => 'h4_font_size',
					'label'    => esc_html__( 'Heading4 Font Size', 'themeum-core' ),
					'type'     => 'number',
					'default'  => '18',
				),
				array(
					'settings' => 'h4_font_height',
					'label'    => esc_html__( 'Heading4 Font Line Height', 'themeum-core' ),
					'type'     => 'number',
					'default'  => '24',
				),
				array(
					'settings' => 'h4_font_weight',
					'label'    => esc_html__( 'Heading4 Font Weight', 'themeum-core' ),
					'type'     => 'select',
					'priority' => 10,
					'default'  => '400',
					'choices'  => array(
						'' => esc_html( 'Select', 'themeum-core' ),
						'100' => esc_html( '100', 'themeum-core' ),
						'200' => esc_html( '200', 'themeum-core' ),
						'300' => esc_html( '300', 'themeum-core' ),
						'400' => esc_html( '400', 'themeum-core' ),
						'500' => esc_html( '500', 'themeum-core' ),
						'600' => esc_html( '600', 'themeum-core' ),
						'700' => esc_html( '700', 'themeum-core' ),
						'800' => esc_html( '800', 'themeum-core' ),
						'900' => esc_html( '900', 'themeum-core' ),
					)
				),
				array(
					'settings' => 'h4_font_color',
					'label'    => esc_html__( 'Heading4 Font Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#777777',
				),

				//Heading 5
				array(
					'settings' => 'h5_google_font',
					'label'    => esc_html__( 'Heading5 Google Font', 'themeum-core' ),
					'type'     => 'select',
					'default'  => 'Lato',
					'choices'  => get_google_fonts(),
					'google_font' => true,
					'google_font_weight' => 'menu_font_weight',
					'google_font_weight_default' => '400'
				),
				array(
					'settings' => 'h5_font_size',
					'label'    => esc_html__( 'Heading5 Font Size', 'themeum-core' ),
					'type'     => 'number',
					'default'  => '14',
				),
				array(
					'settings' => 'h5_font_height',
					'label'    => esc_html__( 'Heading5 Font Line Height', 'themeum-core' ),
					'type'     => 'number',
					'default'  => '24',
				),
				array(
					'settings' => 'h5_font_weight',
					'label'    => esc_html__( 'Heading5 Font Weight', 'themeum-core' ),
					'type'     => 'select',
					'priority' => 10,
					'default'  => '400',
					'choices'  => array(
						'' => esc_html( 'Select', 'themeum-core' ),
						'100' => esc_html( '100', 'themeum-core' ),
						'200' => esc_html( '200', 'themeum-core' ),
						'300' => esc_html( '300', 'themeum-core' ),
						'400' => esc_html( '400', 'themeum-core' ),
						'500' => esc_html( '500', 'themeum-core' ),
						'600' => esc_html( '600', 'themeum-core' ),
						'700' => esc_html( '700', 'themeum-core' ),
						'800' => esc_html( '800', 'themeum-core' ),
						'900' => esc_html( '900', 'themeum-core' ),
					)
				),
				array(
					'settings' => 'h5_font_color',
					'label'    => esc_html__( 'Heading5 Font Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#777777',
				),

			)//fields
		),//typo_setting


		array(
			'id'              => 'layout_styling',
			'title'           => esc_html__( 'Layout & Styling', 'themeum-core' ),
			'description'     => esc_html__( 'Layout & Styling', 'themeum-core' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(
				array(
					'settings' => 'body_bg_color',
					'label'    => esc_html__( 'Body Background Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#fff',
				),
				array(
					'settings' => 'body_bg_img',
					'label'    => esc_html__( 'Body Background Image', 'themeum-core' ),
					'type'     => 'image',
					'priority' => 10,
				),
				array(
					'settings' => 'body_bg_attachment',
					'label'    => esc_html__( 'Body Background Attachment', 'themeum-core' ),
					'type'     => 'select',
					'priority' => 10,
					'default'  => 'fixed',
					'choices'  => array(
						'scroll' => esc_html__( 'Scroll', 'themeum-core' ),
						'fixed' => esc_html__( 'Fixed', 'themeum-core' ),
						'inherit' => esc_html__( 'Inherit', 'themeum-core' ),
					)
				),
				array(
					'settings' => 'body_bg_repeat',
					'label'    => esc_html__( 'Body Background Repeat', 'themeum-core' ),
					'type'     => 'select',
					'priority' => 10,
					'default'  => 'no-repeat',
					'choices'  => array(
						'repeat' => esc_html__( 'Repeat', 'themeum-core' ),
						'repeat-x' => esc_html__( 'Repeat Horizontally', 'themeum-core' ),
						'repeat-y' => esc_html__( 'Repeat Vertically', 'themeum-core' ),
						'no-repeat' => esc_html__( 'No Repeat', 'themeum-core' ),
					)
				),
				array(
					'settings' => 'body_bg_size',
					'label'    => esc_html__( 'Body Background Size', 'themeum-core' ),
					'type'     => 'select',
					'priority' => 10,
					'default'  => 'cover',
					'choices'  => array(
						'cover' => esc_html__( 'Cover', 'themeum-core' ),
						'contain' => esc_html__( 'Contain', 'themeum-core' ),
					)
				),
				array(
					'settings' => 'body_bg_position',
					'label'    => esc_html__( 'Body Background Position', 'themeum-core' ),
					'type'     => 'select',
					'priority' => 10,
					'default'  => 'left top',
					'choices'  => array(
						'left top' => esc_html__('left top', 'themeum-core'),
						'left center' => esc_html__('left center', 'themeum-core'),
						'left bottom' => esc_html__('left bottom', 'themeum-core'),
						'right top' => esc_html__('right top', 'themeum-core'),
						'right center' => esc_html__('right center', 'themeum-core'),
						'right bottom' => esc_html__('right bottom', 'themeum-core'),
						'center top' => esc_html__('center top', 'themeum-core'),
						'center center' => esc_html__('center center', 'themeum-core'),
						'center bottom' => esc_html__('center bottom', 'themeum-core'),
					)
				),
				array(
					'settings' => 'preset',
					'label'    => esc_html__( 'Preset Color', 'themeum-core' ),
					'type'     => 'radio_image',
					'priority' => 10,
					'transport'=> 'postMessage',
					'default'  => '#32aad6',
					'choices'  => array(
						'#32aad6' => get_template_directory_uri().'/lib/customizer/assets/presets/1.png',
						'#f7941d' => get_template_directory_uri().'/lib/customizer/assets/presets/2.png',
						'#88cb2c' => get_template_directory_uri().'/lib/customizer/assets/presets/3.png',
						'#8177db' => get_template_directory_uri().'/lib/customizer/assets/presets/4.png',
						'#22c5be' => get_template_directory_uri().'/lib/customizer/assets/presets/5.png',
						'#e2b278' => get_template_directory_uri().'/lib/customizer/assets/presets/6.png',
					)
				),
				array(
					'settings' => 'custom_preset_en',
					'label'    => esc_html__( 'Set Custom Color', 'themeum-core' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => true,
				),
				array(
					'settings' => 'major_color',
					'label'    => esc_html__( 'Major Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#00aeef',
				),
				array(
					'settings' => 'hover_color',
					'label'    => esc_html__( 'Hover Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#00a2e8',
				),

				array(
					'settings' => 'bottom_color',
					'label'    => esc_html__( 'Bottom background Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'footer_color',
					'label'    => esc_html__( 'Footer background Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#202134',
				),

				array(
					'settings' => 'footer_text_color',
					'label'    => esc_html__( 'Footer Text Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#202134',
				),

				array(
                    'settings'  => 'header-bg',
                    'type'      => 'rgba',
                    'label'     => __('Menu Background Color', 'themeum'),
                    'default'   => 'rgba(0,0,0,0.8)',
                ),




				# button color section(new)
				array(
					'settings' => 'button_color_title',
					'label'    => esc_html__( 'Button Color Settings', 'themeum-core' ),
					'type'     => 'title',
					'priority' => 10,
				),
				
				array(
					'settings' => 'button_bg_color',
					'label'    => esc_html__( 'Background Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#32aad6',
				),

				array(
					'settings' => 'button_hover_bg_color',
					'label'    => esc_html__( 'Hover Background Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#00aeef',
				),
				array(
					'settings' => 'button_text_color',
					'label'    => esc_html__( 'Text Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#fff',
				),
				array(
					'settings' => 'button_hover_text_color',
					'label'    => esc_html__( 'Hover Text Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#fff',
				),
				array(
					'settings' => 'button_radius',
					'label'    => esc_html__( 'Border Radius', 'themeum-core' ),
					'type'     => 'range',
					'priority' => 10,
					'default'  => '4',
				),
				# end button color section.

				# navbar color section start.
				array(
					'settings' => 'menu_color_title',
					'label'    => esc_html__( 'Menu Color Settings', 'themeum-core' ),
					'type'     => 'title',
					'priority' => 10,
				),
				array(
					'settings' => 'navbar_text_color',
					'label'    => esc_html__( 'Text Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#808080',
				),

				/*array(
					'settings' => 'navbar_hover_text_color',
					'label'    => esc_html__( 'Hover Text Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '',
				),*/
				array(
					'settings' => 'navbar_bracket_color',
					'label'    => esc_html__( 'Bracket Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#00aeef',
				),
				array(
					'settings' => 'sub_menu_color_title',
					'label'    => esc_html__( 'Sub-Menu Color Settings', 'themeum-core' ),
					'type'     => 'title',
					'priority' => 10,
				),
				array(
					'settings' => 'sub_menu_bg',
					'label'    => esc_html__( 'Background Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#fff',
				),
				array(
					'settings' => 'sub_menu_text_color',
					'label'    => esc_html__( 'Text Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#000',
				),
				array(
					'settings' => 'sub_menu_border',
					'label'    => esc_html__( 'Border Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#eef0f2',
				),
				array(
					'settings' => 'sub_menu_bg_hover',
					'label'    => esc_html__( 'Hover Background Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#fbfbfc',
				),
				array(
					'settings' => 'sub_menu_text_color_hover',
					'label'    => esc_html__( 'Hover Text Color', 'themeum-core' ),
					'type'     => 'color',
					'priority' => 10,
					'default'  => '#000',
				),
				#End of the navbar color section


			)//fields
		),//Layout & Styling

		array(
			'id'              => 'social_media_settings',
			'title'           => esc_html__( 'Social Media', 'themeum-core' ),
			'description'     => esc_html__( 'Social Media', 'themeum-core' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(
				array(
					'settings' => 'wp_facebook',
					'label'    => esc_html__( 'Add Facebook URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_twitter',
					'label'    => esc_html__( 'Add Twitter URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_google_plus',
					'label'    => esc_html__( 'Add Goole Plus URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_pinterest',
					'label'    => esc_html__( 'Add Pinterest URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_youtube',
					'label'    => esc_html__( 'Add Youtube URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_linkedin',
					'label'    => esc_html__( 'Add Linkedin URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_instagram',
					'label'    => esc_html__( 'Add Instagram URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_dribbble',
					'label'    => esc_html__( 'Add Dribbble URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_behance',
					'label'    => esc_html__( 'Add Behance URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_flickr',
					'label'    => esc_html__( 'Add Flickr URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_vk',
					'label'    => esc_html__( 'Add Vk URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'wp_skype',
					'label'    => esc_html__( 'Add Skype URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
			)//fields
		),//social_media

		array(
			'id'              => 'coming_soon',
			'title'           => esc_html__( 'Coming Soon', 'themeum-core' ),
			'description'     => esc_html__( 'Coming Soon', 'themeum-core' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(

				array(
					'settings' => 'comingsoon_en',
					'label'    => esc_html__( 'Enable Coming Soon', 'themeum-core' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => false,
				),
				array(
					'settings' => 'comingsoonbg',
					'label'    => esc_html__( 'Upload Coming Soon Page Background', 'themeum-core' ),
					'type'     => 'image',
					'priority' => 10,
				),

				array(
					'settings' => 'comingsoonlogo',
					'label'    => esc_html__( 'Upload Coming Soon Page logo', 'themeum-core' ),
					'type'     => 'image',
					'priority' => 10,
				),

				array(
					'settings' => 'comingsoon_date',
					'label'    => esc_html__( 'Coming Soon date', 'themeum-core' ),
					'type'     => 'date',
					'priority' => 10,
					'default'  => '2018-08-09',
				),
				array(
					'settings' => 'newsletter',
					'label'    => esc_html__( 'Add mailchimp Form Shortcode Here', 'themeum-core' ),
					'type'     => 'textarea',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'comingsoon_facebook',
					'label'    => esc_html__( 'Add Facebook URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'comingsoon_twitter',
					'label'    => esc_html__( 'Add Twitter URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'comingsoon_google_plus',
					'label'    => esc_html__( 'Add Google Plus URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'comingsoon_pinterest',
					'label'    => esc_html__( 'Add Pinterest URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'comingsoon_youtube',
					'label'    => esc_html__( 'Add Youtube URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'comingsoon_linkedin',
					'label'    => esc_html__( 'Add Linkedin URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'comingsoon_dribbble',
					'label'    => esc_html__( 'Add Dribbble URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
				array(
					'settings' => 'comingsoon_instagram',
					'label'    => esc_html__( 'Add Instagram URL', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '',
				),
			)//fields
		),//coming_soon
		array(
			'id'              => '404_settings',
			'title'           => esc_html__( '404 Page', 'themeum-core' ),
			'description'     => esc_html__( '404 page background and text settings', 'themeum-core' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(
				array(
					'settings' => 'errorbg',
					'label'    => esc_html__( 'Upload 404 Page Background Image', 'themeum-core' ),
					'type'     => 'image',
					'priority' => 10,
				),
				array(
					'settings' => 'errorlogo',
					'label'    => esc_html__( 'Upload 404 Page logo Image', 'themeum-core' ),
					'type'     => 'image',
					'priority' => 10,
				),
				array(
					'settings' => '404_title',
					'label'    => esc_html__( '404 Page Title', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => esc_html__('Page Not Found - Lost Maybe?.', 'themeum-core')
				),
				array(
					'settings' => '404_description',
					'label'    => esc_html__( '404 Page Description', 'themeum-core' ),
					'type'     => 'textarea',
					'priority' => 10,
					'default'  => esc_html__('The page you are looking for was moved, removed, renamed or might never existed..', 'themeum-core')
				),
				array(
					'settings' => '404_btn_text',
					'label'    => esc_html__( '404 Button Text', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => esc_html__('Go Back Home', 'themeum-core')
				),
			)
		),
		array(
			'id'              => 'blog_setting',
			'title'           => esc_html__( 'Blog Setting', 'themeum-core' ),
			'description'     => esc_html__( 'Blog Setting', 'themeum-core' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(
				array(
					'settings' => 'blog_column',
					'label'    => esc_html__( 'Select Blog Column', 'themeum-core' ),
					'type'     => 'select',
					'priority' => 10,
					'default'  => '12',
					'choices'  => array(
						'12' => esc_html( 'Column 1', 'themeum-core' ),
						'6' => esc_html( 'Column 2', 'themeum-core' ),
						'4' => esc_html( 'Column 3', 'themeum-core' ),
						'3' => esc_html( 'Column 4', 'themeum-core' ),
					)
				),
				array(
					'settings' => 'blog_date',
					'label'    => esc_html__( 'Enable Blog Date', 'themeum-core' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => true,
				),
				array(
					'settings' => 'blog_author',
					'label'    => esc_html__( 'Enable Blog Author', 'themeum-core' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => false,
				),
				array(
					'settings' => 'blog_category',
					'label'    => esc_html__( 'Enable Blog Category', 'themeum-core' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => false,
				),
				array(
					'settings' => 'blog_comment',
					'label'    => esc_html__( 'Enable Comment', 'themeum-core' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => true,
				),
				array(
					'settings' => 'blog_single_comment_en',
					'label'    => esc_html__( 'Enable Single post comment', 'themeum-core' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => true,
				),
				array(
					'settings' => 'blog_tags',
					'label'    => esc_html__( 'Enable single post tags', 'themeum-core' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => true,
				),
				array(
					'settings' => 'post_nav_en',
					'label'    => esc_html__( 'Enable Post navigation', 'themeum-core' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => true,
				),
				array(
					'settings' => 'blog_intro_en',
					'label'    => esc_html__( 'Enable post content', 'themeum-core' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => true,
				),
				array(
					'settings' => 'blog_post_text_limit',
					'label'    => esc_html__( 'Post character Limit', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '150',
				),
				array(
					'settings' => 'blog_continue_en',
					'label'    => esc_html__( 'Enable Blog Readmore', 'themeum-core' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => true,
				),
				array(
					'settings' => 'blog_continue',
					'label'    => esc_html__( 'Continue Reading', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => 'Read More',
				),
				array(
					'settings' => 'post_views_count',
					'label'    => esc_html__( 'Blog Post Views Count', 'themeum-core' ),
					'type'     => 'text',
					'priority' => 10,
					'default'  => '1',
				),
			)//fields
		),//blog_setting

		array(
			'id'              => 'footer_setting',
			'title'           => esc_html__( 'Footer Setting', 'themeum-core' ),
			'description'     => esc_html__( 'Footer Setting', 'themeum-core' ),
			'priority'        => 10,
			'fields'         => array(

				array(
					'settings' => 'footer_logo',
					'label'    => esc_html__( 'Upload Footer Logo', 'themeum-core' ),
					'type'     => 'upload',
					'priority' => 10,
					'default' => get_template_directory_uri().'/images/logo.png',
				),

				array(
					'settings' => 'footer_share',
					'label'    => esc_html__( 'Enable Footer Share', 'themeum-core' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => true,
				),
				array(
					'settings' => 'copyright_en',
					'label'    => esc_html__( 'Enable Copyright Text', 'themeum-core' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => true,
				),
				array(
					'settings' => 'copyright_text',
					'label'    => esc_html__( 'Copyright Text', 'themeum-core' ),
					'type'     => 'textarea',
					'priority' => 10,
					'default'  => '',
				),
			)//fields
		),//footer_setting

		array(
			'id'              => 'help_setting',
			'title'           => esc_html__( 'Help Settings', 'themeum-core' ),
			'description'     => esc_html__( 'Help Settings', 'themeum-core' ),
			'priority'        => 10,
			// 'active_callback' => 'is_front_page',
			'fields'         => array(

				array(
					'settings' => 'my_url',
					'label'    => esc_html__( 'URL control', 'themeum-core' ),
					'type'     => 'url',
					'priority' => 10,
					'default'  => 'https://www.joomshaper.com/',
				),

				array(
					'settings' => 'my_range',
					'label'    => esc_html__( 'Range control', 'themeum-core' ),
					'type'     => 'range',
					'priority' => 10,
					'default'  => 5,
				),
				array(
					'settings' => 'my_checkbox_single',
					'label'    => esc_html__( 'Single Checkbox control', 'themeum-core' ),
					'type'     => 'checkbox',
					'priority' => 10,
					'default'  => true,
				),
				array(
					'settings' => 'my_textarea',
					'label'    => esc_html__( 'Textarea control', 'themeum-core' ),
					'type'     => 'textarea',
					'priority' => 10,
					'default'  => 'default value',
				),
				array(
					'settings' => 'ex_radio',
					'label'    => esc_html__( 'Radio control', 'themeum-core' ),
					'type'     => 'radio',
					'priority' => 10,
					'default'  => 'hello',
					'choices'  => array(
						'new' => esc_html( 'New', 'themeum-core' ),
						'hello' => esc_html( 'Hello', 'themeum-core' ),
						'world' => esc_html( 'World', 'themeum-core' ),
					)
				),
				array(
					'settings' => 'ex_multi_select',
					'label'    => esc_html__( 'Multi-Select control', 'themeum-core' ),
					'type'     => 'multi_select',
					'priority' => 10,
					'default'  => array('hello', 'new'),
					'choices'  => array(
						'new' => esc_html( 'New', 'themeum-core' ),
						'hello' => esc_html( 'Hello', 'themeum-core' ),
						'world' => esc_html( 'World', 'themeum-core' ),
						'world1' => esc_html( 'World1', 'themeum-core' ),
						'world2' => esc_html( 'World2', 'themeum-core' ),
						'world3' => esc_html( 'World3', 'themeum-core' ),
						'world4' => esc_html( 'World4', 'themeum-core' ),
					)
				),
				array(
					'settings' => 'rgba_color',
					'label'    => esc_html__( 'RGBA Color control', 'themeum-core' ),
					'type'     => 'rgba',
					'priority' => 10,
					'default'  => 'rgba(0,0,0,0.5)',
				),

				array(
					'settings' => 'upload',
					'label'    => esc_html__( 'Upload control', 'themeum-core' ),
					'type'     => 'upload',
					'priority' => 10,
				),
				array(
					'settings' => 'radio_btn',
					'label'    => esc_html__( 'Radio Button control', 'themeum-core' ),
					'type'     => 'radio_button',
					'priority' => 10,
					'default'  => 'hello',
					'choices'  => array(
						'new' => esc_html( 'New', 'themeum-core' ),
						'hello' => esc_html( 'Hello', 'themeum-core' ),
						'world' => esc_html( 'World', 'themeum-core' ),
					)
				),

				array(
					'settings' => 'checkbox_btn',
					'label'    => esc_html__( 'Checkbox Button control', 'themeum-core' ),
					'type'     => 'checkbox_button',
					'priority' => 10,
					'default'  => array('hello'),
					'choices'  => array(
						'new' => esc_html( 'New', 'themeum-core' ),
						'hello' => esc_html( 'Hello', 'themeum-core' ),
						'world' => esc_html( 'World', 'themeum-core' ),
					)
				),
				// array(
				// 	'settings' => 'checkbox_img',
				// 	'label'    => esc_html__( 'Checkbox Image control', 'themeum-core' ),
				// 	'type'     => 'checkbox_image',
				// 	'priority' => 10,
				// 	'default'  => array('hello'),
				// 	'choices'  => array(
				// 		'new' => 'http://10.0.1.13/framework/wp-admin/images/align-center-2x.png',
				// 		'hello' => 'http://10.0.1.13/framework/wp-admin/images/align-left-2x.png',
				// 		'world' => 'http://10.0.1.13/framework/wp-admin/images/align-right-2x.png',
				// 	)
				// ),
				array(
					'settings' => 'switch_btn',
					'label'    => esc_html__( 'Switch control', 'themeum-core' ),
					'type'     => 'switch',
					'priority' => 10,
					'default'  => true,
				),
				array(
					'settings' => 'ex_color_palette',
					'label'    => esc_html__( 'Color Palette control', 'themeum-core' ),
					'type'     => 'color_palette',
					'priority' => 10,
					'default'  => 'hello',
					'choices'  => array(
						'new' => array(
							'#8224e3',
							'#060626',
							'#e3e7ea'
						),
						'hello' => array(
							'#f100f0',
							'#ff00f0',
							'#f2ff00'
						),
						'world' => array(
							'#f300f8',
							'#ff0500',
							'#f2ff0f'
						),
					)
				),
			)//fields
		),//help_setting
	),
);//starterpro_panel_options


$framework = new THM_Customize( $panel_to_section );
