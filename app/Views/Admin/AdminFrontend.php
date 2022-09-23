<?php
?>
<div id="coupon_product_data" class="panel woocommerce_options_panel">
    <p class="form-field">

        <!-- Check box -->
        <label for="is_coupon_enabled">
            <?php esc_html_e( 'Coupon Enabled : ', 'coupon-code' ); ?>
        </label>
        <input type="checkbox" id="is_coupon_enabled" name="is_coupon_enabled" value="Yes">
        <?php echo wc_help_tip( __( 'Check if coupon enable.' , 'coupon-code' ) ); ?><br><br>

        <!-- Text box -->
        <label for="coupon_name">
            <?php esc_html_e( 'Coupon Name : ', 'coupon-code' ); ?> 
        </label>
        <input type="text" id="coupon_name" name="coupon_name">
        <?php echo wc_help_tip( __( 'Enter your Coupon name.' , 'coupon-code' ) ); ?><br><br>
        
        <!-- Select box -->
        <label for="coupon_type">
            <?php esc_html_e( 'Coupon Type : ', 'coupon-code' ); ?> 
        </label>
            <select id="coupon_type" name="coupon_type" class="select short">
                <option value="free">Full Discount</option>
                <option value="percentage">Percentage Discount</option>		
                <option value="fixed">Amount Discount</option>		
            </select>   
        <?php echo wc_help_tip( __( 'Select your discount type.' , 'coupon-code' ) ); ?>
    
    </p>
</div>