<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    
       public function index(){
       return view('content.corehuman.Performance-view');
   }
}
