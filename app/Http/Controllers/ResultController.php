<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;


class ResultController extends Controller
{
    public static function index()
    {
        return view('result',[
            'title' => 'Result',
            'active' => 'result',
            'data' => session('result')
        ]);
    }
}
