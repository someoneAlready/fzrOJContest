<?php session_start();
	require_once '../tools/info.php';
	require_once '../tools/conn.php';

	if (isset($_SESSION['uname'])){
		$uname = $_SESSION['uname'];
		$sql = "SELECT uadmin FROM user WHERE uname='$uname'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		if ($row['uadmin']==1){
		}
		else{
			echo 'sorry, you have not permission...';
			exit();
		}

	}
	else{
		echo 'sorry, please login...';
		exit();
	}
?>
<div id="Header">
			<a href="index.php"><img src="../files/logo.png" border=0/></a>
			<p>
				
			</p>
			<div id="headbar">
			<table width="100%"><tr>
				<td><a href="index.php">Admin</a> 
				| <a href="..">Index</a>
				| <a href="add.php">Add</a>
				</td>
				<td align="right" id="user">
				<?php
				
					if (isset($_SESSION['uid'])){
						echo $_SESSION[uname].'  <a href="../logout.php">Logout</a>';
					}
					else
						echo '<a href="login.php">Login</a> <a href="register.php">Rigister</a>';
				?>
				</td>
			</tr></table>
			</div>
</div>
