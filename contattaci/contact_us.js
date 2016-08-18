/**
 * Inizializzazione della dialog
 */
var dialog = new BootstrapDialog ({
                    title: 'Notifica di invio',
                    buttons: [{
                    	label: 'OK',
                        action: function(dialog) {
                        			dialog.close();
                        		}
                    }]
                });

/**
 * Script per passare le informazioni necessarie all'apposita pagina php tramite ajax.
 */
$('#contact_form').on('submit', function (e) {
	if (e.isDefaultPrevented()) {
	    // handle the invalid form...
	}
	else {
		var data = {
			    name: jQuery("#name").val(),
			    email: jQuery("#email").val(),
			    phone: jQuery("#phone").val(),
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
		        	dialog.realize ();
		        	dialog.getModalHeader ().css ('background-color', 'red');
		            dialog.setMessage('Mail non inviata correttamente.');
		        	dialog.open ();
		        }
		        else
		        {		        	
		        	dialog.realize ();
		        	dialog.getModalHeader ().css ('background-color', 'red');
		            dialog.setMessage('Mail inviata correttamente.');
		        	dialog.open ();
		        	
		        	jQuery("#name").val("").addClass("whiteBackgroundAfterAutocomplete");
		        	jQuery("#email").val("").addClass("whiteBackgroundAfterAutocomplete");
		        	jQuery("#phone").val("").addClass("whiteBackgroundAfterAutocomplete");
		        	jQuery("#message").val("").addClass("whiteBackgroundAfterAutocomplete");
		        }
		    },
		    error: function ()
		    {
		    	dialog.realize ();
		    	dialog.getModalHeader ().css ('background-color', 'red');
		        dialog.setMessage('Errore durante la connessione al server.');
		    	dialog.open ();
		    } 
		});
	}
	return false;
});