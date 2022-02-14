<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ebook;
use App\Models\Order;
use Carbon\Carbon;

class DetailsController extends Controller
{
    public function index($idx){
        $details = Ebook::where('ebook_id', $idx)->first();
        return view('details', compact('details'));
    }

    public function rent(Request $request){
        $order = Order::where('account_id', auth()->user()->account_id)->where('ebook_id', $request->ebook_id)->first();

        if($order==null){
            $today = Carbon::now()->format('Y-m-d');
            $temp['account_id'] = auth()->user()->account_id;
            $temp['ebook_id'] = $request->ebook_id;
            $temp['order_date'] = $today;
           
            Order::create($temp);
            return redirect()->route('cart');
        }else{
            return back()->with('Error', trans('string.BookExist'));
        }

    }

}
