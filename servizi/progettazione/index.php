<?php
	include_once '../../lib/functions.php';	//Includo la mia libreria PHP
	$dom = open_html("Progettazione");	//genero il dom
 	$body = $dom->getElementsByTagName("body")->item(0);	//salvo il riferimento al nodo body
 	
 	addHorizontalNavbar($body);	//aggiungo la barra di navigazione
 	addHeaderImage($body);	//aggiungo l'immagine in header
//  	<------------------------------------------------------>
//		CONTENUTO DELLA PAGINA VERO E PROPRIO
 	
//		<--variabili contenenti il testo da inserire nei paragrafi
 	$par1_text = <<<HTML
 	Il nostro staff tecnico &egrave; in grado di progettare impianti in grado di soddisfare 
 			le specifiche esigenze del committente sotto tutti gli aspetti, sia normativi che di 
 			utilizzo funzionale degli stessi.
HTML;
 	
//  	<--inizio della creazione della struttura del contenuto specifico della pagina
 	$design = $body->ownerDocument->createElement ("section");
 	$design->setAttribute ("id", "progettazione");
 	$design->setAttribute ("class", "section_content");
 	
 	$container = $design->ownerDocument->createElement ("div");
 	$container->setAttribute ("class", "container");
 	
// 		aggiungo titolo
 	addContentTitle($container, ["", "PROGETTAZIONE"], "");
 	
//  	aggiungo il contenuto
 	$row1 = $container->ownerDocument->createElement ("div");
	$row1->setAttribute ("class", "row");
	
	$main_feature = $row1->ownerDocument->createElement ("div");
	$main_feature->setAttribute ("class", "main_feature");
	
	$col = $main_feature->ownerDocument->createElement ("div");
	$col->setAttribute ("class", "col-md-12 col-xs-12 col-sm-12");	
	
	$par1 = $col->ownerDocument->createElement ("p", $par1_text);
	$col->appendChild ($par1);
	$main_feature->appendChild ($col);
 	$row1->appendChild ($main_feature);
 	$container->appendChild ($row1);
 	$design->appendChild ($container);
 	$body->appendChild($design);
//  	fine della struttura-->
	
//  	<------------------------------------------------------>
 	addFooter($body);	//aggiungo il footer
 	addBackToTopButton($body);	//aggiungo il bottone che riporta all'inizio della pagina
	importJS($body);	//importo le librerie Javascript
	echo $dom->saveHTML();	//stampo tutto l'html
?>