<?php
	include_once '../lib/functions.php';	//Includo la mia libreria PHP
	$dom = open_html("Chi siamo");	//genero il dom
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
 	Global Gest nasce nel 2000 in seguito alla fusione di due aziende: 
HTML;
 	$par3_text = <<<HTML
 	G.E. Grandi Impianti, societ&agrave; leader nel settore degli impianti elettrici e tecnologici civili 
 			e industriali dal 1975.
HTML;
 	$par4_text = <<<HTML
 	T.E.S. Tecno Electro Service, specializzata nella costruzione di cabine e di quadri elettrici e 
 			nell'allestimento di cantieri, fiere e stands.
HTML;
 	$par5_text = <<<HTML
 	Global Gest vanta una consolidata tradizione imprenditoriale che le ha conferito rilevanti 
 			committenze, gruppi di fama Nazionale e Internazionale, oltre a Enti pubblici e privati. 
 			Siamo quindi in grado di garantire elevati standard qualitativi ottenuti nella 
 			progettazione, pianificazione, esecuzione e controllo delle opere realizzate, 
 			nonch&eacute; delle relative attivit&agrave; di supporto, assistenza e manutenzione.
HTML;
 	$par6_text = <<<HTML
 	Personale qualificato altamente specializzato e l'utilizzo di strumenti moderni e 
 			attrezzature all'avanguardia caratterizzano la nostra impresa. 
HTML;
 	$par7_text = <<<HTML
 	Da sempre Global Gest opera nel fedele rispetto delle normative che disciplinano la materia 
 			della costruzione degli impianti garantendo al proprio cliente alti livelli di sicurezza 
 			e affidabilit&agrave; nel rispetto dei tempi di esecuzione.
HTML;
// 		fine variabili di testo-->
 	
//  	<--inizio della creazione della struttura del contenuto specifico della pagina
 	$about_us = $body->ownerDocument->createElement ("section");
 	$about_us->setAttribute ("id", "about-us");
 	$about_us->setAttribute ("class", "section_content");
 	
 	$container = $about_us->ownerDocument->createElement ("div");
 	$container->setAttribute ("class", "container");
 	
// 		aggiungo titolo
 	addContentTitle($container, ["CHI ", "SIAMO"], "");
 	
//  	aggiungo il contenuto
 	$row = $container->ownerDocument->createElement ("div");
	$row->setAttribute ("class", "row");
	
	$main_feature = $row->ownerDocument->createElement ("div");
	$main_feature->setAttribute ("class", "main_feature");
	
	$col1 = $main_feature->ownerDocument->createElement ("div");
	$col1->setAttribute ("class", "col-md-12 col-xs-12 col-sm-12");

	$par1 = $col1->ownerDocument->createElement ("p", $par1_text);
	$col1->appendChild ($par1);
	$par2 = $col1->ownerDocument->createElement ("p", $par2_text);
	$col1->appendChild ($par2);

	$main_feature->appendChild ($col1);
	
	$col_ge = $main_feature->ownerDocument->createElement ("div");
	$col_ge->setAttribute ("class", "col-md-12 col-xs-12 col-sm-12 father-vertical-align");
	
	$col2 = $col_ge->ownerDocument->createElement ("div");
	$col2->setAttribute ("class", "col-md-3 col-xs-12 col-sm-3 child-vertical-align");

	$image_ge = $col2->ownerDocument->createElement ("img");
	$image_ge->setAttribute ("src", dir_img . "/ge.jpg");
	$image_ge->setAttribute ("class", "img-responsive img-center img-limit");

	$col2->appendChild ($image_ge);
	$col_ge->appendChild ($col2);

	$col3 = $col_ge->ownerDocument->createElement ("div");
	$col3->setAttribute ("class", "col-md-9 col-xs-12 col-sm-9 child-vertical-align");
	
	$par3 = $col3->ownerDocument->createElement ("p", $par3_text);
	
	$col3->appendChild ($par3);
	$col_ge->appendChild ($col3);
	$main_feature->appendChild ($col_ge);
	addDivider($main_feature);
	
	$col_tes = $main_feature->ownerDocument->createElement ("div");
	$col_tes->setAttribute ("class", "col-md-12 col-xs-12 col-sm-12 father-vertical-align");
	
	$col4 = $col_tes->ownerDocument->createElement ("div");
	$col4->setAttribute ("class", "col-md-3 col-md-push-9 col-xs-12 col-sm-3 col-sm-push-9 child-vertical-align");
	
	$image_tes = $col4->ownerDocument->createElement ("img");
	$image_tes->setAttribute ("src", dir_img . "/tes.jpg");
	$image_tes->setAttribute ("class", "img-responsive img-center img-limit");
	
	$col4->appendChild ($image_tes);
	$col_tes->appendChild ($col4);
	
	$col5 = $col_tes->ownerDocument->createElement ("div");
	$col5->setAttribute ("class", "col-md-9 col-md-pull-3 col-xs-12 col-sm-9 col-sm-pull-3 child-vertical-align");
	
	$par4 = $col5->ownerDocument->createElement ("p", $par4_text);
	$col5->appendChild ($par4);
	
	$col_tes->appendChild ($col5);
	$main_feature->appendChild ($col_tes);
	addDivider($main_feature);
	
	$col6 = $main_feature->ownerDocument->createElement ("div");
	$col6->setAttribute ("class", "col-md-12 col-xs-12 col-sm-12");

	$par5 = $col6->ownerDocument->createElement ("p", $par5_text);
	$col6->appendChild ($par5);
	$par6 = $col6->ownerDocument->createElement ("p", $par6_text);
	$col6->appendChild ($par6);
	$par7 = $col6->ownerDocument->createElement ("p", $par7_text);
	$col6->appendChild ($par7);

	$main_feature->appendChild ($col6); 	
 	$row->appendChild ($main_feature);
 	$container->appendChild ($row);
 	$about_us->appendChild ($container);
 	
