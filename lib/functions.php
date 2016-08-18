<?php
	define ( "dir_prj_root", "/globalgest" ); //costante che contiene il percorso root
	define ( "dir_img", dir_prj_root . "/img" ); //costante che contiene il percorso alla cartella "img"
	define ( "dir_lib", dir_prj_root . "/lib" ); //costante che contiene il percorso alla cartella "lib"
	define ( "dir_home", dir_prj_root . "/"); //costante che contiene il percorso alla pagina "home"
	define ( "dir_chi_siamo", dir_prj_root . "/chi-siamo" ); //costante che contiene il percorso alla cartella "chi-siamo"
	define ( "dir_servizi", dir_prj_root . "/servizi" ); //costante che contiene il percorso alla cartella "servizi"
	define ( "dir_progettazione", dir_servizi . "/progettazione" ); //costante che contiene il percorso alla cartella "progettazione
	define ( "dir_imp_elettrici", dir_servizi . "/impianti-elettrici" ); //costante che contiene il percorso alla cartella "impianti-elettrici"
	define ( "dir_imp_termo_san", dir_servizi . "/impianti-termo-sanitari" ); //costante che contiene il percorso alla cartella "impianti-termo-sanitari"
	define ( "dir_imp_clima", dir_servizi . "/impianti-di-climatizzazione" ); //costante che contiene il percorso alla cartella "impianti-di-climatizzazione"
	define ( "dir_imp_prot_antincendio", dir_servizi . "/impianti-di-protezione-antincendio" ); //costante che contiene il percorso alla cartella "impianti-di-protezione-antincendio"
	define ( "dir_imp_fotovoltaici", dir_servizi . "/impianti-fotovoltaici" ); //costante che contiene il percorso alla cartella "impianti-fotovoltaici"
	define ( "dir_imp_manifest_fiere", dir_servizi . "/impianti-per-manifestazioni-e-fiere" ); //costante che contiene il percorso alla cartella "impianti-per-manifestazioni-e-fiere"
	define ( "dir_opere_edili", dir_servizi . "/opere-edili" ); //costante che contiene il percorso alla cartella "opere-edili"
	define ( "dir_man_program_ass", dir_servizi . "/manutenzione-programmata-ed-assistenza" ); //costante che contiene il percorso alla cartella "manutenzione-programmata-ed-assistenza"
	define ( "dir_analisi_energetica", dir_servizi . "/analisi-energetica" ); //costante che contiene il percorso alla cartella "analisi-energetica"
	define ( "dir_gallery", dir_prj_root . "/gallery" ); //costante che contiene il percorso alla cartella "gallery"
	define ( "dir_contattaci", dir_prj_root . "/contattaci" ); //costante che contiene il percorso alla cartella "contattaci"
	define ( "dir_dove_siamo", dir_prj_root . "/dove-siamo" ); //costante che contiene il percorso alla cartella "dove-siamo"
	
	define ( "ragione_sociale", "GLOBAL GEST S.R.L." ); //ragione sociale
	define ( "via", "Via della Meccanica" ); //via sede
	define ( "n_civico", "16/18" ); //numero civico sede
	define ( "citta", "San Cesario sul Panaro" ); //citt sede
	define ( "provincia_abbr", "(MO)" ); //provincia abbreviata sede
	define ( "provincia_int", "Modena" ); //provincia integrale sede
	define ( "cap", "41018" ); //cap sede
	define ( "paese", "Italy" ); //paese sede
	define ( "tel", "+39 059 9537400" ); //telefono sede
	define ( "fax", "+39 059 9537496" ); //fax sede
	define ( "email", "info@globalgest.mo.it" ); //indirizzo mail per info
	define ( "giorni_lavorativi", "Dal lunedì al venerdì" );
	define ( "orari_mattina", "8.30 - 12.30" );
	define ( "orari_pomeriggio", "14.30 - 18.30" );
	
	/*
	 * Funzione che aggiunge al nodo padre passato per parametro un semplice nodo a con class e href passati per parametro.
	 * Il parametro $content e' il contenuto del nodo.
	 * Se $class e' nullo, il nodo a non avra' class
	 */
	function addSimpleA (&$father, $content, $href, $class)
	{
		$a = $father->ownerDocument->createElement ("a", $content);
		$a->setAttribute ("href", $href);
		if ($class)
		{
			$a->setAttribute ("class", $class);
		}
		
		$father->appendChild ($a);
	}

	/*
	 * Funzione che appende al nodo padre, passato per parametro, una semplice libreria CSS
	 */
	function addSimpleCSS (&$father, $path)
	{
		$library = $father->ownerDocument->createElement("link");
		$library->setAttribute ("href", $path);
		$library->setAttribute ("rel", "stylesheet");
		$father->appendChild($library);
	}
	
	/*
	 * Funzione che aggiunge al nodo padre un nodo contente semplicemente la tag "i" rappresentatante
	 * l'icona Font Awesome passata come parametro attraverso la corrispondente classe.
	 */
	function addSimpleFAIcon (&$father, $class)
	{
		$i = $father->ownerDocument->createElement ("i");
		$i->setAttribute ("class", $class);
		$father->appendChild ($i);
	}
	
	/*
	 * Funzione che appende al nodo padre, passato per parametro, una semplice libreria Javascript
	 */
	function addSimpleJS (&$father, $path)
	{
		$library = $father->ownerDocument->createElement("script");
		$library->setAttribute ("src", $path);
		$father->appendChild($library);
	}
	
	/*
	 * Funzione che aggiunge al nodo padre passato per parametro un semplice nodo li contenente un nodo a con class e href passati per parametro.
	 * Il parametro $content � il contenuto del nodo.
	 * Se $class � nullo, il nodo a non avr� class
	 */
	function addSimpleLi (&$father, $content, $href, $a_class, $icon_class)
	{
		$li = $father->ownerDocument->createElement ("li");
		
		if ($icon_class)
		{
			addSimpleFAIcon($li, $icon_class);
		}
		
		addSimpleA($li, $content, $href, $a_class);
		$father->appendChild ($li);
	}
	
	/*
	 * Funzione che appende al nodo padre, passato per parametro, un semplice nodo meta composto dagli attributi name e content (passati per parametro)
	 */
	function addSimpleMeta (&$father, $name, $content)
	{
		$meta = $father->ownerDocument->createElement("meta");
		$meta->setAttribute ("name", $name);
		$meta->setAttribute ("content", $content);
		$father->appendChild($meta);
	}
	
	/*
	 * Funzione che appende al padre passato come parametro (si presume sia un form), un campo costruito
	 * sulla base delle altre informazioni passate per parametro.
	 * $father		e' il nodo al quale verra' appeso il sottomenu'
	 * $name		value of the attribute "name" of the input node.
	 * $placeholder	value of the attribute "placeholder" of the input node.
	 * $id			value of the attribute "id" of the input node.
	 * $type		value of the attribute "type" of the input node.
	 * $fa_icon		font awesome icon shown into the form field.
	 * $required	boolean that indicates if the attribute "required" is necessary.
	 */
	function addFormField (&$father, $name, $placeholder, $id, $type, $fa_icon, $required, $data_error)
	{
		$form_level = $father->ownerDocument->createElement ("div");
		$form_level->setAttribute ("class", "form-level form-group");
		
		$input = $form_level->ownerDocument->createElement ("input");
		$input->setAttribute ("id", $id);
		$input->setAttribute ("class", "input-block");
		$input->setAttribute ("name", $name);
		$input->setAttribute ("placeholder", $placeholder);
		$input->setAttribute ("value", "");
		$input->setAttribute ("type", $type);
		if ($data_error)
		{
			$input->setAttribute ("data-error", $data_error);
		}
		if ($required)
		{
		$input->setAttribute ("required", "");
		}
		
		$form_level->appendChild ($input);
		
		$icon = $form_level->ownerDocument->createElement ("span");
		$icon->setAttribute ("class", "form-icon fa " . $fa_icon);
		$form_level->appendChild ($icon);
		
		$error_field = $form_level->ownerDocument->createElement ("div");
		$error_field->setAttribute ("class", "help-block with-errors");
		$form_level->appendChild ($error_field);
		$father->appendChild ($form_level);
	}

	/*
	 * Funzione derivata direttamente da "addSimpleLi".
	 * Specializzata per aggiungere voci di menu alla barra di navigazione orizzontale.
	 */
	function addMenuVoice (&$father, $content, $href)
	{
		addSimpleLi($father, $content, $href, "page-scroll", "");
	}
	
	/*
	 * Funzione utilizzata per aggiungere alla barra di navigazione orizzontale una
	 * voce con sottomenu.
	 * $father		e' il nodo al quale verra' appeso il sottomenu'.
	 * $content		e' la stringa attribuita alla voce di menu che ha sua volta conterra' il sottomenu'.
	 * $href		e' il link attribuito alla voce di menu che a sua volta conterra' il sottomenu'.
	 * $id			e' l'id assegnato al nodo ul contenente il sottomenu'.
	 * $subVoices	e' l'insieme delle voci appartenenti al sottomenu' e dei link ad esse attribuite.
	 * 				Puo' essere un array composto da due elementi (stringa corrispondente alla voce, link),
	 * 				oppure un array di array di due elementi composti dalla coppia di elementi prima citati.
	 */
	function addMenuVoiceWithSubmenu (&$father, $content, $href, $id, $subVoices)
	{
		$li_dropdown = $father->ownerDocument->createElement ("li");
		$li_dropdown->setAttribute ("class", "page-scroll dropdown");
	
		$a_dropdown = $li_dropdown->ownerDocument->createElement ("a", $content . " ");
		$a_dropdown->setAttribute ("href", $href);
		$a_dropdown->setAttribute ("class", "dropdown-toggle page-scroll");
		//$a_dropdown->setAttribute ("data-toggle", "dropdown");
		$a_dropdown->setAttribute ("role", "button");
		$a_dropdown->setAttribute ("aria-haspopup", "true");
		$a_dropdown->setAttribute ("aria-expanded", "false");
	
		$caret = $a_dropdown->ownerDocument->createElement ("span");
		$caret->setAttribute ("class", "caret");
	
		$a_dropdown->appendChild ($caret);
		$li_dropdown->appendChild($a_dropdown);
	
		$ul = $li_dropdown->ownerDocument->createElement ("ul");
		$ul->setAttribute ("class", "dropdown-menu");
		
		if ($id)
		{
			$ul->setAttribute ("id", $id);
		}
	
		if (!is_array($subVoices [0]))	//se e' stata passata come parametro solo una sottovoce
		{
			addMenuVoice($ul, $subVoices [0], $subVoices [1]);
		}
		else
		{
			foreach ($subVoices as $voice)
			{
				addMenuVoice($ul, $voice [0], $voice [1]);
			}
		}
	
		$li_dropdown->appendChild ($ul);
		$father->appendChild ($li_dropdown);
	}
	
	/*
	 * Funzione che aggiunge al nodo padre passato per parametro un paragrafo con o senza titolo e uno o più paragrafi come contenuto.
	 * $father			e' il nodo al quale verra' appeso il paragrafo.
	 * $title			e' il titolo del paragrafo (se presente).
	 * $paragraphs		e' una stringa contenente il paragrafo, o un array di stringhe.
	 */
	function addPrivacyPolicyParagraph (&$father, $title, $paragraphs)
	{
		$p = $father->ownerDocument->createELement ("div");
		if ($title)
		{
			$p->appendChild ($p->ownerDocument->createElement ("strong", $title));
		}
		if (is_array($paragraphs))
		{
			foreach ($paragraphs as $paragraph)
			{
				$p->appendChild ($p->ownerDocument->createElement ("p", $paragraph));
			}
		}
		else
		{
			$p->appendChild ($p->ownerDocument->createElement ("p", $paragraphs));
		}
		$father->appendChild ($p);
	}
	
	/*
	 * Funzione che crea l'anteprima di un'immagine per la slideshow e la appende al nodo padre passata per parametro.
	 * Viene utilizzata nella pagina contenente la gallery fotografica di un'azienda.
	 * $father			e' il nodo al quale verra' appeso il sottomenu'.
	 * $src				e' il percorso dell'immagine di anteprima.
	 * $slide_number	e' il valore che viene assegnato all'attributo "data-slide-number".
	 * $active			e' un valore booleano che se uguale a vero aggiunge la classe active al nodo.
	 */
	function addSlideImage (&$father, $src, $slide_number, $active)
	{
		$div = $father->ownerDocument->createElement ("div");
		if ($active)
		{
			$div->setAttribute ("class", "active item");				
		}
		else {
			$div->setAttribute ("class", "item");			
		}
		$div->setAttribute ("data-slide-number", $slide_number);
			
		$image = $div->ownerDocument->createElement ("img");
		$image->setAttribute ("src", $src);
	
		$div->appendChild ($image);
		$father->appendChild ($div);
	}
	
	/*
	 * Funzione che crea l'anteprima di un'immagine e la appende al nodo padre passata per parametro.
	 * Viene utilizzata nella pagina contenente la lista delle gallery fotografiche.
	 * $father		e' il nodo al quale verra' appeso il sottomenu'.
	 * $href		e' il link attribuito all'anteprima dell'immagine.
	 * $src			e' il percorso dell'immagine di anteprima.
	 * $alt			e' il valore assegnato all'attributo alt dell'imagine di anteprima.
	 */
	function addThumbnailImage (&$father, $href, $src, $alt)
	{
		$div = $father->ownerDocument->createElement ("div");
		$div->setAttribute ("class", "col-lg-3 col-md-4 col-xs-6 thumb");
	
		$a = $div->ownerDocument->createElement ("a");
		$a->setAttribute ("class", "thumbnail");
		$a->setAttribute ("href", $href);
		
		$image = $a->ownerDocument->createElement ("img");	
		$image->setAttribute ("class", "img-responsive");
		$image->setAttribute ("src", $src);
		$image->setAttribute ("alt", $alt);
	
		$a->appendChild ($image);
		$div->appendChild ($a);
		$father->appendChild ($div);
	}
	
	/*
	 * Funzione che crea l'anteprima di un'immagine per la slideshow e la appende al nodo padre passata per parametro.
	 * Viene utilizzata nella pagina contenente la gallery fotografica di un'azienda.
	 * $father		e' il nodo al quale verra' appeso il sottomenu'.
	 * $a_id		e' l'attributo id assegnato al nodo a.
	 * $src			e' il percorso dell'immagine di anteprima.
	 */
	function addThumbnailImageForSlideshow (&$father, $a_id, $src)
	{
		$li = $father->ownerDocument->createElement ("li");
		$li->setAttribute ("class", "col-xs-6 col-sm-4");
		
		$a = $li->ownerDocument->createElement ("a");
		$a->setAttribute ("class", "thumbnail");
		$a->setAttribute ("id", $a_id);
		
		$image = $a->ownerDocument->createElement ("img");
		$image->setAttribute ("src", $src);
		
		$a->appendChild ($image);
		$li->appendChild ($a);
		$father->appendChild ($li);
	}
	
	/*
	 * Funzione che appende le librerie CSS al nodo head, passato come parametro 
	 */
	function importCSS (&$head) {
        addSimpleCSS ($head, dir_lib . "/bootstrap-3.3.6-dist/css/bootstrap.min.css");
// 		addSingleCSS ($head, prj_lib . "/bootstrap-3.3.4-dist/css/bootstrap-theme.min.css");
		addSimpleCSS ($head, dir_lib . "/font-awesome/css/font-awesome.min.css");		
		addSimpleCSS ($head, dir_lib . "/jquery-animate/animate.css");		
        addSimpleCSS ($head, dir_lib . "/red/red.css");        
       	addSimpleCSS ($head, dir_lib . "/custom/css/template.css");        
		addSimpleCSS ($head, dir_lib . "/responsive/responsive.css");        
		addSimpleCSS ($head, dir_lib . "/bootstrap3-dialog/css/bootstrap-dialog.css");		
       	addSimpleCSS ($head, dir_lib . "/custom/css/custom.css");
       	
        addSimpleCSS ($head, "http://fonts.googleapis.com/css?family=Lato:400,300");        
        addSimpleCSS ($head, "http://fonts.googleapis.com/css?family=Raleway:400,300,500");
    }
	
	/*
	 * Funzione che appende le librerie JS al nodo body, passato come parametro 
	 */
    function importJS (&$body) { //importa librerie
        addSimpleJS($body, dir_lib . "/jquery-2.2.1/jquery-2.2.1.min.js");        
        addSimpleJS($body, dir_lib . "/bootstrap-3.3.6-dist/js/bootstrap.min.js");        
        addSimpleJS($body, dir_lib . "/smooth-scroll/smooth-scroll.js");        
        addSimpleJS($body, dir_lib . "/jquery-scrollTo/jquery.scrollTo.js");        
        addSimpleJS($body, dir_lib . "/jquery-easing/jquery.easing.1.3.js");        
        addSimpleJS($body, dir_lib . "/bootstrap3-dialog/js/bootstrap-dialog.js");        
        addSimpleJS($body, dir_lib . "/custom/js/template.js");
        addSimpleJS($body, dir_lib . "/custom/js/custom.js");
    }
	
	/*
	 * Funzione che aggiunge al nodo body passato come parametro la barra di navigazione 
	 * orizzontale comprensiva del logo posto a sinistra
	 */
	function addHorizontalNavbar (&$body)
	{
		//creazione dell'array per il sottomenu servizi che mi servir� dopo
		$voci_servizi = array (
				array ("Progettazione", dir_progettazione),
				array ("Impianti elettrici", dir_imp_elettrici),
				array ("Impianti termo-sanitari", dir_imp_termo_san),
				array ("Impianti di climatizzazione", dir_imp_clima),
				array ("Impianti di protezione antincendio", dir_imp_prot_antincendio),
				array ("Impianti fotovoltaici", dir_imp_fotovoltaici),
				array ("Impianti per manifestazioni e fiere", dir_imp_manifest_fiere),
				array ("Opere edili", dir_opere_edili),
				array ("Manutenzione programmata ed assistenza", dir_man_program_ass),
				array ("Analisi energetica", dir_analisi_energetica)
		);		
		
		//creazione div section header
		$header = $body->ownerDocument->createElement ("div");
		$header->setAttribute ("id", "section_header");
		$header->setAttribute ("class", "navbar-fixed-top main-nav");
		$header->setAttribute ("role", "banner");
		
		$container = $header->ownerDocument->createElement ("div");
		$container->setAttribute ("class", "container");
		
		$row = $container->ownerDocument->createElement ("div");
		$row->setAttribute ("class", "row");
		
		$navbar_header = $row->ownerDocument->createElement ("div");
		$navbar_header->setAttribute ("class", "navbar-header");
		
		$button = $navbar_header->ownerDocument->createElement ("button");
		$button->setAttribute ("type", "button");
		$button->setAttribute ("class", "navbar-toggle");
		$button->setAttribute ("data-toggle", "collapse");
		$button->setAttribute ("data-target", "#bs-example-navbar-collapse-1");
		
		$span1 = $button->ownerDocument->createElement ("span", "Toggle navigation");
		$span1->setAttribute ("class", "sr-only");
		$button->appendChild ($span1);
		
		$span2 = $button->ownerDocument->createElement ("span");
		$span2->setAttribute ("class", "icon-bar");	
		$button->appendChild ($span2);
		
		$span3 = $button->ownerDocument->createElement ("span");
		$span3->setAttribute ("class", "icon-bar");
		$button->appendChild ($span3);
		
		$span4 = $button->ownerDocument->createElement ("span");
		$span4->setAttribute ("class", "icon-bar");
		$button->appendChild ($span4);
		
		$navbar_header->appendChild ($button);
		
		$navbar_brand = $navbar_header->ownerDocument->createElement ("a");
		$navbar_brand->setAttribute ("class", "navbar-brand");
		$navbar_brand->setAttribute ("href", dir_home);
		
		$logo = $navbar_brand->ownerDocument->createElement ("img");
		$logo->setAttribute ("src", dir_img . "/logo.png");
		$logo->setAttribute ("alt", "Global Gest S.R.L.");
		
		$navbar_brand->appendChild ($logo);
		$navbar_header->appendChild ($navbar_brand);
		$row->appendChild ($navbar_header);
		
		$navbar = $row->ownerDocument->createElement ("nav");
		$navbar->setAttribute ("id", "bs-example-navbar-collapse-1");
		$navbar->setAttribute ("class", "collapse navbar-collapse navigation");
		$navbar->setAttribute ("role", "navigation");
		
		$ul = $navbar->ownerDocument->createElement ("ul");
		$ul->setAttribute ("class", "nav navbar-nav navbar-right");

		addMenuVoice($ul, "Home", dir_home);
		addMenuVoice($ul, "Chi Siamo", dir_chi_siamo);
		addMenuVoiceWithSubmenu($ul, "Servizi", dir_servizi, "dropdown-services", $voci_servizi);
		addMenuVoice($ul, "Gallery", dir_gallery);
		addMenuVoice($ul, "Dove Siamo", dir_dove_siamo);
		addMenuVoice($ul, "Contattaci", dir_contattaci);
		
		$navbar->appendChild ($ul);
		$row->appendChild ($navbar);
		$container->appendChild ($row);
		$header->appendChild ($container);
		$body->appendChild ($header);
	}

	/*
	 * Funzione che aggiunge al nodo body passato come parametro lo slider.
	 * AL MOMENTO NON UTILIZZATA. (probabilmente manca qualche libreria per utilizzarlo)
	 */
	function addHeaderSlider (&$body)
	{
		//creazione del section
		$section = $body->ownerDocument->createElement ("section");
		$section->setAttribute ("id", "slider_part");

		$carousel_slide = $section->ownerDocument->createElement ("div");
		$section->setAttribute ("id", "carousel-example-generic");
		$carousel_slide->setAttribute ("class", "carousel slide");
		$carousel_slide->setAttribute ("data-ride", "carousel");
		
		//creazione indicatori
		$ol = $carousel_slide->ownerDocument->createElement ("ol");
		$ol->setAttribute ("class", "carousel-indicators text-center");

		$li = $ol->ownerDocument->createElement ("li");
		$li->setAttribute ("data-target", "#carousel-example-generic");
		$li->setAttribute ("data-slide-to", "0");
		$li->setAttribute ("class", "active");
		$ol->appendChild($li);
		unset($li);
		$li = $ol->ownerDocument->createElement ("li");
		$li->setAttribute ("data-target", "#carousel-example-generic");
		$li->setAttribute ("data-slide-to", "1");
		$ol->appendChild($li);
		unset($li);
		$li = $ol->ownerDocument->createElement ("li");
		$li->setAttribute ("data-target", "#carousel-example-generic");
		$li->setAttribute ("data-slide-to", "2");
		$ol->appendChild($li);
		unset($li);
		
		$carousel_slide->appendChild($ol);
		
		//creazione dello slider vero e proprio+
		$carousel = $carousel_slide->ownerDocument->createElement ("div");
		$carousel->setAttribute ("class", "carousel-inner");
		
		//item 1
		$item = $carousel->ownerDocument->createElement ("div");
		$item->setAttribute ("class", "item active");

		$overlay_slide = $item->ownerDocument->createElement ("div");
		$overlay_slide->setAttribute ("class", "overlay-slide");

		$img = $overlay_slide->ownerDocument->createElement ("img");
		$img->setAttribute ("src", "images/banner/p5.jpg");
		$img->setAttribute ("alt", "");
		$img->setAttribute ("class", "img-responsive");
		
		$overlay_slide->appendChild($img);
		unset ($img);
		$item->appendChild($overlay_slide);
		unset ($overlay_slide);
		
		$carousel_caption = $item->ownerDocument->createElement ("div");
		$carousel_caption->setAttribute ("class", "carousel-caption");
		
		$col = $carousel_caption->ownerDocument->createElement ("div");
		$col->setAttribute ("class", "col-md-12 col-xs-12 text-center");
		
		$h2 = $col->ownerDocument->createElement ("h2", "Cyprass");
		$col->appendChild($h2);
		unset ($h2);
		
		$h3 = $col->ownerDocument->createElement ("h3", " Modern and clean ");
		$h3->setAttribute ("class", "animated2");
		$h3->appendChild($h3->ownerDocument->createElement ("b", " Creative"));
		$col->appendChild($h3);
		unset ($h3);
		
		$line = $col->ownerDocument->createElement ("div");
		$line->setAttribute ("class", "line");
		$col->appendChild($line);
		unset ($line);
		
		$p = $col->ownerDocument->createElement ("p", "Unique clean design");
		$p->setAttribute ("class", "animated3");
		$col->appendChild($p);
		unset ($p);
		
		$carousel_caption->appendChild ($col);
		unset ($col);
		$item->appendChild ($carousel_caption);
		unset ($carousel_caption);
		$carousel->appendChild ($item);
		unset($item);
		
		//item 2
		$item = $carousel->ownerDocument->createElement ("div");
		$item->setAttribute ("class", "item");
		
		$overlay_slide = $item->ownerDocument->createElement ("div");
		$overlay_slide->setAttribute ("class", "overlay-slide");
		
		$img = $overlay_slide->ownerDocument->createElement ("img");
		$img->setAttribute ("src", "images/banner/p3.jpg");
		$img->setAttribute ("alt", "");
		$img->setAttribute ("class", "img-responsive");
		
		$overlay_slide->appendChild($img);
		unset ($img);
		$item->appendChild($overlay_slide);
		unset ($overlay_slide);
		
		$carousel_caption = $item->ownerDocument->createElement ("div");
		$carousel_caption->setAttribute ("class", "carousel-caption");
		
		$col = $carousel_caption->ownerDocument->createElement ("div");
		$col->setAttribute ("class", "col-md-12 col-xs-12 text-center");
		
		$h2 = $col->ownerDocument->createElement ("h2", "Cyprass");
		$col->appendChild($h2);
		unset ($h2);
		
		$h3 = $col->ownerDocument->createElement ("h3", " Design");
		$h3->setAttribute ("class", "animated3");
		$h3->appendChild($h3->ownerDocument->createElement ("b", "Flat"));
		$col->appendChild($h3);
		unset ($h3);
		
		$line = $col->ownerDocument->createElement ("div");
		$line->setAttribute ("class", "line");
		$col->appendChild($line);
		unset ($line);
		
		$p = $col->ownerDocument->createElement ("p", "best choice for you");
		$p->setAttribute ("class", "animated2");
		$col->appendChild($p);
		unset ($p);
		
		$carousel_caption->appendChild ($col);
		unset ($col);
		$item->appendChild ($carousel_caption);
		unset ($carousel_caption);
		$carousel->appendChild ($item);
		unset($item);
		
		//item 3
		$item = $carousel->ownerDocument->createElement ("div");
		$item->setAttribute ("class", "item");
		
		$overlay_slide = $item->ownerDocument->createElement ("div");
		$overlay_slide->setAttribute ("class", "overlay-slide");
		
		$img = $overlay_slide->ownerDocument->createElement ("img");
		$img->setAttribute ("src", "images/banner/p10.jpg");
		$img->setAttribute ("alt", "");
		$img->setAttribute ("class", "img-responsive");
		
		$overlay_slide->appendChild($img);
		unset ($img);
		$item->appendChild($overlay_slide);
		unset ($overlay_slide);
		
		$carousel_caption = $item->ownerDocument->createElement ("div");
		$carousel_caption->setAttribute ("class", "carousel-caption");
		
		$col = $carousel_caption->ownerDocument->createElement ("div");
		$col->setAttribute ("class", "col-md-12 col-xs-12 text-center");
		
		$h2 = $col->ownerDocument->createElement ("h2", "Cyprass");
		$col->appendChild($h2);
		unset ($h2);
		
		$h3 = $col->ownerDocument->createElement ("h3", " We're crazy ");
		$h3->setAttribute ("class", "animated3");
		$h3->appendChild($h3->ownerDocument->createElement ("b", "Coders"));
		$col->appendChild($h3);
		unset ($h3);
		
		$line = $col->ownerDocument->createElement ("div");
		$line->setAttribute ("class", "line");
		$col->appendChild($line);
		unset ($line);
		
		$p = $col->ownerDocument->createElement ("p", " way to success");
		$p->setAttribute ("class", "animated2");
		$col->appendChild($p);
		unset ($p);
		
		$carousel_caption->appendChild ($col);
		unset ($col);
		$item->appendChild ($carousel_caption);
		unset ($carousel_caption);
		$carousel->appendChild ($item);
		unset($item);
		
		$carousel_slide->appendChild($carousel);
		
		//creazione dei controlli
		$controls = $carousel_slide->ownerDocument->createElement ("div");
		$controls->setAttribute ("class", "slides-control");
		
		$left = $controls->ownerDocument->createElement ("a");
		$left->setAttribute ("class", "left carousel-control");
		$left->setAttribute ("href", "#carousel-example-generic");
		$left->setAttribute ("data-slide", "prev");
		
		$left_span = $left->ownerDocument->createElement ("span");
		
		$left_i = $left_span->ownerDocument->createElement ("i");
		$left_i->setAttribute ("class", "fa fa-angle-left");
		
		$left_span->appendChild($left_i);
		$left->appendChild ($left_span);
		$controls->appendChild ($left);
		
		$right = $controls->ownerDocument->createElement ("a");
		$right->setAttribute ("class", "right carousel-control");
		$right->setAttribute ("href", "#carousel-example-generic");
		$right->setAttribute ("data-slide", "next");
		
		$right_span = $right->ownerDocument->createElement ("span");
		
		$right_i = $right_span->ownerDocument->createElement ("i");
		$right_i->setAttribute ("class", "fa fa-angle-right");
		
		$right_span->appendChild($right_i);
		$right->appendChild ($right_span);
		$controls->appendChild ($right);
		$carousel_slide->appendChild($controls);
		$section->appendChild ($carousel_slide);
		$body->appendChild($section);
	}
	
	/*
	 * Funzione che aggiunge al nodo body passato come parametro la foto della global come header
	 */
	function addHeaderImage (&$body)
	{		
		$section = $body->ownerDocument->createElement ("section");
		$section->setAttribute ("id", "header_image");
		
		$container = $section->ownerDocument->createElement ("div");
		$container->setAttribute ("class", "container");
		
		$row = $container->ownerDocument->createElement ("div");
		$row->setAttribute ("class", "row");
		
		$img = $row->ownerDocument->createElement ("img");
		$img->setAttribute ("id", "header_img");
		$img->setAttribute ("src", dir_img . "/header.jpg");
		$img->setAttribute ("class", "img-responsive");
		
		$row->appendChild ($img);
		$container->appendChild ($row);
		$section->appendChild ($container);
		$body->appendChild ($section);
	}

    /*
     * Funzione che genera il DOM html, inserisce le informazioni nell'head, e lo ritorna.
     * Il parametro title � la stringa che sar� inserita nella tag omonima.
     */
	function open_html($title) { // apre la pagina con il relativo titolo
		
		//creo il documento
		$dom = new DOMDocument();
		$dom->loadHTML("<html class='no-js'><head></head><body data-spy='scroll' data-target='.navbar-fixed-top'></body></html>");

		//memorizzo nelle variabili i riferimenti ai nodi html e head
		$html = $dom->getElementsByTagName("html")->item(0);
		$head = $html->getElementsByTagName("head")->item(0);
		
		//aggiungo quelle strane cose commentate
		$dom->insertBefore(new DOMComment('[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]'), $html);
		$dom->insertBefore(new DOMComment('[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]'), $html);
		$dom->insertBefore(new DOMComment('[if IE 8]>         <html class="no-js lt-ie9"> <![endif]'), $html);
		$dom->insertBefore(new DOMComment('[if gt IE 8]><!'), $html);
		$html->insertBefore(new DOMComment('<![endif]'), $head);
		
		//creo i vari nodi figli di head e glieli appendo
		$meta_charset = $head->ownerDocument->createElement("meta");
		$meta_charset->setAttribute ("charset", "utf-8");
		$head->appendChild($meta_charset);
		
		$title = $head->ownerDocument->createElement("title", $title);
		$head->appendChild($title);
		
		addSimpleMeta($head, "description", "GLOBAL GEST SRL's website");
		
		addSimpleMeta($head, "viewport", "width=device-width, initial-scale=1");
		
		addSimpleMeta($head, "language", "it");
		
		addSimpleMeta($head, "robots", "ALL");

		$link_icon = $head->ownerDocument->createElement("link");
		$link_icon->setAttribute ("rel", "icon");
		$link_icon->setAttribute ("type", "image/png");
		$link_icon->setAttribute ("href", dir_img . "/favicon.ico");
		$head->appendChild($link_icon);
		
		$link_apple_icon = $head->ownerDocument->createElement("link");
		$link_apple_icon->setAttribute ("rel", "apple-touch-icon");
		$link_apple_icon->setAttribute ("href", dir_img . "/favicon.ico");
		$head->appendChild($link_apple_icon);

		importCSS ($head);	//appendo le varie librerie CSS al nodo head passato come parametro
		
		$body = $dom->getElementsByTagName("body")->item(0);	//salvo il riferimento al nodo body
		//Altra roba strana
		$body->appendChild(new DOMComment("[if lt IE 7]>
 		<p class='browsehappy'>You are using an <strong>outdated</strong> browser. Please <a href='http://browsehappy.com/'>upgrade your browser</a> to improve your experience.</p>
        <![endif]"));
		
		return $dom;	//ritorno il DOM
	}
	
	/*
	 * Funzione che aggiunge al nodo body passato come parametro il footer
	 */
	function addFooter (&$body)
	{
		$footer = $body->ownerDocument->createElement ("section");
		$footer->setAttribute ("id", "footer");
		
		//PARTE SUPERIORE DEL FOOTER
		$top_footer = $footer->ownerDocument->createElement ("div");
		$top_footer->setAttribute ("class", "footer_top");
		
		$top_container = $top_footer->ownerDocument->createElement ("div");
		$top_container->setAttribute ("class", "container");
		
		$top_row = $top_container->ownerDocument->createElement ("div");
		$top_row->setAttribute ("class", "row");
		
		//PRIMO MENU
		$first_col = $top_row->ownerDocument->createElement ("div");
		$first_col->setAttribute ("class", "col-md-4 col-sm-6 col-xs-12");
		
		$first_h3Menu = $first_col->ownerDocument->createElement ("h3", "Menu Principale");
		$first_h3Menu->setAttribute ("class", "menu_head");
		$first_col->appendChild ($first_h3Menu);
		
		$first_footerMenu = $first_col->ownerDocument->createElement ("div");
		$first_footerMenu->setAttribute ("class", "footer_menu");
		
		$first_ul = $first_footerMenu->ownerDocument->createElement ("ul");

		addSimpleLi($first_ul, "Home", dir_home, "", "");
		addSimpleLi($first_ul, "Chi siamo", dir_chi_siamo, "", "");
		addSimpleLi($first_ul, "Servizi", dir_servizi, "", "");
		addSimpleLi($first_ul, "Gallery", dir_gallery, "", "");
		addSimpleLi($first_ul, "Dove siamo", dir_dove_siamo, "", "");
		addSimpleLi($first_ul, "Contattaci", dir_contattaci, "", "");
		
		$first_footerMenu->appendChild ($first_ul);	
		$first_col->appendChild ($first_footerMenu);
		$top_row->appendChild ($first_col);
		
		//SECONDO MENU
		$second_col = $top_row->ownerDocument->createElement ("div");
		$second_col->setAttribute ("class", "col-md-4 col-sm-6 col-xs-12");
		
		$second_h3Menu = $second_col->ownerDocument->createElement ("h3", "Servizi");
		$second_h3Menu->setAttribute ("class", "menu_head");
		$second_col->appendChild ($second_h3Menu);
		
		$second_footerMenu = $second_col->ownerDocument->createElement ("div");
		$second_footerMenu->setAttribute ("class", "footer_menu");
		
		$second_ul = $second_footerMenu->ownerDocument->createElement ("ul");
		
		addSimpleLi($second_ul, "Progettazione", dir_progettazione, "", "");
		addSimpleLi($second_ul, "Impianti elettrici", dir_imp_elettrici, "", "");
		addSimpleLi($second_ul, "Impianti termo-sanitari", dir_imp_termo_san, "", "");
		addSimpleLi($second_ul, "Impianti di climatizzazione", dir_imp_clima, "", "");
		addSimpleLi($second_ul, "Impianti di protezione antincendio", dir_imp_prot_antincendio, "", "");
		addSimpleLi($second_ul, "Impianti fotovoltaici", dir_imp_fotovoltaici, "", "");
		addSimpleLi($second_ul, "Impianti per manifestazioni e fiere", dir_imp_manifest_fiere, "", "");
		addSimpleLi($second_ul, "Opere edili", dir_opere_edili, "", "");
		addSimpleLi($second_ul, "Manutenzioni programmate ed assistenza", dir_man_program_ass, "", "");
		addSimpleLi($second_ul, "Analisi energetica", dir_analisi_energetica, "", "");
		
		$second_footerMenu->appendChild ($second_ul);
		$second_col->appendChild ($second_footerMenu);
		$top_row->appendChild ($second_col);
		
		/*//EX TERZO MENU
		$third_col = $top_row->ownerDocument->createElement ("div");
		$third_col->setAttribute ("class", "col-md-3 col-sm-6 col-xs-12");
		
		$third_h3Menu = $third_col->ownerDocument->createElement ("h3", "Altro");
		$third_h3Menu->setAttribute ("class", "menu_head");
		$third_col->appendChild ($third_h3Menu);
		
		$third_footerMenu = $third_col->ownerDocument->createElement ("div");
		$third_footerMenu->setAttribute ("class", "footer_menu");
		
		$third_ul = $third_footerMenu->ownerDocument->createElement ("ul");
		
		addSimpleLi($third_ul, "Sistemi di pulizia per pannelli fotovoltaici", "#", "", "");
		addSimpleLi($third_ul, "Privacy Policy", "#", "", "");
		
		$third_footerMenu->appendChild ($third_ul);
		$third_col->appendChild ($third_footerMenu);
		$top_row->appendChild ($third_col);*/
		
		//QUARTO MENU
		$fourth_col = $top_row->ownerDocument->createElement ("div");
		$fourth_col->setAttribute ("class", "col-md-4 col-sm-6 col-xs-12");
		
		$fourth_h3Menu = $fourth_col->ownerDocument->createElement ("h3", "Contatto");
		$fourth_h3Menu->setAttribute ("class", "menu_head");
		$fourth_col->appendChild ($fourth_h3Menu);
		
		$fourth_footerMenu = $fourth_col->ownerDocument->createElement ("div");
		$fourth_footerMenu->setAttribute ("class", "footer_menu_contact");
		
		$fourth_ul = $fourth_footerMenu->ownerDocument->createElement ("ul");
		
		$li_address = $fourth_ul->ownerDocument->createElement ("li");
		addSimpleFAIcon($li_address, "fa fa-map-marker");
		$a = $li_address->ownerDocument->createElement ("a");
		$a->setAttribute ("href", "http://maps.google.com/?q=" . paese . ", " . citta . ", " . via . " " . n_civico . ", " . ragione_sociale);
		$a->setAttribute ("class", "footer-link");
		$a->setAttribute ("target", "_blank");
		$a->appendChild($a->ownerDocument->createTextNode(via . ", " . n_civico));
		addBR($a);
		$a->appendChild($a->ownerDocument->createTextNode(citta . " " . provincia_abbr . ", " . cap));
		addBR($a);
		$a->appendChild($a->ownerDocument->createTextNode(paese));
		$li_address->appendChild ($a);
		$fourth_ul->appendChild ($li_address);
		
		addSimpleLi($fourth_ul, tel, "tel:" . tel, "footer-link", "fa fa-phone");

		addSimpleLi($fourth_ul, fax, "fax:" . fax, "footer-link", "fa fa-fax");

		addSimpleLi($fourth_ul, email, "mailto:" . email, "footer-link", "fa fa-envelope");
		
		$li_time = $fourth_ul->ownerDocument->createElement ("li");
		addSimpleFAIcon($li_time, "fa fa-clock-o");
		$a_time = $li_time->ownerDocument->createElement ("a");
		$a_time->setAttribute ("class", "footer-no-link");
		$a_time->appendChild($a_time->ownerDocument->createTextNode(giorni_lavorativi . ": "));
		addBR($a_time);
		$a_time->appendChild($a_time->ownerDocument->createTextNode(orari_mattina));
		addBR($a_time);
		$a_time->appendChild($a_time->ownerDocument->createTextNode(orari_pomeriggio));
		$li_time->appendChild ($a_time);
		$fourth_ul->appendChild ($li_time);
		
		$fourth_footerMenu->appendChild ($fourth_ul);
		$fourth_col->appendChild ($fourth_footerMenu);
		$top_row->appendChild ($fourth_col);
		
		//MENU TAG (NON UTILIZZATO)
		/*$fifth_col = $top_row->ownerDocument->createElement ("div");
		$fifth_col->setAttribute ("class", "col-md-3 col-sm-6 col-xs-12");
		
		$fifth_h3Menu = $fifth_col->ownerDocument->createElement ("h3", "Tags");
		$fifth_h3Menu->setAttribute ("class", "menu_head");
		$fifth_col->appendChild ($fifth_h3Menu);
		
		$fifth_footerMenu = $fifth_col->ownerDocument->createElement ("div");
		$fifth_footerMenu->setAttribute ("class", "footer_menu tags");
		
		addSimpleA($fifth_footerMenu, "Design", "#");
		addSimpleA($fifth_footerMenu, "Design", "#");
		addSimpleA($fifth_footerMenu, "Design", "#");
		addSimpleA($fifth_footerMenu, "Design", "#");
		addSimpleA($fifth_footerMenu, "Design", "#");
		
		$fifth_col->appendChild ($fifth_footerMenu);
		$top_row->appendChild ($fifth_col);*/
		
		$top_container->appendChild ($top_row);
		$top_footer->appendChild ($top_container);
		$footer->appendChild ($top_footer);

		//PARTE INFERIORE DEL FOOTER
		$bottom_footer = $footer->ownerDocument->createElement ("div");
		$bottom_footer->setAttribute ("class", "footer_b");
		
		$bottom_container = $bottom_footer->ownerDocument->createElement ("div");
		$bottom_container->setAttribute ("class", "container");
		
		$bottom_row = $bottom_container->ownerDocument->createElement ("div");
		$bottom_row->setAttribute ("class", "row");

		//SECONDA SEZIONE
		$second_bot_col = $bottom_row->ownerDocument->createElement ("div");
		$second_bot_col->setAttribute ("class", "col-md-6 col-sm-6  col-sm-push-6 col-xs-12");
		
		$privacy_policy_div = $second_bot_col->ownerDocument->createElement ("div");
		$privacy_policy_div->setAttribute ("class", "footer_mid pull-right");
		
		$privacy_policy_p = $privacy_policy_div->ownerDocument->createElement ("p");
		
		$privacy_policy_a = $privacy_policy_p->ownerDocument->createElement ("a", "Privacy Policy");
		$privacy_policy_a->setAttribute ("href", "https://www.iubenda.com/privacy-policy/7897740");
		$privacy_policy_a->setAttribute ("class", "privacy-policy-link");
		$privacy_policy_a->setAttribute ("target", "_blank");
		
		$privacy_policy_p->appendChild ($privacy_policy_a);
		$privacy_policy_div->appendChild ($privacy_policy_p);
		$second_bot_col->appendChild ($privacy_policy_div);
		$bottom_row->appendChild ($second_bot_col);
		
		//PRIMA SEZIONE
		$first_bot_col = $bottom_row->ownerDocument->createElement ("div");
		$first_bot_col->setAttribute ("class", "col-md-6 col-sm-6 col-sm-pull-6 col-xs-12");
		
		$copyright_div = $first_bot_col->ownerDocument->createElement ("div");
		$copyright_div->setAttribute ("class", "footer_bottom");
		
		$copyright_p = $copyright_div->ownerDocument->createElement ("p", " &copy; Copyright reserved to ");
		$copyright_p->setAttribute ("class", "text-block");
		$copyright_p->appendChild ($copyright_p->ownerDocument->createElement("span", ragione_sociale));
		
		addBR($copyright_p);
		$designed_by = $copyright_p->ownerDocument->createElement ("span", "Designed by ");
		$designed_by->setAttribute ("class", "designed-by");		
		addSimpleA($designed_by, "Alessio Scheri", "mailto:alessio.scheri@gmail.com", "");
		
		$copyright_p->appendChild ($designed_by);
		$copyright_div->appendChild ($copyright_p);
		$first_bot_col->appendChild ($copyright_div);
		$bottom_row->appendChild ($first_bot_col);
		
		
		//BOTTONI SOCIAL (DA SOSTITUIRE AL LINK DEL PRIVACY POLICY)
		/*$second_bot_col = $bottom_row->ownerDocument->createElement ("div");
		$second_bot_col->setAttribute ("class", "col-md-6 col-sm-6 col-xs-12");
		
		$social_div = $second_bot_col->ownerDocument->createElement ("div");
		$social_div->setAttribute ("class", "footer_mid pull-right");
		
		$social_ul = $social_div->ownerDocument->createElement ("ul");
		$social_ul->setAttribute ("class", "social-contact list-inline");
		
		$facebook_li = $social_ul->ownerDocument->createElement ("li");
		
		$facebook_a = $facebook_li->ownerDocument->createElement ("a");
		$facebook_a->setAttribute ("href", "#");
		
		$facebook_i = $facebook_a->ownerDocument->createElement ("i");
		$facebook_i->setAttribute ("class", "fa fa-facebook");
		
		$facebook_a->appendChild ($facebook_i);
		$facebook_li->appendChild ($facebook_a);
		$social_ul->appendChild ($facebook_li);
		
		//AGGIUNGERE QUI ALTRE ICONE SOCIAL (funzionano di sicuro: fa-twitter, fa-rss, fa-google-plus fa-linkedin fa-pinterest)
		
		$social_div->appendChild ($social_ul);
		$second_bot_col->appendChild ($social_div);
		$bottom_row->appendChild ($second_bot_col);
		*/
		$bottom_container->appendChild ($bottom_row);
		$bottom_footer->appendChild ($bottom_container);
		$footer->appendChild ($bottom_footer);
		$body->appendChild ($footer);
	}
	
	/*
	 * Funzione che aggiunge al nodo body passato come parametro il footer
	 */
	function addBackToTopButton (&$body)
	{
		$main_div = $body->ownerDocument->createElement ("div");
		$main_div->setAttribute ("id", "back-top");
		
		$a = $main_div->ownerDocument->createElement ("a");
		$a->setAttribute ("class", "scroll");
		$a->setAttribute ("href", "#");
		$a->setAttribute ("data-scroll", "");
		
		$button = $a->ownerDocument->createElement ("button");
		$button->setAttribute ("class", "btn btn-primary");
		$button->setAttribute ("title", "Back to Top");
		
		$i = $button->ownerDocument->createElement ("i");
		$i->setAttribute ("class", "fa fa-angle-up");
		
		$button->appendChild ($i);
		$a->appendChild ($button);
		$main_div->appendChild ($a);
		$body->appendChild ($main_div);		
	}
	
	/*
	 * Funzione che appende un br al nodo padre passato per parametro
	 */
	function addBR (&$father)
	{
		$br = $father->ownerDocument->createElement ("br");
		$father->appendChild ($br);
	}
	
	/*
	 * Funzione che appende un nodo titolo per il contenuto della pagina al nodo 
	 * $father passato come parametro.
	 * $title 		pu� essere una stringa o un array di stringhe. Se � una stringa sar� inserita
	 * 				come titolo semplice. Se � un array di stringhe (composto da due stringhe),
	 * 				la prima stringa stringa verr� inserita come titolo semplice, mentre la seconda
	 * 				sar� inserito come titolo in grassetto dopo al titolo semplice.
	 * $subtitle	pu� essere una stringa o un nodo "h4". Se � una stringa viene inserita 
	 * 				semplicemente come sottotitolo, mentre se � un nodo, verr� aggiunto quel nodo
	 * 				come sottotitolo.
	 */
	function addContentTitle (&$father, $title, $subtitle)
	{
		$row = $father->ownerDocument->createElement ("div");
		$row->setAttribute ("class", "row");
		
		$col = $row->ownerDocument->createElement ("div");
		$col->setAttribute ("class", "col-md-12 col-sm-12 col-xs-12");
		
		$feature_header = $col->ownerDocument->createElement ("div");
		$feature_header->setAttribute ("class", "feature_header text-center");

		$h3_title = $feature_header->ownerDocument->createElement ("h3");
		$h3_title->setAttribute ("class", "feature_title");
		
		if (is_array($title))
		{
			for ($i = 0; $i < count ($title); $i++)
			{
				if ($i % 2)
				{
					$h3_title->appendChild ($h3_title->ownerDocument->createElement ("b", $title [$i]));
				}
				else
				{
					$h3_title->appendChild ($h3_title->ownerDocument->createElement ("span", $title [$i]));
				}
			}
		}
		else
		{
			$h3_title->appendChild ($h3_title->ownerDocument->createElement ("span", $title));
		}
		
		$feature_header->appendChild ($h3_title);
		
		if (is_string($subtitle))
		{
			$h4_subtitle = $feature_header->ownerDocument->createElement ("h4", $subtitle);
		}
		else
		{
			$h4_subtitle = $subtitle;
		}
		$h4_subtitle->setAttribute ("class", "feature_sub");
		
		$feature_header->appendChild ($h4_subtitle);
		addDivider($feature_header);
		$col->appendChild ($feature_header);
		$row->appendChild ($col);
		$father->appendChild ($row);
	}
	
	/*
	 * Funzione che appende al nodo $father un divisore.
	 */
	function addDivider (&$father)
	{
		$divider = $father->ownerDocument->createElement ("div");
		$divider->setAttribute ("class", "divider");
		$father->appendChild ($divider);
	}
	
	/*
	 * Funzione che appende al nodo $father un "componente" servizio.
	 * $icon_class	valore dell'attributo class che identifica l'icona (Font Awesome)
	 * $title		titolo del servizio
	 * $href		link interno
	 * $paragraph	piccolo paragrafo di descrizione del servizio
	 */
	function addService (&$father, $icon_class, $title, $href, $paragraph)
	{
		$col = $father->ownerDocument->createElement ("div");
		$col->setAttribute ("class", "col-md-3 col-xs-12 col-sm-6");
		
		$feature_content = $col->ownerDocument->createElement ("div");
		$feature_content->setAttribute ("class", "feature_content");
		$feature_content->setAttribute ("data-href", $href);
		
		$icon = $feature_content->ownerDocument->createElement ("i");
		$icon->setAttribute ("class", $icon_class);
		$feature_content->appendChild ($icon);
		
		$feature_content->appendChild ($feature_content->ownerDocument->createElement ("h5", $title));
		$col->appendChild ($feature_content);
		$father->appendChild ($col);
	}
?>