<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
        <title>RIWAYAT ABSENSI</title>
        <link rel="stylesheet" 
              href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <body style="background: grey">
</head>
<body>
    <div class="container mt-2">
   
    <div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left">
    <br><br>
    <center><h2  style="color:white;">RIWAYAT ABSENSI </h2></center>
    </div><br>
   
    </div>
    </div>
    @if ($message = Session::get('success'))    
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    
    <!--fitur cari-->
    <form method="GET">
        <div class="pull-right mb-2">
            
            <label class="col-mb-2 col-form-label" style="color:white;">
                Cari Data 
            </label>
        <div class="col-mb-2">
            <input type="text" name="cari" id="cari" class="form-control" 
            placeholder="Cari Data Berdasarkan Nama Pegawai / Nama Pelanggan"
            autofocus="true" value="{{$cari}}" ><br>
            <!--finish-->

            <a href="/print-pdf" class="btn btn-primary" target="_blank">CETAK PDF</a><br><br>
        
            <table class="table table-bordered" style="background: white"> 
        <tr>
             <!--fitur sortabe-->
            <th>@sortablelink('id','ID')</th>
            <th>@sortablelink('nm_pegawai','Nama Pegawai')</th>
            <th>@sortablelink('nm_pelanggan','Nama Pelanggan')</th>
            <th>@sortablelink('tanggal','Tanggal')</th>
            <th>@sortablelink('alamat','Alamat')</th>
            <th>@sortablelink('kelurahan','Kelurahan')</th>
            <th>@sortablelink('kecamatan','Kecamatan')</th>
            <th>Bukti Kunjungan</th>
            <th width="280px">Action</th>
             <!--finish-->
        </tr>
    @foreach ($absensi as $a)
        <tr>
            <td>{{ $a->id }}</td>
            <td>{{ $a->nm_pegawai }}</td>
            <td>{{ $a->nm_pelanggan }}</td>
            <td>{{ $a->tanggal }}</td>
            <td>{{ $a->alamat}}</td>
            <td>{{ $a->kelurahan }}</td>
            <td>{{ $a->kecamatan }}</td>
            <td><img width="70px" src="{{ asset('storage/images/'.$a->file) }} "></td>
            <td>
                <form action="{{ route('absensi.destroy',$a->id) }}" method="Post">
                <a class="btn btn-success" href="{{ route('absensi.edit',$a->id) }}"> UPDATE </a>
    @csrf
    @method('DELETE')
            <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>

    <!--fitur pagination-->
    <!-- {{ $absensi->links() }} -->
    {!! $absensi->appends(Request::except('page'))->render() !!}
    <!--finish-->
    <div>
   <a  href="{{ route('home') }}"> Back</a>

</body>
</html>
