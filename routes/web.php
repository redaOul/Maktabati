<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

use App\Http\Controllers\loginControllers;
use App\Http\Controllers\AccueilControllers;
use App\Http\Controllers\DashboardControllers;
use App\Http\Controllers\sessionControllers;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/


// Login routes
Route::get('/', function () {
    if (Session::has('userID')) {
        switch (Session::get('userType')) {
            case 'adherent':
                return redirect('/Accueil');
                break;
            case 'bibliothecaire':
                return redirect('/Dashboard');
                break;
        }
    } else {
        return view('login');
    }
});
Route::post('/controllers/login', [loginControllers::class, 'auth']);
Route::post('/controllers/logout', [sessionControllers::class, 'destroySeesion']);


// Accueil routes
Route::get('/Accueil', function () {
    if ((Session::has('userID')) && (Session::get('userType') == 'adherent')) return (new AccueilControllers)->loadPageData();
    else return redirect('/');
});

Route::get('/controllers/Accueil/reserveBook/{bookId}', [AccueilControllers::class, 'reserveBook']);
Route::get('/controllers/Accueil/searchBookByName', [AccueilControllers::class, 'searchBookByName']);
Route::get('/controllers/Accueil/searchBookByNameLink/{bookName}', [AccueilControllers::class, 'searchBookByName']);
Route::get('/controllers/Accueil/searchBookByCategorie/{categorieId}', [AccueilControllers::class, 'searchBookByCategorieMeth1']);
Route::get('/controllers/Accueil/searchBookByCategorie', [AccueilControllers::class, 'searchBookByCategorieMeth2']);

// Dashboard routes
Route::get('/Dashboard', function () {
    if ((Session::has('userID')) && (Session::get('userType') == 'bibliothecaire')) return (new DashboardControllers)->loadPageData();
    else return redirect('/');
});
Route::get('/controllers/Dashboard/cancelBookReservation/{bookId}/{reservationID}', [DashboardControllers::class, 'cancelBookReservation']);
Route::post('/controllers/Dashboard/addBook', [DashboardControllers::class, 'addBook']);
Route::post('/controllers/Dashboard/addCategorie', [DashboardControllers::class, 'addCategorie']);
Route::get('/controllers/Dashboard/deleteBook/{bookId}', [DashboardControllers::class, 'deleteBook']);




Route::get('/dsf', function (){
    return view('exploreBooks');
});