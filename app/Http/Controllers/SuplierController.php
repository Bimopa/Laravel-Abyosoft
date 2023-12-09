<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller
{
    public function create (Request $request) {

        $data = $request->validate([
            'kodespl' => 'required',
            'namaspl' => 'required',
        ]);

        $newSuplier = Suplier::create($data);

        return redirect(route('suplier.view'));
        
    }

}
