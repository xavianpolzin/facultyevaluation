<?php

class FacultyModel extends CI_Model{


	var $id = 0;
	var $firstName = '';
	var $middleName = '';
	var $lastName = '';
	var $profScore = 0;
	var $instrucScore = 0;
	var $profAnswers = array();
	var $instructAnswers = array();
	var $comments = array();
	var $totalEvaluator = 0;

	function __construct(){

		parent::__construct();

		$this->load->database();
	}



	public function ProfAnswersSelf($facultyId){


		$this->db->select('sum(choice_1) as "total_choice_1",sum(choice_2) as "total_choice_2",sum(choice_3) as "total_choice_3",sum(choice_4) as "total_choice_4",sum(choice_5) as "total_choice_5",sum(choice_6) as "total_choice_6"');

		$this->db->from('evaluation e')->join('professional_answer pa','e.id = pa.evaluation_id','left');

		$this->db->where('facultyId',$facultyId);
		$this->db->where('type','Faculty');

		$this->db->group_by('pa.num');

		$query = $this->db->get();

		$rows = array();

		foreach($query->result() as $row){

			$answers = array();
			$answers[0] = $row->total_choice_1;
			$answers[1] = $row->total_choice_2;
			$answers[2] = $row->total_choice_3;
			$answers[3] = $row->total_choice_4;
			$answers[4] = $row->total_choice_5;
			$answers[5] = $row->total_choice_6;
			$rows[] = $answers;
		}

		return $rows;
	}



	public function ProfAnswers($facultyId){


		$this->db->select('sum(choice_1) as "total_choice_1",sum(choice_2) as "total_choice_2",sum(choice_3) as "total_choice_3",sum(choice_4) as "total_choice_4",sum(choice_5) as "total_choice_5",sum(choice_6) as "total_choice_6"');

		$this->db->from('evaluation e')->join('professional_answer pa','e.id = pa.evaluation_id','left');

		$this->db->where('facultyId',$facultyId);
		$this->db->where('type','Student');

		$this->db->group_by('pa.num');

		$query = $this->db->get();

		$rows = array();

		foreach($query->result() as $row){

			$answers = array();
			$answers[0] = $row->total_choice_1;
			$answers[1] = $row->total_choice_2;
			$answers[2] = $row->total_choice_3;
			$answers[3] = $row->total_choice_4;
			$answers[4] = $row->total_choice_5;
			$answers[5] = $row->total_choice_6;
			$rows[] = $answers;
		}

		return $rows;
	}

 public function search_faculty($firstName)
{
	$this->db->select('*');
	$this->db->from('faculties');
	$this->db->like('firstName', $firstName);
	$query = $this->db->get();
	if($query->num_rows() > 0){
		return $query->result();
	}else{
		return $query->result();
	}
}


	public function InstructAnswersSelf($facultyId){

		$this->db->select('sum(choice_1) as "total_choice_1",sum(choice_2) as "total_choice_2",sum(choice_3) as "total_choice_3",sum(choice_4) as "total_choice_4",sum(choice_5) as "total_choice_5",sum(choice_6) as "total_choice_6"');

		$this->db->from('evaluation e')->join('instructional_answer pa','e.id = pa.evaluation_id','left');

		$this->db->where('facultyId',$facultyId);
		$this->db->where('type','Faculty');

		$this->db->group_by('pa.num');

		$query = $this->db->get();

		$rows = array();

		foreach($query->result() as $row){

			$answers = array();
			$answers[0] = $row->total_choice_1;
			$answers[1] = $row->total_choice_2;
			$answers[2] = $row->total_choice_3;
			$answers[3] = $row->total_choice_4;
			$answers[4] = $row->total_choice_5;
			$answers[5] = $row->total_choice_6;


			$rows[] = $answers;
		}

		return $rows;

	}

	public function InstructAnswers($facultyId){

		$this->db->select('sum(choice_1) as "total_choice_1",sum(choice_2) as "total_choice_2",sum(choice_3) as "total_choice_3",sum(choice_4) as "total_choice_4",sum(choice_5) as "total_choice_5",sum(choice_6) as "total_choice_6"');

		$this->db->from('evaluation e')->join('instructional_answer pa','e.id = pa.evaluation_id','left');

		$this->db->where('facultyId',$facultyId);
		$this->db->where('type','Student');

		$this->db->group_by('pa.num');

		$query = $this->db->get();

		$rows = array();

		foreach($query->result() as $row){

			$answers = array();
			$answers[0] = $row->total_choice_1;
			$answers[1] = $row->total_choice_2;
			$answers[2] = $row->total_choice_3;
			$answers[3] = $row->total_choice_4;
			$answers[4] = $row->total_choice_5;
			$answers[5] = $row->total_choice_6;


			$rows[] = $answers;
		}

		return $rows;

	}

public function AlreadyEval($faculty){

	$res =  $this->db->get_where('evaluation', array('facultyId' => $faculty,'type'=>'Faculty'));

	return $res->num_rows() > 0 ? true: false;
}

