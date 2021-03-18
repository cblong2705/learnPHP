
<!DOCTYPE html>
<html>
	<body>
		<?php
			$number = array(4, 6, 2, 22, 51,27,42,14, 11);
			foreach( $number as $n) {
    			echo " $n   ";
			}
			echo "<br> số nhỏ nhất là : ". min($number). "<br>";
			echo "số lớn nhất là : ". max($number). "<br>";
			echo "trung bình cộng của mảng = " . array_sum($number)/count($number);
			?>
	</body>
</html>
