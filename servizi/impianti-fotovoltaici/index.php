<?php
	include_once '../../lib/functions.php';	//Includo la mia libreria PHP
	$dom = open_html("Impianti fotovoltaici");	//genero il dom
 	$body = $dom->getElementsByTagName("body")->item(0);	//salvo il riferimento al nodo body
 	
 	addHorizontalNavbar($body);	//aggiungo la barra di navigazione
 	addHeaderImage($body);	//aggiungo l'immagine in header
//  	<------------------------------------------------------>
//		CONTENUTO DELLA PAGINA VERO E PROPRIO
 	
//		<--variabili contenenti il testo da inserire nei paragrafi
 	$par1_text = <<<HTML
 	La tecnologia FV permette di trasformare direttamente l'energia in elettricit&agrave;, 
 			attraverso sistemi progettati per garantire alta efficienza per oltre 25 anni, 
 			con massima manutenzione ed in grado di resistere alle sollecitazioni dei 
 			normali agenti atmosferici.
HTML;
 	$par2_text = <<<HTML
 	Il fotovoltaico &egrave; una scelta concreta per il presente. Offre la possibilit&agrave;
 			di beneficiare di un rendimento superiore ad ogni altro investimento a CAPITALE 
 			GARANTITO, sia con l'auto produzione, sia con la riduzione del costo 
 			dell'energia autoconsumata.
HTML;
 	$par3_text = <<<HTML
 	Non meno importante il fotovoltaico &egrave; soprattutto una scelta responsabile 
 			per il futuro dei nostri figli: le minori immissioni inquinanti garantiranno 
 			loro la sicurezza di un mondo pi&ugrave; pulito.
HTML;
 	$par4_text = <<<HTML
 	Gestione ITER con realizzazione di:
HTML;
// 		fine variabili di testo-->
 	
//  	<--inizio della creazione della struttura del contenuto specifico della pagina
 	$about_us = $body->ownerDocument->createElement ("section");
 	$about_us->setAttribute ("id", "impianti-fotovoltaici");
 	$about_us->setAttribute ("class", "section_content");
 	
 	$container = $about_us->ownerDocument->createElement ("div");
 	$container->setAttribute ("class", "container");
 	
// 		aggiungo titolo
 	addContentTitle($container, ["impianti ", "FOTOVOLTAICI"], "");
 	
//  	aggiungo il contenuto
 	$row1 = $container->ownerDocument->createElement ("div");
	$row1->setAttribute ("class", "row");
	
	$main_feature = $row1->ownerDocument->createElement ("div");
	$main_feature->setAttribute ("class", "main_feature");
	
	$col = $main_feature->ownerDocument->createElement ("div");
	$col->setAttribute ("class", "col-md-12 col-xs-12 col-sm-12");	
	
	//$paragraph = $col2->ownerDocument->createElement ("h4");
	$par1 = $col->ownerDocument->createElement ("p", $par1_text);
	$col->appendChild ($par1);
	$par2 = $col->ownerDocument->createElement ("p", $par2_text);
	$col->appendChild ($par2);
	$par3 = $col->ownerDocument->createElement ("p", $par3_text);
	$col->appendChild ($par3);
	$par4 = $col->ownerDocument->createElement ("p", $par4_text);
	$col->appendChild ($par4);
	
	$ul = $col->ownerDocument->createElement ("ul");
	$ul->setAttribute ("class", "custom-bullet");
	$ul->appendChild ($ul->ownerDocument->createElement ("li", "Quadri elettrici di potenza e controllo."));
	$ul->appendChild ($ul->ownerDocument->createElement ("li", "Campi fotovoltaici e stringhe di campo."));
	$ul->appendChild ($ul->ownerDocument->createElement ("li", "Strutture di supporto e sistemi di fissaggio studiati su misura."));
	$ul->appendChild ($ul->ownerDocument->createElement ("li", "Inverter e convertitori statici."));
	$ul->appendChild ($ul->ownerDocument->createElement ("li", "Quadri d irete e adeguamenti A70."));
	$ul->appendChild ($ul->ownerDocument->createElement ("li", "Sistemi di telegestione."));
	
	$col->appendChild ($ul);
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