<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){
        return view('index');
    }

    public function qr(){
      return view('qr');
    }
}
