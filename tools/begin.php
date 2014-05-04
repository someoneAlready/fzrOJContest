<?php session_start(); ?>
<?php
	require_once 'tools/info.php';
	if ($start_time>time() && ($_SESSION['uadmin']!=1)){
		header("Location:index.php");
		exit();
	}
?>
