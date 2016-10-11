<?php

namespace application\controller;

class IndexController extends \core\imooc
{
	//框架首页
	public function index()
	{
		$this->display('index.html');
	}
}