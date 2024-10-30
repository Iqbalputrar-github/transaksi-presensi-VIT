<!DOCTYPE html>
<head>
<title>Tambah Data Barang</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
		integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-5 col-md-8 mx-auto shadow border bg-white p-4 rounded">
			
				<nav class="navbar navbar-dark bg-primary">
					<a class="navbar-brand" fw-bold mb-3>Tambahkan Data Barng</a>
				</nav><br>
				@if ($message = Session::get('success'))
    				<div class="alert alert-success">
      				  <p>{{ $message }}</p>
    				</div>
    			@endif
					<form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
				@csrf

				<div class="form-group mb-3">
					<label for="Jenis_barang" class="form-label">Jenis Barang</label>
					<input type="text" name="Jenis Barang" class="form-control"  placeholder="Masukkan jenis barang" >
					@error('jenis_barang')
    				<div class="alert alert-warning mt-1 mb-1">{{ $message }}</div>
    			@enderror
    		</div>

        	<div class="form-group mb-3">
				<label for="jumlah_barang" class="form-label">jumlah_barang</label>
				<input type="number" name="jumlah_barang" class="form-control" placeholder="Masukkan Jumlah Barang">
				@error('jumlah_barang')
    			<div class="alert alert-warning mt-1 mb-1">{{ $message }}</div>
    			@enderror
    		</div>

          	<div class="form-group mb-3">
				<label for="harga_barang" class="form-label">Harga Barang</label>
				<input type="number" name="harga_barang" class="form-control" placeholder="Masukkan harga Barang">
				@error('tanggal')
    			<div class="alert alert-warning mt-1 mb-1">{{ $message }}</div>
    			@enderror
			</div>
			<button type="submit" class="btn btn-primary btn-block">SIMPAN DATA</button>
			<br>
			<a  href="{{ route('home') }}"> Back</a>
			</div>
			</div>
			</form>
		</div>
	</div>
	</div>
</body>
</html>
