
<?php include ("Microservices_de/log_In.php"); ?>
<?php include ("Microservices_de/registrierung.php"); ?>
<?php include ("Microservices_de/navigationsmenu.php"); ?>

<!DOCTYPE html>
<html lang=de>
	<head>
		<meta charset=UTF-8>
		<title>registry</title>
	</head>
	
	<body>
		<article>
			<form action="register.php">
				<fieldset>
					<legend>persönliche Informationen:</legend>
					Vorname:<br>
					<input type="text" name="firstname" value="Max"><br>
					Nachname:<br>
					<input type="text" name="lastname" value="Mustermann"><br>
					Nutzername:<br>
					<input type="text" name="username" value="Maxi1988"><br>
					Kennwort:<br>
					<input type="password" name="password"><br><br>
					<a href="#">Ich bin schon registriert</a><br><br>
					<input type="submit" value="registrieren">
					<input type="reset" value="Reset">
				</fieldset>
			</form> 
		</article>
	</body>
	
</html>