
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Problems | fzrOJ</title>
<link href="files/css.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="container">
		<?php require_once 'head.php' ?>
		<div id="PageBody">
	
				<table width="100%" >
				<tr>
					<td width="25%">ID</td><td width="28%">Title</td><td width="30%">Source</td><td width="30%">Date</td>
				</tr>
				<?php 
					require_once 'conn.php';
					$result=mysql_query("SELECT * FROM problem");
					while ($row = mysql_fetch_array($result)){
						
						echo 
							'<tr>'.
							'<td width="25%">'.($row[pid]).'</td>'.
							'<td  width="28%">'. '<a href="pid.php?id='. ($row[pid]) .'">'. $row[title]  .'</a> </td>'.
							'<td width="30%">'. $row[source]. '</td>'.
							'<td width="17%">'.	$row[date] .'</td></tr>';
					}
				?>
				</table>
		
			
		</div>				
		<?php require_once 'footer.php' ?>
	</div>
</body>
</html>
