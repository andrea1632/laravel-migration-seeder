<?php

namespace App\Http\Controllers;

use App\Model\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $trains = Train::where( 'orario_di_partenza', '>=', date("Y/m/d") )->get();
        return view('welcome',compact('trains'));
        dd($trains);
    }
}
