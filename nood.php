

<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ก๋วยเตี๋ยวต้มยำบ้ำนลำยจุดข้างวัง</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="dist/ladda-themeless.min.css">
<body>
	<?php
	$num0 = $_POST["num0"];
	$num1 = $_POST["num1"];
	$num2 = $_POST["num2"];
	if ($_POST == $num1) {
		$re1 = $num1*55;
	}
	if ($_POST == $num1) {
		$re2 = $num2*55;
	}

	$sr = $num0*35+$re1+$re2;


	echo "$sr";


	?>

</body>
</html>
