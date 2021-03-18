<!DOCTYPE html>
<html>
<body>
	<?php
		$mangA = array(3,6,534,32);
		$mangB = ["sett","jinx","akali"];   
		$sum = 0;
		$i = 1;
		echo "in các số từ 1 - 100 bằng for : " ;
		while ($i <= 100) {
		    	echo "$i ";
		    $i++;
		}
		echo " <br> in các số từ 1 - 100 bằng for : " ;
		for ($i = 1; $i <= 100; $i++) { 
			echo "$i ";
		}
		for ($i=0; $i <$mangA ; $i++) { 
			echo "$i ";
		}
	?>
</body>
</html>