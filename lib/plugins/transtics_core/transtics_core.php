<?php

/**
 *
 * @wordpress-plugin
 * Plugin Name:       Transtics Core
 * Description:       Support plugin for Transtics theme.
 * Version:           1.0.0
 * Author:            Andit Themes
 * Author URI:        https://anditthemes.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       transtics_core
 * Domain Path:       /languages
 */


// Widget

require_once( __DIR__ . '/inc/sidebar-recent-posts.php' );

// Custom Post

require_once( __DIR__ . '/inc/custom-posts.php' );

// Custom Post Taxonomy

require_once( __DIR__ . '/inc/custom-taxonomy.php' );

// Custom Fileds

require_once( __DIR__ . '/inc/custom-fields.php' );

