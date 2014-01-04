<?php 


$config = array(
		'db' => array(
				'db1' => array(
						'dbname' => 'm6000251_hotelelvolcan',
						'username' => 'root',
						'password' => '',
						'host' => 'localhost'
				),
				'urls' => array(
						'baseUrl' => 'http://hotelelvolcan.com.ar'
				),
				'paths' => array(
						'resources' => '/path/to/resources',
						'img' => array(
								'content' => $_SERVER['DOCUMENT_ROOT'] . '/img/content',
								'layout' => $_SERVER['DOCUMENT_ROOT'] . '/img/layout'
						),
						'css' => realpath(dirname(__FILE__) . '/public_html/css')
				)
			)
		);

defined("LAYOUT_PATH") or define("LAYOUT_PATH", realpath(dirname(__FILE__) . '/src/layout'));
defined("VIEW_PATH") or define("VIEW_PATH", realpath(dirname(__FILE__) . '/src/view'));
defined("LIB_PATH") or define("LIB_PATH", realpath(dirname(__FILE__) . '/src/lib'));
defined("CLASS_PATH") or define("CLASS_PATH", realpath(dirname(__FILE__) . '/src/class'));

defined("CCS_PATH") or define("CCS_PATH", realpath(dirname(__FILE__) . '/web-app/css'));
defined("JS_PATH") or define("JS_PATH", realpath(dirname(__FILE__) . '/web-app/js'));
defined("IMG_PATH") or define("IMG_PATH", realpath(dirname(__FILE__) . '/web-app/img'));
defined("FONT_PATH") or define("FONT_PATH", realpath(dirname(__FILE__) . '/web-app/font'));	


?>