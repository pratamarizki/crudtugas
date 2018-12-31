<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;

class CariController extends Controller
{
    //
    public function search(Request $request)
    {
        $query = $request->get('q');
        $hasil = Crud::where('judul', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('pencarian.result', compact('hasil', 'query'));
    }
}
