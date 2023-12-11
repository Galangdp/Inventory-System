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
        $barang->total += $masuk['total'];
        $barang->save();
        
        Masuk::create($masuk);
        return redirect() -> route('barang.index');
    }

    // private function rupiah($angka){
	
    //     $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
    //     return $hasil_rupiah;
     
    // }

    // public function create(Request $request){
    //     $masuk = $request->all();

    //     // Tambahkan jumlah_barang di tabel Barang saat barang masuk
    //     $barang = Barang::find($masuk['id_barang']);
    //     $totalBarang = $barang->jumlah_barang += $masuk['jumlah_barang'];
    //     $after_disc = $barang->after_disc;

    //     $this->convertCurrencyToInteger($barang['after_disc']);
        
    //     $total = $totalBarang  *= $after_disc;

    //     $barang->total = "Rp " . number_format($total,2,',','.');
    //     $barang->save();
        
    //     Masuk::create($masuk);
    //     return redirect() -> route('barang.index');
    // }
    
    // public function create(Request $request){

    // $masuk = $request->all();

    // // Tambahkan jumlah_barang di tabel Barang saat barang masuk
    // $barang = Barang::find($masuk['id_barang']);
    // $barang->jumlah_barang += $masuk['jumlah_barang'];

    // // Konversi string total ke integer
    // $totalMasuk = $this->convertCurrencyToInteger($masuk['total']);

    // // Simpan total barang yang sudah diupdate
    // $barang->total += "Rp " . number_format($totalMasuk,2,',','.');
    // $barang->save();

    // // Simpan data masuk
    // Masuk::create($masuk);
    
    // return redirect()->route('barang.index');

    // $masuk = $request->all();

    // // Tambahkan jumlah_barang di tabel Barang saat barang masuk
    // $barang = Barang::find($masuk['id_barang']);
    // $barang->jumlah_barang += $masuk['jumlah_barang'];

    // // Konversi string total ke integer
    // $totalMasuk = $this->convertCurrencyToInteger($masuk['total']);
    
    // // Ambil total barang dan konversi ke integer jika belum
    // $totalBarang = $barang->total;

    // // Tambahkan total masuk ke total barang
    // $totalBarang += $totalMasuk;

    // // Simpan total barang yang sudah diupdate
    // $barang->total = $totalBarang;
    // $barang->save();

    // // Simpan data masuk
    // Masuk::create($masuk);
    
    // return redirect()->route('barang.index');
// }
    
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
