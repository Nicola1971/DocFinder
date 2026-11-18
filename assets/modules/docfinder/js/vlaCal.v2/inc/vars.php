<?php
	// Labels of the date picker, read from the DocFinder language files
	// (lang/english.php first, then the manager language passed by vlaCal-v2.js).
	if (!function_exists('vlaCalPost')) {
		function vlaCalPost($key, $default = '') {
			return isset($_POST[$key]) ? (string)$_POST[$key] : $default;
		}
		function vlaCalInt($key, $default) {
			return (isset($_POST[$key]) && is_numeric($_POST[$key])) ? (int)$_POST[$key] : $default;
		}
		function vlaCalAttr($value) {
			return htmlspecialchars(addslashes((string)$value), ENT_QUOTES, 'UTF-8');
		}
	}

	$_lang = array();
	$vlaCalLangDir = dirname(dirname(dirname(dirname(__FILE__)))) . '/lang/';
	if (file_exists($vlaCalLangDir . 'english.php')) include($vlaCalLangDir . 'english.php');
	$vlaCalLang = preg_replace('/[^a-zA-Z0-9_\-]/', '', vlaCalPost('lang'));
	if ($vlaCalLang != '' && $vlaCalLang != 'english' && file_exists($vlaCalLangDir . $vlaCalLang . '.php')) include($vlaCalLangDir . $vlaCalLang . '.php');

	$wdays_labels	= array("Mo", "Tu", "We", "Th", "Fr", "Sa", "Su");
	$month_labels	= array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
	$month_s_labels	= array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

	if (!empty($_lang['cal_weekdays']) && count(explode(',', $_lang['cal_weekdays'])) == 7) $wdays_labels = array_map('trim', explode(',', $_lang['cal_weekdays']));
	if (!empty($_lang['cal_months']) && count(explode(',', $_lang['cal_months'])) == 12) $month_labels = array_map('trim', explode(',', $_lang['cal_months']));
	if (!empty($_lang['cal_months_short']) && count(explode(',', $_lang['cal_months_short'])) == 12) $month_s_labels = array_map('trim', explode(',', $_lang['cal_months_short']));

	$wdays_labels	= array_map('htmlspecialchars', $wdays_labels);
	$month_s_labels	= array_map('htmlspecialchars', $month_s_labels);

	// years shown by the picker (decades in decade.php)
	$vlaCalFirstYear = 1979;
	$vlaCalLastYear  = 2049;
?>
