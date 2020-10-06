<?php
session_start();

if(isset($_POST['email']))
{
	//Udana walidacja
	$ok=true;
	
	//Poprawnosc loginu
	$nazwa = $_POST['nazwa'];
	
	//Sprawdzenie długosci nicka
	if((strlen($nazwa)<3) || (strlen($nazwa)>20))
		
		{
			$ok = false;
			$_SESSION['e_nazwa'] = "Login musi posiadać od 3 do 20 znaków!";
		}
		
		
		$email = $_POST['email'];
		$emailB = filter_var($email,FILTER_SANITIZE_EMAIL); //sprawdzenie czy to email
		
		if((filter_var($emailB,FILTER_VALIDATE_EMAIL) == false) || ($emailB!=$email))
		{
			$ok = false;
			$_SESSION['e_email'] = "Podaj poprawny adres e-mail!";
		}
		
		if(ctype_alnum($nazwa)==false)
		{
			$ok = false;
			$_SESSION['e_nazwa'] = "Nazwa użytkownika może składać się tylko z liter i cyfr";
		}
		
		//Poprawnosc hasel
		
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		
		if((strlen($haslo1)<8) || (strlen($haslo1)>20))
		{
			$ok = false;
			$_SESSION['e_haslo'] = "Hasło musi posiadać od 8 do 20 znaków";
		}
		if($haslo1!=$haslo2)
		{
			$ok = false;
			$_SESSION['e_haslo'] = "Podane hasła nie są identyczne!";
		}
		
		$haslo_hash = password_hash($haslo1,PASSWORD_DEFAULT); //hashowanie haseł
		
		//Akceptacja regulaminu
		
		if(!isset($_POST['regulamin']))
		{
			$ok = false;
			$_SESSION['e_regulamin'] = "Nie zaakceptowano regulaminu!";	
		}
		
		//Recaptcha
		
		$secret = "6LdmHJ8UAAAAADBXqgJ9epKSC95nigdNVD7UYMd-";
		//file get - zmiana pliku na ciąg znakow
		$sprawdzenie = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
		
		$odpowiedz = json_decode($sprawdzenie);
		
		if($odpowiedz->success == false)
		{
			$ok=false;
			$_SESSION['e_bot']="Potwierdź,że nie jesteś botem!";
		}
			
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		
		try		//przechwytywanie wyjątków
		{
			$_SESSION['polaczenie'] = new mysqli($host,$db_user,$db_password,$db_name);
			if($_SESSION['polaczenie']->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				//Czy email juz istnieje?
				
				$rezultat = $_SESSION['polaczenie']->query("SELECT id FROM persons WHERE email='$email'");
				if(!$rezultat) throw new Exception($_SESSION['polaczenie']->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili>0)
					
				{
					$ok=false;
					$_SESSION['e_email']="Istnieje już konto o takim email";
				}
				
				//Czy login jest zarezerwowany?
				
				$rezultat = $_SESSION['polaczenie']->query("SELECT id FROM persons WHERE user='$nazwa'");
				if(!$rezultat) throw new Exception($_SESSION['polaczenie']->error);
				
				$ile_takich_nazw = $rezultat->num_rows;
				if($ile_takich_nazw>0)
					
				{
					$ok=false;
					$_SESSION['e_nazwa']="Istnieje już taka nazwa użytkownika";
				}
				
		if($ok == true) //wszystkie testy zaliczone
		{
			//dodajemy user'a do bazy
			
			if($_SESSION['polaczenie']->query("INSERT INTO persons VALUES(NULL,'$nazwa','$haslo_hash','$email')"))
			
			{
				$_SESSION['prawidlowarejestracja']=true;
				header('Location:witaj.php');				
			}
				
				
			else
			{
				throw new Exception($_SESSION['polaczenie']->error);
			}
		}
				
				$_SESSION['polaczenie']->close();
			}
		}
		catch(Exception $err)
		{
			
			echo'<span style="color:red;"> Błąd serwera! Zajerestruj się później.</span>';
			echo'<br /> Informacja dla dev:'.$err;
		}

	
}

?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<title> Rejestracja - załóż konto! </title>
<script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>
  <script>
  grecaptcha.ready(function() {
      grecaptcha.execute('reCAPTCHA_site_key', {action: 'homepage'}).then(function(token) {
         ...
      });
  });
  </script>
  <style>
	.error
	{
		color:red;
		margin-top:10px;
		margin-bottom:10px;
	}
  
  </style>
</head>

<body>

<form method="post">

	Nazwa użytkownika: <br /> <input type="text" name ="nazwa" /> <br />
	
	<?php
		if(isset($_SESSION['e_nazwa']))
		{
				echo '<div class="error">'.$_SESSION['e_nazwa'].'</div>';
				unset($_SESSION['e_nazwa']);		
		}
	?>
	
	E-mail: <br /> <input type="text" name="email" /> <br />
	
		<?php
		if(isset($_SESSION['e_email']))
		{
				echo '<div class="error">'.$_SESSION['e_email'].'</div>';
				unset($_SESSION['e_email']);		
		}
	?>
	
	Hasło: <br /> <input type="password" name="haslo1" /> <br />
	
		<?php
		if(isset($_SESSION['e_haslo']))
		{
				echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
				unset($_SESSION['e_haslo']);		
		}
	?>
	
	Powtórz hasło: <br /> <input type="password" name="haslo2" /> <br />
	<label>
	<input type="checkbox" name="regulamin" /> Akceptuję regulamin
	</label>
	
	<?php
		if(isset($_SESSION['e_regulamin']))
		{
				echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
				unset($_SESSION['e_regulamin']);		
		}
	?>
	
	<div class="g-recaptcha" data-sitekey="6LdmHJ8UAAAAAMfH3PusAqcV6fzTFyDCJwtRCaSr"></div>
	
	<?php
		if(isset($_SESSION['e_bot']))
		{
				echo '<div class="error">'.$_SESSION['e_bot'].'</div>';
				unset($_SESSION['e_bot']);		
		}
	?>
	
	<br >
	<input type="submit" value="Zajerestruj się" />
	</form>

</form>

</body>
</html>