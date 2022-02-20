<!DOCTYPE html>
<html>

<head>
    <title>Input Data PJU</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>

    <body>
        <div class = "container">

        <nav class="navbar navbar-inverse">
                <div class= "navbar-header">
                <a class= "navbar-brand" href="{{ URL::to('venus') }}">PT CIPTA KARYA MUSTIKA PAPUA</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('indexlampu')}}">Semua Data</a></li>
                    <li><a href="{{ URL::to('create')}}"> Input Pemasangan</a>
                </ul>
            </nav>

            <h1> Pekerjaan {{$var_rab->uraian_pekerjaan}}</h1>
            <div class= "jumbotron text-center">
                <h2>{{ $var_rab->uraian_pekerjaan}}</h2>
                <p>
                <strong>Jumlah:</strong>{{$var_rab->jumlah}}<br>
                <strong>Keterangan:</strong>{{$var_rab->satuan}}<br>
                <strong>tanggal:</strong>{{$var_rab->tanggal}}<br>
                <strong>status:</strong>{{$var_rab->status}}<br>
                </p>   
            </div>
            <a href="/deletedata/{{ $var_rab->id }}" class="btn btn-danger">Hapus Data</a>

        </div>
    </body>


</html>


