<?php

Route::get('/', 'WelcomeController@index');
Route::get('sobre', function(){
	return view('about');
});
Route::get('info', function() {
	phpinfo();
});

Route::get('indicador/{indicador}', 'IndicadorController@show')
	->where('indicador', '[A-Za-z]+');

Route::get('api/{indicador}', 'IndicadorController@api')
	->where('indicador', '[A-Za-z]+');

Route::get('indicador/{indicador}/json', 'IndicadorController@api')
	->where('indicador', '[A-Za-z]+');