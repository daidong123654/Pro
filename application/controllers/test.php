<?php
/**
* 
*/
class test extends CI_Controller{
	
	function __construct()
	{
		# code...
		parent::__construct();		
	}

	function index(){
		$this->load->view('login');
	}

	function a(){
		$this->load->view('login_test');
	}
}
?>