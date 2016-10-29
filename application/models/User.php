<?php


class User extends CI_Model{

	var $accessLevel = UserAccessLevel::ADMIN;
	var $username = '';
	var $fname = '';
	var $lname = '';
	var $password = '';
	var $facultyId = 0;


	function __construct(){


		parent::__construct();

		$this->load->database();
	}

	public function LoginUsingUsernameAndPassword($username,$password)
	{
		//$row = $this->db->get_where('users',array('username'=>$username,'password'=>$password))->row();
		$row = $this->db->get_where('users',array('username'=>$username))->row();

		$user = new User();

		if($row ){

		$this->load->library('encrypt');
		$passwordx= $this->encrypt->decode($row->password);

		if($passwordx == $password){

			$user->id= $row->id;
			$user->accessLevel = $row->accessLevel;
			$user->username = $row->username;
			$user->facultyId = $row->faculty_id;
		}

		}


		return $user;
	}


	public function GetAll(){


		$query = $this->db->get('users');

		$rows = array();

		foreach($query->result() as $row){

				$users = new User();
				$users->id = $row->id;
				$users->username = $row->username;
				$users->fname = $row->fname;
				$users->lname = $row->lname;
				$users->password = $row->password;
				$users->accessLevel = $row->accessLevel;

				$rows[] = $users;
		}

		return $rows;
	}

	public function Save($params){

		$this->load->library('encrypt');
		$password = $this->encrypt->encode($params['password']);


		$users = array(


			'username' => $params['username'],
			'fname' => $params['fname'],
			'lname' => $params['lname'],
			'password' => $password,

			'accessLevel' => $params['accessLevel'],
			'faculty_id' => $params['faculty']
			);



		$this->db->insert('users',$users);
		$lastInsertedID = $this->db->insert_id();



		return $lastInsertedID;
	}

	public function delete($id){
		$this->db->delete('users', array('id' => $id));
		return $this->db->affected_rows();
	}

	public function update($params,$id){

	$users = array(


			'username' => $params['username'],
			'fname' => $params['fname'],
			'lname' => $params['lname'],
			'accessLevel' => $params['accessLevel'],
			'faculty_id' => $params['faculty']
			);

		$this->db->update('users', $users, "id = $id");
		return $this->db->affected_rows();

	}
	public function UsernameExists($username){

		$res =  $this->db->get_where('users', array('username' => $username));

		return $res->num_rows() > 0 ? true: false;
	}

	public function find_by_id($id) {

		$this->db->where('id',$id);

   	 	$sql = $this->db->get('users');

   	 	$row = $sql->row();

   	 	if ($row && $row->id>0){

			$users = new User();
			$users->id = $row->id;
			$users->username = $row->username;
			$users->fname = $row->fname;
			$users->lname = $row->lname;
			$users->password = $row->password;
			$users->accessLevel = $row->accessLevel;
			$users->faculty_id = $row->faculty_id;


			return $users;

   	 	}else {
   	 		return new User();
   	 	}
	}



}

class UserAccessLevel{


	const  ADMIN = 'admin';
	const  FACULTY = 'faculty';
	const  STAFF = 'staff';

}
