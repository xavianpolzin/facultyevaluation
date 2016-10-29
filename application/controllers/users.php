<?php

class Users extends Security{


	function __construct(){

		parent::__construct();

		$this->load->helper('url');
		$this->load->library('session');
	}


	public function index(){

			$this->load->Model('User');


		$data = array(
				'users' =>$this->User->GetAll()
			);


		$this->load->view('user/user_list.html', $data);
	}




	public function add(){


		$successMessage = $this->session->flashdata('successMessage') ? $this->session->flashdata('successMessage') : '';



		if($this->input->post()){


			$this->load->Model('User');
			$params = $this->input->post();

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

		$this->load->view('user/edit.html', array('users'=>$users,'id'=>$id,'successMessage'=>$successMessage));
	}

	public function delete(){

		$this->load->Model('User');
		$id = $this->input->get('id');

		$this->User->delete($id);

		redirect('/users');
	}
}
