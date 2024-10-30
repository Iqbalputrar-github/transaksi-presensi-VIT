<!DOCTYPE html>
<head>
<title>CREATE ABSENSI</title>
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
					<a class="navbar-brand" fw-bold mb-3>Presensi</a>
				</nav><br>
				@if ($message = Session::get('success'))
    				<div class="alert alert-success">
      				  <p>{{ $message }}</p>
    				</div>
    			@endif
					<form action="{{ route('absensi.store') }}" method="POST" enctype="multipart/form-data">
				@csrf

				<div class="form-group mb-3">
					<label for="nm_pegawai" class="form-label">Nama pegawai</label>
					<input type="text" name="nm_pegawai" class="form-control"  placeholder="Masukkan nama pelanggan" >
					@error('nm_pegawai')
    				<div class="alert alert-warning mt-1 mb-1">{{ $message }}</div>
    			@enderror
    		</div>

					

        	<div class="form-group mb-3">
				<label for="nm_pelanggan" class="form-label">Nama Pelanggan</label>
				<input type="text" name="nm_pelanggan" class="form-control" placeholder="Masukkan nama pelanggan">
				@error('nm_pelanggan')
    			<div class="alert alert-warning mt-1 mb-1">{{ $message }}</div>
    			@enderror
    		</div>

          	<div class="form-group mb-3">
				<label for="tanggal" class="form-label">Tanggal</label>
				<input type="datetime-local" name="tanggal" class="form-control" placeholder="Masukkan nama pelanggan">
				@error('tanggal')
    			<div class="alert alert-warning mt-1 mb-1">{{ $message }}</div>
    			@enderror
			</div>

			<div class="form-group mb-3">
				<label for="alamat" class="form-label">Alamat</label>
				<input type="text" name="alamat" class="form-control" placeholder="Masukkan alamat">
				@error('alamat')
    			<div class="alert alert-warning mt-1 mb-1">{{ $message }}</div>
    			@enderror
			</div>

			<div class="form-group mb-3">
				<label for="kelurahan" class="form-label">Kelurahan</label>
				<input type="text" name="kelurahan" class="form-control" placeholder="Masukkan wilayah kelurahan">
				@error('kelurahan')
    			<div class="alert alert-warning mt-1 mb-1">{{ $message }}</div>
    			@enderror
			</div>

          	<div class="form-group mb-3">
				<label for="kecamatan" class="form-label">Kecamatan</label>
				<input type="text" name="kecamatan" class="form-control" placeholder="Masukkan wilayah kecamatan">
				@error('kecamatan')
    			<div class="alert alert-warning mt-1 mb-1">{{ $message }}</div>
    			@enderror
			</div>

			<div class="form-group">
				<label for="file">Bukti Kunjungan</label>
				<input type="file" name="file" class="form-control">
				@error('file')
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
