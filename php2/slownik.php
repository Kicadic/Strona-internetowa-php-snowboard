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
	
	
	?>
	</div>
		<div id ="nav">
		<?php 
			
			echo '<div class="option"> <a href="index.php" style="text-decoration: none;color: inherit" > Strona główna </a> </div>';
			
			
			echo '<div class="option"> <a href="index.php" style="text-decoration: none;color: inherit" > Kurs snowboard </a> </div>';
			
			
			echo '<div class="option"> <a href="index.php" style="text-decoration: none;color: inherit" > Wybór sprzętu </a> </div>';
			
			echo '<div class="option"> <a href="index.php" style="text-decoration: none;color: inherit" > Pogoda </a> </div>';
			
			echo '<div class="option"> <a href="index.php" style="text-decoration: none;color: inherit" > Wykorzystane linki </a> </div>';
			
			echo '<div class="option"> <a href="index.php" style="text-decoration: none;color: inherit" > O mnie </a> </div>';
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
				
				<b><h1>Słownik </h1></b> <br>
				<b>Backside (back)</b> – pozycja lub jazda na tylnej krawędzi deski, także skręt na tylnej krawędzi deski.
				<br>
				<b>Bezpośrednia zmiana krawędzi</b> –  szybkie zmiana krawędzi (z pięt na palce i z palców na pięty) w trakcie jazdy, w której  kontakt ślizgu deski ze śniegiem ograniczona jest do minimum lub w ogóle nie występuje;
				<br>
				<b>Dociążenie</b> – zwiększenie nacisku deski na śnieg;  
				<br>
				<b>Fakie (Switch)</b> – jazda tyłem
				<br>
				<b>Frontside</b> – jazda na przedniej krawędzi deski, także skręt na przedniej krawędzi deski. 
				<br>
				<b>Krawędź</b> – metalowa listwa obramowująca deskę od strony ślizgu. 
				<br>
				<b>Krawędź przednia</b> – krawędź znajdująca się po stronie palców nóg (przedniej) snowboardzisty. 
				<br>
				<b>Krawędź tylna</b> – krawędź znajdująca się po stronie pięt (tyłu) snowboardzisty.
				<br>
				<b>Krawędziowanie</b> – ustawienie deski na krawędzi
				<br>
				<b>Krawędź wewnętrzna</b> – zewnętrzna dotyczy bocznej krawędzi deski w skręcie, wewnętrzna bliżej środka skrętu. 
				<br>
				<b>Krawędź górna-dolna</b> – dotyczy krawędzi deski ustawionej prostopadle do linii spadku stoku lub w jeździe w skos stoku. 
				<br>
				<b>Kontrrotacja lub rotacja przeciwbieżna</b> – obrotowy,  skrętny  ruch tułowia w kierunku przeciwnym do kierunku zamierzonego lub wykonywanego   skrętu
				<br>
				<b>Kontrrotacja lub rotacja przeciwbieżna</b> – obrotowy,  skrętny  ruch tułowia w kierunku przeciwnym do kierunku zamierzonego lub wykonywanego   skrętu. <br>
				<b>Linia spadku stoku</b> – teoretyczna linia wyznaczająca kierunek skłonu zbocza (stoku) 
				<br>
				<b>Noga przednia-tylnia</b> – ustawienie nóg na desce, w stosunku do kierunku jazdy, wyznacza pozycję na desce regular-goofy. 
				<br>
				<b>Nose</b> – przednia część deski (znajdująca się przed krawędzią efektywną). 
				<br>
				<b>Noserol (obrót na Nose)</b> – obrót na przedniej części deski 
				<br>
				<b>Odciążenie</b> – zmniejszenie nacisku deski na podłoże;
				<br>
				<b>Obniżenie pozycji</b> – powolny ruch uginania w stawach skokowych, kolanowych i biodrowych, który tylko w nieznacznym stopniu wpływa na zmianę nacisku wywieranego na deskę na podłoże
				<br>
				<b>Ollie</b> – skok prosty na desce wskutek odbicia się przednią nogą. 
				<br>
				<b>Pozycja podstawowa</b> – pozycja wyjściowa przed rozpoczęciem większości ewolucji. 
				<br>
				<b>Rotacja</b> – obrotowy  skrętny  ruch tułowia w kierunku zamierzonego lub wykonywanego skrętu, zgodny z  kierunkiem skrętu (rotacja współbieżna) 
				<br>
				<b>Tailroll</b> – obrót na tylnej części deski (patrz noseroll ).
				
				
							



</div>
</div>
</body>


</html>