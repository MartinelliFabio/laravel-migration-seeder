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
        $trains = Train::where('data_partenza', today()->toDateString())->orderBy('data_partenza')->get();
        return view('layouts.app', compact('trains'));
    }
    
}
