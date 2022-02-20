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

            <h1> Lampu bertipe {{$var_lampu->kategori}}</h1>
            <div class= "jumbotron text-center">
                <h2>{{ $var_lampu->kategori}}</h2>
                <p>
                <strong>Jumlah:</strong>{{$var_lampu->jumlah}}<br>
                <strong>Keterangan:</strong>{{$var_lampu->keterangan}}<br>
                <strong>tanggal:</strong>{{$var_lampu->tanggal}}<br>
                <strong>status:</strong>{{$var_lampu->status}}<br>
                </p>   
            </div>
            <a href="/deletedata/{{ $var_lampu->id }}" class="btn btn-danger">Hapus Data</a>

        </div>
    </body>


</html>


