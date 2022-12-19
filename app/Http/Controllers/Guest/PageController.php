<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $trains = Train::all();
        return view('layouts.app', compact('trains'));
    }

    public function filtered() {
        $currentDate = Carbon::now()->toDateString();
        $trains = Train::all()->where('data_partenza', $currentDate);
        return view('layouts.app', compact('trains'));
    }
    
}
