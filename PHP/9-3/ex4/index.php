<!DOCTYPE html>
<html>
<body>
	<?php
		$sum = 0;
		$sos = 0;

		for ($i=0; $i <= 100 ; $i++) { 
			$sum += $i;
			$sos += $i*$i;
			if ($i == 50)
  			  {
     		   break;
   			 }
		}echo "tổng : $sum <br>";
		echo "tổng bình phương : $sos <br>";
	?>
</body>
</html>