<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {
        $nome = 'Samuel';
        return view('jogos.index', ['nome'=>$nome]);
    }
}
?>