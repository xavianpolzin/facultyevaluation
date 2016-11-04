<?php

class Home extends CI_Controller{


	function __construct(){

		parent::__construct();

		$this->load->helper('url');
		$this->load->library('session');
	}


	public function index(){


		if($this->session->userdata('loggedIn')){

			$message = $this->session->flashdata('message') ? $this->session->flashdata('message') : '';


			$userLoggedIn = $this->session->userdata('loggedIn');

			//echo $userLoggedIn['facultyId'];
			//echo $userLoggedIn['username'];

			if($userLoggedIn['accessLevel'] == "admin"){
				$this->output->set_template('admin');
				$this->load->view('admin_home.html');
			}else if($userLoggedIn['accessLevel'] == "faculty"){
				$this->output->set_template('faculty');
				$this->load->view('faculty_home.html',array('message'=>$message));
			}else if($userLoggedIn['accessLevel'] == "staff"){
				$this->output->set_template('admin');
				$this->load->view('admin_home.html');
			}else if($userLoggedIn['accessLevel'] == "academic"){
				$this->output->set_template('faculty');
				$this->load->Model('FacultyModel');
				$anyMessage = $this->session->flashdata('anyMessage') ? $this->session->flashdata('anyMessage') : '';
				$faculties = $this->FacultyModel->FindAllWhichIsNotYetEvaluate($userLoggedIn['id']);
				$this->load->view('academic_home.php',array('faculties'=>$faculties,'anyMessage'=>$anyMessage));
			}

		}else{

			$this->load->library('session');


			$error = $this->session->flashdata('error') ? $this->session->flashdata('error') : '';

			$this->output->set_template('default');
			$this->load->view('home.html',array('error' => $error));
		}

	}
}
