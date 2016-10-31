<?php


class FacultySectionModel extends CI_Model{


  var $faculty_id = 0;
  var $section_id = 0 ;

  function __construct(){

		parent::__construct();

		$this->load->database();
	}

  function Save($params){
		$this->db->insert('faculty_section',$params);
  }

 function DeleteByFaculty($facultyId){
    $this->db->delete('faculty_section',array('faculty_id'=>$facultyId));
    return $this->db->affected_rows();
  }

function FindByFaculty($facultyId){
      //$sql = $this->db->get_where('FacultyCourse',array('faculty_id'=>$facultyId));
      $sql = $this->db->select("*")->from('faculty_section')->join('sections','sections.id=faculty_section.section_id')->where(array('faculty_id'=>$facultyId))->get();

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
