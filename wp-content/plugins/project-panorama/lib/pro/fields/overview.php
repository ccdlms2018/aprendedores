<?php
$date_format_opt 	= get_option( 'date_format' );
$date_format 		= ( substr( $date_format_opt, 0, 1 ) == 'd' ? 'dd/mm/yy' : 'mm/dd/yy' );
$wysiwyg_format		= ( psp_get_option( 'psp_lazyload_wysiwyg' ) ? 'lite_wysiwyg' : 'wysiwyg' );
$media_gallery_access	= ( psp_get_option('psp_restrict_media_gallery') ? 'uploadedTo' : 'all' );

$overview_fields 	= array (
	'id' => 'acf_overview',
	'title' => __('Overview','psp_projects'),
	'fields' => array (
		array (
			'key' => 'field_527d5d61fb854',
			'label' => __('Percent Complete','psp_projects'),
			'name' => 'percent_complete',
			'type' => 'num_slider',
			'conditional_logic' => array (
				'status' => 1,
				'rules' => array (
					array (
						'field' => 'field_52c46fa974b08',
						'operator' => '!=',
						'value' => 'Yes',
					),
				),
				'allorany' => 'all',
			),
			'minimum_number' => 1,
			'max_number' => 100,
			'inc_number' => 1,
			'start_number' => '',
		),
		array (
			'key' => 'field_52a9e43c4b145',
			'label' => __('Overview','psp_projects'),
			'name' => '',
			'type' => 'tab',
		),
		array (
			'key' => 'field_527d5d1cfb84f',
			'label' => __('Client','psp_projects'),
			'name' => 'client',
			'type' => 'text',
			'instructions' => __('Name of the client or project','psp_projects'),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'formatting' => 'none',
			'maxlength' => '',
		),
		array (
			'key' => 'field_527d5d1cfb84e',
			'label' => __('Client / Project Logo','psp_projects'),
			'name' => 'client_project_logo',
			'instructions' => __('Logo to appear on the project page','psp_projects'),
			'prefix' => '',
			'type' => 'image',
			'required' => 0,
			'conditional_logic' => 0,
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => $media_gallery_access
		),
		array (
			'key' => 'field_527d5d3cfb851',
			'label' => __('Project Description','psp_projects'),
			'name' => 'project_description',
			'type' => $wysiwyg_format,
			'default_value' => '',
			'toolbar' => 'full',
			'media_upload' => 'yes',
		),
		array (
			'key'	=>	'field_project_priority',
			'label'	=>	__( 'Priority', 'psp_projects' ),
			'name'	=>	'_psp_priority',
			'type'	=>	'select',
			'choices' => array (
				'normal' 	=> 	__( 'Normal', 'psp_projects' ),
				'low'		=> 	__( 'Low', 'psp_projects' ),
				'medium'	=>	__( 'Medium', 'psp_projects' ),
				'high'		=>	__( 'High', 'psp_projects' ),
			),
		),
		array (
			'key' => 'field_527d5d4afb852',
			'label' => __('Start Date','psp_projects'),
			'name' => 'start_date',
			'type' => 'date_picker',
			'date_format' => 'yymmdd',
			'display_format' => $date_format,
			'first_day' => 0,
		),
		array (
			'key' => 'field_527d5d57fb853',
			'label' => __('End Date','psp_projects'),
			'name' => 'end_date',
			'type' => 'date_picker',
			'date_format' => 'yymmdd',
			'display_format' => $date_format,
			'first_day' => 0,
		),
		array (
			'key' => 'field_52a9e4594b146',
			'label' => __('Documents','psp_projects'),
			'name' => '',
			'type' => 'tab',
		),
		array (
			'key' => 'field_52a9e4634b147',
			'label' => __('Documents','psp_projects'),
			'name' => 'documents',
			'type' => 'repeater',
			'sub_fields' => array (
				array (
					'key' => 'field_52a9e4774b148',
					'label' => __('Title','psp_projects'),
					'name' => 'title',
					'type' => 'text',
					'column_width' => '10',
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'html',
					'maxlength' => '',
				),
				array(
					'key'			=>	'psp_document_phase',
					'label'			=>	__( 'Phase', 'psp_projects' ),
					'name'			=>	'document_phase',
					'type'			=>	'psp_phase',
					'instructions'	=>	__( 'Attach this document to a project phase.<br> Save and reload to refresh list of phases.', 'psp_project' ),
				),
				array(
					'key'			=>	'psp_document_task',
					'label'			=>	__( 'Task', 'psp_projects' ),
					'name'			=>	'document_task',
					'type'			=>	'psp_task',
					'instructions'	=>	__( 'Attach this document to a project task.<br> Save and reload to refresh list of tasks.', 'psp_project' ),
				),
				array (
					'key' => 'field_52a9e47f4b149',
					'label' => __('Description','psp_projects'),
					'name' => 'description',
					'type' => 'textarea',
					'column_width' => '50',
					'rows' => 3,
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'formatting' => 'html',
				),
				array (
					'key' => 'field_52a9e4964b14a',
					'label' => __('File','psp_projects'),
					'name' => 'file',
					'type' => 'file',
					'column_width' => '10',
					'save_format' => 'object',
					'library' => $media_gallery_access,
				),
                array(
                    'key' => 'field_52a9e4964b14c',
                    'label' =>  __('URL','psp_projects'),
                    'name'  => 'url',
                    'type'  => 'text',
                    'column_width' => '20',
                    'default_value' => 'http://',
                    'placeholder' => '',
                    'instructions' => __('Uploads display over links.','psp_projects'),
                    'prepend' => '',
                    'append' => '',
                    'formatting' => 'html',
                    'maxlength' => '',
                ),
				array (
					'key' 	=> 'field_52a9e49e4b14b',
					'label' => __('Status','psp_projects'),
					'name' 	=> 'status',
					'type' 	=> 'select',
					'column_width' => '10',
					'choices' => array (
						'Approved' 	=> __( 'Approved', 'psp_projects' ),
						'In Review' => __( 'In Review', 'psp_projects' ),
						'Revisions' => __( 'Revisions', 'psp_projects' ),
						'Rejected' 	=> __( 'Rejected', 'psp_projects' ),
						'none'		=> __( 'No Status', 'psp_projects' ),
					),
					'default_value' => '',
					'allow_null' 	=> 0,
					'multiple' 		=> 0,
				),
			),
			'row_min' => '',
			'row_limit' => '',
			'layout' => 'row',
			'button_label' => __('Add Document','psp_projects'),
		),
		array (
			'key' => 'field_532b8d2c9c468',
			'label' => __('Access','psp_projects'),
			'name' => '',
			'type' => 'tab',
		),
		array (
			'key' => 'field_532b8d479c469',
			'label' => __('Hide from search engines','psp_projects'),
			'name' => 'hide_from_search_engines',
			'type' => 'checkbox',
			'instructions' => __('This will add a "noindex" tag to your project pages.','psp_projects'),
			'choices' => array (
				'Yes' => __('Yes','psp_projects'),
			),
			'default_value' => 'Yes',
			'layout' => 'vertical',
		),
		array (
			'key' => 'field_532b8d759c46a',
			'label' => __('Restrict access to specific users','psp_projects'),
			'instructions' => __('Only users who have been assigned to the project or are project managers can access it.','psp_projects'),
			'name' => 'restrict_access_to_specific_users',
			'type' => 'checkbox',
			'choices' => array (
				'Yes' => __('Yes','psp_projects'),
			),
			'default_value' => 'Yes',
			'layout' 		=> 'vertical',
		),
		array (
			'key' => 'field_569707ee2c384',
			'label' => __('Assigned Teams','psp_projects'),
			'name' => 'teams',
			'type' => 'relationship',
			'sub_fields' => array (
				'field_569708bd2746d' => array (
				),
			),
			'return_format' => 'id',
			'post_type' => array (
				0 => 'psp_teams',
			),
			'taxonomy' => array (
				0 => 'all',
			),
			'filters' => array (
				0 => 'search',
			),
			'result_elements' => array (
				0 => 'post_title',
			),
			'max' => '',
		),
		array (
			'key' => 'field_532b8d8b9c46b',
			'label' => __('Assigned Users','psp_projects'),
			'name' => 'allowed_users',
			'type' => 'repeater',
			'role' => array (
				0 => 'all',
			),
			'field_type' => 'select',
			'allow_null' => 1,
			'sub_fields' => array (
				array (
					'key' => 'field_532b8da69c46c',
					'label' => __('User','psp_projects'),
					'name' => 'user',
					'type' => 'user',
					'column_width' => '',
					'role' => array (
						0 => 'all',
					),
					'field_type' => 'select',
					'allow_null' => 0,
				),
			),
			'row_min' => 0,
			'row_limit' => '',
			'layout' => 'table',
			'button_label' => __('Add User','psp_projects'),
		),
		array (
			'key' => 'psp-overview-calculations-tab',
			'label' => __( 'Settings', 'psp_projects' ),
			'name' => '',
			'type' => 'tab',
		),
		array (
			'key' => 'field_52c46fa974b08',
			'label' => __('Automatic Progress','psp_projects'),
			'name' => 'automatic_progress',
			'type' => 'checkbox',
			'instructions' => __('Automatically calculate progress based on completion of phases (below)','psp_projects'),
			'choices' => array (
				'Yes' => __('Yes','psp_projects'),
			),
			'default_value' => '',
			'layout' => 'vertical',
		),
        array (
            'key' => 'field_5436e7f4e06b4',
            'label' => __('Automatic Phase Progress','psp_projects'),
            'name' => 'phases_automatic_progress',
            'type' => 'checkbox',
            'instructions' => __('Automatically calculate phase completion based on tasks','psp_projects'),
            'choices' => array (
                'Yes' => 'Yes',
            ),
			'conditional_logic'	=>	array (
				'status' =>	1,
				'rules' => array (
					array(
						'field'	=> 'field_52c46fa974b08',
						'operator' => '==',
						'value' => 'Yes'
					),
				),
				'allorany' => 'all',
			),
            'default_value' => '',
            'layout' => 'vertical',
        ),
        array (
            'key' => 'field_5436e85ee06b5',
            'label' => __('Progress Type','psp_projects'),
            'name' => 'progress_type',
            'type' => 'select',
            'instructions' => __('Would you like to weight phases or track via hours?','psp_projects'),
            'required' => 1,
            'conditional_logic' => array (
                'status' => 1,
                'rules' => array (
                    array (
                        'field' => 'field_5436e7f4e06b4',
                        'operator' => '==',
                        'value' => 'Yes',
                    ),
                ),
                'allorany' => 'all',
            ),
            'choices' => array (
                'Weighting' => __('Weighting','psp_projects'),
				'Percentage'	=>	__( 'Percentage', 'psp_projects' ),
                'Hours' => __('Hours','psp_projects'),
                'None'  => __('None','psp_projects'),
            ),
            'default_value' => 'Hours',
            'allow_null' => 0,
            'multiple' => 0,
        ),
		array (
			'key' => 'field_5436e8a5e06b7',
			'label' => __('Auto expand task lists','psp_projects'),
			'name' => 'expand_tasks_by_default',
			'instructions'	=>	__( 'Task lists are collapsed by default to save space.', 'psp_projects' ),
			'type' => 'checkbox',
			'choices' => array (
				'Yes' => 'Yes',
			),
			'default_value' => '',
			'layout' => 'vertical',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'psp_projects',
				'order_no' => 0,
				'group_no' => 0,
			),
		),
	),
	'options' => array (
		'position' => 'normal',
		'layout' => 'default',
		'hide_on_screen' => array (
		),
	),
	'menu_order' => 0,
);

register_field_group( apply_filters( 'psp_overview_fields' , $overview_fields ) );