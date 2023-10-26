<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('student', function(){
    $students=[
        1 =>[
            "nim" => "2738471341",
            "nama" => "Anton"
        ],
        2 =>[
            "nim" => "2341234",
            "nama" => "Budi"
        ],
        3 =>[
            "nim" => "12341234",
            "nama" => "Wawan"
        ],
    ];

    return view('student.index', ['students' => $students]);
});

Route::get('student/{nim}', function($nim=0){
    $student_detail = [
        '1111' => [
            'ipk' => 3.22,
            'faculty' => "Teknik Informatika"
        ],
        '222' => [
            'ipk' => 3.55,
            'faculty' => "Teknik lingkungan"
        ],
        '333' => [
            'ipk' => 3.55,
            'faculty' => "Teknik mesin"
        ],
    ];
    return view("student.detail", ["student detail" => $student_detail]);
})->name("student.detail");