<?php	
	if (!empty($_POST['pid']) &&!empty($_POST['title']) && !empty($_POST['desp']) && !empty($_POST['input']) && !empty($_POST['output']) && !empty($_POST['sinput']) && !empty($_POST['soutput']) && !empty($_POST['tlimit']) && !empty($_POST['mlimit']) )
	{
		require_once 'conn.php';
		
		
			

		$sql="INSERT INTO problem (pid, title ,desp ,input ,output ,sinput ,soutput, source,tlimit, mlimit )
		VALUES
		('$_POST[pid]', '$_POST[title]','$_POST[desp]','$_POST[input]','$_POST[output]','$_POST[sinput]','$_POST[soutput]','$_POST[source]', '$_POST[tlimit]', '$_POST[mlimit]' )";		
		if (!mysql_query($sql,$con))		
			die('ft' . mysql_error());
		echo 'ft OK!!' ;		
		exit();
	}

?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Add Problem | fzrOJ</title>
<link href="files/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="container">
		<?php require_once 'head.php' ?>
		<div id="PageBody">	
			<form action="add.php" method="post">
<!---				<p id="contentss">ID &nbsp;<input type="text" name="id" /></p> -->
				<p id="contentss">Problem ID &nbsp;<input type="text" name="pid" /></p>
				<p id="contentss">Time Limit <input type="text" name="tlimit"/> Memory Limit <input type="text" name="mlimit"/></p>

				<p id="titles" style="text-align:center;">
				Title
				<input type="text" name="title" />
				</p>
				
				<p id="titles">Description</p>
				<p id="contentss"><textarea name="desp" cols=100% rows="8"></textarea></p>
				
				<p id="titles">Input</p>
				<p id="contentss"><textarea name="input" cols="100%" rows="3"></textarea></p>
				
				<p id="titles">Output</p>
				<p id="contentss"><textarea name="output" cols="100%" rows="3"></textarea></p>
				
				<p id="titles">Sample Input</p>
				<pre id="contentss"><textarea name="sinput" cols="100%" rows="3"></textarea></pre>
				
				<p id="titles">Sample Output</p>
				<pre id="contentss"><textarea name="soutput" cols="100%" rows="3"></textarea></pre>
				
				<p id="titles">Source</p>
				<p id="contentss"><textarea name="source" cols="100%" rows="1"></textarea></p>

				<p id="titles" style="text-align:center;">
					<input type="submit" value="Submit"/>&nbsp;
					<input type="reset" value="Reset"/>
				</p>

				
			</form>			
			</div>
		
		
		<?php require_once 'footer.php' ?>

	</div>
</body>
</html>		
