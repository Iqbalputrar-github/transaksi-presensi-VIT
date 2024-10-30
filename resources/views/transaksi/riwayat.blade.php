<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
        <title>RIWAYAT TRANSAKSI</title>
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
    <center><h2  style="color:white;"> RIWAYAT TRANSAKSI </h2></center>
    </div><br>
    
    </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    
    <form method="GET">
        <div class="pull-right mb-2">
            <label class="col-mb-2 col-form-label" style="color:white;">
                Cari Data 
            </label>
        <div class="col-mb-2">
            <input type="text" name="cari" id="cari" class="form-control" 
            placeholder="Cari Data Berdasarkan Nama Pelanggan / Jenis Barang"
            autofocus="true" value="{{$cari}}"><br>
       

        <a href="/printpdf" class="btn btn-primary" target="_blank">CETAK PDF</a><br><br>

    <table class="table table-bordered" style="background: white"> 
        <tr>   
            <th>@sortablelink('id','ID')</th>
            <th>@sortablelink('nm_pelanggan','Nama Pelanggan')</th>
            <th>@sortablelink('tanggal','Tanggal')</th>
            <th>@sortablelink('alamat','Alamat')</th>
            <th>@sortablelink('jenis_barang','Jenis Barang')</th>
            <th>@sortablelink('harga','Harga')</th>
            <th>@sortablelink('jumlah','Jumlah Barang')</th>
            <th>@sortablelink('total_harga','Total Harga')</th>
            <th width="280px">Action</th>
        </tr>

    @foreach ($transaksi as $t)
        <tr>
            <td>{{ $t->id}}</td>
            <td>{{ $t->nm_pelanggan }}</td>
            <td>{{ $t->tanggal }}</td>
            <td>{{ $t->alamat }}</td>
            <td>{{ $t->jenis_barang }}</td>
            <td>{{ $t->harga }}</td>
            <td>{{ $t->jumlah }}</td>
            <td>{{ $t->total_harga }}</td>
            <td>
                <form action="{{ route('transaksi.destroy',$t->id) }}" method="Post">
                <a class="btn btn-success" href="{{ route('transaksi.edit',$t->id) }}"> UPDATE </a>
    @csrf
    @method('DELETE')
            <button type="submit" class="btn btn-danger">DELETE</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>

    <!--fitur pagination-->
    <!-- {{ $transaksi->links() }} -->
    {!! $transaksi->appends(Request::except('page'))->render() !!}
    <!--finish-->
    <div>
   <a  href="{{ route('home') }}"> Back</a>
</div>
</body>
</html>
