<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SanphamController extends Controller
{
    function index (){
        return view ('giaodien/layout/index');
    }
    
}
