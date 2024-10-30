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
					<a class="navbar-brand" fw-bold mb-3>Update Absensi</a>
				</nav><br>

    <form action="{{ route('absensi.update', $absensi->id) }}" 
          method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="form-group mb-3">
            <label for="nm_pegawai" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control" name="nm_pegawai"
            value="{{old('nm_pegawai', $absensi->nm_pegawai) }}">
        </div>
        <div class="form-group mb-3">
            <label for="nm_pelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" name="nm_pelanggan" placeholder="Masukkan nama pelanggan" 
                   value="{{ old('nm_pelanggan', $absensi->nm_pelanggan) }}">
        </div>

        <div class="form-group mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="datetime-local" class="form-control" name="tanggal"
                   value="{{ old('tanggal', $absensi->tanggal) }}">
        </div>

        <div class="form-group mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" 
                   value="{{ old('alamat', $absensi->alamat) }}">
        </div>

        <div class="form-group mb-3">
            <label for="kelurahan" class="form-label">Kelurahan</label>
            <input type="text" class="form-control" name="kelurahan" placeholder="Masukkan wilayah kelurahan" 
                   value="{{ old('kelurahan', $absensi->kelurahan) }}">
        </div>
        
        <div class="form-group mb-3">
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <input type="text" class="form-control" name="kecamatan" placeholder="Masukkan wilayah kecamatan" 
                   value="{{ old('kecamatan', $absensi->kecamatan) }}">
        </div>
    
        <div class="form-group mb-3">
            <label for="file">Bukti Kunjungan</label>
            <input type="file" class="form-control" name="file" 
                   value="{{ old('file', $absensi->file) }}">
        </div>
        <button type="submit" class="btn btn-md btn-success">UPDATE</button>
        <button type="reset" class="btn btn-md btn-danger">RESET</button>
        <br>
        <a  href="{{ route('home') }}"> Back</a>
    </div>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>
