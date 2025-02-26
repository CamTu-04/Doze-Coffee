<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function Bakery(){
        return view('pages.banh');
    }
    public function Coffee(){
        return view('pages.coffee');
    }
}
