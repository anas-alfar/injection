<?php
$module = 'index';
if (isset($_GET['module'])) {
	$module = $_GET['module'];
}
require $module . '.php';

//continue coding…