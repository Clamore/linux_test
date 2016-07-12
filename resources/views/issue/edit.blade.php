<html>
<head>
	<meta charset="utf-8">
	<title>ระบบจัดการให้บริการด้าน IT</title>
</head>
<body>
	<h1>ปัญหาที่แจ้ง</h1>
	<form>
		<table style="padding:5px;">
			<tr>
				<td><label for="requester_detail_issue">ปัญหาที่แจ้ง :</label></td>
				<td><textarea name="requester_detail_issue"></textarea></td>
			</tr>
			<tr>
				<td><label for="service_type_id">ประเภทบริการ :</label></td>
				<td>
					<select name="service_type_id">
						<option>เลือกประเภท</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="service_domain_id">ประเภทระบบงาน :</label></td>
				<td>
					<select name="service_domain_id">
						<option>เลือกประเภท</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="service_begin_at">วนัที่เริ่มให้บริการ :</label></td>
				<td><input type="text" name="service_begin_at"></td>
			</tr>
			<tr>
				<td><label for="checkup_detail">บันทึการตรวจสอบก่อนให้บริการ :</label></td>
				<td><textarea name="checkup_detail"></textarea></td>
			</tr>
			<tr>
				<td><label for="service_end_estimated">วนัที่คาดว่าจะเสร็จ :</label></td>
				<td><input type="text" name="service_end_estimated"></td>
			</tr>
			<tr>
				<td><label for="service_end_at">วันที่สิ้นสุดการให้บริการ :</label></td>
				<td><input type="text" name="service_end_at"></td>
			</tr>
			<tr>
				<td><label for="issue_status_id">ประเภทการรับเรื่อง :</label></td>
				<td>
					<select name="service_domain_id">
						<option selected>เลือกประเภท</option>
						<option value="1">รอ</option>
						<option value="2">รับเรื่องแล้ว</option>
						<option value="3">กำลังดำเินนงาน</option>
						<option value="4">ปิดงาน - เสร็จ</option>
						<option value="5">ปิดงาน - ส่งต่อศูนย์คอม</option>
						<option value="6">ปิดงาน - ไม่สามารถทำได้</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><label for="summary_report">สรุปการให้บริการ :</label></td>
				<td><textarea name="summary_report"></textarea></td>
			</tr>
			<tr>
				<td><label for="need_followup">ติดตามหลังให้บริการ :</label></td>
				<td><input type="checkbox" name="need_followup"></td>
			</tr>
			<tr>
				<td><label for="service_by">ผู้ให้บริการ :</label></td>
				<td>
					<select name="service_by">
						<option selected>เลือกผู้ให้บริการ</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="บันทึก"></td>
			</tr>
		</table>	
	</form>

</body>
</html>