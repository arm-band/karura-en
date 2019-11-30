<?php
//メニュー作成
function karuraen_create_menu() {
    add_menu_page( 'karuraen', '迦楼羅焔設定', 'administrator', 'karuraen', 'karuraen_settings_page', 'dashicons-rest-api' );
    // 独自関数をコールバック関数とする
    add_action( 'admin_init', 'register_karuraen_settings' );
}
add_action( 'admin_menu', 'karuraen_create_menu' );
//コールバック
function register_karuraen_settings() {
    register_setting( 'karuraen-settings', 'karuraen_github_account' );
    register_setting( 'karuraen-settings', 'karuraen_github_repository' );
    register_setting( 'karuraen-settings', 'karuraen_github_token' );
}