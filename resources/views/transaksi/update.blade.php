<!DOCTYPE html>
<head>
    <title>UPDATE</title>
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
					<a class="navbar-brand" fw-bold mb-3>Update Transaksi</a>
				</nav><br>

    <form action="{{ route('transaksi.update', $transaksi->id) }}" 
          method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

        <div class="form-group mb-3">
            <label for="nm_pelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" name="nm_pelanggan"
            value="{{old('nm_pelanggan', $transaksi->nm_pelanggan) }}">
        </div>

        <div class="form-group mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" name="tanggal"
            value="{{old('tanggal', $transaksi->tanggal) }}">
        </div>

        <div class="form-group mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat"
            value="{{old('alamat', $transaksi->alamat) }}">
        </div>


        <div class="form-group mb-3">
            <label for="jenis_barang" class="form-label">Jenis Barang</label>
            <select type="text" class="form-control" name="jenis_barang" 
                   value="{{ old('jenis_barang', $transaksi->jenis_barang) }}">
                   <option>Pilih jenis barang</option>
                        <option>Galon</option>
                        <option>Karton</option>
                        <option>Botol</option>
			</select>
        </div>

        <div class="form-group mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" name="harga" id= "harga" onkeyup="sum();" placeholder="Masukkan harga" 
                   value="{{ old('harga', $transaksi->harga) }}">
        </div>

        <div class="form-group mb-3">
            <label for="jumlah" class="form-label">Jumlah</label>
            <input type="number" class="form-control" name="jumlah" id= "jumlah" onkeyup="sum();" placeholder="Masukkan jumlah"
                   value="{{ old('jumlah', $transaksi->jumlah) }}">
        </div>

        <div class="form-group mb-3">
            <label for="total_harga" class="form-label">Total Harga</label>
            <input type="text" class="form-control" name="total_harga" id= "total_harga" onkeyup="sum();" placeholder="Masukkan total harga" readonly>
        </div>

        <button type="submit" class="btn btn-md btn-success">UPDATE</button>
        <button type="reset" class="btn btn-md btn-danger">RESET</button>
    </form>
    </div>
    </div>
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
