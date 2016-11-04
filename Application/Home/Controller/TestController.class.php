<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class TestController extends Controller {
	public function model(){
		$user = M('user');
		var_dump($user->select());
	}

	public function login(){
		$this->display('Index:login');
	}
}
?>