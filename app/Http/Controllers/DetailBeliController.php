<?php

namespace App\Http\Controllers;

use App\Models\DetailBeli;
use Illuminate\Http\Request;

class DBeliController extends Controller
{
    public function create (Request $request) {

        $data = $request->validate([
            'notransaksi' => 'required',
            'kodebrg' => 'required',
            'hargabeli' => 'required',
            'qty' => 'required',
            'diskon' => 'required',
            'diskonrp' => 'required',
            'totalrp' => 'required',
        ]);

        $newDetailBeli = DetailBeli::create($data);

        return redirect(route('dbeli.view'));
        
    }

}
