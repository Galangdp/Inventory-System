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
        Masuk::create($masuk);
        return redirect() -> route('masuk.index');
    }
    
    public function edit_view($id){
        $masuk = Masuk::find($id);

        $data = [
            'masuk' => $masuk
        ];

        return view('pages.masuk.edit-barang-masuk', $data);
    }

    public function update(Request $request, $id){
        $input = $request->all();
        $masuk = Masuk::find($id);
        $masuk->update($input);
        return redirect()->route('masuk.index');
    }

    public function detail($id){
        $masuk = Masuk::find($id);

        $data = [
            'masuk' => $masuk
        ];

        return view('pages.masuk.detail-barang-masuk', $data);
    }

    public function delete($id){
        $masuk = Masuk::find($id);
        $masuk->delete($id);
        return redirect()->route('masuk.index');
    }
}
