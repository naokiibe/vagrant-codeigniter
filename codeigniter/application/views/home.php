<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="This is login page.">
	<title>Login</title>
</head>
<body>
	<div class="contents">
		<h1 class="title">ホーム画面</h1>
		<div id="form">
			<?php 
			$this->load->helper('form');
			$attributes = array('class' => 'login',
								'id' => 'login',
							);
			echo form_open('twitter/showRegisterResults', $attributes);
			?>
				<div class="text">
					<h5>本文:</h5>
					<?php
					$text = array(
						'name'        => 'text',
						'id'          => 'text',
						'value'       => '',
						);
					echo form_textarea($text);
					?>
				</div>
				<div class="submit">
					<?php
					echo form_submit('post', 'ツイート');
					?>
				</div>
				<div class="cancel"><?php echo form_button('reset', 'リセット');?></div>
			<?php echo form_close();?>
		</div>
		<div id="postlist">
			
		</div>
	</div>
</body>
</html>
