<?php

class Users extends Security{


	function __construct(){

		parent::__construct();

		$this->load->helper('url');
		$this->load->library('session');
	}

	public function changepass(){

		$id = $this->input->get('id');
		$successMessage = $this->session->flashdata('message') ? $this->session->flashdata('message') : '';

			$this->load->Model('User');
			$data = $this->User->find_by_id($id);


			if($this->input->post()){

				$this->load->library('encrypt');

				$params = $this->input->post();
				$new_pass = $params['new_pass'];
				$confirm_pass = $params['confirm_pass'];
				$old_pass = $this->encrypt->decode($data->password);

				if($new_pass == "" && $confirm_pass==""){

					$this->session->set_flashdata('message','New Password and Confirm Password is required field.');
					redirect('/users/changepass?id='.$id);
				}

				if($new_pass ==""){
					$this->session->set_flashdata('message','New Password is required field.');
					redirect('/users/changepass?id='.$id);
				}
				if($confirm_pass == ""){
					$this->session->set_flashdata('message','Confirm password is required field.');
					redirect('/users/changepass?id='.$id);
				}

				if($new_pass != $confirm_pass){
					$this->session->set_flashdata('message','New password & Confirm password is the same.');
					redirect('/users/changepass?id='.$id);
				}

				if($new_pass == $old_pass){
					$this->session->set_flashdata('message','New password & Current password should not be the same.');
					redirect('/users/changepass?id='.$id);
				}

				if($this->User->UpdatePassword($id,$new_pass)){
					$this->session->set_flashdata('message','Password successfully update.');
					redirect('/users/changepass?id='.$id);
				}else{
					$this->session->set_flashdata('message','Problem encountered while trying updating password.');
					redirect('/users/changepass?id='.$id);
				}

			}

		if($id && $data->id>0){
			$this->load->view('user/changepassword.html', array('user'=>$data,'successMessage'=>$successMessage));
		}else{
			redirect('/users');
		}
	}


	public function index(){

			$this->load->Model('User');

		$message = $this->session->flashdata('message') ? $this->session->flashdata('message') : '';


		$data = array(
				'users' =>$this->User->GetAll(),
				'message'=>$message,
				'accessLevel' => $this->userLoggedIn['accessLevel']
			);


		$this->load->view('user/user_list.html', $data);
	}


public function search_users()
{
	$this->load->model('User');
	$fname = $this->input->post('search');

	if(isset($fname) and !empty($fname)){
		$data['users'] = $this->User->search_users($fname);
		$this->load->view('user/user_list.html', $data);
	}else{
		redirect('/user');
	}
}

	public function add(){


		$anyMessage = $this->session->flashdata('anyMessage') ? $this->session->flashdata('anyMessage') : '';
		$postparams = "";


		if($this->input->post()){


			$this->load->Model('User');
			$params = $this->input->post();
			$postparams =$params;

			$existsUsername = $this->User->UsernameExists($params['username']);

			if($params['username'] =='admin'){

					$this->session->set_flashdata('anyMessage','Username admin cannot be used.	');
					redirect('/users/add');

			}

			if($existsUsername){

					//$this->session->set_flashdata('anyMessage','Username '. $$params['username'] .' already exists.');
					//redirect('/users/add');
					$anyMessage = "Username already exists";

			}


			$accessLevel = $params['accessLevel'];
			$username = $params['username'];
			$fname = $params['fname'];
			$lname = $params['lname'];
			$password =$params['password'];
			$faculty= $params['faculty'];


			if($username == "" && $fname =="" && $lname =="" && $password == "" && $anyMessage==""){
					//$this->session->set_flashdata('anyMessage','All fields are required.');
					$anyMessage = "All fields are required";
					//redirect('/users/add');
			}

			if($username =="" && $anyMessage == ""){
					//$this->session->set_flashdata('anyMessage','Username is required field.');
					//redirect('/users/add');
					$anyMessage = "Username is required.";
			}

			if($fname=="" && $anyMessage == ""){
					//$this->session->set_flashdata('anyMessage','First Name is required field.');
					//redirect('/users/add');
					$anyMessage = "First Name is required.";
			}

			if($lname=="" && $anyMessage==""){
					$anyMessage = "Last Name is required.";
			}

			if($password =="" && $anyMessage ==""){
					$anyMessage = "Password is required";
			}

			if($accessLevel == 'faculty' && $faculty == 0 && $anyMessage ==""){
				$anyMessage ="Link to faculty option is required for faculty account level.";
			}


			//make it sure na 0 ang faculty id if dili faculty accesslevel
			if($accessLevel != 'faculty'){
				$params['faculty'] = 0;
			}


			if($anyMessage == "" && $this->User->Save($params)){


					$this->session->set_flashdata('anyMessage','Successfully added..');

					redirect('/users/add');


			}


		}


		$this->load->Model('FacultyModel');

		$this->load->view('user/add.html',array('anyMessage'=>$anyMessage,'faculties' =>$this->FacultyModel->GetAllWhichNotYetLinkToUser(),'postparams'=>$postparams));
	}

	public function edit(){


		$anyMessage = $this->session->flashdata('anyMessage') ? $this->session->flashdata('anyMessage') : '';

		$this->load->Model('User');
		$id = $this->input->get('id');
		$postparams = '';

		if($this->input->post()){

			$params = $this->input->post();
			$postparams = $params;
			$fname = $params['fname'];
			$lname = $params['lname'];
			$accessLevel =$params['accessLevel'];
			$faculty = $params['faculty'];

			if($fname=="" && $anyMessage == ""){
					//$this->session->set_flashdata('anyMessage','First Name is required field.');
					//redirect('/users/add');
					$anyMessage = "First Name is required field.";
			}

			if($lname=="" && $anyMessage==""){
					$anyMessage = "Last Name is a required field.";
			}

			if($accessLevel == 'faculty' && $faculty == 0 && $anyMessage ==""){
				$anyMessage ="Link to faculty option is required for faculty account level.";
			}

			if($accessLevel != 'faculty'){
				$params['faculty'] = 0;
			}

			if($anyMessage =="" && $this->User->update($params,$id)){


					$this->session->set_flashdata('anyMessage','Successfully edited..');

					redirect('/users/edit?id='. $id);


			}


		}
		$users = $this->User->find_by_id($id);
		$this->load->Model('FacultyModel');

		$this->load->view('user/edit.html', array('users'=>$users,'id'=>$id,'anyMessage'=>$anyMessage,'faculties'=>$this->FacultyModel->GetAllWhichNotYetLinkToUserExcept($users->faculty_id),'postparams'=>$postparams));
	}

	public function delete(){

		$this->load->Model('User');
		$id = $this->input->get('id');

		$user = $this->User->find_by_id($id);

		if($user->username == 'admin' && $user->accessLevel =='admin'){

			$this->session->set_flashdata('message','Unable to delete admin account.');
			redirect('/users');
		}

		$this->User->delete($id);

			$this->session->set_flashdata('message','Account '. $user->username .' successfully deleted.');
		redirect('/users');
	}
}
