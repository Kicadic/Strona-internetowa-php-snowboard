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
					
			<center>	<b><h1> Ewolucje średniozaawansowane </h1></b> <br></center>
				<h3> <b><em> Skręt cięty </em></b> </h3>
				<br>
				<br>
				Jest to pierwszy ze skrętów, które wykonywane są na większej prędkości. Zmiana kierunku jazdy następuje tu poprzez ustawienie deski na krawędzi i wykorzystaniu jej właściwości konstrukcyjnych (wcięcie w talii) do wywołania skrętu. Jest wykonywany cały czas w pozycji podstawowej, bez przemieszczania środka ciężkości w osi pionowej (góra-dół) Z najazdu w skos stoku lub kończąc poprzedni skręt z odpowiednią prędkością na krawędzi należy
				
				<br>
				<br>
				<ul>
				<li>zapoczątkować skręt ustawiając deskę na krawędzi przeciwnej (dolnej) z jednoczesnym wychyleniem tułowia do wewnątrz zamierzonego skrętu   </li>
				<li>  kontynuować jazdę regulując promień skrętu poprzez kontrolę wychylenia tułowia do wewnątrz skrętu oraz odpowiednie zakrawędziowanie deski w zależności od prędkości jazdy  </li>
				<li> kończyć skręt przechodząc do jazdy w skos lub w poprzek stoku uwaga:  we wszystkich fazach skrętu deska prowadzona jest na krawędzi a przekrawędziowanie jest bezpośrednie.

				</li>
				</ul>
				<h3> <b> <em> Skręt cięty NW </em> </b> </h3>
				<br>
				<br>
				<ul>
				<li> wykonać odciążenie NW i zapoczątkować skręt poprzez przekrawędziowanie deski,  kierując kolana ( w skręcie frontside) i biodra (w skręcie backside) oraz pochylając tułów do wewnątrz skrętu </li>
				<li> kontynuować jazdę regulując promień skrętu przez kontrolę wychylenia tułowia do wewnątrz skrętu, odpowiednie zakrawędziowanie deski oraz stopniowe obniżanie pozycji (dociążanie deski)  </li>	
				<li>  kończyć skręt powracając do pozycji wyjściowej (obniżonej) do kolejnego skrętu </li>
				 </ul>
				 <br>
				 <img src="img/skretciety.png" alt="">
				<h3> <b> <em> Śmigi </em> </b> </h3>
				<br>
				<br>
				Śmig jest to seria rytmicznych skrętów o małym promieniu wykonywanych blisko linii spadku stoku. W śmigu ze względu na krótki czas trwania snowboarder wykonuje tylko zapoczątkowanie i sterowanie skrętem, które również trwają bardzo krótko. Prawidłowo wykonany śmig (ślizgowy i cięty) powinien charakteryzować m.in.
				<ul>
				<li>  jednakowym rytmem – skręty powinny być o tym samym promieniu i czasie trwania </li>
				<li>ustabilizowaną pracą tułowia – tułów powinien być cały czas w pozycji podstawowej, jego tor jazdy nie powinien doprowadzać do kontrrotacji a ręce powinny pozostawać w jednym ułożeniu  </li>
				<li> optymalną prędkością wykonania – należy bardzo dokładnie określić sobie odpowiednią prędkość i rytm wykonywania śmigu w zależności od nachylenia stoku, biorąc pod uwagę to, iż jazda śmigiem ślizgowym będzie powodowała chwilowe wytracanie prędkości a jazda śmigiem ciętym,  chwilowe przyspieszenia w skrętach
 </li>
				</ul>
				<img src="img/smigi.png" alt="">
				<br>
				<h3> <b> <em> Przejazd różnych form terenowych </em> </b> </h3>
				<br>
				<br>
				Podczas jazdy na trasach przygotowanych a także w różnych warunkach poza nimi,  należy sytuacyjnie stosować opanowane techniki  snowboardowe.
				<br>
				<br>
				<h3> <b> <em> Elementy techniki freestylowej </em> </b> </h3>
				<br>
				<br>
				<b>a. Skręt ślizgowy tyłem </b>
				<br>
				<br>
				Jazda tyłem (fakie, switch) jest formą przekraczania linii spadku stoku służącą do bezpiecznego manewrowania deską w ustawieniu do jazdy tyłem lub po wykonaniu dowolnej ewolucji z półobrotem. Wykonanie skrętu jest analogiczne jak każdego skrętu każdą techniką ślizgową lub ciętą.
				<br>
				<img src="img/skretslizgowy.png" alt="">
				<br>
				<br>
				<b>b. Ollie </b>
				<br>
				<br>
				Ollie jest podstawową formą skoku wykonywanego w trakcie jazdy na stoku. Polega na oderwaniu deski od śniegu przy pomocy działania siły mięśni lub z wykorzystaniem nierówności terenu oraz sprężystości deski.
				<br>
				
				<ul>
				Faza najazdu:
				<li>w jeździe na wprost prowadzić deskę płasko na śniegu </li>
				<li> obniżyć pozycję </li>
				<li> przesunąć ciężar ciała na tył deski  </li>
				Faza odbicia:
				<li>  wykonać dynamiczne wyjście w górę z podciągnięciem przedniej nogi dla oderwania przodu deski od śniegu </li>
				<li>  wykonać odbicie z tylnej nogi wykorzystując także sprężystość obciążonego tyłu deski </li>
				<br>
				Faza lotu: 
				<li> podciągnąć wysoko kolana ustawiając deskę równolegle do podłoża kontynuując lot  </li>
				<li>ręce prowadzić szeroko </li>
				<li>  w końcowej fazie lotu prostując się przygotować się do amortyzowania lądowania </li>
				Faza lądowania: 
				<li> lądować równocześnie na całą powierzchnię deski przyjmując pozycję podstawową </li>
				
				</ul>
				<img src="img/ollie.png" alt="">
				<br>
				<br>
				<b> c. 180 FS/BS w jeździe </b>
				<br>
				Jest to obrót o 180° wokół osi pionowej wykonywany podczas jazdy w czasie którego deska pozostaje w kontakcie ze śniegiem
				<ul>
				<li>  w jeździe na wprost prowadzić deskę płasko na śniegu i obniżyć pozycję</li>
				<li> przenieść ciężar ciała w przód </li>
				<li>wykonać wyjście w górę z jednoczesną dynamiczną rotacją tułowia w kierunku zamierzonego obrotu  </li>
				<li>  wykorzystując odciążenie deski i rotację tułowia wprowadzić deskę w ruch obrotowy , którego oś znajduje się w przedniej części deski </li>
				<li>  po wykonaniu półobrotu zrównoważyć układ i kontynuować jazdę na wprost tyłem
