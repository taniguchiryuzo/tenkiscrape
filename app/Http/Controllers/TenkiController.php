<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TenkiController extends Controller
{
    public function tenki()
    {
        $tenkis = DB::select('select * from tenkisyousais');
        return $tenkis;
    }
}
