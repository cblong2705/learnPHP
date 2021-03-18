<!DOCTYPE html>
<html>
<body>
	<?php
		$sum = 0;
		$i = 1;
		echo "các số chia hết cho 3 trong khoảng 20 -50 là : " ;
		while ($i <= 100) {
			while (20 <= $i && $i <= 50) {
				$sum += $i;
		    if ($i % 3 == 0) {
		    	echo "$i ";
		    };
		    $i++;
		}
		    $sum += $i;
		    $i++;

		}echo "<br> tổng từ 1- 100 : $sum";
		
	?>
</body>
</html>