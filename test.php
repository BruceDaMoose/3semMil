<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<?php	
	function echoNumbers($a, $b){
		for($i=$a; $i<=$b; $i++){
			echo $i;
			if ($i<$b) {
				echo ',';
			}
		}
	}

	$start = filter_input(INPUT_GET,'start');
	$end   = filter_input(INPUT_GET,'end');
	echoNumbers($start, $end);	
?>
<hr>
<?php echoNumbers(4,5); ?>
<hr>
<?php echoNumbers(10,15); ?>
<hr>
<?php echoNumbers(37,42); ?>
<hr>
<?php echoNumbers(40,50); ?>
<hr>
<?php
	$namelist = array('Manfred', 'Jesper', 'Rold');
?>
	<table border="2">
		<tr><th>Name</th></tr>
<?php
		foreach($namelist as $nam){
			echo '<tr><td>'.$nam.'</td></tr>';
		}
?>
	</table>

<hr>

<?php
	echo $_SERVER['PHP_SELF'];
	/*
	foreach($_SERVER as $key => $val){
		echo $key.' : '.$val.'<br>';
	}
	*/
	
	?>
	







</body>
</html>