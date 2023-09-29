<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    //

    public function index(){

        $barang = Barang::all();

        $data = [
            'barang' => $barang
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

        return view('pages.barang.edit', $data);
    }

    public function update(Request $request, $id){
        $input = $request->all();
        $barang = Barang::find($id);
        $barang->update($input);
        return redirect()->route('barang.index');
    }

    public function destroy($id){
        $barang = Barang::find($id);
        $barang->delete();
        return redirect()->route('barang.index');
    }
        
}