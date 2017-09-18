<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form-boutique</title>
</head>
<body>
	<form method="POST" action="lib/connection.php">
		
		<label for="name">Nom du produit</label>
		<input type="text" name="name" id="name"/>

		<label for="price">Prix</label>
		<input type="number" name="price" id="price"/>

		<label for="image">Nom du produit</label>
		<input type="text" name="image" id="image"/>

		
		<button type="submit" name="valider" id="valider">Send</button>

	</form>

</body>
</html>