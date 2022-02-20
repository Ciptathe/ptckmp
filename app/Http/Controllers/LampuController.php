<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venus;
use App\Exports\Lampuexport;
use App\Imports\Lampuimport;
use Maatwebsite\Excel\facades\excel;
use Illuminate\Support\Facades\File;
use PDF;

class LampuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexfungsilampu()
    {
        $var_lampu = Venus::all();
        // $venus = Venus::paginate(20);
        
        return view('lampu.Indexvenus', ['var_lampu' => $var_lampu]);
    }
    public function cetakpdf()
    {   
        $var_lampu = Venus::all();
        // return view('venus.printvenus', ['venus' => $venus]);
        $pdf = PDF::loadview('lampu.Printvenus',['var_lampu' => $var_lampu])->setOptions(['defaultFont'=> 'sans-serif']);
        return $pdf->download('Report_Venus_SEKIDO.pdf');
    }
    public function  cetakvenusexcel()
    {   
        return Excel::download(new Lampuexport, 'LampuVenus.xlsx');
    }
    public function  importlampuexcel(Request $request)
    {   $data = $request->file('file');
        // 'file' ini memanggil tombol modal yang ada di indexrab html
        $namafile = $data->getClientOriginalName();
        $data->move('LampuVenus', $namafile);
        // Lampuvenus merupakan deklarasi nama baru
        Excel::import(new Lampuimport,\public_path('/LampuVenus/'.$namafile));
        return redirect('indexlampu');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fungsicreatevenus()
    {
        return view('lampu.Createvenus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $var_lampu  = new Venus();
        // $var_lampu  -> instansi = $request->instansi;
        // $var_lampu  -> lokasi = $request->lokasi;
        // $var_lampu  -> jumlah = $request->jumlah;
        // $var_lampu  -> keterangan = $request->keterangan;
        // $var_lampu  -> bayar = $request->bayar;
        // $var_lampu  -> belumbayar = $request->belumbayar;
        // $var_lampu  -> save();
        // return redirect('indexlampu');
// YANG DIATAS ADALAH CARA LAMA 

        $var_lampu = Venus::create($request->all());

        if($request->hasFile('foto')){
            $request->file('foto')->move('fotolampu/',$request->file('foto')->getClientOriginalName());
            $var_lampu->foto = $request->file('foto')->getClientOriginalName();
            $var_lampu-> save();
        }
        return redirect()->route('indexfungsilampu')->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function fungsishow($id)
    {
        $var_lampu  = Venus::find($id);
        return view('lampu.Detailvenus', ['var_lampu'=> $var_lampu]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function fungsieditvenus($id)
    {
       $var_lampu = Venus::where('id', $id)->first();

        return view('lampu.Editvenus', ['var_lampu'=> $var_lampu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function fungsiupdatevenus(Request $request, $id)
    {
        
        $var_lampu = Venus::find($id);
        $var_lampu  -> instansi = $request->instansi;
        $var_lampu  -> lokasi = $request->lokasi;
        $var_lampu  -> jumlah = $request->jumlah;
        $var_lampu  -> keterangan = $request->keterangan;
        $var_lampu  -> bayar = $request->bayar;
        $var_lampu  -> belumbayar = $request->belumbayar;
        if($request->hasFile('foto'))
        {
            $destination = 'fotolampu'.$var_lampu->foto;
            // fotorab adalah tempat penyimpanan baru di folder public pada project
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file= $request->file('foto');
            $extention =$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('fotolampu/',$filename);
            $var_lampu->foto = $filename;
            
        }
        $var_lampu -> update();

        
        return redirect()->route('indexfungsilampu')->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function fungsideletelampu($id)
    {
        // Rab::find($id)->delete();    
        // return redirect('indexrab')->route('fungsidestroyrab')->withStatus('success','Data Berhasil Dihapus');
        $var_lampu = Venus::find($id);
        $var_lampu->delete();    
        return redirect()->route('indexfungsilampu')->with('success','Data Berhasil Dihapus');

    }
}