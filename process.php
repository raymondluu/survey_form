<html>
	<head>
		<title>Survey Form</title>
		<link rel="stylesheet" type="text/css" href="process.css">
	</head>
	<body>
		<div class="container">
			<p class="fancy">Submitted Information</p>
			<div class="description">
				<p>Name:</p>
				<p>Dojo Location:</p>
				<p>Favorite Language:</p>
				<p>Comments:</p>
			</div>
			<div class="user_info">
				<?= "<p>" . $_POST["your_name"] . "</p>" ?>
				<?= "<p>" . $_POST["dojo_location"] . "</p>" ?>
				<?= "<p>" . $_POST["favorite_language"] . "</p>" ?>
				<?= "<p>" . $_POST["comments"] . "</p>" ?>
			</div>
			<form action="index.php">
				<input type="submit" value="Go Back">
			</form>
		</div>
	</body>
</html>