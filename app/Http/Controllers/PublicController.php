<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    // definiisce la root della homepage
    public function welcome() {
        return view('welcome');
    }
}
