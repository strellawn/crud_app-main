<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/HelloWorld', function () {
    return view('HelloWorld');
});

Route::get('/home', function () {
    return view('Home');
});

Route::get('/listar-pedidos', function () {
    return view('ListarPedidos');
});

Route::get('/cadastrar', function () {
    return view('Cadastrar');
});

Route::get('/meu-perfil', function () {
    return view('MeuPerfil');
});

Route::get('/sair', function () {
    return view('Welcome');
});

Route::get('/listar-produtos', function () {
    return view('ListarProdutos');
});