<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class TestController extends Controller {
	public function model(){
		$user = new Model('user');
		var_dump($user);
	}
}
?>