<?php

use App\Http\Controllers\VaccineController;
use App\Http\Controllers\PasienController;
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
    return view('home', [
        "title" => "Home"
    ]);
});

// Route::get('/pasien', function () {
//     return view('pasien/patient', [
//         "title" => "Pasien"
//     ]);
// });

// Route::get('/registerpatient', [PasienController::class, 'register']);
Route::get('/pasien/register', [PasienController::class, 'regis']);
Route::get('/pasien/create{$id}', [PasienController::class, 'create']);
// Route::get('/pasien/register', [PasienController::class, 'create']);

Route::resource("vaksin", VaccineController::class);
Route::resource("pasen", PasienController::class);



