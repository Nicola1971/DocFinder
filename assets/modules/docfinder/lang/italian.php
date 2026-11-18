<?php
// ---------------------------------------------------------------
// :: Doc Finder
// ----------------------------------------------------------------
//
// 	Short Description:
//         Ajax powered search and replace for the manager.
//
//   Version:
//         1.8
//
//   Created by:
// 	    Bogdan Günther (http://www.medianotions.de - bg@medianotions.de)
//
//
// ----------------------------------------------------------------
// :: Copyright & Licencing
// ----------------------------------------------------------------
//
//   GNU General Public License (GPL - http://www.gnu.org/copyleft/gpl.html)
//

$_lang['modulename'] = 'Doc Finder';
$_lang['reload'] = 'Ricarica';
$_lang['close'] = 'Chiudi';
$_lang['close_button'] = 'Chiudi [+lang.modulename+]';
$_lang['help_search'] = 'Nella ricerca si possono usare AND, OR e NOT; aggiungere degli spazi per cercare parole intere. In alternativa, attivando l\'opzione nelle Opzioni generali, si possono usare le espressioni regolari. Con ALL si ottengono tutti i risultati, utile ad esempio per cercare solo in un intervallo di date.';
$_lang['help_replace'] = 'Sostituisce tutte le occorrenze del testo cercato con il testo di sostituzione. Non si può usare insieme agli operatori logici o alle espressioni regolari. L\'ID del documento non viene mai sostituito.';
$_lang['help_sortable_tables'] = 'Disattiva le tabelle ordinabili per visualizzare più velocemente i risultati, soprattutto quando sono molti.';
$_lang['help_parent_ids'] = 'Inserisci gli ID dei documenti genitore in cui cercare. Per indicarne più di uno, separa gli ID con una virgola.';
$_lang['help_creation_date_range'] = 'Imposta un intervallo per la data di creazione. Indica solo la data iniziale per cercare da quella data in poi, oppure solo la data finale per cercare fino a quella data.';
$_lang['help_edited_date_range'] = 'Imposta un intervallo per la data dell\'ultima modifica. Indica solo la data iniziale per cercare da quella data in poi, oppure solo la data finale per cercare fino a quella data.';
$_lang['warning_charset'] = '<strong>Attenzione:</strong> per funzionare correttamente Doc Finder richiede che il charset del sito sia UTF-8. La ricerca e la sostituzione dei caratteri speciali potrebbero non funzionare correttamente.';
$_lang['search'] = 'Cerca';
$_lang['replace'] = 'Sostituisci';
$_lang['search_for'] = 'Cerca';
$_lang['replace_with'] = 'Sostituisci con';
$_lang['all_none'] = '[Tutti / Nessuno]';
$_lang['search_replace'] = 'Cerca &amp; sostituisci';
$_lang['general_options'] = 'Opzioni generali';
$_lang['search_places'] = 'Dove cercare';
$_lang['search_options'] = 'Opzioni di ricerca';
$_lang['case_sensitive'] = 'Distingui maiuscole/minuscole';
$_lang['regular_expression'] = 'Espressione regolare';
$_lang['sortable_tables'] = 'Tabelle ordinabili';
$_lang['id'] = 'ID';
$_lang['pagetitle'] = 'Titolo della pagina';
$_lang['longtitle'] = 'Titolo esteso';
$_lang['name'] = 'Nome';
$_lang['description'] = 'Descrizione';
$_lang['alias'] = 'Alias';
$_lang['introtext'] = 'Riassunto (introtext)';
$_lang['menutitle'] = 'Titolo nel menu';
$_lang['content'] = 'Contenuto';
$_lang['tvs'] = 'Variabili di template';
$_lang['other'] = 'Tutti gli altri campi';
$_lang['created_on'] = 'Creato il';
$_lang['edited_on'] = 'Modificato il';
$_lang['found_in'] = 'Trovato in';
$_lang['functions'] = 'Funzioni';
$_lang['edit'] = 'Modifica';
$_lang['info'] = 'Info';
$_lang['preview'] = 'Anteprima';
$_lang['created_between'] = 'Creato tra';
$_lang['edited_between'] = 'Modificato tra';
$_lang['clear_date'] = 'Azzera la data';
$_lang['searching'] = 'Ricerca in corso...';
$_lang['search_empty'] = 'Il testo da cercare è vuoto';
$_lang['no_results'] = 'Nessun risultato trovato';
$_lang['documents'] = 'Documenti';
$_lang['templates'] = 'Template';
$_lang['chunks'] = 'Chunk';
$_lang['snippets'] = 'Snippet';
$_lang['plugins'] = 'Plugin';
$_lang['modules'] = 'Moduli';
$_lang['type'] = 'Tipo';
$_lang['combined_view'] = 'Vista combinata';
$_lang['search_history_filled'] = 'Cronologia delle ricerche...';
$_lang['search_history_empty'] = 'Cronologia delle ricerche (vuota)';
$_lang['replace_history_filled'] = 'Cronologia delle sostituzioni...';
$_lang['replace_history_empty'] = 'Cronologia delle sostituzioni (vuota)';
$_lang['document_options'] = 'Opzioni dei documenti';
$_lang['document_parents'] = 'Documenti genitore';
$_lang['search_in'] = 'Cerca in';
$_lang['resource_options'] = 'Opzioni degli elementi';
$_lang['date_options'] = 'Opzioni delle date';
$_lang['all'] = 'Tutti';
$_lang['number_of_entries'] = 'Risultati da mostrare';
$_lang['form_no_results'] = '<span id="results_info">Nessun</span> risultato';
$_lang['form_search_for'] = '<span id="results_string">per &ldquo;<strong id="search_string"></strong>&rdquo;</span>';
$_lang['form_replace_with'] = '<span id="replace_info">sostituito con &ldquo;<strong id="replace_string"></strong>&rdquo;</span>';
$_lang['form_time'] = '<span id="time_info">(<span id="time">&ndash;</span> secondi)</span>';
$_lang['cancel_search'] = 'Annulla la ricerca';

// testi usati dal JavaScript (js/functions.js) e dai risultati AJAX
$_lang['results_none'] = 'Nessun';
$_lang['search_canceled'] = 'Ricerca annullata.';
$_lang['label_string_search'] = 'Cerca';
$_lang['label_regexp_search'] = 'Cerca (regex)';
$_lang['replace_no_regexp'] = 'La sostituzione non si può usare insieme alle espressioni regolari.';
$_lang['replace_no_operators'] = 'La sostituzione non si può usare insieme agli operatori logici (AND, OR, NOT).';
$_lang['replace_no_all'] = 'La sostituzione non si può usare insieme all\'operatore ALL.';
$_lang['replace_confirm'] = 'Sostituire tutte le occorrenze di “{search}” con “{replace}”?';
$_lang['search_button_hint'] = 'Clicca o premi INVIO per avviare la ricerca.';

// calendario (js/vlaCal.v2/inc/vars.php): elenchi separati da virgola
$_lang['cal_months'] = 'Gennaio,Febbraio,Marzo,Aprile,Maggio,Giugno,Luglio,Agosto,Settembre,Ottobre,Novembre,Dicembre';
$_lang['cal_months_short'] = 'Gen,Feb,Mar,Apr,Mag,Giu,Lug,Ago,Set,Ott,Nov,Dic';
$_lang['cal_weekdays'] = 'Lu,Ma,Me,Gi,Ve,Sa,Do'; // da lunedì a domenica
$_lang['cal_start_monday'] = '1'; // 1 = la settimana inizia di lunedì
