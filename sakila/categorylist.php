<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<?php

if($cmd = filter_input(INPUT_POST, 'cmd')){
	
	if($cmd == 'add_category'){
		// code to add a new category
		
	}
	elseif($cmd == 'delete_category'){
		// code to delete the category
		
	}
	else {
		die('Unknown cmd parameter');
	}
}
	
?>



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
<hr>

<p>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
	<fieldset>
    	<legend>Add new category</legend>
    	<input name="categoryname" type="text" placeholder="Categoryname" required />
		<button name="cmd" value="add_category" type="submit">Create it!!!</button>
  	</fieldset>
</form>
</p>

</body>
</html>