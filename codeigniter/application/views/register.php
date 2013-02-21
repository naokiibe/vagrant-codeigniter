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
		<?php 
		$this->load->helper('form');
		$attributes = array('class' => 'login',
							'id' => 'login',
						);
		echo form_open('twitter/showRegisterResults', $attributes);
		?>
			<div class="email">
				E-mail: 
				<?php
				echo form_input('email', '');
				?>
			</div>		
			<div class="password">
				Password:
				<?php
				$password = array(
					'name'        => 'password',
					'id'          => 'password',
					);
				echo form_password($password);
				?>
			</div>
			<div class="confirm">
				Confirm: 
				<?php
				$confirm = array(
					'name'        => 'confirm',
					'id'          => 'confirm',
					);
				echo form_password($confirm);
				?>
			</div>
			<div class="submit">
				<?php
				$js = 'onClick="passwordCheck()"';
				echo form_submit('submit', 'Ok', $js);
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