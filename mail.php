<?php
$to      = 'treider26@o2.pl';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Grzegorz Karasek</title>
	<meta name="description" content="Prezentacja strony www">
	<meta name="keywords" content="Grzegorz Karasek, IT, strony internetowe na zlecenie">
	<meta name="author" content="G.K.">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster&amp;subset=latin-ext" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="jquery.scrollTo.min.js"></script>

	<script>

	jQuery(function($)
		{
			//zresetuj scrolla
			$.scrollTo(0);
			
			$('#about').click(function() { $.scrollTo($('#about2'), 900); });
	
			$('.scrollup').click(function() { $.scrollTo($('body'), 1000); });
			$('.robo').click(function() { $.scrollTo($('body'), 1000); });
			$('#contact').click(function() { $.scrollTo($('#cont'), 900); });
		}
		);

	//pokaz przycisk robota
	$(window).scroll(function()
		{
			if($(this).scrollTop()>300) $('.scrollup').fadeIn() && $('.robo').fadeIn();
			else $('.scrollup').fadeOut() && $('.robo').fadeOut();		
		}
		);

	
</script>
</head>
<body>
	<div class="container">
	<div id="first">
		<p class="robo"></p>
		<p class="scrollup"></p>

	<div id="design">
		<p>Design by - Grzegorz Karasek</p>
		<p id="I-am">Hi! E-mail send.</p>
		<div id="pusto3">
		
		<img id="email-send" src="emai.png" alt=""><br>
		<a href="index.html" id="back">Back<a>
	</div>
		

	</div>
<script src="jquery-3.2.1.min.js"></script>
<script src="memory.js"></script>
</body>
</html>