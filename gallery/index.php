<?php
	include_once '../lib/functions.php';	//Includo la mia libreria PHP
	$dom = open_html("Gallery");	//genero il dom
 	$body = $dom->getElementsByTagName("body")->item(0);	//salvo il riferimento al nodo body
 	
 	addHorizontalNavbar($body);	//aggiungo la barra di navigazione
 	addHeaderImage($body);	//aggiungo l'immagine in header
//  	<------------------------------------------------------>
//		CONTENUTO DELLA PAGINA VERO E PROPRIO
 	
//		<--variabili contenenti il testo da inserire nei paragrafi
 	$par1_text = <<<HTML
 	Questo &egrave; l'elenco delle nostre gallerie fotografiche nella quali mostriamo alcuni dei lavori dai noi svolti.
HTML;
// 		fine variabili di testo-->
 	
//  	<--inizio della creazione della struttura del contenuto specifico della pagina
 	$gallery = $body->ownerDocument->createElement ("section");
 	$gallery->setAttribute ("id", "gallery-list");
 	
 	$container = $gallery->ownerDocument->createElement ("div");
 	$container->setAttribute ("class", "container");
 	
// 		creo nodo per sottotitolo
 	$subtitle = $container->ownerDocument->createElement ("h4");
 	$par1 = $subtitle->ownerDocument->createElement ("p", $par1_text);
 	$subtitle->appendChild ($par1);
 	
//  	aggiungo titolo
 	addContentTitle($container, ["", "GALLERY"], $subtitle);
 	
//  	aggiungo i vari index
//  	riga1
 	$row1 = $container->ownerDocument->createElement ("div");
	$row1->setAttribute ("class", "row");
	
	$main_feature1 = $row1->ownerDocument->createElement ("div");
	$main_feature1->setAttribute ("class", "main_feature text-center");
	
	$dir = new DirectoryIterator($_SERVER["DOCUMENT_ROOT"] . dir_img . "/gallery");
	foreach ($dir as $fileinfo) {
		if ($fileinfo->isDir() && !$fileinfo->isDot()) {
			$folder = $fileinfo->getFilename();
			addThumbnailImage($main_feature1, dir_gallery . "gallery-slideshow.php?azienda=" . $folder, dir_img . "/gallery/" . $folder . "/thumbnail.jpg", str_replace("-", " ", $folder));
		}
	}	
 	
 	$row1->appendChild ($main_feature1);
 	$container->appendChild ($row1);
 	$gallery->appendChild ($container);
 	$body->appendChild($gallery);
//  	fine della struttura-->
	
//  	<------------------------------------------------------>
 	addFooter($body);	//aggiungo il footer
 	addBackToTopButton($body);	//aggiungo il bottone che riporta all'inizio della pagina
	importJS($body);	//importo le librerie Javascript
	addSimpleJS($body, dir_lib . "/custom/js/services.js");	//aggiungo un piccolo script personalizzato per questa pagina
	echo $dom->saveHTML();	//stampo tutto l'html
?>