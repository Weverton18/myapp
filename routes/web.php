<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Http\Request;
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

Route::get('/request', function(Request $request){
    // $r = $request->all();
    // $r = $request->query('keyword');
    // $r = $request->input('keyword');
    // $r = $request->path();
    // $r = $request->url();
    // $r = $request->fullUrl();
    // $r = $request->header();
    // $r = $request->whenHas('keyword', function($input){
    //     dd('x', $input);
    // });

    // $r = $request->whenFilled('keyword', function($input){
    //     dd('x', $input);
    // });

    // if($r){
    //     dd('Faça alguma coisa!');
    // }

    $r = $request->ip();

    dd($r);
    return 'x';
});

Route::get('user/{user}', [UserController::class, 'show']);

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
