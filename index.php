<?php
/**
 * 1.入口文件
 * 2.定义常量
 * 3.加载函数库
 * 4.启动框架
 */
header("content-type:text/html;charset=utf-8");

define('IMOOC', realpath(''));
define('CORE', IMOOC.'/core');
define('APP', IMOOC.'/application');
define('MODULE', 'application');

define('DEBUG', true);


if (DEBUG) {
	ini_set('display_error', 'On');
}else{
	ini_set('display_error', 'Off');
}

include CORE.'/common/function.php';
include CORE.'/imooc.php';

spl_autoload_register('\core\imooc::load');

\core\imooc::run();