</li>
				</ul>
				<b> d. 360 FS/BS w jeździe  </b>
				<br>
				Jest to obrót o 360° wokół osi pionowej, wykonywany podczas jazdy, w czasie którego deska pozostaje w kontakcie ze śniegiem.
				<ul>
				<li> w jeździe na wprost prowadzić deskę płasko na śniegu i obniżyć pozycję  </li>
				<li> przenieść ciężar ciała w przód</li>
				<li> wykonać wyjście w górę z jednoczesną dynamiczną rotacją tułowia w kierunku zamierzonego obrotu  </li>
				<li>wykorzystując odciążenie deski i rotację tułowia wprowadzić deskę w ruch obrotowy , którego oś znajduje się w przedniej części deski  </li>
				<li>po wykonaniu półobrotu przenieść ciężar ciała na tył deski kontynuując rotację tułowia dla utrzymania deski w ruchu obrotowym , którego oś znajduje się teraz w tylnej części deski  </li>
				<li> po wykonaniu pełnego obrotu zrównoważyć układ i kontynuować jazdę na wprost </li>
				</ul>
				<img src="img/360.png" alt="">
				<br>
				<b> e. skok prosty na skoczni  </b>
				<br>
				<br>
				Skok prosty na skoczni jest jednym z podstawowych tricków snowboardowych. Taka ewolucja powinna być wykonana na skoczni lub uskoku terenowym.
				<br>
				<ul>
				Faza najazdu: 
				<li> deska płasko na śniegu</li>
				<li>obniżona pozycja, środek ciężkości nad środkiem deski
				</li>
				<br>
				Faza odbicia:
				<li> w równym stopniu wyprostowanie obu nóg (nie całkowite)
				</li>
				<br>
				Faza lotu:
				<li> środek ciężkości nad środkiem deski </li>
				<li> lekko podciągnąć obie nogi pod tułów  </li>
				<li>lekko pochylić tułów do przodu  </li>
				<li> wyprostować nogi przygotowując się do lądowania</li>
				<br>
				Faza lądowania: 
				<li>  lądować równocześnie całą powierzchnią deski w układzie zrównoważonym</li>
				<li>obniżyć pozycję w celu zamortyzowania lądowania.
 </li>
				</ul>
				<img src="img/skok.png" alt="">			



</div>
</div>
</body>


</html>