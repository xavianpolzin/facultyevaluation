<?php

class course extends Security{
	

	function __construct(){

		parent::__construct();

		$this->load->helper('url');
		$this->load->library('session');
	}	


	public function index(){



		$this->load->Model('CourseModel');


		$data = array(
				'course' =>$this->CourseModel->GetAll()
			);

		$this->load->view('course/course_list.html',$data);


	}


	
public function search_course()
{
	$this->load->model('CourseModel');
	$name = $this->input->post('search');

	if(isset($name) and !empty($name)){
		$data['name'] = $this->CourseModel->search_course($name);
		$this->load->view('course/course_list.html', $data);
	}else{
		redirect('/course');
	}
}


	public function add(){

		
		$anyMessage = $this->session->flashdata('anyMessage') ? $this->session->flashdata('anyMessage') : '';
		$postparams = "";

		if($this->input->post()){

			$this->load->Model('CourseModel');
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

			if($anyMessage == "" && $this->CourseModel->Save($params)){
				$this->session->set_flashdata('anyMessage', 'Successfully added..');
				redirect('/course/add');
			}


		}

		$this->load->Model('CourseModel');
		$this->load->view('course/add.html',array('anyMessage'=>$anyMessage));

	}


	public function edit(){


		$successMessage = $this->session->flashdata('successMessage') ? $this->session->flashdata('successMessage') : '';

		$this->load->Model('CourseModel');
		$id = $this->input->get('id');

		if($this->input->post()){

			$params = $this->input->post();

			
			if($this->CourseModel->update($params,$id)){


					$this->session->set_flashdata('successMessage','Successfully added..');

					redirect('/course/edit?id='. $id);


			}


		}



		$course = $this->CourseModel->find_by_id($id);

		$this->load->view('course/edit.html', array('course'=>$course,'id'=>$id,'successMessage'=>$successMessage));
	}

	public function delete(){

		$this->load->Model('CourseModel');
		$id = $this->input->get('id');

		$this->CourseModel->delete($id);

		redirect('/course');
	}
}
