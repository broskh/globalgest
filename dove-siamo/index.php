<?php
	include_once '../lib/functions.php';	//Includo la mia libreria PHP
	$dom = open_html("Dove siamo");	//genero il dom
 	$body = $dom->getElementsByTagName("body")->item(0);	//salvo il riferimento al nodo body
 	
 	addHorizontalNavbar($body);	//aggiungo la barra di navigazione
 	addHeaderImage($body);	//aggiungo l'immagine in header
//  	<------------------------------------------------------>
//		CONTENUTO DELLA PAGINA VERO E PROPRIO
 	
//		<--variabili contenenti il testo da inserire nei paragrafi
 	$par1_text = <<<HTML
 	Potete trovarci qui:
HTML;
// 		fine variabili di testo-->
 	
//  	<--inizio della creazione della struttura del contenuto specifico della pagina
 	$where_we_are = $body->ownerDocument->createElement ("section");
 	$where_we_are->setAttribute ("id", "where");
 	$where_we_are->setAttribute ("class", "section_content");
 	
 	$container = $where_we_are->ownerDocument->createElement ("div");
 	$container->setAttribute ("class", "container");
 	
// 		aggiungo titolo
 	addContentTitle($container, ["Dove ", "SIAMO"], "");
 	
//  	aggiungo il contenuto
 	$row1 = $container->ownerDocument->createElement ("div");
	$row1->setAttribute ("class", "row");
	
	$main_feature = $row1->ownerDocument->createElement ("div");
	$main_feature->setAttribute ("class", "main_feature");
	
	$col1 = $main_feature->ownerDocument->createElement ("div");
	$col1->setAttribute ("class", "col-md-12 col-xs-12 col-sm-12");

	$par1 = $col1->ownerDocument->createElement ("p", $par1_text);
	$col1->appendChild ($par1);

	$main_feature->appendChild ($col1);
 	$row1->appendChild ($main_feature);
 	$container->appendChild ($row1);
 	
 	$row2 = $container->ownerDocument->createElement ("div");
	$row2->setAttribute ("class", "row margin-top-25");
	
	$gmap = $row2->ownerDocument->createElement ("div");
	
	$col2 = $gmap->ownerDocument->createElement ("div");
	$col2->setAttribute ("class", "col-md-9 left");
	
	$iframe = $col2->ownerDocument->createElement ("iframe");
	$iframe->setAttribute ("src", "https://www.google.com/maps/embed/v1/place?q=place_id:ChIJa11EzmPdf0cR3IMdKGTQaTI&key=AIzaSyA4S7CEnQ7FxbTwvGKfPB__ShvHDNHzj_E&zoom=12");
	$iframe->setAttribute ("class", "map");
// 	$iframe->setAttribute ("width", "900");
// 	$iframe->setAttribute ("height", "500");
	$iframe->setAttribute ("frameborder", "0");
// 	$iframe->setAttribute ("style", "border:0");
	$iframe->setAttribute ("allowfullscreen", "");
	
	$col2->appendChild ($iframe);
	$gmap->appendChild ($col2);
	
	$col3 = $gmap->ownerDocument->createElement ("div");
	$col3->setAttribute ("class", "col-md-3 right");
	
	$address = $col3->ownerDocument->createElement ("div");
	
	$information1 = $address->ownerDocument->createElement ("p");
	$strong_name = $information1->ownerDocument->createElement ("span");
	$strong_name->appendChild ($strong_name->ownerDocument->createElement ("strong", ragione_sociale));
	$information1->appendChild($strong_name);	
	addBR($information1);
	$information1->appendChild($information1->ownerDocument->createElement ("span", via . ", " . n_civico));
	addBR($information1);
	$information1->appendChild($information1->ownerDocument->createElement ("span", citta . " " . provincia_abbr . ", " . cap));
	addBR($information1);
	$information1->appendChild($information1->ownerDocument->createElement ("span", paese));
	$address->appendChild ($information1);
	
	$information2 = $address->ownerDocument->createElement ("p");
	$i_tel = $information2->ownerDocument->createElement ("i");
	$i_tel->setAttribute ("class", "fa fa-phone");
	$information2->appendChild ($i_tel);
	$information2->appendChild($information2->ownerDocument->createElement ("span", "&nbsp;&nbsp;tel: " . tel));
	addBR($information2);
	$i_fax = $information2->ownerDocument->createElement ("i");
	$i_fax->setAttribute ("class", "fa fa-fax");
	$information2->appendChild ($i_fax);
	$information2->appendChild($information2->ownerDocument->createElement ("span", "&nbsp;&nbsp;fax: " . fax));
	addBR($information2);
	$i_mail = $information2->ownerDocument->createElement ("i");
	$i_mail->setAttribute ("class", "fa fa-envelope");
	$information2->appendChild ($i_mail);
	$information2->appendChild($information2->ownerDocument->createElement ("span", "&nbsp;&nbsp;e-mail: " . email));
	$address->appendChild ($information2);
	
	$col3->appendChild ($address);
	$gmap->appendChild ($col3);
	$row2->appendChild ($gmap);
	$container->appendChild ($row2);
 	$where_we_are->appendChild ($container);
 	$body->appendChild($where_we_are);
//  	fine della struttura-->
	
//  	<------------------------------------------------------>
 	addFooter($body);	//aggiungo il footer
 	addBackToTopButton($body);	//aggiungo il bottone che riporta all'inizio della pagina
 	importJS($body);	//importo le librerie Javascript
	echo $dom->saveHTML();	//stampo tutto l'html
?>