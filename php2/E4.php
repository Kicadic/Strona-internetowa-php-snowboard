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
					
			<center>	<b><h1>Ewolucje zaawansowane </h1></b> <br></center>
				<h3><b><em> Skręt cięty WN </em></b></h3>
				<br>
				<br>
				Skręt cięty WN jest formą pokonywania linii spadku stoku z wykorzystaniem odciążenia WN na desce poruszającej się śladem ciętym 
				
				<br>
				<br>
				Z najazdu w skos stoku na krawędzi tylnej lub kończąc poprzedni skręt należy: 
				<ul>
				<li> wykonać odciążenie WN i zapoczątkować skręt ustawiając deskę na krawędzi przedniej kierując kolana (w skręcie frontside) i biodra (w skręcie backside) oraz pochylając tułów do wewnątrz skrętu   </li>
				<li>   regulować promień skrętu przez podwyższanie pozycji oraz kontrolę pochylenia tułowia do środka skrętu (dociążanie)  </li>
				<li> kończyć skręt powracając do pozycji wyjściowej (podwyższonej) przygotowując się do zapoczątkowania kolejnego skrętu

				</li>
				</ul>
				<img src="img/cietywn.png" alt="">
				<h3><b><em> Skręt cięty kompensacyjny </em></b></h3>
				<br>
				<br>
				Skręt cięty kompensacyjny sprowadza się do jazdy na krawędzi, w której to odległość środka ciężkości ciała w stosunku do podłoża jest dużo mniejsza niż w skręcie ciętym. W całym skręcie nie ma aktywnego podwyższania i obniżania środka ciężkości w stosunku do podłoża. Dzięki „kompensacyjnej” pracy zwłaszcza nóg, tułów snowboardera powinien w tym skręcie jechać cały czas na jednej wysokości w obniżonej lub niskiej pozycji. Z najazdu w skos stoku w pozycji obniżonej lub kończąc poprzedni skręt na krawędzi, na odpowiedniej prędkości należy: 
				<ul>
				<li>  zapoczątkować skręt ustawiając deskę na krawędzi przeciwnej (przedniej) z jednoczesnym wychyleniem tułowia do wewnątrz zamierzonego skrętu  </li>
				<li>  kontynuować jazdę „odsyłając” (prostując) nogi na zewnątrz wykonywanego skrętu utrzymując tułów cały czas na tej samej wysokości; regulować promień skrętu przez kontrolę wychylenia tułowia do wewnątrz skrętu oraz odpowiednie zakrawędziowanie deski w zależności od prędkości jazdy  </li>	
				<li>  kończąc jazdę po łuku, utrzymując tułów na jednakowej wysokości, zmniejszać wychylenie, zakrawędziowanie deski; stopniowo uginać nogi, pozwalając im „podjechać” pod tułów  </li>
				<li>  kończyć skręt przechodząc do pozycji wyjściowej dla zapoczątkowania kolejnego skrętu.
				</li>
				 </ul>
				<h3><b> <em> Przejazd trudnych form terenowych </em></b></h3>
				<br>
				<br>
				<b> a. jazda w głębokim śniegu</b>
				<br>
				Jazda w głębokim śniegu to wykorzystanie przede wszystkim skrętu ślizgowego rotacyjnego–w którym rotacja jest jednak bardzo delikatna, natomiast stosuje się większe wychylenie tułowia do wewnątrz skrętu oraz skręt ślizgowy NW – gdzie dynamiczne wyście w górę i odciążenie deski sprawia, iż zmiana kierunku jady odbywa się niemalże nad śniegiem. Wybór techniki podyktowany jest rodzajem śniegu – głęboki, ciężki śnieg wymusza zastosowanie odciążenia w przeciwieństwie do lekkiego, świeżego puchu, po którym „pływa się” skrętem ślizgowym rotacyjnym.
				<br>
				<br>
				Podstawowe zasady jazdy w głębokim śniegu (puchu):
				<ul>
				<li>	 środek ciężkości na środku deski lub lekko przesunięty do tyłu - odciążenie a nawet podniesienie dziobu deski </li>
				<li>jazda po stokach o większym nachyleniu – dotyczy to odpowiedniej prędkości (im mniejsza prędkość tym trudniej jest wykonać skręt)	</li>
				</ul>
				<b> b. jazda po lodzie </b>
				<br>
				Jednym ze sposobów jazdy po lodzie jest zastosowanie ześlizgu (prostego i skośnego) w zależności od potrzeby i ukształtowania terenu. Pokonując ten odcinek ześlizgiem należy mocno skoncentrować się i kontrolować prędkość, ponieważ zbyt duża grozi utratą kontroli nad deską i upadekiem, natomiast zbyt mała będzie powodowała duże trudności, gdyż zakrawędziowanie i utrzymanie równowagi na lodzie jest bardzo utrudnione.
