<?php

Route::get('/usuarios', 'UsuarioController@lista');

//Route::get('/teste', function(){
//echo 'Exibindo a URL: '.Config::get('app.urls'). '<br /> Para a environment: '.app()->environment();
//});