<?php

namespace application\controller;

use application\models\guestbookModel;

class IndexController extends \core\imooc
{
	//所有留言
	public function index()
	{
		$guestbook = new guestbookModel();
		$data = $guestbook->all();
		$this->assign('data',$data);
		$this->display('index.php');
	}

	//添加留言
	public function add()
	{
		$this->display('add.php');
	}

	//保存留言
	public function save()
	{
		$data['title'] = post('title');
		$data['content'] = post('content');
		$data['creattime'] = time();
		$guestbook = new guestbookModel();
		$ret = $guestbook->addOne($data);
		if($ret)
		{
			jump('/');
		}
		else
		{
			p('error');
		}

	}

	public function del()
	{
		$id = get('id',0,'int');

		if($id)
		{
			$guestbook = new guestbookModel();
			$ret = $guestbook->delOne($id);
			if($ret)
			{
				jump('/');
			}else
			{
				p('删除失败');
			}
		}
		else
		{
			p('参数错误');
		}
	}
}