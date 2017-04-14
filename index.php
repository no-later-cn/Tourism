<?php
ini_set('display_errors','on');
define("JS_PATH",'/Static/Js/');
define("CSS_PATH",'/Static/Css/');
define("IMG_PATH",'/Static/Imgs/');
define("FONT_PATH",'/Static/Fonts/');
define("VIEW",'App/views/');
define("CONTROLLER",'App/controller/');
define("MODEL",'App/model/');

//require 到这个index页面的 所有页面都可以使用   require 就相当于把另一个文件的内容放到index里了
require 'Core/Framework.php';
require 'Core/DBPDO.php';
require 'Core/common.php';

\Core\Framework::start();
//include VIEW.'splash/splash.html';
//include VIEW.'pay/paypass.html';

/*
 * 签到
 *
 * uid
 * day
 * ctime
 *
 *
 * select * trom qiandao where
 * */