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
					
				<h1><b>DESKA SNOWBOARDOWA</b></h1>
				<img src="img/deska.png" alt="">
				<br>
				<br>
				Niezaprzeczalnie jest najistotniejszym elementem jazdy na snowboardzie jest właśnie deska. Przy wyborze deski należy zwrócić uwagę na to do czego i dla kogo deska jest przeznaczona, jaką ma charakterystykę, czy spełni Twoje wszystkie oczekiwania i pozwoli na szybki progres.
				<br>
				<br>
				<b>PRZEZNACZENIE DESKI</b> - przeznaczenie deski odpowiada za zachowanie się deski w danych warunkach, podczas konkretnych manewrów. Deskę snowboardową wymyślił Jake Burton, właściciel marki Burton. Najlepsze deski snowboardowe to: Burton, Drake, Ride, DC, Libtech, Gnu i Bataleon.
				<br>
				<br>
				<b>All Mountain</b> - kategoria desek najbardziej uniwersalnych, skonstruowanych i przeznaczonych dla początkujących i średnio zaawansowanych osób. Te deski sprawdzą się na i poza stokiem, wybaczają dużo błędów i pozwalają na szybki progres bez zastanawiania się nad tym gdzie i jak akurat masz ochotę jeździć.
				<br>
				<br>				
				<b>Freestyle</b> - są to zazwyczaj miękkie deski, w kształcie twin tip, aby jazda na switchu była tak samo łatwa i przyjemna. Sprawdzają się w snowparku i na miękkich przygotowanych trasach, niestety w głębokim puchu nose lubi nurkować. Można temu zapobiec przesuwając wiązania w stronę taila.
				<br>
				<br>
				<b>Freeride</b> - deski skonstruowane do jazdy w każdych warunkach, głównie do szybkiej jazdy po przygotowanych stokach jak i w poza trasami w dziewiczym puchu. Są to deski directional, z przesuniętymi w tył insertami, przez co łatwiej się je prowadzi. Wydłużony nose ułatwia jazdę w puchu. Lepiej trzymają krawędź przy dużej prędkości.
				<br>
				<br>
				<b>Jibbing</b> - deski nieco krótsze, o kształtcie Twin Tip, zazwyczaj mają o kilka stopni podniesione krawędzie co ułatwia slide po poręczach i murkach, wzmacniana konstrukcja zapobiega odkształceniom przy upadkach, deski jibbowe nie są przeznaczone do szybkiej jazdy - są stworzone do zabawy i z tego zadania wywiązują się znakomicie.
				<br>
				<br>
				<b>Buttering</b> - stosunkowo miękkie deski w kształcie Twin, o nieco zredukowanej długości. Idealny typ dla osób lubiących jeździć w formie zabawowej, wykorzystując naturalne ułożenie stoku. Wszelkie flatowe triki, rotacje, pressy, rolle - to esencja tego stylu.
				
				<br>
				<br>
				<b>KSZTAŁT DESKI</b> - kształt deski odpowiada za zachowanie się deski przy jeździe na switchu, a także za to jak deska reaguje na jazdę w głębokim puchu.
				<br>
				<br>
				<b>Twin Tip</b> – deski symetryczne, przód i tył deski są takiej samej długości, środek ciężkości rozłożony centralnie, kształt stosowany głównie w deskach Freestyle'owych i Jibbowych.
				<img src="img/twin.png" alt="">
				<br>
				<br>
				<b>Directional</b> – deski kierunkowe, niesymetryczne, środek ciężkości jest przesunięty w tył (setback), kształt stosowany głównie w deskach Freeride'owych.
				<br>
				<img src="img/directional.png" alt="">
				<br>
				<br>
				<b>Deski "WIDE"</b>- poszerzane deski snowboardowe, przeznaczone dla osób z dużą stopą (rozmiar buta powyżej 45), mają szerszą talię przez co czubki butów nie wystają poza krawędź deski.
				<img src="img/wide.png" alt="">
				<br>
				<br>
				<b>KONSTRUKCJA DESKI</b> - jest to jeden z najważniejszych czynników wpływających na właściwości deski, głównie odpowiada za reagowanie na bodźce wysyłane przez ridera.
				<br>
				<b>Camber</b> - tradycyjna, konstrukcja od lat ciesząca się niesłabnącą popularnością, pomaga utrzymać stabilność przy większych prędkościach, zapewnia lepsze trzymanie krawędzi i większą kontrolę, ale wymaga od ridera większych umiejętności. Ma dużego popa i jest bardzo uniwersalna.
				<img src="img/camber.png" alt="">
				<br>
				<b>Clasic Rocker</b> - tzw: banan, czyli deska z podgiętym do góry nosem i tailem, pozwala na większą swobodę jazdy i lepszą zwrotność, ułatwia obroty i zapobiega wcinaniu się krawędzi, nie pozwala na tak dynamiczną jazdę jak Camber, ale jest łatwiejsza w prowadzeniu i zapewnia maksimum fun'u z jazdy.
				<br>
				<img src="img/classic.png" alt="">
				<br>
				<b>V-Rocker</b> - podobnie jak klasyczny rocker ma podgięty do góry nose i tail, różni się od niego promieniem ugięcia - w tym przypadku największe ugięcie przypada na odcinek między wiązaniami, skręca jak klasyczny Rocker, prowadzi się jak Flat.
				<br>
				<img src="img/vrocker.png" alt="">
				<br>
				<b>Powder Rocker</b> - to co charakteryzuję ten profil to mocno podgięty i wydłużony nose w stosunku do taila, taka deska nie tonie w głębokim puchu i połyka muldy z niezwykłą lekkością.
				<br>
				<img src="img/powder.png" alt="">
				<br>
				<b>Flat</b> - płaska konstrukcja łącząca w sobie zalety Cambera i Rockera, bardzo uniwersalna, jej profil jest płaski przez co cała długość krawędzi przylega do śniegu niezależnie od sytuacji.
				<b>RODZAJ ŚLIZGU</b> - odpowiada za prędkość deski, im lepszy ślizg tym szybciej i płynniej się rozpędzisz.
				<br>
				<img src="img/zero.png" alt="">
				<br>
				<b>Hybrid</b> - konstrukcja oparta na łączeniu wyżej wymienionych profili, w różnych częściach deski, w różnym stopniu, jest to złożony temat dla zaawansowanych riderów.
				<br>
				<img src="img/hybrid.png" alt="">
				<br>
				<br>
				<b>Tłoczony (extruded)</b> - jest to ślizg najłatwiejszy w naprawie i nie wymaga częstego, kompleksowego smarowania. Ale jak to zwykle bywa nie ma róży bez kolców i jest to najwolniejszy rodzaj ślizgu.
				<br>
				<br>
				<b>Spiekany (sintered)</b> - jest dużo lepszym materiałem. Wymaga większej dbałości i systematyczności w smarowaniu. Jest nieco szybszy od ślizgu tłoczonego.
				<br>
				<br>
				<b>Electra (sintered graphite)</b> - najszybszy ze ślizgów. Nasmarowany rozpędza się z kosmiczną lekkością, ale jeśli nie jest regularnie smarowany traci właściwości jezdne.
				<br>
				<br>
				<b>TWARDOŚĆ ŚLIZGU</b>
				Twardość deski, najczęściej podawana w skali 1-10, gdzie: 1 - deska bardzo miękka, 10 - deska bardzo twarda. Sztywność deski ogromnie wpływa na jej stabilność i prowadzenie, w dużym uproszeniu - miękkie deski "wybaczają błędy", łatwo się prowadzą, ale nie pozwalają na bardzo precyzyjne, dynamiczne skręty. Twarde deski zapewniają dużą precyzję prowadzenia, mocne trzymanie krawędzi i mają sporą energię, którą odzyskuje się podczas skrętu, ale wymagają od ridera większych umiejętności i nie pozwalają na dużą swobodę ruchów.
				<br>
				<br>
				<h1><b>WIĄZANIA SNOWBOARDOWE</b></h1>
				<img src="img/wiazania.png" alt="">
				<br>
				<br>
				Wiązania snowboardowe powinny być dobierane do konkretnej deski. Zalecamy miękkie wiązania do miękkich desek i odwrotnie - twarde do twardych. Przy wybieraniu swoich wymarzonych wiązań należy zwrócić uwagę na kilka rzeczy. Najlepsze marki wiązań snowboardowych to: Burton, Drake, Ride, Union.
				<br>
				<br>
				<b>PODSTAWA</b> - jest to płyta, do której przymocowany jest Hi-back i strapy, podstawę za pomocą kółka z otworami przykręcamy do deski. Podstawa może być wykonana z aluminium i tworzywa sztucznego - te pierwsze są zdecydowanie sztywniejsze, a dobrym rozwiązaniem są podstawy częściowo wykonane z kompozytu a częściowo z aluminium. Przy wyborze wiązań należy zwrócić uwagę na amortyzację jaką zapewniają dane wiązania. Podstawa może być wyposażona w cienką warstwę pianki lub gumy na powierzchni, z którą styka się z deską - zapewnia to lepsze przyleganie wiązań do deski nie usztywniając jej. Górna powierzchnia podstawy powinna być pokryta na całej powierzchni pianką absorbującą wstrząsy. Dobrze kiedy podstawa ma regulowany pedał gazu i poduszkę amortyzującą pod piętą.
				<br>
				<br>
				<b>HI-BACK</b> - czyli tak zwana łyżka, odpowiada za trzymanie boczne buta i kąt pod jakim jest ustawiona w stosunku do podstawy, odgrywa dużą rolę podczas jazdy na wprost i podczas pokonywania zakrętów na tylnej krawędzi. Przy wybieraniu wiązań należy zwrócić uwagę czy łyżka danych wiązań jest dobrze wyprofilowana (czy przylega do buta) i czy jej regulacja pozwala na dobranie odpowiedniego kąta. Kąt pod jakim nachylona jest łyżka w stosunku do podstawy odpowiada za pozycję podczas jazdy (ugięte kolana).
				<br>
				<br>
				<b>STRAPY</b> - strapy są to paski wyposażone w pompki, dzięki którym przypinamy but do wiązań. W zdecydowanej większości wiązań występują dwa strapy - każdy z nich jest wyposażony w poduszkę pozwalającą na lepsze dopasowanie wiązań do butów. Przy wyborze wiązań należy zwrócić uwagę na to z jakiego materiału wykonane są pompki, czy poduszki są miękkie i odpowiednio wyprofilowane, a także czy paski są regulowane w wystarczającym zakresie, najlepiej obustronnie. Rozwiązaniem zdobywającym co raz więcej entuzjastów jest przedni strap w kształcie noska (zakładany na czubek buta).
				<br>
				<br>
				<b>EST</b> - system stosowany przez markę Burton, polegający na mocowaniu wiązań za pomocą 2 śrub i specjalnej szyny umieszczonej w rdzeniu deski. Dzięki EST rider ma możliwość całkowicie płynnej regulacji kątów i rozstawu wiązań, a deska nie jest niepotrzebnie usztywniana pod wiązaniami. Wiązania z systemem EST są kompatybilne z deskami z szyną zamiast insertów czyli systemem The Channel.
				<br>
				<br>
				<h1><b>BUTY SNOWBOARDOWE</b></h1>
				<img src="img/buty.png" alt="">
				<br>
				<br>
				Buty to element, który w największym stopniu odpowiada za komfort i przyjemność z jazdy. Niewygodne, nie trzymające pięty buty mogą zniweczyć zakup najlepszego sprzętu i zaprzepaścić szanse na szybki progres. Jak dobrać buty by zapewniły maksimum wygody i sprostały wszystkim oczekiwaniom? Najlepsze marki produkujące buty snowboardowe to: ThirtyTwo, Burton, Northwave, DC.
				<br>
				<br>
				<b>ROZMIAR </b> - najważniejszy jest rozmiar - zawsze należy się kierować długością wkładki podaną w centymetrach. Takie informacje podane są każdej tabeli rozmiarów znajdującej się przy wszystkich butach. Idealnie dobrany rozmiar jest wtedy gdy w zasznurowanych butach odległość od dużego palca do końca buta to ok. 0.5cm.
				<br>
				<br>
				<b>WKŁADKA WEWNĘTRZNA</b> - bezpośrednio odpowiada za komfort i dopasowanie do stopy danych butów. Podczas wyboru butów należy zwrócić uwagę na elementy wspomagające trzymanie kostki i pięty takie jak: poduszki wokół kostek, specjalny materiał na pięcie, specjalne paski oplatające kostkę, rozbudowany system wewnętrznego sznurowania. Jeśli wkładka wyposażona jest w poduszkę amortyzującą pod piętą obniży to zdecywoanie poziom drgań jakie są przenoszone na ridera podczas jazdy. Najlepsze wkładki są termoformowalne to znaczy, że idealnie dopasują się do Twojej stopy pod wpływem ciepła.
				<br>
				<br>
				<b>PODESZWA </b> - podeszwa odpowiada za amortyzację, dopasowanie buta do wiązań i przyczepność podczas chodzenia po śniegu, zaawansowane technologicznie podeszwy doskonale wypełniają te zadania.
				<br>
				<br>
				<b>SYSTEMY SZNUROWANIA</b> - istnieje kilka systemów sznurowania i każdy rider powinien zdecydować, który system będzie dla niego najlepszy.
				
				<b>1. Tradycyjny</b> - klasyczny system opary o sznurowadła i haczyki w górnej części buta, niezawodny i genialny w swej prostocie.
				<br>
				<br>
				<b>2. System szybkiego sznurowania</b> - wiele firm ma swoje systemy szybkiego sznurowania, które pozwalają na zasznurowanie buta za pomocą jednego szybkiego ruchu lub pokrętła. Niektóre systemy pozwalają na regulacje zacisku osobno górnej i dolnej części buta. Panie bardzo chwalą sobie takie rozwiązania z uwagi na niewielką siłę jaką należy użyć do mocnego zasznurowania butów.
				<br>
				<br>
				<b>BOA</b> - system oparty o sieć stalowych linek zaciskanych specjalnym pokrętłem. Nie wymaga dużej siły by dobrze zasznurować buty, a rozsznurowanie butów zajmuje... sekundę. Doskonały dla Pań, dla których mocne zasznurowanie butów może stanowić problem.
				<br>
				<br>
				<b>FLEX</b> - podobnie jak w przypadku desek i wiązań twardość butów wpływa na precyzję prowadzenia. Flex butów dobieramy do deski i wiązań.
				<br>
				<br>
			<h1><b>GOGLE</b></h1>
			<img src="img/gogle.png" alt="">
			<br>
			<br>
			Ciężko wyobrazić sobie jazdę w trudnych warunkach bez gogli na oczach. Wbijające się w gałki oczne kryształki lodu, wyciskający łzy wiatr czy oślepiające słońce to nie są pożądane rzeczy podczas zimowego szaleństwa. Na co zwrócić uwagę przy wyborze gogli? Najlepsze gogle to: Von Zipper, Dragon, Oakley, Anon i Spy.
			<br>
			<br>
			<b>SZYBKA</b> - szybka jest najważniejszą częścią gogli i to ona odpowiada za jakość obrazu jaki trafi do naszych oczu. Markowe gogle mają soczewki wykonane z najlepszych materiałów, które gwarantują obraz bez żadnych zniekształceń, dodatkowo chronią czy przed szkodliwym promieniowaniem UV. Szybki są dwuwarstwowe i pokryte powłokami zabezpieczającymi soczewkę przed zarysowaniem. Zaawansowane systemy wentylacji zapobiegają ich parowaniu. Do wyboru są gogle o bardzo szerokim polu widzenia, z lustrzanymi powłokami odbijającymi mocne światło słoneczne, czy z filtrami polaryzacyjnymi, które pochłaniają odbicia światła od śniegu i lodu. Kolor szybki jest dostosowany do określonych warunków zewnętrznych, jak stopień zachmurzenia, czy pora dnia (dzień/noc).
			<br>
			<br>
			<b>RAMKA</b> - najlepiej gdy jest wykonana z miękkiego odpornego na niskie temperatury materiału. Takie gogle nie pękną ani nie odkształcą się podczas ekstremalnych warunków. Lekkie materiały gwarantują komfort używania przez cały dzień.
			<br>
			<br>
			<b>PASEK</b>- szeroki, płynnie regulowany pasek zapewni dobre przyleganie gogli do głowy i zapobiegnie ich spadaniu podczas ewentualnych upadków.
			<br>
			<br>
			<b>Super Anti Fog</b> to system zapobiegający parowaniu szybek. Podwójna szybka, specjalne kanały wentylacyjne i powłoki zapobiegające skraplaniu się pary wodnej na powierzchni szybki, pozwalają w każdych warunkach zachować doskonałą widoczność.
			<br>
			<br>
			<b>Swiftlock</b> to system wprowadzony przez firmę Dragon, umożliwiający ekspresowe wymienienie szybki w goglach. Dzięki temu rozwiązaniu będziemy mogli w prosty i szybki sposób dopasować szybkę do zmieniających się warunków na stoku.
			<br>
			<br>
			<h1><b>ODZIEŻ</b></h1>
			<img src="img/kurtka.png" alt="">
			<br>
			<br>
			Jeśli mamy już deskę, wiązania, buty i gogle, czas zaopatrzyć się w odpowiednią odzież na snowboard, bez której przyjemność z jazdy byłaby, delikatnie mówiąc, "mocno ograniczona".
			<br>
			<br>
			Odzież wierzchnia posiada zawsze dwa niezwykle istotne parametry materiału z jakiego została wykonana:
			<br>
			<b>Wodoodporność</b> - parametr informujący o tym ile mm słupa wody jest w stanie wytrzymać dany materiał bez przemakania, im wyższa wartość tym lepiej (wodoodporność 10 000mm oznacza, że w warunkach laboratoryjnych dany materiał nie przemoknie pod naciskiem słupa wody o wysokości 10 metrów).
			<br>
			<br>
			<b>Oddychalność</b> - parametr informujący o tym ile gramów pary wodnej na metr kwadratowy jest w stanie odprowadzić dany materiał w czasie jednej doby, również im wyższa wartość tym lepiej (oddychalność 10 000g/m2/24h oznacza, że 1 metr kwadratowy tego materiału w warunkach laboratoryjnych jest w stanie przepuścić 10kg pary wodnej w czasie 24h).
			<br>
			<br>
			<b>Rękawice snowboardowe</b> mogą mieć 5, 3 lub 2 "palce". Te pierwsze zapewniają dużą precyzję podczas np. zapinania wiązań, natomiast te ostatnie zdecydowanie lepiej trzymają temperaturę.
			<br>
			Dobrym rozwiązaniem dla osób lubiących dobrze się zabezpieczyć na stoku jest rozwiązanie opatentowane przez firmę
Level. Mowa oczywiście o systemie Biomex. Jest to system chroniący nasze nadgarstki przed kontuzjami.
<br>
<br>
<b>Skarpety snowboardowe</b> utrzymują ciepło stopy i odprowadzają wilgoć, pozwalając dłużej cieszyć się jazdą na stoku :)  
			
			
			
			
			
</div>
</div>
</body>


</html>