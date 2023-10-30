<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    //

    public function index(){
        // $latest_trains = Train::orderByDesc('id')->get();
        $latest_trains = Train::where('times_start', '>=', 15.00)->get();

        return view('welcome', compact('latest_trains'));
    }
}