//  	<<--CERTIFICAZIONI
 	$par7_text = <<<HTML
 	Global Gest vanta le seguenti certificazioni:
HTML;
 	$par8_text = <<<HTML
 	Azienda certificata per il seguente campo applicativo:
HTML;
 	$par9_text = <<<HTML
 	Progettazione e realizzazione di impianti elettrici, meccanici, di protezione da scariche 
 		atmosferiche, antincendio e di trasmissione dati. Costruzione di edifici civili e industriali. 
 		Certificazione del sistema di Qualità ISO 9001 DNV. Ente di accreditamento ACCREDIA.
HTML;
 	$par10_text = <<<HTML
 	Azienda qualificata all'esecuzione di lavori pubblici:
HTML;
 	$par11_text = <<<HTML
 	Categorie OG1 - OG11 - OS30
HTML;
 	
 	$certifications = $about_us->ownerDocument->createElement ("div");
 	$certifications->setAttribute ("class", "container");
 	
 	// 		aggiungo titolo
 	addContentTitle($certifications, ["Le nostre ", "CERTIFICAZIONI"], "");
 	
 	//  	aggiungo il contenuto
 	$row2 = $certifications->ownerDocument->createElement ("div");
 	$row2->setAttribute ("class", "row");
 	
 	$main_feature2 = $row2->ownerDocument->createElement ("div");
 	$main_feature2->setAttribute ("class", "main_feature");
 	
 	$col7 = $main_feature2->ownerDocument->createElement ("div");
 	$col7->setAttribute ("class", "col-md-12 col-xs-12 col-sm-12");
 	
 	$par7 = $col7->ownerDocument->createElement ("p", $par7_text);
 	$col7->appendChild ($par7);
 	
 	$main_feature2->appendChild ($col7);
 	addBR($main_feature2);
 	
 	$col_dnv = $main_feature2->ownerDocument->createElement ("div");
 	$col_dnv->setAttribute ("class", "col-md-12 col-xs-12 col-sm-12 father-vertical-align");
 	
 	$col8 = $col_dnv->ownerDocument->createElement ("div");
 	$col8->setAttribute ("class", "col-md-3 col-xs-12 col-sm-3 child-vertical-align");
 	
 	$image_dnv = $col8->ownerDocument->createElement ("img");
 	$image_dnv->setAttribute ("src", dir_img . "/iso9001.png");
 	$image_dnv->setAttribute ("class", "img-responsive img-center img-limit");
 	
 	$col8->appendChild ($image_dnv);
 	$col_dnv->appendChild ($col8);
 	
 	$col9 = $col_dnv->ownerDocument->createElement ("div");
 	$col9->setAttribute ("class", "col-md-9 col-xs-12 col-sm-9 child-vertical-align");
 	
 	$par8 = $col9->ownerDocument->createElement ("p", $par8_text);
 	$col9->appendChild ($par8);
 	$par9 = $col9->ownerDocument->createElement ("p", $par9_text);
 	$col9->appendChild ($par9);
 	
 	$col_dnv->appendChild ($col9);
 	$main_feature2->appendChild ($col_dnv);
 	addDivider($main_feature2);
 	
 	$col_bentley = $main_feature2->ownerDocument->createElement ("div");
 	$col_bentley->setAttribute ("class", "col-md-12 col-xs-12 col-sm-12 father-vertical-align");
 	
 	$col10 = $col_bentley->ownerDocument->createElement ("div");
 	$col10->setAttribute ("class", "col-md-3 col-md-push-9 col-xs-12 col-sm-3 col-sm-push-9 child-vertical-align");
 	
 	$image_bentley = $col10->ownerDocument->createElement ("img");
 	$image_bentley->setAttribute ("src", dir_img . "/bentley.gif");
 	$image_bentley->setAttribute ("class", "img-responsive img-center img-limit");
 	
 	$col10->appendChild ($image_bentley);
 	$col_bentley->appendChild ($col10);
 	
 	$col11 = $col_bentley->ownerDocument->createElement ("div");
 	$col11->setAttribute ("class", "col-md-9 col-md-pull-3 col-xs-12 col-sm-9 col-sm-pull-3 child-vertical-align");
 	
 	$par10 = $col11->ownerDocument->createElement ("p", $par10_text);
 	$col11->appendChild ($par10);
 	$par11 = $col11->ownerDocument->createElement ("p", $par11_text);
 	$col11->appendChild ($par11);
 	
 	$col_bentley->appendChild ($col11);
 	$main_feature2->appendChild ($col_bentley);
 	$row2->appendChild ($main_feature2);
 	$certifications->appendChild ($row2);
 	$about_us->appendChild($certifications);
// 	FINE CERTIFICAZIONI-->>
//  	fine della struttura-->
	
//  	<------------------------------------------------------>
 	$body->appendChild($about_us);
 	addFooter($body);	//aggiungo il footer
 	addBackToTopButton($body);	//aggiungo il bottone che riporta all'inizio della pagina
	importJS($body);	//importo le librerie Javascript
	echo $dom->saveHTML();	//stampo tutto l'html
?>