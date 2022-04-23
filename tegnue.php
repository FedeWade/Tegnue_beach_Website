<?php
	require_once __DIR__ . "/php/connectionpd.php";
?>

<!DOCTYPE html>
<html lang="it">

<head>
	<meta charset="UTF-8"/>
	<title>Ristorante Le Tegn&ugrave;e | Sottomarina</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/tegnuestylecompressed.css" media="screen and (min-width:770px)"/>
	<link rel="stylesheet" type="text/css" href="css/smallstylecompressed.css" media="screen and (max-width:770px)"/>
	<link rel="stylesheet" type="text/css" href="css/print.css" media="print"/>
	<noscript>
		<link rel="stylesheet" type="text/css" href="css/nojs.css"/>
	</noscript>
	<meta name="keywords" content="ristorante Le Tegnùe, tegnue, ristorante, sottomarina, pesce, spiaggia, Le Tegnùe Beach" />
	<meta name="description" content="Situato in un luogo tranquillo, lontano dai posti affollati e rumorosi del centro città, 
			immerso nel verde delle palme. Questo &egrave; quello che vi attende al Ristorante le Tegn&ugrave;e,
			cominciando dal comodo parcheggio per continuare con l'accogliente sala in gran 
			parte all'aperto, perfetta per chi vuole sentirsi davvero in vacanza." />
	<meta name="author" content="Ballarin Federico" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
</head>

