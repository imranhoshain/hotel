<?php
namespace App\admin\auth;
use App\helpers\Connection;
use PDO;
Use PDOException;
/**
* Login authorization class
*/
class Auth extends Connection{
	private $id;
	private $user;
	private $email;
	private $password;
	private $confirm;
	private $image;	
	//Set Method
	public function set($data = array()){
		if(array_key_exists('id',$data)){
			$this->id = $data['id'];
		}
		if(array_key_exists('user',$data)){
			$this->user = $data['user'];
		}
		if(array_key_exists('email',$data)){
			$this->email = $data['email'];
		}
		if(array_key_exists('password',$data)){
			$this->password = $data['password'];
		}
		if(array_key_exists('confirm',$data)){
			$this->confirm = $data['confirm'];
		}
		if(array_key_exists('image',$data)){
			$this->image = $data['image'];
		}
		return $this;
	}

	public function store(){

	}
}