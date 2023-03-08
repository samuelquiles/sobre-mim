<?php

use App\Http\Controllers\JogosController;
use Illuminate\Support\Facades\Route;


Route::get('/jogos', [JogosController::class, 'index']);

Route::get('/home', function () {
     return view('welcome');
})->name('home-index');

//Route::fallback(function () {
    //return "ERRO, CONSERTA ESSA ROTA LOGO!";
//});

// RETORNANDO O jogos,blade.php
// Route::view('/jogos', 'jogos');

//RETORNANDO POR FUNÇÃO
// Route::get('/jogos', function () {
// //     return "(LARAVEL DOS GURI)";
// // });

//RETORNANDO POR VARIAVEL
// Route::view('/jogos', 'jogos', ['name' => 'Samuel']);

//RETORNO MAIS DINAMICO
// Route::get('/jogos/{name}', function($name){
//     return view('jogos', ['nomeJogo'=>$name]);
// });

//RETORNO MAIS DINAMICO SEM OBRIGAÇÃO DO /
// Route::get('/jogos/{name?}', function($name = true){
//      return view('jogos', ['nomeJogo'=>$name]);
// });
//OBRIGANDO A ROTA SER ALFABETICA APENAS
//   Route::get('/jogos/{name?}', function($name = true){
//      return view('jogos', ['nomeJogo'=>$name]);
// })->where('name', '[A-Za-z]+');

//OBRIGANDO A ROTA SER APENAS NUMERICA
// Route::get('/jogos/{name?}', function($name = true){
//      return view('jogos', ['nomeJogo'=>$name]);
// })->where('name', '[1-9-0]+');

//OBRIGANDO A ACHA SÓ COM UMA LETRA MAIUSCULA E UM NUMERO
// Route::get('/jogos/{name?}', function($name = true){
//      return view('jogos', ['nomeJogo'=>$name]);
// })->where('name', '[A-Z-1-9]+');

// Route::get('/jogos/{id?}/{nome?}', function($id = null, $nome = true){
//     return view('jogos', ['idJogo'=>$id, 'nomeJogo' => $nome]);
// })->where(['id', '[1-9]+', 'nome' => '[a-z]+']);
?>