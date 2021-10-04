<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function showProducts()
    {
        return view('products');
    }

    public function showAuctions()
    {
        return view('auctions');
    }

    public function showBids()
    {
        return view('bids');
    }
}
