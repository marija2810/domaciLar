<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\API\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//javni 
Route::apiResources([
    'writers'=>WriterController::class,
    'genres'=>GenreController::class
]);

Route::get('/genres/search/{value}', [GenreController::class, 'search']);

////////////////////////////////////////////////////////////////////////////////////
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);



//zasticeni 

Route::group(['middleware' => ['auth:sanctum']], function () {
   // Route::post('/genre',[GenreController::class, 'store']);

   Route::post('/logout', [AuthController::class, 'logout']);
});
/*

GET  /api/writers - vrati sve pisce iz baze (json format) - index iz WriterController - a
GET /api/writers/{id} - vrati pisca sa zadatim id - jem - show metoda
POST /api/writers - kreiraj pisca na osnovu tela zahteva - store
PUT/PATCH /api/writers/{id} - izmeni pisca sa datim id -jem podacima koji se nalaze u telu zahteva - update
DELETE /api/writers/{id} obrisi pisca sa zadatim id - jem - destroy
GET /api/genres/{value} pretrazi prema vrednostima npr Zanr (nadje ubacene nove values)
 */