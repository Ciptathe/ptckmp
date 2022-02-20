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
        <p align="center"><b>RENCANA ANGGARAN BIAYA (RAB) | HARGA PERKIRAAN SENDIRI</b></p>
        <p align="center"><b>-----------------------------------------------------------------------</b></p>
        
        {{-- header---------- --}}
        <table align="center" rules="all" border="1px" style="width:96%;">
            <tr>
            
            <td>no</td>
            <td>uraian_pekerjaan</td>
            <td>satuan</td>
            <td>volume</td>
            <td>harga_satuan</td>
            <td>jumlah</td>
            </tr>
            @foreach($var_rab as $key => $value)
            <tr>
            <td>{{$value->no}}</td>
            <td>{{$value->uraian_pekerjaan}}</td>
            <td>{{$value->satuan}}</td>
            <td>{{$value->volume}}</td>
            <td>{{$value->harga_satuan}}</td>
            <td>{{$value->jumlah}}</td>

            
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