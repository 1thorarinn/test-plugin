<?php
/*
Plugin Name: Test Plugin Update
Description: An example plugin that runs the update API.
Version: 1.0
Author: Þórarinn
Author URI: http://offorsi.is
*/


require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'https://kernl.us/api/v1/updates/59bfc5c769f5da2ec903cb91/',
    __FILE__,
    'test-plugin',
    1
);
// $MyUpdateChecker->purchaseCode = "somePurchaseCode";  <---- Optional!
