<?php session_start(); ?>
<div id="Header">
			<a href="index.php"><img src="files/logo.png" border=0/></a>
			<p>
				
			</p>
			<div id="headbar">
			<table width="100%"><tr>
				<td><a href="index.php">Home</a> 
				| <a href="plst.php?id=0">Problems</a>
				| <a href="ranklist.php">Ranklist</a>
				| <a href="status.php">Status</a>	
				| <a href="admin">Admin</a>
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
