<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> Status | fzrOJ</title>
<link href="files/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="container">
		<?php require_once 'head.php' ?>
		<div id="PageBody">
		
			<table width="100%" >
			<tr>
				<td width="15%">Run ID</td>
				<td width="17%">User</td>
				<td width="17">Problem ID</td>
				<td width="15%">Result</td>
				<td width="15%">Language</td>
				<td width="15%">Date</td>
			</tr>		
			<?php
				require_once 'conn.php';
				require_once 'func.php';
				$result = mysql_query("SELECT * FROM code ORDER BY id DESC LIMIT 0, 100");
				while ($row = mysql_fetch_array($result)){
					echo 
							'<tr>'.
							'<td width="15%">'.$row[id].'</td>'.
							'<td width="17%">'. get_name($row[uid]). '</td>'.
							'<td width="17">' . $row[pid]. '</td>'.
							'<td width="15%">'. get_status($row[status]). '</td>'.
							'<td width="15%">'. get_lang($row[lang]). '</td>'.
							'<td width="15%">'.	$row[date] .'</td></tr>';
				}
				
			?>
			</table>
			
		
		</div>
		<?php require_once 'footer.php' ?>

	</div>
</body>
</html>				
