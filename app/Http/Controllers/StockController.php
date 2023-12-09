<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function create (Request $request) {

        $data = $request->validate([
            'kodebrg' => 'required',
            'qtybeli' => 'required',
        ]);

        $newStock = Stock::create($data);

        return redirect(route('stock.view'));
        
    }

}
