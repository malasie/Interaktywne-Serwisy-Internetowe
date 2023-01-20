<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceSimpleController extends Controller
{
    public function index(Request $request) {
        return view('place-simple');
    }
}
