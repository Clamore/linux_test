<html>
<head>
	<meta charset="utf-8">
	<title>ระบบจัดการให้บริการด้าน IT</title>
</head>
<body>

	<h1>ระบบจัดการให้บริการด้าน IT</h1>
	<a href="/issue/create">แจ้งปัญหา (เฉพาะผู้แจ้ง)</a>
	<br><br><br>
	<a href="/issue/edit">การรับเรื่อง (เฉพาะเจ้าหน้าที่)</a>
	<br><br><br>
	<a href="/issue/create">ให้คะแนน (เฉพาะผู้แจ้ง)</a>

	<br><br>

	<table>
		<thead>
			<tr>
				<th>ปัญหาที่แจ้ง</th>
				<th>ชื่อผู้ขอรับบริการ</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($issues as $issue)
				@if ($issue->id % 2 == 0)
				<tr style="background-color:#ccff66;">
				@else
				<tr style="background-color:#33ff01;">
				@endif
					<td>{{ $issue->requester_detial_issue }}</td>
					<td>{{ $issue->requester }}</td>
					<td><a href="/issue/{{ $issue->id }}/edit/">edit</a></td>
				</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>