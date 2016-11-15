<?php

class subject extends Security{
	

	function __construct(){

		parent::__construct();

		$this->load->helper('url');
		$this->load->library('session');
	}	


	public function index(){



		$this->load->Model('SubjectModel');


		$data = array(
				'subjects' =>$this->SubjectModel->GetAll()
			);

		$this->load->view('subject/subject_list.html',$data);


	}


	

	public function add(){

		
		$anyMessage = $this->session->flashdata('anyMessage') ? $this->session->flashdata('anyMessage') : '';
		$postparams = "";


		if($this->input->post()){


			$this->load->Model('SubjectModel');
			$params = $this->input->post();
			$postparams = $params;
			
			$name = $params['name'];
			$description = $params['description'];

			$existsSubject = $this->SubjectModel->SubjectExists($params['name']);

			//$description = $params['description'];
			if($existsSubject){

					//$this->session->set_flashdata('anyMessage','Username '. $$params['username'] .' already exists.');
					//redirect('/users/add');
					$anyMessage = "Subject name already exists";

			}
			if($name == "" && $description == "" && $anyMessage == ""){
				$anyMessage = "All fields are required";
			}

			if($name == "" && $anyMessage == ""){
				$anyMessage = "Name is required";
			}

			if($description == "" && $anyMessage == ""){
				$anyMessage = "description is required";
			}

			if($anyMessage == "" && $this->SubjectModel->Save($params)){
				$this->session->set_flashdata('anyMessage', 'Successfully added..');
				redirect('/subject/add');
			}


		}

		$this->load->Model('SubjectModel');
		$this->load->view('subject/add.html',array('anyMessage'=>$anyMessage));

	}


	public function edit(){


		$successMessage = $this->session->flashdata('successMessage') ? $this->session->flashdata('successMessage') : '';

		$this->load->Model('SubjectModel');
		$id = $this->input->get('id');

		if($this->input->post()){

			$params = $this->input->post();

			
			if($this->SubjectModel->update($params,$id)){


					$this->session->set_flashdata('successMessage','Successfully edited..');

					redirect('/subject/edit?id='. $id);


			}


		}



		$subject = $this->SubjectModel->find_by_id($id);

		$this->load->view('subject/edit.html', array('subject'=>$subject,'id'=>$id,'successMessage'=>$successMessage));
	}

	public function delete(){

		$this->load->Model('SubjectModel');
		$id = $this->input->get('id');

		$this->SubjectModel->delete($id);

		redirect('/subject');
	}
}
