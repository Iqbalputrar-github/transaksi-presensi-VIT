<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dokumen Transaksi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <table class="table table-bordered">
		<thead>
		    <tr>
            <th>ID</th>
            <th>Nama Pelanggan</th>
            <th>Tanggal</th>
            <th>Alamat</th>
            <th>Jenis Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total Harga</th>
			</tr>
		</thead>
		<tbody>
			@foreach($transaksi as $t)
			<tr>
            <td>{{ $t->id }}</td>
            <td>{{ $t->nm_pelanggan }}</td>
            <td>{{ $t->tanggal }}</td>
            <td>{{ $t->alamat}}</td>
            <td>{{ $t->jenis_barang }}</td>
            <td>{{ $t->harga }}</td>
            <td>{{ $t->jumlah }}</td>
            <td>{{ $t->total_harga }}</td>
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