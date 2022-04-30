<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResources([
    'writers'=>WriterController::class,
    'genres'=>GenreController::class
]);

/*

GET  /api/writers - vrati sve pisce iz baze (json format) - index iz WriterController - a
GET /api/writers/{id} - vrati pisca sa zadatim id - jem - show metoda
POST /api/writers - kreiraj pisca na osnovu tela zahteva - store
PUT/PATCH /api/writers/{id} - izmeni pisca sa datim id -jem podacima koji se nalaze u telu zahteva - update
DELETE /api/writers/{id} obrisi pisca sa zadatim id - jem - destroy
 */