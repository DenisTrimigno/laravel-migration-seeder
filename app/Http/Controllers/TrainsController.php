<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainsController extends Controller
{
    public function index (){

        $trains = Train::where('data_partenza', '>=', now ())->get();
        dd($trains);
         return view('welcome');
    }
}
