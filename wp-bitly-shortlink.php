<?php
/*
Plugin Name: WP Bitly Shortlink
Description: Automatically generate and use Bitly for custom shortlinks on your website.
Author: Nick Ohrn (nickohrn) and Erik Ford (erikford)
Version: 1.0.0.B.1
License: GPLv3 or later
*/

if(!defined('ABSPATH')) { exit; }

if(!defined('WP_BITLY_SHORTLINK_PATH')) {
	define('WP_BITLY_SHORTLINK_PATH', dirname(__FILE__));
}

if(!defined('WP_BITLY_SHORTLINK_VERSION')) {
	define('WP_BITLY_SHORTLINK_VERSION', '1.0.0.B.1');
}

// Components

/// Bitly API Interaction
require_once(path_join(WP_BITLY_SHORTLINK_PATH, 'components/bitly/bitly.php'));

/// Backend settings page
require_once(path_join(WP_BITLY_SHORTLINK_PATH, 'components/interface/interface.php'));

/// Settings storage and retrieval (Bitly OAuth credentials and shortening preferences)
require_once(path_join(WP_BITLY_SHORTLINK_PATH, 'components/settings/settings.php'));

/// Shortlink generation and display
require_once(path_join(WP_BITLY_SHORTLINK_PATH, 'components/shortlinks/shortlinks.php'));
