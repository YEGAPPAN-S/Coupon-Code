<?php
/**
 * Coupon Code
 *
 * @package           coupon-code
 * @author            Yegappan S <yegappans2910@gmail.com>
 * @copyright         2022 Flycart
 * @license           GPL-3.0-or-later
 * @link              https://flycart.org
 *
 * @wordpress-plugin
 * Plugin Name:       Coupon Code
 * Plugin URI:        https://flycart.org
 * Description:       This is a coupon code plugin for Woocommerce.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      5.6
 * Author:            Yegappan S
 * Author URI:        https://flycart.org
 * Text Domain:       coupon-code
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
 */

defined('ABSPATH') or exit;

defined('COUPON_PLUGIN_FILE') or define('COUPON_PLUGIN_FILE', __FILE__);
defined('COUPON_PLUGIN_PATH') or define('COUPON_PLUGIN_PATH', plugin_dir_path(__FILE__));

// To load PSR4 autoloader
if (file_exists(COUPON_PLUGIN_PATH . '/vendor/autoload.php')) {
    require COUPON_PLUGIN_PATH . '/vendor/autoload.php';
} else {
    wp_die('WP Sample is unable to find the autoload file.');
}

// To bootstrap the plugin
if (class_exists('Coupon\App\Route')) {
    $coupon_app = Coupon\App\Route::hooks();
} else {
    wp_die(__('WP Sample is unable to find the Core class.'));
}
