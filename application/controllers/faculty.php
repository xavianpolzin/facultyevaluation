<?php

class Faculty extends Security{


	function __construct(){

			parent::__construct();

			$this->load->helper('url');

			$this->load->library('session');

	}


	public function index(){






		$this->load->Model('FacultyModel');


		$data = array(
				'faculties' =>$this->FacultyModel->GetAll()
			);


		$this->load->view('faculty/list_of_faculty.html',$data);


	}

   public function schedule($id){


   		//$result = 8 & 5;


   		//var_dump($result);

   		$fnameId = $id;
		$id = substr($id, strpos($id, '.')+1);


		$this->load->Model('ScheduleModel');

		$this->load->Model('SectionModel');
		$this->load->Model('SubjectModel');
		$this->load->Model('FacultyModel');


		$data = array(
				'sections' =>$this->SectionModel->GetAll(),
				'subjects' =>$this->SubjectModel->GetAll(),
				'schedules' =>$this->ScheduleModel->GetAllByFaculty($id),
				'faculty' => $this->FacultyModel->find_by_id($id),
				'fnameId' => $fnameId
			);


		if($this->input->post()){


			$days = $this->input->post('days');

			$section = $this->input->post('section');

			$subject = $this->input->post('subject');

			$from_time = $this->input->post('from_time');

			$to_time = $this->input->post('to_time');


			$this->load->Model('ScheduleModel');


			$data = array(
				'days' => array_sum($days),
				'section' => $section,
				'subject' => $subject,
				'from_time' => $from_time,
				'to_time' => $to_time,
				'faculty' => $id
				);


			if($this->ScheduleModel->Save($data)){

					$this->load->library('session');

					$this->session->set_flashdata('msg','Successfully added.');

					redirect('faculty/schedule/' . $fnameId);

			}


		}



		$this->load->view('faculty/schedule.php',$data);


	}


	public function printd($id){


	$this->output->unset_template();


	$this->load->Model('FacultyModel');
		//$this->load->Model('FacultyCourseModel');
		$this->load->Model('FacultySemesterModel');
		$this->load->Model('FacultySubjectModel');
		$this->load->Model('FacultySectionModel');
		$faculty = $this->FacultyModel->find_by_id($id);

		//$facultyCourse = array();
		$facultySections = array();
		$facultySubjects = array();
		$facultySemester = array();

		/*foreach ($this->FacultyCourseModel->FindByFaculty($id) as $value) {
			$facultyCourse[] = $value;
		}*/

foreach ($this->FacultySectionModel->FindByFaculty($id) as $value) {
			$facultySections[] = $value;
		}


foreach ($this->FacultySubjectModel->FindByFaculty($id) as $value) {
			$facultySubjects[] = $value;
		}



foreach ($this->FacultySemesterModel->FindByFaculty($id) as $value) {
			$facultySemester[] = $value;
		}


		//$faculty->courses = $facultyCourse;
		$faculty->sections = $facultySections;
		$faculty->subjects = $facultySubjects;
		$faculty->semester = $facultySemester;
		$data = array(
				'faculty' =>$faculty
			);





	$this->load->library('pdf');

//j	header("Content-type:application/pdf");
	$this->pdf->load_view('faculty/print.php',array('faculty'=>$faculty));
//	$this->load->view('faculty/print.php',array('faculty'=>$faculty));
	$this->pdf->render();
	$this->pdf->stream($faculty->lastName. '-'. $faculty->firstName .".pdf");	

	}



	public function faculty_profile($id){


		$id = substr($id, strpos($id, '.')+1);

		$this->load->Model('FacultyModel');
		//$this->load->Model('FacultyCourseModel');
		$this->load->Model('FacultySemesterModel');
		$this->load->Model('FacultySubjectModel');
		$this->load->Model('FacultySectionModel');
		$faculty = $this->FacultyModel->find_by_id($id);

		//$facultyCourse = array();
		$facultySections = array();
		$facultySubjects = array();
		$facultySemester = array();

		/*foreach ($this->FacultyCourseModel->FindByFaculty($id) as $value) {
			$facultyCourse[] = $value;
		}*/

foreach ($this->FacultySectionModel->FindByFaculty($id) as $value) {
			$facultySections[] = $value;
		}


foreach ($this->FacultySubjectModel->FindByFaculty($id) as $value) {
			$facultySubjects[] = $value;
		}



foreach ($this->FacultySemesterModel->FindByFaculty($id) as $value) {
			$facultySemester[] = $value;
		}


		//$faculty->courses = $facultyCourse;
		$faculty->sections = $facultySections;
		$faculty->subjects = $facultySubjects;
		$faculty->semester = $facultySemester;
		$data = array(
				'faculty' =>$faculty
			);





		$this->load->view('faculty/faculty_profile.html',$data);


	}


