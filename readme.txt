---------------------------------------------------------------
:: Doc Finder
----------------------------------------------------------------
  
	Short Description: 
        Ajax powered search and replace for the manager.

  Version:
        1.8.2

  Created by:
	    Bogdan Günther (http://www.medianotions.de - bg@medianotions.de)

  Updated by: Nicola1971 https://github.com/Nicola1971/
----------------------------------------------------------------
:: Description
----------------------------------------------------------------

	At some point big EVO sites are difficult to handle with 
	the document tree in the manager. Or you just want to check 
	all the documents of your site containing a specific text?

	Doc Finder offers a fast Ajax powered search and replace for 
	the manager with neatly arranged results and one click edit.
	
	
----------------------------------------------------------------
:: Copyright & Licencing
----------------------------------------------------------------

  GNU General Public License (GPL - http://www.gnu.org/copyleft/gpl.html)



---------------------------------------------------------------
:: Changelog:
---------------------------------------------------------------

	18-Nov-26 (1.8.2) by Nicola1971
	- Help icons and tooltips as in the Evolution 1.4 manager
	  (data-tooltip, js/tooltips.js); fixed broken icons in the results
	- All interface texts in the language files, JavaScript included
	  (alerts, confirm, labels) and date picker (months, week days,
	  week starting on Monday); complete Italian translation
	- Replace: "AND", "OR", "NOT" inside words (e.g. NOTIZIE) no longer
	  block the replace
	- Date picker: PHP 8 fixes, years up to 2049, layout fixed inside
	  the Bootstrap based manager theme

	04-Nov-26 (1.8.1) by Nicola1971
	- Version number in the module header

	04-Nov-26 (1.8) by Nicola1971
	- PHP 8.x compatibility (tested on PHP 8.3, still PHP 7 compatible)
	- Fix: "older version of the PHx plugin" error on PHP 8 (old-style
	  PHP 4 constructor in the bundled PHx parser was never executed)
	- Bundled PHx parser renamed to DocFinderPHxParser (no collision
	  with other PHxParser classes)
	- Fix: TV matches in unpublished documents were dropped
	- Fix: replace ignored the "case sensitive" option
	- Fix: JS error after a replace (literal $counter in the script)
	- Removed hardcoded Europe/Berlin timezone
	- No more Undefined variable/array key/property warnings

	05-June-16 (1.7)
		-- Translateable

	05-March-14 (1.6.1)
		-- Evolution package format

	08-April-10 (1.6)
		-- Updated appearance for Evolution
		-- Updated and bugfixed calendar funtions. (Contribution by goldsky) 

	22-January-09 (1.5.2)
		-- Replaced PHP short tags with PHP long tags. (Contribution by goldsky)
		-- Removed OnBeforeDocFormSave and OnDocFormSave events in the replace function after controversial formu discussions wether this event calls belog there or not.

	01-December-08 (1.5.1)
		-- Added OnBeforeDocFormSave and OnDocFormSave events to the replace function.

	13-September-08 (1.5)
		** Resources added to Doc Finder. You can search and replace now in Templates, Template Variables, Chunks, Snippets, Plugins, and Modules.
		** JavaScript table sorting added using Mootools and "sortable table" by phatfusion (www.phatfusion.net)
		** Added the possibility to search within date ranges for ceated on and edited on date fields with AJAX date picker by R. Schoo (http://www.base86.com).
		-- Splitted search options in differnet tabs to gain a better overview
		-- Added an the option "Search content only" to optionally narrow down the search to the content of documents and resources only.
		-- Restructured and optimized plenty of code.

	23-Jun-08 (1.2.1)
		-- Fixed a HTML encoding problem that would display special characters wrong if the manager frameset would not use UTF-8 as charset.
		-- Fixed a PHP bug that displayed special characters wrong in the search history and the replace history
		-- Fixed a JS bug that prevented the search history and the replace history to work properly in some cases.
		-- Fixed a PHP bug related to case sensitive search.

	16-Jun-08 (1.2)
		** Replace functionality added.
		-- Added a history for the replace terms.
		-- Adapted results header info.
		-- Added a counter row to the results table.
		-- Fixed some CSS issues with Internet Explorer 7
		-- Replaced "info", "edit" and "open" texts in the results table with icons.
		-- Fixed a PHP bug that would cause a wrong display of published and hidemenu classes if the result was found in the documents TVs only.
		-- Fixed a PHP bug that caused SQL errors with mySQL encodings different then UTF-8.
		-- Fixed a PHP bug in the branch print function.

	19-Apr-08 (1.1)
		** Search within parents added.
		** Regular expressions are supported now.
		-- Search history shows empty status now.
		-- Fixed info link in the results list.
		-- Fixed a PHP bug: NOT and AND NOT in the search string are working now.
		-- Fixed a PHP bug that would cause a SQL error in case sensitive searches including the document id.
		-- Fixed a couple of HTML errors.
		-- Addes a Link to "Site > Home" for the branch with the id=0.

	05-Apr-08 (1.0)
		** Ajax powered results loading.
		** Remembers your search options for the whole session.
		** Edit, view or open a document with one click.
		** See the position of the document in the document tree.
		** See in which TV the search string has been found
		** Use AND, OR or NOT in your search.
		** Search in all TVs or just in specific ones.
