<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

	<h1>Categories</h1>
	<ul>
<?php
		require_once('dbcon.php');
		$sql = 'SELECT category_id, name FROM category';
		$stmt = $link->prepare($sql);
		$stmt->execute();
		$stmt->bind_result($cid, $nam);
		while($stmt->fetch()){ ?>
		
		<li><a href="filmlist.php?categoryid=<?=$cid?>"><?=$nam?></a></li>

<?php	} ?>
	</ul>

</body>
</html>