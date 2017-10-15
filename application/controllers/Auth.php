<?php
class Auth extends CI_Controller{

	public function  __construct(){
		parent::__construct();
		$this->load->model('AuthModel');
	}
	public function index(){
		echo "Not Allowed";
	}

	public function login(){
		$data=$this->input->post();
		$login=$this->AuthModel->login($data);

			if($login){
				print_r($login);exit;
				return $login;
			}else{
				return FALSE;
			}

		}
		public function register(){
			$data=$this->input->post();
			$return_data=$this->AuthModel->register($data);
			if($return_data){
			return TRUE;
			}else{
			return FALSE;
			}

		}

		
		
	}
