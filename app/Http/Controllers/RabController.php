<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rab;
use Maatwebsite\Excel\facades\excel;
use App\Exports\Rabexport;
use App\Imports\Rabimport;
use Illuminate\Support\Facades\File;
use PDF;

class RabController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexfungsirab()
    {
        $var_rab = Rab::all();
        // $Rab = Rab::paginate(20);
        
        return view('rab.Indexrab', ['var_rab' => $var_rab]);
    }
    public function cetakrabpdf()
    {   
        $var_rab = Rab::all();
        // return view('Rab.printRab', ['Rab' => $Rab]);
        $pdf = PDF::loadview('rab.Printrab',['var_rab' => $var_rab])->setOptions(['defaultFont'=> 'sans-serif']);
        return $pdf->download('Report_Rab_Lampu.pdf');
    }

    public function  cetakrabexcel()
    {   
        return Excel::download(new Rabexport, 'RabVenus.xlsx');
    }

    public function  importrabexcel(Request $request)
    {   $data = $request->file('file');
        // 'file' ini memanggil tombol modal yang ada di indexrab html
        $namafile = $data->getClientOriginalName();
        $data->move('RabVenus', $namafile);
        // Rabvenus merupakan deklarasi nama baru
        Excel::import(new Rabimport,\public_path('/RabVenus/'.$namafile));
        return redirect('indexrab');
    }

 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fungsicreaterab()
    {
        return view('rab.Createrab');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storerab(Request $request)
    {   
        // Cara Lama
        // $var_rab  = new Rab();
        // $var_rab  -> no = $request->no;
        // $var_rab  -> uraian_pekerjaan = $request->uraian_pekerjaan;
        // $var_rab  -> satuan = $request->satuan;
        // $var_rab  -> volume = $request->volume;
        // $var_rab  -> harga_satuan = $request->harga_satuan;
        // $var_rab  -> jumlah = $request->jumlah;
        // $var_rab  -> save();

        // Cara Baru
        $var_rab = Rab::create($request->all());

        if($request->hasFile('foto')){
            $request->file('foto')->move('fotorab/',$request->file('foto')->getClientOriginalName());
            $var_rab->foto = $request->file('foto')->getClientOriginalName();
            $var_rab-> save();
        }

        // return redirect('indexrab')->with('success','Data Berhasil Dihapus');
        return redirect()->route('indexfungsirab')->with('success','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function fungsishowrab($id)
    {
        $var_rab  = Rab::find($id);
        return view('rab.Detailrab', ['var_rab'=> $var_rab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function fungsieditrab($id)
    {
       $var_rab = Rab::where('id', $id)->first();

        return view('rab.Editrab', ['var_rab'=> $var_rab]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function fungsiupdaterab(Request $request, $id)
    {
        
        $var_rab = Rab::find($id);
        $var_rab  -> no = $request->no;
        $var_rab  -> uraian_pekerjaan = $request->uraian_pekerjaan;
        $var_rab  -> satuan = $request->satuan;
        $var_rab  -> volume = $request->volume;
        $var_rab  -> harga_satuan = $request->harga_satuan;
        $var_rab  -> jumlah = $request->jumlah;
        
        if($request->hasFile('foto'))
        {
            $destination = 'fotorab'.$var_rab->foto;
            // fotorab adalah tempat penyimpanan baru di folder public pada project
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file= $request->file('foto');
            $extention =$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('fotorab/',$filename);
            $var_rab->foto = $filename;
            
        }
        $var_rab -> update();

        
        return redirect()->route('indexfungsirab')->with('success','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // Rab::find($id)->delete();    
        // return redirect('indexrab')->route('fungsidestroyrab')->withStatus('success','Data Berhasil Dihapus');
        $var_rab = Rab::find($id);
        $var_rab->delete();    
        return redirect()->route('indexfungsirab')->with('success','Data Berhasil Dihapus');

    }
}
