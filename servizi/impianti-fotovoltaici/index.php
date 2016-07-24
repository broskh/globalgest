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
 	$FTV_system = $body->ownerDocument->createElement ("section");
 	$FTV_system->setAttribute ("id", "impianti-fotovoltaici");
 	$FTV_system->setAttribute ("class", "section_content");
 	
 	$container = $FTV_system->ownerDocument->createElement ("div");
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
 	$FTV_system->appendChild ($container);
 	
 	//  	<<--LAVAGGIO PANNELLI
 	$par5_text = <<<HTML
 	Avete un impianto fotovoltaico? 
HTML;
 	$par6_text = <<<HTML
 	Vi siete mai chiesti se i vostri pannelli solari, quando non lavati regolarmente e 
 			correttamente, rendono meno? 
HTML;
 	$par7_text = <<<HTML
 	La risposta &egrave; s&igrave;! Questo significa una perdita di denaro importante.
HTML;
 	$par8_text = <<<HTML
 	Acqua-Osmotizzata: La Nostra soluzione ai tuoi problemi di pulizia.
HTML;
 	$par9_text = <<<HTML
 	&Egrave; questo il segreto per ottenere il massimo risultato dal lavaggio dei tuoi pannelli 
 			fotovoltaici e migliorare così il rendimento del tuo impianto.
HTML;
 	$par10_text = <<<HTML
 	L'acqua-osmotizzata ha la caratteristica, a differenza dell'acqua comunemente utilizzata per 
 			la pulizia delle superfici, di essere completamente priva di impurit&agrave;. Gli ioni caricati 
 			attraggono e dissolvono le particelle ed i residui di sporco, lasciando la superficie 
 			dei tuoi pannelli perfettamente pulita e priva di aloni.
HTML;
 	$par11_text = <<<HTML
 	Per questo motivo noi della Global Gest s.r.l. utilizziamo l'innovativa macchina di lavaggio per 
 			pannelli fotovoltaici esclusivamente con acqua osmotizzata. La macchina da noi usata &egrave; 
 			dotata di un sistema a 4 stadi di filtraggio:
HTML;
 	$list1_text = <<<HTML
 	Filtro di sedimentazione: rimuove le sostanze con diametro superiore ai 5μm.
HTML;
 	$list2_text = <<<HTML
 	Filtro a carboni attivi: rimuove il cloro.
HTML;
 	$list3_text = <<<HTML
 	Membrana ad osmosi inversa: elimina fino al 98% delle sostanze disciolte nell'acqua.
HTML;
 	$list4_text = <<<HTML
 	Cartuccia a resine deionizzanti: elimina le restanti sostanze.
HTML;
 	$par12_text = <<<HTML
 	L'acqua in questo modo &egrave; pura al 100% (0 ppm) ed agisce come uno straordinario solvente che attrae e 
 			dissolve lo sporco sulle superfici, grazie alla propria natura dipolare (capacità di reagire 
 			sia con cariche positive che con cariche negative). 
HTML;
 	$par13_text = <<<HTML
 	Possiamo affermare che la perdita minima di resa di un impianto fotovoltaico con scarsa manutenzione, ad un anno 
 			dalla sua posa, si può aggirare dal 10% al 30% della sua produzione di picco.
HTML;
 	$par14_text = <<<HTML
 	La spesa per questa operazione &egrave; in realt&agrave; un guadagno. Per ottenere dal vostro impianto il miglior 
 			rendimento, e per valorizzare il vostro investimento, il lavaggio programmato dei pannelli &egrave; il 
 			sistema più efficacie. 
