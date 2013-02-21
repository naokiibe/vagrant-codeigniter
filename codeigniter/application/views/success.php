<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="This is login page.">
	<title>Login</title>
</head>
<body>
	<div class="contents">
		<div class="title"><h1>Success!</h1></div>
		以下の内容で登録されました．
		・E-mail: <?php echo $email ?>
		・Password: <?php echo $password ?>

		<?php
		$this->load->helper('url');
		echo anchor('twitter/index', 'ログイン画面へ');
		?>

		
	</div>
</body>
</html>