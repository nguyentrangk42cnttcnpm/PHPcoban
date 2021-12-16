<?php
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/ecommerce/');

if(!function_exists('ec_register_css')){
    function ec_register_css($path){    
        echo '<link rel="stylesheet" href="' . get_assets_url($path) . '">';   
    }
}

if(!function_exists('ec_enqueue_css')){
    function ec_enqueue_css(){
    ec_register_css('admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css');
    ec_register_css('admin/vendors/iconfonts/ionicons/dist/css/ionicons.css');
    ec_register_css('admin/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css');
    ec_register_css('admin/vendors/css/vendor.bundle.base.css');
    ec_register_css('admin/vendors/css/vendor.bundle.addons.css');
    ec_register_css('admin/css/shared/style.css');
    ec_register_css('admin/css/demo_1/style.css');
    }
}

if(!function_exists('ec_register_js')){
    function ec_register_js($path){    
        echo "<script src=" . get_assets_url($path) .  "></script>";   
    }
}

if(!function_exists('ec_enqueue_js')){
    function ec_enqueue_js(){
        ec_register_js('admin/vendors/js/vendor.bundle.base.js');
        ec_register_js('admin/vendors/js/vendor.bundle.addons.js');
        ec_register_js('admin/js/shared/off-canvas.js');
        ec_register_js('admin/js/shared/misc.js');    
    }
}

if(!function_exists('get_assets_url')){
    function get_assets_url($path = ""){
        return BASE_URL . "assets/$path";
    }
}
?>