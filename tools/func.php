<?php
	function get_status($k){
		switch ($k){
			case 0:return "<font color='slategray'>Waiting</font>";
			case 1:return "<font color='blue'>Compile Error</font>";
			case 2:return "<font color='scarlet'>Time Limit Exceeded</font>";
			case 3:return "<font color='green'>Accepted</font>";
			case 4:return "<font color='red'>Wrong Answer</font>";
			case 5:return "<font color='chocolate'>Runtime Error</font>";
			case 6:return "<font color='violet'>Presentation Error</font>";
			case 7:return "<font color='maroon'>Memory Limit Exceeded</font>";
		}
	}
	
	function get_name($k){
		$result=mysql_query("SELECT uname FROM user WHERE uid='$k'");
		$row=mysql_fetch_array($result);
		return $row['uname'];
	}
	function get_lang($k){
		switch ($k){
			case 0: return "C";
			case 1: return "C++";
			case 2: return "Java";
		}
	}

?>
