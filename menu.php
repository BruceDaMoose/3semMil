<?php
	$fn = basename($_SERVER['PHP_SELF']);
?>
<nav>
	<ul>
		<li><a class="menu<?= ($fn=='p1.php')?' active':'' ?>" href="p1.php">Page 1</a></li>
		<li><a class="menu<?= ($fn=='p2.php')?' active':'' ?>" href="p2.php">Page 2</a></li>
		<li><a class="menu<?= ($fn=='p3.php')?' active':'' ?>" href="p3.php">Page 3</a></li>
	</ul>
</nav>