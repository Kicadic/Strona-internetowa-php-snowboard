<?php
session_start();
if((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
{	
	header('Location:index.php');
	exit();
}
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
</head>

<body>


<form action="wejscie.php" method="post">
	Login: <br> <input type="text" name="login"/> </br>
	Hasło: <br> <input type="password" name="haslo"/> </br> </br>
	<input type="submit" value= "Zaloguj się" />
</form>
<br>
		<form action="registration.php" method="post">
			<input type="submit" value= "Rejestracja" />
		</form>

<?php
	if(isset($_SESSION['blad']))
	{
	echo $_SESSION['blad'];
	}
?>

</body>
</html>