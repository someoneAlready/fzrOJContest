<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> Status | fzrOJ</title>
<link href="files/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="container">
		<?php require_once 'tools/head.php' ?>
		<div id="PageBody">
		
			<table width="100%" >
			<tr>
				<td width="10%" align="center">No.</td>
				<td width="20%" align="center">User ID</td>
				<td width="60%" align="center">Motto</td>
				<td width="10%" align="center">Solved</td>
			</tr>		
			<?php
				require_once 'tools/info.php';
				require_once 'tools/conn.php';
				require_once 'tools/func.php';
				$sql = "SELECT uname, count(DISTINCT pid) problem, umotto
				FROM code, user 
				WHERE code.uid=user.uid 
				AND cstatus=0
				GROUP BY user.uid
				ORDER BY COUNT(DISTINCT pid) DESC
				";

				$result = mysql_query($sql);
				$no = 0;

				
				while ($row = mysql_fetch_array($result)){
					$no ++;
					echo 
							'<tr>'.
							'<td width="10%" align="center">'. $no . '</td>'.
							'<td width="20%" align="center">'.$row[uname].'</td>'.
							'<td width="60%" align="center">' . $row[umotto]. '</td>'.
							'<td width="20%" align="center">'. $row[problem]. '</td></tr>';

				}
				
			?>
			</table>
			
		
		</div>
		<?php require_once 'tools/footer.php' ?>

	</div>
</body>
</html>				
