<div class="mx-main-page-text-wrap">
	
	<h1><?php echo __( 'Settings Page', 'mxmtzc-domain' ); ?></h1>

	<!-- display clock -->
	<div class="mx-block_wrap">

		<h3><?php echo __( 'How to display the clock', 'mxmtzc-domain' ); ?></h3>

		<p>
			<?php echo __( 'Choose a way to display the clock', 'mxmtzc-domain' ); ?>
		</p>

		<p>
			<?php echo __( 'By default', 'mxmtzc-domain' ); ?> - <b>Clock with arrows</b>
		</p>

		<p class="mxmtzc_display_clock_wrap">
			
			<input type="radio" id="mxmtzc_display_clock2" value="arrow" name="mxmtzc_display_clock" checked="checked" />
			<label for="mxmtzc_display_clock2"><?php echo __( 'Clock with arrows', 'mxmtzc-domain' ); ?></label>

		</p>

		<p class="mxmtzc_display_clock_wrap">
			
			<input type="radio" id="mxmtzc_display_clock1" value="digital" name="mxmtzc_display_clock" />
			<label for="mxmtzc_display_clock1"><?php echo __( 'Digital clock', 'mxmtzc-domain' ); ?></label>

		</p>		

	</div>

	<div class="mx-block_wrap mx-clock-apperiance_box">

		<?php

			// var_dump( $data );

			$array_of_clock_disign = array( 'clock-face1.png','clock-face2.png','clock-face4.png','clock-face5.png','clock-face6.png','clock-face7.png','clock-face8.jpg','clock-face9.jpg','clock-face10.png','clock-face11.png','clock-face12.png','clock-face13.jpg','clock-face14.jpg','clock-face15.jpg','clock-face17.jpg','clock-face18.png','clock-face19.png','clock-face20.jpg','clock-face21.png','clock-face22.jpg' );

		?>

		<h3><?php echo __( 'Available design of clock', 'mxmtzc-domain' ); ?></h3>

		<p><?php echo __( 'You should click on the clock, the design you like.', 'mxmtzc-domain' ); ?></p>

		<p>
			<?php echo __( 'By default', 'mxmtzc-domain' ); ?> - <b>the first clock</b>
		</p>

		<div class="mx-time-zone-design-list">

			<?php foreach ( $array_of_clock_disign as $key => $value ) : ?>

				<div class="mx-time-zone-design-item">
					<img src="<?php echo MXMTZC_PLUGIN_URL; ?>includes/admin/assets/img/<?php echo $value; ?>" data-image-src="<?php echo $value; ?>" alt="">
				</div>

			<?php endforeach; ?>
			
		</div>

	</div>

	<!-- time zone -->
	<div class="mx-block_wrap">

		<h3><?php echo __( 'Set Time Zone', 'mxmtzc-domain' ); ?></h3>

		<p>
			<?php echo __( 'Here you can find all time zones:', 'mxmtzc-domain' ); ?>
			<a href="https://timezonedb.com/time-zones" target="_blank">timezonedb.com/</a>	
		</p>

		<p>
			<?php echo __( 'If you want set time zone, fill it below.', 'mxmtzc-domain' ); ?>
		</p>

		<p>
			<?php echo __( 'By default', 'mxmtzc-domain' ); ?> - <b>Australia/Sydney</b>
		</p>

		<p>
			<input type="text" id="mxmtzc_time_zone_name" placeholder="<?php echo __( 'Australia/Sydney', 'mxmtzc-domain' ); ?>" />
		</p>

	</div>

	<!-- city name -->
	<div class="mx-block_wrap">

		<h3><?php echo __( 'Set name of city', 'mxmtzc-domain' ); ?></h3>

		<p>
			<?php echo __( 'If you want set name of the city, fill it below.', 'mxmtzc-domain' ); ?>
		</p>

		<p>
			<?php echo __( 'By default', 'mxmtzc-domain' ); ?> - <b>Wilton</b>
		</p>

		<p>
			<input type="text" id="mxmtzc_city_name" placeholder="<?php echo __( 'Wilton', 'mxmtzc-domain' ); ?>" />
		</p>

	</div>

	<!-- format of date -->
	<div class="mx-block_wrap">

		<h3><?php echo __( 'Set the time format', 'mxmtzc-domain' ); ?></h3>

		<p>
			<?php echo __( 'Select one option', 'mxmtzc-domain' ); ?>
		</p>

		<p>
			<?php echo __( 'By default', 'mxmtzc-domain' ); ?> - <b>12</b>
		</p>

		<p class="mxmtzc_time_format_wrap">
			
			<input type="radio" id="mxmtzc_time_format1" value="12" name="mxmtzc_time_format" checked="checked" />
			<label for="mxmtzc_time_format1"><?php echo __( '12-Hour Time Format', 'mxmtzc-domain' ); ?></label>

		</p>

		<p class="mxmtzc_time_format_wrap">
			
			<input type="radio" id="mxmtzc_time_format2" value="24" name="mxmtzc_time_format" />
			<label for="mxmtzc_time_format2"><?php echo __( '24-Hour Time Format', 'mxmtzc-domain' ); ?></label>

		</p>

	</div>

	<!-- language -->
	<div class="mx-block_wrap">

		<h3><?php echo __( 'Set the language attribute to clock', 'mxmtzc-domain' ); ?></h3>

		<p>
			<?php echo __( 'Here you can find all attributes of the language:', 'mxmtzc-domain' ); ?>
			<a href="https://timezonedb.com/time-zones" target="_blank">timezonedb.com/</a>	
		</p>

		<p>
			<?php echo __( 'By default', 'mxmtzc-domain' ); ?> - <b>en</b>
		</p>

		<p>
			<input type="text" id="mxmtzc_language_attr" placeholder="<?php echo __( 'en', 'mxmtzc-domain' ); ?>" />
		</p>

	</div>

	<!-- language -->
	<div class="mx-block_wrap">

		<h3><?php echo __( 'Set the language attribute to days', 'mxmtzc-domain' ); ?></h3>

		<p>
			<?php echo __( 'Here you can find all attributes of the language:', 'mxmtzc-domain' ); ?>
			<a href="https://timezonedb.com/time-zones" target="_blank">timezonedb.com/</a>	
		</p>

		<p>
			<?php echo __( 'By default', 'mxmtzc-domain' ); ?> - <b>en</b>
		</p>

		<p>
			<input type="text" id="mxmtzc_language_for_days_attr" placeholder="<?php echo __( 'en', 'mxmtzc-domain' ); ?>" />
		</p>

	</div>

	<!-- show days -->
	<div class="mx-block_wrap">

		<h3><?php echo __( 'Show day, month and year', 'mxmtzc-domain' ); ?></h3>

		<p>
			<?php echo __( 'By default', 'mxmtzc-domain' ); ?> - <b>Show</b>
		</p>

		<p class="mxmtzc_show_days_wrap">
			
			<input type="radio" id="mxmtzc_show_days1" value="show" name="mxmtzc_show_days" checked="checked" />
			<label for="mxmtzc_show_days1"><?php echo __( 'Show', 'mxmtzc-domain' ); ?></label>

		</p>

		<p class="mxmtzc_show_days_wrap">
			
			<input type="radio" id="mxmtzc_show_days2" value="hidden" name="mxmtzc_show_days" />
			<label for="mxmtzc_show_days2"><?php echo __( 'Hidden', 'mxmtzc-domain' ); ?></label>

		</p>

	</div>

	<!-- font size -->
	<div class="mx-block_wrap">

		<h3><?php echo __( 'Set clock\'s font size' , 'mxmtzc-domain' ); ?></h3>

		<p>
			<?php echo __( 'By default', 'mxmtzc-domain' ); ?> - <b>Depends on your theme settings</b>
		</p>

		<p>
			<input type="number" id="mxmtzc_font_size_attr" /> <span>px</span>
		</p>

	</div>

	<!-- shortcode -->
	<div class="mx-block_wrap" id="mx_time_zone_shortcode">		

		<div class="mx-time-zone-shortcode">

			<span><?php echo __( 'Your shortcode:', 'mxmtzc-domain' ); ?></span>
			<div class="mxmtzc_time_zone_shortcode_body">
				[mxmtzc_time_zone_clocks time_zone="<span id="mxmtzc_time_zone_value"><?php echo $data['time_zone']; ?></span>"
				city_name="<span id="mxmtzc_city_name_value"><?php echo $data['city_name']; ?></span>"
				time_format="<span id="mxmtzc_time_format_value"><?php echo $data['time_format']; ?></span>"
				digital_clock="<span id="mxmtzc_digital_clock_value"><?php echo $data['digital_clock']; ?></span>"
				lang="<span id="mxmtzc_lang_value"><?php echo $data['lang']; ?></span>"
				lang_for_date="<span id="mxmtzc_language_for_days_attr_value">en</span>"
				clock_type="<span id="mxmtzc_clock_type_value"><?php echo $data['clock_type']; ?></span>"
				show_days="<span id="mxmtzc_show_days_value"><?php echo $data['show_days']; ?></span>" clock_font_size="<span id="mxmtzc_font_size_attr_value"><?php echo $data['clock_font_size']; ?></span>"]
			</div>

		</div>
		
	</div>

</div>

<!-- save notice -->
<div class="mxmtzc_save_notice">
	<p>
		<?php echo __( 'Your shortcode has been updated. You can copy it below.', 'mxmtzc-domain' ); ?>
	</p>
	<i class="icon-arrow-down"></i>
</div>