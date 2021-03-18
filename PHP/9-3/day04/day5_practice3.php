<!DOCTYPE html>
<html>
<body>
	<?php
		for ($i='a'; $i <= 'z' ; $i++) { 
			if ($i < 'z') {
				echo "$i - ";
			}
			else{
				echo "z";
			}
			if ($i == 'z') {
				break;
			}
	}
	?>
</body>
</html>