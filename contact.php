<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="keywords" content="contact, email">
		<meta name="description" content="Contact form for Rose Weixel, web developer.">
		<title>Contact &#124; Rose Weixel</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/device_media_queries.css">
		<!--[if lt IE 9]!>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
		<header>
			<h1>Rose Weixel</h1>
			<h2>web developer</h2>
			
			<!-- links -->
			<nav role="navigation">
				<ul>
					<li><a href="index.html">About</a></li>
					<li><a href="resume.html">Resume</a></li>
					<li><a id="current_page" href="contact.php">Contact</a></li>
					<li><a href="travels.html">Travels</a></li>
				</ul>
			</nav>
		</header>
		<div id="main_content">
			<div class="wrapper">
				<section class="col3">
					<form method="post" action="mailer.php">
						<input type="text" name="name" placeholder="your name" required>
						<input type="email" name="email" placeholder="your email address" required>
						<input type="text" name="subject" placeholder="subject" required>
						Message: <textarea rows="15" name="message"></textarea>
						<div id="verify_and_send" class="clearfix">
							<input type="text" name="verify" class="verif_box" placeholder="verify you're human" required>
							<img class="verif_img" src="verificationimage.php?<?php echo rand(0,9999);?>" alt="verification image">
							<input type="submit" value="Send">
						</div>
					</form>
				</section>
			</div>
		</div>
		<footer>
			<div class="wrapper clearfix">
				<span class="copyright">&copy; 2014 Rose Weixel</span>
				<div id="social">
					<a class="gplus" href="http://google.com/+RoseWeixel" target="_blank" title="Google Plus">Google Plus</a>
					<a class="link" href="http://www.linkedin.com/in/roseweixel/" target="_blank" title="LinkedIn">LinkedIn</a>
					<a class="twitt" href="https://twitter.com/RoseWeixel" target="_blank" title="Twitter">Twitter</a>
					<a class="ghub" href="https://github.com/roseweixel" target="_blank" title="GitHub">GitHub</a>
				</div>
			</div>
		</footer>
	</body>
</html>