<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelayananController extends Controller
{
    public function index()
    {
        $data = DB::select('select * from t_pelayanan');
        return view('pelayanan', ['data' => $data]);
    }
}
