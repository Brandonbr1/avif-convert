<?php
/**
 * Plugin Name: AVIF image on Upload
 * Plugin URI:  https://github.com/Brandonbr1/avif-convert
 * Description: A very lightweight plugin that removes jQuery Migrate script from your WordPress site's front end when the plugin is active.
 * Version:     1.0.3
 * Author:      Hendy Tan, Brandonbr1 and Wordpress Authors
 * Author URI:  https://github.com/icaru12 , https://github.com/Brandonbr1
 * Text Domain: avif-on-upload
 * License:     GPLv3
 */

/**
 * Copyright (C) 2017-2024 Hendy Tan (https://github.com/icaru12)
 * Copyright (C) 2024 Brandonbr1 (https://github.com/Brandonbr1)
 * Copyright (C) 2024 The Wordpress Team
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


if ( ! function_exists( 'filter_image_editor_output_format' ) ) {

	function filter_image_editor_output_format( $formats ) {
		$formats['image/jpeg'] = 'image/avif';
		$formats['image/jpg'] = 'image/avif';
		$formats['image/png'] = 'image/avif';
		$formats['image/gif'] = 'image/avif';
		$formats['image/webp'] = 'image/avif';
		$formats['image/tiff'] = 'image/avif';
		$formats['image/tif'] = 'image/avif';
		$formats['image/bmp'] = 'image/avif'; 
		$formats['image/heic'] = 'image/avif'; 
		$formats['image/heif'] = 'image/avif'; 
		return $formats;
	}
	add_filter( 'image_editor_output_format', 'filter_image_editor_output_format' );
	
}