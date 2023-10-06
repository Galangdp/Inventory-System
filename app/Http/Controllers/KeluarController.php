<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Keluar;

class KeluarController extends Controller
{
    //
    public function index(){
        $keluar = Keluar::all();
        $barang = Barang::all();

        $data = [
            'keluar' => $keluar,
            'barang' => $barang
        ];

        return view('pages.keluar.index', $data);
    }

    public function create(Request $request){
        $keluar = $request->all();
        Keluar::create($keluar);
        return redirect() -> route('keluar.index');
    }
    
    public function edit_view($id){
        $keluar = Keluar::find($id);

        $data = [
            'keluar' => $keluar
        ];

        return view('pages.keluar.edit-barang-keluar', $data);
    }

    public function update(Request $request, $id){
        $input = $request->all();
        $keluar = Keluar::find($id);
        $keluar->update($input);
        return redirect()->route('keluar.index');
    }

    public function detail($id){
        $keluar = Keluar::find($id);

        $data = [
            'keluar' => $keluar
        ];

        return view('pages.keluar.detail-barang-keluar', $data);
    }

    public function delete($id){
        $keluar = Keluar::find($id);
        $keluar->delete($id);
        return redirect()->route('keluar.index');
    }
}
