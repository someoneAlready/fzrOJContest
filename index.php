<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Home | fzrOJ</title>
<link href="files/css.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="container">
		<?php require_once 'tools/head.php' ?>
		<?php require_once 'tools/info.php' ?>
		<?php require_once 'tools/func.php' ?>
		<div id="PageBody">
			<img align="right" src="files/12.png" />
			<h2>Qualification Round of the 7th Henan Province Programming Contest</h2>
			<table id="table2" >
				<tr>
					<td>Start Time:</td>
					<td><font color="#1f824d"><?php echo $start_time_string; ?></font></td>
				</tr>
				<tr>
					<td>Length:</td>
					<td><?php echo $length?> Hours</td>
					
				</tr>
				<tr>
					<td>Status:</td>
				    <td><?php if ($start_time>time()) echo 'Waiting';
				   	else if (time()>$start_time+3600*$length) echo 'Finished';
					else echo 'Runing';
					?></td>
				</tr>
				<?php if (time()<$start_time){
						$delta = $start_time - time();
						$gao = get_time($delta);

						echo '	<tr>	<td>Countdown:</td>	<td>' . $gao .'</td>	</tr>	';
					}
				?>
			</table>


	
		</div>
		<?php require_once 'tools/footer.php' ?>
	</div>
</body>
</html>
