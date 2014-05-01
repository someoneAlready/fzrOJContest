<?php
	require_once 'tools/info.php';
	require_once 'tools/conn.php';
	$pid=$_GET['pid'];
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
<title><?php echo $pid . ' - ' . $row[pname]?> | fzrOJ</title>
<link href="files/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="container">
		<?php require_once 'tools/head.php' ?>
		<div id="PageBody">

				<p id="titles" style="text-align:center;">
				<?php echo $row[pname] ?>
				</p>
				

				<div class="contentss">
				<center><font style="font-size:16px;"><font color="#1f824d">Time Limit:</font> <?php echo $row[ptime]?> Second<?php if ($row[ptime]>1) echo 's'; ?>  
				&nbsp;&nbsp;&nbsp;<font color="#1f824d">Memory Limit:</font> <?php echo $row[pmem] ?> MB
				</font>
				</center>
				</div>

				<p id="titles">Description</p>
				<p id="desp" class="contentss"></p>
				
				<p id="titles">Input</p>
				<p id="input" class="contentss"></p>
				
				<p id="titles">Output</p>
				<p id="output" class="contentss"></p>
				
				<p id="titles">Sample Input</p>
				<pre id="sinput" class="contentss"></pre>
				
				<p id="titles">Sample Output</p>
				<pre id="soutput" class="contentss"></pre>
				
				<p id="titles">Source</p>
				<p class="contentss"><?php echo $row[psource] ?></p>
				
				<p id="subs">
					<a href="submit.php?pid=<?php echo $pid ?>">[Submit]</a>&nbsp;&nbsp;&nbsp;
					<a href="">[Status]</a>&nbsp;&nbsp;&nbsp;
					<a href="">[Discuss]</a>
				</p>	
	
		</div>
		
		
		<?php require_once 'tools/footer.php' ?>

	</div>
</body>
<script language="javascript" for="window" event="onload">
function heredoc(fn) {
    return fn.toString().split('\n').slice(1,-1).join('\n') + '\n'
}

function get(ptext, id){
	var ret="";
	var start = "<"+id+">";
	var end = "</"+id+">";
	var k = 0;
	for (var i=0; i<ptext.length; ++i){
		if (ptext.substr(i, start.length)==start){
			i+=start.length-1;
			k++;
		}
		else if (ptext.substr(i, end.length)==end){
			k++;
		}
		else if (k==1)
			ret = ret + ptext.charAt(i); 
	}
	return ret;
}

function gao(id, ptext){
	document.getElementById(id).innerHTML = get(ptext, id);
}

var ptext = heredoc(function(){/*
<?php echo $row[ptext]; ?>

*/});

gao('desp', ptext);
gao('input', ptext);
gao('output', ptext);
gao('sinput', ptext);
gao('soutput', ptext);

</script>
</html>			
