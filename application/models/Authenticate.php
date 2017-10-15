<?php
class Authenticate extends CI_Model{


public function getData()
{
	//$this->load->library('mongo_db');
	$q = $this->mongo_db->get('mycol');
	
	
	return $q;
	//return ['Name'=>'Ashutosh','Surname'=>'Renu'];
}
public function addData($data)
{
	//$this->load->library('mongo_db');
	$s = array();
	$this->mongo_db->insert('mycol',$s);
}
public function deleteData($id)
{
//$this->load->library('mongo_db');
$this->mongo_db->where(array($data)->delete('mycol');
echo "Deleted";

}
public function updateData($data)
{
//$this->load->library('mongo_db');

$this->mongo_db->where(array('name' =>'ashutosh'))->set(array('surname'=>'1'))->update('mycol');
echo "updated";
}
}