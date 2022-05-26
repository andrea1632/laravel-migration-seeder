<?php

namespace App\Http\Controllers;

use App\Model\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('welcome');
    }
}
