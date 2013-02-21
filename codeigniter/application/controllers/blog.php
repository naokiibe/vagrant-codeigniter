<?php
class Blog extends CI_Controller{
	public function index(){
		$this->load->view('login');
	}

	public function showResults(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$confirm = $this->input->post('confirm');
		if($password == $confirm){
			$data = array(
							'email' => $email, 
							'password' => $password
						);
			$this->load->view('success', $data);
		}else{
		}
	}

	private function errorMessage(){
		echo 'パスワードを確認してください！<br>';
		$js = 'onClick="index()"';
		echo form_button('cancel', 'Cancel', $js);
	}

	public function comments($contents){
		echo $contents;
	}

	public function add($a, $b){
		echo ($a+$b);
	}

	public function subscribe($a, $b){
		echo ($a-$b);
	}

	public function multiple($a, $b){
		echo ($a*$b);
	}

	public function calculate($a, $b){
		$this->add($a, $b);
		$this->subscribe($a, $b);
		$this->multiple($a, $b);
	}


}
?>