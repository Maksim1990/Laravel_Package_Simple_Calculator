<?php

Route::get('calculator', function(){
    echo 'Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'Maksim_N\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Maksim_N\Calculator\CalculatorController@subtract');