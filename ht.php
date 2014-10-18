
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ก๋วยเตี๋ยวต้มยำบ้ำนลำยจุดข้างวัง</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="dist/ladda-themeless.min.css">

</head>

<body>
	<div class="content">

		<center>
			<h1>ก๋วยเตี๋ยวต้มยำบ้านลายจุดข้างวัง</h1>
		</center>
		<h3>ก๋วยเตี๋ยวต้มยำ บ้านลายจุดข้างวัง .... เลือกท็อปปิ้งได้ตามใจ
			จุดเด่นอยู่ที่น้ำซุปรสเข้ม เพิ่มการปรุงต้มยำในแบบเราเข้าไป
			น้ำมะนำวแท้ๆ พริกเผาเข้มข้น ถั่วบดทำเอง หรือแม้แต่ท็อปปิ้ง เช่น
			กุ้งแม่น้ำที่ร้ำนเลือกขนาดที่ใหญ่ที่สุด เต็มคำเต็มชาม
			ก๋วยเตี๋ยวราคาเริ่มต้น 35 บาทนะ ใน35บาทจะมีหมู ลูกชิ้น หมูสับ ตับลวก
			ให้อยู่แล้ว ขั้นตอนการสั่ง ง่ายๆเลย ลูกค้เลือกเส้นก่อน
			เส้นนี่ก็เหมือนร้านก๋วยเตี๋ยวทั่วๆไป เส้นเล็ก เส้นหมี่ บะหมี่
			วุ้นเส้น ละลูกค้ก็เลือกเครื่องเพิ่ม เช่น ถ้าอยากจะใส่ไข่มะตูม
			ก็บวกไป15บาท เป็ นราคาชามละ 50 บาท หรือจะเพิ่มกุ้งหรือปลาหมึกได้
			อีกนิดนึง...แต่ละชามเราทาใหม่ ปรุงใหม่ ลวกใหม่ สำหรับชามต่อชามเท่นั้น
			อาจจะต้องมีรอบ้าง เพราะลูกค้าสามารถรีเควสได้ว่าจะทานเผ็ดหรือไม่เผ็ด
			หรือน้ำใสก็มีสำหรับเด็กน้อยค่ะ</h3>
		<h2>
		จำนวนจามก๋วยเตี๋ยว<input id="num0">จาม</br>
			<b>ท็อปปิ้ง</b>
		</h2>
		<form method="post" action="">
			<div class="checkbox"">
			<label> 
				<label> <input type="checkbox" value="" >กุ้งแม่น้ำ 1 ตัวละ 55 บาท<input
					id="num1"type="text" size="2" value="">ตัว</br> <input type="checkbox"
					value="">ปลาหมึก 1 ตัวละ 55 บาท<input id="num2" type="text" size="2" value="">ตัว</br>
				</label>
			</div>
			<h2>
				<b>ก๋วยเตี๋ยว</b>
			</h2>
			<h4>เส้นก๋วยเตี๋ยว</h4>
			<div class="checkbox"">
				<label> <input type="checkbox" value="">เส้นเล็ก&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" value="">เส้นหมี่</br> <input
					type="checkbox" value="">บะหมี่&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="checkbox" value="">วุ้นเส้น</br>
				</label>
			</div>
			<h4>เพิ่มเครื่อง</h4>
			<div class="checkbox"">
				<label> <input type="checkbox" value=""> ใส่ผัก
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" value="">
					ไม่ใส่ผัก </br> <input type="checkbox" value="">
					น้ำตก&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" value="">
					น้ำใส </br> <input type="checkbox" value=""> ใส่ไข่มะตูน
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" value="">
					กุ้ง</br> <input type="checkbox" value=""> ปลาเมึก

				</label>
			</div>
			<button type="submit" class="btn btn-default">บันทึกรายการ</button>
			<button type="reset" class="btn btn-default">ยกเลิกรายการ</button>
	
	</div>
	</form>
	
</body>
</html>
<?php
	$num0 = $_POST['num0'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$sr = $num0*35;

echo "$sr";




?> 

