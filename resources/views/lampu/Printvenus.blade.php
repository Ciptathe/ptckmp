<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset= "UTF-8">
    <meta name= "viewport "content="widht=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static{
            position: relative;
            border:1px solid #543535;
        }
    </style>
    <title>  INFORMASI PEMASANGAN</title>
</head>
<body>
    <div >
        <h3 align="center">PT Cipta Karya Mustika Papua</h3>    
        <p align="center"><b>General Contractor</b></p>
        <p align="center"><b>-----------------------------------------------------------------------</b></p>
        <p align="center"><b>Data Pemasangan</b></p>
{{-- header---------- --}}
        <table align="center" rules="all" border="1px" style="width:96%;">
            <tr>
                <td>ID</td>
                            <td>Instansi</td>
                            <td>Lokasi</td>
                            <td>Jumlah</td>
                            <td>Keterangan</td>
                            <td>Bayar</td>
                            <td>Belum Bayar</td>
            </tr>
            @foreach($var_lampu as $key => $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->instansi}}</td>
                <td>{{$value->lokasi}}</td>
                <td>{{$value->jumlah}}</td>
                <td>{{$value->keterangan}}</td>
                <td>{{$value->bayar}}</td>
                <td>{{$value->belumbayar}}</td>
            
            </tr>
            @endforeach
            {{-- <p align="right"><b>Manokwari,...../...../.....</b></p> --}}
        </table>

        <p align="right"><b>Manokwari,...../...../.....</b></p>
        <p align="right"><b>Akbar Thegar</b></p>
        <p align="center"><b></b></p>
        <p align="center"><b></b></p>
        <p align="center"><b></b></p>
        <p align="center"><b></b></p>
        <p align="right"><b>Direktur Utama</b></p>
    </div>
</body>
</html>