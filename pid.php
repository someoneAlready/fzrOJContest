<?php
	require_once 'info.php';
	require_once 'conn.php';
	$pid=$_GET['id'];
	$result=mysql_query("SELECT * FROM problem WHERE pid=$pid");
	$row = mysql_fetch_array($result);
	if (!$row){
		echo '<h3><font color="red">no such problem!!!</font></h3>';
		exit;	
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $pid . ' - ' . $row[title]?> | fzrOJ</title>
<link href="files/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="container">
		<?php require_once 'head.php' ?>
		<div id="PageBody">

				<p id="titles" style="text-align:center;">
				<?php echo $row[title] ?>
				</p>
				
				<p id="titles">Description</p>
				<p id="contentss"><?php echo $row[desp] ?></p>
				
				<p id="titles">Input</p>
				<p id="contentss"><?php echo $row[input] ?></p>
				
				<p id="titles">Output</p>
				<p id="contentss"><?php echo $row[output] ?></p>
				
				<p id="titles">Sample Input</p>
				<pre id="contentss"><?php echo $row[sinput] ?></pre>
				
				<p id="titles">Sample Output</p>
				<pre id="contentss"><?php echo $row[soutput] ?></pre>
				
				<p id="titles">Source</p>
				<p id="contentss"><?php echo $row[source] ?></p>
				
				<p id="subs">
					<a href="submit.php?id=<?php echo $pid ?>">[Submit]</a>&nbsp;&nbsp;&nbsp;
					<a href="">[Status]</a>&nbsp;&nbsp;&nbsp;
					<a href="">[Discuss]</a>
				</p>	
	
		</div>
		
		
		<?php require_once 'footer.php' ?>

	</div>
</body>
</html>			
