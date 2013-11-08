<?php	
	session_start();
	if (!empty($_POST['id']) && !empty($_POST['pwd'])){
		require_once 'conn.php';
		$id = $_POST['id'];
		$pwd = $_POST['pwd'];
		
		$result = mysql_query("SELECT * FROM user WHERE name='$id' and pwd='$pwd' limit 1");
		if ($row = mysql_fetch_array($result)){
			$_SESSION['name']=$row['name'];
			$_SESSION['uid']=$row['id'];
			$_SESSION['pwd']=$row['pwd'];
			$s= $_SESSION['HTTP_REFERER'];
			unset($_SESSION['HTTP_REFERER']);
			header("Location:$s");
			exit();
		}
		else{
			
		}
	
		exit();
	}
?>
<?php 
	if (!isset($_SESSION['HTTP_REFERER']))
		$_SESSION['HTTP_REFERER'] = $_SERVER['HTTP_REFERER']; 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>LogIn | fzrOJ</title>
<link href="files/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="container">
		<?php require_once 'head.php' ?>
		<div id="PageBody">
			<table width="100%" id="contentss">
			<form method="post" action="login.php">
				<tr><td align="left" colspan="2" >Login into fzrOJ</td></tr>
				<tr><td align="left" colspan="2" ><hr/></td></tr>
				<tr><td align="right" width="42%">User ID:</td><td> <input name="id" type="text"/></td><tr>
				<tr><td align="right" width="42%">Password:</td><td>  <input name="pwd" type="password"/></td><tr>
				<tr><td></td><td><input name="submit" type="submit" value="Submit"/></td><tr>
			</form>
		
			</table>
			</div>
		
		
		<?php require_once 'footer.php' ?>

	</div>
</body>
</html>			
