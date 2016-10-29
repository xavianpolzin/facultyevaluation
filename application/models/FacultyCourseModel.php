<?php

class FacultyCourseModel extends CI_Model{


  var $faculty_id = 0;
  var $course_id = 0 ;

  function __construct(){

		parent::__construct();

		$this->load->database();
	}

  function Save($params){
		$this->db->insert('faculty_course',$params);
  }

  function FindByFaculty($facultyId){
      //$sql = $this->db->get_where('FacultyCourse',array('faculty_id'=>$facultyId));
      $sql = $this->db->select("*")->from('faculty_course')->join('course','course.id=faculty_course.course_id')->where(array('faculty_id'=>$facultyId))->get();

      $rows = array();

      foreach ($sql->result_array() as $row) {
          $rowx = array();
          $rowx['name']=$row['name'];
          $rows[] = $rowx;
      }

      return $rows;
  }



}
