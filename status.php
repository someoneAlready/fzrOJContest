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
			<p>
			<table width="100%" id="table">
			<tr>
				<th width="15%">No.</th>
				<th width="17%">User</th>
				<th width="17">Problem ID</th>
				<th width="15%">Result</th>
				<th width="15%">Language</th>
				<th width="15%">Date</th>
			</tr>		
			<?php
				require_once 'tools/info.php';
				require_once 'tools/conn.php';
				require_once 'tools/func.php';
				if (!empty($_GET['sid']))
					$sid = $_GET['sid'];
				else
					$sid = 0;
				

				

				$result = mysql_query("SELECT * FROM code WHERE cid<=((select max(cid) from code)-15*$sid)  ORDER BY cid DESC LIMIT 0, 15");
				$flag=0;
				while ($row = mysql_fetch_array($result)){
					echo 
							'<tr>'.
							'<td width="15%">'.$row[cid].'</td>'.
							'<td width="17%">'. get_name($row[uid]). '</td>'.
							"<td width='17'><a href='pid.php?pid=$row[pid]'>" . $row[pid]. '</a></td>'.
							'<td width="15%">'. get_status($row[cstatus]). '</td>'.
							"<td width='15%'>";
							$str = get_lang($row[clang]);
							if (!empty($_SESSION['uname']))
								if ($_SESSION['uadmin']==1 || $_SESSION['uid']==$row[uid])
									$str = "<a href='source.php?sid=$row[cid]'>".$str."</a>";
									
							echo $str.'</a></td>'.
								'<td width="15%">'.	$row[cdate] .'</td></tr>';
					$flag=$row[cid];
				}
				

			?>
			</table>
			<p id="subs">
				<a href="status.php">[Top]</a>&nbsp;&nbsp;&nbsp;
				<a href="status.php?sid=<?php 
					echo max(0, $sid-1);
					?>">[Previous Page]</a>&nbsp;&nbsp;&nbsp;
				<a href="status.php?sid=<?php
					if ($flag!=1) $sid++;
					 echo $sid; 
	
				?>">[Next Page]</a>
			</p>
			</p>
			
		
		</div>
		<?php require_once 'tools/footer.php' ?>

	</div>
</body>
</html>				
