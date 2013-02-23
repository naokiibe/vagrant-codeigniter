<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="This is login page.">
	<title>Login</title>
</head>
<body>
	<div class="contents">
		<div class="title"><h1><?php echo $title;?></h1></div>
		<?php 
		$this->load->helper('form');
		$attributes = array('class' => 'login');
		echo form_open('twitter/login', $attributes);
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
		<div class="submit">
			<?php
			echo form_submit('submit', 'Ok');
			?>
		</div>
		<div class="cancel"><?php echo form_button('cancel', 'Cancel');?></div>
		<?php echo form_close();?>

		<div class="register">
			<?php $this->load->helper('url');
			echo anchor('twitter/register', '新規登録');?>
		</div>
	</div>
</body>
</html>
