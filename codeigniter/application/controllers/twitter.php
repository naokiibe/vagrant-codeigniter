<?php
class Twitter extends CI_Controller
{
	public function index() 
	{
		$this->load->helper('form');
		$this->load->view('login');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function showRegisterResults()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$confirm = $this->input->post('confirm');
		if ($password == $confirm) {
			$this->load->model('userdata', 'user', TRUE);
			$this->user->setEmail($email);
			$this->user->setPassword($password);
			$register = $this->user->register();

			$data = array(
							'email' => $email, 
							'password' => $password
						);
			$this->load->view('success', $data);
		} else {
			$this->load->view('register');
		}
	}

	public function login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('userdata', 'user', TRUE);
		$this->user->setEmail($email);
		$this->user->setPassword($password);
		$success = $this->user->login();
		if ($success) {
			echo 'ログイン成功';
		} else {
			echo 'ログイン失敗';
		}
	}
}
?>