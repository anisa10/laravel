<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@foreach($siswa as $data)
		Nama  : {{ $data['nama'] }} <br>
		Kelas : {{ $data['kelas']}}
		<hr>
	@endforeach
</body>
</html>