<?php	

	if (!empty($_POST['pid']) &&!empty($_POST['pname']) && !empty($_POST['ptime']) && !empty($_POST['pmem']) && !empty($_POST['ptext']) && !empty($_POST['psource']) )
	{
		
		require_once '../tools/info.php';
		require_once '../tools/conn.php';
			

		$sql="INSERT INTO problem (pid, pname ,ptime ,pmem ,ptext ,psource )
		VALUES
		('$_POST[pid]', '$_POST[pname]','$_POST[ptime]','$_POST[pmem]','$_POST[ptext]','$_POST[psource]' )";		


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
<link href="../files/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php require_once 'head.php' ?>
	<div id="container">
		<div id="PageBody">	
			<form action="add.php" method="post">
				<p id="contentss">Problem ID &nbsp;<input type="text" name="pid" value="<?php 
		require_once '../tools/info.php';
		require_once '../tools/conn.php';

		$result=mysql_query("SELECT MAX(pid) pid FROM problem");
		$row = mysql_fetch_array($result);
				echo $row[pid]+1;  ?>"/> Title<input type="text" name="pname" /></p>
				<p id="contentss">Time Limit <input type="text" name="ptime"/> Memory Limit <input type="text" name="pmem"/></p>

				<p id="titles">Text
			  <small>		//desp input output sinput soutput</small></p>
				<p id="contentss">
				<textarea name="ptext" cols=100% rows="10">
<desp></desp>
<input></input>
<output></output>
<sinput></sinput>
<soutput></soutput>
</textarea></p>

				<p id="titles">Source</p>
				<p id="contentss"><input type="text" name="psource" size="50"></textarea></p>



				<p id="titles" style="text-align:center;">
					<input type="submit" value="Submit"/>&nbsp;
					<input type="reset" value="Reset"/>
				</p>

				
			</form>			
			</div>
		
		
		<?php require_once '../tools/footer.php' ?>

	</div>
</body>
</html>		
