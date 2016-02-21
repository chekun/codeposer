<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome to CodePoser</title>
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo asset_url('css/app.css') ?>">
</head>
<body>

	<section class="hero is-fullheight">
	  	<div class="hero-content">
	    	<div class="container">
	      		<h1 class="title">
	        		CodePoser
	      		</h1>
	      		<h2 class="subtitle">
	        		A better way to build modern CodeIgniter Applications
	      		</h2>
	      		<div class="content">
	      			<p>The page you are looking at is being generated dynamically by CodePoser.</p>
					<p>If you would like to edit this page you'll find it located at:</p>
					<blockquote>resources/views/welcome_message.php</blockquote>
					<p>The corresponding controller for this page is found at:</p>
					<blockquote>app/controllers/Welcome.php</blockquote>
					<p>If you are exploring CodePoser for the very first time, you should start by reading the <a href="https://codeigniter.com/user_guide/">CodeIgniter Guide</a> as well as <a href="http://codeposer.chekun.me/">CodePoser Guide</a>.</p>
					<p class="is-text-right">Page rendered in <span class="tag is-info">{elapsed_time}</span> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <span class="tag is-success">' . CI_VERSION . '</span>' : '' ?></p>
	      		</div>
	    	</div>
	</section>

</body>
</html>
