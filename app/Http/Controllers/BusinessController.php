<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    public function index(){
        // $business = Business::find(5)->update([
        //     'name' => 'Teste',
        //     'email' => 'dasdasd@dominio.com'
        // ]);

        // $business = Business::find(5);
        // $business->name = 'Jon Snow';
        // $business->email = 'jonsnow.com';
        // $business->address = 'Quadra c rua B';

        // $business->save();


        $input = [
            'name' => 'Leticia',
            'email' => 'let@dominio.com'
        ];
        $business = Business::find(5);
        $business->fill($input);
        $business->save();

        dd($business);
    }
}
