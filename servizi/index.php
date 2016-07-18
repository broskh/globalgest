<?php
	include_once '../lib/functions.php';	//Includo la mia libreria PHP
	$dom = open_html("Servizi");	//genero il dom
 	$body = $dom->getElementsByTagName("body")->item(0);	//salvo il riferimento al nodo body
 	
 	addHorizontalNavbar($body);	//aggiungo la barra di navigazione
 	addHeaderImage($body);	//aggiungo l'immagine in header
//  	<------------------------------------------------------>
//		CONTENUTO DELLA PAGINA VERO E PROPRIO
 	
//		<--variabili contenenti il testo da inserire nei paragrafi
 	$par1_text = <<<HTML
 	Global Gest propone impianti ed opere “chiavi in mano”, che iniziano dalla progettazione 
 			e si completano con la realizzazione e la consegna di un impianto costruito 
 			nell'ottica della sicurezza, del risparmio energetico e del rispetto delle 
 			esigenze del cliente.
HTML;
 	$par2_text = <<<HTML
 	L’ accurata direzione dei lavori, strutturata attraverso un efficacie fase di
 			progettazione e di consulenza tecnico-organizzativa, garantisce la 
 			rilevanza dei servizi offerti.
HTML;
 	$par3_text = <<<HTML
 	I settori di competenza in cui Global Gest opera sono numerosi, come ad esempio: civile, 
 			terziario, bancario, ospedaliero, residenziale, industriale, industriale 
 			di processo, distribuzione con celle MT/BT, centri commerciali ed ipermercati, 
 			mense produzione e distribuzione pasti.
HTML;
// 		fine variabili di testo-->
 	
//  	<--inizio della creazione della struttura del contenuto specifico della pagina
 	$service = $body->ownerDocument->createElement ("section");
 	$service->setAttribute ("id", "service");
 	$service->setAttribute ("class", "section_content");
 	
 	$container = $service->ownerDocument->createElement ("div");
 	$container->setAttribute ("class", "container");
 	
// 		creo nodo per sottotitolo
 	$subtitle = $container->ownerDocument->createElement ("h4");
 	$par1 = $subtitle->ownerDocument->createElement ("p", $par1_text);
 	$subtitle->appendChild ($par1);
 	$par2 = $subtitle->ownerDocument->createElement ("p", $par2_text);
 	$subtitle->appendChild ($par2);
 	$par3 = $subtitle->ownerDocument->createElement ("p", $par3_text);
 	$subtitle->appendChild ($par3);
 	
//  	aggiungo titolo
 	addContentTitle($container, ["I NOSTRI ", "SERVIZI"], $subtitle);
 	
//  	aggiungo i vari index
//  	riga1
 	$row1 = $container->ownerDocument->createElement ("div");
	$row1->setAttribute ("class", "row");
	
	$main_feature1 = $row1->ownerDocument->createElement ("div");
	$main_feature1->setAttribute ("class", "main_feature text-center");

	addService ($main_feature1, "fa fa-files-o", "Progettazione", "progettazione/", "........");
	addService ($main_feature1, "fa fa-lightbulb-o", "Impianti elettrici", "impianti-elettrici/", "........");
	addService ($main_feature1, "fa fa-tint", "Impianti termo-sanitari", "impianti-termo-sanitari/", "........");
	addService ($main_feature1, "fa fa-exchange", "Impianti di climatizzazione", "impianti-di-climatizzazione/", "........"); //fa-refresh
 	
 	$row1->appendChild ($main_feature1);
 	$container->appendChild ($row1);

//  	riga2
 	$row2 = $container->ownerDocument->createElement ("div");
 	$row2->setAttribute ("class", "row");
 	
 	$main_feature2 = $row2->ownerDocument->createElement ("div");
 	$main_feature2->setAttribute ("class", "main_feature text-center");
 	
 	addService ($main_feature2, "fa fa-fire-extinguisher", "Impianti di protezione antincendio", "impianti-di-protezione-antincendio/", "........");
 	addService ($main_feature2, "fa fa-sun-o", "Impianti fotovoltaici", "impianti-fotovoltaici/", "........");
 	addService ($main_feature2, "fa fa-university", "Impianti per manifestazioni e fiere", "impianti-per-manifestazioni-e-fiere/", "........");
 	addService ($main_feature2, "fa fa-home", "Opere edili", "opere-edili/", "........");
 	
 	$row2->appendChild ($main_feature2);
 	$container->appendChild ($row2);

//  	riga 3
 	$row3 = $container->ownerDocument->createElement ("div");
 	$row3->setAttribute ("class", "row");
 	
 	$main_feature3 = $row3->ownerDocument->createElement ("div");
 	$main_feature3->setAttribute ("class", "main_feature text-center");
 	
 	addService ($main_feature3, "fa fa-life-saver", "Manutenzione programmata e Assistenza post-impianti", "manutenzione-programmata-ed-assistenza/", "........");
 	$manutenzione = $main_feature3->getElementsByTagName("div")->item(0);
 	$manutenzione->setAttribute ("class", "col-md-offset-3 col-md-3 col-xs-12 col-sm-6");
 	addService ($main_feature3, "fa fa-line-chart", "Analisi energetica", "analisi-energetica/", "........");
 	
 	$row3->appendChild ($main_feature3);
 	$container->appendChild ($row3);
 	
//  	chiudo tutti i index
 	$service->appendChild ($container);
 	$body->appendChild($service);
//  	fine della struttura-->
	
//  	<------------------------------------------------------>
 	addFooter($body);	//aggiungo il footer
 	addBackToTopButton($body);	//aggiungo il bottone che riporta all'inizio della pagina
	importJS($body);	//importo le librerie Javascript
	addSimpleJS($body, dir_lib . "/custom/js/services.js");	//aggiungo un piccolo script personalizzato per questa pagina
	echo $dom->saveHTML();	//stampo tutto l'html
?>