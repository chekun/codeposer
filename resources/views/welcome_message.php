<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodePoser</title>
	<link rel="stylesheet" href="<?php echo asset_url('css/app.css') ?>">
</head>
<body>

<div id="container">
	<h1>Welcome to CodePoser!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>resources/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>app/controllers/Welcome.php</code>

		<p>If you are exploring CodePoser for the very first time, you should start by reading the <a href="https://codeigniter.com/user_guide/">CodeIgniter Guide</a> as well as <a href="http://codeposer.chekun.me/">CodePoser Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>
