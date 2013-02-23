<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="This is login page.">
	<title>Login</title>
</head>
<body>
	<div class="contents">
		<div class="title"><h1>新規登録画面</h1></div>
		<!-- <div class="message"><?php echo validation_errors(); ?></div> -->
		<?php 
		$this->load->helper('form');
		$attributes = array('class' => 'login',
							'id' => 'login',
						);
		echo form_open('twitter/showRegisterResults', $attributes);
		?>
			<div class="email">
				<h5>E-mail:</h5>
				<?php
				$email = array(
					'name'        => 'email',
					'id'          => 'email',
					'value'       => set_value('email'),
					);
				echo form_input($email);
				?>
			</div>
			<div class="password">
				<h5>Password(4~10文字):</h5>
				<?php
				$password = array(
					'name'        => 'password',
					'id'          => 'password',
					'value'       => '',
					);
				echo form_password($password);
				?>
			</div>
			<div class="confirm">
				<h5>Confirm:</h5>
				<?php
				$confirm = array(
					'name'        => 'confirm',
					'id'          => 'confirm',
					'value'       => '',
					);
				echo form_password($confirm);
				?>
			</div>
			<div class="submit">
				<?php
				echo form_submit('submit', 'Ok');
				?>
			</div>
			<div class="cancel"><?php echo form_button('cancel', 'Cancel');?></div>
		<?php echo form_close();?>
	</div>
	<script>
	function passwordCheck(){
		if (login.password.value != login.confirm.value) {
			alert('パスワードを確認して下さい！');
			return false;
		}else{
			return true;
		}
	}
	</script>
</body>
</html>