<?php 
class Userdata extends CI_Model
{
	private $id = null;
	private $email = null;
	private $password = null;
	private $date = null;

	public function setEmail($str)
	{
		$this->email = $str;
	}

	public function setPassword($str)
	{
		$this->password = $str;
	}

	public function register()
	{
		if ($this->email != null && $this->password != null) {
			$user = array(
				'email' => $this->email,
				'password' => $this->password
			);
			$query = $this->db->insert('users', $user);
			return $query;
		}
		return false;
	}

	public function login()
	{
		if ($this->email != null && $this->password != null) {
			$query = $this->db->get_where('users', array('email' => $this->email));
			foreach ($query->result() as $row) {
				if($row->password == $this->password){
					return true;
				}
			}
		}
		return false;
	}
}
?>