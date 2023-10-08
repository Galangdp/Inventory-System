<?php

namespace App\Imports;

use App\Models\Masuk;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
// use Maatwebsite\Excel\Concerns\RemembersRowNumber;

class MasukImport implements ToModel, WithHeadingRow
{
    // use RemembersRowNumber;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // $currentRowNumber = $this->getRowNumber();

        $created_at = !empty($row['Tanggal Masuk']) ? Carbon::createFromFormat('Y-m-d', $row['Tanggal Masuk'])->format('Y-m-d') : null;
    $updated_at = !empty($row['Tanggal Update']) ? Carbon::createFromFormat('Y-m-d', $row['Tanggal Update'])->format('Y-m-d') : null;

        dd($row);

        return new Masuk([
            'id_barang' => $row['nama_barang'], // Ganti dengan nama kolom yang sesuai
            'qty' => $row['qty'], // Ganti dengan nama kolom yang sesuai
            'keterangan' => $row['keterangan'], // Ganti dengan nama kolom yang sesuai
            'created_at' => $created_at,
            'updated_at' => $updated_at,
        ]);
    }
}
