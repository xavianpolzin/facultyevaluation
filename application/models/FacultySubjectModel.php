<?php

class FacultySubjectModel extends CI_Model{

    var $faculty_id = 0;
  var $subject_id = 0 ;

  function __construct(){

		parent::__construct();

		$this->load->database();
	}

  function Save($params){
		$this->db->insert('faculty_subjects',$params);
  }


 function DeleteByFaculty($facultyId){
    $this->db->delete('faculty_subjects',array('faculty_id'=>$facultyId));
    return $this->db->affected_rows();
  }

function FindByFaculty($facultyId){
      //$sql = $this->db->get_where('FacultyCourse',array('faculty_id'=>$facultyId));
      $sql = $this->db->select("*")->from('faculty_subjects')->join('subjects','subjects.id=faculty_subjects.subject_id')->where(array('faculty_id'=>$facultyId))->get();

      $rows = array();

      foreach ($sql->result_array() as $row) {
          $rowx = array();
          $rowx['id'] = $row['id']; 
          $rowx['name']=$row['name'];
          $rows[] = (object)$rowx;
      }

      return $rows;
  }



}
