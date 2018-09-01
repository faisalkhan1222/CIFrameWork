<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>List Of Properties</title>
</head>
<body>

<div>
	<h4>Data Retrieved From DB</h4>


	<h5>Specs of Homes</h5>
	<?php
		for($i=0; $i<sizeof($names); $i++){
			echo $names[$i]."</br>";
		}
	?>
	<h2>Next Step is to read all the data from DB and make a better view</h2>
</div>

</body>
</html>