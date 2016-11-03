<?php
use Think\Model;

class UserModel {
	public function getName(){
		$user = new Model('user');
		var_dump($user->select());

	}
}

 ?>