<?php

namespace application\controller;

class IndexController extends \core\imooc
{
	public function index()
	{
		$temp = \core\lib\conf::get('DEFAULT_CONTROLLER','route');
		$temp = \core\lib\conf::get('DEFAULT_ACTION','route');
		p($temp);
		p("this is index");
		$model = new \core\lib\model();
		$sql = "select * from news";
		$ret = $model->query($sql)->fetchAll();
		$this->assign('list',$ret);
		$this->display('index.php');
	}
}