<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Masuk;
use App\Models\Keluar;
use App\Exports\MasukExport;
use App\Imports\MasukImport;
use App\Imports\BarangImport;
use Maatwebsite\Excel\Facades\Excel;

class BarangController extends Controller
{
    //

    public function index(){

        $barang = Barang::all();
        $masuk = Masuk::all();
        $keluar = Keluar::all();

        $data = [
            'barang' => $barang,
            'masuk' => $masuk,
            'keluar' => $keluar
        ];
        return view('pages.barang.index', $data);
    }

    public function add_view(){
        $barang = Barang::all();

        $data = [
            'barang' => $barang
        ];
        return view('pages.barang.add-barang', $data);
    }

    public function create(Request $request){
        $input = $request->all();
        Barang::create($input);
        return redirect()->route('barang.index');
    }

    public function edit_view($id){
        $barang = Barang::find($id);

        $data = [
            'barang' => $barang
        ];

        return view('pages.barang.edit-barang', $data);
    }

    public function update(Request $request, $id){
        $input = $request->all();
        $barang = Barang::find($id);
        $barang->update($input);
        return redirect()->route('barang.index');
    }

    public function delete($id){
        $barang = Barang::find($id);
        $barang->delete($id);
        return redirect()->route('barang.index');
    }

    public function detail($id){
        $barang = Barang::find($id);

        $data = [
            'barang' => $barang
        ];

        return view('pages.barang.detail-barang', $data);
    }

    public function masuk_export(){
        return Excel::download(new MasukExport, 'Masuk.xlsx');
    }

    public function masuk_import(Request $request){
        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $file->move('BarangMasuk', $nama_file);

        Excel::import(new MasukImport, public_path('/BarangMasuk/'.$nama_file));
        return redirect()->route('barang.index');
    }

    public function barang_import(Request $request){
        $file = $request->file('file');
        $nama_file = $file->getClientOriginalName();
        $file->move('Barang', $nama_file);

        Excel::import(new BarangImport, public_path('/Barang/'.$nama_file));
        return redirect()->route('barang.index');
    }
}