<?php include 'managerheader.php'; ?>

<!DOCTYPE html>
<!--Allows manager to add a category to the database. -->
<html>
	<body>
			<h1>Add Category </h1>
			<form method="POST" action="addcategoryconfirm.php">

			<h4>Category:</h4>
            <input type="text" name="category_name" required><br><br>
			<input id="button" type="submit" name="submit" value="Submit">
			</form>
		
		<?php include '../footer.php'; ?>

	</body>

</html>
