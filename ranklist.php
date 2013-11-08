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
				<td width="30%" align="center">User ID</td>
				<td width="40%" align="center">motto</td>
				<td width="30%" align="center">School</td>
			</tr>		
			<?php
				require_once 'conn.php';
				require_once 'func.php';
				$result = mysql_query("SELECT * FROM user ORDER BY id");
				while ($row = mysql_fetch_array($result)){
					echo 
							'<tr>'.
							'<td width="30%" align="center">'.$row[name].'</td>'.
							'<td width="40%" align="center">' . $row[motto]. '</td>'.
							'<td width="30%" align="center">'. $row[sch]. '</td></tr>';

				}
				
			?>
			</table>
			
		
		</div>
		<?php require_once 'footer.php' ?>

	</div>
</body>
</html>				
