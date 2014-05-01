
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
					<th width="20%">No.</th><th width="40%">Title</th><th width="40%">Source</th>
				</tr>
				<?php 
					require_once 'tools/info.php';
					require_once 'tools/conn.php';
					
					if (!empty($_GET['pid']))
						$pid = $_GET['pid'];
					else
						$pid = 0;

					$flag=0;
					$result=mysql_query("SELECT * FROM problem where pid>1000+$pid*15 order by pid LIMIT 0, 15");
					while ($row = mysql_fetch_array($result)){
						
						echo 
							'<tr>'.
							'<td width="20%">'.($row[pid]).'</td>'.
							'<td  width="40%">'. '<a href="pid.php?pid='. ($row[pid]) .'">'. $row[pname]  .'</a> </td>'.
							'<td width="40%">'. $row[psource]. '</td>';
						$flag=$row[pid];
					}
				?>
				</table>

	<p id="subs">
<a href="plst.php">[Top]</a>&nbsp;&nbsp;&nbsp;
<a href="plst.php?pid=<?php
echo max(0, $pid-1);
?>">[Previous Page]</a>&nbsp;&nbsp;&nbsp;
<a href="plst.php?pid=<?php

					$result=mysql_query("SELECT max(pid) pid FROM problem");
					$row = mysql_fetch_array($result);


if ($flag!=$row[pid]) $pid++;
echo $pid;

?>">[Next Page]</a>
</p>

				</p>
		
			
		</div>				
		<?php require_once 'tools/footer.php' ?>
	</div>
</body>
</html>
