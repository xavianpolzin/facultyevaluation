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


			if($params=$this->input->post()){

				$this->load->library('encrypt');
				$passwordx= $this->encrypt->decode($data->password);
					if($params['current_pass'] != $passwordx){

						$this->session->set_flashdata('successMessage','Current Password did not match	');

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
				'message'=>$message
			);


		$this->load->view('user/user_list.html', $data);
	}




	public function add(){


		$successMessage = $this->session->flashdata('successMessage') ? $this->session->flashdata('successMessage') : '';



		if($this->input->post()){


			$this->load->Model('User');
			$params = $this->input->post();

			$existsUsername = $this->User->UsernameExists($params['username']);

			if($params['username'] =='admin'){

					$this->session->set_flashdata('successMessage','Username admin cannot be used.	');
					redirect('/users/add');

			}

			if($existsUsername){

					$this->session->set_flashdata('successMessage','Username '. $$params['username'] .' already exists.');
					redirect('/users/add');

			}

			if($this->User->Save($params)){


					$this->session->set_flashdata('successMessage','Successfully added..');

					redirect('/users/add');


			}


		}


		$this->load->Model('FacultyModel');

		$this->load->view('user/add.html',array('successMessage'=>$successMessage,'faculties' =>$this->FacultyModel->GetAll()));
	}


	public function edit(){


		$successMessage = $this->session->flashdata('successMessage') ? $this->session->flashdata('successMessage') : '';

		$this->load->Model('User');
		$id = $this->input->get('id');

		if($this->input->post()){

			$params = $this->input->post();


			if($this->User->update($params,$id)){


					$this->session->set_flashdata('successMessage','Successfully edited..');

					redirect('/users/edit?id='. $id);


			}


		}



		$users = $this->User->find_by_id($id);
		$this->load->Model('FacultyModel');

		$this->load->view('user/edit.html', array('users'=>$users,'id'=>$id,'successMessage'=>$successMessage,'faculties'=>$this->FacultyModel->GetAll()));
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
