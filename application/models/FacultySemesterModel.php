<?php

class FacultySemesterModel extends CI_Model{


  var $faculty_id = 0;
  var $semester = 0 ;

  function __construct(){

		parent::__construct();

		$this->load->database();
	}

  function Save($params){
		$this->db->insert('faculty_semester',$params);
  }

 function DeleteByFaculty($facultyId){
    $this->db->delete('faculty_semester',array('faculty_id'=>$facultyId));
    return $this->db->affected_rows();
  }

function FindByFaculty($facultyId){
      $sql = $this->db->get_where('faculty_semester',array('faculty_id'=>$facultyId));

      $rows = array();

      foreach ($sql->result_array() as $row) {
          $rowx = array();
          $rowx['name']=$row['semester'];
          $rows[] = (object)$rowx;
      }

      return $rows;
  }

}
