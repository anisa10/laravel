<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>Data Pegawai</center>
	@foreach ($gajih as $gaji)
		@if ($gaji['Jabatan'] == "Manager")
			@php $jab = 500000; @endphp
		@elseif ($gaji['Jabatan'] == "Sekretaris")
			@php $jab = 350000; @endphp
		@elseif ($gaji['Jabatan'] == "Staff")
			@php $jab = 250000; @endphp
		@endif

		@if ($gaji['jam_kerja'] > 250)
			@php $bonus = 0.10 * $jab; @endphp
		@elseif ($gaji['jam_kerja'] > 150)
			@php $bonus = 0.05 * $jab; @endphp
		@else
			@php $bonus = 0; @endphp
		@endif

	@php $ppn = 0.025 * $jab; @endphp
	@php $gaber = ($jab + $bonus) - $ppn; @endphp
	Nama        : {{ $gaji ['nama'] }} <br>
	NIP         : {{ $gaji ['nip'] }} <br>
	Agama       : {{ $gaji ['agama'] }} <br>
	Jabatan     : {{ $gaji ['Jabatan'] }} <br>
	Jam Kerja   : {{ $gaji ['jam_kerja'] }} <br>
	Gaji        : {{ $jab }} <br>
	Bonus       : {{ $ppn }} <br>
	Gaji Bersih : {{ $gaber }} <br>
	<hr>
	@endforeach
</body>
</html>