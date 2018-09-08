<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>update Database</title>
</head>
<body>

<div>
	<h4>Update Database</h4>
<form method="get" action="">
	<label for "name">Name:</label>
	<input id="name" name="name" placeholder="Enter The New Name" type="Text"/>
	<label for "description"> Description: </label>
	<input id="description" name="description" placeholder="Enter The New Description" type="Text"/>
	<input type ="hidden" name="id" value="someID"/>
	<input type ='hidden' name='idOflisting' value=<?php echo'"'.$id.'" />';?>
	<input type="submit" value="Save"/>
</form>
</div>
</body>
</html>