<body>
	<a id="vaialcontenuto" title="Salta la barra di navigazione a vai al contenuto." href="#maintitle" lang="en">Skip to main content.</a>

	<div id="container">
	
	<div id="navbar">
		<ul class="nav">
			<li class="logo"> <img class="imglogo" src="images/logonoscrittabg.png" alt="logo del ristorante Le Tegn&ugrave;e" title="logo del ristorante Le Tegn&ugrave;e"/> </li>
			<li class='h'><span lang="en"><a class="navele" href="#subheader" title="Vai alla sezione: Home.">Home</a></span></li>
			<li class='h'><a class="navele" href="#descrizione" title="Vai alla sezione: Ristorante.">Ristorante</a></li>
			<li class='h'><a class="navele" href="#menu" title="Vai alla sezione: Men&ugrave;.">Men&ugrave;</a></li>
			<li class='h'><a class="navele" href="#prenota" title="Vai alla sezione: Prenota.">Prenota</a></li>
		</ul>
	</div>
	
	<div id="subheader">
		<img class="logotitle" src="images/logonoscrittabg.png" alt="logo del ristorante Le Tegn&ugrave;e"/>
		<h1 id="maintitle">Le Tegn&ugrave;e</h1><h1 id="subtitle">Ristorante</h1>
		<ul id="cinfo">
			<li class="shinfo"> <span class="fas fa-map-marker-alt"></span> Via <abbr title="Agostino">A.</abbr>Barbarigo 147, Sottomarina VE</li>
			<li class="shinfo"> <span class="fas fa-phone"></span> 340 936 4665</li>
			<li class="shinfo"> <span class="far fa-clock"></span> Aperto tutti i giorni</li>
		</ul>
		<a class="linkbutton1" title="Vai alla sezione: Prenota." href="#prenota">Prenota</a>
		<a class="scrolldownbutton" title="Scorri alla prossima sezione." aria-label="Scorri alla prossima sezione." href="#risto"><span class="fa fa-angle-double-down"></span></a>
	</div>
	
	<div id="risto">
	<div id="slideshowcontainer">
		
		<div class="slide">
			<img id="f1" class="slideimg" src="images/ristorantealto.jpg" title="Panoramica dall'alto del ristorante" alt="Panoramica dall'alto del ristorante"/>
		</div>
		<div class="slide">
			<img id="f2" class="slideimg" src="images/risto02.jpg" title="Il ristorante di sera" alt="Foto raffigurante il ristorante di sera"/>
		</div>
		<div class="slide njs">
			<img id="f3" class="slideimg" src="images/piatto1.jpg" title="Piatto di pesce crudo" alt="Foto di un piatto di pesce crudo"/>
		</div>	
		<div class="slide">
			<img id="f4" class="slideimg" src="images/slide05.jpg" title="Piatto di pesce bollito" alt="Foto di un piatto di pesce bollito"/>
		</div>
		<div class="slide">
			<img id="f5" class="slideimg" src="images/slide01.jpg" title="Piatto di pesce alla griglia" alt="Foto di un piatto di pesce grigliato"/>
		</div>
		
		<button id="prev" title="Mostra immagine precedente.">&#10094;</button>
		<button	id="next" title="Mostra immagine successiva.">&#10095;</button>
	
	</div>
	<script src="js/slideshow.js"></script>
	
	<div id="descrizione"> 
		<h2>Il Ristorante</h2>
		<p class="tdesc">Situato in un luogo tranquillo, lontano dai posti affollati e rumorosi del centro città, 
			immerso nel verde delle palme. Questo &egrave; quello che vi attende al Ristorante le Tegn&ugrave;e,
			cominciando dal comodo parcheggio per continuare con l'accogliente sala in gran 
			parte all'aperto, perfetta per chi vuole sentirsi davvero in vacanza.</p>	
		<a class="linkbutton1" id="indstrad" href="https://goo.gl/maps/veooEa9vhjy" title="Indicazioni stradali per raggiungere il nostro ristorante.">Indicazioni stradali</a>
	</div>
	</div>

	<div id="menu">	
		<h2 id="titolonavmenu">Il Men&ugrave;</h2>
		<div id="menunav">
			<ul class="navmenugruppo">
				<li class="navmenuele"> <button class="btn active" id="btn1" title="Mostra gli antipasti."> Antipasti</button> </li>
				<li class="navmenuele"> <button class="btn" id="btn2" title="Mostra i primi."> Primi</button> </li>
				<li class="navmenuele"> <button class="btn" id="btn3" title="Mostra i secondi."> Secondi</button> </li>
				<li class="navmenuele"> <button class="btn" id="btn4" title="Mostra i contorni."> Contorni</button> </li>
				<li class="navmenuele"> <button class="btn" id="btn5" title="Mostra i piatti freddi."> Piatti freddi</button> </li>
				<li class="navmenuele"> <button class="btn" id="btn6" title="Mostra i dolci."> Dolci</button> </li>

			</ul>	
		</div>
	
	
		<div id="listaelemenu">
			
			<ul class="ulmenu">	
				<?php
		$connection = new DBConnection();
		$connection->openConnection();
		
		$error=false; 
		
		$antipasti=$connection->getelements("antipasti");
		if($antipasti == null)
		{$error=true;}
		else
		{
			foreach($antipasti as $antipasto)
			{
				echo "<li class='allmenu liantipasto'><p class='elenome'>" . $antipasto['nomepiatto'] . "</p>";
				echo "<p class='eleprezzo'>" . $antipasto['prezzopiatto']. "&euro;</p></li>";
			}
		}
			
		$primi=$connection->getelements("primi");
		if($primi == null)
		{$error=true;}
		else
		{
			foreach($primi as $primo)
			{
				echo "<li class='allmenu liprimo'><p class='elenome'>" . $primo['nomepiatto'] . "</p>";
				echo "<p class='eleprezzo'>" . $primo['prezzopiatto']. "&euro;</p></li>";
			}
		}
	
		$secondi=$connection->getelements("secondi");
		if($secondi == null)
		{$error=true;}
		else
		{
			foreach($secondi as $secondo)
			{
				echo "<li class='allmenu lisecondo'><p class='elenome'>" . $secondo['nomepiatto'] . "</p>";
				echo "<p class='eleprezzo'>" . $secondo['prezzopiatto']. "&euro;</p></li>";
			}
		}
		
		$contorni=$connection->getelements("contorni");
		if($contorni == null)
		{$error=true;}
		else
		{
			foreach($contorni as $contorno)
			{
				echo "<li class='allmenu licontorno'><p class='elenome'>" . $contorno['nomepiatto'] . "</p>";
				echo "<p class='eleprezzo'>" . $contorno['prezzopiatto']. "&euro;</p></li>";
			}
		}

		$piattifreddi=$connection->getelements("piatti freddi");
		if($piattifreddi == null)
		{$error=true;}
		else
		{
			foreach($piattifreddi as $piattifreddo)
			{
				echo "<li class='allmenu lipfreddo'><p class='elenome'>" . $piattifreddo['nomepiatto'] . "</p>";
				echo "<p class='eleprezzo'>" . $piattifreddo['prezzopiatto']. "&euro;</p></li>";
			}
		}
		
		$desserts=$connection->getelements("dessert");
		if($desserts == null)
		{$error=true;}
		else
		{
			foreach($desserts as $dessert)
			{
				echo "<li class='allmenu lidolce'><p class='elenome'>" . $dessert['nomepiatto'] . "</p>";
				echo "<p class='eleprezzo'>" . $dessert['prezzopiatto']. "&euro;</p></li>";
			}
		}
		
		if($error)
		{ echo "Errore nella raccolta degli elementi del men&ugrave;"; }
		
		$connection->closeConnection();
	?>
			</ul>
			<script src="js/scriptmenu.js"></script>
		</div>
	
	<p id="infoallergeni">
		Su richiesta al personale &egrave; possibile visionare la lista allergeni/ingredienti contenuti nei nostri piatti.
		In mancanza di prodotto fresco si utilizzano prodotti regolarmente decongelati.
		I prodotti serviti crudi sono regolarmente abbattuti secondo le normative vigenti.
	</p>
	
	</div>
	
	<div id="prenota">
	<div id="formprenota">
	<h2 id="hprenota">Prenota il tuo tavolo</h2>

	<div id="errbox">
	<p id="errtext"></p>
	
	<?php
	if(!empty($_GET['message'])){
    $message = $_GET['message'];
	echo $message;}
	?>
	</div>
	
	<div id="confirmbox">
	<?php
	if(!empty($_GET['confirm'])){
    $confirm = $_GET['confirm'];
	echo $confirm;}
	?>
	</div>
	
		<form name="formp" method="post" action="formaction.php" onsubmit="return validateForm()" >
		<fieldset>
			<legend>Prenotazione</legend>
			<label id="cnl" class="leftside" for="cn">Cognome e nome:</label>
			<input class="inputf" id="cn" type="text" name="cognomenome" title="inserire nome e cognome di riferimento per la prenotazione" required />
			
			<label id="persl" class="rightside" for="pers">Numero di persone:</label>
			<input class="inputf" id="pers" type="number" name="persone" title="inserire il numero di persone della prenotazione" required />
			
			<label id="dtl" class="leftside" for="dt">Data: (gg/mm/aaaa)</label>
			<input class="inputf" id="dt" type="date" name="data" title="inserire la data per il quale si vuole prenotare" required />
			
			<label id="orl" class="rightside" for="or">Ora: (hh:mm)</label>
			<input class="inputf" id="or" type="time" name="ora" title="inserire l'ora per il quale si vuole prenotare" required />
			
			<label id="numl" class="leftside" for="num">Numero di telefono:</label>
			<input class="inputf" id="num" type="text" name="telefono" maxlength="15" title="inserire il numero di telefono" required />
						
			<label id="maill" class="rightside" for="mail">E-mail:</label>
			<input class="inputf" id="mail" type="email" name="email" title="inserire la E-mail" required />
			
			<label class="centered" for="note">Note: (non obbligatorio)</label>
			<textarea class="inputf" id="note" name="note" title="Inserire delle note o delle richieste" ></textarea>
			
			<input id="submitprenota" title="Conferma e invia prenotazione." type="submit" value="Prenota" />
			
		</fieldset>
		</form>
		<p id="infoprenota"> Chiamaci per avere informazioni sulla prenotazione 340 936 4665.</p> 
		
	</div>	
	</div>
	<script src="js/FormVal/form.js"></script>
	
	
	<div id="contatti">
		
		<div id="logof">
			<img class="logocontatti" src="images/logonoscrittabg.png" title="logo del ristorante Le Tegn&ugrave;e" alt="logo del ristorante Le Tegn&ugrave;e"/>
		</div>
	
		<div id="infocontatto">
			<h3>Informazioni di contatto</h3>
			<ul class="cinfofoot">
			<li class="foot"><span class="f fas fa-map-marker-alt"></span> Via A.Barbarigo 147, Sottomarina VE</li>
			<li class="foot"><span class="f fas fa-phone"></span> 340 936 4665</li>
			<li class="foot"><span class="f far fa-clock"></span> Aperto tutti i giorni</li>
			<li class="foot"><span class="f fas fa-envelope"></span> info@letegnueristo.it</li>
			</ul>
		</div>
	
		<div id="social">
			<a href="https://it-it.facebook.com/LeTegnueBeach/" title="Pagina Facebook del ristorante." class="fo fa fa-facebook" aria-label="Pagina Facebook del ristorante."></a>
			<a href="#" title="Torna all'inizio della pagina." class="fo fas fa-arrow-up" aria-label="Torna all'inizio della pagina."></a>
		</div>
	
	</div>

	<div id="end">
		<p id="piva"> <abbr title="Partita iva">P.Iva</abbr> 02351960279 - Viale Agostino Barbarigo, 147 30015 Chioggia (Ve) - <span lang="en">Italy</span></p>
	</div>
</div>
</body>
</html> 