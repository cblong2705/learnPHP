<!DOCTYPE html>
<html>
<body>
<?php
	$EV2009 = "EV2009";
	$txt ="Tấm hợp kim nhôm ngoài trời EV2009";
	$SL = 500;
	$gia = 160000;
	$VAT = 0.05;
	$TongGia =$SL*$gia;
	$giasauthue = $TongGia-$TongGia*$VAT;
	echo "mã $EV2009" . "<br>" ."$txt" ."<br>" ." số lượng :$SL". "<br>" . "giá :$gia" . "<br>". "thuế VAT:$VAT"."<br>";
	echo "giá sản phẩm trước thuế :".$TongGia."<br>";
	echo "thuế VAT :".$TongGia*$VAT."<br>";
	echo "giá sau thuế :".$giasauthue;
?>
</body>
</html>
