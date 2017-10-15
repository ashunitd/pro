<?php 
class AuthModel extends CI_Model{
	public function login($data){
		$r = $this->mongo_db->where(['email'=>$data['email'],'password'=>sha1($data['password'])])
 				->get('users');


 				if ($r==TRUE)
 				{
 					return $r;
 					
 				}

 				else{
 					
 					return FALSE;
 				}


	}
	public function register($data){

		$password=sha1($data['password']);
		$data['password']=$password;
		return $this->mongo_db->insert('users',$data);
	}
}