<?php

class ScheduleModel extends CI_Model{
	

	var $id = 0;
	var $days = 0;
	var $from_time = '';
	var $to_time = '';


	function __construct(){

		parent::__construct();


		$this->load->database();

	}



	public function GetAllByFaculty($id){

		$this->db->where('faculty_id',$id);
		$query = $this->db->get('schedules');

		$rows = array();



		foreach($query->result() as $row){

				$schedules = new ScheduleModel();
				$schedules->id = $row->id;
				$schedules->days = $row->days;
				$schedules->from_time = $row->from_time;
				$schedules->to_time = $row->to_time;

				$rows[] = $schedules;
		}

		return $rows;

	}

	public function GetAll(){


		$query = $this->db->get('schedules');

		$rows = array();



		foreach($query->result() as $row){

				$schedules = new ScheduleModel();
				$schedules->id = $row->id;
				$schedules->days = $row->days;
				$schedules->from_time = $row->from_time;
				$schedules->to_time = $row->to_time;

				$rows[] = $schedules;
		}

		return $rows;
	}

	public function Save($params){

		$schedules = array(
					
			'days' => $params['days'],
			'from_time' => $params['from_time'],
			'to_time' => $params['to_time'],
			'faculty_id' => $params['faculty']
			);


		
		$this->db->insert('schedules',$schedules);
		$lastInsertedID = $this->db->insert_id();



		return $lastInsertedID;
	}

	public function delete($id){
		$this->db->delete('schedules', array('id' => $id)); 
		return $this->db->affected_rows();
	}

	public function update($params,$id){
		$this->db->update('schedules', $params, "id = $id");
		return $this->db->affected_rows();

	}

	public function find_by_id($id) {

		$this->db->where('id',$id);

   	 	$sql = $this->db->get('schedules');

   	 	$row = $sql->row();

   	 	if ($row->id>0){

			$schedules = new ScheduleModel();
			$schedules->id = $row->id;
			$schedules->days = $row->days;
			$schedules->time = $row->time;
		

			return $schedules;

   	 	}else {
   	 		return new ScheduleModel();
   	 	}
	}

}