﻿<?php

session_start();

?>

<!DOCTYPE HTML>
<html lang="pl">
	<head>
	<meta charset="utf-8"/>
	<title> </title>
	<meta name="description" content="Moja strona o snowboardzie\zainteresowania"/>
	<meta name"keywords" content="Góry,snowboard,zainteresowania"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<link rel="stylesheet" href="style.css" type="text/css" />
 
</script>
	
	</head>

<body>
	
	
<div id="banner">

		
		<h1>Snowboard</h1>
			<div id="witaj">
	<?php
	
	if(isset($_SESSION['zalogowany']))
	{
		echo "<p>Witaj ".$_SESSION['user'].'!</p>';
		
	}
	
	?>
	</div>
		<div id ="nav">
		<?php 
			
			echo '<div class="option"> <a href="index.php" style="text-decoration: none;color: inherit" > Strona główna </a> </div>';
			
			
			echo '<div class="option"> <a href="kurs.php" style="text-decoration: none;color: inherit" > Kurs snowboard </a> </div>';
			
			
			echo '<div class="option"> <a href="sprzet.php" style="text-decoration: none;color: inherit" > Wybór sprzętu </a> </div>';
			
			echo '<div class="option"> <a href="pogoda.php" style="text-decoration: none;color: inherit" > Pogoda </a> </div>';
			
			echo '<div class="option"> <a href="linki.php" style="text-decoration: none;color: inherit" > Wykorzystane linki </a> </div>';
			
			echo '<div class="option"> <a href="omnie.php" style="text-decoration: none;color: inherit" > O mnie </a> </div>';
			?>
			
			<div class="logowanie">

			<?php
		if (!isset($_SESSION['zalogowany'])) 
		{
	
		
	echo '<a href="zaloguj.php" style="text-decoration: none;color: inherit" > Zaloguj </a>';
		}
 
else{
	
echo '<a href="logout.php" style="text-decoration: none;color: inherit" > Wyloguj </a>';
 
}
?>		 
					</div>
			<div style="clear:both"> </div>
		</div>
		
		</div>
	
		<div id="calosc">
		
				<div id="sidebar">
					<div id="czas">

 
<script type="text/javascript">
function getTime()
{
    return (new Date()).toLocaleTimeString();
}
 
//wywołanie ma na celu eliminację opóźnienia sekundowego
document.getElementById('czas').innerHTML = getTime();
 
setInterval(function() {
 
    document.getElementById('czas').innerHTML = getTime();
     
}, 1000);
</script>
</div>

  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

   
    <textarea placeholder="Napisz wiadomość.." name="msg" required></textarea>

    <button type="submit" class="btn">Wyślij</button>
  </form>


</div>
					<div id="glowny">
					<h2><b>Pogoda na najbliższe dni w niektórych górskich miastach w polsce.</h2> </b>
					<br>
					<br>
					<h3>
					<ul>
					<li><a href="zakopane.php" > Zakopane</a> </li>
					<br>
					<li><a href="krynica.php" > Krynica-Zdrój</a> </li>
					<br>
					<li><a href="ustron.php" > Ustroń</a> </li>
					<br>
					<li><a href="karpacz.php" > Karpacz</a> </li>
					<br>
					<li><a href="wisla.php" > Wisła</a> </li>
					<br>
					<li><a href="szklarska.php" > Szklarska Poręba</a> </li>
					<br>
					<li><a href="swieradow.php" > Świeradów-Zdrój</a> </li>
					</ul>
					</h3>



</div>
</div>
</body>


</html>