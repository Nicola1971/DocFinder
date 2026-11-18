<?php
	$vlaCalStyle = isset($_POST['style']) ? preg_replace('/[^a-zA-Z0-9_\- ]/', '', (string)$_POST['style']) : '';
?>
<div class="vlaCalendar<?php echo ($vlaCalStyle != '' ? ' ' . $vlaCalStyle : ''); ?>">
	<span class="indication">
		<div class="arrowRight"></div>
		<div class="arrowLeft"></div>
		<span class="label">&nbsp;</span>
	</span>
	<div class="container">
		<div class="loaderB"></div>
		<div class="loaderA">
<?php include "month.php"; ?>

		</div>
	</div>
</div>
