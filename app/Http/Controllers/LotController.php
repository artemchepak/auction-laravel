<?php

namespace App\Http\Controllers;

use App\Models\Lot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LotController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $lots = Lot::all();
        return view('lots', compact('lots'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $sellerId = Auth::id();
        return view('add-lot', ['seller_id' => $sellerId]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $image = $request->file('image');
        $imagePath = $image->store('products');

        $lot= new Lot();
        $lot->title = $request->input('title');
        $lot->description = $request->input('description');
        $lot->condition = $request->input('condition');
        $lot->image = $imagePath;
        $lot->price = $request->input('price');
        $lot->buy_now_price = $request->input('buynowprice');
        $lot->auction_end_date = $request->input('enddate');
        $lot->seller_id = $request->input('seller_id');
        $lot->save();

        return redirect()->route('lots.index');
    }

    /**
     * @param Lot $lot
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Lot $lot)
    {
        $lot= Lot::find($lot->id);
        $bids = Lot::find($lot->id)->bids()->get();
        return view('lot-page', compact('lot', 'bids'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lot  $lot
     * @return \Illuminate\Http\Response
     */
    public function edit(Lot $lot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lot  $lot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lot $lot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lot  $lot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lot $lot)
    {
        //
    }
}
