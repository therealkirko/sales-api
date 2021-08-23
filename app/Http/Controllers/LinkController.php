<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Client;
class LinkController extends Controller
{
    public function index(Request $request)
    {
        $id =  $request->route('id');
        $order = Order::find($id);

        if(!$order){
            return "Order not found";
        }

        $client = Client::find($order->client_id);

        return view('link.order', compact('order', 'client'));
    }
}
