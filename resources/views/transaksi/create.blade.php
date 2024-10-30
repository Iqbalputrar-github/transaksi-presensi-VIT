<!DOCTYPE html>
<head>
<title>CREATE TRANSAKSI</title>
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
					<a class="navbar-brand" fw-bold mb-3> Transaksi</a>
				</nav><br>
				@if ($message = Session::get('success'))
    				<div class="alert alert-success">
        				<p>{{ $message }}</p>
    				</div>
    			@endif
					<form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
					<div class="form-group mb-3">
						<label for="nm_pelanggan" class="form-label">Nama Pelanggan</label>
						<input type="text" name="nm_pelanggan" class="form-control" placeholder="Masukkan nama pelanggan">
						@error('nm_pelanggan')
    					<div class="alert alert-warning mt-1 mb-1">{{ $message }}</div>
    					@enderror
                    </div>

					<div class="form-group mb-3">
						<label for="tanggal" class="form-label">Tanggal</label>
						<input type="date" name="tanggal" class="form-control">
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
            <label for="jenis_barang" class="form-label">Jenis Barang</label>
						<select type="text" name="jenis_barang" class="form-control">
							<option>Pilih jenis barang</option>
							<option>Galon</option>
							<option>Karton</option>
							<option>Botol</option>
						</select>
						@error('jenis_barang')
    					<div class="alert alert-warning mt-1 mb-1">{{ $message }}</div>
    					@enderror
            </div>

                    <div class="form-group mb-3">
						<label for="harga" class="form-label">Harga</label>
						<input type="number" name="harga" class="form-control" id= "harga" onkeyup="sum();" placeholder="Masukkan harga">
						@error('harga')
    					<div class="alert alert-warning mt-1 mb-1">{{ $message }}</div>
    					@enderror
                    </div>

					<div class="form-group mb-3">
                        <label for="jumlah" class="form-label">Jumlah Barang</label>
                        <input type="number" name="jumlah" class="form-control" id= "jumlah" onkeyup="sum();" placeholder="Masukkan jumlah barang">
						@error('jumlah')
    					<div class="alert alert-warning mt-1 mb-1">{{ $message }}</div>
    					@enderror
                    </div>

                    <div class="form-group mb-3">
						<label for="total_harga" class="form-label">Total Harga</label>
						<input type="number" name="total_harga" class="form-control" id= "total_harga" onkeyup="sum();" placeholder="Masukkan total harga" readonly>
						@error('total_harga')
    					<div class="alert alert-warning mt-1 mb-1">{{ $message }}</div>
    					@enderror
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">SIMPAN DATA</button>
					<br>
					<a  href="{{ route('home') }}"> Back</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>
	<script>
			function sum() {
				var harga = document.getElementById('harga').value;
				var jumlah = document.getElementById('jumlah').value;
				var result = parseInt(harga) * parseInt(jumlah);
				if (!isNaN(result)){
					document.getElementById('total_harga').value=result;
				}
			}
	</script>