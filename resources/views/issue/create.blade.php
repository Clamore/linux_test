<html>
	<meta charset="utf-8">
<head>
	<title>ระบบจัดการให้บริการด้าน IT</title>
</head>
<body>
	<h1>แจ้งปัญหา</h1>
	{!! Form::open(['url' => 'issue']) !!}
		<table style="padding:5px;">
			<tr>
				<td><label for="requester_detail_issue">ปัญหาที่แจ้ง :</label></td>
				<td><textarea name="requester_detail_issue"></textarea></td>
			</tr>	
			<tr>
				<td colspan="2"><input type="submit" value="บันทึก"></td>
			</tr>
		</table>	
	{!! Form::close() !!}

</body>
</html>