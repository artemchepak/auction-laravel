<?php

namespace App\Http\Controllers;

use App\Models\Lot;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    public function index()
    {
        $lastLots = Lot::orderBy('id', 'desc')->take(5)->get();
        return view('home', compact('lastLots'));
    }

    public function showUserLots()
    {
        return view('user-lots');
    }

    public function showBids()
    {
        return view('bids');
    }
}
