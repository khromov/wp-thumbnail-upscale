=== Thumbnail Upscale ===
Contributors: khromov
Tags: editor, images, image, thumbnails, thumbnail
Requires at least: 3.5.1
Tested up to: 4.2
Stable tag: 1.1
License: GPL2

Enables upscaling of thumbnails for small media attachments

== Description ==
This plugin enables upscaling of thumbnails for small media attachments. The default behaviour of Wordpress is to not upscale small images, which means
you are never guaranteed a certain size for a thumbnail format. This plugin corrects that and upscales small images to the specified thumbnail dimensions.
This is beneficial in grid layouts where images of different sizes can make the grid malfunction.

[Check screenshots for an example!](http://wordpress.org/plugins/thumbnail-upscale/screenshots/)

Important: Your thumbnails format must have the crop setting enabled to be processed by this plugin.

**Usage**

After you have enabled Thumbnail Upscale plugin, all your future uploaded images will be upscaled.
For existing images, install and run [Force Regenerate Thumbnails](http://wordpress.org/plugins/force-regenerate-thumbnails/)
This will upscale your existing media images!

== Requirements ==
* PHP 5.2 or higher strongly recommended

== Translations ==
None. The plugin has no translateable strings.

== Installation ==
1. Upload the `thumbnail-upscale` folder to `/wp-content/plugins/`
2. Activate the plugin (Thumbnail Upscale) through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Can you add feature X? =
Please write in the support forums for feature requests!

== Screenshots ==
1. Grid example: Before
2. Grid example: After

== Changelog ==

= 1.1 =
* Fixed crop positions introduced in WordPress 3.9. Props @jackrugile

= 1.0 =
Initial release