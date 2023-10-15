<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masuk;
use App\Models\Barang;

class MasukController extends Controller
{
    //
    public function index(){
        $masuk = Masuk::all();
        $barang = Barang::all();

        $data = [
            'masuk' => $masuk,
            'barang' => $barang
        ];

        return view('pages.masuk.index', $data);
    }

    public function create(Request $request){
        $masuk = $request->all();

        // Tambahkan jumlah_barang di tabel Barang saat barang masuk
        $barang = Barang::find($masuk['id_barang']);
        $barang->jumlah_barang += $masuk['jumlah_barang'];
        $barang->save();
        
        Masuk::create($masuk);
        return redirect() -> route('barang.index');
    }
    
    public function edit_view($id){
        $masuk = Masuk::find($id);
        $barang = Barang::all();

        $data = [
            'masuk' => $masuk,
            'barang' => $barang
        ];

        return view('pages.masuk.edit-barang-masuk', $data);
    }

    public function update(Request $request, $id){
        $input = $request->all();
        $masuk = Masuk::find($id);
        $masuk->update($input);
        return redirect()->route('barang.index');
    }

    public function detail($id){
        $masuk = Masuk::find($id);
        $barang = Barang::find($id);

        $data = [
            'masuk' => $masuk,
            'barang' => $barang
        ];

        return view('pages.masuk.detail-barang-masuk', $data);
    }

    public function delete($id){
        $masuk = Masuk::find($id);
        $masuk->delete($id);
        return redirect()->route('barang.index');
    }
}
