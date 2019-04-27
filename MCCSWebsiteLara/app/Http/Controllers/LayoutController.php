<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    function show(){
        $weblist=[new App\Link("home","/"),new App\Link("student profile","/banner")];
        return view('banner',['weblist'=>$weblist]);
    }
}
