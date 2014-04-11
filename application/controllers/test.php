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
		$this->load->view('index');
		$this->load->view('footer');	
	}

	function login(){
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}

	function b(){
		
	}
}
?>