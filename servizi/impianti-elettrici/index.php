<?php
	include_once '../../lib/functions.php';	//Includo la mia libreria PHP
	$dom = open_html("Impianti elettrici");	//genero il dom
 	$body = $dom->getElementsByTagName("body")->item(0);	//salvo il riferimento al nodo body
 	
 	addHorizontalNavbar($body);	//aggiungo la barra di navigazione
 	addHeaderImage($body);	//aggiungo l'immagine in header
//  	<------------------------------------------------------>
//		CONTENUTO DELLA PAGINA VERO E PROPRIO
 	
//		<--variabili contenenti il testo da inserire nei paragrafi
 	$par1_text = <<<HTML
 	Il nostro staff tecnico &egrave; in grado di produrre innovativi impianti 
 			elettrici strutturati per le specifiche esigenze del 
 			committente sotto tutti gli aspetti, sia normativi che di 
 			utilizzo funzionale degli stessi.
HTML;
 	$par2_text = <<<HTML
 	Utilizziamo materiali di primarie case produttrici, in grado di garantire 
 			qualit&agrave; e sicurezza mantenendo conformit� con le aspettative del cliente.
HTML;
 	$par3_text = <<<HTML
 	Siamo specializzati in:
HTML;
// 		fine variabili di testo-->
 	
//  	<--inizio della creazione della struttura del contenuto specifico della pagina
 	$electrical_system = $body->ownerDocument->createElement ("section");
 	$electrical_system->setAttribute ("id", "impianti-elettrici");
 	$electrical_system->setAttribute ("class", "section_content");
 	
 	$container = $electrical_system->ownerDocument->createElement ("div");
 	$container->setAttribute ("class", "container");
 	
// 		aggiungo titolo
 	addContentTitle($container, ["impianti ", "ELETTRICI"], "");
 	
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
	
	$ul = $col->ownerDocument->createElement ("ul");
	$ul->setAttribute ("class", "custom-bullet");
	$ul->appendChild ($ul->ownerDocument->createElement ("li", "Impianti elettrici civili ed industriali."));
	$ul->appendChild ($ul->ownerDocument->createElement ("li", "Cabine di trasformazione MT-BT."));
	$ul->appendChild ($ul->ownerDocument->createElement ("li", "Quadri elettrici di potenza, controllo e telegestione."));
	$ul->appendChild ($ul->ownerDocument->createElement ("li", "Quadri elettrici di potenza di tele commutazione e gruppi elettrogeni."));
	$ul->appendChild ($ul->ownerDocument->createElement ("li", "Impianti radiotelevisivi ed elettronici in genere e di antenne."));
	$ul->appendChild ($ul->ownerDocument->createElement ("li", "Tecniche e metodologie di progettazione, installazione e verifica per impianti di cablaggio strutturato in categoria 5e e 6."));
	
	$col->appendChild ($ul);
	$main_feature->appendChild ($col);
 	$row1->appendChild ($main_feature);
 	$container->appendChild ($row1);
 	$electrical_system->appendChild ($container);
 	$body->appendChild($electrical_system);
//  	fine della struttura-->
	
//  	<------------------------------------------------------>
 	addFooter($body);	//aggiungo il footer
 	addBackToTopButton($body);	//aggiungo il bottone che riporta all'inizio della pagina
	importJS($body);	//importo le librerie Javascript
	echo $dom->saveHTML();	//stampo tutto l'html
?>