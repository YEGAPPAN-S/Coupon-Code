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

namespace Coupon\App\Controllers\Admin;

defined( 'ABSPATH' ) || exit;

use Coupon\App\Helpers\Functions;

class ProductPage
{
    /**
     * Tab function
     * @param $tabs
     * @return mixed
     */
    public function tabMenu( $tabs ) {
        $tabs['coupon'] =
            array(
                'label'   => __( 'Coupon Code' , 'coupon-code' ),
                'target'  => 'coupon_product_data' ,
                'class'   => array(),
                'priority'=> 70
            );
        return $tabs;
    }
    /**
     * Product edit tab
     * @return void
     */
    public function menuData() {
        $data = [
        ];

        Functions::view('Admin/AdminFrontend', $data, true);
    }

}