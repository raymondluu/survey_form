<html>
	<head>
		<title>Survey Form</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="container">
			<form action="process.php" method="post">
				Your Name:<input class="text" type="text" name="your_name">
				Dojo Location:
				<select class="dojo" name="dojo_location">
					<option value="seattle">Seattle</option>
					<option value="sanfrancisco">San Francisco</option>
				</select>
				Favorite Language:
				<select class="lang" name="favorite_language">
					<option value="javascript">Javascript</option>
					<option value="php">PHP</option>
				</select>
				Comment (Optional):
				<textarea name="comments" rows="5" cols="50"></textarea>
				<input class="button" type="submit" value="Submit">
			</form>
		</div>
	</body>
</html>