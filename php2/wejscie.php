<?php

	session_start();
	
	if((!isset($_POST['login'])) || (!isset($_POST['haslo'])))
	{
		header('Location:index.php');
		exit();
	}
	
	require_once "connect.php"; //dołączenie connect.php do tego pliku
	
	$_SESSION['polaczenie'] = @new mysqli($host,$db_user,$db_password,$db_name); //przesylanie danych 
	
	if($_SESSION['polaczenie']->connect_errno!=0)
	{
		echo "Error:".$_SESSION['polaczenie']->connect_errno;
	}
	
	else
	{
		$login = $_POST['login'];
		$haslo = $_POST['haslo'];
		
		$login = htmlentities($login, ENT_QUOTES, "UTF-8"); //encje html

		if($rezultat = @$_SESSION['polaczenie']->query(
		sprintf("SELECT * FROM persons WHERE user='%s'",
		mysqli_real_escape_string($_SESSION['polaczenie'],$login))))
	{
				$users = $rezultat->num_rows; //ilosc zwroconych wierszy
				if($users>0)
				{
					$wiersz = $rezultat->fetch_assoc(); //tablica asocjacyjna(pobierz dane z bazy)
					
					if(password_verify($haslo,$wiersz['haslo']))
					{

						$_SESSION['zalogowany'] = true;
						
						$_SESSION['id'] = $wiersz['id'];
						$_SESSION['user'] = $wiersz['user'];
						
					
						unset($_SESSION['blad']);
						$rezultat->free_result(); //zwolnienie pamięci
						header('Location:index.php');
					}
					
					else
					{
					$_SESSION['blad'] = '<span style="color:red"> Nieprawidłowy login lub hasło!</span>';
					header('Location: zaloguj.php');
					}	
				}
				
		else
		{
			$_SESSION['blad'] = '<span style="color:red"> Nieprawidłowy login lub hasło!</span>';
			header('Location:zaloguj.php');
		}
	
	}		
	
		$_SESSION['polaczenie']->close();
	}
	

	
	
?>