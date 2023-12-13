<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Support\Carbon;

class PageController extends Controller
{
    public function index(){
        $today = Carbon::today();
        $trains = Train::where('date', '>=', $today)->get();
        

        return view('index', compact('trains', 'today'));
    }
}
