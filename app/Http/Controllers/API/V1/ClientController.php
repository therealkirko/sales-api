<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Resources\ClientResource;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\User;

class ClientController extends Controller
{
    public function index()
    {
        $user = User::with('business')->find(Auth::id());

        $clients = Client::where('business_id', $user->business->id)->get();
        
        return response()->json([
            'clients' => $clients
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required'
        ]);

        $user = User::with('business')->find(Auth::id());
        $data['business_id'] = $user->business->id;

        Client::create($data);

        return response()->json([
            'type' => 'Success',
            'message' => 'You have successfully created a new client.'
        ]);
    }
}
