
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Problems | fzrOJ</title>
<link href="files/css.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="container">
		<?php require_once 'tools/head.php' ?>
		<div id="PageBody">
	
				<p>
				<table width="100%" id="table">
					<th width="25%">No.</th><th width="25%">Title</th><th width="25%">Source</th><th width="25%">Date</th>
				</tr>
				<?php 
					require_once 'tools/info.php';
					require_once 'tools/conn.php';
					$result=mysql_query("SELECT * FROM problem");
					while ($row = mysql_fetch_array($result)){
						
						echo 
							'<tr>'.
							'<td width="25%">'.($row[pid]).'</td>'.
							'<td  width="25%">'. '<a href="pid.php?pid='. ($row[pid]) .'">'. $row[pname]  .'</a> </td>'.
							'<td width="25%">'. $row[psource]. '</td>'.
							'<td width="25%">'.	$row[pdate] .'</td></tr>';
					}
				?>
				</table>
				</p>
		
			
		</div>				
		<?php require_once 'tools/footer.php' ?>
	</div>
</body>
</html>
