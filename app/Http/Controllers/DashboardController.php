<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Masuk;
use App\Models\Keluar;
use App\Models\User;

class DashboardController extends Controller
{
    //
    public function index(){
        $user = User::all();
        $totalCounts = $this->getTotalCounts();
        $data = [
            'user' => $user,
            'totalCounts' => $totalCounts
        ];
        return view('pages.dashboard', $data);
    }

    public function getTotalCounts(){
        $totalUsers = User::count();
        $totalBarang = Barang::count();
        $totalMasuk = Masuk::count();
        $totalKeluar = Keluar::count();
        $totalCounts = [
            'totalUsers' => $totalUsers,
            'totalBarang' => $totalBarang,
            'totalMasuk' => $totalMasuk,
            'totalKeluar' => $totalKeluar
        ];
        return $totalCounts;
    }
}