	function startEval(){


		$this->load->Model('FacultyModel');


		$this->load->library('session');

			$uid = md5(uniqid(rand(), true));

			$userLoggedIn = $this->session->userdata('loggedIn');

		if($this->FacultyModel->AlreadyEval($userLoggedIn['facultyId'])){

					$this->session->set_flashdata('message','You have already taken.');
			redirect('/');
		}



		$data = array(

					'uid' =>$uid,
					'studentCode' =>'',
					'facultyId' =>$userLoggedIn['facultyId'],
					'date' => date("Y-m-d"),
					'type' => 'Faculty',
					'prof_responsibilities' =>array(-1,-1,-1,-1,-1,-1,-1,-1,-1),
					'admin_responsibilities' =>array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1),
					'instruc_responsibilities' =>array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1)

				);

				//make sure walay laing session at the starting point
				if($this->session->userdata('evaluation')){
							$this->session->unset_userdata('evaluation');
				}

				$this->session->set_userdata('evaluation',$data);

				redirect("/evaluation/start?type=faculty&uid=$uid&step=2");



	}


	public function add(){


		$anyMessage = $this->session->flashdata('anyMessage') ? $this->session->flashdata('anyMessage') : '';
		$postparams = '';


		if($this->input->post()){


			$this->load->Model('FacultyModel');
			$postparams = $this->input->post();
			$this->load->Model('User');

			$params = array(
				'firstName'=>$postparams['firstName'],
				'middleName'=>$postparams['middleName'],
				'lastName'=>$postparams['lastName']
			);


			$fname = $params['firstName'];
			$mname = $params['middleName'];
			$lname = $params['lastName'];
			$semestersSize = isset($postparams['semesters']) ? sizeof($postparams['semesters']) : 0;
			$sectionSize = isset($postparams['sections']) ? sizeof($postparams['sections']) : 0;
			//$courseSize = isset($postparams['courses']) ? sizeof($postparams['courses']) : 0;
			$subjectSize = isset($postparams['subjects']) ? sizeof($postparams['subjects']) : 0;



			if($fname =="" || $mname =="" || $lname=="" || 
				$semestersSize == 0 || $sectionSize == 0 || 
				$subjectSize == 0){
				$anyMessage = "All field are required";
			}

			$existsUsername = $this->User->UsernameExists($postparams['username']);

			if($postparams['username'] =='admin'){

					$this->session->set_flashdata('anyMessage','Username admin cannot be used.	');
					redirect('/faculty/add');

			}

			if($existsUsername){

					//$this->session->set_flashdata('anyMessage','Username '. $$params['username'] .' already exists.');
					//redirect('/users/add');
					$anyMessage = "Username already exists";

			}





//			var_dump($postparams);

			if($anyMessage =="" && $id_assign = $this->FacultyModel->Save($params)){

					$this->load->Model('FacultySemesterModel');
					$this->load->Model('FacultySectionModel');
					//$this->load->Model('FacultyCourseModel');
					$this->load->Model('FacultySubjectModel');
					
				foreach ($postparams['semesters'] as  $value) {
						$this->FacultySemesterModel->Save(array('faculty_id'=>$id_assign,'semester'=>$value));
				}

				foreach ($postparams['sections'] as $value) {
					$this->FacultySectionModel->Save(array('faculty_id'=>$id_assign,'section_id'=>$value));
				}

				/*foreach ($postparams['courses'] as  $value) {
					$this->FacultyCourseModel->Save(array('faculty_id'=>$id_assign,'course_id'=>$value));
				}*/

				foreach ($postparams['subjects'] as $value) {
					$this->FacultySubjectModel->Save(array('faculty_id'=>$id_assign,'subject_id'=>$value));
				}


				//add user here

					$userDetails = array(


					'username' => $postparams['username'],
					'fname' => $postparams['firstName'],
					'lname' =>$postparams['lastName'],
					'password' => $postparams['password'],

					'accessLevel' => 'faculty',
					'faculty' =>$id_assign
					);



				$this->User->Save($userDetails);

					$this->session->set_flashdata('anyMessage','Successfully added..');

					redirect('/faculty/add');


			}else{
				$this->session->set_flashdata('anyMessage',$anyMessage);
					redirect('/faculty/add');

			}


		}

		//$this->load->Model('CourseModel');
		$this->load->Model('SectionModel');
		$this->load->Model('SubjectModel');


		$subjects = $this->SubjectModel->GetAll();
		//$courses = $this->CourseModel->GetAll();
		$sections = $this->SectionModel->GetAll();

		$this->load->view('faculty/add.html',array('anyMessage'=>$anyMessage,'subjects'=>$subjects,'sections'=>$sections,/*'courses'=>$courses,*/'postparams'=>$postparams));

	}


