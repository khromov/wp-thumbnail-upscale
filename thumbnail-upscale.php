<?php
/*
Plugin Name: Thumbnail Upscale
Plugin URI: http://wordpress.org/plugins/thumbnail-upscale/
Description: Enables upscaling of thumbnails for small media attachments
Version: 1.1
Author: Stanislav Khromov
Author URI: http://khromov.wordpress.com
License: GPLv2
*/

class ThumbnailUpscaler
{
	/** http://wordpress.stackexchange.com/questions/50649/how-to-scale-up-featured-post-thumbnail **/
	static function image_resize_dimensions($default, $orig_w, $orig_h, $new_w, $new_h, $crop)
	{
		if(!$crop)
			return null; // let the wordpress default function handle this

		$size_ratio = max($new_w / $orig_w, $new_h / $orig_h);
	
		$crop_w = round($new_w / $size_ratio);
		$crop_h = round($new_h / $size_ratio);
	
		$s_x = floor( ($orig_w - $crop_w) / 2 );
		$s_y = floor( ($orig_h - $crop_h) / 2 );

		if(is_array($crop)) {

			//Handles left, right and center (no change)
			if($crop[ 0 ] === 'left') {
				$s_x = 0;
			} else if($crop[ 0 ] === 'right') {
				$s_x = $orig_w - $crop_w;
			}

			//Handles top, bottom and center (no change)
			if($crop[ 1 ] === 'top') {
				$s_y = 0;
			} else if($crop[ 1 ] === 'bottom') {
				$s_y = $orig_h - $crop_h;
			}
		}
	
		return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
	}
}

add_filter('image_resize_dimensions', array('ThumbnailUpscaler', 'image_resize_dimensions'), 10, 6);