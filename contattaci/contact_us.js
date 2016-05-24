/**
 * Script per passare le informazioni necessarie all'apposita pagina php tramite ajax.
 */
jQuery('#send_button').click(function(){
	var data = {
		    name: jQuery("#name").val(),
		    email: jQuery("#mail").val(),
		    telephone: jQuery("#phone").val(),
		    message: jQuery("#message").val()
		};
		jQuery.ajax({
		    type: "POST",
		    url: "mail.php",
		    data: data,
		    success: function (xml)
		    {
		    	var error = jQuery(xml).find('error').text();
                if (error === "true")
                {
                	alert ("Mail non inviata correttamente.");
                }
                else
                {
                	alert ("Mail inviata correttamente.");
                	jQuery("#name").val("");
                	jQuery("#mail").val("");
                	jQuery("#phone").val("");
                	jQuery("#message").val("");
                }
		    },
		    error: function ()
		    {
		    	alert ("Errore durante la connessione al server.");
		    } 
		});
});