<?php 

defined("LAYOUT_PATH") or define("LAYOUT_PATH", realpath(dirname(__FILE__) . '/src/layout'));
defined("VIEW_PATH") or define("VIEW_PATH", realpath(dirname(__FILE__) . '/src/view'));
defined("LIB_PATH") or define("LIB_PATH", realpath(dirname(__FILE__) . '/src/lib'));
defined("CLASS_PATH") or define("CLASS_PATH", realpath(dirname(__FILE__) . '/src/class'));

defined("CCS_PATH") or define("CCS_PATH", realpath(dirname(__FILE__) . '/web-app/css'));
defined("JS_PATH") or define("JS_PATH", realpath(dirname(__FILE__) . '/web-app/js'));
defined("IMG_PATH") or define("IMG_PATH", realpath(dirname(__FILE__) . '/web-app/img'));
defined("FONT_PATH") or define("FONT_PATH", realpath(dirname(__FILE__) . '/web-app/fonts'));	


?>