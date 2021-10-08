<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Lot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $lastLots = Lot::orderBy('id', 'desc')->take(5)->get();
        return view('home', compact('lastLots'));
    }

    public function showUserLots()
    {
        $userId = Auth::id();
        $lots = Lot::where('seller_id', $userId)->get();
        return view('user-lots', compact('lots'));
    }

    public function showBids()
    {
        $userId = Auth::id();
        $userBids = Bid::where('buyer_id', $userId)->get();
        return view('user-bids', compact('userBids'));
    }
}
