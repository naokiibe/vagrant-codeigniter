<!DOCTYPE HTML>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="This is HTML Practice.">
	<title>HTML Practice</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<link rel="stylesheet" href="/../bootstrap/css/bootstrap.min.css">
	<script src="/../bootstrap/js/bootstrap.min.js"></script>

</head>
<body style="padding-top:40px">
<div class="container">
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
    	<div class="container">
			<a href="" class="brand">HTML Practice</a>
			<ul class="nav">
				<li class="active"><a href="">Home</a></li>
				<li><a href="#myModal"　data-toggle="modal">メニュー</a></li>
				<li><a href="">メニュー</a></li>
				<li><a href="">メニュー</a></li>
			</ul>
		</div>
		</div>
	</div>

<!-- Button to trigger modal -->
<a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>
 


<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Modal header</h3>
  </div>
  <div class="modal-body">
    <p>One fine body…</p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
    <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Save changes</button>
  </div>
</div>
</div>

</body>
</html>