<?php

namespace App\Http\Controllers;

use App\Models\HargaBeli;
use Illuminate\Http\Request;

class HBeliController extends Controller
{
    public function create (Request $request) {

        $data = $request->validate([
            'notransaksi' => 'required',
            'kodespl' => 'required',
            'tglbeli' => 'required',
        ]);

        $newHargaBeli = HargaBeli::create($data);

        return redirect(route('pembelian.view'));
        
    }

}
