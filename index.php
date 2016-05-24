<?php
	include_once 'lib/functions.php';	//Includo la mia libreria PHP
	$dom = open_html("Home");	//genero il dom
 	$body = $dom->getElementsByTagName("body")->item(0);	//salvo il riferimento al nodo body
 	
 	addHorizontalNavbar($body);	//aggiungo la barra di navigazione
 	addHeaderImage($body);	//aggiungo l'immagine in header
//  	<------------------------------------------------------>
//		CONTENUTO DELLA PAGINA VERO E PROPRIO
 	
//		<--variabili contenenti il testo da inserire nei paragrafi
 	$par1_text = <<<HTML
 	Global Gest &egrave; un impresa che opera nel settore dei servizi. Ci occupiamo di progettare e 
 			realizzare per voi impianti "chiavi in mano" di tipo elettrico, fotovoltaico, 
 			tecnologico, e tanto altro.
HTML;
 	$par2_text = <<<HTML
 	Potete affidarvi a noi anche per opere di installazione, ampliamento, trasformazione 
 			e manutenzione di varie tipologie d'impianti.
HTML;
 	$par3_text = <<<HTML
 	Per saperne di pi&ugrave;, continuate a visitare il nostro sito, o contattateci. Saremo lieti di aiutarvi.
HTML;
// 		fine variabili di testo-->
 	
//  	<--inizio della creazione della struttura del contenuto specifico della pagina
 	$about_us = $body->ownerDocument->createElement ("section");
 	$about_us->setAttribute ("id", "welcome");
 	$about_us->setAttribute ("class", "section_content");
 	
 	$container = $about_us->ownerDocument->createElement ("div");
 	$container->setAttribute ("class", "container");
 	
// 		aggiungo titolo
 	addContentTitle($container, ["", "BENVENUTI"], "");
 	
//  	aggiungo il contenuto
 	$row1 = $container->ownerDocument->createElement ("div");
	$row1->setAttribute ("class", "row");
	
	$main_feature = $row1->ownerDocument->createElement ("div");
	$main_feature->setAttribute ("class", "main_feature");
	
	$col1 = $main_feature->ownerDocument->createElement ("div");
	$col1->setAttribute ("class", "col-md-3 col-xs-12 col-sm-3");
	
	$image = $col1->ownerDocument->createElement ("img");
	$image->setAttribute ("src", dir_img . "/logo.png");
	$image->setAttribute ("class", "img-responsive");
	
	$col1->appendChild ($image);
	$main_feature->appendChild ($col1);

	$col = $main_feature->ownerDocument->createElement ("div");
	$col->setAttribute ("class", "col-md-9 col-xs-12 col-sm-9");	
	
	//$paragraph = $col2->ownerDocument->createElement ("h4");
	$par1 = $col->ownerDocument->createElement ("p", $par1_text);
	$col->appendChild ($par1);
	$par2 = $col->ownerDocument->createElement ("p", $par2_text);
	$col->appendChild ($par2);
	$par3 = $col->ownerDocument->createElement ("p", $par3_text);
	$col->appendChild ($par3);
	$main_feature->appendChild ($col);
 	
 	$row1->appendChild ($main_feature);
 	$container->appendChild ($row1);
 	$about_us->appendChild ($container);
 	$body->appendChild($about_us);
//  	fine della struttura-->
	
//  	<------------------------------------------------------>
 	addFooter($body);	//aggiungo il footer
 	addBackToTopButton($body);	//aggiungo il bottone che riporta all'inizio della pagina
	importJS($body);	//importo le librerie Javascript
	echo $dom->saveHTML();	//stampo tutto l'html
?>