Drugim sposobem pokonania oblodzonego odcinka stoku, polecanym głównie osobom bardzo dobrze jeżdżącym jest zastosowanie skrętu ciętego WN z bardzo mocnym dociążeniem a tym samym zakrawędziowaniem deski. Stosowanie tej techniki również wymaga koncentracji, ponieważ skręt  cięty WN jest skrętem bardzo dynamicznym i nieumiejętne jego wykonanie powoduje zwiększanie się prędkości jazdy (powoduje ją jazda na krawędzi i dociążenie) a tym samym utrata kontroli nad deską. 
				<b> c. jazda w terenie muldziastym  </b>
				<br>
				W jeździe w skos stoku i w jeździe na wprost po nierównym stoku charakterystyczne jest pozostawanie środka ciężkości ciała na tej samej wysokości (bez względu na to czy jesteśmy na garbie czy w zagłębieniu). Zaleca się przejazd tych form terenowych z max. średnią prędkością, gdyż na nieregularnym stoku przy dużej prędkości nie ma czasu na kontrolowane przeciwdziałanie nierównościom.
Najdogodniejszymi miejscami na wykonanie skrętu w terenie muldziastym jest: szczyt garbu lub zagłębienie między garbami. Skręt na szczycie garbu jest najłatwiejszy do wykonania ze względu na b. małą powierzchnię kontaktu deski z podłożem.  Najbardziej odpowiednia formą skrętu na nierównym stoku jest skręt kompensacyjny, który pozwala „łykać” wszystkie nierówności. W momencie wjazdu na garb należy podciągnąć (ugiąć) nogi pod siebie z równoczesnym ugięciem w stawach biodrowych i skokowych, natomiast wjeżdżając we wklęsłość prostujemy nogi (ale nie do pełnego wyprostu) w celu amortyzacji siły wgniatającej.
				<br>
				<br>
				<h3><b> <em> Elementy techniki freestylowej </em></b></h3>
				 <br>
				 <br>
				<b> a. półobroty na dziobie i tyle deski </b>
				<b>Półobrót na przodzie</b> – Noseroll Jest to obrót o 180° wokół osi pionowej deski  przechylonej na dziób,  podczas jazdy na wprost. 
				<br>
				<ul>
				<li> w jeździe na wprost ułożyć deskę płasko na śniegu i obniżyć pozycję </li>
				<li> przenieść środek ciężkości w przód </li>
				<li>  wykonać wyjście w górę i w przód przyciągając tylną nogę tak by deska opierała się na śniegu tylko dziobem z jednoczesnym zamachem rąk i tułowia w kierunku zamierzonego obrotu</li>
				<li>wykorzystać zamach do wprawienia deski w ruch obrotowy, którego oś jest na dziobie  </li>
				<li>  po wykonaniu obrotu deski o 180° wykonać wyprost nogi tylnej dla ułożenia całej deski na śniegu i zatrzymania ruchu obrotowego </li>
				<li> powrócić do układu zrównoważonego i kontynuować jazdę na wprost</li>
				
				</ul>
				<br>
				<br>
				<b>Półobrót na tyle</b> –  Tailroll .Jest to obrót o 180° wokół osi pionowej, deski przechylonej na tył,  podczas jazdy na wprost. 
				<ul>
				<li> w jeździe na wprost tyłem ułożyć deskę płasko na śniegu i obniżyć pozycję  </li>
				<li> przenieść środek ciężkości w tył </li>
				<li>wykonać wyjście w górę i w tył przyciągając przednią nogę tak by deska opierała się na śniegu tylko tyłem z jednoczesnym zamachem rąk i tułowia w kierunku zamierzonego obrotu  </li>
				<li>  wykorzystać zamach do wprawienia deski w ruch obrotowy, którego oś jest na tyle </li>
				<li>  po wykonaniu obrotu deski o 180° wykonać wyprost nogi przedniej dla ułożenia całej deski na śniegu i zatrzymania ruchu obrotowego</li>
				<li> powrócić do układu zrównoważonego i kontynuować jazdę na wprost </li>
				</ul>
				<img src="img/polobrot.png" alt=""> <br>
				<b>b. jazda na przodzie i tyle deski </b>
				<br>
				<br>
				jazda na przodzie deski – Nosewheellie Jest to jazda na przedniej części deski  (dziobie, nose),  podczas jazdy na wprost
				<br>
				<ul>
				<li>w jeździe na wprost ułożyć deskę płasko na śniegu i obniżyć pozycję  </li>
				<li> przenieść środek ciężkości w przód </li>
				<li>wychylić tułów nad dziób deski utrzymując równowagę, odrywając tył deski (ogon) od śniegu </li>
				<li> kontynuować jazdę na przodzie deski  </li>
				<li> powrócić do układu zrównoważonego i kontynuować jazdę na wprost
