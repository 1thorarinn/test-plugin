<?php
/*
Plugin Name: Test Plugin
Description: An example plugin that runs the update API.
Version: 1.0.1
Author: Þórarinn
Author URI: http://offorsi.is
*/


require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'https://kernl.us/api/v1/updates/59bfcc8c9e7ec8707b8e5df2/',
    __FILE__,
    'test-plugin',
    1
);
// $MyUpdateChecker->purchaseCode = "somePurchaseCode";  <---- Optional!




function not_used_at_all(){
    echo 'Hello world';
}

function useless_function(){
    echo 'Hello world';
}