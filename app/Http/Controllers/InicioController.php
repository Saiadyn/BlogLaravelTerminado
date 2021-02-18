<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{
    public function __invoke(){
        $entradas = DB::table('entradas')->select('entradas.*')->orderBy('id','DESC')->get();

        return view('index',array('entradas' => $entradas));
    }
}