<?php
	require_once 'tools/info.php';

	if ($start_time>time()){
		header("Location:index.php");
		exit();
	}
?>
