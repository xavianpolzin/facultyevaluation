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




	public function faculty_profile($id){


		$id = substr($id, strpos($id, '.')+1);

		$this->load->Model('FacultyModel');
		$this->load->Model('FacultyCourseModel');
		$this->load->Model('FacultySemesterModel');
		$this->load->Model('FacultySubjectModel');
		$this->load->Model('FacultySectionModel');
		$faculty = $this->FacultyModel->find_by_id($id);

		$facultyCourse = array();
		$facultySections = array();
		$facultySubjects = array();
		$facultySemester = array();

		foreach ($this->FacultyCourseModel->FindByFaculty($id) as $value) {
			$facultyCourse[] = $value;
		}

foreach ($this->FacultySectionModel->FindByFaculty($id) as $value) {
			$facultySections[] = $value;
		}


foreach ($this->FacultySubjectModel->FindByFaculty($id) as $value) {
			$facultySubjects[] = $value;
		}



foreach ($this->FacultySemesterModel->FindByFaculty($id) as $value) {
			$facultySemester[] = $value;
		}


		$faculty->courses = $facultyCourse;
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

		if($this->FacultyModel->AlreadyEval($userLoggedIn['id'])){

					$this->session->set_flashdata('successMessage','Successfully added..');
			redirect('/');
		}



		$data = array(

					'uid' =>$uid,
					'studentCode' =>'',
					'facultyId' =>$userLoggedIn['id'],
					'date' => '',
					'prof_responsibilities' =>array(-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1),
					'instruc_responsibilities' =>array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)


				);


				$this->session->set_userdata('evaluation',$data);

				redirect("/evaluation/start?type=faculty&uid=$uid&step=2");



	}


	public function add(){


		$successMessage = $this->session->flashdata('successMessage') ? $this->session->flashdata('successMessage') : '';


		if($this->input->post()){


			$this->load->Model('FacultyModel');
			$postparams = $this->input->post();

			$params = array(
				'firstName'=>$postparams['firstName'],
				'middleName'=>$postparams['middleName'],
				'lastName'=>$postparams['lastName']
			);


//			var_dump($postparams);

			if($id_assign = $this->FacultyModel->Save($params)){

					$this->load->Model('FacultySemesterModel');
					$this->load->Model('FacultySectionModel');
					$this->load->Model('FacultyCourseModel');
					$this->load->Model('FacultySubjectModel');
				foreach ($postparams['semesters'] as  $value) {
						$this->FacultySemesterModel->Save(array('faculty_id'=>$id_assign,'semester'=>$value));
				}

				foreach ($postparams['sections'] as $value) {
					$this->FacultySectionModel->Save(array('faculty_id'=>$id_assign,'section_id'=>$value));
				}

				foreach ($postparams['courses'] as  $value) {
					$this->FacultyCourseModel->Save(array('faculty_id'=>$id_assign,'course_id'=>$value));
				}

				foreach ($postparams['subjects'] as $value) {
					$this->FacultySubjectModel->Save(array('faculty_id'=>$id_assign,'subject_id'=>$value));
				}


					$this->session->set_flashdata('successMessage','Successfully added..');

					redirect('/faculty/add');


			}


		}

		$this->load->Model('CourseModel');
		$this->load->Model('SectionModel');
		$this->load->Model('SubjectModel');


		$subjects = $this->SubjectModel->GetAll();
		$courses = $this->CourseModel->GetAll();
		$sections = $this->SectionModel->GetAll();

		$this->load->view('faculty/add.html',array('successMessage'=>$successMessage,'subjects'=>$subjects,'sections'=>$sections,'courses'=>$courses));

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


		$successMessage = $this->session->flashdata('successMessage') ? $this->session->flashdata('successMessage') : '';

		$this->load->Model('FacultyModel');
		$id = $this->input->get('id');

		if($this->input->post()){

			$params = $this->input->post();


			if($this->FacultyModel->update($params,$id)){


					$this->session->set_flashdata('successMessage','Successfully edited..');

					redirect('/faculty/edit?id='. $id);


			}


		}



		$faculty = $this->FacultyModel->find_by_id($id);

		$this->load->view('faculty/edit.html', array('faculty'=>$faculty,'id'=>$id,'successMessage'=>$successMessage));
	}

	public function delete(){

		$this->load->Model('FacultyModel');
		$id = $this->input->get('id');

		$this->FacultyModel->delete($id);

		redirect('/faculty');
	}
}
