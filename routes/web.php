<?php

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

Route::get('/', 'HomeController@index');
Route::redirect('/home', url('/'),301);

Route::prefix('jobreport')->group(function(){
    Route::get('/', 'JobReportController@showForm')
        ->name('jobreport.show');

    Route::post('/post', 'JobReportController@post')
        ->name('jobreport.post');

    Route::get('/info/{id?}', 'JobReportController@showInfo')
        ->name('jobreport.info');
    Route::get('/list/{page?}', 'JobReportController@showList')
        ->name('jobreport.list');
    Route::get('/company/{company_id}/{page?}', 'JobReportController@list')
        ->name('jobreport.company');
});
Auth::routes();


