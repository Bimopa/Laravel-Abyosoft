<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function create (Request $request) {

        $data = $request->validate([
            'kodebrg' => 'required',
            'namabrg' => 'required',
            'satuan' => 'required',
            'hargabeli' => 'required',
        ]);

        $newBarang = Barang::create($data);

        return redirect(route('barang.view'));
        
    }

}
