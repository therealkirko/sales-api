<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\BusinessResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Business;
use App\Models\User;

class BusinessController extends Controller
{
    public function index()
    {
        $user = User::with('business')->findOrFail(Auth::id());

        if(!$user) {
            return response()->json([
                'type' => 'error',
                'message' => 'Oops!! We just rejected your request. Login first.'
            ], 401);
        }

        $business = $user->business;

        return new BusinessResource($business);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'display_name' => 'required',
            'phone' => 'required',
            'email' => 'email',
            'address' => 'string',
            'category' => 'required'
        ]);

        $user = User::findOrFail(Auth::id());
        $data["user_id"] = $user->id;

        $business = Business::create($data);

        return new BusinessResource($business);
    }

    public function update(Request $request, $business_id)
    {
        $data = $request->validate([
            'name' => 'required',
            'display_name' => 'required',
            'phone' => 'required',
            'email' => 'email',
            'address' => 'string',
            'category' => 'required'
        ]);

        $business = Business::find($business_id);

        if (!$business) {
            return response()->json([
                'type' => 'error',
                'message' => 'Oops!! We could not find a record that matches.'
            ], 401);
        }

        $business->update($data);

        return response()->json([
            'type' => 'sucess',
            'message' => 'You have successfully updated the business'
        ]);
    }
}
