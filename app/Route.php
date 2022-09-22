<?php
/**
 * Coupon Code
 *
 * @package   coupon-code
 * @author    Yegappan
 * @copyright 2022 Flycart
 * @license   GPL v2 or later
 * @link      https://flycart.org
 */
namespace Coupon\App;

defined( 'ABSPATH' ) || exit;

class Route
{
    /**
     * Plugin hooks
     */
    public static function hooks()
    {
        $admin_page = new Controllers\Admin\ProductPage();

        //Product data tabs
        add_filter('woocommerce_product_data_tabs', [$admin_page, 'tabMenu']);

        //Product data panel
        add_action('woocommerce_product_data_panels', [$admin_page, 'menuData']);

    }
}