	public function GetComments($faculty){


		$this->db->where('facultyId',$faculty);

   	 	$sql = $this->db->get('evaluation');


   	 	$rows = array();

   	 	foreach($sql->result() as $row){


   	 		$comment = array();
   	 		$comment[0] = $row->date;
   	 		$comment[1] = $row->comment;

   	 		$rows[] = $comment;

   	 	}

   	 	return $rows;
	}


	public function GetAllWhichNotYetLinkToUserExcept($id){

		$this->db->from('faculties f')->where("f.id not in (select faculty_id from users where faculty_id > 0 and faculty_id !='$id')");
		$query = $this->db->get();


		$rows = array();

		foreach ($query->result() as $row) {

			$faculty = new FacultyModel();
			$faculty->id = $row->id;
			$faculty->firstName = $row->firstName;
			$faculty->middleName = $row->middleName;
			$faculty->lastName = $row->lastName;
			$rows[] = $faculty;
		}

		return $rows;
	}
	public function GetAllWhichNotYetLinkToUser(){
		$this->db->from('faculties f')->where("f.id not in (select faculty_id from users where faculty_id > 0)");
		$query = $this->db->get();


		$rows = array();

		foreach ($query->result() as $row) {

			$faculty = new FacultyModel();
			$faculty->id = $row->id;
			$faculty->firstName = $row->firstName;
			$faculty->middleName = $row->middleName;
			$faculty->lastName = $row->lastName;
			$rows[] = $faculty;
		}

		return $rows;
	}

	public function GetAll(){


		$query = $this->db->get('faculties');

		//compute
		$this->db->select('ifnull(sum(profScore)/15/count(*),0) as profScore,ifnull(sum(instrucScore)/15/count(*),0) as instrucScore, count(*) as totalEvaluator',false);
		$this->db->select('f.id as id,f.firstName as firstName, f.middleName as middleName, f.lastName as lastName');
		$this->db->from('faculties f')->join('evaluation e','f.id=e.facultyId','left');
		$this->db->group_by("f.id");


		$query = $this->db->get();
		$rows = array();

		foreach($query->result() as $row){

			$faculty = new FacultyModel();
			$faculty->id = $row->id;
			$faculty->firstName = $row->firstName;
			$faculty->middleName = $row->middleName;
			$faculty->lastName = $row->lastName;
			$faculty->profScore = $row->profScore ? $row->profScore : 0;
			$faculty->instrucScore = $row->instrucScore ;
			$faculty->profAnswers = $this->ProfAnswers($row->id);
			$faculty->totalEvaluator = $row->totalEvaluator;
			$faculty->instructAnswers = $this->InstructAnswers($row->id);
			$faculty->comments = $this->GetComments($row->id);
			$rows[] = $faculty;
		}


		return $rows;
	}




	public function Save($params){

		/**
		$faculty = array(

			'firstName' => $params['firstName'],
			'middleName' => $params['middleName'],
			'lastName' => $params['lastName']
			);
			**/
		$this->db->insert('faculties',$params);
		$lastInsertedID = $this->db->insert_id();



		return $lastInsertedID;

	}
	public function delete($id){
		$this->db->delete('faculties', array('id' => $id));
		return $this->db->affected_rows();
	}


	public function update($params,$id){

		$data = array(
			'firstName' => $params['firstName'],
			'middleName' => $params['middleName'],
			'lastName' => $params['lastName']
			);

		$this->db->update('faculties', $data, "id = $id");
		return true;

	}





	public function find_by_id($id) {

		$this->db->where('id',$id);

   	 	$sql = $this->db->get('faculties');

   	 	$row = $sql->row();

   	 	if ($row->id>0){

			$faculty = new FacultyModel();
			$faculty->id = $row->id;
			$faculty->firstName = $row->firstName;
			$faculty->middleName = $row->middleName;
			$faculty->lastName = $row->lastName;
			$faculty->profAnswers = $this->ProfAnswersSelf($row->id);
			$faculty->instructAnswers = $this->InstructAnswersSelf($row->id);


			return $faculty;

   	 	}else {
   	 		return new FacultyModel();
   	 	}
	}

}
