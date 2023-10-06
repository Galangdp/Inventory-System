<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Masuk;

class BarangController extends Controller
{
    //

    public function index(){

        $barang = Barang::all();
        $masuk = Masuk::all();

        $data = [
            'barang' => $barang,
            'masuk' => $masuk
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
        
}
