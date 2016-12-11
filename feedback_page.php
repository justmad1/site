<!DOCTYPE html>
<html>
<head>
	<?php 
	$title = "Обратная связь";
	require_once "Blocks/head.php"; 
	?>

	<script src="js/jquery-3.1.1.slim.min.js"></script>

	<script> $(document).ready (function () { 
		$("#done").click (function () {
			$('#messageShow').hide ();
			var name = $("#name").val ();
			var email = $("#email").val (); 
			var subject = $("#subject").val (); 
			var message = $("#message").val (); 
			var fail = ""; 
			if (name.length < 3) fail = "Имя не меньше 3 символов"; 
			else if (email.split ('@').length - 1 == 0 || email.split ('.').length - 1 == 0) 
				fail = "Вы ввели некорректный адрес эл. почты"; 
			else if (subject.length < 4) fail = "Тема не менее 4 символов"; 
			else if (message.length < 5) fail = "Сообщение не менее 15 символов"; 
			if (fail != "") { 
				$('#messageShow').html (fail + "<div class='clear'><br></div>"); 
				$('#messageShow').show (); return false; 
			} 

			$.ajax ({ 
				url: 'ajax/feedback.php',
				type: 'POST', 
				cache: false, 
				data: {'name': name, 'email': email, 'subject': subject, 'message': message}, 
				dataType: 'html', 
				success: function (data) { 
					$('#messageShow').html (data + "<div class='clear'><br></div>"); 
					$('#messageShow').show (); 
				} 
			}); 
		}); 
	}); 
</script>﻿

</head>
<body>

	<?php require_once "Blocks/header.php"; ?>

	<div id="feedback">
		<input id="name" type="text" placeholder="Имя" name="name"><br>
		<input id="email" type="text" placeholder="Email" name="email"><br>
		<input id="subject" type="text" placeholder="Тема сообщения" name="subject"><br>
		<textarea placeholder="Введите сюда Ваше сообщение" name="message" id="message"></textarea><br>
		<input type="button" name="done" id="done" value="Отправить">
		<div id="messageShow"></div>
	</div>

	<?php require_once "Blocks/footer.php" ?>

	
</body>
</html>
