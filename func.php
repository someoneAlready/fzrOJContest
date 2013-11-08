<?php
	function get_status($k){
		switch ($k){
			case 0:return "<font color='green'>Pending...</font>";
			case 1:return "<font color='blue'>Compile Error</font>";
			case 2:return "<font color='purple'>Time Limit Exceeded</font>";
			case 3:return "<font color='green'>Accepted</font>";
			case 4:return "<font color='red'>Wrong Answer</font>";
			case 5:return "<font color='yellow'>Runtime Error</font>";
			case 6:return "<font color='green'>Presentation Error</font>";
		}
	}
	
	function get_name($k){
		require_once 'conn.php';
		$result=mysql_query("SELECT name FROM user WHERE id='$k'");
		$row=mysql_fetch_array($result);
		return $row['name'];
	}
	function get_lang($k){
		switch ($k){
			case 0: return "C";
			case 1: return "C++";
			case 2: return "Java";
		}
	}

?>
