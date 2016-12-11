<!DOCTYPE html>
<html>
<head>
	<?php 
	$title = "techForum";
	require_once "Blocks/head.php";
	require_once "db/functions.php";

	$news = getNews(1);

	?>
</head>
<body>
	<script type="text/python">
		print("Hello")
	</script>
	<?php require_once "Blocks/header.php"; ?>
	<div id="wrapper">
		<div id="leftCol">

			<?php
			for($i = 0; $i < count($news); $i++){
				if($i == 0)
					echo "<div id=\"mainArticle\">";
				else 
					echo "<div class=\"article\">";
				echo '<a href="">
				<img src="Media/Images/'.$news[$i]["id"].'.jpg" alt="Статья'.$news[$i]["id"].'">
				<h2>'.$news[$i]["title"].'</h2>
				<p>'.$news[$i]["preview"].'</p></a> 
			</div><div class="clear"><br><br></div>';
		}
		?>

		</div>
		<?php require_once "Blocks/rightcol.php" ?>
	</div>

<?php require_once "Blocks/footer.php" ?>
</body>
</html>
