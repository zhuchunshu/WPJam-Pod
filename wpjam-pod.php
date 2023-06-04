<?php
/**
 * Plugin Name: WPJAM POD
 * Plugin URI: https://github.com/zhuchunshu
 * Version: 1.0.0
 * Author: Github
 * Description: WPJAM 常用的函数和接口，屏蔽所有 WordPress 不常用的功能。
 */

add_action( 'plugins_loaded', 'wpjam_pod_modify_WpJam' );


function wpjam_pod_modify_WpJam() {

	// 判断 WPJAM_Verify 类是否存在
	if (class_exists('WPJAM_Verify')){
		remove_action('wpjam_admin_init',	['WPJAM_Verify', 'on_admin_init'], 11);
	}
}

