<?php
/*
  Plugin Name: Karura-en
  Plugin URI:
  Description: Github Actionsの`repository_dispatch`イベントをトリガーするWordPressプラグイン
  Version: 0.0.2
  Author: アルム＝バンド
  Author URI:
  License: MIT
 */
 //メニューに追加
require_once( __DIR__ . '/src/menu.php' );
//設定ページ
require_once( __DIR__ . '/src/settings_page.php' );
//イベントトリガー
require_once( __DIR__ . '/src/garuda.php' );