HTML;

 	addBR($FTV_system);
 	addBR($FTV_system);
 	$cleaning = $FTV_system->ownerDocument->createElement ("div");
 	$cleaning->setAttribute ("class", "container");
 	
 	// 		aggiungo titolo
 	addContentTitle($cleaning, ["Il nostro ", "SISTEMA DI PULIZIA"], "");
 	
 	//  	aggiungo il contenuto
 	$row2 = $cleaning->ownerDocument->createElement ("div");
 	$row2->setAttribute ("class", "row");
 	
 	$main_feature2 = $row2->ownerDocument->createElement ("div");
 	$main_feature2->setAttribute ("class", "main_feature");
 	
 	$col2 = $main_feature2->ownerDocument->createElement ("div");
 	$col2->setAttribute ("class", "col-md-12 col-xs-12 col-sm-12");
 	
 	$col2->appendChild ($col2->ownerDocument->createElement ("p", $par5_text));
 	$col2->appendChild ($col2->ownerDocument->createElement ("p", $par6_text));
 	$col2->appendChild ($col2->ownerDocument->createElement ("p", $par7_text));
 	
 	$main_feature2->appendChild ($col2);
 	addBR($main_feature2);
 	
 	$col_section1 = $main_feature2->ownerDocument->createElement ("div");
 	$col_section1->setAttribute ("class", "col-md-12 col-xs-12 col-sm-12 father-vertical-align");
 	
 	$col3 = $col_section1->ownerDocument->createElement ("div");
 	$col3->setAttribute ("class", "col-md-5 col-xs-12 col-sm-5 child-vertical-align");
 	
 	$image1 = $col3->ownerDocument->createElement ("img");
 	$image1->setAttribute ("src", dir_img . "/FTV_cleaning/lavapannelli1.jpg");
 	$image1->setAttribute ("class", "img-responsive img-center img-limit");
 	
 	$col3->appendChild ($image1);
 	$col_section1->appendChild ($col3);
 	
 	$col4 = $col_section1->ownerDocument->createElement ("div");
 	$col4->setAttribute ("class", "col-md-7 col-xs-12 col-sm-7 child-vertical-align");

 	$col4->appendChild ($col4->ownerDocument->createElement ("p", $par8_text));
 	$col4->appendChild ($col4->ownerDocument->createElement ("p", $par9_text));
 	$col4->appendChild ($col4->ownerDocument->createElement ("p", $par10_text));
 	
 	$col_section1->appendChild ($col4);
 	$main_feature2->appendChild ($col_section1);
 	
 	$col_section2 = $main_feature2->ownerDocument->createElement ("div");
 	$col_section2->setAttribute ("class", "col-md-12 col-xs-12 col-sm-12 father-vertical-align");
 	
 	$col5 = $col_section2->ownerDocument->createElement ("div");
 	$col5->setAttribute ("class", "col-md-5 col-md-push-7 col-xs-12 col-sm-5 col-sm-push-7 child-vertical-align");
 	
 	$image2 = $col5->ownerDocument->createElement ("img");
 	$image2->setAttribute ("src", dir_img . "/FTV_cleaning/lavapannelli2.jpg");
 	$image2->setAttribute ("class", "img-responsive img-center img-limit");
 	
 	$col5->appendChild ($image2);
 	$col_section2->appendChild ($col5);
 	
 	$col6 = $col_section2->ownerDocument->createElement ("div");
 	$col6->setAttribute ("class", "col-md-7 col-md-pull-5 col-xs-12 col-sm-7 col-sm-pull-5 child-vertical-align");

 	$col6->appendChild ($col6->ownerDocument->createElement ("p", $par11_text));
 	$list = $col6->ownerDocument->createElement ("ul");
 	$list->setAttribute ("class", "cleaning-machine-list");
 	$list->appendChild ($list->ownerDocument->createElement ("li", $list1_text));
 	$list->appendChild ($list->ownerDocument->createElement ("li", $list2_text));
 	$list->appendChild ($list->ownerDocument->createElement ("li", $list3_text));
 	$list->appendChild ($list->ownerDocument->createElement ("li", $list4_text));
 	$col6->appendChild ($list); 	
 	
 	$col_section2->appendChild ($col6);
 	$main_feature2->appendChild ($col_section2);
 	addBR($main_feature2);
 	
 	$col_section3 = $main_feature2->ownerDocument->createElement ("div");
 	$col_section3->setAttribute ("class", "col-md-12 col-xs-12 col-sm-12 father-vertical-align");
 	
 	$col7 = $col_section3->ownerDocument->createElement ("div");
 	$col7->setAttribute ("class", "col-md-5 col-xs-12 col-sm-5 child-vertical-align");
 	
 	$image3 = $col7->ownerDocument->createElement ("img");
 	$image3->setAttribute ("src", dir_img . "/FTV_cleaning/lavapannelli3.jpg");
 	$image3->setAttribute ("class", "img-responsive img-center img-limit");
 	
 	$col7->appendChild ($image3);
 	$col_section3->appendChild ($col7);
 	
 	$col8 = $col_section3->ownerDocument->createElement ("div");
 	$col8->setAttribute ("class", "col-md-7 col-xs-12 col-sm-7 child-vertical-align");
 	
 	$col8->appendChild ($col8->ownerDocument->createElement ("p", $par12_text));
 	$col8->appendChild ($col8->ownerDocument->createElement ("p", $par13_text));
 	$col8->appendChild ($col8->ownerDocument->createElement ("p", $par14_text));
 	
 	$col_section3->appendChild ($col8);
 	$main_feature2->appendChild ($col_section3);
 	
 	$row2->appendChild ($main_feature2);
 	$cleaning->appendChild ($row2);
 	$FTV_system->appendChild($cleaning);
 	// 	FINE LAVAGGIO-->>
 	
 	$body->appendChild($FTV_system);
//  	fine della struttura-->
	
//  	<------------------------------------------------------>
 	addFooter($body);	//aggiungo il footer
 	addBackToTopButton($body);	//aggiungo il bottone che riporta all'inizio della pagina
	importJS($body);	//importo le librerie Javascript
	echo $dom->saveHTML();	//stampo tutto l'html
?>