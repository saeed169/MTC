<?php
class BeRocket_brands_divi_shortcode_deprecated extends BeRocket_framework_addon_lib {
    public $addon_file = __FILE__;
    public $plugin_name = 'product_brand';
    public $php_file_name   = 'divi-builder';
    function get_addon_data() {
        $data = parent::get_addon_data();
        return array_merge($data, array(
            "addon_name"    => __( 'DEPRECATED Divi Module/Shortcode', 'brands-for-woocommerce' ),
            "tooltip"       => __( 'DEPRECATED Modules for Divi Builder and Shortcodes for backward compatibility', 'brands-for-woocommerce' ),
        ));
    }
}
new BeRocket_brands_divi_shortcode_deprecated();
