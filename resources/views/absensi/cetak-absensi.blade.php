<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dokumen presensi kunjungan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <table class="table table-bordered">
		<thead>
		    <tr>
            <th>ID</th>
            <th>Nama Pegawai</th>
            <th>Nama Pelanggan</th>
            <th>Tanggal</th>
            <th>Alamat</th>
            <th>Kelurahan</th>
            <th>Kecamatan</th>
            <th>Bukti Kunjungan</th>
			</tr>
		</thead>
		<tbody>
			@foreach($absensi as $a)
			<tr>
            <td>{{ $a->id }}</td>
            <td>{{ $a->nm_pegawai }}</td>
            <td>{{ $a->nm_pelanggan }}</td>
            <td>{{ $a->tanggal }}</td>
            <td>{{ $a->alamat}}</td>
            <td>{{ $a->kelurahan }}</td>
            <td>{{ $a->kecamatan }}</td>
            <td><img width="70px" src="{{ asset('storage/images/'.$a->file) }} "></td>
			</tr>
			@endforeach
		</tbody> 
        </table>

		 <style>
			<script>
			@media print {
				@page {
					size: landscape
				}
			}
			</style>
			<script>
				window.print();
			</script> 
    </div>
</body>

</html>