<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXMTZC_Main_Page_Controller extends MXMTZC_Controller
{
	
	public function index()
	{

		$model_inst = new MXMTZC_Main_Page_Model();

		$data = $model_inst->mxmtzc_get_time_zone_option();

		return new MXMTZC_View( 'main-page', $data );

	}

}