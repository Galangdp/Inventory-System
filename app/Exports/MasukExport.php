<?php

namespace App\Exports;

use App\Models\Masuk;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MasukExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            'No',
            'Nama Barang', // Tambahkan kolom ini
            'Qty',
            'Keterangan',
            'Tanggal Masuk',
            'Tanggal Update',
        ];
    }

    public function collection()
    {
        $counter = 1;

        return Masuk::all()->map(function ($row) use (&$counter) {
            return [
                'No' => $counter++,
                'Nama Barang' => $row->barang->nama_barang, // Mengakses nama barang dari relasi
                'Qty' => $row->qty,
                'Keterangan' => $row->keterangan,
                'Tanggal Masuk' => $row->created_at,
                'Tanggal Update' => $row->updated_at,
            ];
        });
    }
}
