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
			echo "<h3>ID </h3>".$id[$i];
			echo "<h3>Specs </h3>".$names[$i];
			echo "<h3>Description </h3>".$description[$i];
			echo "<h3>City </h3>".$city[$i];
			echo "<h3>Zip </h3>".$zip[$i];
			echo $image[$i]."</br>";

			$url = base_url()."index.php/Updatedatabase/updatedata?>";

			echo"<form method='GET' action=".$url;
				echo "<input type='hidden' name='idOflisting' value=".$id[$i].">";
				echo "<input type='submit' value='Update Name OR Desc' />";
			echo "</form>";
			echo "<h1>--------------------------</h1>";


		}
	?>
	<h2> </h2>
</div>

</body>
</html>