</li>
<img src="img/naprzodzietyle.png" alt="">
<br>
<br>
				jazda na tyle deski - Tailwheelie Jest to jazda na tylnej części deski  (piętce, ogonie, tail),  podczas jazdy na wprost. 
				<li> w jeździe na wprost ułożyć deskę płasko na śniegu i obniżyć pozycję </li>
				<li>przenieść środek ciężkości w tył  </li>
				<li> wychylić tułów nad piętkę deski utrzymując równowagę, odrywając przód deski (dziób) od śniegu  </li>
				<li>  kontynuować jazdę na tyle deski</li>
				<li> powrócić do układu zrównoważonego i kontynuować jazdę na wprost </li>
				</ul>
				<b>c.  skok prosty z grabem </b>
				<br>
				<br>
				Skok z „grabem” - chwytem za krawędź deski jest jednym z podstawowych tricków snowboardowych. Taka ewolucja powinna być wykonana na skoczni lub uskoku terenowym, na którym skok będzie na tyle długi aby można było chwycić deskę – zastosować dowolny grab.
				<br>
				<br>
				<ul>
				Faza najazdu:
				<li> deska płasko na śniegu</li>
				<li> obniżona pozycja, środek ciężkości nad środkiem deski</li>
				<br>
				<br>
				Faza odbicia:
				<li>  w równym stopniu wyprostowanie obu nóg (nie całkowite)</li>
				<br>
				<br>
				Faza lotu:
				<li> środek ciężkości nad środkiem deski </li>
				<li>  lekko pochylić tułów do przodu</li>
				<li> w zależności od rodzaju graba chwycić deskę odpowiednią ręką w odpowiednim miejscu, ustawiając tułów oraz układając nogi stosownie do specyfiki graba  </li>
				<li> puścić deskę i wyprostowac nogi przygotowując się do lądowania</li>
				<br>
				<br>
				Faza lądowania: 
				<li>lądować równocześnie całą powierzchnią deski w układzie zrównoważonym  </li>
				<li>  obniżyć pozycję w celu zamortyzowania lądowania</li>
				</ul>
				<img src="img/grab.png" alt="">
				<br>
				<br>
				<b>d.  skok shifty </b>
				<br>
				<br>
				Skok shifty (frontside lub backside) polega na wykonaniu w fazie lotu w skoku prostym skrętu tułowia do ustawienia front lub back w stosunku do kierunku lotu a następnie powrót do pozycji wyjściowej. Taka ewolucja powinna być wykonana na skoczni lub uskoku terenowym, na którym skok będzie na tyle długi aby można było wykonać trick shifty.
				<br>
				<br>
				Faza najazdu:
				<ul>
				<li> deska płasko na śniegu </li>
				<li>obniżona pozycja, środek ciężkości nad środkiem deski </li>
				<br>
				<br>
				Faza odbicia:
				<li>  w równym stopniu wyprostowanie obu nóg (nie całkowite)</li>
				<br>
				<br>
				Faza lotu: 
				<li>  środek ciężkości nad środkiem deski</li>
				<li> obrócić tułów (wspomagając go wymachem rąk) do ustawienia front lub back w stosunku do kierunku lotu z jednoczesnym obrotem nóg (dolnej części ciała z deską) w kierunku przeciwnym – wykonać kontrrotację  </li>
				<li> zatrzymać ruchy skrętne tułowia i nóg  </li>
				<li> powrócić do pozycji wyjściowej i wyprostować nogi przygotowując się do lądowania </li>
				<br>
				<br>
				Faza lądowania: 
				<li> lądować równocześnie całą powierzchnią deski w układzie zrównoważonym  </li>
				<li>  obniżyć pozycję w celu zamortyzowania lądowania</li>
				</ul>
				<img src="img/shifty.png" alt=""> <br>
				<b>e. skoki 180, 360</b>
				<br>
				<br>
				<em> Skok 180  </em>
				<br>
				Jest to skok z obrotem o 180° wokół osi pionowej, wykonany na skoczni, garbie terenowym lub uskoku. Aby wykonać tą ewolucję snowboarder musi najpierw opanować jazdę i skręty tyłem. Skok z obrotem o 180 stopni może być wykonywany na 2 sposoby: frontside (początkowa faza obrotu przodem do stoku) i backside (początkowa faza obrotu tyłem do stoku).
				<br>
				<br>
				<ul> 
				Faza najazdu:
				<br>
				<li>  deska płasko na śniegu</li>
				<li> obie nogi równomiernie ugięte, ciało mocno skręcone w kierunku przeciwnym do obrotu  </li>
				<li>ręce cofnięte do zamachu </li>
				<br>
				<br>
				Faza odbicia równoczesne: 
				<li>dynamiczne wyjście w górę </li>
				<li> rotacja tułowia w stronę obrotu </li>
				<li> wyrzucenie rąk w stronę obrotu</li>
				<br>
				<br>
				Faza lotu:
				<li> lekko ugięte kolana</li>
				<li>półobrót ciała w kierunku zamierzonego obrotu </li>
				<li> obrócić deskę za ciałem i podciągnąć pod siebie</li>
				<li> obserwować lądowanie</li>
				<br>
				<br>
				Faza lądowania:
				<li> lądować równocześnie całą powierzchnią deski w układzie zrównoważonym </li>
				<li>  obniżyć pozycję w celu zamortyzowania lądowania</li>
				</ul>
				<em> Skok 360  </em>
				<br>
				Jest to skok z obrotem o 360° wokół osi pionowej, wykonany na skoczni, garbie terenowym lub uskoku. Skok z obrotem o 360 stopni może być wykonywany na 2 sposoby: frontside (początkowa faza obrotu przodem do stoku) i backside (początkowa faza obrotu tyłem do stoku)
				<br>
				<br>
				<ul>
				Faza najazdu: 
				<br>
				<li> deska płasko na śniegu</li>
				<li>obie nogi równomiernie ugięte, ciało mocno skręcone w kierunku przeciwnym do obrotu  </li>
				<li> ręce cofnięte do zamachu</li>
				<br>
				<br>
				Faza odbicia:
				<br>
				<li>dynamiczne odbicie z  nóg </li>
				<li> rotacja ciała w kierunku obrotu oraz wymach rąk w kierunku obrotu </li>
				<li>mocne odwrócenie głowy przez ramię w kierunku obrotu </li>
				<br>
				<br>
				Faza lotu:
				<br>
				<li> należy cały czas obracać głowę w kierunku obrotu (obserwując lądowanie), ciało podąża za głową  </li>
				<li>kolana lekko ugięte, środek ciężkości nad środkiem deski  </li>
				<li>przednia ręka wyprostowana i odchylona w kierunku obrotu  </li>
				<li>dokręcamy ciałem pełny obrót i nosem deski wskazujemy na lądowanie </li>
				<br>
				<br>
				Faza lądowania:
				<li>lądować równocześnie całą powierzchnią deski w układzie zrównoważonym  </li>
				<li> obniżyć pozycję w celu zamortyzowania lądowania </li>
				</ul>
				<img src="img/skoki180.png" alt=""> <br>
				<b> f. 50/50  </b>
				<br>
				<br>
				Jest to najprostszy trik w jibbingu czyli jeździe po boxach (skrzynia) i railach (poręczach). Polega on na tym, aby wskoczyć  a następnie przejechać całą przeszkodę tak aby deska i przeszkoda (poręcz , box) na której robimy trik były do siebie równolegle czyli przejechać po nim na wprost .
				<br>
				<br>
				Faza najazdu i wybicia:
				<br>
				<ul>
				<li> najazd z prędkością dostosowaną do długości przeszkody</li>
				<li>najazd na wprost, na płaskiej desce  </li>
				<li>najazd w pozycji obniżonej, z rękami rozłożonymi szeroko na boki, ze wzrokiem skierowanym na koniec przeszkody, tak aby jak najdokładniej określić położenie przeszkody i dostosować linię swojego najazdu  </li>
				<li>  tuż przed poręczą wykonanie ollie (odpowiednio długie i wysokie do odległości od przeszkody) i wskok na przeszkodę tak aby była ona na środku osi podłużnej deski </li>
				<br>
				<br>
				Faza jazdy po przeszkodzie: 
				<li> po wskoczeniu na przeszkodę należy utrzymać równowagę jadąc spokojnie po przeszkodzie  </li>
				<li>w przypadku przeszkody ustawionej nieznacznie w dół (pochyło) należy pochylić tułów do przodu starając się utrzymać pozycję prostopadłą do przeszkody
				</li>
				<br>
				<br>
				<li> po dojeździe do końca przeszkody należy zeskoczyć z niej w sposób podobny do spadania z progu  </li>
				<li>  nie należy odbijać się od przeszkody</li>
				<li> lądować równocześnie całą powierzchnią deski w układzie zrównoważonym </li>
				<li> obniżyć pozycję w celu zamortyzowania lądowania </li>
				</ul>
				<br>
				<b> g.  boardslide  </b>
				<br>
				<br>
				Jest to rick polegający na jeździe po przeszkodzie (box, rail, ...) na desce ustawionej prostopadle do osi długiej przeszkody. Podtsawową formą boardslidea jest backside boardslide, w którym snowboardzista porusza się po przeszkodzie przodem w kierunku jazdy. 
				<br>
				<br>
				<ul>
				Faza najazdu i wybicia: 
				<li> najazd z prędkością dostosowaną do długości przeszkody </li>
				<li> najazd na wprost, na płaskiej desce  </li>
				<li>  najazd w pozycji obniżonej, z rękami rozłożonymi szeroko na boki, ze wzrokiem skierowanym na koniec przeszkody, tak aby jak najdokładniej określić położenie przeszkody i dostosować linię swojego najazdu </li>
				<li> tuż przed poręczą wykonanie ollie (odpowiednio długie i wysokie do odległości od przeszkody) i wskok na przeszkodę z jednoczesnym obrotem tułowia, nóg wraz z deską o 90 stopni do ustawienia przodem do przeszkody</li>
				<br>
				<br>
				Faza jazdy po przeszkodzie: 
				<li>po wskoczeniu na przeszkodę do ustawienia deski prostopadle do osi długiej przeszkody należy utrzymać równowagę jadąc spokojnie po przeszkodzie  </li>
				<li>w przypadku przeszkody ustawionej nieznacznie w dół (pochyło) należy pochylić tułów do przodu starając się utrzymać pozycję prostopadłą do przeszkody
				</li>
				<br>
				<br>
				Faza zejścia z przeszkody: 
				<li>  po dojeździe do końca przeszkody należy zeskoczyć z niej podobnie jak przy 50/50 z jednoczesnym obrotem o 90 stopni, powracając do pozycji z najazdu </li>
				<li> nie należy odbijać się od przeszkody • lądować równocześnie całą powierzchnią </li>
				<li> lądować równocześnie całą powierzchnią deski w układzie zrównoważonym </li>
				<li> obniżyć pozycję w celu zamortyzowania lądowania</li>
				</ul>
				<img src="img/boardslide.png" alt="">
							



</div>
</div>
</body>


</html>