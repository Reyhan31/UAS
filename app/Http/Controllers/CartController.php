<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class CartController extends Controller
{
    public function index(){
        $order = Order::where('account_id', auth()->user()->account_id)->get();
        return view('cart', compact('order'));
    }

    public function delete(Request $request){
        Order::where('order_id', $request->order_id)->delete();
        return redirect()->route('cart');
    }

    public function checkout(){
        $order = Order::where('account_id', auth()->user()->account_id)->delete();
        return view('index')->with('Msg', trans('string.notif.success'));
    }
}
