<?php
	include_once '../lib/functions.php';	//Includo la mia libreria PHP
	$dom = open_html("Contattaci");	//genero il dom
 	$body = $dom->getElementsByTagName("body")->item(0);	//salvo il riferimento al nodo body
 	
 	addHorizontalNavbar($body);	//aggiungo la barra di navigazione
 	addHeaderImage($body);	//aggiungo l'immagine in header
//  	<------------------------------------------------------>
//		CONTENUTO DELLA PAGINA VERO E PROPRIO
 	
//		<--variabili contenenti il testo da inserire nei paragrafi
 	$par1_text = <<<HTML
 	Per qualsiasi informazione e chiarimento, o per richiedere preventivi, non esitate a contattarci:
HTML;
// 		fine variabili di testo-->
 	
//  	<--inizio della creazione della struttura del contenuto specifico della pagina
 	$contact_us = $body->ownerDocument->createElement ("section");
 	$contact_us->setAttribute ("id", "contact");
 	$contact_us->setAttribute ("class", "section_content");
 	
 	$container = $contact_us->ownerDocument->createElement ("div");
 	$container->setAttribute ("class", "container");
 	
// 		aggiungo titolo
 	addContentTitle($container, ["", "CONTATTACI"], "");
 	
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
	$row2->setAttribute ("class", "row");
	
	$contact_full = $row2->ownerDocument->createElement ("div");
	$contact_full->setAttribute ("class", "contact_full");
	
	$col2 = $contact_full->ownerDocument->createElement ("div");
	$col2->setAttribute ("class", "col-md-6 left");
	
	$left_contact = $col2->ownerDocument->createElement ("div");
	$left_contact->setAttribute ("class", "left_contact");
	
	$form = $left_contact->ownerDocument->createElement ("form");
	$form->setAttribute ("action", "role");
	
	addFormField($form, "name", "Nome", "name", "text", "fa-user");
	addFormField($form, "email", "E-mail", "mail", "email", "fa-envelope-o");
	addFormField($form, "phone", "Telefono", "phone", "text", "fa-phone");
	
	$left_contact->appendChild ($form);
	$col2->appendChild ($left_contact);
	$contact_full->appendChild ($col2);
	
	$col3 = $contact_full->ownerDocument->createElement ("div");
	$col3->setAttribute ("class", "col-md-6 right");
	
	$form_level = $col3->ownerDocument->createElement ("div");
	$form_level->setAttribute ("class", "form-level");
	
	$textarea = $form_level->ownerDocument->createElement ("textarea");
	$textarea->setAttribute ("name", "");
	$textarea->setAttribute ("id", "message");
	$textarea->setAttribute ("placeholder", "Messaggio");
	$textarea->setAttribute ("rows", "5");
	$textarea->setAttribute ("class", "textarea-block");
	
	$form_level->appendChild ($textarea);
	
	$message_icon = $form_level->ownerDocument->createElement ("span");
	$message_icon->setAttribute ("class", "form-icon fa fa-pencil");
	
	$form_level->appendChild ($message_icon);
	$col3->appendChild ($form_level);
	$contact_full->appendChild ($col3);
	
	$col4 = $contact_full->ownerDocument->createElement ("div");
	$col4->setAttribute ("class", "col-md-12 text-center");
	
	$button_x = $col4->ownerDocument->createElement ("button", "Invia");
	$button_x->setAttribute ("class", "btn btn-main featured");
	$button_x->setAttribute ("id", "send_button");
	
	$col4->appendChild ($button_x);
	$contact_full->appendChild ($col4);
	$row2->appendChild ($contact_full);
	$container->appendChild ($row2);
 	$contact_us->appendChild ($container);
 	$body->appendChild($contact_us);
//  	fine della struttura-->
	
//  	<------------------------------------------------------>
 	addFooter($body);	//aggiungo il footer
 	addBackToTopButton($body);	//aggiungo il bottone che riporta all'inizio della pagina
 	
//		<--inizio creazione dialog

 	$modal = $body->ownerDocument->createElement ("div");
 	$modal->setAttribute ("class", "modal fade");
 	
 	$modal_dialog = $modal->ownerDocument->createElement ("div");
 	$modal_dialog->setAttribute ("class", "modal-dialog");
 	
 	$modal_content = $modal_dialog->ownerDocument->createElement ("div");
 	$modal_content->setAttribute ("class", "modal-content");
 	
 	$modal_header = $modal_content->ownerDocument->createElement ("div");
 	$modal_header->setAttribute ("class", "modal-header");
 	
 	$button_x = $modal_header->ownerDocument->createElement ("button", "x");
 	$button_x->setAttribute ("type", "button");
 	$button_x->setAttribute ("class", "close");
 	$button_x->setAttribute ("data-dismiss", "modal");
 	$button_x->setAttribute ("aria-hidden", "true");
 	$modal_header->appendChild ($button_x);
 	
 	$h4 = $modal_header->ownerDocument->createElement ("h4", "Modal title");
 	$h4->setAttribute ("class", "modal-title");
 	$modal_header->appendChild ($h4);
 	$modal_content->appendChild ($modal_header);
 	
 	$modal_body = $modal_content->ownerDocument->createElement ("div");
 	$modal_body->setAttribute ("class", "modal-body");
 	
 	$modal_body->appendChild ($modal_body->ownerDocument->createElement ("p", "One fine body..."));
 	$modal_content->appendChild ($modal_body);
 	
 	$modal_footer = $modal_content->ownerDocument->createElement ("div");
 	$modal_footer->setAttribute ("class", "modal-footer");
 	
 	$button_close = $modal_footer->ownerDocument->createElement ("button", "Close");
 	$button_close->setAttribute ("type", "button");
 	$button_close->setAttribute ("class", "btn btn-default");
 	$button_close->setAttribute ("data-dismiss", "modal");
 	
 	$modal_footer->appendChild ($button_close);
 	$modal_content->appendChild ($modal_footer);
 	$modal_dialog->appendChild ($modal_content);
 	$modal->appendChild ($modal_dialog);
 	$body->appendChild ($modal);
//		fine creazione dialog-->
 	
	importJS($body);	//importo le librerie Javascript
	addSimpleJS($body, "contact_us.js");
	echo $dom->saveHTML();	//stampo tutto l'html
?>