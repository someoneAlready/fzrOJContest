<?php
	if (!empty($_POST['id'])){
		require_once 'tools/info.php';
		require_once 'tools/conn.php';
		$id=$_POST['id'];
		$pwd=$_POST['pwd'];
		$email=$_POST['email'];
		$motto=$_POST['motto'];
		$result = mysql_query("SELECT * FROM user WHERE uname='$id'");
		if (mysql_fetch_array($result)){
			echo 'sorry~ the user name has been register, please use other user name to register.';
		}
		else{
			$sql="INSERT INTO user (uname, upwd, uemail, umotto) VALUES ('$id', '$pwd', '$email', '$motto')";
			mysql_query($sql, $con);
			echo ' <p> :-) You successful register the user...</p><p><a href="login.php">click here to jump to login page</a></p>';
		}
		exit();
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Register | fzrOJ</title>
<link href="files/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="container">
		<?php require_once 'tools/head.php' ?>
		<div id="PageBody">
		<script type="text/javascript">
			function CheckForm(objForm){				 
				if (objForm.id.value=="" || objForm.pwd.value=="" || objForm.rpwd.value==""){
					alert('you have to complete some message...');
					return false;
				}
				if (objForm.pwd.value!=objForm.rpwd.value){
					alert('two password does not match...');
					return false;
				}
				return true;
			}
		</script>
			<table width="100%" id="contentss" >
			<form  name="form1" method="post" action="register.php">
				<tr><td align="left" colspan="2" >Register Information</td></tr>
				<tr><td align="left" colspan="2" ><hr/></td></tr>
				<tr><td align="right" width="42%">User ID:</td><td> <input name="id" type="text"/></td><tr>
				<tr><td align="right" width="42%">Password:</td><td>  <input name="pwd" type="password"/></td><tr>
				<tr><td align="right" width="42%">Repeat Password:</td><td>  <input name="rpwd" type="password"/></td><tr>
				<tr><td align="right">E-mail:</td><td><input name="email" type="text"/></td></tr>
				<tr><td align="right">motto:</td><td><input name="motto" type="text"/></td></tr>
				<tr><td></td><td><input name="submit" type="submit" value="Submit" onClick="javaScript:return CheckForm(form1)"/>&nbsp; <input type="reset" value="Reset"/></td><tr>
			</form>	
			</table>		

		</div>		
		<?php require_once 'tools/footer.php' ?>
	</div>
</body>
</html>			
			
