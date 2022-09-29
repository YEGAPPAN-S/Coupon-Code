<div id="coupon_product_data" class="panel woocommerce_options_panel">
        <!-- Check box 
        <label for="is_coupon_enabled">
            <?php //esc_html_e( 'Coupon Enabled : ', 'coupon-code' ); ?>
        </label>
        <input type="checkbox" id="is_coupon_enabled" name="is_coupon_enabled" value="Yes">
        <?php //echo wc_help_tip( __( 'Check if coupon enable.' , 'coupon-code' ) ); ?><br><br>

        Text box
        <label for="coupon_name">
            <?php //esc_html_e( 'Coupon Name : ', 'coupon-code' ); ?> 
        </label>
        <input type="text" id="coupon_name" name="coupon_name">
        <?php //echo wc_help_tip( __( 'Enter your Coupon name.' , 'coupon-code' ) ); ?><br><br>
        
        Select box --> 
        <!-- <label for="coupon_type">
            <?php esc_html_e( 'Coupon Type : ', 'coupon-code' ); ?> 
        </label>
            <select id="coupon_type" name="coupon_type" class="select short">
                <option value="free">Full Discount</option>
                <option value="percentage">Percentage Discount</option>		
                <option value="fixed">Amount Discount</option>		
            </select>   
        <?php echo wc_help_tip( __( 'Select your discount type.' , 'coupon-code' ) ); ?> -->

    <div id="coupon_check_box">
        <?php
            woocommerce_wp_checkbox(
                array(
                    'id'            => 'is_coupon_code_enabled',
                    'value'         => '',
                    'label'         => __( 'Coupon Code', 'coupon-code' ),
                    'description'   => __( 'This option is used for Coupon code offer', 'coupon-code' ),
                    'desc_tip'      => true,
                )
            );
        ?>
    </div>

    <div id="coupon_check_data" class="hidden">
        <?php
            woocommerce_wp_text_input(
                array(
                    'id'          => 'coupon_name',
                    'value'       => '',
                    'label'       => __( 'Coupon Name', 'coupon-code' ),
                    'placeholder' => _x( 'Enter your coupon name', 'placeholder', 'coupon-code' ),
                    'description' => __( 'Enter your coupon name', 'coupon-code' ),
                    'desc_tip'    => true,
                )
            );
        ?>

        <div id="coupon_select_box">
            <?php
                woocommerce_wp_select(
                    array(
                        'id'          => 'discount_type',
                        'value'       => '',
                        'label'       => __( 'Discount Type', 'coupon-code' ),
                        'options'     => array(
                            'free'       => __( 'Full Discount', 'coupon-code' ),
                            'percentage' => __( 'Percentage Discount', 'coupon-code' ),
                            'amount'     => __( 'Amount Discount', 'coupon-code' ),
                        ),
                        'description' => __( 'Select your discount type', 'coupon-code' ),
                        'desc_tip'    => true,
                    )
                );
            ?>
        </div>


        <div id="coupon_percentage" class="hidden">
            <?php
                woocommerce_wp_text_input(
                    array(
                        'id'          => 'percentage_discount',
                        'value'       => '',
                        'label'       => __( 'Percentage discount(%)', 'coupon-code' ),
                        'placeholder' => _x( 'Enter discount percentage', 'placeholder', 'coupon-code' ),
                    )
                );
            ?>
        </div>

        <div id="coupon_amount" class="hidden">
            <?php
                woocommerce_wp_text_input(
                    array(
                        'id'          => 'amount_discount',
                        'value'       => '',
                        'label'       => __( 'Amount discount', 'coupon-code' ) . ' (' . get_woocommerce_currency_symbol() . ')',
                        'placeholder' => _x( 'Enter discount amount', 'placeholder', 'coupon-code' ),
                    )
                );
            ?>
        </div>
    </div>

    <script>
        jQuery(document).ready(function($){
            $("#coupon_check_box").on("change", function(){
                $("#coupon_check_data").toggle();
            });
        });
    </script>

</div>