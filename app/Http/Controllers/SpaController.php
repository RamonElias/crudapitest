<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpaController extends Controller
{
   public function index()
   {
      // return 'SpaController';
      return view('spa');
   }
}

