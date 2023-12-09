<?php

namespace App\Http\Controllers;

use App\Models\Hutang;
use Illuminate\Http\Request;

class HutangController extends Controller
{
    public function create (Request $request) {

        $data = $request->validate([
            'notransaksi' => 'required',
            'kodespl' => 'required',
            'tglbeli' => 'required',
            'totalhutang' => 'required',
        ]);

        $newHutang = Hutang::create($data);

        return redirect(route('hutang.view'));
        
    }

}
