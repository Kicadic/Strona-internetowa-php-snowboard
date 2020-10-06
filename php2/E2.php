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
					
			<center>	<b><h1>Ewolucje podstawowe </h1></b> <br></center>
				<h3> <b> <em> Ześlizg prosty </em> </b> </h3>
				<br>
				<br>
				Jest to prosty i bezpieczny sposób przemieszczania się w dół wzdłuż linii spadku stoku. Jest wykonywany na krawędzi tylnej lub przedniej w ustawieniu deski prostopadle do linii spadku stoku. Służy też do pokonywania trudnych lub niebezpiecznych fragmentów terenu.
				
				<br>
				<br>
				Z prostopadłego ustawienia deski do linii spadku stoku należy:
				<ul>
				<li>zmniejszyć nacisk na krawędź dostokową  </li>
				<li> utrzymywać pozycję podstawową </li>
				<li> kontrolować szybkość ześlizgu poprzez krawędziowanie deski wynikające z nacisku na krawędź dostokową (w przypadku frontside - palcami , backside – piętami) i kąta ustawienia deski względem stoku.
				</li>
				</ul>
				
				<h3> <b><em> Ześlizg skośny </em> </b> </h3>
				<br>
				<br>
				Jest to prosty i bezpieczny sposób przemieszczania się w dół, skośnie do linii spadku stoku. Jest wykonywany na krawędzi przedniej lub tylnej na desce ustawionej prostopadle do linii spadku stoku ale poruszającej się w skos stoku.. 
				<br>
				<br>
				Kolejno należy: 
				<ul>
				<li>z jazdy w skos stoku zmniejszyć nacisk na krawędź dostokową lub z ześlizgu prostego przenieść ciężar ciała na jedną z nóg </li>
				<li>utrzymując większy ciężar na jednej z nóg prowadzić deskę ześlizgiem pod wybranym kątem do linii spadku stoku, w kierunku obciążonego końca deski  </li>
				<li>  regulować prędkość poprzez zakrawędziowanie deski wynikające z nacisku na krawędź dostokową (w przypadku frontside - palcami , backside - piętami) </li>
				<li> regulować kierunek przez odpowiednie zakrawędziowanie i obciążanie przedniej lub tylnej nogi
				</li>
				</ul>
				
				<img src="img/zeslizg.png" alt="">
				<br>
				<br>
				<h3> <b> <em> Jazda na wprost </em> </b> </h3>
				<br>
				Z ustawienia prostopadłego do linii spadku stoku należy: 
				<ul>
				<li>  skokiem ustawić deskę w linii spadku stoku lub zmniejszyć nacisk na krawędź dostokową i przenieść ciężar ciała na przednią nogę doprowadzając do ustawienia deski w linii spadku stoku </li>
				<li> przyjąć pozycję podstawową i rozpocząć zjazd </li>
				<li> utrzymując pozycję podstawową kontynuować zjazd prowadząc deskę w stałym kontakcie ze śniegiem amortyzując przy tym występujące nierówności terenu  </li>
				</ul>
				<br>
				<h3> <b> <em> Jazda w skos stoku </em> </b> </h3>
				<br>
				<br>
				Z ustawienia prostopadłego do linii spadku stoku należy:
				<ul>
				<li> skokiem ustawić deskę pod wybranym kątem do linii spadku stoku lub zmniejszając nacisk na krawędź dostokową i przenieść ciężar ciała na przednią nogę ustawiając deskę do jazdy pod wybranym kątem do linii spadku stoku </li>
				<li> przyjąć pozycję podstawową </li>
				<li>utrzymując pozycję podstawową rozpocząć jazdę w skos stoku  obciążając odpowiednio krawędź dostokową  </li>
				<li> kontynuować jazdę utrzymując deskę na krawędzi dostokowej (nacisk palcami – frontside, nacisk piętami – backside) </li>
				</ul>
				<img src="img/jazda.png" alt="">
				<br>
				<h3> <b> <em> Jazda wyciągiem </em> </b> </h3>
				<br>
				<br>
				<b>wyciąg krzesełkowy </b>
				<br>
				<br>
				Z przednią nogą wpiętą w wiązanie należy: 
				<ul>
				<li> ustawić się w miejscu wyznaczonym do wsiadania ustawiając dziób deski  w kierunku jazdy wyciągu </li>
				<li> wzrok skierować w stronę nadjeżdżającego krzesełka </li>
				<li>dotykając w pierwszej kolejności ręką krzesełka spokojnie usiąść  </li>
				<li> zachowywać się zgodnie z instrukcją wyciągu i zaleceniami obsługi </li>
				</ul>
				<b>wyciąg orczykowy </b>
				<br>
				<br>
				Z przednią nogą wpiętą w wiązanie należy:
				<ul>
				<li>ustawić się po prawej (dla goofy) lub po lewej stronie orczyka (dla regular </li>
				<li> wzrok skierować w stronę zbliżającego się orczyka </li>
				<li> chwycić orczyk i włożyć go pod udo przedniej nogi lub pod pośladki  </li>
				<li>  tylną nogę postawić na podkładce antypoślizgowej</li>
				<li>w momencie ruszania lekko pochylić tułów do przodu przeciwdziałając szarpnięciu  </li>
				<li>  w czasie jazdy utrzymywać równowagę </li>
				<li>  przed wysiadaniem podciągnąć się na orczyku do przodu uwalniając go </li>
				<li> oddalić się z trasy wyciągu  </li>
				<li>  zachowywać się zgodnie z instrukcją wyciągu i zaleceniami obsług
</li>
				
				</ul>
				<img src="img/orczyk.png" alt="">
				<br>
				<br>
				Skręt ślizgowy rotacyjny jest najprostszą formą przekraczania linii spadku stoku na desce poruszającej się śladem ślizgowym. Wykonuje się go na małej i średniej szybkości zwłaszcza na stoku o małym i średnim nachyleniu.
				<br>
				Z najazdu w skos stoku lub kończąc poprzedni skręt należy:
				<ul>
				<li>  jechać w pozycji podstawowej </li>
				<li>  zapoczątkować skręt deski wykonując rotację tułowia w kierunku zamierzonego skrętu  </li>
				<li>zbliżając się do linii spadku stoku przenieść ciężar ciała z palców na pięty (skręt backside) lub z pięt na palce (skręt frontside)  </li>
				<li>  kontynuować skręt</li>
				<li>  kończyć skręt powracając do pozycji podstawowej</li>
				</ul>
				<h3> <b> <em> Skręt ślizgowy </em> </b> </h3>
				<br>
				<br>
				Skręt ślizgowy wykonuje się poprzez zmianę obciążenia krawędzi deski – przeniesienia obciążenia a tym samym nacisku z krawędzi na krawędź – i wykorzystaniu do wywołania skrętu właściwości konstrukcyjnych deski.
				<br>
				<br>
				Z najazdu w skos stoku lub kończąc poprzedni skręt należy:
				<ul>
				<li>jechać w pozycji podstawowej </li>
				<li> zbliżając się do linii spadku stoku zmienić obciążenie krawędzi – nacisk z pięt na palce (skręt frontside) lub z palców na pięty (skręt backside); lekko wychylić tułów w kierunku środka zamierzonego skrętu – od stoku; </li>
				<li>kontynuować skręt jadąc w delikatnym wychyleniu tułowia do środka skrętu   </li>
				<li> kończyć skręt powracając do pozycji podstawowej</li>
				</ul>
				<h3> <b> <em> Skręt ślizgowy </em> </b> </h3>
				<br>
				<br>
				Skręt ślizgowy wykonuje się poprzez zmianę obciążenia krawędzi deski – przeniesienia obciążenia a tym samym nacisku z krawędzi na krawędź – i wykorzystaniu do wywołania skrętu właściwości konstrukcyjnych deski.
				<br>
				Z najazdu w skos stoku lub kończąc poprzedni skręt należy:
				<ul> 
				<li>jechać w pozycji podstawowej </li>
				<li>zbliżając się do linii spadku stoku zmienić obciążenie krawędzi – nacisk z pięt na palce (skręt frontside) lub z palców na pięty (skręt backside); lekko wychylić tułów w kierunku środka zamierzonego skrętu – od stoku;  </li>
				<li>kontynuować skręt jadąc w delikatnym wychyleniu tułowia do środka skrętu  </li>
				<li>kończyć skręt powracając do pozycji podstawowej </li>
				</ul>
				<h3> <b> <em> Skręt ślizgowy NW</em> </b> </h3>
				<br>
				<br>
				Skręt ślizgowy NW jest formą przekraczania linii spadku stoku z wykorzystaniem odciążenia NW na desce prowadzonej śladem ślizgowym.
				<br>
				Z najazdu w skos stoku lub kończąc poprzedni skręt należy:
				<ul>
				<li> powoli obniżyć pozycję </li>
				<li>zbliżając się do linii spadku stoku wykonać odciążenie NW i zapoczątkować skręt deski poprzez zmianę obciążenia krawędzi - nacisku z pięt na palce (skręt frontside) lub z palców na pięty (skręt backside)  </li>
				<li> regulować promień skrętu poprzez stopniowe obniżanie pozycji </li>
				<li> kończyć skręt powracając do pozycji wyjściowej (obniżonej) przed kolejnym skrętem</li>
				</ul>
				
				<img src="img/skret.png" alt="">
				<br>
				<h3> <b> <em> Przejazd łatwych form terenowych</em> </b> </h3>
				<br>
				<br>
				<b> Garb</b>
				<br>
				Wjeżdżając na garb terenowy należy: 
				<ul> 
				<li> ruchem amortyzującym ugiąć nogi przy wjeździe na garb i prostować zjeżdżając z niego  </li>
				<li> ograniczyć ruchy tułowia dążąc do prowadzenia go na jednakowej wysokości  </li>
				<li>  unikać utraty kontaktu deski ze śniegiem.</li>
				
				</ul>
				<br>
				<br>
				<b> Mulda</b>
				<br>
				<ul>
				<li>ruchem amortyzującym prostować nogi przy wjeździe we wklęsłość i ugiąć wyjeżdżając z niej  </li>
				<li> ograniczyć ruchy tułowia dążąc do prowadzenia go na jednakowej wysokości  </li>
				<li> unikać utraty kontaktu deski ze śniegiem  </li>
				</ul>
				<br>
				<img src="img/mulda.png" alt="">
						



</div>
</div>
</body>


</html>