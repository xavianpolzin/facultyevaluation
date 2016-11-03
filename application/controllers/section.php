<?php

class section extends Security{
	

	function __construct(){

		parent::__construct();

		$this->load->helper('url');
		$this->load->library('session');
	}	


	public function index(){



		$this->load->Model('SectionModel');


		$data = array(
				'sections' =>$this->SectionModel->GetAll()
			);

		$this->load->view('section/section_list.html',$data);


	}


	

	public function add(){

		
		$anyMessage = $this->session->flashdata('anyMessage') ? $this->session->flashdata('anyMessage') : '';
		$postparams = "";


		if($this->input->post()){

			$this->load->Model('SectionModel');
			$params = $this->input->post();
			$postparams = $params;
			
			$name = $params['name'];
			$description = $params['description'];

			if($name == "" && $description == "" && $anyMessage == ""){
				$anyMessage = "All fields are required";
			}

			if($name == "" && $anyMessage == ""){
				$anyMessage = "Name is required";
			}

			if($description == "" && $anyMessage == ""){
				$anyMessage = "description is required";
			}

			if($anyMessage == "" && $this->SectionModel->Save($params)){
				$this->session->set_flashdata('anyMessage', 'Successfully added..');
				redirect('/section/add');
			}


		}

		$this->load->Model('SectionModel');
		$this->load->view('section/add.html',array('anyMessage'=>$anyMessage));

	}


	


	public function edit(){


		$successMessage = $this->session->flashdata('successMessage') ? $this->session->flashdata('successMessage') : '';

		$this->load->Model('SectionModel');
		$id = $this->input->get('id');

		if($this->input->post()){

			$params = $this->input->post();

			
			if($this->SectionModel->update($params,$id)){


					$this->session->set_flashdata('successMessage','Successfully edited..');

					redirect('/section/edit?id='. $id);


			}


		}



		$sections = $this->SectionModel->find_by_id($id);

		$this->load->view('section/edit.html', array('section'=>$sections,'id'=>$id,'successMessage'=>$successMessage));
	}

	public function delete(){

		$this->load->Model('SectionModel');
		$id = $this->input->get('id');

		$this->SectionModel->delete($id);

		redirect('/section');
	}
}
