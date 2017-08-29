<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>

<?php
if(!empty(filter_input(INPUT_GET, 'submit'))) {
	
	$name  = filter_input(INPUT_GET, 'name') 
		or die('Missing/illegal name parameter');
	$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL) 
		or die('Missing/illegal email parameter');
	$age   = filter_input(INPUT_GET, 'age', 
						  FILTER_VALIDATE_INT, 	
						  array('options' => array('min_rang'=>0,
												   'max_range'=>100))
						 ) 
		or die('Missing/illegal age parameter');
	
	echo 'Valid parameters: ['.$name.','.$email.','.$age.']';
}
?>
<p>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
	<fieldset>
    	<legend>Validate input serverside...</legend>
    	<input name="name"  type="text" placeholder="Name" required />
    	<input name="email" type="email" placeholder="Email"  required/>
    	<input name="age"   type="number" min="0" max="100" placeholder="Age"  required/>
    	<input type="submit" name="submit" value="Submit" />
	</fieldset>
</form>
</p>

</body>
</html>