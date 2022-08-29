<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/json', function () {
    return Response()->json([
        'message' => 'Hello, Laravel!'
    ]);
});

//DATA ARRAY
Route::get('json2', function () {
    $DataArray = [
        'message' => 'Hello, Laravel2!'
    ];
    return Response()->json($DataArray, 404);
});

// DEBUG
Route::get('debug', function () {
    $DataArray = [
        'message' => 'Hello, Laravel2!'
    ];
    dd($DataArray);
});

// FUNGSI HELPER 
Route::get('debug_helper', function () {
    $DataArray = [
        'message' => 'Hello, Laravel2!'
    ];
    dd(request());
});

// DEBUG FORMAT LEBIH RAPI
Route::get('debug_helper2', function () {
    $DataArray = [
        'message' => 'Hello, Laravel2!'
    ];
    // d 3x
    ddd($DataArray);
});

// MEMBUAT DATA ARRAY UNTUK DI TAMPILKAN DI POSTMAN
$taskList = [
    'first' => 'Sleep',
    'two' => 'Eat',
    'three' => 'Work'
];

Route::get('/tasks', function() use($taskList) {
    return $taskList;
});

Route::get('/tasks/{param}', function($param) use ($taskList) {
    return $taskList[$param];
});
