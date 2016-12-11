<!DOCTYPE html>
<html>
<head>
	<?php 
		$title = "О нас";
		require_once "Blocks/head.php"; 
	?>
</head>
<body>

	<?php require_once "Blocks/header.php"; ?>

	<div id="wrapper">
		<div id="counter">

				<div class="bl">
					<div class="text">лет на рынке</div>
					<div data-num="228" class="number">0</div>
				</div>

				<div class="bl">
					<div class="text">клиентов</div>
					<div data-num="1488" class="number">0</div>
				</div>

				<div class="bl">
					<div class="text">лет гарантии</div>
					<div data-num="666" class="number">0</div>
				</div>

				<div class="bl">
					<div class="text">успешных проектов</div>
					<div data-num="420" class="number">0</div>
				</div>
				
				<div class="bl">
					<div class="text">человек в команде</div>
					<div data-num="322" class="number">0</div>
				</div>
				
			</div>
	</div>

	<?php require_once "Blocks/footer.php" ?>

	<div class="main">
	</div>

<script src="http://yastatic.net/jquery/2.1.3/jquery.min.js"></script>
<script src="js/numcount.js"></script>

</body>
</html>
