<?php



class Evaluation extends CI_Controller{



	function __construct(){

		parent::__construct();
		$this->load->helper('url');
	}


	public function process(){


		$this->load->library('session');

		$evaluation = $this->session->userdata('evaluation');

		if($evaluation == null){
			redirect('/');
		}

		$uid = $this->input->post('uid');
		$currentUid = $evaluation['uid'];
		$currentStep = $this->input->post('currentStep');



		if($this->input->post()){


			switch ($currentStep) {
				case 1:


					$faculty = $this->input->post('faculty');
					$date = $this->input->post('date');

					$evaluation['facultyId'] = $faculty;
					$evaluation['date'] = $date;

					$this->session->set_userdata('evaluation',$evaluation);

					redirect("/evaluation/start?type=student&uid=$uid&step=2");
					break;

				case 2:



					$answers = $this->input->post('answers');

					$evaluation['prof_responsibilities'] = $answers;

					$this->session->set_userdata('evaluation',$evaluation);

					if(sizeof($answers) != 15){
						for ($i=0; $i < 15; $i++) {
							if(!isset($answers[$i])){
								$answers[$i] = -1;
							}
						}

					$evaluation['prof_responsibilities'] = $answers;
					$this->session->set_userdata('evaluation',$evaluation);
					  if($evaluation['studentCode']!=''){
							redirect("/evaluation/start?type=student&uid=$uid&step=2");
						}else{
							redirect("/evaluation/start?type=faculty&uid=$uid&step=2");
						}
					}
					if($evaluation['studentCode']!=''){
					redirect("/evaluation/start?type=student&uid=$uid&step=3");
				}else{

					redirect("/evaluation/start?type=faculty&uid=$uid&step=3");
				}
					break;


				case 3:



					$instrucAnswer = $this->input->post('answers');
					$comment = $this->input->post('comment');

					$profAnswer = $evaluation['prof_responsibilities'];

					$isStudent = $evaluation['studentCode'] !='' ? true: false;


					if(sizeof($instrucAnswer)!=15){

						if($evaluation['studentCode']!=''){
					redirect("/evaluation/start?type=student&uid=$uid&step=3");
				}else{

					redirect("/evaluation/start?type=faculty&uid=$uid&step=3");
				}

					}


					//$evaluation['instruc_responsibilities'] = $answers;

					$this->load->Model('EvaluationModel');




					$data = array(
						'facultyId' => $evaluation['facultyId'],
						'type'  => 'Student',
						'date' => $evaluation['date'],
						'evaluatedBy' => $evaluation['studentCode'],
						'instrucScore' => array_sum($instrucAnswer),
						'profScore' => array_sum($profAnswer),
						'comment' => $comment
						);

						if($evaluation['studentCode']==''){
							$data['type'] = 'Faculty';
						}

					$insertedId = $this->EvaluationModel->Save($data);

					if($insertedId > 0){


						$profNumber = 1;


						foreach($profAnswer as $prof){

							$this->EvaluationModel->SaveProfAnswer($insertedId,$prof, $profNumber);


							$profNumber++;

						}


						$instructNumber = 1;

						foreach($instrucAnswer as $instruct){


							$this->EvaluationModel->SaveInstructAnswer($insertedId,$instruct, $instructNumber);

							$instructNumber++;

						}


						$this->load->Model('CodeModel');


						$this->CodeModel->SetInActive($evaluation['studentCode']);
					}





					$this->session->unset_userdata('evaluation');

					//$this->session->sess_destroy();

					if($isStudent){
					redirect("/evaluation/success?type=student&uid=$uid");
				}else{

					redirect("/evaluation/success?type=faculty&uid=$uid");
				}


					break;
				default:




					break;
			}



		}else{


			redirect('/');
		}
	}

	public function success(){

		$isStudent = $this->input->get('type') == 'student' ? true: false;

		$this->output->set_template('default');
		$this->load->view('evaluation_success.html',array('isStudent'=>$isStudent));


	}


	public function start(){



		$this->load->library('session');

		$evaluation = $this->session->userdata('evaluation');

		$uid = $this->input->get('uid');
		$currentUid = $evaluation['uid'];


		if($evaluation && $uid && $uid == $currentUid){

			$step = $this->input->get('step');
			$type = $this->input->get('type');

			if($type=='faculty'){
				$evaluation['date'] = date("Y-m-d");

				$this->session->set_userdata('evaluation',$evaluation);
			}
			//var_dump($evaluation);

			switch ($step) {
				case 1:

					if($type=='student'){
						$this->ShowStepOne($evaluation);
					}

					break;

				case 2:

					$this->ShowStepTwo($evaluation);

					break;

				case 3:

					$this->ShowStepThree($evaluation);

					break;
				default:

					break;
			}

		}else{

			redirect('/');
		}


	}

	function ShowStepOne($data){



		$this->load->Model('FacultyModel');



		$data['faculties'] =  $this->FacultyModel->GetAll();
		$this->output->set_template('default');

		$this->load->view("welcome.html",$data);

	}

	function ShowStepTwo($data){

		//var_dump($data);
		$this->output->set_template('default');
		$this->load->view("student_form.html",$data);

	}

	function ShowStepThree($data){


		$this->output->set_template('default');
		$this->load->view("student_form_2.html",$data);

	}

}
