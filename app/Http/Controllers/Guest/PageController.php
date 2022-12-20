<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $trains = Train::all();
        return view('layouts.app', compact('trains'));
    }

    public function filtered() {
        $trains = Train::all()->where('data_partenza', today()->toDateString());
        return view('layouts.app', compact('trains'));
    }
    
}
