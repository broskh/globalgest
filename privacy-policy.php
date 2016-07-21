<?php
	include_once 'lib/functions.php';	//Includo la mia libreria PHP
	$dom = open_html("Privacy Policy");	//genero il dom
 	$body = $dom->getElementsByTagName("body")->item(0);	//salvo il riferimento al nodo body
 	
 	addHorizontalNavbar($body);	//aggiungo la barra di navigazione
 	addHeaderImage($body);	//aggiungo l'immagine in header
//  	<------------------------------------------------------>
//		CONTENUTO DELLA PAGINA VERO E PROPRIO
 	
//		<--variabili contenenti il testo da inserire nei paragrafi
 	$par1_text = <<<HTML
 	Oggetto: Informativa per il sito web (ART. 13 D.Lgs. 196/2003)
HTML;
 	$par2_text = <<<HTML
 	Nella presente pagina si descrivono le modalit&agrave; di gestione del sito in riferimento 
 			al trattamento dei dati personali degli utenti che lo consultano.
HTML;
 	$par3_text = <<<HTML
 	Si tratta dell'informativa resa ai sensi dell'art. 13 del d.lgs. n. 196/2003 - Codice in 
 			materia di protezione dei dati personali a coloro che interagiscono con i servizi 
 			web dell'azienda, accessibili per via telematica a partire dall'indirizzo: 
 			"http://www.globalgest.mo.it" corrispondente alla pagina iniziale del sito ufficiale.
HTML;
 	$par4_text = <<<HTML
 	L'informativa &egrave; resa solo per il presente sito e non anche per altri siti web eventualmente 
 			consultati dall'utente tramite link.
HTML;
 	$par5_text = <<<HTML
 	L'informativa si ispira anche alla Raccomandazione n. 2/2001 che le autorit&agrave; europee per la protezione 
 			dei dati personali, riunite nel Gruppo istituito dall'art. 29 della direttiva n. 95/46/CE, 
 			hanno adottato il 17 maggio 2001 per individuare alcuni requisiti minimi per la raccolta di 
 			dati personali on-line, e, in particolare, le modalit&agrave;, i tempi e la natura delle informazioni 
 			che i titolari del trattamento devono fornire agli utenti quando questi si collegano a pagine 
 			web, indipendentemente dagli scopi del collegamento.
HTML;
 	$sub1_text = <<<HTML
 	IL "TITOLARE" DEL TRATTAMENTO
HTML;
 	$par6_text = <<<HTML
 	A seguito della consultazione di questo sito possono essere trattati dati relativi a persone identificate o 
 			identificabili.
HTML;
 	$par7_text = <<<HTML
 	Il "titolare" del loro trattamento %egrave; Global Gest s.r.l. che ha sede in Via Della Meccanica, nr. 16/18 San 
 			Cesario Sul Panaro (Modena).
HTML;
 	$sub2_text = <<<HTML
 	LUOGO DI TRATTAMENTO DEI DATI
HTML;
 	$par8_text = <<<HTML
 	I trattamenti connessi ai servizi web di questo sito hanno luogo presso la predetta sede e sono curati solo da 
 			personale tecnico dell'Ufficio incaricato del trattamento, oppure da eventuali incaricati di occasionali 
 			operazioni di manutenzione.
HTML;
 	$par9_text = <<<HTML
 	Nessun dato derivante dal servizio web viene comunicato o diffuso.
HTML;
 	$par10_text = <<<HTML
 	I dati personali forniti dagli utenti che inoltrano richieste di invio di materiale informativo (bollettini, 
 			Cd-rom, cataloghi, listini, risposte a quesiti, atti vari, ecc.) sono utilizzati al solo fine di eseguire 
 			il servizio o la prestazione richiesta. 
HTML;
 	$sub3_text = <<<HTML
 	TIPI DI DATI TRATTATI
HTML;
 	$sub4_text = <<<HTML
 	Dati di navigazione
HTML;
 	$par11_text = <<<HTML
 	I sistemi informatici e le procedure software preposte al funzionamento di questo sito web acquisiscono, nel corso 
 			del loro normale esercizio, alcuni dati personali la cui trasmissione &egrave; implicita nell'uso dei protocolli 
 			di comunicazione di Internet.
