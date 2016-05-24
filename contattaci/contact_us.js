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
                	BootstrapDialog.show({
                        title: 'ATTENZIONE',
                        message: 'Mail non inviata correttamente.',
                        buttons: [{
                        	label: 'OK',
                            action: function(dialog) {
                            			dialog.close();
                            		}
                        }]
                    });
                }
                else
                {
                	BootstrapDialog.show({
                        title: 'ATTENZIONE',
                        message: 'Mail inviata correttamente.',
                        buttons: [{
                            label: 'OK',
                            action: function(dialog) {
                            			dialog.close();
                            		}
                        }]
                    });
                	jQuery("#name").val("");
                	jQuery("#mail").val("");
                	jQuery("#phone").val("");
                	jQuery("#message").val("");
                }
		    },
		    error: function ()
		    {
		    	BootstrapDialog.show({
                    title: 'ATTENZIONE',
                    message: 'Errore durante la connessione al server.',
                    buttons: [{
                    	label: 'OK',
                        action: function(dialog) {
                        			dialog.close();
                        		}
                    }]
                });
		    } 
		});
});