<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VFAController extends Controller
{
    public function index() {
        return view('VFA');
    }
}
