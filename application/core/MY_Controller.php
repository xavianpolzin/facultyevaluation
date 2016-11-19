<?php
 
class Security extends CI_Controller{

	var $userLoggedIn;
	
	var $isUserLoggedIn = false;
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		$this->load->library('session');
		
		if($this->session->userdata('loggedIn')){
		
			$this->userLoggedIn = $this->session->userdata('loggedIn');
		
			if($this->userLoggedIn['accessLevel'] == "admin" || $this->userLoggedIn['accessLevel'] == "academic"){
				$this->output->set_template('admin');
			}else if($this->userLoggedIn['accessLevel'] == "faculty"){
				$this->output->set_template('faculty');
			}else if($this->userLoggedIn['accessLevel'] == "staff"){
				$this->output->set_template('admin');
			}
			$this->isUserLoggedIn = true;
		}else{
			//$this->output->set_template('default');
			//$this->load->view('permissiondenied');
			redirect('/permissiondenied');
		}
	}
	
}