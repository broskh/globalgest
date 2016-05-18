/**
 * Script per correggere le dimensioni dei riquadri servizi
 */
var h5_manutenzione = jQuery("h5:contains('Manutenzione programmata e Assistenza post-impianti')").outerHeight ();
//alert (h5_manutenzione);
jQuery (".feature_content > h5").outerHeight (h5_manutenzione);
