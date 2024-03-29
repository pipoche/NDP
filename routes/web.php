<?php

use App\Http\Controllers\EmployesController;
use App\Http\Controllers\NdpController;
use App\Http\Controllers\DechargeController;
use App\Http\Controllers\EcartController;
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

Route::get('/Ecart' , [EcartController::class , 'index'])->name('homeecart');
Route::get('/Ecart/voirecart/{maree}','EcartController@view' )->name('viewecart');

Route::get('/Ecart/calcule', [EcartController::class,'calcule_ecart'])->name('ecartcalcule');



//decharge routes

Route::get('/DECH', [DechargeController::class,'index'])->name("homedech");
Route::get('/DECH/insert',function(){
    return view('DECH.insertdech');
});
Route::get('/DECH/insert', function() {
    return view('DECH.insertdech');
})->name("insdech");
Route::get('/DECH/view/{maree}', 'DechargeController@view')->name('viewdecharge');
Route::post('/DECH/SEND', 'DechargeController@store')->name('storeDech');


//export routes
Route::get('/Export', [ExportController::class , 'index'])->name('exportpage');
Route::get('/Export/newexport',function(){
    return view('Export.newexport');
})->name('firstform');
Route::post('/Export/newexport/SEND', 'ExportController@store')->name('exportstore');
Route::get('/Export/voirexport/{numexport}', 'ExportController@view')->name('viewexport');
/*Route::get('/Export/newexport/2',function(){
    return view('Export.newexport3');
})->name('nextpage');
*/



//ndp routes

Route::get('/', [NdpController::class,'index']);

Route::get('/NDP', [NdpController::class,'index'])->name("homendp");

Route::get('/NDP/insert', function() {
    return view('NDP.insertndp');
})->name("insndp");

Route::get('/NDP/view/{maree}', 'NdpController@view')->name('viewNDP');

Route::post('/NDP/TEST/SEND', 'NdpController@store')->name('storedata');

Route::get('/genratepdf/{maree}','NdpController@generatepdf')->name('generatepdf');




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