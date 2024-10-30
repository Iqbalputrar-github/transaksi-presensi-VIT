<!DOCTYPE html>
    <html lang="id">
        <head>
            <meta charset="UTF-8">
                 <title>Data Barang</title>
                <link rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
        </head>
    <body>
        <div class="container mt-2">
        <div class="row">
        <div class="col-lg-12 margin-tb">
         <div class="pull-left">
         <h2> Data Barang</h2>
        </div>
        <div class="pull-right mb-2">
         <a class="btn btn-success" href="{{ route('barang.create') }}"> Tambah Data</a>
         </div>
        </div>
         </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
         <p>{{ $message }}</p>
          </div>
         @endif

    <table class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Jenis Barang</th>
            <th>Jumlah Barang</th>
            <th>Harga Barang</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($barang as $b)
        <tr>
            <td>{{ $b->id }}</td>
            <td>{{ $b->jenis_barang}}</td>
            <td>{{ $b->jumlah_barang }}</td>
            <td>{{ $b->harga_barang }}</td>
            
            <td>
                    <form action="{{ route('perusahaan.destroy',$b->id) }}" method="Post">
                    <a class="btn btn-primary" href="{{ route('barang.edit',$b->id) }}">Edit</a>
                    @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
        </tr>
    @endforeach
     </table>
    </body>
</html>