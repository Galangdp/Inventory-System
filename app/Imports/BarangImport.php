<?php

namespace App\Imports;

use App\Models\Barang;
// use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ToModel;

class BarangImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        // $tanggalMasuk = isset($row[13]) ? Carbon::createFromFormat('Y-m-d', $row[13]) : null;
        // $tanggalUpdate = isset($row[14]) ? Carbon::createFromFormat('Y-m-d', $row[14]) : null;

        // Pastikan 'nama_barang' dalam array $row tidak kosong
        if (empty($row[1])) {
            return null; // Data kosong, lewati penyimpanan
        }
    
        // dd($row);
        return new Barang([
            
            //
            // 'id' => $row['0'], // Ganti dengan nama kolom yang sesuai
            'nama_barang' => $row[1], // Ganti dengan nama kolom yang sesuai
            'kode_barang' => $row[2], // Ganti dengan nama kolom yang sesuai
            'type' => $row[3], // Ganti dengan nama kolom yang sesuai
            'brand' => $row[4], // Ganti dengan nama kolom yang sesuai
            'jumlah_barang' => $row[5], // Ganti dengan nama kolom yang sesuai
            'qty' => $row[6], // Ganti dengan nama kolom yang sesuai
            'price' => $row[7], // Ganti dengan nama kolom yang sesuai
            'disc' => $row[8], // Ganti dengan nama kolom yang sesuai
            'after_disc' => $row[9], // Ganti dengan nama kolom yang sesuai
            'total' => $row[10], // Ganti dengan nama kolom yang sesuai
            'rak' => $row[11], // Ganti dengan nama kolom yang sesuai
            'kondisi' => $row[12], // Ganti dengan nama kolom yang sesuai
            'ex_project' => $row[13], // Ganti dengan nama kolom yang sesuai
            'tanggal_masuk' => $row[14], // Ganti dengan nama kolom yang sesuai
            'tanggal_update' => $row[15], // Ganti dengan nama kolom yang sesuai
            // 'created_at' => $row[13], // Ganti dengan nama kolom yang sesuai
            // 'updated_at' => $row[14], // Ganti dengan nama kolom yang sesuai
            // 'created_at' => $tanggalMasuk, // Ganti dengan nama kolom yang sesuai
            // 'updated_at' => $tanggalUpdate, // Ganti dengan nama kolom yang sesuai
        ]);
    }

    // public function headings(): array
    // {
    //     return [
    //         'No',
    //         'Nama Barang', // Tambahkan kolom ini
    //         'Kode Barang',
    //         'Type',
    //         'Brand',
    //         'Qty',
    //         'Price',
    //         'Disc',
    //         'After Disc',
    //         'Total',
    //         'Rak',
    //         'Kondisi',
    //         'Ex Project',
    //         'Tanggal Masuk',
    //         'Tanggal Update',
    //     ];
    // }
}
