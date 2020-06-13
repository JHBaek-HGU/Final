<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXMTZC_Admin_Main
{

	// list of model names used in the plugin
	public $models_collection = [
		'MXMTZC_Main_Page_Model'
	];

	/*
	* MXMTZC_Admin_Main constructor
	*/
	public function __construct()
	{

	}

	/*
	* Additional classes
	*/
	public function mxmtzc_additional_classes()
	{

		// enqueue_scripts class
		mxmtzc_require_class_file_admin( 'enqueue-scripts.php' );

		MXMTZC_Enqueue_Scripts::mxmtzc_register();

		// options update
		mxmtzc_require_class_file_admin( 'update-clock-optons.php' );

			MXMTZC_Update_Clock_Optons::mx_update_options();

	}

	/*
	* Models Connection
	*/
	public function mxmtzc_models_collection()
	{

		// require model file
		foreach ( $this->models_collection as $model ) {
			
			mxmtzc_use_model( $model );

		}		

	}

	/**
	* registration ajax actions
	*/
	public function mxmtzc_registration_ajax_actions()
	{

		// ajax requests
		
	}

	/*
	* Routes collection
	*/
	public function mxmtzc_routes_collection()
	{

		// main menu item
		MXMTZC_Route::mxmtzc_get( 'MXMTZC_Main_Page_Controller', 'index', '', [
			'page_title' 	=> 'MX Time Zone Clocks Settings',
			'menu_title' 	=> 'Time Zone Clocks',
			'dashicons' 	=> 'dashicons-clock'
		] );

	}

}

// Initialize
$initialize_admin_class = new MXMTZC_Admin_Main();

// include classes
$initialize_admin_class->mxmtzc_additional_classes();

// include models
$initialize_admin_class->mxmtzc_models_collection();

// ajax requests
$initialize_admin_class->mxmtzc_registration_ajax_actions();

// include controllers
$initialize_admin_class->mxmtzc_routes_collection();