<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Order;
use App\Models\User;

class OrderController extends Controller
{
    public function index()
    {
        $user = User::with('business')->find(Auth::id());

        $orders =  Order::withCount('items')->where('business_id', $user->business->id)->get();

        return response()->json([
            'orders' => $orders
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'delivery' => 'required',
            'name' => 'required',
            'phone' => 'required'
        ]);

        $user_with_business = User::with('business')->find(Auth::id());

        $client_user = Client::where('phone', $request->phone)->first();

        if($client_user) {
            $client = $client_user;
        } else {

            $client = Client::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'business_id' => $user_with_business->business->id,
            ]);
        }

        // Order data
        $order_data['delivery'] = $data['delivery'];
        $order_data['business_id'] = $user_with_business->business->id;
        $order_data['client_id'] = $client->id;
        $order_data['status'] = 'pending';

        $order = Order::create($order_data);

        return new OrderResource($order);
    }
}
