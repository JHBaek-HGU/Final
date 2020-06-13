<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class MXMTZC_Shortcode
{

	/*
	* MXMTZC_Shortcode
	*/
	public function __construct()
	{

	}

	/*
	* Registration of styles and scripts
	*/
	public function mxmtzc_register_shortcode()
	{

		// register scripts and styles
		add_action( 'wp_enqueue_scripts', array( $this, 'mxmtzc_enqueue' ) );

		// register shortcode
		add_shortcode( 'mxmtzc_time_zone_clocks', array( $this, 'mxmtzc_time_zone_clocks_function' ) );

	}

		public function mxmtzc_time_zone_clocks_function( $atts ) {
			
			$time_zone = $atts['time_zone'];

			$city_name = $atts['city_name'];

			$time_format = $atts['time_format'];

			if( $time_format == 12 ) {

				$time_format = 12;

			}

			if( $atts['digital_clock'] !== 'false' ) {

				$digital_clock = $atts['digital_clock'];

			}			

			$lang = $atts['lang'] == NULL ? 'en-US' : $atts['lang'];

			$lang_for_date = $atts['lang_for_date'] == NULL ? 'en-US' : $atts['lang_for_date'];

			$clean_str = str_replace( '/', '-', $time_zone );

			$class_of_clock = 'mx-clock-' . strtolower( $clean_str ) . rand( 0, 1000 );

			// show days
			if( $atts['show_days'] !== 'false' ) {

				$show_days = $atts['show_days'];

			}

			// font size
			if( $atts['clock_font_size'] !== 'false' ) {

				$clock_font_size = $atts['clock_font_size'];

			}

			ob_start(); ?>

				<?php if( !$clock_font_size == '' ) : ?>

					<style>

						.<?php echo $class_of_clock; ?> * {
							font-size: <?php echo $clock_font_size . 'px';?>
						}
						
					</style>

				<?php endif; ?>

				<div class="mx-localize-time">
				
					<div class='<?php echo $class_of_clock; ?> mx-clock-live-el' data-bg-img-url='<?php echo MXMTZC_PLUGIN_URL; ?>includes/admin/assets/img/<?php echo $atts['clock_type']; ?>'></div>

				</div>

				<script type="text/javascript">

					jQuery(document).ready(function(){

						jQuery(".<?php echo $class_of_clock; ?>").canvasClock({
							time_zone: "<?php echo !isset( $time_zone ) ? '' : $time_zone; ?>",
							city_name: "<?php echo !isset( $city_name ) ? '' : $city_name; ?>",
							date_format: "<?php echo !isset( $time_format ) ? '' : $time_format; ?>",
							digital_clock: "<?php echo !isset( $digital_clock ) ? '' : $digital_clock; ?>",
							lang: "<?php echo !isset( $lang ) ? '' : $lang; ?>",
							lang_for_date: "<?php echo !isset( $lang_for_date ) ? '' : $lang_for_date; ?>",
							show_days: "<?php echo !isset( $show_days ) ? '' : $show_days; ?>"

						});

					} );

				</script>

			<?php return ob_get_clean();

		}

		public function mxmtzc_enqueue()
		{

			wp_enqueue_style( 'mxmtzc_style', MXMTZC_PLUGIN_URL . 'includes/frontend/assets/css/style.css', array(), MXMTZC_PLUGIN_VERSION, 'all' );

			wp_enqueue_script( 'mxmtzc_script_frontend', MXMTZC_PLUGIN_URL . 'includes/frontend/assets/js/jquery.canvasClock.js', array( 'jquery' ), MXMTZC_PLUGIN_VERSION, false );
		
		}

}