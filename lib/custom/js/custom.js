/*
 * Script per mettere all'altezza giusta l'immagine in header
 */
var navbar_height = jQuery('#section_header').outerHeight ();
jQuery('#header_image').css({
    "position": "relative",
    "margin-top": navbar_height
  });

/*
 * Script per far si che cliccando sull'icona, sul titolo, o sul bottone di un servizio,
 * venga aperta la rispettiva pagina.
 * La pagina da aprire viene letta dall'attributo data-href
 */
var service = jQuery('#service').find('div.feature_content');
jQuery(service).children('i').click(function () {
	open_service(jQuery(this));
});
jQuery(service).children('h5').click(function () {
	open_service(jQuery(this));
});
jQuery(service).children('button').click(function () {
	open_service(jQuery(this));
});

/*
 * Funzione per aprire la pagina passata come parametro
 */
function open_page (href)
{
	window.open(href, "_self");
}

/*
 * Funzione per aprire il servizio corrispondente
 */
function open_service (node)
{
	open_page (jQuery(node).parent().data ("href"));
}