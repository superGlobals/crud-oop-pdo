<?php 

class Users{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function insert($data){
		$this->db->query("INSERT INTO users(firstname, lastname, username, password) VALUES (:firstname, :lastname, :username, :password)");

		$this->db->bind('firstname', $data['firstname']);
		$this->db->bind('lastname', $data['lastname']);
		$this->db->bind('username', $data['username']);
		$this->db->bind('password', $data['password']);

		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}

	public function getAll(){
		$this->db->query("SELECT * FROM users ORDER BY id DESC");

		$results = $this->db->fetchAll();
		return $results;
	}

	public function delete($id){
		$this->db->query("DELETE FROM users WHERE id =:id");

		$this->db->bind('id', $id);

		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}


	public function getSingle($id){
		$this->db->query("SELECT * FROM users WHERE id =:id");

		$this->db->bind('id', $id);

		$row = $this->db->fetch();

		return $row;
	}

	public function update($id, $data){
		$this->db->query("UPDATE users SET firstname =:firstname, lastname =:lastname, username =:username, password =:password WHERE id =:id");

		$this->db->bind('firstname', $data['firstname']);
		$this->db->bind('lastname', $data['lastname']);
		$this->db->bind('username', $data['username']);
		$this->db->bind('password', $data['password']);
		$this->db->bind('id', $id);

		if ($this->db->execute()) {
			return true;
		}else{
			return false;
		}
	}	


	public function login($username, $password){
		$this->db->query("SELECT * FROM users WHERE username =:username AND password =:password");
		$this->db->bind('username', $username);
		$this->db->bind('password', $password);


		if ($this->db->rowCount() > 0) {
			$row = $this->db->fetch();

			return $row->id;

		}else{
			return false;
		}
	}

}