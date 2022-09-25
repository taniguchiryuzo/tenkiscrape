<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tenkisyousai;

class testController extends Controller
{
    public function index()
    {
        // $memberList = [
        //     ['id' => 1, 'name' => 'hoge'],
        //     ['id' => 2, 'name' => 'fuga'],
        //     ['id' => 3, 'name' => 'piyo'],
        // ];
        // return $memberList;

        $tenkisyousais = new tenkisyousai();
        $tenkiList = $tenkisyousais->get();
        return $tenkiList;
    }
}
