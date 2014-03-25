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
		echo "This is a test<br/>";
		echo base_url();
		echo site_url();
	}
}
?>