public function search_faculty()
{
	$this->load->model('FacultyModel');
	$firstName = $this->input->post('search');

	if(isset($firstName) and !empty($firstName)){
		$data['faculties'] = $this->FacultyModel->search_faculty($firstName);
		$this->load->view('faculty/list_of_faculty.html', $data);
	}else{
		redirect('/faculty');
	}
}

	public function edit(){


		$anyMessage = $this->session->flashdata('anyMessage') ? $this->session->flashdata('anyMessage') : '';
		$postparams = '';

		$this->load->Model('FacultyModel');
		$id = $this->input->get('id');

		if($this->input->post()){

			$params = $this->input->post();
			$postparams = $params;

			$fname = $params['firstName'];
			$mname = $params['middleName'];
			$lname = $params['lastName'];
			$semestersSize = isset($postparams['semesters']) ? sizeof($postparams['semesters']) : 0;
			$sectionSize = isset($postparams['sections']) ? sizeof($postparams['sections']) : 0;
			//$courseSize = isset($postparams['courses']) ? sizeof($postparams['courses']) : 0;
			$subjectSize = isset($postparams['subjects']) ? sizeof($postparams['subjects']) : 0;



			if($fname =="" || $mname =="" || $lname=="" || 
				$semestersSize == 0 || $sectionSize == 0 || 
				$subjectSize == 0){
				$anyMessage = "All field are required";
			}


			if($anyMessage == "" && $this->FacultyModel->update($params,$id)){

					//$this->load->Model('FacultyCourseModel');
					$this->load->Model('FacultySemesterModel');
					$this->load->Model('FacultySubjectModel');
					$this->load->Model('FacultySectionModel');

					//delete previos reocrd
					//$this->FacultyCourseModel->DeleteByFaculty($id);
					$this->FacultySectionModel->DeleteByFaculty($id);
					$this->FacultySubjectModel->DeleteByFaculty($id);
					$this->FacultySemesterModel->DeleteByFaculty($id);


					//save new copy
				foreach ($postparams['semesters'] as  $value) {
						$this->FacultySemesterModel->Save(array('faculty_id'=>$id,'semester'=>$value));
				}

				foreach ($postparams['sections'] as $value) {
					$this->FacultySectionModel->Save(array('faculty_id'=>$id,'section_id'=>$value));
				}

				/*foreach ($postparams['courses'] as  $value) {
					$this->FacultyCourseModel->Save(array('faculty_id'=>$id,'course_id'=>$value));
				}*/

				foreach ($postparams['subjects'] as $value) {
					$this->FacultySubjectModel->Save(array('faculty_id'=>$id,'subject_id'=>$value));
				}




					$this->session->set_flashdata('anyMessage','Successfully edited..');

					redirect('/faculty/edit?id='. $id);


			}


		}



		//$this->load->Model('CourseModel');
		$this->load->Model('SectionModel');
		$this->load->Model('SubjectModel');

		//$this->load->Model('FacultyCourseModel');
		$this->load->Model('FacultySemesterModel');
		$this->load->Model('FacultySubjectModel');
		$this->load->Model('FacultySectionModel');

		//$facultyCourse = $this->FacultyCourseModel->FindByFaculty($id);
		$facultySections = $this->FacultySectionModel->FindByFaculty($id);
		$facultySubjects= $this->FacultySubjectModel->FindByFaculty($id);
		$facultySemester= $this->FacultySemesterModel->FindByFaculty($id);


		$subjects = $this->SubjectModel->GetAll();
		//$courses = $this->CourseModel->GetAll();
		$sections = $this->SectionModel->GetAll();


		$faculty = $this->FacultyModel->find_by_id($id);


		//$faculty->courses = $facultyCourse;
		$faculty->sections = $facultySections;
		$faculty->subjects = $facultySubjects;
		$faculty->semester = $facultySemester;

		$this->load->view('faculty/edit.html', array('faculty'=>$faculty,'id'=>$id,'anyMessage'=>$anyMessage,'postparams'=>$postparams,'sections'=>$sections,/*'courses'=>$courses,*/'subjects'=>$subjects));
	}

	public function delete(){

		$this->load->Model('FacultyModel');
		$id = $this->input->get('id');

		$this->FacultyModel->delete($id);

		redirect('/faculty');
	}
}
