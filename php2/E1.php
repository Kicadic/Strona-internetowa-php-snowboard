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
					
			<center>	<b><h1>Oswojenie ze sprzętem i środowiskiem </h1></b> <br></center>
			<h3> <b> <em>Zakładanie sprzętu</em> </b></h3>
				<br>
				<br>
				Zapinanie wiązań może odbywać się w różnych warunkach śniegowych i terenowych, na stokach o różnym nachyleniu. Sposób zapinania należy dostosować do aktualnych warunków oraz swoich umiejętności.
				<br>
				<b>Na terenie płaskim</b> – zakładanie odbywa się w pozycji stojącej Kolejno należy:
				<ul>
				 <li>położyć deskę na śniegu trzymając za pasek asekuracyjny</li> 
				 <li> włożyć przednią nogę w wiązanie i zapiąć • zapiąć pasek do buta przedniej nogi </li>
				 
				 <li>przenieść ciężar ciała na przednią nogę i utrzymując na niej równowagę wpiąć tylną nogę w wiązanie</li> 
				</ul>
				
				<b>Na stoku</b> - zakładanie rozpoczyna się w pozycji stojącej, kończy natomiast siedząc twarzą w dół stoku Kolejno należy: 
				<ul>
				<li>stanąć twarzą do stoku </li>
				<li>położyć deskę na śniegu przed sobą pod kątem 90° do linii spadku stoku, trzymając za pasek asekuracyjny  </li>
				<li> podpierając deskę przodem buta nogi tylnej w okolicy środka jej długości lub przyklękując na niej wpiąć przednią nogę w wiązanie</li>
				<li> zapiąć pasek do buta przedniej nogi</li>
				<li>postawić tylną nogę powyżej deski i odwrócić się z deską o 180°, dziobem deski do stoku </li>
				<li>  usiąść tyłem do stoku, wbić tylną krawędź w śnieg i wpiąć tylną nogę</li>
				</ul>
				

				<h3> <b><em>Podnoszenie się</em></b></h3> 
				<br>
				Podnoszenie się może odbywać się w różnych warunkach śniegowych i terenowych, na stokach o różnym nachyleniu. Podnoszenie się z leżenia przodem jest łatwiejsze do wykonania.
				<br>
				
				<b>Z leżenia przodem </b> <br>
				Kolejno należy: 
				<ul>
				<li> przejść do klęku obunóż </li>
				<li> ustawić deskę prostopadle do linii spadku stoku</li>
				<li> wbić krawędź deski w śnieg i uginając kolana przesunąć ciało nad deskę</li>
				<li>  podpierając się rękami jak najbliżej kolan oderwać kolana od śniegu</li>
				<li> utrzymując równowagę odepchnąć się rękami od śniegu i prostując kolana wstać </li>
				</ul>
				
				<b>Z leżenia  tyłem  </b> <br>
				Kolejno należy:
				<ul>
				<li>  podpierając się rękami przejść do siadu tyłem na stoku</li>
				<li>ustawić deskę prostopadle do linii spadku stoku  </li>
				<li>  oprzeć ręce na śniegu blisko pośladków</li>
				<li>wbić krawędź deski w śnieg i uginając kolana przesunąć ciało nad deskę </li>
				<li> wykonując zamach tułowiem i utrzymując równowagę, odepchnąć się przednią ręką od śniegu</li>
				<li> wstać prostując nogi i tułów</li>
				</ul>
				
				<h3><b><em>Upadanie</em></b></h3>
				<b>W przód  </b> <br>
				Kolejno należy:
				<ul>
				<li> w momencie utraty równowagi wyraźnie obniżyć pozycję przez ugięcie nóg i tułowia  </li>
				<li> tuż przed kontaktem ze śniegiem wykonać ruch poślizgu w przód przez wyprost nóg, tułowia i rąk dla złagodzenia skutków upadku </li>
				<li>  amortyzować uderzenie upadając w pierwszej kolejności na wysunięte przedramiona  </li>
				<li>  w momencie kontaktu kolan ze śniegiem oderwać deskę od śniegu</li>
				
				</ul>
				
				
				<b>W tył  </b> <br>
				Kolejno należy:
				<ul>
				<li> w momencie utraty równowagi wyraźnie obniżyć pozycję przez ugięcie nóg i tułowia  </li>
				<li> upaść w tył przez  pośladki, łagodząc upadek przez wykonanie kołyski  </li>
				<li>  w momencie upadania przyciągnąć  brodę do piersi dla uniknięcia uderzenia głową o ziemię </li>
				<li>oderwać deskę od śniegu </li>
				</ul>
				<h3><b><em>Pozycja podstawowa</em></b></h3>
				<img src="img/pozycja.png" alt="">
				<ul>
				<li>ciężar ciała rozłożony równomiernie na obie nogi </li>
				<li> nogi ugięte proporcjonalnie w stawach skokowych,     kolanowych i biodrowych</li>
				<li>biodra i tułów skręcone w kierunku jazdy pod kątem nieznacznie większym od ustawienia kątów wiązań  </li>
				<li> ręce rozłożone nieco szerzej od barków tworzą naturalny łuk, dłonie na wysokości bioder,   </li>
				<li>głowa skierowana w kierunku jazdy </li>
				</ul>
				
			   <h3>	<b><em>Poruszanie się po płaskim terenie</em> </b> </h3> <br>
				
				<b>Podskokami</b> - przemieszczanie odbywa się na krótkich odcinkach przy wpiętych w  wiązania obu nogach, w terenie płaskim i na stokach o różnym nachyleniu Kolejno należy:
				
				<ul>
				<li>ustawić deskę prostopadle do kierunku poruszania się </li>
				<li> obciążyć krawędź przednią </li>
				<li>ugiąć nogi i wykonać skok w przód wspomagany zamachem rąk </li>
				<li>podczas lądowania uginać nogi dla amortyzacji i przygotowania do następnego skoku
				</li>
				
				</ul>
				
				<b>Krok zwykły</b> – wykonuje się w formie chodu na terenie płaskim i stokach o różnym nachyleniu z przednią nogą wpiętą w wiązanie Kolejno należy:
				
				<ul>
				<li> deskę ustawić prostopadle do zamierzonego kierunku poruszania się </li>
				<li>  przenosząc kolejno ciężar ciała na zgiętą nogę wykroczną wykonać naprzemianstronną pracę nóg i rąk  jak podczas zwykłego chodu</li>
				<li> dla uniknięcia poślizgu deski i utraty równowagi opierać deskę na krawędzi
		</li>
		
				
				</ul>
				
				<b>Krok ślizgowy(„hulajnoga”)</b>  – jest rozwinięciem kroku zwykłego z wykorzystaniem poślizgu na stokach płaskich i lekko opadających , z przednią nogą wpiętą w wiązanie Kolejno należy:
				
				<ul>
				
				<li>deskę ustawić płasko,  dziobem w  stronę zamierzonego kierunku poruszania się</li>
				<li>postawić nogę wolną  obok deski na wysokości przedniego wiązania</li>
				<li>odepchnąć się nogą  wolną od śniegu  ruchem podobnym do jazdy na hulajnodze</li>
				<li> przenieść ciężar ciała nad deskę na lekko zgiętą wpiętą nogę i utrzymać równowagę w ślizgu w pozycji podstawowej (podczas dłuższego ślizgu postawić wolną nogę na podkładce antypoślizgowej)</li>
				
				
				
				</ul>
				
				<h3><b><em>Podejścia</em> </b> </h3> <br>
				Krokiem zwykłym i podskokami. Wykonywać jak w opisie poruszania się w terenie płaskim.<br>
				<img src="img/podejscie.png" alt="">
				<br>
				
				<h3><b><em>Zwroty</em></b> </h3> <br>
				Zwrot jest to zamierzony sposób zmiany ustawienia deski wykonywany w miejscu, w terenie płaskim lub na stoku, będąc wpiętym obiema nogami w deskę
				
				<b>Przez przetoczenie</b> <br>
				z ustawienia plecami do śniegu (z pleców na kolana) należy:
				<ul>
				<li>usiąść na śniegu, energicznym zamachem nóg oderwać deskę od śniegu i oprzeć ją tyłem lub dziobem o śnieg </li>
				<li>obrócić tułów o 180 stopni, oprzeć ręce o śnieg i wbić przednią krawędź w śnieg </li>
				<li>odpychając się rękami od śniegu oraz prostując nogi i tułów wstać zachowując równowagę </li>
				
				</ul>
				
				z ustawienia przodem do śniegu (z kolan na plecy) należy: 
				<ul>
				
				<li> przejść do klęku obunóż </li>
				<li>podpierając się rękami o śnieg zgiąć nogi w kolanach i oderwać deskę od śniegu</li>
				<li>tułowiem zapoczątkować  półobrót opierając tył lub przód deski o śnieg</li>
				<li> dokończyć półobrót i wbić krawędź w śnieg </li>
				<li> przesunąć tułów nad deskę, pochylić się w przód </li>
				<li>odpychając się ręką bliższą śniegu i wykorzystując zamach tułowiem wstać utrzymując równowagę
				</li>
				</ul>
				<br>
				<img src="img/zwrot.png" alt=""> <br>
				<b>Skokiem</b> <br> na terenie płaskim, należy:
				<ul>
				<li> stojąc na desce obniżyć pozycję uginając kolana</li>
				<li>wykonać podskok z jednoczesną rotacją tułowia w stronę zamierzonego obrot</li>
				<li>rotację tułowia wspomóc  zamachem rąk</li>
				<li> pracą nóg dokonać w powietrzu zmianę ustawienia deski </li>
				<li> po zetknięciu się deski z ziemią obniżyć pozycję w celu zamortyzowania lądowania
				</li>
				</ul>
				
				na stoku, należy:
				<ul>
				<li> stojąc na zakrawędziowanej desce obniżyć pozycję uginając kolana </li>
				<li>wykonać podskok z jednoczesną rotacją tułowia w stronę zamierzonego obrotu </li>
				<li> rotację tułowia wspomóc zamachem rąk</li>
				<li>pracą nóg dokonać w powietrzu zmianę ustawienia deski </li>
				<li>lądować na zakrawędziowanej desce z amortyzacją poprzez obniżenie pozycji </li>
				
				</ul>
						



</div>
</div>
</body>


</html>