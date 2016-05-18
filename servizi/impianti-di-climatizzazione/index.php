<?php
	include_once '../../lib/functions.php';	//Includo la mia libreria PHP
	$dom = open_html("Impianti di climatizzazione");	//genero il dom
 	$body = $dom->getElementsByTagName("body")->item(0);	//salvo il riferimento al nodo body
 	
 	addHorizontalNavbar($body);	//aggiungo la barra di navigazione
 	addHeaderImage($body);	//aggiungo l'immagine in header
//  	<------------------------------------------------------>
//		CONTENUTO DELLA PAGINA VERO E PROPRIO
 	
//		<--variabili contenenti il testo da inserire nei paragrafi
 	$par1_text = <<<HTML
 	Il nostro staff tecnico &egrave; in grado di produrre innovativi impianti 
 			di climatizzazione strutturati per le specifiche esigenze del committente 
 			sotto tutti gli aspetti, sia normativi che di utilizzo funzionale degli stessi.
HTML;
 	$par2_text = <<<HTML
 	Utilizziamo materiali di primarie case produttrici, in grado di garantire qualit&agrave; 
 			e sicurezza mantenendo conformità con le aspettative del cliente.
HTML;
 	$par3_text = <<<HTML
 	Siamo specializzati in:
HTML;
// 		fine variabili di testo-->
 	
//  	<--inizio della creazione della struttura del contenuto specifico della pagina
 	$about_us = $body->ownerDocument->createElement ("section");
 	$about_us->setAttribute ("id", "impianti-di-climatizzazione");
 	$about_us->setAttribute ("class", "section_content");
 	
 	$container = $about_us->ownerDocument->createElement ("div");
 	$container->setAttribute ("class", "container");
 	
// 		aggiungo titolo
 	addContentTitle($container, ["impianti di ", "CLIMATIZZAZIONE"], "");
 	
//  	aggiungo il contenuto
 	$row = $container->ownerDocument->createElement ("div");
	$row->setAttribute ("class", "row");
	
	$main_feature = $row->ownerDocument->createElement ("div");
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
	
	$ul = $col->ownerDocument->createElement ("ul");
	$ul->setAttribute ("class", "custom-bullet");
	$ul->appendChild ($ul->ownerDocument->createElement ("li", "Impianti di condizionamento per abitazioni ed uffici."));
	$ul->appendChild ($ul->ownerDocument->createElement ("li", "Impianti riscaldamento."));
	$ul->appendChild ($ul->ownerDocument->createElement ("li", "Impianti di trattamento aria."));
	$ul->appendChild ($ul->ownerDocument->createElement ("li", "Impianti di filtrazione e recupero."));
	
	$col->appendChild ($ul);
	$main_feature->appendChild ($col);
 	$row->appendChild ($main_feature);
 	$container->appendChild ($row);
 	$about_us->appendChild ($container);
 	$body->appendChild($about_us);
//  	fine della struttura-->
	
//  	<------------------------------------------------------>
 	addFooter($body);	//aggiungo il footer
 	addBackToTopButton($body);	//aggiungo il bottone che riporta all'inizio della pagina
	importJS($body);	//importo le librerie Javascript
	echo $dom->saveHTML();	//stampo tutto l'html
?>