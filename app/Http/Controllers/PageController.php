<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Box;
class PageController extends Controller
{
    public function index()
    {
        $boxes=Box::all();
        
        return view('home',compact('boxes'));
    }
}
