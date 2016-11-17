<?php



class EvaluationModel extends CI_Model{



	var $id = 0;
	var $type = 'Student';
	var $date;
	var $evaluatedBy;
	var $profScore;
	var $instrucScore;
	var $adminiScore;

	function __construct(){


		parent::__construct();

		$this->load->database();
	}



	public function SaveProfAnswer($id,$answer,$number){


			$data = array('evaluation_id'=>$id);

			if($answer == 0) $data['choice_1'] = 0;	
			if($answer == 1) $data['choice_2'] = 1;	
			if($answer == 2) $data['choice_3'] = 2;	
			if($answer == 3) $data['choice_4'] = 3;
			if($answer == 4) $data['choice_5'] = 4;
			if($answer == 5) $data['choice_6'] = 5;		


			$data['num'] = $number;

			$this->db->insert('professional_answer',$data);
	}


	public function SaveAdminiAnswer($id,$answer,$number){


			$data = array('evaluation_id'=>$id);

			if($answer == 0) $data['choice_1'] = 0;	
			if($answer == 1) $data['choice_2'] = 1;	
			if($answer == 2) $data['choice_3'] = 2;	
			if($answer == 3) $data['choice_4'] = 3;
			if($answer == 4) $data['choice_5'] = 4;
			if($answer == 5) $data['choice_6'] = 5;		


			$data['num'] = $number;

			$this->db->insert('administrative_answer',$data);
	}


	public function SaveInstructAnswer($id,$answer,$number){


			$data = array('evaluation_id'=>$id);


			if($answer == 0) $data['choice_1'] = 0;	
			if($answer == 1) $data['choice_2'] = 1;	
			if($answer == 2) $data['choice_3'] = 2;	
			if($answer == 3) $data['choice_4'] = 3;
			if($answer == 4) $data['choice_5'] = 4;
			if($answer == 5) $data['choice_6'] = 5;	

			$data['num'] = $number;	

			$this->db->insert('instructional_answer',$data);

	}


	public function Save($params){



		$this->db->insert('evaluation',$params);
		//INSERT INTO(id) values ('0')

		$lastInsertedID = $this->db->insert_id();



		return $lastInsertedID;




	}


}
