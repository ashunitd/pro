<?php
/**
* 
*/
class Project extends CI_Controller{

	
	public function index()
	{
		
		

	}
	public function viewdata()
	{
		
		$data = $this->Authenticate->getData();
		print_r($data);

	}
	public function addData()
	{
		$data=$this->input->post();
		$x = $this->Authenticate->addData($data);
		print_r($x);
	}
	public function deleteData()
	{
		$id=$this->input->post();
		$m = $this->Authenticate->deleteData($id);
		print_r($m);	

	}
	public function updateData()
	{
		$data=$this->input->post();
		$m = $this->Authenticate->updateData($data);
		print_r($m);	

	}
}