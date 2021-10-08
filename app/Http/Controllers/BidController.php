<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Lot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BidController extends Controller
{
    public function makeBid(Request $request){

        $requestBid = $request->input('bid_price');
        $lotId = $request->input('lot_id');
        $lotPrice = Lot::find($lotId)->price;
        $lastBid = Bid::where('lot_id', $lotId);

        if ($lastBid->count() > 0){
            $lastBid = $lastBid->orderBy('created_at', 'DESC')->first()->bid_price;
        } else {
            $lastBid = $lotPrice;
        }

        if ($requestBid > $lotPrice && $requestBid > $lastBid){
            $bid = new Bid();
            $bid->bid_price = $requestBid;
            $bid->lot_id = $lotId;
            $bid->buyer_id = Auth::id();
            $bid->save();
        } else {
            $request->session()->flash('error', 'Your bid must be greater than the basic price and the last bid');
        }

        return redirect()->back();
    }

    public function deleteBid($id){
        Bid::find($id)->delete();
        return redirect()->back();
    }

}
