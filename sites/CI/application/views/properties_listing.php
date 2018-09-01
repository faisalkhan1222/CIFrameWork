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

	<?php
		for($i=0; $i<sizeof($names); $i++){
			echo "<h3>Specs </h3>".$names[$i];
			echo "<h3>Description </h3>".$description[$i];
			echo "<h3>City </h3>".$city[$i];
			echo "<h3>Zip </h3>".$zip[$i];
			echo $image[$i]."</br>";
			echo "<h1>----------------------------------------------</h1>";
		}
	?>
	<h2>Next Step is to read all the data from DB and make a better view</h2>
</div>

</body>
</html>