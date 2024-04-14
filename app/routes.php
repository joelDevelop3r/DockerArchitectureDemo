<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tables', function () {
    $tables = DB::select('SHOW TABLES');
    return view('tables', ['tables' => $tables]);
});