<?php
class Twitter extends CI_Controller
{
	public function index() 
	{
		$this->load->helper('form');
		$title = array('title' => 'ログイン画面');
		$this->load->view('login', $title);
	}

	public function register()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->view('register');
	}



	public function showRegisterResults()
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email:', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password:', 'trim|required|min_length[4]|max_length[10]');
		$this->form_validation->set_rules('confirm', 'Confirm:', 'trim|required|matches[password]');
				
		if ($this->form_validation->run() == false) {
			$this->load->view('register');
		} else {
			$data = array(
							'email'    => $this->input->post('email'), 
							'password' => $this->input->post('password')
						);

			$this->form_validation->set_rules('password', 'Password:', 'md5');

			$this->load->helper('security');
			$email = $this->input->post('email');
			$password = do_hash($this->input->post('password'));

			$this->load->model('userdata', 'user', true);
			$this->user->setEmail($email);
			$this->user->setPassword($password);
			$register = $this->user->register();
			
			$this->load->view('success', $data);
		}
	}

	public function login()
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
		log_message('debug', 'aa');
		$this->form_validation->set_rules('email', 'Email:', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password:', 'trim|required|min_length[4]|max_length[10]');

		if ($this->form_validation->run() == true) {
			
			$this->load->helper('security');

			$email = $this->input->post('email');
			$password = do_hash($this->input->post('password'));
			log_message('debug', $password);
			$this->load->model('userdata', 'user', true);
			$this->user->setEmail($email);
			$this->user->setPassword($password);
			$success = $this->user->login();
			if ($success) {
				$this->load->view('home');
				return 0;
			}
		}
		$title = array('title' => 'ログイン失敗');
		$this->load->view('login', $title);
		return 0;
	}
}
?>