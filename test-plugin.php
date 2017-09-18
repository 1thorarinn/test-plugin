<?php
/*
Plugin Name: Test Plugin
Description: An example plugin that runs the update API.
Version: 1.0.9
Author: Þórarinn
Author URI: http://offorsi.is
*/


require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'https://kernl.us/api/v1/updates/59bfeec569f5da2ec903cba3/',
    __FILE__,
    'test-plugin',
    1
);
// $MyUpdateChecker->purchaseCode = "somePurchaseCode";  <---- Optional!





function not_used_at_all(){
    echo 'Hello world11111';
}

function useless_function(){
    echo "Yess";
    echo 'Hello world';
}

function useless_function_times2(){
    return false;
}