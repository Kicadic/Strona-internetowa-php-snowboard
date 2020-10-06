<?php

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
	
	echo time()."<br>";
	
	echo date('d-m-Y H:i:s')."<br>";
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
</div>
<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>

   
    <textarea placeholder="Napisz wiadomość.." name="msg" required></textarea>

    <button type="submit" class="btn">Wyślij</button>
  </form>
</div>


</div>
					<div id="glowny">
					<center>
					Ustroń
<!-- widget pogoda -->
<div id="widget_346278d9ce7248e3b8ff7e693ec8e2a5">
<span id="l_346278d9ce7248e3b8ff7e693ec8e2a5"><a href="http://www.swiatpogody.pl/pogoda-polska/ustron.html">Swiat Pogody</a></span>
<script type="text/javascript">
(function() {
	var my = document.createElement("script"); my.type = "text/javascript"; my.async = true;
	my.src = "http://serwisy.swiatpogody.pl/widget/js-design.php?ville=801&format=grand-rectangle&nb_jours=5&ombre1=000000&c1=ffffff&c2=a9a9a9&c3=ffffff&c4=ffffff&c5=ffffff&police=0&t_icones=2&fond=1&masque=3&x=300&y=250&id=346278d9ce7248e3b8ff7e693ec8e2a5";
	var z = document.getElementsByTagName("script")[0]; z.parentNode.insertBefore(my, z);
})();
</script>
</div>
<!-- widget pogoda -->
</center>							



</div>
</div>
</body>


</html>