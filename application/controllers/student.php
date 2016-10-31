<?php


class Student extends CI_Controller{



	function __construct(){

		parent::__construct();

		$this->load->helper('url');

	}



	public function check(){



		if($this->input->post()){



			$code = $this->input->post('code');

			if(empty($code)){

				$this->load->library('session');

				$this->session->set_flashdata('error',"Code is required.");


				redirect('/');
			}


			$this->load->Model('CodeModel');

			$existingCode = $this->CodeModel->Exists($code);

			if($existingCode->id > 0){


				$this->load->library('session');

				$uid = md5(uniqid(rand(), true));


				$data = array(

					'uid' =>$uid,
					'studentCode' =>$code,
					'facultyId' =>'',
					'date' => '',
					'type' => 'Student',
					'prof_responsibilities' =>array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1),
					'instruc_responsibilities' =>array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1)


				);


				$this->session->set_userdata('evaluation',$data);

				redirect("/evaluation/start?type=student&uid=$uid&step=1");


			}else{

				$this->load->library('session');

				$this->session->set_flashdata('error',"Code $code does not exists.");

				redirect('/');

			}

		}else{

			redirect('/');

		}


	}

}
