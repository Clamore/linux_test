<html>
<head>
	<meta charset="utf-8">
	<title>ระบบจัดการให้บริการด้าน IT</title>
</head>
<body>

	<h1>โปรดให้คะแนนในการบริการ</h1>
	<form>
		<table style="padding:5px;">
			<tr>
				<td><label for="requester_detail_issue">ปัญหาที่แจ้ง :</label></td>
				<td><textarea name="requester_detail_issue"></textarea></td>
			</tr>
			<tr>
				<td><label for="requester_rate_service">ระดับความพึงพอใจ :</label></td>
				<td>
					<input type="radio" name="requester_rate_service" value="1">ดีมาก
					<input type="radio" name="requester_rate_service" value="2">ดี
					<input type="radio" name="requester_rate_service" value="3">พอใช้
					<input type="radio" name="requester_rate_service" value="4">แย่
					<input type="radio" name="requester_rate_service" value="5">ต้องปรับปรุงใหม่นะ
				</td>
			</tr>	
			<tr>
				<td colspan="2"><input type="submit" value="ให้คะแนน"></td>
			</tr>
		</table>	
	</form>

</body>
</html>