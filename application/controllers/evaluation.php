<?php



class Evaluation extends CI_Controller{



	function __construct(){

		parent::__construct();
		$this->load->helper('url');
	}

	public function startacademiceval(){


		if($this->input->post()){

			$facultyId = $this->input->post('faculty');

			if($facultyId>0){

			   $this->load->library('session');

				$userLoggedIn = $this->session->userdata('loggedIn');

				$uid = md5(uniqid(rand(), true));


				$data = array(

					'uid' =>$uid,
					'studentCode' =>'academic-'.$userLoggedIn['id'],
					'facultyId' =>$facultyId,
					'date' => date("Y-m-d"),
					'type' => 'Academic',
					'prof_responsibilities' =>array(-1,-1,-1,-1,-1,-1,-1,-1,-1),
					'admin_responsibilities' =>array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1),
					'instruc_responsibilities' =>array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1)


				);


				$this->session->set_userdata('evaluation',$data);

				redirect("/evaluation/start?type=academic&uid=$uid&step=2");
			}else{
				$this->load->library('session');
				$this->session->set_flashdata('anyMessage',"Faculty is required.");
				redirect('/');
			}
			}else{
				redirect('/');
			}
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
					$subjectId = $this->input->post('subject');
					$sectionId = $this->input->post('section');
					$date = $this->input->post('date');

					$evaluation['facultyId'] = $faculty;
					$evaluation['date'] = $date;
					$evaluation['subjectId'] = $subjectId;
					$evaluation['sectionId'] = $sectionId;

					$this->session->set_userdata('evaluation',$evaluation);

					redirect("/evaluation/start?type=student&uid=$uid&step=2");
					break;

				case 2:



					$answers = $this->input->post('answers');

					$evaluation['prof_responsibilities'] = $answers;

					$this->session->set_userdata('evaluation',$evaluation);

					if(sizeof($answers) != 9){
						for ($i=0; $i < 9; $i++) {
							if(!isset($answers[$i])){
								$answers[$i] = -1;
							}
						}

						$evaluation['prof_responsibilities'] = $answers;
						$this->session->set_userdata('evaluation',$evaluation);
					

					if($evaluation['studentCode']!=''){
					  	if($evaluation['type']=='Student'){
							redirect("/evaluation/start?type=student&uid=$uid&step=2");
						}else{
							redirect("/evaluation/start?type=academic&uid=$uid&step=2");
						}
						}else{
							redirect("/evaluation/start?type=faculty&uid=$uid&step=2");
						}
					}


					if($evaluation['studentCode']!=''){
					  	if($evaluation['type']=='Student'){
							redirect("/evaluation/start?type=student&uid=$uid&step=3");
						}else{
							redirect("/evaluation/start?type=academic&uid=$uid&step=3");
						}
						}else{
							redirect("/evaluation/start?type=faculty&uid=$uid&step=3");
						}
					

					if($evaluation['studentCode']!=''){
						if($evaluation['type']=='Student'){
							redirect("/evaluation/start?type=student&uid=$uid&step=4");
						}else{
							redirect("/evaluation/start?type=academic&uid=$uid&step=4");
						}
						}else{
							redirect("/evaluation/start?type=faculty&uid=$uid&step=4");
						}
					
					break;


				case 3:

					$adminiAnswer = $this->input->post('answers');
					$comment = $this->input->post('comment');
					
					$profAnswer = $evaluation['prof_responsibilities'];

					$isStudent = $evaluation['studentCode'] !='' ? true: false;


					if(sizeof($adminiAnswer)!=10){

						if($evaluation['studentCode']!=''){
							if($evaluation['type']=='Student'){
								redirect("/evaluation/start?type=student&uid=$uid&step=3");
							}else{
								redirect("/evaluation/start?type=academic&uid=$uid&step=3");
							}
						}else{
							redirect("/evaluation/start?type=faculty&uid=$uid&step=3");
						}

					}


					//$evaluation['instruc_responsibilities'] = $answers;

					$this->load->Model('EvaluationModel');




					$data = array(
						'facultyId' => $evaluation['facultyId'],
						'type'  => $evaluation['type'],
						'date' => $evaluation['date'],
						'evaluatedBy' => $evaluation['studentCode'],
						'instrucScore' => array_sum($instrucAnswer),
						'adminiScore' => array_sum($adminiAnswer),
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


						$adminiNumber = 1;

						foreach($adminiAnswer as $administ){


							$this->EvaluationModel->SaveAdminiAnswer($insertedId,$administ, $adminiNumber);

							$adminiNumber++;

						}

						$instructNumber = 1;

						foreach($instrucAnswer as $instruct){


							$this->EvaluationModel->SaveInstructAnswer($insertedId,$instruct, $instructNumber);

							$instructNumber++;

						}


						$this->load->Model('CodeModel');


						$this->CodeModel->SetInActive($evaluation['studentCode']);
					}



					$type = $evaluation['type'];


					$this->session->unset_userdata('evaluation');


					if($type!='Academic'){

						$this->session->sess_destroy();
					}

					if($type=='Student'){
					redirect("/evaluation/success?type=student&uid=$uid");
				}elseif($type=='Academic'){
					redirect("/evaluation/success?type=academic&uid=$uid");
				}else{

					redirect("/evaluation/success?type=faculty&uid=$uid");
				}
				break;

					case 4:

					$instrucAnswer = $this->input->post('answers');
					$comment = $this->input->post('comment');
					$adminiAnswer = $evaluation['admin_responsibilities'];
					$profAnswer = $evaluation['prof_responsibilities'];

					$isStudent = $evaluation['studentCode'] !='' ? true: false;


					if(sizeof($instrucAnswer)!=28){

						if($evaluation['studentCode']!=''){
							if($evaluation['type']=='Student'){
								redirect("/evaluation/start?type=student&uid=$uid&step=4");
							}else{
								redirect("/evaluation/start?type=academic&uid=$uid&step=4");
							}
						}else{
							redirect("/evaluation/start?type=faculty&uid=$uid&step=4");
						}

					}


					//$evaluation['instruc_responsibilities'] = $answers;

					$this->load->Model('EvaluationModel');




					$data = array(
						'facultyId' => $evaluation['facultyId'],
						'type'  => $evaluation['type'],
						'date' => $evaluation['date'],
						'evaluatedBy' => $evaluation['studentCode'],
						'instrucScore' => array_sum($instrucAnswer),
						'adminiScore' => array_sum($adminiAnswer),
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



					$type = $evaluation['type'];


					$this->session->unset_userdata('evaluation');


					if($type!='Academic'){

						$this->session->sess_destroy();
					}

					if($type=='Student'){
					redirect("/evaluation/success?type=student&uid=$uid");
				}elseif($type=='Academic'){
					redirect("/evaluation/success?type=academic&uid=$uid");
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

		$type = $this->input->get('type');

		$this->output->set_template('default');
		$this->load->view('evaluation_success.html',array('type'=>$type));


	}


	public function start(){



		$this->load->library('session');



		$evaluation = $this->session->userdata('evaluation');

		$uid = $this->input->get('uid');
		$currentUid = $evaluation['uid'];


		if($evaluation && $uid && $uid == $currentUid){

			$step = $this->input->get('step');
			$type = $this->input->get('type');

			if($type=='faculty' && $step==1){
			//	$evaluation['date'] = date("Y-m-d");
				$step=2;
			//	$this->session->set_userdata('evaluation',$evaluation);
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

				case 4:

					$this->ShowStepFour($evaluation);

					break;
				default:

					break;
			}

		}else{

			redirect('/');
		}


	}

						function cleanItUp($cmt,$wordlist=null,$character="*",$returnCount=false)
					{           
					    if($wordlist==null)
					    {
					        $wordlist="nigga|nigger|niggers|sandnigger|sandniggers|sandniggas|sandnigga|honky|honkies|chink|chinks|gook|gooks|wetback|wetbacks|spick|spik|spicks|spiks|bitch|bitches|bitchy|bitching|cunt|cunts|twat|twats|fag|fags|faggot|faggots|faggit|faggits|ass|asses|asshole|assholes|shit|shits|shitty|shity|dick|dicks|pussy|pussies|pussys|fuck|fucks|fucker|fucka|fuckers|fuckas|fucking|fuckin|fucked|motherfucker|motherfuckers|motherfucking|motherfuckin|mothafucker|mothafucka|motherfucka";
					    }
					    $replace = 'preg_replace("/./","' .$character .'","\\1")';
					    $comment = preg_replace("/\b($wordlist)\b/ie", $replace,$cmt,-1,$count);

					    if($returnCount!=false)
					    {
					        return $count;
					    }
					    elseif($returnCount!=true)
					    {
					        return $comment;
					    }
					}


	function ShowStepOne($data){



		$this->load->Model('SubjectModel');
		$this->load->Model('FacultyModel');
		$this->load->Model('SectionModel');


		$data['faculties'] =  $this->FacultyModel->GetAll();
		$data['subjects'] = $this->SubjectModel->GetAll();
		$data['sections'] = $this->SectionModel->GetAll();
		$this->output->set_template('default');

		$this->load->view("welcome.html",$data);

	}

	function ShowStepTwo($data){

		//var_dump($data);
		$type = $data['type'];
		$this->output->set_template('default');
		if($type=='Student'){
		$this->load->view("student_form.html",$data);
	}elseif($type=='Academic'){
		$this->load->view("academic_head_form.html",$data);
	}else{
		$this->load->view("faculty_form.html",$data);
	}

	}

	function ShowStepThree($data){

		//var_dump($data);
		$type = $data['type'];
		$this->output->set_template('default');
		if($type=='Student'){
		$this->load->view("student_form_1.html",$data);
	}elseif($type=='Academic'){
		$this->load->view("academic_head_form1.html",$data);
	}else{
		$this->load->view("faculty_form_1.html",$data);
	}

	}

	function ShowStepFour($data){


		$this->output->set_template('default');
		$type = $data['type']	;
		if($type=='Student'){
		$this->load->view("student_form_2.html",$data);
	}elseif($type=='Academic'){
		$this->load->view("academic_head_form2.html",$data);
	}else{

		$this->load->view("faculty_form_2.html",$data);
	}

	}

}
