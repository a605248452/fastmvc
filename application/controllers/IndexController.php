<?php

namespace application\controller;

use application\models\guestbookModel;
use application\models\userModel;
use core\lib\route;
use core\lib\uploadFile;

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
		if($ret) {
			jump('/');
		} else {
			p('error');
		}

	}

	public function del()
	{
		$id = get('id',0,'int');

		if($id) {
			$guestbook = new guestbookModel();
			$ret = $guestbook->delOne($id);
			if($ret) {
				jump('/');
			} else {
				p('删除失败');
			}
		} else {
			p('参数错误');
		}
	}

	public function login()
	{
		$this->display('login.php');
	}

	public function login_do()
	{
		$username = post('user');
		$pwd = md5(post('pwd'));
		$user = new userModel();
		$res = $user->login($username,$pwd);
		if($res){
			$_SESSION['user'] = $res;
			jump('/');
		} else {
			p('账号或密码错误');
		}

	}	
	
	public function checklog()
	{
		if(isset($_SESSION['user'])) {
			echo $_SESSION['user'];die;
		} else {
			echo 0;die;
		}
	}

	public function info()
	{
		$id = get('id',0,'int');

		if($id) {
			$guestbook = new guestbookModel();
			$ret = $guestbook->getOne($id);
			if($ret) {
				$this->assign('info',$ret);
				$this->display('info.php');
			} else {
				p('删除失败');
			}
		} else {
			p('参数错误');
		}
	}

	public function center()
	{
		$user_id = isset($_SESSION['user'])?$_SESSION['user']:false;
		if($user_id) {
			$user = new userModel();
			$info = $user->getInfo($user_id);
			$this->assign("info",$info);
			$this->display('center.php');
		} else {
			p("您未登录");
		}

	}

	public function upd()
	{
		$user_id = isset($_SESSION['user'])?$_SESSION['user']:false;
		if(!$user_id){
			exit(0);
		}
		$key = post('id');
		$value = post('val');
		$user = new userModel();
		$re = $user->updateInfo([$key=>$value],$user_id);
		if($re) {
			echo 1;
		} else {
			echo 0;
		}
	}

	public function upload()
	{
		$user_id = isset($_SESSION['user'])?$_SESSION['user']:false;
		if(!$user_id){
			exit(0);
		}
		$file = $_FILES['file'];
		$upl = new uploadFile();
		$user = new userModel();
		if($upl->upload_file($file)) {
			$date = [
				'file'=>$upl->uploaded,
				'error'=>$upl->errmsg,
				'status'=>1
			];
			$host = route::$hosts;
			$img = str_replace("./",$host,$upl->uploaded);
			$user->updateInfo(['img'=>$img],$user_id);
		} else {
			$date = [
				'file'=>$upl->uploaded,
				'error'=>$upl->errmsg,
				'status'=>1
			];
		}
		echo json_encode($date);

	}
}