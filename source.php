<?php require_once 'user.php';?>
<?php
	require_once 'tools/info.php';
	require_once 'tools/conn.php';
	$sid=$_GET['sid'];

	$result=mysql_query("SELECT * FROM code WHERE cid=$sid");
	$row = mysql_fetch_array($result);
	if (!$row){
		echo '<h3><font color="red">no such source code!!!</font></h3><h3>';
		exit;	
	}
	else if ($_SESSION['uadmin']==1 || $row[uid]==$_SESSION[uid]){
		
	}
	else{
		echo '<h3><font color="red">sorry, you have not permission!!!</font></h3><h3>';
		exit;
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.min.js"></script>
<script src="files/google-code-prettify/prettify.js" type="text/javascript"></script>
<link href="files/google-code-prettify/prettify.css" type="text/css" rel="stylesheet" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Source Code | fzrOJ</title>
<link href="files/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="container">
		<?php require_once 'tools/head.php' ?>
		<div id="PageBody">
			<pre><?php 
				function gao($s){
					$ret="";
					for ($i=0; $i<strlen($s); ++$i)
						if ($s[$i]=='<') $ret=$ret.'&lt;';
						else if ($s[$i]=='>') $ret=$ret.'&gt;';
						else if ($s[$i]=='&') $ret=$ret.'&amp;';
						else if ($s[$i]=='\\') $ret=$ret.'\\';
						else $ret=$ret.$s[$i];

					return $ret;
						
				}
				echo gao($row[ctext]); 
			?></pre>

	
		</div>
		
		
		<?php require_once 'tools/footer.php' ?>

	</div>
</body>
<script language="javascript">
$(window).load(function(){
     $("pre").addClass("prettyprint");
     prettyPrint();
})
</script>

</html>			
