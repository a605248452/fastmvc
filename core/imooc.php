<?php

namespace core;

class imooc
{
	public static $classMap = array();
	protected $assign;
	public static function run()
	{
		\core\lib\log::init();
		\core\lib\log::log('test');
		$route = new \core\lib\route();
		$ControllerName = ucfirst($route->controller);
		$ActionName = $route->action;
		$ControllerFile = APP . '/controllers/' . $ControllerName . 'Controller.php';
		$ControllerClass = '\\' . MODULE .'\controller\\' . $ControllerName . 'Controller';
		if(is_file($ControllerFile)){
			include $ControllerFile;
			$controller = new $ControllerClass();
			$controller->$ActionName();
		}else{
			throw new \Exception("找不到控制器".$ControllerName);	
		}
	}

	public static function load($class)
	{
		//自动加载类库
		// new \core\route();
		// $class = '\core\route';
		// IMOOC.'/core/route.php';
			
		if(isset($classMap[$class])) {
			return true;
		} else {
			$class = str_replace('\\', '/', $class);
			$file = IMOOC.'/'.$class.'.php';
			if(is_file($file)) {
				include $file;
				self::$classMap[$class] = $class;
			} else {
				return false;
			}
		}
	}

	public function assign($name,$value)
	{
		$this->assign[$name] = $value;
	}

	public function display($file)
	{
		$file = APP . '/views/' . $file;
		if(is_file($file))
		{
			extract($this->assign);
			include $file;
		}
	}
}