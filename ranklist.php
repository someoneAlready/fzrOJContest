<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title> Status | fzrOJ</title>
<link href="files/css.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="container">
		<?php require_once 'tools/head.php' ?>
		<?php
			require_once 'tools/info.php';
			require_once 'tools/conn.php';

			$names = array("Rank", "Name", "Solved", "Time");
			$cnt = 4;
			$result = mysql_query("SELECT * FROM problem");
			while ($row = mysql_fetch_array($result)){
				$names[$cnt] = $row[pid];
				$cnt++;
			}
		?>
		<div id="PageBody">
		<p>
			
			<table id="table" width="100%">
				<tr>
					<?php
						for ($i=0; $i<$cnt; ++$i)
							echo '<th>' .$names[$i].'</th>';
					?>
				</tr>
				<?php
					for ($i=4; $i<$cnt; $i++) $pro[$i]=0;
					$users = mysql_query("SELECT * from user");
					while ($user = mysql_fetch_array($users)){
						$uid = $user[uid];
						$gao[$uid]["time"] = $gao[$uid]["solved"]=0;
						$gao[$uid]["name"] = $user["uname"];

						for ($i=4; $i<$cnt; $i++){
							$pid = $names[$i];
							$codes = mysql_query("select * from code where pid=$pid and uid=$uid and cstatus<>0 order by cdate");
							$gao[$uid][$pid][0]=$gao[$uid][$pid][1]=0;
							while ($code = mysql_fetch_array($codes)){
								if ($code[cstatus]==0) continue;
								if ($code[cstatus]==3){
									$gao[$uid][$pid][1]=strtotime($code[cdate])-$start_time+1200*$gao[$uid][$pid][0];
									break;
								}
								else
									$gao[$uid][$pid][0]++;
							}
							if ($gao[$uid][$pid][1]!=0){
								$gao[$uid]["solved"]++;
								$gao[$uid]["time"]+=$gao[$uid][$pid][1];
							}
						}

					}
					usort($gao, 'cmp');
					function cmp($a, $b){
						if ($a["solved"]==$b["sovled"])
							return $a["time"]>$b["time"];
						return $a["solved"]<$b["solved"];
					}

					$rank=0;
					foreach ($gao as $x){
						$rank++;
						echo '<tr><td>'.$rank.'</td><td>'.$x["name"].'</td><td>'.$x["solved"].'</td><td>'.floor($x["time"]/60).'</td>';
						for ($i=4; $i<$cnt; $i++){
							$pid = $names[$i];
							if ($x[$pid][1]==0){
								if ($x[$pid][0]==0)
									echo '<td>';
								else
									echo '<td class="fail">';
								echo $x[$pid][0];
							}
							else{
								$pro[$i]++;
								echo '<td class="ac">'.($x[$pid][0]+1).'/'.floor($x[$pid][1]/60);
							}
							echo '</td>';
						}
						echo '</tr>';
					}
				?>
				<tr><td colspan="4">total AC</td>
				<?php
					for ($i=4; $i<$cnt; ++$i)
						echo '<td>'.$pro[$i].'</td>';
				?>
				</tr>
			</table>	
		</p>
		</div>
		<?php require_once 'tools/footer.php' ?>

	</div>
</body>
</html>				
