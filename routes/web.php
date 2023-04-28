<?php

use App\Models\User;
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

Route::get('user/{user}', function(User $user){
    return $user;
});

// Route::get('user/{user:email}', function(User $user){
//     return $user;
// });

Route::prefix('usuarios')->group(function(){
    Route::get('', function (){
        return 'usuarios';
    })->name('usuarios');

    Route::get('/{id}', function (){
        return 'Mostrar detalhes';
    })->name('usuarios.show');

    Route::get('/{id}/tags', function (){
        return 'Tags do Usuário';
    })->name('usuarios.tags');
});

Route::get('/a-empresa/{string?}', function ($string = null) {
    return $string;
    // return view('welcome');
})->name('a-empresa');

Route::get('/users/{paramA}/{paramB}', function ($paramB, $paramA) {
    return $paramA .' - '.$paramB;
    // return view('welcome');
});
