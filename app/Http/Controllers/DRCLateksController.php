<?php

namespace App\Http\Controllers;

use App\Models\Datakriteria;
use Illuminate\Http\Request;

class DRCLateksController extends Controller
{
    public function index() {
        $datakriteria = Datakriteria::all();
        return view('DRCLateks', compact('datakriteria'));
    }
    
}


