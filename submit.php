<?php require_once 'user.php';?>

<?php
	if (!empty($_POST['pid']) && ($_POST['lang']>=0) && !empty($_POST['code'])){
		$pid=$_POST['pid'];
		$lang=$_POST['lang'];
		$code=mysql_escape_string($_POST['code']);
		$uid=$_SESSION['uid'];
		require_once 'conn.php';
		
		$sql="INSERT INTO code (code, uid, status, pid, lang) VALUES ('$code', '$uid', '0', '$pid', '$lang')";
		mysql_query($sql, $con);
		
		echo 'submit successful...<br/><a href="status.php"> go to status page</a>';
		exit();
	}
?>

<?php 
	$id2=$_GET['id'];
	$id=$id2-999;
?>
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $id2?> | fzrOJ</title>
<link href="files/css.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="container">
		<?php require_once 'head.php' ?>
		<div id="PageBody">
				<table width="100%"><tr><td align="center">
					<form method=POST action="submit.php">
					<div>
						Problem ID:<input type=text name=pid value="<?php echo $id2 ?>" size=20><br/>
						Language:
						<select size=1 name=lang>
							<option value=0>GCC</option>
							<option value=1 selected>G++</option>
							<option value=2>Java</option>
						</select><br/>
						Source:<br/>
						<textarea rows="30" cols="79" name="code"></textarea><br/>
						
						<input type="submit" value="Submit"/>
						<input type="reset" value="Reset" />
					</div>
					</form>
				</td></tr>
				</table>

		</div>
					
		<?php require_once 'footer.php' ?>

	</div>
</body>
</html>		