HTML;
 	$par12_text = <<<HTML
 	Si tratta di informazioni che non sono raccolte per essere associate a interessati identificati, ma che per loro 
 			stessa natura potrebbero, attraverso elaborazioni ed associazioni con dati detenuti da terzi, permettere 
 			di identificare gli utenti.
HTML;
 	$par13_text = <<<HTML
 	In questa categoria di dati rientrano gli indirizzi IP o i nomi a dominio dei computer utilizzati dagli utenti 
 			che si connettono al sito, gli indirizzi in notazione URI (Uniform Resource Identifier) delle risorse 
 			richieste, l'orario della richiesta, il metodo utilizzato nel sottoporre la richiesta al server, la 
 			dimensione del file ottenuto in risposta, il codice numerico indicante lo stato della risposta data 
 			dal server (buon fine, errore, ecc.) ed altri parametri relativi al sistema operativo e all'ambiente 
 			informatico dell'utente.
HTML;
 	$par14_text = <<<HTML
 	Questi dati vengono utilizzati al solo fine di ricavare informazioni statistiche anonime sull'uso del sito e 
 			per controllarne il corretto funzionamento e vengono cancellati dopo anni 1. I dati potrebbero essere 
 			utilizzati per l'accertamento di responsabilità in caso di ipotetici reati informatici ai danni del sito. 
HTML;
 	$sub5_text = <<<HTML
 	Dati forniti volontariamente dall'utente
HTML;
 	$par15_text = <<<HTML
 	L'invio facoltativo, esplicito e volontario di posta elettronica agli indirizzi indicati su questo sito comporta 
 			la successiva acquisizione dell'indirizzo del mittente, necessario per rispondere alle richieste, nonché 
 			degli eventuali altri dati personali inseriti nella missiva.
HTML;
 	$par16_text = <<<HTML
 	Specifiche informative di sintesi verranno progressivamente riportate o visualizzate nelle pagine del sito 
 			predisposte per particolari servizi a richiesta. 
HTML;
 	$sub6_text = <<<HTML
 	COOKIES
HTML;
 	$par17_text = <<<HTML
 	Nessun dato personale degli utenti viene in proposito acquisito dal sito.
HTML;
 	$par18_text = <<<HTML
 	Non viene fatto uso di cookies per la trasmissione di informazioni di carattere personale, 
 			n&eacute; vengono utilizzati c.d. cookies persistenti di alcun tipo, ovvero sistemi per il tracciamento 
 			degli utenti.
HTML;
 	$par19_text = <<<HTML
 	L'uso di c.d. cookies di sessione (che non vengono memorizzati in modo persistente sul computer dell'utente e 
 			svaniscono con la chiusura del browser) &egrave; strettamente limitato alla trasmissione di identificativi di 
 			sessione (costituiti da numeri casuali generati dal server) necessari per consentire l'esplorazione 
 			sicura ed efficiente del sito.
HTML;
 	$par20_text = <<<HTML
 	I c.d. cookies di sessione utilizzati in questo sito evitano il ricorso ad altre tecniche informatiche potenzialmente 
 			pregiudizievoli per la riservatezza della navigazione degli utenti e non consentono l'acquisizione di dati 
 			personali identificativi dell'utente. 
HTML;
 	$sub7_text = <<<HTML
 	FACOLTATIVIT&Aacute; DEL CONFERIMENTO DEI DATI
HTML;
 	$par21_text = <<<HTML
 	A parte quanto specificato per i dati di navigazione, l'utente &egrave; libero o meno di fornire i dati personali.
HTML;
 	$par22_text = <<<HTML
 	Il loro mancato conferimento pu&ograve; ovviamente comportare l'impossibilità di ottenere quanto richiesto. 
HTML;
 	$sub8_text = <<<HTML
 	MODALIT&Aacute; DEL TRATTAMENTO
HTML;
 	$par23_text = <<<HTML
 	I dati personali sono trattati sia con strumenti elettronici ed automatizzati, sia su supporto cartaceo, per il 
 			tempo strettamente necessario a conseguire gli scopi per cui sono stati raccolti.
HTML;
 	$par24_text = <<<HTML
 	Specifiche misure di sicurezza sono osservate per prevenire la perdita dei dati, usi illeciti o non corretti ed accessi 
 			non autorizzati. 
HTML;
 	$sub9_text = <<<HTML
 	DIRITTI DEGLI INTERESSATI
