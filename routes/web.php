<?php

use App\Http\Controllers\EmployesController;
use App\Http\Controllers\NdpController;
use App\Http\Controllers\DechargeController;
use App\Http\Controllers\EcartController;
use App\Http\Controllers\Email;
use App\Http\Controllers\ExportController;
use App\Models\Decharge;
use Dompdf\Dompdf;
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



//ecart routes

Route::get('/', function(){
    return view('templates.index');
})->name('home');
Route::post('/contact', [Email::class, 'submit'])->name('sendcontact');


Route::get('wizard', function () {
    return view('default');
}); 

/*Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    Route::resource('employes', 'EmployesController');
    Route::get('employes/{id}/certificate', 'EmployesController@getWorkCertificate')
        ->name('work.certificate');
    Route::get('employes/{id}/vacation', 'EmployesController@vacationRequest')
        ->name('work.vacation');
        Route::resource('employes', 'EmployesController');

Route::get('employes/{id}/certificate', 'EmployesController@getWorkCertificate')
    ->name('work.certificate');
Route::get('employes/{id}/vacation', 'EmployesController@vacationRequest')
    ->name('work.vacation');
});
*/

Route::prefix('admin')->middleware('auth')->group(function () {
    /*Route::get('/home', function () {
        return view('home');
    })->name('home');
    Route::resource('employes', 'EmployesController');
    Route::get('employes/{id}/certificate', 'EmployesController@getWorkCertificate')
        ->name('work.certificate');
    Route::get('employes/{id}/vacation', 'EmployesController@vacationRequest')
        ->name('work.vacation');
        Route::resource('employes', 'EmployesController');
        
Route::get('employes/{id}/certificate', 'EmployesController@getWorkCertificate')
    ->name('work.certificate');
Route::get('employes/{id}/vacation', 'EmployesController@vacationRequest')
    ->name('work.vacation'); */
 
});



