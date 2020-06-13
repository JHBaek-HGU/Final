<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
* Main page Model
*/
class MXMTZC_Main_Page_Model extends MXMTZC_Model
{
	
	// get options
	public function mxmtzc_get_time_zone_option()
	{

		$data = maybe_unserialize( get_option( 'mxmtzc_time_zone_default_options' ) );

		return $data;

	}
}