HTML;
 	$par25_text = <<<HTML
 	I soggetti cui si riferiscono i dati personali hanno il diritto in qualunque momento e gratuitamente di ottenere la 
 			conferma dell'esistenza o meno dei medesimi dati e di conoscerne il contenuto e l'origine, verificarne 
 			l'esattezza o chiederne l'integrazione o l'aggiornamento, oppure la rettificazione ed il blocco (si veda 
 			per completezza art. 7 del d.lgs. n. 196/2003 a cui si rimanda).
HTML;
 	$par26_text = <<<HTML
 	Ai sensi del medesimo art. 7 si ha il diritto di chiedere la cancellazione, la trasformazione in forma anonima o 
 			il blocco totale dei dati trattati in violazione di legge, nonch&eacute; di opporsi in ogni caso, per motivi 
 			legittimi, al loro trattamento.
HTML;
 	$par27_text = <<<HTML
 	Le richieste degli interessati vanno rivolte al Titolare del trattamento Global Gest s.r.l..
HTML;
 	$par28_text = <<<HTML
 	La presente costituisce la "Privacy Policy" di questo sito che sarà soggetta ad aggiornamento periodico.
HTML;
// 		fine variabili di testo-->
 	
//  	<--inizio della creazione della struttura del contenuto specifico della pagina
 	$privacy_policy = $body->ownerDocument->createElement ("section");
 	$privacy_policy->setAttribute ("id", "privacy-policy");
 	$privacy_policy->setAttribute ("class", "section_content");
 	
 	$container = $privacy_policy->ownerDocument->createElement ("div");
 	$container->setAttribute ("class", "container");
 	
// 		creo nodo per sottotitolo
 	$subtitle = $container->ownerDocument->createElement ("h4");
 	$subtitle->appendChild ($subtitle->ownerDocument->createElement ("p", $par1_text));
 	
//  	aggiungo titolo
 	addContentTitle($container, ["PRIVACY ", "POLICY"], $subtitle);
 	
//  	aggiungo i vari index
//  	riga1
 	$row1 = $container->ownerDocument->createElement ("div");
	$row1->setAttribute ("class", "row");
	
	$main_feature = $row1->ownerDocument->createElement ("div");
	$main_feature->setAttribute ("class", "main_feature text-center");

	$col1 = $main_feature->ownerDocument->createElement ("div");
	$col1->setAttribute ("class", "col-md-12 col-xs-12 col-sm-12");

	addPrivacyPolicyParagraph($col1, "", [$par2_text, $par3_text, $par4_text, $par5_text]);
	addPrivacyPolicyParagraph($col1, $sub1_text, [$par6_text, $par7_text]);
	addPrivacyPolicyParagraph($col1, $sub2_text, [$par8_text, $par9_text, $par10_text]);
	$p_types = $col1->ownerDocument->createElement ("div");
	$p_types-> appendChild ($p_types->ownerDocument->createElement ("strong", $sub3_text));
	addPrivacyPolicyParagraph($p_types, $sub4_text, [$par11_text, $par12_text, $par13_text, $par14_text]);
	addPrivacyPolicyParagraph($p_types, $sub5_text, [$par15_text, $par16_text]);
	$col1->appendChild ($p_types);
	addPrivacyPolicyParagraph($col1, $sub6_text, [$par17_text, $par18_text, $par19_text, $par20_text]);
	addPrivacyPolicyParagraph($col1, $sub7_text, [$par21_text, $par22_text]);
	addPrivacyPolicyParagraph($col1, $sub8_text, [$par23_text, $par24_text]);
	addPrivacyPolicyParagraph($col1, $sub9_text, [$par25_text, $par26_text]);
	addBR($col1);
	addPrivacyPolicyParagraph($col1, "", $par27_text);
	addBR($col1);
	addPrivacyPolicyParagraph($col1, "", $par28_text);

	$main_feature->appendChild ($col1);
 	$row1->appendChild ($main_feature);
 	$container->appendChild ($row1);
 	$privacy_policy->appendChild ($container);
 	$body->appendChild($privacy_policy);
//  	fine della struttura-->
	
//  	<------------------------------------------------------>
 	addFooter($body);	//aggiungo il footer
 	addBackToTopButton($body);	//aggiungo il bottone che riporta all'inizio della pagina
	importJS($body);	//importo le librerie Javascript
	echo $dom->saveHTML();	//stampo tutto l'html
?>