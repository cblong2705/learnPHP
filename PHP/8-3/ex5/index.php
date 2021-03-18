<!DOCTYPE html>
<html>
<body>
<?php
	$sodien = 1275;
	$VAT = 0.1;
	$tiendien = 1;
	if (0 < $sodien && $sodien <= 100) {
		$tiendien = $sodien*450;
		echo "tiền điện trước thuế vat : $tiendien Đ"."<br>";
		echo "tiền điện sau thuế vat : ";echo $tiendien+$tiendien*$VAT." Đ <br>";
	}
	if (100 < $sodien && $sodien <= 200) {
		$tiendien = ($sodien-100)*600+45000;
		echo "tiền điện trước thuế vat : $tiendien Đ"."<br>";
		echo "tiền điện sau thuế vat : ";echo $tiendien+$tiendien*$VAT." Đ <br>";
	}
	if (200 < $sodien && $sodien <= 300) {
		$tiendien = ($sodien-200)*750+105000;
		echo "tiền điện trước thuế vat : $tiendien Đ"."<br>";
		echo "tiền điện sau thuế vat : ";echo $tiendien+$tiendien*$VAT." Đ <br>";
	}
	if (300 < $sodien && $sodien <= 500) {
		$tiendien = ($sodien-300)*900+180000;
		echo "tiền điện trước thuế vat : $tiendien Đ"."<br>";
		echo "tiền điện sau thuế vat : ";echo $tiendien+$tiendien*$VAT." Đ <br>";
	}
	if (500 < $sodien && $sodien <= 1000) {
		$tiendien = ($sodien-500)*1000+360000;
		echo "tiền điện trước thuế vat : $tiendien Đ"."<br>";
		echo "tiền điện sau thuế vat : ";echo $tiendien+$tiendien*$VAT." Đ <br>";
	}
	if (1000 < $sodien ) {
		$tiendien = ($sodien-1000)*1000+860000;
		echo "tiền điện trước thuế vat : $tiendien Đ"."<br>";
		echo "tiền điện sau thuế vat : ";echo $tiendien+$tiendien*$VAT." Đ <br>";
	}
?>
</body>
</html>
