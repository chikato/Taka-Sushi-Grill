<?php

/* ----------------------------------------
* To retrieve a value use: $eto_options[$prefix.'var']
----------------------------------------- */

$prefix = 'eto_';

/* ----------------------------------------
* Create the TABS
----------------------------------------- */

$eto_custom_tabs = array(
		array(
			'label'=> __('General', 'eto'),
			'id'	=> $prefix.'general'
		),
//		array(
//			'label'=> __('Advanced', 'eto'),
//			'id'	=> $prefix.'advanced'
//		),
	    array(
			'label'=> __('Menu-Option', 'eto'),
			'id'	=> $prefix.'menu-option'
		)
	);

/* ----------------------------------------
* Options Field Array
----------------------------------------- */

$eto_custom_meta_fields = array(

	/* -- TAB 1 -- */
	array(
		'id'	=> $prefix.'general', // Use data in $eto_custom_tabs
		'type'	=> 'tab_start'
	),
	
	array(
		'label'=> 'Site Information',
		'id'	=> $prefix.'title',
		'type'	=> 'title'
	),
	array(
		'label'=> 'Address',
		'desc'	=> 'Your store address.',
		'id'	=> $prefix.'address',
		'type'	=> 'text'
	),
	array(
		'label'=> 'Phone',
		'desc'	=> 'Your store phone number.',
		'id'	=> $prefix.'phone',
		'type'	=> 'text'
	),
	array(
		'label'=> 'Email',
		'desc'	=> 'Your store email.',
		'id'	=> $prefix.'email',
		'type'	=> 'text'
	),
	array(
		'label'=> 'Facebook',
		'desc'	=> 'Your store facebook URL.',
		'id'	=> $prefix.'facebook',
		'type'	=> 'text'
	),
//	array(
//		'label'=> 'Password Input',
//		'desc'	=> 'A description for the field.',
//		'id'	=> $prefix.'password',
//		'type'	=> 'password'
//	),
//	array(
//		'label'=> 'Textarea',
//		'desc'	=> 'A description for the field.',
//		'id'	=> $prefix.'textarea',
//		'type'	=> 'textarea'
//	),
//	array(
//		'label'=> 'Checkbox Input',
//		'desc'	=> 'A description for the field.',
//		'id'	=> $prefix.'checkbox',
//		'type'	=> 'checkbox'
//	),
//	array(
//		'label'=> 'Select Box',
//		'desc'	=> 'A description for the field.',
//		'id'	=> $prefix.'select',
//		'type'	=> 'select',
//		'options' => array (
//			'one' => array (
//				'label' => 'Option One',
//				'value'	=> 'one'
//			),
//			'two' => array (
//				'label' => 'Option Two',
//				'value'	=> 'two'
//			),
//			'three' => array (
//				'label' => 'Option Three',
//				'value'	=> 'three'
//			)
//		)
//	),
//	array (
//		'label' => 'Radio Group',
//		'desc'	=> 'A description for the field.',
//		'id'	=> $prefix.'radio',
//		'type'	=> 'radio',
//		'options' => array (
//			'one' => array (
//				'label' => 'Option One',
//				'value'	=> 'one'
//			),
//			'two' => array (
//				'label' => 'Option Two',
//				'value'	=> 'two'
//			),
//			'three' => array (
//				'label' => 'Option Three',
//				'value'	=> 'three'
//			)
//		)
//	),
//	array (
//		'label'	=> 'Checkbox Group',
//		'desc'	=> 'A description for the field.',
//		'id'	=> $prefix.'checkbox_group',
//		'type'	=> 'checkbox_group',
//		'options' => array (
//			'one' => array (
//				'label' => 'Option One',
//				'value'	=> 'one'
//			),
//			'two' => array (
//				'label' => 'Option Two',
//				'value'	=> 'two'
//			),
//			'three' => array (
//				'label' => 'Option Three',
//				'value'	=> 'three'
//			)
//		)
//	),
//	array(
//		'label' => 'Category',
//		'id'	=> 'category',
//		'type'	=> 'tax_select'
//	),
//	array(
//		'label' => 'Post List',
//		'desc' => 'A description for the field.',
//		'id' 	=>  $prefix.'post_id',
//		'type' => 'post_list',
//		'post_type' => array('post','page')
//	),
	
	array(
		'type'	=> 'tab_end'
	),
	/* -- /TAB 1 -- */
	
	/* -- TAB 2 -- */
	array(
		'id'	=> $prefix.'advanced', // Use data in $eto_custom_tabs
		'type'	=> 'tab_start'
	),
	
	array(
		'label'	=> 'Repeatable',
		'desc'	=> 'A description for the field. The items inserted here are movable.',
		'id'	=> $prefix.'repeatable',
		'type'	=> 'repeatable'
	),
	
	array(
		'label'	=> 'Date',
		'desc'	=> 'A description for the field.',
		'id'	=> $prefix.'date',
		'type'	=> 'date'
	),
	array(
		'label'	=> 'Image',
		'desc'	=> 'A description for the field.',
		'id'	=> $prefix.'image',
		'type'	=> 'image'
	),
	array(
		'label'	=> 'Slider',
		'desc'	=> 'A description for the field.',
		'id'	=> $prefix.'slider',
		'type'	=> 'slider',
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '5'
	),
	
	array(
		'label'	=> 'Color Picker',
		'desc'	=> 'A description for the field.',
		'id'	=> $prefix.'colorpicker',
		'type'	=> 'colorpicker'
	),
	
	array(
		'type'	=> 'tab_end'
	),
	/* -- /TAB 2 -- */

	/* -- TAB 3 -- */
	array(
		'id'	=> $prefix.'menu-option', // Use data in $eto_custom_tabs
		'type'	=> 'tab_start'
	),

	array(
		'label'	=> 'Display Row Number',
		'desc'	=> 'The list menu in Home page will display with a specify row',
		'id'	=> $prefix.'num-row-menu',
		'type'	=> 'select',
		'options' => array (
			'one' => array (
				'label' => '2',
				'value'	=> '2'
			),
			'two' => array (
				'label' => '3',
				'value'	=> '3'
			),
			'three' => array (
				'label' => '4',
				'value'	=> '4'
			),
			'five' => array (
				'label' => '5',
				'value'	=> '5'
			),
			'six' => array (
				'label' => '6',
				'value'	=> '6'
			)
		)
	),

	array(
		'label'	=> 'Desc Order By',
		'desc'	=> 'Sort Items in the menu',
		'id'	=> $prefix.'sort-menu',
		'type'	=> 'select',
		'options' => array (
			'date' => array (
				'label' => 'Date',
				'value'	=> 'date'
			),
			'price' => array (
				'label' => 'Price',
				'value'	=> 'price'
			)

		)
	),
	array(
		'type'	=> 'tab_end'
	),
	/* -- /TAB 3 -- */
);

?>