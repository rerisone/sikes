<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index()
    {
        $warga = Warga::all();
        // dd($warga);
        return view('datawarga', compact('warga'));
    }

    public function store(Request $request)
    {
        Warga::create($request->except('_token','submit'));
        return redirect('datawarga');
    }
}
