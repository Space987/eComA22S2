<<!DOCTYPE html>
<html>
	<head>
		<title> Some Title </title>

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	</head>

	<body>
		Here is the list of foods from our database: 
		<table>
			<tr><th> Id <th></th> Name </th><th> Action </th></tr>
		<?php 
			foreach ($message as $food) {
				echo "<tr><td> $food->id </td> <td> $food->name </td><td>". 
				"<a href='/Food/delete/$food->id'> Delete</a>".
				"</td></tr>";
			}
		?>
		</table>

		<form action='' method='post'>
			Input the new food to add to the list: 
			<input type='text' name='new_food'/><br>
			<input type='submit' name='action'/><br>

			
		</form>

		<a href='/Main/index '> go to Main/index </a>
	</body>
</html>