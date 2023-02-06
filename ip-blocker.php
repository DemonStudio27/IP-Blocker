<?php
/*
Plugin Name: Site IP Blocker for Wordpress
Description: Block access to the site from specified IP addresses
Version: 1.0
Author: Dmytro Ivasechko
Author URI: www.ds-agency.pp.ua
*/

function ip_blocker() {
    $block_ips = array('Paste Blocked IP', 'Paste Blocked IP');
    $user_ip = $_SERVER['REMOTE_ADDR'];
    if(in_array($user_ip, $block_ips)) {
        wp_die('Access Denied');
    }
}
add_action('init', 'ip_blocker');