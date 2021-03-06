<?php
	$folder_name = $_GET ["azienda"];
	$business_name = ucfirst(str_replace("-", " ", $folder_name));
	include_once '../lib/functions.php';	//Includo la mia libreria PHP
	$dom = open_html($business_name . " Gallery");	//genero il dom
 	$head = $dom->getElementsByTagName("head")->item(0);	//salvo il riferimento al nodo body
 	addSimpleCSS($head, dir_lib . "/carousel-thumbs-gallery/css/carousel-thumbs-gallery.css");	//libreria css utilizzata per la slideshow gallery
 	$body = $dom->getElementsByTagName("body")->item(0);	//salvo il riferimento al nodo body
 	
 	addHorizontalNavbar($body);	//aggiungo la barra di navigazione
 	addHeaderImage($body);	//aggiungo l'immagine in header
//  	<------------------------------------------------------>
//		CONTENUTO DELLA PAGINA VERO E PROPRIO
 	
//  	<--inizio della creazione della struttura del contenuto specifico della pagina
 	$gallery = $body->ownerDocument->createElement ("section");
 	$gallery->setAttribute ("id", "gallery");
 	$gallery->setAttribute ("class", "section_content");
 	
 	$container = $gallery->ownerDocument->createElement ("div");
 	$container->setAttribute ("class", "container");
 	
//  	aggiungo titolo
 	addContentTitle($container, ["GALLERY ", $business_name], "");	//per aggiungere sottotitolo, mettere come terzo parametro $subtitle (e' necessario crearlo prima)
 	
//  	aggiungo i vari index
 	$row1 = $container->ownerDocument->createElement ("div");
	$row1->setAttribute ("class", "row");
	
	$main_feature1 = $row1->ownerDocument->createElement ("div");
	$main_feature1->setAttribute ("class", "main_feature text-center");
	
// 		aggiungo la struttura per lo slider vero e proprio
	$slider = $main_feature1->ownerDocument->createElement ("div");
	$slider->setAttribute ("class", "col-sm-6 col-sm-push-6 col-xs-12");
	$slider->setAttribute ("id", "slider");
	
	$carousel_bounding_box = $slider->ownerDocument->createElement ("div");
	$carousel_bounding_box->setAttribute ("class", "col-sm-12");
	$carousel_bounding_box->setAttribute ("id", "carousel_bounding_box");
	
	$my_carousel = $carousel_bounding_box->ownerDocument->createElement ("div");
	$my_carousel->setAttribute ("class", "carousel slide");
	$my_carousel->setAttribute ("id", "myCarousel");
	
 	$carousel_inner = $my_carousel->ownerDocument->createElement ("div");
 	$carousel_inner->setAttribute ("class", "carousel-inner");	
 	
 	$my_carousel->appendChild ($carousel_inner);

 	//aggiungo i bottoni dello slider
 	$left_control = $my_carousel->ownerDocument->createElement ("a");
 	$left_control->setAttribute ("class", "left carousel-control");
 	$left_control->setAttribute ("href", "#myCarousel");
 	$left_control->setAttribute ("role", "button");
 	$left_control->setAttribute ("data-slide", "prev");
 	
 	$helper = $left_control->ownerDocument->createElement ("span");
 	$helper->setAttribute ("class", "helper");
 	$left_control->appendChild ($helper);
 	
 	$left_icon = $left_control->ownerDocument->createElement ("span");
 	$left_icon->setAttribute ("class", "fa fa-chevron-left");
 	
 	$left_control->appendChild ($left_icon);
 	$my_carousel->appendChild ($left_control);
 	
 	$right_control = $my_carousel->ownerDocument->createElement ("a");
 	$right_control->setAttribute ("class", "right carousel-control");
 	$right_control->setAttribute ("href", "#myCarousel");
 	$right_control->setAttribute ("role", "button");
 	$right_control->setAttribute ("data-slide", "next");
 	
 	$helper = $right_control->ownerDocument->createElement ("span");
 	$helper->setAttribute ("class", "helper");
 	$right_control->appendChild ($helper);
 	
 	$right_icon = $right_control->ownerDocument->createElement ("span");
 	$right_icon->setAttribute ("class", "fa fa-chevron-right");
 	
 	$right_control->appendChild ($right_icon);
 	$my_carousel->appendChild ($right_control);
 	
 	$carousel_bounding_box->appendChild ($my_carousel);
 	$slider->appendChild ($carousel_bounding_box);
 	$main_feature1->appendChild ($slider);
	
// 		aggiungo la struttura per le anteprime
	$slider_thumbs = $main_feature1->ownerDocument->createElement ("div");
	$slider_thumbs->setAttribute ("class", "col-xs-12 col-sm-6 col-sm-pull-6");
	$slider_thumbs->setAttribute ("id", "slider-thumbs");
	
	$hide_bullets = $slider_thumbs->ownerDocument->createElement ("ul");
	$hide_bullets->setAttribute ("class", "hide-bullets");
	
	$slider_thumbs->appendChild ($hide_bullets);
	$main_feature1->appendChild ($slider_thumbs);
 	
//  	ciclo con il quale aggiungo effettivamente le anteprime e le immagini nello slider
 	$i = 0;
	$dir = new DirectoryIterator($_SERVER["DOCUMENT_ROOT"] . dir_img . "/gallery/" . $folder_name);
	foreach ($dir as $fileinfo) {
		if ($fileinfo->isFile() && !$fileinfo->isDot()) {
			$file_name = $fileinfo->getFilename();
			if (strcmp($file_name, "thumbnail.jpg"))
			{
// 					aggiungo le anteprime
				addThumbnailImageForSlideshow($hide_bullets, "carousel-selector-" . $i, dir_img . "/gallery/" . $folder_name . "/" . $file_name);
				
// 					aggiungo le immagini nello slider
 				if ($i==0)
 				{
 					addSlideImage($carousel_inner, dir_img . "/gallery/" . $folder_name . "/" . $file_name, $i, true);
 				}
 				else
 				{
 					addSlideImage($carousel_inner, dir_img . "/gallery/" . $folder_name . "/" . $file_name, $i, false);
 				}
 				
				$i++;
			}
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
 	addSimpleJS($body, dir_lib . "/carousel-thumbs-gallery/js/carousel-thumbs-gallery.js");	//aggiungo un piccolo script personalizzato per questa pagina
	echo $dom->saveHTML();	//stampo tutto l'html
?>